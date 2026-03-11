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

                <div class="bg-white p-6 rounded shadow">
                    <h2 class="font-bold mb-4">Product Variants</h2>

                    <div id="variantContainer" class="space-y-4">

                        @foreach($product->variants as $index => $variant)

                        <div class="variantRow bg-gray-50 p-4 rounded relative border border-gray-200 mb-4">
                            
                            <button type="button" onclick="removeVariant(this)" 
                                    class="absolute top-2 right-2 text-red-500 hover:text-red-700">
                                <span class="material-symbols-outlined">delete</span>
                            </button>

                            <input type="hidden" name="variants[{{ $index }}][id]" value="{{ $variant->id }}">

                            <div class="grid grid-cols-3 gap-4">
                                <div>
                                    <label class="block text-sm font-semibold">Volume</label>
                                    <input type="text"
                                        name="variants[{{ $index }}][volume]"
                                        value="{{ $variant->volume }}"
                                        class="w-full border rounded p-2" required>
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold">Price (₹)</label>
                                    <input type="number" step="0.01"
                                        name="variants[{{ $index }}][price]"
                                        value="{{ $variant->price }}"
                                        class="w-full border rounded p-2" required>
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold">Stock</label>
                                    <input type="number"
                                        name="variants[{{ $index }}][stock]"
                                        value="{{ $variant->stock }}"
                                        class="w-full border rounded p-2" required>
                                </div>

                                <div class="col-span-3 flex items-center gap-4">
                                    <div class="flex-1">
                                        <label class="block text-sm font-semibold">Variant Image (Optional)</label>
                                        <input type="file" name="variants[{{ $index }}][image]" 
                                               class="w-full border rounded p-2 variant-image-input">
                                    </div>
                                    @if($variant->image)
                                        <div class="flex flex-col items-center gap-1">
                                            <img src="{{ asset('storage/'.$variant->image) }}" 
                                                 class="w-16 h-16 object-contain border rounded bg-white variant-preview">
                                            <label class="flex items-center gap-1 text-xs text-red-500 cursor-pointer">
                                                <input type="checkbox" name="variants[{{ $index }}][remove_image]" value="1" class="rounded text-red-500">
                                                Remove
                                            </label>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>

                    <button type="button"
                            onclick="addVariant()"
                            class="mt-4 bg-green-500 text-white px-4 py-2 rounded">
                        + Add New Variant
                    </button>
                </div>
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

                <select name="category_id" class="w-full border rounded p-2">
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}"
                            {{ $product->category_id == $cat->id ? 'selected' : '' }}>
                            {{ $cat->name }}
                        </option>
                    @endforeach
                </select>
            </div>

        </div>

    </div>

</form>

@endsection
<script>
let variantIndex = {{ $product->variants->count() }};

function addVariant() {
    let container = document.getElementById('variantContainer');
    let html = `
        <div class="variantRow bg-gray-50 p-4 rounded relative border border-gray-200 mt-4">
            <button type="button" onclick="removeVariant(this)" 
                    class="absolute top-2 right-2 text-red-500 hover:text-red-700">
                <span class="material-symbols-outlined">delete</span>
            </button>
            <div class="grid grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-semibold">Volume</label>
                    <input type="text" name="variants[${variantIndex}][volume]"
                           class="w-full border rounded p-2" placeholder="500ml" required>
                </div>
                <div>
                    <label class="block text-sm font-semibold">Price (₹)</label>
                    <input type="number" step="0.01" name="variants[${variantIndex}][price]"
                           class="w-full border rounded p-2" required>
                </div>
                <div>
                    <label class="block text-sm font-semibold">Stock</label>
                    <input type="number" name="variants[${variantIndex}][stock]"
                           class="w-full border rounded p-2" required>
                </div>
                <div class="col-span-3">
                    <label class="block text-sm font-semibold">Variant Image (Optional)</label>
                    <div class="flex items-center gap-2">
                        <input type="file" name="variants[${variantIndex}][image]" 
                               class="w-full border rounded p-2 variant-image-input">
                        <button type="button" onclick="clearFileInput(this)" 
                                class="text-gray-400 hover:text-gray-600 px-2" title="Clear Image">
                            <span class="material-symbols-outlined">close</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    `;
    container.insertAdjacentHTML('beforeend', html);
    variantIndex++;
}

function removeVariant(btn) {
    if(confirm('Are you sure you want to remove this variant?')) {
        btn.closest('.variantRow').remove();
    }
}

function clearFileInput(btn) {
    const input = btn.closest('div').querySelector('.variant-image-input');
    if(input) input.value = '';
}
</script>