@extends('layouts.frontend')

@section('content')

@php
    $isProduct = $type === 'product';
    $title = $isProduct ? $item->name : $item->title;
    $image = $item->image;
    $price = $item->price ?? 0;
@endphp

<main class="bg-[#f6f8f6] dark:bg-[#0f1f0f] min-h-screen py-6 sm:py-12">
<div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">

<div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-14 items-start">

{{-- ================= LEFT SIDE ================= --}}
<div>

    <div class="bg-white rounded-2xl sm:rounded-3xl p-4 sm:p-8 shadow-sm border border-green-100">
        <img id="mainImage"
             src="{{ asset('storage/'.$image) }}"
             class="w-full max-h-[320px] sm:max-h-[520px] object-contain">
    </div>

    {{-- Thumbnails --}}
    <div class="flex gap-3 sm:gap-4 mt-4 sm:mt-6 overflow-x-auto">
        <img src="{{ asset('storage/'.$image) }}"
             onclick="changeImage(this)"
             class="w-16 h-16 sm:w-20 sm:h-20 rounded-xl object-cover border-2 border-green-500 p-1 cursor-pointer flex-shrink-0">

        <div class="w-16 h-16 sm:w-20 sm:h-20 bg-gray-100 rounded-xl flex-shrink-0"></div>
        <div class="w-16 h-16 sm:w-20 sm:h-20 bg-gray-100 rounded-xl flex-shrink-0"></div>
        <div class="w-16 h-16 sm:w-20 sm:h-20 bg-gray-100 rounded-xl flex-shrink-0"></div>
    </div>

</div>

{{-- ================= RIGHT SIDE ================= --}}
<div>

    <p class="text-green-600 uppercase tracking-widest text-sm font-semibold">
        APNA DESI THANDA
    </p>

    <h1 class="text-3xl sm:text-5xl md:text-6xl italic tracking-tight text-gray-900 dark:text-white"
        style="font-family: 'Playfair Display', serif;">
        {{ $title }}
    </h1>

    <div class="flex items-center gap-3 mb-6">
        <div class="text-yellow-400 text-lg">★ ★ ★ ★ ★</div>
        <span class="text-gray-500 text-sm">4.8 (1,240 Reviews)</span>
    </div>

    {{-- Price --}}
    <div class="flex items-center gap-4 mb-6">

        <span id="productPrice"
      class="text-2xl sm:text-4xl font-bold text-gray-900 dark:text-white">
    ₹{{ number_format($item->variants->first()?->price ?? 0,2) }}
</span>

        @if($isProduct)
            <!-- <span class="line-through text-gray-400 text-lg">
                <span id="productPrice" class="text-4xl font-bold text-gray-900 dark:text-white">
                    ₹{{ number_format($item->variants->first()->price ?? $price,2) }}
                </span>
            </span> -->

            <!-- <span class="bg-green-100 text-green-700 text-sm px-3 py-1 rounded-full">
                Save 5%
            </span> -->
        @endif

    </div>

    {{-- Description --}}
    <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-8">
        @if($isProduct)
            {{ $item->description }}
        @else
            Premium distributor trial pack with customizable flavour selection.
        @endif
    </p>

    {{-- Volume & Quantity (Only Product) --}}
    @if($isProduct)

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 mb-8">

       @if($isProduct && $item->variants->count())

        <div>
            <label class="text-xs font-semibold text-gray-500">
                SELECT VOLUME
            </label>

           <select id="variantSelect"
                class="w-full mt-2 border rounded-xl px-4 py-3 bg-gray-50">

                @foreach($item->variants as $variant)
                    <option value="{{ $variant->id }}"
                        data-price="{{ $variant->price }}"
                        data-stock="{{ $variant->stock }}"
                        data-image="{{ $variant->image ? asset('storage/'.$variant->image) : asset('storage/'.$image) }}">
                        {{ $variant->volume }} - ₹{{ number_format($variant->price,2) }}
                    </option>
                @endforeach

            </select>
        </div>

        @endif

        <div>
            <label class="text-xs font-semibold text-gray-500">QUANTITY</label>
            <div class="flex items-center mt-2 border rounded-xl bg-gray-50">
                <button type="button" onclick="qtyDown()" class="px-4 py-3">−</button>
                <input id="qty" type="number" value="1" min="1"
                       class="w-full text-center border-0 bg-transparent">
                <button type="button" onclick="qtyUp()" class="px-4 py-3">+</button>
            </div>
        </div>

    </div>

    @endif

    {{-- Add to Cart --}}
    @if($isProduct)
        <form action="{{ route('cart.add', $item->id) }}" method="POST">
            @csrf

            <input type="hidden" name="variant_id" id="cartVariantId"
                value="{{ $item->variants->first()?->id ?? '' }}">

            <input type="hidden" name="quantity" id="cartQty" value="1">

            <button class="w-full bg-green-500 hover:bg-green-600 text-white py-4 rounded-full text-lg font-semibold shadow-md mb-4">
                Add to Cart
            </button>
        </form>
    @else
        <form action="{{ route('cart.add.package',$item->id) }}" method="POST">
            @csrf
            <button class="w-full bg-green-500 hover:bg-green-600 text-white py-4 rounded-full text-lg font-semibold shadow-md mb-4">
                Add Trial Pack to Cart
            </button>
        </form>
    @endif

    {{-- Buy Now (Only Product) --}}
    @if($isProduct)
    <!--<form action="{{ route('cart.add', $item->id) }}" method="POST">-->
    <!--    @csrf-->

    <!--    <input type="hidden" name="variant_id" id="buyNowVariantId"-->
    <!--        value="{{ $item->variants->first()?->id ?? '' }}">-->

    <!--    <input type="hidden" name="quantity" value="1">-->
    <!--    <input type="hidden" name="buy_now" value="1">-->

    <!--    <button type="submit"-->
    <!--        class="w-full border-2 border-gray-400 hover:bg-gray-100 py-4 rounded-full text-lg font-semibold">-->
    <!--        Buy it Now-->
    <!--    </button>-->
    <!--</form>-->
    @endif

    {{-- Accordion --}}
    <div class="mt-10 space-y-4">

        <details class="bg-gray-100 rounded-xl p-4">
            <summary class="font-semibold cursor-pointer">Product Details</summary>
            <p class="mt-3 text-sm text-gray-600">
                {{ $isProduct ? $item->description : 'Trial pack includes multiple sample flavours.' }}
            </p>
        </details>

        <details class="bg-gray-100 rounded-xl p-4">
            <summary class="font-semibold cursor-pointer">Ingredients</summary>
            <p class="mt-3 text-sm text-gray-600">
                Natural ingredients. No preservatives.
            </p>
        </details>

        <details class="bg-gray-100 rounded-xl p-4">
            <summary class="font-semibold cursor-pointer">Instructions</summary>
            <p class="mt-3 text-sm text-gray-600">
                Keep refrigerated. Shake before use.
            </p>
        </details>

    </div>

