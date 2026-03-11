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
    <p class="text-sm text-text-muted">Apsa Foods</p>
</header>

<div class="flex flex-col lg:flex-row gap-12">

<!-- Sidebar -->
<aside class="lg:w-72">
    <div class="sticky top-28 rounded-lg border bg-white p-4 shadow">
        <h3 class="text-xs font-bold uppercase mb-3">Table of Contents</h3>
        <nav class="flex flex-col gap-2 text-sm">
            <a href="#intro" class="hover:text-primary">01. Introduction</a>
            <a href="#ip" class="hover:text-primary">02. Intellectual Property</a>
            <a href="#termination" class="hover:text-primary">03. Termination</a>
            <a href="#survival" class="hover:text-primary">04. Survival of Terms</a>
            <a href="#links" class="hover:text-primary">05. Links to Other Sites</a>
            <a href="#changes" class="hover:text-primary">06. Changes to Agreement</a>
            <a href="#acceptance" class="hover:text-primary">07. Acceptance of Terms</a>
            <a href="#liability" class="hover:text-primary">08. Limitation of Liability</a>
            <a href="#warranty" class="hover:text-primary">09. Warranty Disclaimer</a>
            <a href="#contact" class="hover:text-primary">10. Contact Us</a>
        </nav>
    </div>
</aside>

<!-- Content -->
<article class="flex-1 max-w-3xl">

<div class="bg-primary-light/40 border rounded-lg p-6 mb-10">
    <p class="font-semibold mb-2">Please Read Carefully</p>
    <p>
        Please read these Terms and Conditions (“Agreement”) carefully before using
        www.Apsafoods.com (“the Website”). This Agreement sets forth the legally
        binding terms and conditions for your use of the Website.
    </p>
</div>

<section id="intro" class="mb-10">
    <h2 class="text-xl font-bold mb-2">1. Introduction</h2>
    <p>
        By accessing or using this Website, you agree to be bound by these Terms and Conditions.
        If you do not agree, please do not use the Website.
    </p>
</section>

<section id="ip" class="mb-10">
    <h2 class="text-xl font-bold mb-2">2. Intellectual Property</h2>
    <p>
        The Website and its original content, features, and functionality are owned by
        Pilot Chef’s, including all related secrets and other intellectual property.
    </p>
</section>

<section id="termination" class="mb-10">
    <h2 class="text-xl font-bold mb-2">3. Termination</h2>
    <p>
        We may terminate your access to the Website, without cause or notice,
        which may result in the forfeiture and destruction of all information associated with you.
    </p>
</section>

<section id="survival" class="mb-10">
    <h2 class="text-xl font-bold mb-2">4. Survival of Terms</h2>
    <p>All provisions of this Agreement that, by their nature, should survive termination, shall survive termination, including:</p>
    <ul class="list-disc pl-6 text-gray-600 mt-3 space-y-2">
        <li>Ownership provisions</li>
        <li>Warranty disclaimers</li>
        <li>Indemnity</li>
        <li>Limitations of liability</li>
    </ul>
</section>

<section id="links" class="mb-10">
    <h2 class="text-xl font-bold mb-2">5. Links to Other Sites</h2>
    <p>
        Our Website may contain links to third-party sites that are not owned or controlled by us.
        We have no control over and assume no responsibility for the content, privacy policies,
        or practices of any third-party sites or services.
    </p>
</section>

<section id="changes" class="mb-10">
    <h2 class="text-xl font-bold mb-2">6. Changes to Agreement</h2>
    <p>
        We reserve the right to modify these Terms and Conditions at any time by posting
        updated terms on the Website.
    </p>
</section>

<section id="acceptance" class="mb-10">
    <h2 class="text-xl font-bold mb-2">7. Acceptance of Terms</h2>
    <p>
        Your decision to continue to visit and make use of the Website after such changes
        constitutes your formal acceptance of the updated Terms and Conditions.
    </p>
</section>

<section id="liability" class="mb-10">
    <h2 class="text-xl font-bold mb-2">8. Limitation of Liability</h2>
    <p>
        We shall not be held liable for any damages arising from the use or inability
        to use the Website, except as required by law.
    </p>
</section>

<section id="warranty" class="mb-10">
    <h2 class="text-xl font-bold mb-2">9. Warranty Disclaimer</h2>
    <p>
        The Website is provided "as is" without warranties of any kind, either express or implied.
    </p>
</section>

<section id="contact" class="mb-10">
    <h2 class="text-xl font-bold mb-2">10. Contact Us</h2>
    <p>
        If you have any questions about this Agreement, please contact us at:
    </p>
    <p class="mt-3 font-semibold">Email: Customercare@Apsafoods.com</p>
</section>

</article>
</div>
</main>
@endsection
