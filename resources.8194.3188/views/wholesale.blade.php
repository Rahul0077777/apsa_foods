@extends('layouts.frontend')

@section('title', 'Distributor Partnership - JuiceBrand')

@section('content')

<!-- Hero Section -->
<section class="relative w-full overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 md:px-10 lg:px-40 py-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
        <div>
            <span class="inline-flex items-center gap-2 rounded-full border border-primary/30 bg-primary/10 px-3 py-1 text-xs font-bold text-primary mb-4">
                <span class="material-symbols-outlined text-sm">eco</span>
                B2B Partnership
            </span>

            <h1 class="text-4xl md:text-5xl lg:text-6xl font-black leading-tight">
                Bring the <span class="text-primary">Freshness</span> to Your Shelves
            </h1>

            <p class="mt-4 text-gray-600 dark:text-gray-300 max-w-xl">
                Join our network of premium distributors and offer your customers the purest cold-pressed juices on the market.
            </p>

            <div class="mt-6 flex flex-wrap gap-4">
                <a href="#partner-form" class="px-6 py-3 bg-primary rounded-lg font-bold text-black hover:shadow-lg transition">
                    Apply Now
                </a>
                <a href="#features" class="px-6 py-3 border rounded-lg font-bold hover:bg-gray-100 dark:hover:bg-white/10 transition">
                    Learn More
                </a>
            </div>
        </div>

        <div class="relative rounded-xl overflow-hidden shadow-2xl">
            <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-700"
                 src="https://lh3.googleusercontent.com/aida-public/AB6AXuBT15UIUGyTC3KV2WBapK3AiFtJNBEvpvwSJpxqCuhLg-lwQ6qIAOYkFsMpbC9CnPlJTvauLNOuZpCMvFTxwKlu-dS7Lo81s6Vnj8glnQPscuVe2aad85PNYpb6yK8Y5NpeUvGFQoyCDU9LLal0eKnZ9h8dE38pw0aP7NHueUQwYA2-s_KORrDyt3roddcaH2E1FY9dxT9dxetHIcqh3uJvyNjHJCESlqddcJx_33n6GG-CkA0FrwFwTyMcDjeoVxuejufXdgeq_Qw"
                 alt="Wholesale Juice Bottles">
        </div>
    </div>
</section>

<!-- Social Proof Strip -->
<section class="w-full bg-white dark:bg-white/5 py-8 border-y border-gray-100 dark:border-white/5">
<div class="max-w-7xl mx-auto px-4 md:px-10 flex flex-col items-center gap-6">
<p class="text-sm font-bold text-gray-400 uppercase tracking-widest text-center">Trusted by Retailers Nationwide</p>
<div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-60 grayscale hover:grayscale-0 transition-all duration-500">
<!-- Logos placeholders with text for demonstration -->
<div class="h-8 font-bold text-xl text-gray-800 dark:text-white flex items-center gap-2">
<span class="material-symbols-outlined">storefront</span> WholeFoods
                        </div>
<div class="h-8 font-bold text-xl text-gray-800 dark:text-white flex items-center gap-2">
<span class="material-symbols-outlined">shopping_basket</span> Sprouts
                        </div>
<div class="h-8 font-bold text-xl text-gray-800 dark:text-white flex items-center gap-2">
<span class="material-symbols-outlined">local_mall</span> Erewhon
                        </div>
<div class="h-8 font-bold text-xl text-gray-800 dark:text-white flex items-center gap-2">
<span class="material-symbols-outlined">nutrition</span> GNC LiveWell
                        </div>
</div>
</div>
</section>

<!-- Features Section -->
<section class="py-16 md:py-24 bg-background-light dark:bg-background-dark">
<div class="max-w-7xl mx-auto px-4 md:px-10 lg:px-40">
<div class="flex flex-col gap-12">
<div class="flex flex-col gap-4 text-center items-center">
<h2 class="text-3xl md:text-4xl font-black leading-tight tracking-tight dark:text-white max-w-2xl">
                                Why leading retailers choose <span class="text-primary">JuiceBrand</span>
</h2>
<p class="text-gray-600 dark:text-gray-400 text-lg max-w-2xl">
                                We provide more than just juice. We provide a partnership designed to help your business grow.
                            </p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- Feature 1 -->
