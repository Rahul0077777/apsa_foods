@extends('layouts.admin')

@section('title', 'Edit Product')

@section('content')

<form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Edit Product</h1>
        <button type="submit"
                class="bg-primary px-6 py-2 rounded font-bold text-black hover:bg-green-500">
            Update Product
        </button>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

        <!-- LEFT -->
        <div class="lg:col-span-2 space-y-6">

            <div class="bg-white p-6 rounded shadow">
                <h2 class="font-bold mb-4">Basic Information</h2>

                <div class="mb-4">
                    <label class="block text-sm font-semibold">Product Name</label>
                    <input type="text" name="name"
                           value="{{ $product->name }}"
                           class="w-full border rounded p-2" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-semibold">Description</label>
                    <textarea name="description"
                              class="w-full border rounded p-2"
                              rows="4">{{ $product->description }}</textarea>
                </div>
            </div>

            <div class="bg-white p-6 rounded shadow">
                <h2 class="font-bold mb-4">Pricing & Stock</h2>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-semibold">Price (₹)</label>
                        <input type="number" step="0.01" name="price"
                               value="{{ $product->price }}"
                               class="w-full border rounded p-2" required>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold">Stock</label>
                        <input type="number" name="stock"
                               value="{{ $product->stock }}"
                               class="w-full border rounded p-2" required>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded shadow">
                <h2 class="font-bold mb-4">Product Image</h2>

                @if($product->image)
                    <img src="{{ asset('storage/'.$product->image) }}"
                         class="w-24 h-24 object-cover rounded mb-3">
                @endif

                <input type="file" name="image" class="w-full border rounded p-2">
            </div>

        </div>

        <!-- RIGHT -->
        <div class="space-y-6">

            <div class="bg-white p-6 rounded shadow">
                <h2 class="font-bold mb-4">Status</h2>

                <label class="flex items-center gap-2">
                    <input type="checkbox" name="status" value="1"
                           {{ $product->status ? 'checked' : '' }}>
                    Active Product
                </label>
            </div>

            <div class="bg-white p-6 rounded shadow">
                <h2 class="font-bold mb-4">Category</h2>

                <select name="category" class="w-full border rounded p-2">
                    <select name="category_id" class="w-full border p-2">
                    @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                    </select>
                </select>
            </div>

        </div>

    </div>

</form>

@endsection
