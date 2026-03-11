<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $status = $request->get('status');

        $orders = Order::when($status, function ($q) use ($status) {
            $q->where('status', $status);
        })->latest()->paginate(10);

        return view('admin.orders.index', compact('orders', 'status'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $order = \App\Models\Order::with('items.product')->findOrFail($id);
        return view('admin.orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function updateStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->status = $request->status;
        $order->save();

        return back()->with('success','Order status updated successfully');
    }

    public function invoice($id)
    {
        $order = Order::with('items.product')->findOrFail($id);
        $pdf = Pdf::loadView('admin.orders.invoice', compact('order'));
        return $pdf->download('Invoice-'.$order->order_number.'.pdf');
    }
    
    public function placeOrder(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'pincode' => 'required',
        ]);

        $order = Order::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'pincode' => $request->pincode,
            'total' => session('cart_total'),
            'payment_method' => 'COD',
            'status' => 'Pending'
        ]);

        session()->forget('cart');

        return redirect()->route('order.success')->with('success', 'Order placed successfully!');
    }
}
