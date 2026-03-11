@extends('layouts.admin')

@section('title','Customers')

@section('content')
<div class="max-w-7xl mx-auto space-y-6">

    <div class="flex justify-between items-center">
        <div>
            <h2 class="text-3xl font-bold">Customers</h2>
            <p class="text-gray-500">All registered customers with order history</p>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow border">

        <div class="p-4 border-b flex justify-between items-center">
            <input type="text" placeholder="Search customer..." class="border rounded-lg px-4 py-2 w-1/3">
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-gray-50 border-b">
                <tr>
                    <th class="px-6 py-3 text-xs font-bold text-gray-500 uppercase">Customer</th>
                    <th class="px-6 py-3 text-xs font-bold text-gray-500 uppercase">Phone</th>
                    <th class="px-6 py-3 text-xs font-bold text-gray-500 uppercase">Orders</th>
                    <th class="px-6 py-3 text-xs font-bold text-gray-500 uppercase">Total Spent</th>
                    <th class="px-6 py-3 text-xs font-bold text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-xs font-bold text-gray-500 uppercase text-right">Action</th>
                </tr>
                </thead>
                <tbody class="divide-y">
                @foreach($customers as $customer)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-3 font-semibold">{{ $customer->name }}</td>
                        <td class="px-6 py-3">{{ $customer->phone ?? 'N/A' }}</td>
                        <td class="px-6 py-3">{{ $customer->orders_count }}</td>
                        <td class="px-6 py-3 font-bold">₹{{ $customer->orders_sum_total_amount ?? 0 }}</td>
                        <td class="px-6 py-3">
                            @if($customer->is_blocked)
                                <span class="px-3 py-1 rounded-full text-xs bg-red-100 text-red-600 font-bold">Blocked</span>
                            @else
                                <span class="px-3 py-1 rounded-full text-xs bg-green-100 text-green-600 font-bold">Active</span>
                            @endif
                        </td>
                        <td class="px-6 py-3 text-right">
                            <a href="{{ route('customers.show',$customer->id) }}" class="text-primary font-semibold">View</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="p-4 border-t">
            {{ $customers->links() }}
        </div>

    </div>

</div>
@endsection
