@extends('layouts.frontend')

@section('content')
<section class="py-16 px-4 md:px-10 lg:px-20">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

            <!-- LEFT: CART ITEMS -->
            <div class="lg:col-span-8 flex flex-col gap-6">

                <div class="flex justify-between items-end border-b pb-4">
                    <div>
                        <h1 class="text-3xl font-black">Your Cart 
                            <span class="text-gray-400 font-medium text-xl">({{ count($cart) }} items)</span>
                        </h1>
                        <p class="text-sm text-green-600">Freshness guaranteed. Cold-pressed daily.</p>
                    </div>
                    <a href="{{ route('shop') }}" class="text-primary font-semibold text-sm flex items-center gap-1">
                        ← Continue Shopping
                    </a>
                </div>

                @if(count($cart) > 0)

                <div class="hidden sm:block overflow-hidden rounded-xl border border-[#cfe7cf] bg-white shadow-sm">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-[#f8fcf8] border-b">
                                <th class="p-4 text-sm w-1/2">Product</th>
                                <th class="p-4 text-sm">Price</th>
                                <th class="p-4 text-sm">Quantity</th>
                                <th class="p-4 text-sm text-right">Total</th>
                                <th class="p-4 w-10"></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y">

                            @php $grandTotal = 0; @endphp

                            @foreach($cart as $id => $item)
                                @php
                                    $itemTotal = $item['price'] * $item['quantity'];
                                    $grandTotal += $itemTotal;
                                @endphp

                                <tr class="hover:bg-gray-50 transition">
                                    <td class="p-4">
                                        <div class="flex items-center gap-4">
                                            <div class="w-20 h-20 rounded-lg overflow-hidden border">
                                                <img class="w-full h-full object-cover"
     src="{{ asset('storage/'.$item['image']) }}">
                                            </div>
                                            <div>
                                                <h3 class="font-bold">{{ $item['name'] }}</h3>
                                                <p class="text-sm text-gray-500">500ml Bottle</p>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="p-4 text-sm font-medium">
                                        ₹ {{ number_format($item['price'], 2) }}
                                    </td>

                                    <td class="p-4">
                                        <div class="flex items-center border rounded-lg w-fit bg-white">

                                            <form action="{{ route('cart.decrease', $id) }}" method="POST">
                                                @csrf
                                                <button class="px-3 py-1 hover:bg-gray-100 rounded-l-lg">
                                                    -
                                                </button>
                                            </form>

                                            <span class="w-8 text-center font-semibold">
                                                {{ $item['quantity'] }}
                                            </span>

                                            <form action="{{ route('cart.increase', $id) }}" method="POST">
                                                @csrf
                                                <button class="px-3 py-1 hover:bg-gray-100 rounded-r-lg">
                                                    +
                                                </button>
                                            </form>
                                        </div>
                                    </td>

                                    <td class="p-4 text-right font-bold">
                                        ₹ {{ number_format($itemTotal, 2) }}
                                    </td>

                                    <td class="p-4 text-center">
                                        <form action="{{ route('cart.remove', $id) }}" method="POST">
                                            @csrf
                                            <button class="text-gray-400 hover:text-red-500">
                                                🗑
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                                <!-- MOBILE CART -->
                <div class="sm:hidden flex flex-col gap-4">
                    @foreach($cart as $id => $item)
                        @php $itemTotal = $item['price'] * $item['quantity']; @endphp
                        <div class="bg-white p-4 rounded-xl border flex gap-4">
                            <div class="w-24 h-24 rounded-lg overflow-hidden">
                                <img class="w-full h-full object-cover" src="{{ asset('uploads/products/'.$item['image']) }}">
                            </div>
                            <div class="flex-1 flex flex-col justify-between">
                                <div class="flex justify-between">
                                    <h3 class="font-bold">{{ $item['name'] }}</h3>
                                    <form action="{{ route('cart.remove', $id) }}" method="POST">
                                        @csrf
                                        <button class="text-red-500">×</button>
                                    </form>
                                </div>
                                <p class="text-sm text-gray-500">₹ {{ $item['price'] }}</p>

                                <div class="flex justify-between items-center mt-2">
                                    <div class="flex border rounded-lg">
                                        <form action="{{ route('cart.decrease', $id) }}" method="POST">
                                            @csrf
                                            <button class="px-2">-</button>
                                        </form>
                                        <span class="px-2 font-bold">{{ $item['quantity'] }}</span>
                                        <form action="{{ route('cart.increase', $id) }}" method="POST">
                                            @csrf
                                            <button class="px-2">+</button>
                                        </form>
                                    </div>
                                    <span class="font-bold">₹ {{ $itemTotal }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

            <!-- RIGHT: ORDER SUMMARY -->
            <div class="lg:col-span-4">
                <div class="sticky top-28 bg-white border rounded-xl shadow-lg">
                    <div class="p-6 border-b">
                        <h2 class="text-xl font-bold">Order Summary</h2>
                    </div>

                    <div class="p-6 space-y-3">
                        <div class="flex justify-between">
                            <span>Subtotal</span>
                            <span class="font-bold">₹ {{ number_format($grandTotal, 2) }}</span>
                        </div>

                        <div class="flex justify-between">
                            <span>Shipping</span>
                            <span class="text-green-600 font-bold">Free</span>
                        </div>

                        <div class="border-t pt-3 flex justify-between text-lg font-black">
                            <span>Total</span>
                            <span class="text-primary">₹ {{ number_format($grandTotal, 2) }}</span>
                        </div>

                        

                        @auth
                        <a href="{{ route('checkout') }}" class="block text-center bg-primary text-black py-3 rounded-lg font-bold hover:opacity-90 transition mt-4">Proceed to Checkout</a>
                    @else
                        <a href="{{ route('login') }}" class="block text-center bg-primary text-black py-3 rounded-lg font-bold hover:opacity-90 transition mt-4">Login to Continue</a>
                    @endauth
                    </div>
                </div>
            </div>

        </div>
    </div>

    @else
        <div class="text-center py-20">
            <h3 class="text-2xl font-bold mb-2">Your cart is empty</h3>
            <a href="{{ route('shop') }}" class="text-primary font-bold">Continue Shopping</a>
        </div>
    @endif
</section>


@endsection
