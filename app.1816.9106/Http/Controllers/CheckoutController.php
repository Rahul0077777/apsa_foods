<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Str;
class CheckoutController extends Controller
{
    public function placeOrder(Request $request)
    {

    if (auth()->user()->is_admin) {
        return back()->with('error', 'Admin cannot place orders.');
    }
        $request->validate([
            'name'    => 'required',
            'phone'   => 'required',
            'address' => 'required',
            'city'    => 'required',
            'pincode' => 'required',
        ]);

        $subtotal = 0;
        foreach (session('cart') as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }
        $tax = $subtotal * 0.08;
        $grandTotal = $subtotal + $tax;

        $order = Order::create([
            'order_number'    => 'ORD-' . strtoupper(\Illuminate\Support\Str::random(8)),
            'user_id'         => auth()->id(),
            'customer_name'  => $request->name,
            'phone'          => $request->phone,
            'address'        => $request->address . ', ' . $request->city . ' - ' . $request->pincode,
            'total_amount'   => $grandTotal,
            'status'         => 'pending',
            'payment_mode'   => 'COD',
            'payment_status' => 'unpaid',
        ]);

        // 🧹 Cart clear after order placed
        session()->forget('cart');

        return redirect()->route('order.success')
                        ->with('success', 'Order #' . $order->order_number . ' placed successfully!');
    }

}
