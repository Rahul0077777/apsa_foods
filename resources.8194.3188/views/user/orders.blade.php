@extends('user.dashboard_layout')

@section('dashboard-content')
<h1 class="text-2xl font-bold mb-6">My Orders</h1>

<div class="bg-white rounded-xl shadow overflow-hidden">
    <table class="w-full">
        <thead class="bg-soft-green">
            <tr>
                <th class="p-3 text-left">Order ID</th>
                <th class="p-3 text-left">Date</th>
                <th class="p-3 text-left">Status</th>
                <th class="p-3 text-left">Amount</th>
                <th class="p-3 text-left">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr class="border-b">
                <td class="p-3">#{{ $order->id }}</td>
                <td class="p-3">{{ $order->created_at->format('d M Y') }}</td>
                <td class="p-3">{{ $order->status }}</td>
                <td class="p-3">₹{{ $order->total_amount }}</td>
                <td class="p-3">
                    <a href="{{ route('user.orders.view', $order->id) }}" class="text-primary font-semibold">
                        View
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection