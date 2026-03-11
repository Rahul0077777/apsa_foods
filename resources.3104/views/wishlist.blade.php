@extends('layouts.frontend')

@section('title','My Wishlist')

@section('content')
<div class="max-w-7xl mx-auto px-4 md:px-8 py-12">

    <div class="flex items-center justify-between mb-8">
        <h1 class="text-3xl md:text-4xl font-extrabold tracking-tight">
            My Wishlist <span class="text-primary">❤️</span>
        </h1>
        <span class="text-sm text-gray-500">
            {{ count($products) }} items saved
        </span>
    </div>

    @if(count($products) > 0)
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">

        @foreach($products as $product)
        <div class="group relative bg-white dark:bg-[#1a2e1a] border border-[#e7f3e7] dark:border-[#294429]
                    rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden">

            <!-- Remove from wishlist -->
            <button 
                class="absolute top-3 right-3 z-10 bg-white/80 backdrop-blur p-2 rounded-full
                       text-red-500 hover:bg-red-500 hover:text-white transition">
                <span class="material-symbols-outlined text-[20px]">favorite</span>
            </button>

            <!-- Image -->
            <div class="h-56 flex items-center justify-center bg-[#f4faf4] dark:bg-[#233b23] overflow-hidden">
                <img src="{{ asset('storage/'.$product->image) }}"
                     class="h-48 object-contain group-hover:scale-105 transition duration-500">
            </div>

            <!-- Content -->
            <div class="p-5 space-y-3">
                <h3 class="font-bold text-lg leading-tight line-clamp-1">
                    {{ $product->name }}
                </h3>

                <p class="text-sm text-gray-500 line-clamp-2">
                    {{ $product->description }}
                </p>

                <div class="flex items-center justify-between pt-2">
                    <span class="text-lg font-extrabold text-green-700">
                        ₹ {{ $product->price }}
                    </span>
                    <a href="{{ route('product.show', $product->slug) }}"
                       class="text-sm font-semibold text-primary hover:underline">
                        View
                    </a>
                </div>

                <!-- Add to cart button -->
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
        @endforeach

    </div>
    @else
    <!-- Empty state -->
    <div class="flex flex-col items-center justify-center py-24 text-center">
        <span class="material-symbols-outlined text-6xl text-gray-300 mb-4">favorite</span>
        <h2 class="text-2xl font-bold mb-2">Your wishlist is empty</h2>
        <p class="text-gray-500 mb-6">Save your favorite juices here to buy later.</p>
        <a href="{{ route('shop') }}"
           class="bg-primary text-neutral-900 px-6 py-3 rounded-lg font-bold hover:scale-105 transition">
            Browse Products
        </a>
    </div>
    @endif

</div>
@endsection
