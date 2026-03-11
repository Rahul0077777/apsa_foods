@extends('layouts.admin')

@section('title','Orders')

@section('content')
<div class="max-w-7xl mx-auto space-y-6">

    <!-- Heading -->
    <div class="flex justify-between items-center">
        <div>
            <h2 class="text-3xl font-bold">Order Management</h2>
            <p class="text-gray-500">Track and manage all customer orders</p>
        </div>
    </div>

    <!-- Tabs -->
    <div class="bg-white rounded-xl shadow border">
        <div class="flex border-b overflow-x-auto">
            <a href="{{ route('orders.index') }}"
               class="px-5 py-3 font-semibold {{ request('status')=='' ? 'border-b-2 border-primary text-primary' : '' }}">
                All Orders
            </a>
            <a href="{{ route('orders.index',['status'=>'pending']) }}"
               class="px-5 py-3 font-semibold {{ request('status')=='pending' ? 'border-b-2 border-orange-500 text-orange-500' : '' }}">
                Pending
            </a>
            <a href="{{ route('orders.index',['status'=>'shipped']) }}"
               class="px-5 py-3 font-semibold {{ request('status')=='shipped' ? 'border-b-2 border-blue-500 text-blue-500' : '' }}">
                Shipped
            </a>
            <a href="{{ route('orders.index',['status'=>'delivered']) }}"
               class="px-5 py-3 font-semibold {{ request('status')=='delivered' ? 'border-b-2 border-green-500 text-green-500' : '' }}">
                Delivered
            </a>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-gray-50 border-b">
                <tr>
                    <th class="px-6 py-3 text-xs font-bold text-gray-500 uppercase">Order ID</th>
                    <th class="px-6 py-3 text-xs font-bold text-gray-500 uppercase">Customer</th>
                    <th class="px-6 py-3 text-xs font-bold text-gray-500 uppercase">Date</th>
                    <th class="px-6 py-3 text-xs font-bold text-gray-500 uppercase">Amount</th>
                    <th class="px-6 py-3 text-xs font-bold text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-xs font-bold text-gray-500 uppercase text-right">Action</th>
                </tr>
                </thead>
                <tbody class="divide-y">
                @foreach($orders as $order)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-3 font-mono">#{{ $order->order_number }}</td>
                        <td class="px-6 py-3">{{ $order->customer_name }}</td>
                        <td class="px-6 py-3">{{ $order->created_at->format('d M Y') }}</td>
                        <td class="px-6 py-3 font-semibold">₹{{ $order->total_amount }}</td>
                        <td class="px-6 py-3">
                            @if($order->status=='pending')
                                <span class="px-3 py-1 rounded-full text-xs bg-orange-100 text-orange-600 font-bold">Pending</span>
                            @elseif($order->status=='shipped')
                                <span class="px-3 py-1 rounded-full text-xs bg-blue-100 text-blue-600 font-bold">Shipped</span>
                            @elseif($order->status=='delivered')
                                <span class="px-3 py-1 rounded-full text-xs bg-green-100 text-green-600 font-bold">Delivered</span>
                            @endif
                        </td>
                        <td class="px-6 py-3 text-right">
                            <a href="{{ route('orders.show',$order->id) }}" class="text-primary font-semibold">View</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="p-4 border-t">
            {{ $orders->links() }}
        </div>
    </div>

</div>
@endsection
