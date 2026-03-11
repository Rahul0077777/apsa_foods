@extends('layouts.frontend')

@section('title', 'Distributor Partnership')

@section('content')

<!-- Hero Section -->
<section class="relative w-full overflow-hidden">
    <div class="xl mx-auto px-4 md:px-10 lg:px-40 py-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
        <div>
            <span
                class="inline-flex items-center gap-2 rounded-full border border-primary/30 bg-primary/10 px-3 py-1 text-xs font-bold text-primary mb-4">
                <span class="material-symbols-outlined text-sm">eco</span>
                B2B Partnership
            </span>

            <h1 class="text-4xl md:text-5xl lg:text-6xl font-black leading-tight">
                Bring the <span class="text-primary">Freshness</span> to Your Shelves
            </h1>

            <p class="mt-4 text-gray-600 dark:text-gray-300 max-w-xl leading-relaxed">
                Join APSA Foods’ growing network of authorized distributors and bulk partners and supply premium bubbly
                soft drinks and trusted mineral water across
            </p>

            <p class="mt-3 text-gray-600 dark:text-gray-300 max-w-xl leading-relaxed">
                <strong>HoReCa</strong> – Hotels, Restaurants, Cafés, Cloud Kitchens<br>
                <strong>Modern Trade</strong> – Supermarkets, Hypermarkets, Quick Commerce<br>
                <strong>General Trade</strong> – Kirana stores, distributors, wholesalers
            </p>

            <p class="mt-3 text-gray-600 dark:text-gray-300 max-w-xl leading-relaxed">Built for high rotation,
                consistent quality, and scalable supply, APSA Foods is the right partner for on-trade and off-trade
                growth.</p>

            <div class="mt-6 flex flex-wrap gap-4">
                <a href="#partner-form"
                    class="px-6 py-3 bg-primary rounded-lg font-bold text-black hover:shadow-lg transition">
                    Apply Now
                </a>
                <!--<a href="#features"-->
                <!--    class="px-6 py-3 border rounded-lg font-bold hover:bg-gray-100 dark:hover:bg-white/10 transition">-->
                <!--    Learn More-->
                <!--</a>-->
            </div>
        </div>

       
        <div class="relative rounded-xl overflow-hidden shadow-2xl">
            <img
                src="{{ asset('images/Firefly_GeminiFlash_-Replace only the bottles in the scene with my product bottle. Keep the full composit 470684.png') }}"
                alt="Bubbly"
                class="w-full h-full object-cover hover:scale-105 transition-transform duration-700"
            >
        </div>
    </div>
</section>

<!-- Social Proof Strip -->
<section class="w-full bg-white dark:bg-white/5 py-8 border-y border-gray-100 dark:border-white/5">
    <div class="xl mx-auto px-4 md:px-10 flex flex-col items-center gap-6">
        <p class="text-sm font-bold text-gray-400 uppercase tracking-widest text-center">Trusted by Retailers Across
            India</p>
        <div
            class="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-60 grayscale hover:grayscale-0 transition-all duration-500">
            <!-- Logos placeholders with text for demonstration -->
            <div class="h-8 font-bold text-xl text-gray-800 dark:text-white flex items-center gap-2">
                <span class="material-symbols-outlined"></span>From local stores to large-format retail and HoReCa
                partners, APSA Foods delivers quality at scale.
                <!-- </div>
<div class="h-8 font-bold text-xl text-gray-800 dark:text-white flex items-center gap-2">
<span class="material-symbols-outlined">shopping_basket</span> Sprouts
                        </div>
<div class="h-8 font-bold text-xl text-gray-800 dark:text-white flex items-center gap-2">
<span class="material-symbols-outlined">local_mall</span> Erewhon
                        </div>
<div class="h-8 font-bold text-xl text-gray-800 dark:text-white flex items-center gap-2">
<span class="material-symbols-outlined">nutrition</span> GNC LiveWell
                        </div> -->
            </div>
        </div>
</section>