<div class="group flex flex-col gap-4 rounded-xl border border-gray-100 dark:border-white/10 bg-white dark:bg-white/5 p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
<div class="size-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-background-dark transition-colors">
<span class="material-symbols-outlined text-3xl">verified</span>
</div>
<div>
<h3 class="text-xl font-bold mb-2 dark:text-white">Unmatched Quality</h3>
<p class="text-gray-500 dark:text-gray-400 leading-relaxed">100% Organic ingredients, absolutely no added sugar, and HPP processed for maximum safety and shelf life.</p>
</div>
</div>
<!-- Feature 2 -->
<div class="group flex flex-col gap-4 rounded-xl border border-gray-100 dark:border-white/10 bg-white dark:bg-white/5 p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
<div class="size-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-background-dark transition-colors">
<span class="material-symbols-outlined text-3xl">ac_unit</span>
</div>
<div>
<h3 class="text-xl font-bold mb-2 dark:text-white">Cold-Chain Logistics</h3>
<p class="text-gray-500 dark:text-gray-400 leading-relaxed">Reliable 24/7 cold-chain delivery support ensures products arrive at your door at peak freshness.</p>
</div>
</div>
<!-- Feature 3 -->
<div class="group flex flex-col gap-4 rounded-xl border border-gray-100 dark:border-white/10 bg-white dark:bg-white/5 p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
<div class="size-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-background-dark transition-colors">
<span class="material-symbols-outlined text-3xl">trending_up</span>
</div>
<div>
<h3 class="text-xl font-bold mb-2 dark:text-white">Growth Support</h3>
<p class="text-gray-500 dark:text-gray-400 leading-relaxed">Dedicated account manager, premium marketing materials, and in-store demo support.</p>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- Form Section -->
<section class="py-16 md:py-24 bg-white dark:bg-white/5 border-y border-gray-100 dark:border-white/5" id="partner-form">
<div class="max-w-7xl mx-auto px-4 md:px-10 lg:px-40">
<div class="flex flex-col lg:flex-row gap-12 lg:gap-20">
<!-- Left Side: Context -->
<div class="lg:w-1/3 flex flex-col gap-8">
<div>
<h3 class="text-2xl font-bold mb-4 dark:text-white">Apply for Partnership</h3>
<p class="text-gray-600 dark:text-gray-400">
                                    Ready to bring premium cold-pressed juice to your customers? Fill out the form, and our sales team will review your application within 24 hours.
                                </p>
