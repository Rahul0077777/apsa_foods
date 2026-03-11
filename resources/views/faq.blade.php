@extends('layouts.frontend')

@section('title', 'FAQs - APSAVI Global Pvt. Ltd.')

@section('content')
<div class="bg-[#f7fbf5] py-20">
    <div class="max-w-5xl mx-auto px-4 text-center">

        <h1 class="text-5xl font-extrabold mb-4">Frequently Asked Questions</h1>
        <p class="text-green-700 text-lg mb-10">
            APSAVI Global Pvt. Ltd. – Bubbly Soft Drinks & Aquapine Premium Drinking Water
        </p>

        <!-- FAQ Accordion -->
        <div class="max-w-3xl mx-auto space-y-6 text-left">

            @php
            $faqs = [
                ["Who owns the brands?", "Bubbly Soft Drinks and Aquapine Premium Drinking Water are owned and operated by APSAVI Global Pvt. Ltd."],
                ["What flavors are available under Bubbly?", "Bubbly is available in Jeera, Tangi Orange, Power Mint, Lemonada, Mojito, and Cola."],
                ["Are the products compliant with safety standards?", "Yes. All products are manufactured and packaged in compliance with applicable food safety and regulatory standards."],
                ["Are the beverages alcoholic?", "No. All products are non-alcoholic."],
                ["Are returns allowed for change of mind?", "No. Returns are not permitted for reasons other than damage, expiry, tampering, or incorrect delivery."],
                ["Where are the products available?", "Products are sold through authorised distributors, retailers, and approved sales channels."],
                ["Does the company offer bulk or distributorship orders?", "Yes. Bulk purchase and distributorship enquiries may be submitted through official company communication channels."]
            ];
            @endphp

            @foreach($faqs as $index => $faq)
            <details class="group bg-white rounded-3xl border border-green-200 p-6 transition-all">
                <summary class="flex justify-between items-center cursor-pointer list-none font-bold text-lg">
                    Q{{ $index+1 }}. {{ $faq[0] }}
                    <span class="text-green-500 text-2xl group-open:rotate-45 transition">+</span>
                </summary>
                <p class="mt-4 text-green-700 leading-relaxed">
                    {{ $faq[1] }}
                </p>
            </details>
            @endforeach

        </div>
    </div>
</div>
@endsection
