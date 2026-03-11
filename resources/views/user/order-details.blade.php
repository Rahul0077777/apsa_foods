@extends('layouts.frontend')
@section('title','Order Details')

@section('content')
<div class="max-w-4xl mx-auto px-6 py-10">

    <h1 class="text-2xl font-bold mb-4">Order #{{ $order->id }}</h1>

    <div class="bg-white rounded-xl shadow p-6 space-y-3">
        <p><strong>Status:</strong> {{ $order->status }}</p>
        <p><strong>Total:</strong> ₹{{ $order->total_amount }}</p>
        <p><strong>Date:</strong> {{ $order->created_at->format('d M Y') }}</p>

        <h3 class="font-bold mt-4">Items:</h3>
        @foreach($order->items as $item)
            <p>{{ $item->product->name }} × {{ $item->quantity }}</p>
        @endforeach
    </div>

</div>
@endsection
