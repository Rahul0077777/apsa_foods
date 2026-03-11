<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use App\Models\Partnership;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // KPI
        $totalOrders   = Order::count();
        $lastMonthOrders = Order::whereMonth('created_at', now()->subMonth()->month)->count();
        $orderGrowth = 12.5;

        $totalRevenue = Order::sum('total_amount');
        $revenueGrowth = 8.2;
        $targetPercent = 92;

        $totalProducts = Product::count();
        $productDrop = 2.1;
        $retiredProducts = 3;

        $totalCustomers = User::where('is_admin', 0)->count();
        $customerGrowth = 24.0;

        // Low stock
        $lowStockProducts = Product::where('stock', '<=', 15)->take(3)->get();

        // Latest partnership / distributor requests
        $distributors = Partnership::latest()->take(3)->get();

        /* ---------------- Last 6 Months Data ---------------- */
        $last6MonthsData = Order::where('created_at', '>=', now()->subMonths(5)->startOfMonth())
            ->get()
            ->groupBy(fn($order) => $order->created_at->format('n')) // returns 1-12
            ->map(fn($group) => $group->sum('total_amount'));

        $months6 = [];
        $revenue6 = [];

        for ($i = 5; $i >= 0; $i--) {
            $date = Carbon::now()->subMonths($i);
            $months6[] = $date->format('M');

            $total = $last6MonthsData->get((string)$date->month);
            $revenue6[] = $total ? round($total, 2) : 0;
        }

        /* ---------------- This Year Data (Jan–Dec) ---------------- */
        $yearData = Order::whereYear('created_at', now()->year)
            ->get()
            ->groupBy(fn($order) => $order->created_at->format('n'))
            ->map(fn($group) => $group->sum('total_amount'));

        $monthsYear = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
        $revenueYear = [];

        foreach (range(1,12) as $m) {
            $total = $yearData->get((string)$m);
            $revenueYear[] = $total ? round($total, 2) : 0;
        }

        // Latest 5 Orders
        $recentOrders = Order::with(['user', 'items.product'])
        ->latest()
        ->take(5)
        ->get();


        // (distributors already fetched above from Partnership model)

        return view('admin.dashboard', compact(
            'totalOrders','lastMonthOrders','orderGrowth',
            'totalRevenue','revenueGrowth','targetPercent',
            'totalProducts','productDrop','retiredProducts',
            'totalCustomers','customerGrowth',
            'lowStockProducts','distributors',
            'months6','revenue6','monthsYear','revenueYear',
            'recentOrders','distributors',
        ));
    }

    public function profile()
    {
        $user = auth()->user();
        return view('admin.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:20',
        ]);

        $user->name  = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();

        return back()->with('success', 'Profile updated successfully.');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password'         => 'required|min:8|confirmed',
        ]);

        $user = auth()->user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect.']);
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('success', 'Password changed successfully.');
    }

    public function partnershipRequests()
    {
        $partnerships = Partnership::latest()->paginate(15);
        return view('admin.partnership-requests', compact('partnerships'));
    }

    public function destroyPartnership($id)
    {
        Partnership::findOrFail($id)->delete();
        return back()->with('success', 'Partnership request deleted.');
    }
}