</div>
</div>

{{-- YOU MAY ALSO LIKE --}}
<div class="mt-20">

    <h2 class="text-center text-3xl md:text-4xl italic mb-16"
        style="font-family: 'Playfair Display', serif;">
        You May Also Like
        <div class="w-16 h-[3px] bg-green-500 mx-auto mt-3 rounded-full"></div>
    </h2>

    @foreach($related as $index => $rel)

<div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-12 items-center mb-12 sm:mb-20">

    {{-- IMAGE --}}
    <div class="{{ $index % 2 == 0 ? '' : 'md:order-2' }}">
        <a href="{{ route('product.show',$rel->slug) }}">
            <img src="{{ asset('storage/'.$rel->image) }}"
                 class="w-full h-[280px] object-contain rounded-xl shadow-md bg-white">
        </a>
    </div>

    {{-- CONTENT --}}
    <div class="w-full text-center md:text-left
        {{ $index % 2 != 0 ? 'md:order-1 md:text-right' : '' }}">

        <p class="text-green-600 text-xs font-semibold uppercase tracking-wider mb-2">
            {{ $rel->category->name ?? 'Refreshing Drink' }}
        </p>

        <h2 class="text-2xl font-bold text-gray-900 mb-3">
            {{ $rel->name }}
        </h2>

        <p class="text-gray-500 mb-4 max-w-md 
            {{ $index % 2 != 0 ? 'md:ml-auto' : '' }}">
            {{ $rel->description }}
        </p>

        <div class="flex items-center justify-center md:justify-start gap-4
            {{ $index % 2 != 0 ? 'md:justify-end' : '' }}">

            <span class="text-lg font-semibold text-gray-900">
                ₹{{ number_format($rel->price, 2) }}
            </span>

            @if($rel->status)
            <form action="{{ route('cart.add', $rel->id) }}" method="POST">
                @csrf
                <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg text-sm font-semibold transition">
                    Add to Cart
                </button>
            </form>
            @else
            <button class="bg-gray-300 text-gray-500 px-4 py-2 rounded-lg text-sm font-semibold cursor-not-allowed">
                Out of Stock
            </button>
            @endif

        </div>

    </div>

</div>

@endforeach

</div>

</div>
</main>

<script>
function changeImage(el){
    document.getElementById('mainImage').src = el.src;
}
function qtyUp(){
    let qty = document.getElementById('qty');
    qty.value++;
    document.getElementById('cartQty').value = qty.value;
}
function qtyDown(){
    let qty = document.getElementById('qty');
    if(qty.value > 1){
        qty.value--;
        document.getElementById('cartQty').value = qty.value;
    }
}
</script>

<script>
function updateVariant(select)
{
    let selected = select.options[select.selectedIndex];
    let price = selected.getAttribute('data-price');

    document.getElementById('productPrice').innerText =
        '₹' + parseFloat(price).toFixed(2);

    document.getElementById('selectedVariant').value = select.value;
}
</script>
@endsection


<script>
document.addEventListener("DOMContentLoaded", function(){

    const select = document.getElementById('variantSelect');
    const priceDisplay = document.getElementById('productPrice');
    const mainImage = document.getElementById('mainImage');
    const cartVariantId = document.getElementById('cartVariantId');
    const buyNowVariantId = document.getElementById('buyNowVariantId');

    if(select){

        function updateVariantDetails(){

            const selectedOption = select.options[select.selectedIndex];
            const newPrice = selectedOption.getAttribute('data-price');
            const newImage = selectedOption.getAttribute('data-image');
            const variantId = select.value;

            // Update Price
            if(priceDisplay) {
                priceDisplay.innerHTML = "₹" + parseFloat(newPrice).toFixed(2);
            }

            // Update Image
            if(mainImage && newImage) {
                mainImage.src = newImage;
            }

            // Update Hidden Inputs
            if(cartVariantId) cartVariantId.value = variantId;
            if(buyNowVariantId) buyNowVariantId.value = variantId;
        }

        select.addEventListener('change', updateVariantDetails);

        // Run once on page load to set initial state
        updateVariantDetails();
    }

});
</script>