<!-- Features Section -->
<section class="py-16 md:py-24 bg-background-light dark:bg-background-dark">
    <div class="xl mx-auto px-4 md:px-10 lg:px-40">
        <div class="flex flex-col gap-12">
            <div class="flex flex-col gap-4 text-center items-center">
                <h2 class="text-3xl md:text-4xl font-black leading-tight tracking-tight dark:text-white max-w-2xl">
                    Why Leading Trade Partners Choose <span class="text-primary">APSA Foods</span>
                </h2>
                <p class="text-gray-600 dark:text-gray-400 text-lg max-w-2xl">
                    At APSA Foods, we offer more than beverages—we build long-term partnerships designed to help
                    distributors, super stockists, HoReCa, and retailers scale profitably and sustainably.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Feature 1 -->
                <div
                    class="group flex flex-col gap-4 rounded-xl border border-gray-100 dark:border-white/10 bg-white dark:bg-white/5 p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div
                        class="size-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-background-dark transition-colors">
                        <span class="material-symbols-outlined text-3xl">verified</span>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2 dark:text-white">Consistent Quality You Can Trust</h3>
                        <p class="text-gray-500 dark:text-gray-400 leading-relaxed">Our bubbly soft drinks and mineral
                            water are produced using high-quality ingredients, modern bottling processes, and strict
                            quality controls to ensure consistent taste, purity, and safety in every batch.</p>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div
                    class="group flex flex-col gap-4 rounded-xl border border-gray-100 dark:border-white/10 bg-white dark:bg-white/5 p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div
                        class="size-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-background-dark transition-colors">
                        <span class="material-symbols-outlined text-3xl">ac_unit</span>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2 dark:text-white">Trade-Ready Supply & Logistics</h3>
                        <p class="text-gray-500 dark:text-gray-400 leading-relaxed">We support bulk-ready, scalable
                            distribution with reliable supply planning to meet the needs of General Trade, Modern Trade,
                            and HoReCa channels—ensuring timely deliveries and steady availability.</p>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div
                    class="group flex flex-col gap-4 rounded-xl border border-gray-100 dark:border-white/10 bg-white dark:bg-white/5 p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div
                        class="size-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-background-dark transition-colors">
                        <span class="material-symbols-outlined text-3xl">ac_unit</span>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2 dark:text-white">Strong Demand & Fast Rotations</h3>
                        <p class="text-gray-500 dark:text-gray-400 leading-relaxed">Designed for high off-take and
                            repeat consumption, our products deliver strong shelf movement across retail outlets,
                            restaurants, events, and institutional buyers.</p>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div
                    class="group flex flex-col gap-4 rounded-xl border border-gray-100 dark:border-white/10 bg-white dark:bg-white/5 p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div
                        class="size-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-background-dark transition-colors">
                        <span class="material-symbols-outlined text-3xl">ac_unit</span>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2 dark:text-white">Growth & Visibility Support</h3>
                        <p class="text-gray-500 dark:text-gray-400 leading-relaxed">Partners receive dedicated trade
                            support, including marketing materials, activation support, visibility assets, and
                            structured expansion planning to drive sales at the outlet level.</p>
                    </div>
                </div>
                <!-- Feature 3 -->
                <div
                    class="group flex flex-col gap-4 rounded-xl border border-gray-100 dark:border-white/10 bg-white dark:bg-white/5 p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div
                        class="size-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-background-dark transition-colors">
                        <span class="material-symbols-outlined text-3xl">trending_up</span>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-2 dark:text-white">Built for Partnership, Not Just Supply</h3>
                        <p class="text-gray-500 dark:text-gray-400 leading-relaxed">From onboarding to expansion, we
                            work closely with our partners to ensure healthy margins, smooth operations, and long-term
                            growth</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Form Section -->
