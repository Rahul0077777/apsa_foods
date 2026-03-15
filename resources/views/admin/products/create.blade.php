@extends('layouts.admin')

@section('title', 'Add New Product')

@section('content')

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Add New Product</h1>
        <button type="submit"
                class="bg-primary px-6 py-2 rounded font-bold text-black hover:bg-green-500">
            Save Product
        </button>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

        <!-- LEFT SIDE -->
        <div class="lg:col-span-2 space-y-6">

            <div class="bg-white p-6 rounded shadow">
                <h2 class="font-bold mb-4">Basic Information</h2>

                <div class="mb-4">
                    <label class="block text-sm font-semibold">Product Name</label>
                    <input type="text" name="name" class="w-full border rounded p-2" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-semibold">Short Description</label>
                    <textarea name="description" class="w-full border rounded p-2 rich-text" rows="4"></textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-semibold">Ingredients</label>
                    <textarea name="ingredients" class="w-full border rounded p-2 rich-text" rows="4"></textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-semibold">Instructions / Usage</label>
                    <textarea name="instructions" class="w-full border rounded p-2 rich-text" rows="4"></textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-semibold">Detailed Product Information</label>
                    <textarea name="product_details" class="w-full border rounded p-2 rich-text" rows="4"></textarea>
                </div>
            </div>

            <div class="bg-white p-6 rounded shadow">
                <h2 class="font-bold mb-4">Pricing & Stock</h2>

                <div class="bg-white p-6 rounded shadow">
                    <h2 class="font-bold mb-4">Product Variants</h2>

                    <div id="variantContainer" class="space-y-4">

                        <div class="variantRow bg-gray-50 p-4 rounded relative border border-gray-200">
                            <div class="grid grid-cols-3 gap-4">
                                <div>
                                    <label class="block text-sm font-semibold">Volume</label>
                                    <input type="text" name="variants[0][volume]"
                                        class="w-full border rounded p-2"
                                        placeholder="250ml" required>
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold">Price (₹)</label>
                                    <input type="number" step="0.01"
                                        name="variants[0][price]"
                                        class="w-full border rounded p-2" required>
                                </div>

                                <div>
                                    <label class="block text-sm font-semibold">Stock</label>
                                    <input type="number"
                                        name="variants[0][stock]"
                                        class="w-full border rounded p-2" required>
                                </div>

                                <div class="col-span-3">
                                    <label class="block text-sm font-semibold">Variant Image (Optional)</label>
                                    <div class="flex items-center gap-2">
                                        <input type="file" name="variants[0][image]" 
                                               class="w-full border rounded p-2 variant-image-input">
                                        <button type="button" onclick="clearFileInput(this)" 
                                                class="text-gray-400 hover:text-gray-600 px-2" title="Clear Image">
                                            <span class="material-symbols-outlined text-sm">close</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <button type="button"
                            onclick="addVariant()"
                            class="mt-4 bg-green-500 text-white px-4 py-2 rounded font-bold hover:bg-green-600">
                        + Add Another Variant
                    </button>

                </div>
            </div>

        </div>

        <!-- RIGHT SIDE -->
        <div class="space-y-6">

            <div class="bg-white p-6 rounded shadow">
                <h2 class="font-bold mb-4">Status</h2>

                <label class="flex items-center gap-2">
                    <input type="checkbox" name="status" value="1" checked>
                    Active Product
                </label>
            </div>

            <div class="bg-white p-6 rounded shadow">
                <h2 class="font-bold mb-4">Category</h2>

                <select name="category_id" class="w-full border p-2">
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}"
                            {{ isset($product) && $product->category_id == $cat->id ? 'selected' : '' }}>
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
let variantIndex = 1;

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
                            <span class="material-symbols-outlined text-sm">close</span>
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

<!-- CKEditor for Rich Text -->
<script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('.rich-text').forEach(function (textarea) {
            CKEDITOR.replace(textarea.name, {
                versionCheck: false,
                height: 200,
                toolbar: [
                    ['Styles', 'Format', 'Font', 'FontSize'],
                    ['Bold', 'Italic', 'Underline', 'Strike'],
                    ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote'],
                    ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'],
                    ['Link', 'Unlink'],
                    ['Undo', 'Redo']
                ]
            });
        });
    });
</script>