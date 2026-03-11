@extends('layouts.frontend')

@section('title', 'Shipping Policy - APSAVI Global Pvt. Ltd.')

@section('content')

<main class="flex-grow">

<!-- Hero Section -->
<div class="relative bg-[#DCE8CC]/40 py-16 sm:py-24">
    <div class="max-w-3xl mx-auto text-center px-4">
        <h1 class="text-4xl sm:text-5xl font-bold mb-6">Shipping, Cancellation, COD & Coupon Policy</h1>
        <p class="text-lg text-gray-600">
            At Apsa Foods, we value your time and money, and ensure that every order reaches you safely,
            hygienically and within the committed timeline.
        </p>
    </div>
</div>

<!-- Shipping Info -->
<section class="max-w-6xl mx-auto px-4 -mt-10 relative z-10 mb-20">
    <div class="bg-white rounded-2xl shadow-xl border p-10">
        <h2 class="text-2xl font-bold mb-6 text-primary">Shipping Policy</h2>

        <p class="text-gray-600 mb-4">
            Your confirmed orders will be dispatched within <strong>24 hours</strong>.
            Once your order is dispatched, you will receive tracking details via email.
        </p>

        <p class="text-gray-600 mb-6">
            We have partnered with leading logistics partners such as
            <strong>Wheelseye, Porter, Delhivery, First Flight</strong> to ensure fast and secure delivery.
        </p>

        <div class="grid md:grid-cols-2 gap-8 mt-6">
            <div class="bg-gray-50 p-6 rounded-lg border">
                <h4 class="font-bold mb-2">Metros & Tier 1 Cities</h4>
                <p class="text-sm text-gray-600">2 to 4 working days</p>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg border">
                <h4 class="font-bold mb-2">Tier 2, Tier 3 & Rural Areas</h4>
                <p class="text-sm text-gray-600">5 to 6 working days</p>
            </div>
        </div>

        <p class="mt-6 text-gray-600">
            For any shipping queries, contact us at:
            <strong>customercare@apsafoods.com</strong>
        </p>
    </div>
</section>

<!-- Cancellation Policy -->
<section class="bg-white py-16 border-t">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-2xl font-bold mb-6 text-center">Cancellation Policy</h2>

        <div class="bg-gray-50 p-8 rounded-xl border text-gray-600 space-y-4">
            <p>
                Apsa Foods reserves the right to cancel any order without explanation if the requirement
                cannot be fulfilled. Any cancellation or refund communication will be shared within a reasonable time.
            </p>
            <p>
                If a customer wishes to cancel an order after confirmation, they must email the
                <strong>Order Number</strong> to <strong>customercare@apsafoods.com</strong>.
            </p>
        </div>
    </div>
</section>

<!-- COD Policy -->
<section class="py-16 bg-[#f6f8f6]">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-2xl font-bold mb-6 text-center">Cash On Delivery (COD) Policy</h2>

        <ul class="bg-white p-8 rounded-xl border shadow-sm text-gray-600 space-y-3 list-disc pl-6">
            <li>All items in the cart must be eligible for COD.</li>
            <li>The provided pin code must be serviceable for COD.</li>
            <li>You cannot open the box before making the payment.</li>
            <li>If the package is open or tampered, do not accept the order.</li>
        </ul>
    </div>
</section>

<!-- Coupon Policy -->
<section class="bg-white py-16 border-t">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-2xl font-bold mb-6 text-center">Redeeming Your Coupon</h2>

        <ul class="bg-gray-50 p-8 rounded-xl border text-gray-600 space-y-3 list-disc pl-6">
            <li>Refund Coupon is valid for 7 days from the date of issue.</li>
            <li>Cart value must be equal to or greater than the coupon value.</li>
            <li>Coupon cannot be used if cart value is less than coupon value.</li>
            <li>Coupon cannot be split into multiple amounts.</li>
            <li>Each item can be exchanged only once for a coupon.</li>
            <li>Two or more coupons cannot be combined.</li>
            <li>Coupons are non-transferable.</li>
            <li>All return requests must be emailed within 7 days of receiving the product.</li>
        </ul>
    </div>
</section>


</main>

@endsection
