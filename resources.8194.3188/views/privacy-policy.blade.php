@extends('layouts.frontend')

@section('title', 'Privacy Policy - APSAVI Global Pvt. Ltd.')

@section('content')

<main class="flex-grow w-full max-w-[1100px] mx-auto px-4 md:px-8 py-8 md:py-12">

<!-- Breadcrumbs -->
<nav class="flex flex-wrap gap-2 mb-6 text-sm">
    <a class="text-text-muted hover:text-primary transition-colors" href="{{ url('/') }}">Home</a>
    <span class="text-text-muted">/</span>
    <span class="text-text-main font-medium">Privacy Policy</span>
</nav>

<!-- Page Header -->
<header class="mb-12 border-b border-[#e7f3e7] pb-8">
    <h1 class="text-4xl md:text-5xl font-black tracking-tight mb-4">Privacy Policy</h1>
    <p class="text-text-muted">APSAVI Global Pvt. Ltd. (Bubbly Soft Drinks & Aquapine Premium Drinking Water)</p>
</header>

<div class="flex flex-col lg:flex-row gap-12 relative">

<!-- Sidebar -->
<aside class="lg:w-64 flex-shrink-0">
    <div class="sticky top-24 rounded-xl border border-[#e7f3e7] bg-white p-6 shadow-sm">
        <h3 class="text-sm font-bold uppercase tracking-wider text-text-muted mb-4">Table of Contents</h3>
        <nav class="flex flex-col gap-2">
            <a class="hover:text-primary" href="#introduction">Introduction</a>
            <a class="hover:text-primary" href="#information-we-collect">Information We Collect</a>
            <a class="hover:text-primary" href="#how-we-use-data">How We Use Data</a>
            <a class="hover:text-primary" href="#cookies-tracking">Cookies & Tracking</a>
            <a class="hover:text-primary" href="#third-party-sharing">Third-Party Sharing</a>
            <a class="hover:text-primary" href="#contact-us">Contact Us</a>
        </nav>
    </div>
</aside>

<!-- Content -->
<article class="flex-1 max-w-3xl">

<section id="introduction" class="mb-12">
    <p class="text-lg">
        At <strong>APSAVI Global Pvt. Ltd.</strong>, your privacy is important to us.
        This Privacy Policy explains how we collect, use, and protect your personal
        information when you visit our website or purchase our products.
    </p>
</section>

<section id="information-we-collect" class="mb-12 border-t pt-8">
    <h2 class="text-2xl font-bold mb-4">1. Information We Collect</h2>
    <ul class="list-disc pl-5 space-y-2">
        <li>Name, email address, phone number, and delivery address</li>
        <li>Payment details processed securely by payment gateways</li>
        <li>Website usage data such as IP address and browsing behavior</li>
    </ul>
</section>

<section id="how-we-use-data" class="mb-12 border-t pt-8">
    <h2 class="text-2xl font-bold mb-4">2. How We Use Data</h2>
    <p>
        We use your information to process orders, provide customer support,
        improve our services, send updates, and ensure secure transactions.
    </p>
</section>

<section id="cookies-tracking" class="mb-12 border-t pt-8">
    <h2 class="text-2xl font-bold mb-4">3. Cookies & Tracking</h2>
    <p>
        Our website uses cookies to enhance user experience and analyze traffic.
        You can control cookies through your browser settings.
    </p>
</section>

<section id="third-party-sharing" class="mb-12 border-t pt-8">
    <h2 class="text-2xl font-bold mb-4">4. Third-Party Sharing</h2>
    <p>
        We do not sell your personal data. Information is shared only with trusted
        partners for payment processing, delivery, and legal compliance.
    </p>
</section>

<section id="contact-us" class="mb-12 border-t pt-8">
    <h2 class="text-2xl font-bold mb-4">5. Contact Us</h2>
    <p>
        For any questions regarding this Privacy Policy, please contact us at:
        <strong>legal@apsaviglobal.com</strong>
    </p>
</section>

</article>
</div>
</main>

@endsection