<section class="py-16 md:py-24 bg-white dark:bg-white/5 border-y border-gray-100 dark:border-white/5" id="partner-form">
    <div class="xl mx-auto px-4 md:px-10 lg:px-40">
        <div class="flex flex-col lg:flex-row gap-12 lg:gap-20">
            <!-- Left Side: Context -->
            <div class="lg:w-1/3 flex flex-col gap-8">
                <div>
                    <h3 class="text-2xl font-bold mb-4 dark:text-white">Apply for Partnership</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Ready to bring premium bubbly beverages and trusted mineral water to your market?
                        Fill out the form, and our sales team will review your application within 24 hours

                    </p>
                </div>
                <div class="flex flex-col gap-6">
                    <div class="flex gap-4 items-start">
                        <div
                            class="mt-1 size-8 rounded-full bg-green-100 dark:bg-green-900 flex items-center justify-center text-green-700 dark:text-green-300 shrink-0">
                            <span class="material-symbols-outlined text-sm">check</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-sm dark:text-white">Wholesale & Trade Pricing</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Access structured, volume-based pricing
                                designed for distributors, HoReCa, and retail partners</p>
                        </div>
                    </div>
                    <div class="flex gap-4 items-start">
                        <div
                            class="mt-1 size-8 rounded-full bg-green-100 dark:bg-green-900 flex items-center justify-center text-green-700 dark:text-green-300 shrink-0">
                            <span class="material-symbols-outlined text-sm">check</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-sm dark:text-white">Marketing & Visibility Support</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400">High-resolution brand assets, POS
                                materials, and on-ground visibility support to drive faster off-take.</p>
                        </div>
                    </div>
                    <div class="flex gap-4 items-start">
                        <div
                            class="mt-1 size-8 rounded-full bg-green-100 dark:bg-green-900 flex items-center justify-center text-green-700 dark:text-green-300 shrink-0">
                            <span class="material-symbols-outlined text-sm">check</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-sm dark:text-white">Sample & Trial Support</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Qualified partners receive product
                                samples to evaluate taste, quality, and market fit before scale-up.</p>
                        </div>
                    </div>

                    <!-- <div
                    class="mt-auto p-6 rounded-xl bg-background-light dark:bg-background-dark border border-gray-100 dark:border-white/10">
                    <p class="text-sm font-medium mb-2 dark:text-white">Direct Line</p>
                    <a class="text-xl font-bold text-primary hover:underline" href="tel:+9718488269">+91 9718488269</a>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Mon-Fri, 9am - 5pm EST</p>
                </div> -->
                </div>
                
            </div>
            <!-- Right Side: The Form -->
            <div class="lg:w-2/3">
                <form method="POST"
      action="{{ route('partnership.store') }}"
      class="w-full max-w-4xl bg-white dark:bg-[#0f1f0f] border border-gray-200 dark:border-white/10 rounded-xl p-6 md:p-8 shadow-sm">

    @csrf

    <!-- Heading -->
    <h3 class="text-xl md:text-2xl font-bold dark:text-white mb-2">
        Interested in partnering with APSA Foods?
    </h3>

    <p class="text-gray-600 dark:text-gray-300 mb-6">
        Please share your details below. Our sales team will connect with you within 24 hours.
    </p>


    <!-- 2 Column Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

        <!-- Name -->
        <input
            type="text"
            name="business_name"
            placeholder="business_name"
            required
            class="h-11 px-4 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary outline-none dark:bg-white/5 dark:border-white/20 dark:text-white"
        >

        <!-- Email -->
        <input
            type="email"
            name="email"
            placeholder="Email ID"
            required
            class="h-11 px-4 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary outline-none dark:bg-white/5 dark:border-white/20 dark:text-white"
        >

        <!-- Mobile -->
        <input
            type="tel"
            name="mobile"
            placeholder="Mobile Number"
            required
            class="h-11 px-4 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary outline-none dark:bg-white/5 dark:border-white/20 dark:text-white"
        >

        <!-- City State -->
        <input
            type="text"
            name="city_state"
            placeholder="City / State"
            required
            class="h-11 px-4 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary outline-none dark:bg-white/5 dark:border-white/20 dark:text-white"
        >

    </div>


    <!-- Partnership Type Dropdown -->
    <div class="mt-6">

        <label class="block font-semibold mb-2 dark:text-white">
            Partnership Type
        </label>

        <select
            name="partnership_type"
            required
            class="w-full h-11 px-4 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary outline-none dark:bg-white/5 dark:border-white/20 dark:text-white"
        >

            <option value="">Dropdown and choose one</option>

            <option value="Distributor">Distributor</option>

            <option value="Super Stockist">Super Stockist</option>

            <option value="HoReCa">HoReCa (Hotel / Restaurant / Café)</option>

            <option value="Retailer">Retailer</option>

            <option value="Bulk Buyer">Bulk / Institutional Buyer</option>

        </select>

    </div>


    <!-- Message -->
    <div class="mt-6">

        <label class="block font-semibold mb-2 dark:text-white">
            Message / Query
        </label>

        <textarea
            name="message"
            rows="4"
            placeholder="Write your message..."
            class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary outline-none dark:bg-white/5 dark:border-white/20 dark:text-white"
        ></textarea>

    </div>


    <!-- Submit Button -->
    <button
        type="submit"
        class="mt-6 w-full md:w-auto px-8 h-11 bg-primary font-bold rounded-md hover:bg-primary/90 transition">

        Submit

    </button>

</form>



            </div>
        </div>
    </div>
</section>

<!-- Bottom CTA Banner -->
<section class="w-full bg-[#0d1b0d] text-white py-12 md:py-16">
    <div class="max-w-4xl mx-auto px-4 flex flex-col items-center text-center gap-6">
        <h3 class="text-2xl md:text-3xl font-bold">Still have questions before applying?</h3>
        <p class="text-gray-300 max-w-xl">Our wholesale team is here to help you navigate our catalog and find the
            perfect fit for your business.</p>
        <div class="flex flex-col sm:flex-row gap-4">
            <a class="flex items-center justify-center rounded-lg h-12 px-6 bg-white/10 border border-white/20 text-white font-bold hover:bg-white/20 transition-colors gap-2"
                href="mailto:Apsafoods@gmail.com">
                <span class="material-symbols-outlined text-lg">mail</span>
                Email Us
            </a>
            <a class="flex items-center justify-center rounded-lg h-12 px-6 bg-primary text-background-dark font-bold hover:bg-primary/90 transition-colors gap-2"
                href="tel:+9718488269">
                <span class="material-symbols-outlined text-lg">call</span>
                Call +91 9718488269
            </a>
        </div>
    </div>
</section>

@endsection