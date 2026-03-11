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
    <p class="text-text-muted">Apsa Foods</p>
</header>

<div class="flex flex-col lg:flex-row gap-12 relative">

<!-- Sidebar -->
<aside class="lg:w-64 flex-shrink-0">
    <div class="sticky top-24 rounded-xl border border-[#e7f3e7] bg-white p-6 shadow-sm">
        <h3 class="text-sm font-bold uppercase tracking-wider text-text-muted mb-4">Table of Contents</h3>
        <nav class="flex flex-col gap-2">
            <a class="hover:text-primary" href="#introduction">Introduction</a>
            <a class="hover:text-primary" href="#information-we-collect">Information We Collect</a>
            <a class="hover:text-primary" href="#how-we-use-data">How We Use Your Information</a>
            <a class="hover:text-primary" href="#disclosure">Disclosure of Information</a>
            <a class="hover:text-primary" href="#security">Security</a>
            <a class="hover:text-primary" href="#choices">Your Choices</a>
            <a class="hover:text-primary" href="#changes">Changes to Policy</a>
            <a class="hover:text-primary" href="#contact-us">Contact Us</a>
        </nav>
    </div>
</aside>

<!-- Content -->
<article class="flex-1 max-w-3xl">

<section id="introduction" class="mb-12">
    <p class="text-lg">
        Welcome to Apsa Foods (“we,” “our,” or “us”). Your privacy is important to us.
        This Privacy Policy explains how we collect, use, disclose, and safeguard your personal data.
        By using our website www.Apsafoods.com, you consent to the practices described in this policy.
    </p>
</section>

<section id="information-we-collect" class="mb-12 border-t pt-8">
    <h2 class="text-2xl font-bold mb-4">1. Information We Collect</h2>

    <p class="font-semibold mb-2">Personal Information</p>
    <p class="mb-4">
        When you use our Website, we may collect personal information such as
        your name, email address, and phone number.
    </p>

    <p class="font-semibold mb-2">Usage Information</p>
    <p>
        We automatically collect data related to your use of the Website,
        including IP address, browser type, pages viewed, and date & time of visit.
    </p>
</section>

<section id="how-we-use-data" class="mb-12 border-t pt-8">
    <h2 class="text-2xl font-bold mb-4">2. How We Use Your Information</h2>
    <ul class="list-disc pl-5 space-y-2">
        <li>To provide and maintain our services</li>
        <li>To respond to inquiries and provide customer support</li>
        <li>To process transactions and send notifications</li>
        <li>To send promotional emails and updates (you can opt out anytime)</li>
        <li>To comply with legal obligations and resolve disputes</li>
    </ul>
</section>

<section id="disclosure" class="mb-12 border-t pt-8">
    <h2 class="text-2xl font-bold mb-4">3. Disclosure of Your Information</h2>
    <p>
        We may share your information with service providers who help us operate the Website
        and with legal authorities when required by law.
    </p>
    <p class="mt-3">
        We do <strong>not</strong> sell, rent, or trade your personal information to third parties.
    </p>
</section>

<section id="security" class="mb-12 border-t pt-8">
    <h2 class="text-2xl font-bold mb-4">4. Security</h2>
    <p>
        We take reasonable steps to protect your personal data from unauthorized access,
        disclosure, alteration, or destruction. However, no method of transmission over
        the internet is completely secure.
    </p>
</section>

<section id="choices" class="mb-12 border-t pt-8">
    <h2 class="text-2xl font-bold mb-4">5. Your Choices</h2>
    <ul class="list-disc pl-5 space-y-2">
        <li>Access, update, or delete your personal information</li>
        <li>Opt out of promotional emails</li>
        <li>Disable cookies in your browser settings</li>
    </ul>
</section>

<section id="changes" class="mb-12 border-t pt-8">
    <h2 class="text-2xl font-bold mb-4">6. Changes to this Privacy Policy</h2>
    <p>
        We may update this Privacy Policy from time to time. Any changes will be posted
        on this page and become effective immediately.
    </p>
</section>

<section id="contact-us" class="mb-12 border-t pt-8">
    <h2 class="text-2xl font-bold mb-4">7. Contact Us</h2>
    <p>
        If you have any questions regarding this Privacy Policy, please contact us at:
        <strong>customercare@Apsafoods.com</strong>
    </p>
</section>

</article>
</div>
</main>

@endsection
