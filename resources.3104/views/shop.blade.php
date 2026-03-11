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

<!-- ================= PRODUCT GRID ================= -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

@foreach($products as $product)
<div class="group relative flex flex-col rounded-xl bg-white dark:bg-[#1a2e1a] border border-[#e7f3e7] dark:border-[#2a4e2a] overflow-hidden hover:shadow-lg hover:shadow-green-900/5 hover:-translate-y-1 transition-all duration-300">

    {{-- Best Seller Badge --}}
    @if($product->is_best_seller ?? false)
    <div class="absolute top-3 left-3 z-10">
        <span class="px-2 py-1 bg-primary text-[#0d1b0d] text-xs font-bold rounded uppercase tracking-wide">
            Best Seller
        </span>
    </div>
    @endif

    {{-- Wishlist Icon --}}
   <div class="absolute top-3 right-3 z-10 opacity-0 group-hover:opacity-100 transition-opacity">
        <button
            class="wishlist-btn bg-white dark:bg-[#233b23] p-2 rounded-full shadow-sm transition-all
                hover:scale-110"
            data-id="{{ $product->id }}">
            <span class="material-symbols-outlined text-lg
                {{ auth()->check() && auth()->user()->wishlist->contains($product->id) ? 'text-red-500' : 'text-gray-400' }}">
                favorite
            </span>
        </button>
    </div>

    {{-- Image --}}
    <div class="aspect-[4/5] w-full bg-[#f8fcf8] dark:bg-[#142614] p-6 flex items-center justify-center relative">
        <a href="{{ route('product.show', $product->slug) }}">
            <img src="{{ asset('storage/'.$product->image) }}"
             class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-105">
        </a>


        
    </div>


    {{-- Content --}}
    <div class="p-4 flex flex-col flex-grow">
       

        <a href="{{ route('product.show', $product->slug) }}" class="text-lg font-bold text-[#0d1b0d] dark:text-white mb-1">
            {{ $product->name }}
        </a>

        <p class="text-sm text-gray-500 dark:text-gray-400 mb-3 line-clamp-1">
            {{ $product->description }}
        </p>

        <div class="mt-auto flex items-center justify-between">
            <span class="text-lg font-bold text-[#0d1b0d] dark:text-white">
                ₹ {{ number_format($product->price, 2) }}
            </span>

            @if($product->status)
            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                @csrf
                <button class="flex items-center gap-1.5 px-3 py-2 bg-[#e7f3e7] dark:bg-[#233b23]
                               hover:bg-primary hover:text-[#0d1b0d]
                               text-green-800 dark:text-green-100
                               rounded-lg text-sm font-bold transition-all">
                    <span class="material-symbols-outlined text-lg">add_shopping_cart</span>
                    Add
                </button>
            </form>
            @else
            <button class="flex items-center gap-1.5 px-3 py-2 bg-gray-200 dark:bg-gray-800
                           text-gray-400 rounded-lg text-sm font-bold cursor-not-allowed" disabled>
                <span class="material-symbols-outlined text-lg">block</span>
                Out
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