<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CustomerAddress;
use Illuminate\Http\Request;
use App\Models\Order;

class UserDashboardController extends Controller
{
//    public function index()
//     {
//         $user = auth()->user();
//         $addresses = CustomerAddress::where('user_id', $user->id)->get();

//         return view('user.dashboard', compact('user', 'addresses'));
//     }

    public function index()
    {
        $user = auth()->user();

        $orders = Order::where('user_id', $user->id)->latest()->take(5)->get();
        $totalOrders = Order::where('user_id', $user->id)->count();
        $defaultAddress = CustomerAddress::where('user_id',$user->id)
                            ->where('is_default',1)->first();
                            $addresses = CustomerAddress::where('user_id', $user->id)->get();

        return view('user.dashboard', compact(
            'user',
            'orders',
            'totalOrders',
            'defaultAddress',
             'addresses' 
        ));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'phone'      => 'nullable'
        ]);

        $user = auth()->user();
        $user->name = $request->first_name . ' ' . $request->last_name;
        $user->phone = $request->phone;
        $user->save();

        return back()->with('success', 'Profile updated successfully');
    }

    public function profile()
    {
        $user = auth()->user();
        $addresses = CustomerAddress::where('user_id', $user->id)->get();

        return view('user.dashboard', compact('user','addresses'));
    }
}