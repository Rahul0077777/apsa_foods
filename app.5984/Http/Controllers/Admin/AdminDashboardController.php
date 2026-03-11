<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use Carbon\Carbon;

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

        // Distributor (future)
        $distributors = collect();

        /* ---------------- Last 6 Months Data ---------------- */
        $last6MonthsData = Order::selectRaw('MONTH(created_at) as m, SUM(total_amount) as total')
            ->where('created_at', '>=', now()->subMonths(5)->startOfMonth())
            ->groupBy('m')
            ->get();

        $months6 = [];
        $revenue6 = [];

        for ($i = 5; $i >= 0; $i--) {
            $date = Carbon::now()->subMonths($i);
            $months6[] = $date->format('M');

            $row = $last6MonthsData->firstWhere('m', $date->month);
            $revenue6[] = $row ? round($row->total, 2) : 0;
        }

        /* ---------------- This Year Data (Jan–Dec) ---------------- */
        $yearData = Order::selectRaw('MONTH(created_at) as m, SUM(total_amount) as total')
            ->whereYear('created_at', now()->year)
            ->groupBy('m')
            ->get();

        $monthsYear = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
        $revenueYear = [];

        foreach (range(1,12) as $m) {
            $row = $yearData->firstWhere('m', $m);
            $revenueYear[] = $row ? round($row->total, 2) : 0;
        }

        // Latest 5 Orders
        $recentOrders = Order::with(['user', 'items.product'])
        ->latest()
        ->take(5)
        ->get();


        // Latest Distributor Requests (jab table ban jaaye)
        // $distributors = \App\Models\Distributor::latest()->take(2)->get(); // optional for now
        $distributors = collect();

       return view('admin.dashboard', compact(
            'totalOrders','lastMonthOrders','orderGrowth',
            'totalRevenue','revenueGrowth','targetPercent',
            'totalProducts','productDrop','retiredProducts',
            'totalCustomers','customerGrowth',
            'lowStockProducts','distributors',
            'months6','revenue6','monthsYear','revenueYear',
            'recentOrders',
'distributors',
        ));
    }
}
