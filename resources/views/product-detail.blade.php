@extends('layouts.frontend')

@section('content')

<style>
    .font-cursive { font-family: 'Dancing Script', cursive; }
    .shop-now-btn {
        transition: all 0.3s ease;
        border-radius: 9999px; /* Fully rounded */
        border: 1px solid #d1d5db; /* Light gray border */
        background-color: transparent;
        color: #4b5563; /* Gray text */
        font-family: 'Inter', sans-serif;
    }
    .shop-now-btn:hover { background-color: #f3f4f6; }
    .product-title {
        font-family: 'Dancing Script', cursive;
        color: #8DAA36;
        font-weight: 700;
        line-height: 1.2;
    }
    .all-product-btn {
        background-color: #2F5939; /* Dark green */
        color: white;
        border-radius: 9999px;
        font-family: 'Dancing Script', cursive;
        transition: transform 0.3s ease;
    }
    .all-product-btn:hover {
        transform: scale(1.05);
    }
</style>

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
    <div class="text-gray-600 dark:text-gray-300 leading-relaxed mb-8 prose prose-sm max-w-none prose-p:my-2 prose-ul:my-2 prose-ol:my-2">
        @if($isProduct)
            {!! $item->description !!}
        @else
            <p>Premium distributor trial pack with customizable flavour selection.</p>
        @endif
    </div>

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
            <summary class="font-semibold cursor-pointer outline-none">Product Details</summary>
            <div class="mt-3 text-sm text-gray-600 prose prose-sm max-w-none prose-p:my-1 prose-ul:my-1 prose-ol:my-1">
                @if($isProduct && $item->product_details)
                    {!! $item->product_details !!}
                @elseif($isProduct && $item->description)
                    {!! $item->description !!}
                @else
                    <p>Trial pack includes multiple sample flavours.</p>
                @endif
            </div>
        </details>

        <details class="bg-gray-100 rounded-xl p-4">
            <summary class="font-semibold cursor-pointer outline-none">Ingredients</summary>
            <div class="mt-3 text-sm text-gray-600 prose prose-sm max-w-none prose-p:my-1 prose-ul:my-1 prose-ol:my-1">
                @if($isProduct && $item->ingredients)
                    {!! $item->ingredients !!}
                @else
                    <p>Natural ingredients. No preservatives.</p>
                @endif
            </div>
        </details>

        <details class="bg-gray-100 rounded-xl p-4">
            <summary class="font-semibold cursor-pointer outline-none">Instructions</summary>
            <div class="mt-3 text-sm text-gray-600 prose prose-sm max-w-none prose-p:my-1 prose-ul:my-1 prose-ol:my-1">
                @if($isProduct && $item->instructions)
                    {!! $item->instructions !!}
                @else
                    <p>Keep refrigerated. Shake before use.</p>
                @endif
            </div>
        </details>

    </div>

</div>
</div>

{{-- YOU MAY ALSO LIKE --}}
<div class="mt-20">

    <h2 class="text-center text-3xl md:text-4xl italic mb-16 text-[#1a3b2c] font-bold"
        style="font-family: 'Playfair Display', serif;">
        You May Also Like
        <div class="w-16 h-[3px] bg-[#8DAA36] mx-auto mt-3 rounded-full"></div>
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-20 p-4 md:p-8">
    @foreach($related as $index => $rel)
        @php
            // Logic for exact colors from Figma based on product name
            $bgColor = '#8DAA36'; // Default Lime Green
            $textColor = '#8DAA36'; // Default Title Color
            
            if (Str::contains(Str::lower($rel->name), 'jeera')) {
                $bgColor = '#2F5939'; // Dark green
            }
            if (Str::contains(Str::lower($rel->name), 'cola')) {
                $bgColor = '#B81D22'; // Cola Red
            }
            if (Str::contains(Str::lower($rel->name), 'shikanji')) {
                $bgColor = '#00A3E0'; // Blue
            }
            if (Str::contains(Str::lower($rel->name), 'litchi')) {
                $bgColor = '#D95383'; // Pinkish red
            }
            if (Str::contains(Str::lower($rel->name), 'mojito')) {
                $bgColor = '#2EA31E'; // Bright green
            }
            if (Str::contains(Str::lower($rel->name), 'club soda')) {
                $bgColor = '#000000'; // Black
            }
            if (Str::contains(Str::lower($rel->name), 'aquaping')) {
                $bgColor = '#4A5D7C'; // Grayish blue
            }
        @endphp

        <div class="flex flex-col items-center">
            {{-- Image Container with Circle Background --}}
            <div class="relative w-full aspect-square flex items-center justify-center mb-6">
                <div class="absolute inset-0 m-auto w-[85%] h-[85%] rounded-full"></div>
                <a href="{{ route('product.show', $rel->slug) }}" class="relative z-10 h-full flex items-center justify-center transform hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('storage/'.$rel->image) }}" 
                         alt="{{ $rel->name }}" 
                         class="h-[110%] w-auto object-contain mb-[-10%] drop-shadow-xl saturate-110">
                </a>
            </div>
            
            {{-- Product Details --}}
            <div class="text-center w-full">
                {{-- Price --}}
                <div class="flex items-center justify-center gap-2 mb-1 font-inter">
                    <span class="text-[#A0A0A0] text-xs font-semibold line-through">MRP {{ number_format($rel->price * 1.1, 2) }}</span>
                    <span class="text-[#2F5939] text-xs font-bold">From Rs. {{ number_format($rel->price, 2) }}</span>
                </div>
                
                {{-- Title --}}
                <div class="text-[32px] product-title mb-4" style="color: {{ $textColor }};">
                    Bubbly {{ explode(' ', $rel->name)[1] ?? 'Lime' }}
                </div>
                
                {{-- Shop Now Button --}}
                @if($rel->status)
                    <form action="{{ route('cart.add', $rel->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="shop-now-btn px-8 py-2 text-sm font-semibold max-w-[200px] w-full mx-auto">
                            Shop Now
                        </button>
                    </form>
                @else
                    <button class="shop-now-btn px-8 py-2 text-sm font-semibold max-w-[200px] w-full mx-auto cursor-not-allowed opacity-50 bg-gray-100">
                        Out of Stock
                    </button>
                @endif
            </div>
        </div>
    @endforeach
    </div>

    {{-- All Product Button --}}
    <div class="mt-16 flex justify-center">
        <a href="{{ route('shop') }}" class="all-product-btn text-2xl px-16 py-3 border-4 border-[#8DAA36] shadow-lg">
            All Product
        </a>
    </div>

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