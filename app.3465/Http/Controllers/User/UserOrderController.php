<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
class UserOrderController extends Controller
{
   public function index()
    {
        $orders = Order::where('user_id', auth()->id())
                        ->latest()
                        ->get();

        return view('user.orders', compact('orders'));
    }

    // public function show($id)
    // {
    //     $order = Order::where('id', $id)
    //                   ->where('user_id', auth()->id())
    //                   ->firstOrFail();

    //     return view('user.order-details', compact('order'));
    // }
    public function show($id)
    {
        $order = Order::with('items.product','address')
                    ->where('user_id', auth()->id())
                    ->findOrFail($id);

        return view('user.order-view', compact('order'));
    }
}
