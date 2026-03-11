@extends('layouts.admin')

@section('title','Customer Profile')

@section('content')
<div class="max-w-6xl mx-auto space-y-6">

    <div class="bg-white rounded-xl shadow p-6 flex justify-between items-center">
        <div>
            <h2 class="text-2xl font-bold">{{ $customer->name }}</h2>
            <p class="text-gray-500">{{ $customer->email }}</p>
            <p class="text-gray-500">{{ $customer->phone }}</p>
        </div>

        <form method="POST" action="{{ route('customers.toggleBlock',$customer->id) }}">
            @csrf
            <button class="px-4 py-2 rounded-lg text-white font-semibold
                {{ $customer->is_blocked ? 'bg-green-500' : 'bg-red-500' }}">
                {{ $customer->is_blocked ? 'Unblock Customer' : 'Block Customer' }}
            </button>
        </form>
    </div>

    <div class="grid grid-cols-3 gap-4">
        <div class="bg-white p-4 rounded-lg shadow">
            <p class="text-sm text-gray-500">Total Orders</p>
            <p class="text-2xl font-bold">{{ $customer->orders->count() }}</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow">
            <p class="text-sm text-gray-500">Total Spent</p>
            <p class="text-2xl font-bold">₹{{ $customer->orders->sum('total_amount') }}</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow">
            <p class="text-sm text-gray-500">Status</p>
            <p class="text-2xl font-bold {{ $customer->is_blocked ? 'text-red-500' : 'text-green-500' }}">
                {{ $customer->is_blocked ? 'Blocked' : 'Active' }}
            </p>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow">
        <div class="p-4 border-b font-semibold">Order History</div>

        <table class="w-full text-left">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-xs font-bold uppercase">Order ID</th>
                    <th class="px-6 py-3 text-xs font-bold uppercase">Date</th>
                    <th class="px-6 py-3 text-xs font-bold uppercase">Amount</th>
                    <th class="px-6 py-3 text-xs font-bold uppercase">Status</th>
                    <th class="px-6 py-3 text-xs font-bold uppercase text-right">View</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                @foreach($customer->orders as $order)
                <tr>
                    <td class="px-6 py-3">#{{ $order->order_number }}</td>
                    <td class="px-6 py-3">{{ $order->created_at->format('d M Y') }}</td>
                    <td class="px-6 py-3 font-bold">₹{{ $order->total_amount }}</td>
                    <td class="px-6 py-3">
                        <span class="px-3 py-1 rounded-full text-xs
                        {{ $order->status=='pending'?'bg-orange-100 text-orange-600':
                           ($order->status=='shipped'?'bg-blue-100 text-blue-600':'bg-green-100 text-green-600') }}">
                           {{ ucfirst($order->status) }}
                        </span>
                    </td>
                    <td class="px-6 py-3 text-right">
                        <a href="{{ route('orders.show',$order->id) }}" class="text-primary font-semibold">View</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection
