@extends('layouts.frontend')

@section('title', 'Shipping Policy - APSAVI Global Pvt. Ltd.')

@section('content')

<main class="flex-grow">

<!-- Hero Section -->
<div class="relative bg-[#DCE8CC]/40 py-16 sm:py-24">
    <div class="max-w-3xl mx-auto text-center px-4">
        <h1 class="text-4xl sm:text-5xl font-bold mb-6">Shipping Policy & Delivery Information</h1>
        <p class="text-lg text-gray-600">
            APSAVI Global Pvt. Ltd. ensures safe, hygienic and timely delivery of all Bubbly Soft Drinks
            and Aquapine Premium Drinking Water products.
        </p>
    </div>
</div>

<!-- Info Card -->
<div class="max-w-5xl mx-auto px-4 -mt-10 relative z-10 mb-20">
    <div class="bg-white rounded-2xl shadow-xl border flex flex-col md:flex-row">
        <div class="bg-primary p-8 md:w-1/3 flex flex-col justify-center items-center text-center text-white">
            <span class="material-symbols-outlined text-6xl mb-4">local_shipping</span>
            <h3 class="text-2xl font-bold mb-2">Safe Delivery</h3>
            <p class="text-white/90 text-sm">From warehouse to your doorstep with care.</p>
        </div>
        <div class="p-8 md:w-2/3">
            <p class="text-gray-600 mb-4">
                We follow strict quality and safety standards during storage and transportation.
                All products are packed securely to avoid leakage, contamination, or damage.
            </p>
            <ul class="space-y-2 text-primary font-medium">
                <li class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-sm">check_circle</span>
                    Temperature-controlled transport (where applicable)
                </li>
                <li class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-sm">check_circle</span>
                    Tamper-proof packaging
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Process Section -->
<section class="max-w-7xl mx-auto px-4 mb-24">
    <div class="text-center mb-16">
        <h2 class="text-3xl font-bold mb-4">Our Delivery Process</h2>
        <p class="text-gray-500">How your order reaches you.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <div class="bg-white p-6 rounded-xl shadow-sm text-center">
            <span class="material-symbols-outlined text-4xl text-primary mb-3">shopping_cart</span>
            <h3 class="font-bold mb-2">Order Placed</h3>
            <p class="text-sm text-gray-500">Customer places order via website or distributor.</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm text-center">
            <span class="material-symbols-outlined text-4xl text-primary mb-3">inventory_2</span>
            <h3 class="font-bold mb-2">Packed</h3>
            <p class="text-sm text-gray-500">Products packed in secure cartons.</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm text-center">
            <span class="material-symbols-outlined text-4xl text-primary mb-3">warehouse</span>
            <h3 class="font-bold mb-2">Dispatched</h3>
            <p class="text-sm text-gray-500">Order dispatched from nearest warehouse.</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm text-center">
            <span class="material-symbols-outlined text-4xl text-primary mb-3">home</span>
            <h3 class="font-bold mb-2">Delivered</h3>
            <p class="text-sm text-gray-500">Delivered to customer or retailer location.</p>
        </div>
    </div>
</section>

<!-- Delivery Timelines -->
<section class="bg-white py-20 border-t">
    <div class="max-w-5xl mx-auto px-4">
        <h2 class="text-2xl font-bold mb-8 text-center">Delivery Timelines</h2>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-gray-50 p-6 rounded-lg border">
                <h4 class="font-bold mb-2">Metro Cities</h4>
                <p class="text-sm text-gray-600">1–3 business days</p>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg border">
                <h4 class="font-bold mb-2">Tier 2 Cities</h4>
                <p class="text-sm text-gray-600">3–5 business days</p>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg border">
                <h4 class="font-bold mb-2">Remote Locations</h4>
                <p class="text-sm text-gray-600">5–7 business days</p>
            </div>
        </div>
    </div>
</section>

<!-- Issues & Support -->
<section class="py-20 bg-[#f6f8f6]">
    <div class="max-w-4xl mx-auto px-4">
        <div class="bg-white rounded-2xl p-8 border shadow-sm">
            <h2 class="text-2xl font-bold mb-6 text-center">Delivery Issues</h2>
            <p class="text-gray-600 mb-4">
                In case of delayed, damaged, or missing shipments, please contact our support team
                within 24 hours of delivery.
            </p>
            <p class="text-gray-600">
                Email: <strong>support@apsaviglobal.com</strong><br>
                Phone: <strong>+91-XXXXXXXXXX</strong>
            </p>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="bg-primary py-16 text-white text-center">
    <div class="max-w-2xl mx-auto px-4">
        <h2 class="text-3xl font-bold mb-4">Need Help with Shipping?</h2>
        <p class="mb-6">Our support team is always ready to assist you.</p>
        <a href="mailto:support@apsaviglobal.com"
           class="inline-flex items-center justify-center px-6 py-3 bg-white text-primary font-bold rounded-md hover:bg-gray-100">
            Contact Support
        </a>
    </div>
</section>

</main>

@endsection