</div>
<div class="flex flex-col gap-6">
<div class="flex gap-4 items-start">
<div class="mt-1 size-8 rounded-full bg-green-100 dark:bg-green-900 flex items-center justify-center text-green-700 dark:text-green-300 shrink-0">
<span class="material-symbols-outlined text-sm">check</span>
</div>
<div>
<h4 class="font-bold text-sm dark:text-white">Wholesale Pricing</h4>
<p class="text-sm text-gray-500 dark:text-gray-400">Access to exclusive tiered pricing based on volume.</p>
</div>
</div>
<div class="flex gap-4 items-start">
<div class="mt-1 size-8 rounded-full bg-green-100 dark:bg-green-900 flex items-center justify-center text-green-700 dark:text-green-300 shrink-0">
<span class="material-symbols-outlined text-sm">check</span>
</div>
<div>
<h4 class="font-bold text-sm dark:text-white">Marketing Kit</h4>
<p class="text-sm text-gray-500 dark:text-gray-400">High-res assets and POS materials included.</p>
</div>
</div>
<div class="flex gap-4 items-start">
<div class="mt-1 size-8 rounded-full bg-green-100 dark:bg-green-900 flex items-center justify-center text-green-700 dark:text-green-300 shrink-0">
<span class="material-symbols-outlined text-sm">check</span>
</div>
<div>
<h4 class="font-bold text-sm dark:text-white">Sample Pack</h4>
<p class="text-sm text-gray-500 dark:text-gray-400">Qualified applicants receive a complimentary tasting kit.</p>
</div>
</div>
</div>
<div class="mt-auto p-6 rounded-xl bg-background-light dark:bg-background-dark border border-gray-100 dark:border-white/10">
<p class="text-sm font-medium mb-2 dark:text-white">Direct Line</p>
<a class="text-xl font-bold text-primary hover:underline" href="tel:+180037374">+1 800-FRESH</a>
<p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Mon-Fri, 9am - 5pm EST</p>
</div>
</div>
<!-- Right Side: The Form -->
<div class="lg:w-2/3">
<form class="flex flex-col gap-6 bg-background-light dark:bg-background-dark p-6 md:p-8 rounded-2xl border border-gray-200 dark:border-white/10 shadow-sm">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<!-- Company Name -->
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-gray-700 dark:text-gray-300" for="company">Company Name</label>
<input class="h-11 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-white/5 px-4 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all dark:text-white" id="company" placeholder="e.g. Green Grocers LLC" type="text"/>
</div>
<!-- Contact Person -->
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-gray-700 dark:text-gray-300" for="contact">Contact Person</label>
<input class="h-11 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-white/5 px-4 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all dark:text-white" id="contact" placeholder="Full Name" type="text"/>
</div>
<!-- Email -->
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-gray-700 dark:text-gray-300" for="email">Business Email</label>
<input class="h-11 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-white/5 px-4 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all dark:text-white" id="email" placeholder="name@company.com" type="email"/>
</div>
<!-- Phone -->
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-gray-700 dark:text-gray-300" for="phone">Phone Number</label>
<input class="h-11 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-white/5 px-4 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all dark:text-white" id="phone" placeholder="(555) 000-0000" type="tel"/>
</div>
<!-- Location -->
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-gray-700 dark:text-gray-300" for="location">Region / City</label>
<input class="h-11 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-white/5 px-4 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all dark:text-white" id="location" placeholder="e.g. Austin, TX" type="text"/>
</div>
<!-- Volume -->
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-gray-700 dark:text-gray-300" for="volume">Est. Monthly Volume</label>
<select class="h-11 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-white/5 px-4 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all dark:text-white appearance-none" id="volume">
<option>Less than 100 units</option>
<option>100 - 500 units</option>
<option>500 - 1,000 units</option>
<option>1,000+ units</option>
</select>
</div>
</div>
<!-- Message -->
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-gray-700 dark:text-gray-300" for="message">Additional Details</label>
<textarea class="rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-white/5 p-4 text-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all resize-none dark:text-white" id="message" placeholder="Tell us about your store type, current selection, and what you're looking for..." rows="4"></textarea>
</div>
<!-- Submit -->
<div class="pt-2">
<button class="w-full h-12 rounded-lg bg-primary text-background-dark text-base font-bold hover:bg-primary/90 hover:shadow-lg shadow-primary/20 transition-all flex items-center justify-center gap-2" type="submit">
                                        Submit Application
                                        <span class="material-symbols-outlined text-lg">arrow_forward</span>
</button>
<p class="text-xs text-center text-gray-500 dark:text-gray-400 mt-3">By submitting, you agree to our Terms of Service and Privacy Policy.</p>
</div>
</form>
</div>
</div>
</div>
</section>

<!-- Bottom CTA Banner -->
<section class="w-full bg-[#0d1b0d] text-white py-12 md:py-16">
<div class="max-w-4xl mx-auto px-4 flex flex-col items-center text-center gap-6">
<h3 class="text-2xl md:text-3xl font-bold">Still have questions before applying?</h3>
<p class="text-gray-300 max-w-xl">Our wholesale team is here to help you navigate our catalog and find the perfect fit for your business.</p>
<div class="flex flex-col sm:flex-row gap-4">
<a class="flex items-center justify-center rounded-lg h-12 px-6 bg-white/10 border border-white/20 text-white font-bold hover:bg-white/20 transition-colors gap-2" href="mailto:Apsafoods@gmail.com">
<span class="material-symbols-outlined text-lg">mail</span>
                            Email Us
                        </a>
<a class="flex items-center justify-center rounded-lg h-12 px-6 bg-primary text-background-dark font-bold hover:bg-primary/90 transition-colors gap-2" href="tel:+180037374">
<span class="material-symbols-outlined text-lg">call</span>
                            Call +1 800-FRESH
                        </a>
</div>
</div>
</section>

@endsection
