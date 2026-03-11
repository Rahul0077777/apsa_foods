@extends('layouts.admin')

@section('title', 'Product Inventory')

@section('content')

<div class="bg-white dark:bg-zinc-900 rounded-xl shadow p-6">

    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-bold">Product Inventory</h2>

        <a href="{{ route('products.create') }}"
           class="bg-primary text-black px-4 py-2 rounded font-semibold hover:bg-green-500 transition">
            + Add Product
        </a>
    </div>

    <!-- Search -->
    <div class="mb-4">
        <input type="text" placeholder="Search products..."
               class="w-full border rounded px-4 py-2 focus:ring focus:ring-primary">
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-sm border">
            <thead class="bg-gray-100 dark:bg-zinc-800">
                <tr>
                    <th class="p-3 text-left">Image</th>
                    <th class="p-3 text-left">Name</th>
                    <th class="p-3 text-left">Price</th>
                    <th class="p-3 text-left">Stock</th>
                    <th class="p-3 text-left">Status</th>
                    <th class="p-3 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                <tr class="border-t hover:bg-gray-50 dark:hover:bg-zinc-800">

                    <td class="p-3">
                        <img src="{{ asset('storage/'.$product->image) }}"
                             class="w-12 h-12 rounded object-cover">
                    </td>

                    <td class="p-3 font-medium">{{ $product->name }}</td>

                    <td class="p-3">₹{{ $product->price }}</td>

                    <td class="p-3">
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-primary h-2 rounded-full"
                                 style="width: {{ min(100, ($product->stock / 100) * 100) }}%"></div>
                        </div>
                        <span class="text-xs">{{ $product->stock }} in stock</span>
                    </td>

                    <td class="p-3">
                        <span class="px-2 py-1 rounded text-xs
                        {{ $product->status ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                            {{ $product->status ? 'Active' : 'Inactive' }}
                        </span>
                    </td>

                    <td class="p-3 flex gap-2">
                        <a href="{{ route('products.edit', $product->id) }}"
                           class="px-3 py-1 bg-blue-500 text-white rounded text-xs">Edit</a>

                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Delete this product?')"
                                    class="px-3 py-1 bg-red-500 text-white rounded text-xs">
                                Delete
                            </button>
                        </form>
                    </td>

                </tr>
                @empty
                <tr>
                    <td colspan="6" class="p-6 text-center text-gray-500">
                        No products found.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $products->links() }}
    </div>

</div>

@endsection
