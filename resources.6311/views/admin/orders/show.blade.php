@extends('layouts.admin')

@section('title','Order Details')

@section('content')
<div class="bg-white rounded-xl shadow p-6 space-y-6">

    <div class="flex justify-between items-center">
        <div>
            <h2 class="text-2xl font-bold">Order #{{ $order->order_number }}</h2>
            <p class="text-gray-500">{{ $order->created_at->format('d M Y, h:i A') }}</p>
        </div>
        <a href="{{ route('orders.invoice',$order->id) }}" class="bg-primary text-white px-4 py-2 rounded-lg">
            Download Invoice
        </a>
    </div>

    <div class="grid grid-cols-2 gap-4">
        <div>
            <h3 class="font-semibold">Customer</h3>
            <p>{{ $order->customer_name }}</p>
            <p>{{ $order->phone }}</p>
            <p>{{ $order->address }}</p>
        </div>

        <div>
            <h3 class="font-semibold">Order Info</h3>
            <p>Status: <span class="font-bold">{{ ucfirst($order->status) }}</span></p>
            <p>Payment: {{ $order->payment_mode }} ({{ $order->payment_status }})</p>
            <p>Total: ₹{{ $order->total_amount }}</p>
        </div>
    </div>

    <table class="w-full border mt-4">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-2 text-left">Product</th>
                <th class="p-2">Price</th>
                <th class="p-2">Qty</th>
                <th class="p-2">Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->items as $item)
            <tr class="border-t">
                <td class="p-2">{{ $item->product->name }}</td>
                <td class="p-2">₹{{ $item->price }}</td>
                <td class="p-2 text-center">{{ $item->quantity }}</td>
                <td class="p-2">₹{{ $item->subtotal }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <form method="POST" action="{{ route('orders.updateStatus',$order->id) }}" class="flex gap-3 mt-4">
        @csrf
        @method('PUT')
        <select name="status" class="border rounded px-3 py-2">
            <option value="pending" {{ $order->status=='pending'?'selected':'' }}>Pending</option>
            <option value="shipped" {{ $order->status=='shipped'?'selected':'' }}>Shipped</option>
            <option value="delivered" {{ $order->status=='delivered'?'selected':'' }}>Delivered</option>
            <option value="cancelled" {{ $order->status=='cancelled'?'selected':'' }}>Cancelled</option>
        </select>
        <button class="bg-primary text-white px-4 py-2 rounded">Update Status</button>
    </form>

</div>
@endsection
