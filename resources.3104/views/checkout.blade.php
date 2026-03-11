@php $isAdmin = auth()->check() && auth()->user()->is_admin == 1; @endphp
@extends('layouts.frontend')

@section('title', 'Checkout')

@section('content')
<div class="bg-background-light min-h-screen py-8">
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

<!-- Stepper -->
<div class="flex items-center justify-center mb-10">
    <nav class="flex items-center gap-4 text-sm font-medium">
        <div class="flex items-center gap-2 text-primary">
            <span class="size-6 rounded-full bg-primary/20 flex items-center justify-center text-xs">✓</span>
            <span>Cart</span>
        </div>
        <span class="h-px w-8 bg-gray-300"></span>
        <div class="flex items-center gap-2 text-primary">
            <span class="size-6 rounded-full bg-primary/20 flex items-center justify-center text-xs">✓</span>
            <span>Shipping</span>
        </div>
        <span class="h-px w-8 bg-gray-300"></span>
        <div class="flex items-center gap-2">
            <span class="size-6 rounded-full bg-primary flex items-center justify-center text-xs text-white">3</span>
            <span>Payment</span>
        </div>
    </nav>
</div>

<div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

<!-- Left -->
<div class="lg:col-span-7 space-y-8">

<!-- Billing Details -->
<!-- Billing Details -->
<section class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 p-6 md:p-8">
<div class="flex items-center gap-3 mb-6">
<span class="material-symbols-outlined text-primary">person</span>
<h2 class="text-xl font-bold">Billing Details</h2>
</div>

<form id="checkout-form" class="grid grid-cols-1 md:grid-cols-2 gap-5" method="POST" action="{{ route('place.order') }}">

@csrf

<div class="md:col-span-2">
<label class="block text-sm font-semibold mb-2">Full Name</label>
<input name="name"
       value="{{ old('name') }}"
       class="w-full rounded-lg border-slate-300 dark:border-slate-700 dark:bg-slate-800
              focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary"
       placeholder="John Doe" type="text"/>
</div>

<div>
<label class="block text-sm font-semibold mb-2">Email Address</label>
<input name="email"
       value="{{ old('email') }}"
       class="w-full rounded-lg border-slate-300 dark:border-slate-700 dark:bg-slate-800
              focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary"
       placeholder="john@example.com" type="email"/>
</div>

<div>
<label class="block text-sm font-semibold mb-2">Phone Number</label>
<input name="phone"
       value="{{ old('phone') }}"
       class="w-full rounded-lg border-slate-300 dark:border-slate-700 dark:bg-slate-800
              focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary"
       placeholder="+1 (555) 000-0000" type="tel"/>
</div>

<div class="md:col-span-2">
<label class="block text-sm font-semibold mb-2">Street Address</label>
<input name="address"
       value="{{ old('address') }}"
       class="w-full rounded-lg border-slate-300 dark:border-slate-700 dark:bg-slate-800
              focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary"
       placeholder="123 Orchard Lane" type="text"/>
</div>

<div>
<label class="block text-sm font-semibold mb-2">City</label>
<input name="city"
       value="{{ old('city') }}"
       class="w-full rounded-lg border-slate-300 dark:border-slate-700 dark:bg-slate-800
              focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary"
       placeholder="San Francisco" type="text"/>
</div>

<div>
<label class="block text-sm font-semibold mb-2">Zip / Postal Code</label>
<input name="pincode"
       value="{{ old('pincode') }}"
       class="w-full rounded-lg border-slate-300 dark:border-slate-700 dark:bg-slate-800
              focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary"
       placeholder="94103" type="text"/>
</div>

</form>
</section>



<!-- Payment Method -->
<section class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 p-6 md:p-8">
<div class="flex items-center gap-3 mb-6">
<span class="material-symbols-outlined text-primary">payments</span>
<h2 class="text-xl font-bold">Payment Method</h2>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
<!-- Card 1: UPI -->
<div class="relative cursor-pointer group border-2 border-primary bg-primary/5 rounded-xl p-4 flex flex-col items-center justify-center gap-2 transition-all">
<div class="absolute top-2 right-2">
<span class="material-symbols-outlined text-primary text-xl">check_circle</span>
</div>
<span class="material-symbols-outlined text-3xl text-primary">qr_code_2</span>
<span class="text-sm font-bold">UPI</span>
</div>
<!-- Card 2: Card -->
<div class="cursor-pointer group border-2 border-slate-200 dark:border-slate-700 hover:border-primary/50 rounded-xl p-4 flex flex-col items-center justify-center gap-2 transition-all">
<span class="material-symbols-outlined text-3xl text-slate-400 group-hover:text-primary/70">credit_card</span>
<span class="text-sm font-bold">Card</span>
</div>
<!-- Card 3: Net Banking -->
<div class="cursor-pointer group border-2 border-slate-200 dark:border-slate-700 hover:border-primary/50 rounded-xl p-4 flex flex-col items-center justify-center gap-2 transition-all">
<span class="material-symbols-outlined text-3xl text-slate-400 group-hover:text-primary/70">account_balance</span>
<span class="text-sm font-bold">Net Banking</span>
</div>
<!-- Card 4: COD -->
<div class="cursor-pointer group border-2 border-slate-200 dark:border-slate-700 hover:border-primary/50 rounded-xl p-4 flex flex-col items-center justify-center gap-2 transition-all">
<span class="material-symbols-outlined text-3xl text-slate-400 group-hover:text-primary/70">local_shipping</span>
<span class="text-sm font-bold">COD</span>
</div>
</div>
<!-- UPI Details Example -->
<div class="bg-slate-50 dark:bg-slate-800/50 rounded-lg p-5 border border-slate-100 dark:border-slate-800">
<label class="block text-sm font-semibold mb-2">UPI ID</label>
<div class="flex gap-3">
<input class="flex-1 rounded-lg border-slate-300 dark:border-slate-700 dark:bg-slate-800 focus:ring-primary focus:border-primary" placeholder="username@upi" type="text"/>
<button class="px-4 py-2 bg-slate-900 text-white rounded-lg text-sm font-bold hover:bg-slate-800 transition-colors">Verify</button>
</div>
<p class="text-xs text-slate-500 mt-3 flex items-center gap-1">
<span class="material-symbols-outlined text-sm">info</span>
                            A payment request will be sent to your UPI app.
                        </p>
