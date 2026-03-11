@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

    <!-- Total Orders -->
    <div class="bg-white p-6 rounded-xl border shadow-sm">
        <div class="flex justify-between items-center mb-2">
            <p class="text-xs tracking-wider text-gray-500 uppercase">Total Orders</p>
            <span class="material-symbols-outlined text-green-500">shopping_cart</span>
        </div>
        <div class="flex items-center gap-2">
            <h3 class="text-2xl font-bold">{{ $totalOrders }}</h3>
            <span class="text-xs bg-green-100 text-green-600 px-2 py-0.5 rounded font-semibold">
                ↑ {{ $orderGrowth }}%
            </span>
        </div>
        <p class="text-xs text-gray-400 mt-2">vs. last month ({{ $lastMonthOrders }})</p>
    </div>

    <!-- Total Revenue -->
    <div class="bg-white p-6 rounded-xl border shadow-sm">
        <div class="flex justify-between items-center mb-2">
            <p class="text-xs tracking-wider text-gray-500 uppercase">Total Revenue</p>
            <span class="material-symbols-outlined text-green-500">payments</span>
        </div>
        <div class="flex items-center gap-2">
            <h3 class="text-2xl font-bold">₹{{ number_format($totalRevenue,2) }}</h3>
            <span class="text-xs bg-green-100 text-green-600 px-2 py-0.5 rounded font-semibold">
                ↑ {{ $revenueGrowth }}%
            </span>
        </div>
        <p class="text-xs text-gray-400 mt-2">Target reached: {{ $targetPercent }}%</p>
    </div>

    <!-- Total Products -->
    <div class="bg-white p-6 rounded-xl border shadow-sm">
        <div class="flex justify-between items-center mb-2">
            <p class="text-xs tracking-wider text-gray-500 uppercase">Total Products</p>
            <span class="material-symbols-outlined text-green-500">inventory</span>
        </div>
        <div class="flex items-center gap-2">
            <h3 class="text-2xl font-bold">{{ $totalProducts }}</h3>
            <span class="text-xs bg-red-100 text-red-600 px-2 py-0.5 rounded font-semibold">
                ↓ {{ $productDrop }}%
            </span>
        </div>
        <p class="text-xs text-gray-400 mt-2">{{ $retiredProducts }} Seasonal items retired</p>
    </div>

    <!-- New Customers -->
    <div class="bg-white p-6 rounded-xl border shadow-sm">
        <div class="flex justify-between items-center mb-2">
            <p class="text-xs tracking-wider text-gray-500 uppercase">New Customers</p>
            <span class="material-symbols-outlined text-green-500">person_add</span>
        </div>
        <div class="flex items-center gap-2">
            <h3 class="text-2xl font-bold">{{ $totalCustomers }}</h3>
            <span class="text-xs bg-green-100 text-green-600 px-2 py-0.5 rounded font-semibold">
                ↑ {{ $customerGrowth }}%
            </span>
        </div>
        <p class="text-xs text-gray-400 mt-2">Highest growth since Jan</p>
    </div>

</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-8">

    <!-- Monthly Sales Chart -->
    <div class="lg:col-span-2 bg-white p-6 rounded-xl border shadow-sm">
        <div class="flex justify-between items-center mb-4">
            <div>
                <h3 class="text-lg font-bold">Monthly Sales Overview</h3>
                <p class="text-sm text-gray-500">Revenue performance over the last 6 months</p>
            </div>
            <select id="rangeSelect" class="bg-gray-50 text-sm rounded px-3 py-1">
                <option value="6months">Last 6 Months</option>
                <option value="year">This Year</option>
            </select>
        </div>

        <canvas id="salesChart" height="120"></canvas>
    </div>

    <!-- Right Column -->
    <div class="space-y-6">

        <!-- Low Stock -->
        <div class="bg-white p-5 rounded-xl border shadow-sm">
            <div class="flex justify-between mb-4">
                <h4 class="font-bold">Low Stock Alert</h4>
                <span class="text-xs bg-orange-100 text-orange-600 px-2 py-0.5 rounded">
                    {{ $lowStockProducts->count() }} ITEMS
                </span>
            </div>

           @if($lowStockProducts->isNotEmpty())
             @foreach($lowStockProducts as $product)
                <div class="flex justify-between items-center mb-3">
                    <div>
                        <p class="font-semibold">{{ $product->name }}</p>
                        <p class="text-xs text-gray-500">SKU: {{ $product->slug }}</p>
                    </div>
                    <div class="text-right">
                        <p class="text-red-500 font-bold">{{ $product->stock }} left</p>
                        <p class="text-xs text-gray-400">Restock soon</p>
                    </div>
                </div>
                @endforeach
                @else  <p class="text-sm text-gray-400">No low stock items</p>
                @endif

            <a href="{{ route('products.index') }}"
               class="block text-center mt-4 bg-green-100 text-green-600 py-2 rounded font-semibold">
                View Inventory
            </a>
        </div>

        <!-- Distributor Requests -->
        <div class="bg-white p-5 rounded-xl border shadow-sm">

             <h4 class="font-bold mb-4">Latest Distributor Requests</h4>

            @forelse($distributors as $d)
                    <div class="flex items-start gap-3 mb-4">
                        <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center">
                            <span class="material-symbols-outlined text-gray-400">store</span>
                        </div>
                        <div class="flex-1">
                            <p class="font-semibold">{{ $d->company_name }}</p>
                            <p class="text-xs text-gray-500">{{ $d->city }}</p>
                            <div class="mt-2 flex gap-2">
                                <button class="bg-green-500 text-white text-xs px-3 py-1 rounded">Approve</button>
                                <button class="bg-gray-100 text-gray-600 text-xs px-3 py-1 rounded">View</button>
                            </div>
                        </div>
                    </div>
                @empty
                <p class="text-sm text-gray-400">No distributor requests yet</p>
                @endforelse
        </div>

    </div>
