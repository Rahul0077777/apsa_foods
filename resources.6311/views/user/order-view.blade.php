@extends('user.dashboard_layout')

@section('dashboard-content')
<h1 class="text-2xl font-bold mb-6">Order #{{ $order->id }}</h1>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

    <!-- Left: Order Info -->
    <div class="lg:col-span-2 space-y-6">

        <!-- Customer & Address -->
        <div class="bg-white p-6 rounded-xl shadow">
            <h2 class="font-bold text-lg mb-3">Delivery Details</h2>
            <p class="font-semibold">{{ $order->user->name }}</p>
            <p class="text-sm text-gray-600">{{ $order->user->phone }}</p>
            <p class="mt-2">
               {{ $order->address }}, {{ $order->city }},
                {{ $order->state }} - {{ $order->pincode }}
            </p>
        </div>

        <!-- Order Items -->
        <div class="bg-white p-6 rounded-xl shadow">
            <h2 class="font-bold text-lg mb-4">Order Items</h2>

            <div class="divide-y">
                @foreach($order->items as $item)
                <div class="flex justify-between py-3">
                    <div>
                        <p class="font-semibold">{{ $item->product->name }}</p>
                        <p class="text-sm text-gray-500">
                            {{ $item->quantity }} × ₹{{ $item->price }}
                        </p>
                    </div>
                    <div class="font-semibold">
                        ₹{{ $item->quantity * $item->price }}
                    </div>
                </div>
                @endforeach
            </div>

            <div class="flex justify-between font-bold text-lg mt-4 border-t pt-3">
                <span>Total</span>
                <span>₹{{ $order->total_amount }}</span>
            </div>
        </div>
    </div>

    <!-- Right: Order Summary -->
    <div class="space-y-6">

        <div class="bg-white p-6 rounded-xl shadow">
            <h2 class="font-bold text-lg mb-3">Order Summary</h2>
            <p><strong>Order Date:</strong> {{ $order->created_at->format('d M Y') }}</p>
            <p><strong>Status:</strong>
                <span class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded text-sm">
                    {{ ucfirst($order->status) }}
                </span>
            </p>
            <p><strong>Payment:</strong> {{ $order->payment_method ?? 'Cash on Delivery' }}</p>
        </div>

        <a href="{{ route('user.orders') }}"
            class="block text-center bg-primary text-white py-3 rounded-lg font-semibold">
            Back to Orders
        </a>
    </div>

</div>
@endsection
