@extends('layouts.frontend')

@section('content')
<style>
.wishlist-btn.active span {
    color: #ef4444;
    animation: pop 0.3s ease;
}
@keyframes pop {
    0% { transform: scale(1); }
    50% { transform: scale(1.4); }
    100% { transform: scale(1); }
}
</style>
<main class="flex-grow">
<div class="mx-auto max-w-7xl px-4 md:px-10 py-8">
<div class="flex flex-col lg:flex-row gap-8">

<!-- ================= PRODUCTS AREA ================= -->
<div class="flex-1 flex flex-col">

<!-- Toolbar -->
<div class="flex justify-between mb-6">
    <div class="text-sm">
        <a href="/">Home</a> / <b>Shop</b>
    </div>
    <form method="GET" action="{{ route('shop') }}" class="flex items-center gap-2">
        <label class="text-sm font-medium">Sort by:</label>

        <select name="sort" onchange="this.form.submit()"
            class="rounded-lg border px-3 py-2 text-sm">

            <option value="">Featured</option>
            <option value="low_high" {{ request('sort')=='low_high'?'selected':'' }}>
                Price: Low to High
            </option>
            <option value="high_low" {{ request('sort')=='high_low'?'selected':'' }}>
                Price: High to Low
            </option>
        </select>

        {{-- Keep filters on sort --}}
        @foreach(request()->get('category', []) as $cat)
            <input type="hidden" name="category[]" value="{{ $cat }}">
        @endforeach
        <input type="hidden" name="max_price" value="{{ request('max_price') }}">
    </form>

</div>

{{-- DISTRIBUTOR BANNER --}}
@if(isset($packages) && $packages->count())

@foreach($packages as $package)

<div class="mb-12">

    <div class="relative overflow-hidden rounded-2xl 
                bg-gradient-to-r from-[#e6f4ea] to-[#f4fbf6]
                border border-[#d6eadf]">

        <div class="grid grid-cols-1 md:grid-cols-2 items-center">


            {{-- LEFT IMAGE --}}
           <div class="relative h-[240px] md:h-[260px] flex items-center justify-center">

                <a href="{{ route('product.show', $package->slug) }}">

                    <img src="{{ asset('storage/'.$package->image) }}"
                        class="h-full object-contain hover:scale-105 transition duration-300 cursor-pointer">

                </a>

            </div>


            {{-- RIGHT CONTENT --}}
            <div class="p-8">


                {{-- Badge --}}
                <span class="inline-block bg-green-200 text-green-700 
                             text-xs font-bold px-3 py-1 rounded-full mb-3">

                    DISTRIBUTOR PORTAL

                </span>


                {{-- Title --}}
                <h2 class="text-3xl font-black text-[#0d1b0d] mb-3">

                    {{ $package->title }}

                </h2>


                {{-- Description --}}
                {{-- FEATURES --}}
                <ul class="space-y-2 mb-6">

                    @foreach($package->features as $feature)

                    <li class="flex items-center gap-2 text-xs text-gray-600 dark:text-gray-300">

                        <span class="material-symbols-outlined text-primary text-sm">
                            check_circle
                        </span>

                        {{ $feature }}

                    </li>

                    @endforeach

                </ul>


               @if($package->status)

                <form action="{{ route('cart.add.package', $package->id) }}" method="POST">

                    @csrf

                    <button type="submit"
                        class="inline-flex items-center gap-2 
                            bg-primary hover:bg-green-500
                            text-[#0d1b0d]
                            px-6 py-3 rounded-lg
                            font-bold shadow-md shadow-primary/20
                            transition-all">

                        <span class="material-symbols-outlined">
                            shopping_cart
                        </span>

                        Add to Cart

                    </button>

                </form>

                @else

                <button
                    class="inline-flex items-center gap-2 
                        bg-gray-300 text-gray-500
                        px-6 py-3 rounded-lg
                        font-bold cursor-not-allowed">

                    Out of Stock

                </button>

                @endif


            </div>

        </div>

    </div>

</div>

@endforeach

@endif
<!-- ================= PRODUCT LIST (ALTERNATING) ================= -->
<div class="flex flex-col gap-16 py-10">

@foreach($products as $index => $product)

<div class="flex flex-col md:flex-row items-center gap-8">

    {{-- IMAGE --}}
    <div class="w-full md:w-1/2 
        {{ $index % 2 != 0 ? 'md:order-2' : '' }}">

        <a href="{{ route('product.show', $product->slug) }}">
            <img src="{{ asset('storage/'.$product->image) }}"
                class="w-full h-[390px] object-contain rounded-xl shadow-md bg-white">
        </a>

    </div>


    {{-- CONTENT --}}
    <div class="w-full md:w-1/2 text-center md:text-left
        {{ $index % 2 != 0 ? 'md:order-1 md:text-right' : '' }}">

        {{-- Category (optional small text like screenshot) --}}
        <p class="text-green-600 text-xs font-semibold uppercase tracking-wider mb-2">
            {{ $product->category->name ?? 'Refreshing Drink' }}
        </p>

        {{-- Name --}}
        <h2 class="text-2xl font-bold text-gray-900 mb-3">
            {{ $product->name }}
        </h2>

        {{-- Description --}}
        <p class="text-gray-500 mb-4 max-w-md 
            {{ $index % 2 != 0 ? 'md:ml-auto' : '' }}">
            {{ $product->description }}
        </p>

        {{-- Price + Button --}}
     <div class="flex flex-col sm:flex-row sm:items-center gap-4
    {{ $index % 2 != 0 ? 'sm:justify-end sm:space-x-reverse' : 'sm:justify-start' }}">

    <!-- Price -->
    <span class="text-2xl font-bold text-gray-900">
        ₹{{ number_format($product->price, 2) }}
    </span>

    <!-- Button -->
    @if($product->status)
    <form action="{{ route('cart.add', $product->id) }}" method="POST" class="w-full sm:w-auto mb-0">
        @csrf
        <button class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-lg text-sm font-semibold transition w-full sm:w-auto shadow-md">
            Add to Cart
        </button>
    </form>
    @else
    <button class="bg-gray-300 text-gray-500 px-6 py-2 rounded-lg text-sm font-semibold cursor-not-allowed w-full sm:w-auto">
        Out of Stock
    </button>
    @endif

</div>

    </div>

</div>

@endforeach

</div>

</div>

</div>
</div>
</div>
<div class="mt-12 flex justify-center">
    {{ $products->links('pagination::tailwind') }}
</div>
</main>

@endsection


<script>
document.querySelectorAll('.wishlist-btn').forEach(btn => {
    btn.addEventListener('click', function () {
        let productId = this.dataset.id;
        let icon = this.querySelector('span');

        fetch(`/wishlist/${productId}`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json'
            }
        })
        .then(res => res.json())
        .then(data => {
            if (data.status === 'added') {
                this.classList.add('active');
                icon.textContent = 'favorite';
            } else {
                this.classList.remove('active');
                icon.textContent = 'favorite_border';
            }
        });
    });
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const range = document.getElementById('priceRange');
    const priceValue = document.getElementById('priceValue');

    if (range && priceValue) {
        priceValue.textContent = range.value;

        range.addEventListener('input', function () {
            priceValue.textContent = this.value;
        });
    }
});
</script>