</div>
<div class="bg-white rounded-xl border shadow-sm mt-10 overflow-hidden">
    <div class="flex justify-between items-center px-6 py-4 border-b">
        <h3 class="font-bold text-lg">Recent Orders</h3>
        <a href="{{ route('orders.index') }}" class="text-green-600 font-semibold text-sm">View All Orders</a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 text-gray-500 uppercase text-xs">
                <tr>
                    <th class="px-6 py-3">Order ID</th>
                    <th class="px-6 py-3">Customer</th>
                    <th class="px-6 py-3">Items</th>
                    <th class="px-6 py-3">Amount</th>
                    <th class="px-6 py-3">Status</th>
                    <th class="px-6 py-3">Invoice</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                @foreach($recentOrders as $order)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-3 font-semibold">#ORD-{{ $order->id }}</td>
                    <td class="px-6 py-3">{{ $order->user->name ?? 'Guest' }}</td>
                    <td class="px-6 py-3 text-gray-700">
                        @if($order->items && $order->items->count())
                            {{ $order->items->map(fn($i) => $i->product->name)->implode(', ') }}
                        @else
                            <span class="text-gray-400 text-xs">No items</span>
                        @endif
                    </td>
                    <td class="px-6 py-3 font-bold">₹{{ number_format($order->total_amount,2) }}</td>

                    <td class="px-6 py-3">
                        @php
                            $statusColor = match($order->status) {
                                'pending' => 'bg-yellow-100 text-yellow-700',
                                'processing' => 'bg-blue-100 text-blue-700',
                                'shipped' => 'bg-purple-100 text-purple-700',
                                'delivered' => 'bg-green-100 text-green-700',
                                'cancelled' => 'bg-red-100 text-red-700',
                                default => 'bg-gray-100 text-gray-600',
                            };
                        @endphp
                        <span class="px-3 py-1 rounded-full text-xs font-semibold {{ $statusColor }}">
                            {{ ucfirst($order->status) }}
                        </span>
                    </td>

                    <td class="px-6 py-3">
                        <a href="{{ route('orders.invoice', $order->id) }}"
                           class="text-green-600 font-semibold text-sm hover:underline">
                            View Invoice
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



@endsection


@section('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {

    const ctx = document.getElementById('salesChart');
    const rangeSelect = document.getElementById('rangeSelect');

    const data6Months = {
        labels: @json($months6),
        data: @json($revenue6)
    };

    const dataYear = {
        labels: @json($monthsYear),
        data: @json($revenueYear)
    };

    let chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: data6Months.labels,
            datasets: [{
                data: data6Months.data,
                borderColor: '#22c55e',
                backgroundColor: 'rgba(34,197,94,0.15)',
                fill: true,
                tension: 0.4,
                pointRadius: 5
            }]
        },
        options: {
            plugins: { legend: { display: false } },
            scales: { y: { beginAtZero: true } }
        }
    });

    rangeSelect.addEventListener('change', function () {
        if (this.value === 'year') {
            chart.data.labels = dataYear.labels;
            chart.data.datasets[0].data = dataYear.data;
        } else {
            chart.data.labels = data6Months.labels;
            chart.data.datasets[0].data = data6Months.data;
        }
        chart.update();
    });

});
</script>
@endsection

