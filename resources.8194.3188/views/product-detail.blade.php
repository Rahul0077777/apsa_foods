@extends('layouts.frontend')

@section('content')
<main class="bg-background-light dark:bg-background-dark">
    <div class="max-w-7xl mx-auto px-4 md:px-10 py-10">

        {{-- Breadcrumb --}}
        <div class="flex items-center gap-2 text-sm mb-6">
            <a href="{{ url('/') }}" class="text-gray-500 hover:text-primary">Home</a>
            <span>/</span>
            <a href="{{ route('shop') }}" class="text-gray-500 hover:text-primary">Shop</a>
            <span>/</span>
            <span class="font-semibold text-text-main dark:text-white">{{ $product->name }}</span>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

            {{-- Product Image --}}
            <div
                class="bg-white dark:bg-[#1a2e1a] rounded-2xl p-6 shadow-sm border border-[#e7f3e7] dark:border-[#2a4e2a]">
                <div class="aspect-square flex items-center justify-center">
                    <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}"
                        class="w-full h-full object-contain">

                </div>
            </div>

            {{-- Product Info --}}
            <div class="flex flex-col gap-4">

                <span class="inline-block w-fit px-3 py-1 text-xs font-bold rounded-full bg-primary/20 text-green-900">
                    Fresh Juice
                </span>

                <h1 class="text-3xl md:text-4xl font-black text-text-main dark:text-white">
                    {{ $product->name }}
                </h1>

                <p class="text-2xl font-bold text-primary">
                    ₹ {{ number_format($product->price, 2) }}
                </p>

                <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                    {{ $product->description }}
                </p>

                {{-- Quantity & Add to Cart --}}
                <form action="{{ route('cart.add', $product->id) }}" method="POST" class="mt-4">
                    @csrf
                    <div class="flex items-center gap-4">

                        <div class="flex items-center border rounded-lg overflow-hidden">
                            <button type="button" onclick="qtyDown()"
                                class="px-3 py-2 bg-gray-100 hover:bg-gray-200">−</button>
                            <input type="number" name="quantity" id="qty" value="1" min="1"
                                class="w-12 text-center border-0 focus:ring-0">
                            <button type="button" onclick="qtyUp()"
                                class="px-3 py-2 bg-gray-100 hover:bg-gray-200">+</button>
                        </div>

                        <button type="submit"
                            class="flex items-center gap-2 bg-primary hover:bg-green-400 text-black font-bold px-6 py-3 rounded-lg shadow transition">
                            <span class="material-symbols-outlined">shopping_cart</span>
                            Add to Cart
                        </button>
                    </div>
                </form>

                <script>
                function qtyUp() {
                    let q = document.getElementById('qty');
                    q.value = parseInt(q.value) + 1;
                }

                function qtyDown() {
                    let q = document.getElementById('qty');
                    if (q.value > 1) q.value = parseInt(q.value) - 1;
                }
                </script>

            </div>
        </div>
        {{-- Tabs Section --}}
        <div class="mt-12 bg-white dark:bg-[#1a2e1a] rounded-xl p-6 border border-[#e7f3e7] dark:border-[#2a4e2a]">
            <div class="flex gap-6 border-b mb-4">
                <button class="tab-btn font-bold text-primary" onclick="openTab('desc')">Description</button>
                <button class="tab-btn" onclick="openTab('ing')">Ingredients</button>
                <button class="tab-btn" onclick="openTab('benefit')">Benefits</button>
            </div>

            <div id="desc" class="tab-content">
                <p class="text-gray-600 dark:text-gray-300">{{ $product->description }}</p>
            </div>

            <div id="ing" class="tab-content hidden">
                <p class="text-gray-600 dark:text-gray-300">
                    Fresh fruits, no added sugar, cold-pressed, 100% natural.
                </p>
            </div>

            <div id="benefit" class="tab-content hidden">
                <ul class="list-disc pl-5 text-gray-600 dark:text-gray-300">
                    <li>Boosts immunity</li>
                    <li>Rich in vitamins</li>
                    <li>Detoxifies body</li>
                </ul>
            </div>
        </div>

        <script>
        function openTab(id) {
            document.querySelectorAll('.tab-content').forEach(t => t.classList.add('hidden'));
            document.getElementById(id).classList.remove('hidden');

            document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('text-primary'));
            event.target.classList.add('text-primary');
        }
        </script>
        {{-- Related Products --}}
        <div class="mt-14">
            <h2 class="text-2xl font-black mb-6">Related Juices</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                @foreach($related as $item)
                <div
                    class="group rounded-xl bg-white dark:bg-[#1a2e1a] border overflow-hidden hover:shadow-lg transition">
                    <a href="{{ route('product.show', $item->slug) }}">
                        <img src="{{ asset('storage/'.$item->image) }}" class="h-48 w-full object-contain p-4"
                            alt="{{ $item->name }}">

                    </a>

                    <div class="p-4">
                        <h3 class="font-bold">{{ $item->name }}</h3>
                        <p class="text-primary font-bold">₹ {{ number_format($item->price,2) }}</p>
                        <a href="{{ route('product.show', $item->slug) }}"
                            class="mt-2 inline-block text-sm text-primary font-bold">
                            View Product →
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>

</main>



@endsection