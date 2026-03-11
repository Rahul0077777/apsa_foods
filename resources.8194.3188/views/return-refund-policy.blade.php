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
        <p class="text-text-muted">APSAVI Global Pvt. Ltd. – Bubbly Soft Drinks & Aquapine Premium Drinking Water</p>
    </header>

    <div class="flex flex-col lg:flex-row gap-12">

        <!-- Sidebar -->
        <aside class="lg:w-64">
            <div class="sticky top-24 rounded-xl border border-[#e7f3e7] bg-white p-6 shadow-sm">
                <h3 class="text-sm font-bold uppercase tracking-wider text-text-muted mb-4">Policy Sections</h3>
                <nav class="flex flex-col gap-2 text-sm">
                    <a href="#eligibility" class="hover:text-primary">Return Eligibility</a>
                    <a href="#process" class="hover:text-primary">Return Process</a>
                    <a href="#refund" class="hover:text-primary">Refund Timeline</a>
                    <a href="#rights" class="hover:text-primary">Company Rights</a>
                </nav>
            </div>
        </aside>

        <!-- Content -->
        <article class="flex-1 max-w-3xl space-y-10">

            <section id="eligibility">
                <h2 class="text-2xl font-bold mb-3">1. Return Eligibility</h2>
                <p>
                    All products sold under <strong>Bubbly Soft Drinks</strong> and <strong>Aquapine Premium Drinking
                        Water</strong>
                    are consumable goods. Returns or refunds shall be permitted only in cases where the product
                    delivered is:
                </p>
                <ul class="list-disc pl-5 mt-3 space-y-2">
                    <li>Damaged</li>
                    <li>Leaking</li>
                    <li>Tampered</li>
                    <li>Expired</li>
                    <li>Incorrectly supplied</li>
                </ul>
                <p class="mt-3">
                    Opened, partially consumed, or improperly stored products are strictly non-returnable and
                    non-refundable.
                </p>
            </section>

            <section id="process" class="border-t pt-8">
                <h2 class="text-2xl font-bold mb-3">2. Return / Replacement Process</h2>
                <p>
                    Return or replacement requests must be raised within <strong>24 hours of delivery</strong> along
                    with
                    valid photographic or video evidence clearly showing the issue.
                </p>
                <p class="mt-2">
                    Requests without proper proof or raised after the stipulated time may not be entertained.
                </p>
            </section>

            <section id="refund" class="border-t pt-8">
                <h2 class="text-2xl font-bold mb-3">3. Refund Processing</h2>
                <p>
                    Upon verification and approval, refunds (if applicable) shall be processed within
                    <strong>7–10 working days</strong> to the original payment method or as store credit,
                    at the sole discretion of APSAVI Global Pvt. Ltd.
                </p>
            </section>

            <section id="rights" class="border-t pt-8">
                <h2 class="text-2xl font-bold mb-3">4. Company Rights</h2>
                <p>
                    APSAVI Global Pvt. Ltd. reserves the right to accept or reject any return or refund request.
                    The Company also reserves the right to amend this policy at any time without prior notice.
                </p>
            </section>

            <!-- Highlight Box -->
            <div class="bg-primary/10 border border-primary/20 rounded-lg p-6 flex gap-4 items-start">
                <span class="material-symbols-outlined text-primary text-3xl">info</span>
                <div>
                    <p class="font-semibold mb-1">Important Note</p>
                    <p class="text-sm">
                        This Return & Refund Policy forms an integral part of the Terms & Conditions of
                        APSAVI Global Pvt. Ltd.
                    </p>
                </div>
            </div>

        </article>
    </div>

    <!-- Introduction -->
    <div class="space-y-4 mt-5">
        <h2 class="text-2xl font-bold text-text-main dark:text-white">Our Freshness Guarantee</h2>
        <p class="text-base leading-relaxed text-gray-600 dark:text-gray-300 max-w-3xl">
            At Fresh Squeeze, we are committed to delivering the highest quality organic juices straight to your door.
            We understand that sometimes things don't go as planned. If you are not completely satisfied with the
            condition of your delivery, we are here to help make it right.
        </p>
    </div>
    <!-- Eligibility Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 my-4">
        <div
            class="flex flex-col gap-4 p-6 rounded-xl bg-white dark:bg-gray-800 shadow-sm border border-gray-100 dark:border-gray-700">
            <div class="size-12 rounded-full bg-primary/20 flex items-center justify-center text-primary">
                <span class="material-symbols-outlined">inventory_2</span>
            </div>
            <div>
                <h3 class="font-bold text-lg mb-2">Unopened Items</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">Items must be in their original,
                    sealed packaging to be eligible for a return unless damaged.</p>
            </div>
        </div>
        <div
            class="flex flex-col gap-4 p-6 rounded-xl bg-white dark:bg-gray-800 shadow-sm border border-gray-100 dark:border-gray-700">
            <div class="size-12 rounded-full bg-primary/20 flex items-center justify-center text-primary">
                <span class="material-symbols-outlined">timer</span>
            </div>
            <div>
                <h3 class="font-bold text-lg mb-2">24-Hour Window</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">Due to the perishable nature of our
                    products, please report issues within 24 hours of delivery.</p>
            </div>
        </div>
        <div
            class="flex flex-col gap-4 p-6 rounded-xl bg-white dark:bg-gray-800 shadow-sm border border-gray-100 dark:border-gray-700">
            <div class="size-12 rounded-full bg-primary/20 flex items-center justify-center text-primary">
                <span class="material-symbols-outlined">receipt_long</span>
            </div>
            <div>
                <h3 class="font-bold text-lg mb-2">Proof of Purchase</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">A valid receipt or order number is
                    required to process any refund or replacement.</p>
            </div>
        </div>
    </div>
    <!-- Detailed Sections -->
    <div class="grid md:grid-cols-2 gap-12">
        <div class="space-y-4">
            <h3 class="text-xl font-bold flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">do_not_disturb_on</span>
                Non-Refundable Items
            </h3>
            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                Due to health and safety regulations, we cannot accept returns on opened juice bottles or cleanses that
                have been partially consumed, unless the product is spoiled or contaminated upon arrival. Gift cards and
                promotional items are also non-refundable.
            </p>
        </div>
        <div class="space-y-4">
            <h3 class="text-xl font-bold flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">broken_image</span>
                Damaged Products
            </h3>
            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                If your order arrives damaged or spoiled, please do not consume the product. Take clear photos of the
                damaged box and bottles immediately. We will happily send a replacement order free of charge or issue a
                full refund for the affected items.
            </p>
        </div>
    </div>
    <!-- Refund Process Steps -->
    <div class="mt-8">
        <h3 class="text-2xl font-bold mb-8">Refund Process</h3>
        <div class="relative space-y-8 pl-4 md:pl-0">
            <!-- Vertical line for mobile/desktop connecting steps -->
            <div
                class="absolute left-[27px] md:left-8 top-4 bottom-4 w-0.5 bg-gray-200 dark:bg-gray-700 -z-10 hidden md:block">
            </div>
            <!-- Step 1 -->
            <div class="flex flex-col md:flex-row gap-6 items-start">
                <div
                    class="flex-shrink-0 size-16 rounded-full bg-white dark:bg-gray-800 border-4 border-primary/20 flex items-center justify-center z-10">
                    <span class="text-xl font-bold text-primary">01</span>
                </div>
                <div class="pt-2">
                    <h4 class="text-lg font-bold mb-2">Submit a Request</h4>
                    <p class="text-gray-600 dark:text-gray-300">Email our support team at <a
                            class="text-primary hover:underline" href="#">Apsafoods@gmail.com</a> with your order
                        number and a brief description of the issue.</p>
                </div>
            </div>
            <!-- Step 2 -->
            <div class="flex flex-col md:flex-row gap-6 items-start">
                <div
                    class="flex-shrink-0 size-16 rounded-full bg-white dark:bg-gray-800 border-4 border-primary/20 flex items-center justify-center z-10">
                    <span class="text-xl font-bold text-primary">02</span>
                </div>
                <div class="pt-2">
                    <h4 class="text-lg font-bold mb-2">Provide Evidence</h4>
                    <p class="text-gray-600 dark:text-gray-300">If reporting damage or spoilage, please attach at least
                        2 clear photos showing the condition of the package and products.</p>
                </div>
            </div>
            <!-- Step 3 -->
            <div class="flex flex-col md:flex-row gap-6 items-start">
                <div
                    class="flex-shrink-0 size-16 rounded-full bg-white dark:bg-gray-800 border-4 border-primary/20 flex items-center justify-center z-10">
                    <span class="text-xl font-bold text-primary">03</span>
                </div>
                <div class="pt-2">
                    <h4 class="text-lg font-bold mb-2">Review &amp; Approval</h4>
                    <p class="text-gray-600 dark:text-gray-300">Our team will review your request within 24 hours. You
                        will receive an email notification once your refund or replacement is approved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Processing Time Highlight Box -->
    <div class="bg-primary/10 border border-primary/20 rounded-lg p-6 flex gap-4 items-start mt-4">
        <span class="material-symbols-outlined text-primary text-3xl shrink-0">info</span>
        <div>
            <h4 class="font-bold text-lg text-text-main dark:text-white mb-1">Processing Time</h4>
            <p class="text-gray-700 dark:text-gray-300">
                Once approved, refunds are processed immediately by our system. However, please allow <span
                    class="font-bold text-text-main dark:text-white">5-7 business days</span> for your bank or credit
                card company to post the credit to your account.
            </p>
        </div>
    </div>

    <!-- Contact / Support Block -->
    <div class="mt-8 p-8 md:p-12 rounded-2xl bg-gray-900 text-white flex flex-col md:flex-row items-center justify-between gap-8 bg-[url('https://images.unsplash.com/photo-1615485925694-a039163b80f9?q=80&amp;w=2574&amp;auto=format&amp;fit=crop')] bg-cover bg-center relative overflow-hidden group"
        data-alt="Abstract dark green gradient texture">
        <div class="absolute inset-0 bg-black/80"></div> <!-- Overlay for readability -->
        <div class="relative z-10 text-center md:text-left">
            <h3 class="text-2xl font-bold mb-2">Still have questions?</h3>
            <p class="text-gray-300 max-w-md">Our customer success team is available Monday through Friday, 9AM - 6PM</p>
        </div>
      <div class="relative z-10 flex gap-4">
        <a href="mailto:Apsafoods@gmail.com"
        class="bg-primary hover:bg-green-500 text-gray-900 font-bold py-3 px-6 rounded-lg transition-colors flex items-center gap-2">
            <span class="material-symbols-outlined text-[20px]">mail</span>
            Contact Support
        </a>

        <a href="{{ url('/faq') }}"
        class="bg-white/10 hover:bg-white/20 text-white font-medium py-3 px-6 rounded-lg backdrop-blur-sm transition-colors border border-white/10">
            FAQ
        </a>
    </div>
    </div>


</main>
@endsection