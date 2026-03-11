@extends('layouts.frontend')

@section('title', 'Terms & Conditions - APSAVI Global Pvt. Ltd.')

@section('content')
<main class="flex-grow w-full max-w-[1200px] mx-auto px-4 md:px-8 py-8 md:py-12">

<nav class="flex flex-wrap gap-2 mb-8 text-sm items-center">
    <a class="text-text-muted hover:text-primary transition-colors" href="{{ url('/') }}">Home</a>
    <span class="text-text-muted material-symbols-outlined text-[16px]">chevron_right</span>
    <span class="text-text-main dark:text-white font-semibold">Terms &amp; Conditions</span>
</nav>

<header class="mb-10 border-b border-border-light dark:border-white/10 pb-8">
    <h1 class="text-3xl md:text-4xl font-bold tracking-tight mb-4">Terms &amp; Conditions</h1>
    <p class="text-sm text-text-muted">APSAVI Global Pvt. Ltd. (Bubbly Soft Drinks & Aquapine Premium Drinking Water)</p>
</header>

<div class="flex flex-col lg:flex-row gap-12">

<!-- Sidebar -->
<aside class="lg:w-72">
    <div class="sticky top-28 rounded-lg border bg-white p-4 shadow">
        <h3 class="text-xs font-bold uppercase mb-3">Table of Contents</h3>
        <nav class="flex flex-col gap-2 text-sm">
            <a href="#use" class="hover:text-primary">01. Use of Website</a>
            <a href="#product" class="hover:text-primary">02. Product Information</a>
            <a href="#orders" class="hover:text-primary">03. Orders & Availability</a>
            <a href="#pricing" class="hover:text-primary">04. Pricing</a>
            <a href="#returns" class="hover:text-primary">05. Returns & Refunds</a>
            <a href="#ip" class="hover:text-primary">06. Intellectual Property</a>
            <a href="#liability" class="hover:text-primary">07. Limitation of Liability</a>
            <a href="#links" class="hover:text-primary">08. Third-Party Links</a>
            <a href="#law" class="hover:text-primary">09. Governing Law</a>
            <a href="#amend" class="hover:text-primary">10. Amendments</a>
        </nav>
    </div>
</aside>

<!-- Content -->
<article class="flex-1 max-w-3xl">

<div class="bg-primary-light/40 border rounded-lg p-6 mb-10">
    <p class="font-semibold mb-2">Please Read Carefully</p>
    <p>
        These Terms & Conditions (“Terms”) govern the access and use of the website and services
        operated by APSAVI Global Pvt. Ltd. (“Company”, “We”, “Us”, “Our”).
        By using this website, you agree to these Terms.
    </p>
</div>

<section id="use" class="mb-10">
    <h2 class="text-xl font-bold mb-2">1. Use of Website</h2>
    <p>This website is intended for lawful use only. Users shall not misuse or disrupt the website or violate any laws.</p>
</section>

<section id="product" class="mb-10">
    <h2 class="text-xl font-bold mb-2">2. Product Information</h2>
    <p>All product descriptions, images, flavours, and specifications are for information only and may change without notice.</p>
</section>

<section id="orders" class="mb-10">
    <h2 class="text-xl font-bold mb-2">3. Orders & Availability</h2>
    <p>Product availability may vary. The Company reserves the right to cancel or refuse any order.</p>
</section>

<section id="pricing" class="mb-10">
    <h2 class="text-xl font-bold mb-2">4. Pricing</h2>
    <p>Prices are subject to change. Taxes and delivery charges may apply as per law.</p>
</section>

<section id="returns" class="mb-10">
    <h2 class="text-xl font-bold mb-2">5. Returns & Refunds</h2>
    <p>Returns and refunds are governed by the Company’s Return & Refund Policy.</p>
</section>

<section id="ip" class="mb-10">
    <h2 class="text-xl font-bold mb-2">6. Intellectual Property</h2>
    <p>All logos, brand names, content, and designs belong exclusively to APSAVI Global Pvt. Ltd.</p>
</section>

<section id="liability" class="mb-10">
    <h2 class="text-xl font-bold mb-2">7. Limitation of Liability</h2>
    <p>The Company is not liable for any indirect or consequential damages except as required by law.</p>
</section>

<section id="links" class="mb-10">
    <h2 class="text-xl font-bold mb-2">8. Third-Party Links</h2>
    <p>The Company is not responsible for third-party websites linked from this site.</p>
</section>

<section id="law" class="mb-10">
    <h2 class="text-xl font-bold mb-2">9. Governing Law & Jurisdiction</h2>
    <p>These Terms are governed by the laws of India. Courts of Delhi NCR shall have jurisdiction.</p>
</section>

<section id="amend" class="mb-10">
    <h2 class="text-xl font-bold mb-2">10. Amendments</h2>
    <p>The Company may update these Terms at any time without notice.</p>
</section>

</article>
</div>
</main>
@endsection