</div>
<!-- Trust Badges -->
<div class="mt-8 pt-6 border-t border-slate-100 dark:border-slate-800 flex flex-wrap justify-center gap-6 opacity-60">
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-lg">shield</span>
<span class="text-xs font-semibold">SSL Secure</span>
</div>
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-lg">verified_user</span>
<span class="text-xs font-semibold">Verified Payment</span>
</div>
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-lg">lock</span>
<span class="text-xs font-semibold">256-bit Encryption</span>
</div>
</div>
</section>

</div>

<!-- Right -->
<aside class="lg:col-span-5">
<div class="sticky top-24 bg-white dark:bg-slate-900 rounded-xl shadow-lg border border-slate-200 dark:border-slate-800 overflow-hidden">
<div class="p-6 border-b border-slate-100 dark:border-slate-800">
<h2 class="text-lg font-bold">Order Summary</h2>
</div>
<div class="p-6 space-y-4 max-h-[400px] overflow-y-auto">

@php 
    $subtotal = 0; 
@endphp

@foreach(session('cart') as $item)
@php 
    $lineTotal = $item['price'] * $item['quantity'];
    $subtotal += $lineTotal;
@endphp

<div class="flex gap-4">
    <div class="size-20 bg-primary/10 rounded-lg bg-cover bg-center"
         style="background-image: url('{{ isset($item['image']) ? asset('storage/'.$item['image']) : asset('images/no-image.png') }}');">

    </div>
    <div class="flex-1">
        <h3 class="font-bold text-sm">{{ $item['name'] }}</h3>
        <p class="text-xs text-slate-500">{{ $item['variant'] ?? '' }}</p>
        <div class="flex justify-between items-end mt-2">
            <span class="text-xs font-medium text-slate-600 dark:text-slate-400">
                Qty: {{ $item['quantity'] }}
            </span>
            <span class="font-bold text-sm text-slate-900 dark:text-white">
                ₹{{ number_format($lineTotal, 2) }}
            </span>
        </div>
    </div>
</div>
@endforeach


</div>
<div class="p-6 bg-slate-50 dark:bg-slate-800/30 space-y-3">
    @php
    $tax = $subtotal * 0.08;
    $grandTotal = $subtotal + $tax;
@endphp
<div class="flex justify-between text-sm text-slate-600 dark:text-slate-400">
    <span>Subtotal</span>
    <span>₹{{ number_format($subtotal, 2) }}</span>
</div>


<div class="flex justify-between text-sm text-slate-600 dark:text-slate-400">
    <span>Shipping</span>
    <span class="text-primary font-medium">Free</span>
</div>


<div class="flex justify-between text-sm text-slate-600 dark:text-slate-400">
    <span>Tax (8%)</span>
    <span>₹{{ number_format($tax, 2) }}</span>
</div>

<div class="h-px bg-slate-200 dark:bg-slate-700 my-2"></div>
<div class="flex justify-between items-center pt-2">
    <span class="font-bold text-lg">Total</span>
    <span class="text-2xl font-bold text-primary">
        ₹{{ number_format($grandTotal, 2) }}
    </span>
</div>
</div>
<div class="p-6 space-y-4">
<button type="submit" form="checkout-form"
    {{ $isAdmin ? 'disabled' : '' }}
    class="w-full font-bold py-4 px-6 rounded-xl flex items-center justify-center gap-2 transition-all shadow-md
    {{ $isAdmin 
        ? 'bg-gray-300 text-gray-500 cursor-not-allowed' 
        : 'bg-primary hover:bg-primary/90 text-slate-900 shadow-primary/20' }}">
    
    <span class="material-symbols-outlined">lock</span>

    {{ $isAdmin ? 'Admin cannot place orders' : 'Pay ₹'.number_format($grandTotal, 2).' Now' }}
</button>
<p class="text-[10px] text-center text-slate-500 uppercase tracking-widest font-bold">
                            Guaranteed Safe Checkout
                        </p>
</div>
</div>
</aside>

</div>
</main>
</div>
@endsection
