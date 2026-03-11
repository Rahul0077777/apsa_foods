@extends('layouts.frontend')

@section('title', 'Return & Refund Policy - APSAVI Global Pvt. Ltd.')

@section('content')
<main class="flex-grow w-full max-w-[1100px] mx-auto px-4 md:px-8 py-8 md:py-12">

    <!-- Breadcrumbs -->
    <nav class="flex flex-wrap gap-2 mb-6 text-sm">
        <a class="text-text-muted hover:text-primary transition-colors" href="{{ url('/') }}">Home</a>
        <span class="text-text-muted">/</span>
        <span class="text-text-main font-medium">Return & Refund Policy</span>
    </nav>

    <!-- Header -->
    <header class="mb-12 border-b border-[#e7f3e7] pb-8">
        <h1 class="text-4xl md:text-5xl font-black tracking-tight mb-4">Return & Refund Policy</h1>
        <p class="text-text-muted">Apsa Foods / Pilot Chef’s</p>
    </header>

    <div class="flex flex-col lg:flex-row gap-12">

        <!-- Sidebar -->
        <aside class="lg:w-64">
            <div class="sticky top-24 rounded-xl border border-[#e7f3e7] bg-white p-6 shadow-sm">
                <h3 class="text-sm font-bold uppercase tracking-wider text-text-muted mb-4">Policy Sections</h3>
                <nav class="flex flex-col gap-2 text-sm">
                    <a href="#policy" class="hover:text-primary">Return Policy</a>
                    <a href="#process" class="hover:text-primary">Return Process</a>
                    <a href="#checks" class="hover:text-primary">Quality Check</a>
                    <a href="#refunds" class="hover:text-primary">Refund Options</a>
                </nav>
            </div>
        </aside>

        <!-- Content -->
        <article class="flex-1 max-w-3xl space-y-10">

            <section id="policy">
                <h2 class="text-2xl font-bold mb-3">1. 7-Day Return Policy</h2>
                <p>
                    Pilot Chef’s offers an easy <strong>7-day return policy</strong> to customers.
                    We provide <strong>Coupon Refund / Exchange / Monetary Refund</strong> options.
                </p>
                <p class="mt-3">
                    Please ensure that you record an <strong>unboxing video</strong> of the package
                    before opening it. This is mandatory for any return or refund request.
                </p>
            </section>

            <section id="process" class="border-t pt-8">
                <h2 class="text-2xl font-bold mb-3">2. How to Initiate a Return</h2>
                <p>
                    If you are dissatisfied with the product received from Apsa Foods, or if there
                    are defects or deficiencies (accepted by us after verification),
                    you may request a return by emailing:
                </p>
                <p class="mt-3 font-semibold">Customercare@Apsafoods.com</p>

                <p class="mt-3">
                    The return request must be initiated within <strong>7 days</strong> from the
                    date of delivery.
                </p>

                <p class="mt-3">
                    Our team will respond within <strong>24–48 hours</strong> of receiving your email.
                </p>
            </section>

            <section id="checks" class="border-t pt-8">
                <h2 class="text-2xl font-bold mb-3">3. Quality Check After Return</h2>
                <p>
                    Once we receive the returned product, a thorough quality inspection
                    will be conducted by our quality team.
                </p>
                <p class="mt-3">
                    Approval of refund or exchange is subject to the return meeting
                    all required conditions and verification standards.
                </p>
            </section>

            <section id="refunds" class="border-t pt-8">
                <h2 class="text-2xl font-bold mb-3">4. Refund / Exchange Options</h2>
                <ul class="list-disc pl-5 mt-3 space-y-2">
                    <li>Coupon Refund</li>
                    <li>Product Exchange</li>
                    <li>Monetary Refund (if applicable)</li>
                </ul>
                <p class="mt-3">
                    The mode of refund will be decided after successful quality verification.
                </p>
            </section>

            <!-- Highlight Box -->
            <div class="bg-primary/10 border border-primary/20 rounded-lg p-6 flex gap-4 items-start">
                <span class="material-symbols-outlined text-primary text-3xl">info</span>
                <div>
                    <p class="font-semibold mb-1">Important Note</p>
                    <p class="text-sm">
                        Return requests without an unboxing video or raised after 7 days of delivery
                        may not be entertained.
                    </p>
                </div>
            </div>

        </article>
    </div>

</main>
@endsection
