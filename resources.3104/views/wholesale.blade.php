@extends('layouts.frontend')

@section('title', 'Distributor Partnership - JuiceBrand')

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
                src="{{ asset('images/distributer.jpeg') }}"
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
  class="flex justify-center items-center text-center px-4
         opacity-60 grayscale hover:grayscale-0 transition-all duration-500">

  <div
    class="max-w-md md:max-w-none
           font-medium text-sm sm:text-base md:text-xl
           text-gray-700 dark:text-white leading-relaxed">
    From local stores to large-format retail and HoReCa partners,
    APSA Foods delivers quality at scale.
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

                    <div
                    class="mt-auto p-6 rounded-xl bg-background-light dark:bg-background-dark border border-gray-100 dark:border-white/10">
                    <p class="text-sm font-medium mb-2 dark:text-white">Direct Line</p>
                    <a class="text-xl font-bold text-primary hover:underline" href="tel:+919718488269">+91 9718488269</a>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Mon-Fri, 9am - 5pm EST</p>
                </div>
                </div>
                
            </div>
            <!-- Right Side: The Form -->
            <div class="lg:w-2/3">
                <form
                    class="flex flex-col gap-6 bg-background-light dark:bg-background-dark p-6 md:p-8 rounded-2xl border border-gray-200 dark:border-white/10 shadow-sm"
                    method="POST" action="{{ route('partnership.store') }}">
                    @csrf

                    <h3 class="text-2xl font-bold dark:text-white">
                        Interested in partnering with APSA Foods?
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Please share your details below. Our sales team will connect with you within 24 hours.
                    </p>

                    <!-- Business Details -->
                    <h4 class="text-lg font-semibold dark:text-white mt-2">Business Details</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <input name="business_name" type="text" placeholder="Business Name" class="w-full h-11 px-4 text-sm bg-white-50 border border-gray-200 rounded-md
            focus:ring-1 focus:ring-primary focus:border-primary outline-none
            dark:bg-white/5 dark:border-white/20 dark:text-white">

                        <input name="contact_person" type="text" placeholder="Contact Person Name" class="w-full h-11 px-4 text-sm bg-white-50 border border-gray-200 rounded-md
            focus:ring-1 focus:ring-primary focus:border-primary outline-none
            dark:bg-white/5 dark:border-white/20 dark:text-white">

                        <input name="mobile" type="tel" placeholder="Mobile Number" class="w-full h-11 px-4 text-sm bg-white-50 border border-gray-200 rounded-md
            focus:ring-1 focus:ring-primary focus:border-primary outline-none
            dark:bg-white/5 dark:border-white/20 dark:text-white">

                        <input name="email" type="email" placeholder="Email ID" class="w-full h-11 px-4 text-sm bg-white-50 border border-gray-200 rounded-md
            focus:ring-1 focus:ring-primary focus:border-primary outline-none
            dark:bg-white/5 dark:border-white/20 dark:text-white">

                        <input name="city_state" type="text" placeholder="City / State" class="w-full h-11 px-4 text-sm bg-white-50 border border-gray-200 rounded-md
            focus:ring-1 focus:ring-primary focus:border-primary outline-none
            md:col-span-2
            dark:bg-white/5 dark:border-white/20 dark:text-white">
                    </div>

                    <!-- Partnership Type -->
                    <h4 class="text-lg font-semibold dark:text-white">Partnership Type</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 text-sm text-gray-700 dark:text-gray-300">
                        <label class="flex items-center gap-2">
                            <input type="checkbox" name="partnership_type[]" value="Distributor" class="accent-primary">
                            Distributor
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="checkbox" name="partnership_type[]" value="Super Stockist"
                                class="accent-primary">
                            Super Stockist
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="checkbox" name="partnership_type[]" value="HoReCa" class="accent-primary">
                            HoReCa (Hotel / Restaurant / Café)
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="checkbox" name="partnership_type[]" value="Retailer" class="accent-primary">
                            Retailer
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="checkbox" name="partnership_type[]" value="Bulk Buyer" class="accent-primary">
                            Bulk / Institutional Buyer
                        </label>
                    </div>

                    <!-- Business Profile -->
                    <h4 class="text-lg font-semibold dark:text-white">Business Profile</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <input name="years_in_business" type="text" placeholder="Years in Business" class="w-full h-11 px-4 text-sm bg-white-50 border border-gray-200 rounded-md
            focus:ring-1 focus:ring-primary focus:border-primary outline-none
            dark:bg-white/5 dark:border-white/20 dark:text-white">

                        <select name="categories_handled" class="w-full h-11 px-4 text-sm bg-white-50 border border-gray-200 rounded-md
            focus:ring-1 focus:ring-primary focus:border-primary outline-none
            dark:bg-white/5 dark:border-white/20 dark:text-white">
                            <option value="">Current Categories Handled</option>
                            <option value="Water">Water</option>
                            <option value="Soft Drinks">Soft Drinks</option>
                            <option value="FMCG">FMCG</option>
                            <option value="Beverages">Beverages</option>
                        </select>

                        <input name="area_of_operation" type="text"
                            placeholder="Area of Operation (City / District / Region)" class="w-full h-11 px-4 text-sm bg-white-50 border border-gray-200 rounded-md
            focus:ring-1 focus:ring-primary focus:border-primary outline-none
            md:col-span-2
            dark:bg-white/5 dark:border-white/20 dark:text-white">
                    </div>

                    <!-- Infrastructure Details -->
                    <h4 class="text-lg font-semibold dark:text-white">Infrastructure Details</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-gray-700 dark:text-gray-300">
                        <div>
                            <p class="mb-1">Storage Facility Available?</p>
                            <label class="mr-4">
                                <input type="radio" name="storage_facility" value="Yes" class="accent-primary"> Yes
                            </label>
                            <label>
                                <input type="radio" name="storage_facility" value="No" class="accent-primary"> No
                            </label>
                        </div>

                        <div>
                            <p class="mb-1">Delivery / Distribution Setup?</p>
                            <label class="mr-4">
                                <input type="radio" name="delivery_setup" value="Yes" class="accent-primary"> Yes
                            </label>
                            <label>
                                <input type="radio" name="delivery_setup" value="No" class="accent-primary"> No
                            </label>
                        </div>

                        <input name="sales_team_strength" type="text" placeholder="Sales Team Strength (Optional)"
                            class="w-full h-11 px-4 text-sm bg-white-50 border border-gray-200 rounded-md
            focus:ring-1 focus:ring-primary focus:border-primary outline-none
            md:col-span-2
            dark:bg-white/5 dark:border-white/20 dark:text-white">
                    </div>

                    <!-- Commercial Interest -->
                    <h4 class="text-lg font-semibold dark:text-white">Commercial Interest</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <input name="expected_volume" type="text" placeholder="Expected Monthly Volume" class="w-full h-11 px-4 text-sm bg-white-50 border border-gray-200 rounded-md
            focus:ring-1 focus:ring-primary focus:border-primary outline-none
            dark:bg-white/5 dark:border-white/20 dark:text-white">

                        <div class="text-sm text-gray-700 dark:text-gray-300">
                            <p class="mb-1 font-medium">Preferred Product Category</p>
                            <label class="block">
                                <input type="checkbox" name="preferred_products[]" value="Bubbly Soft Drinks"
                                    class="accent-primary">
                                Bubbly Soft Drinks
                            </label>
                            <label class="block">
                                <input type="checkbox" name="preferred_products[]"
                                    value="Mineral / Distilled / Black Water" class="accent-primary">
                                Mineral / Distilled / Black Water
                            </label>
                            <label class="block">
                                <input type="checkbox" name="preferred_products[]" value="Both" class="accent-primary">
                                Both
                            </label>
                        </div>
                    </div>

                    <!-- Message -->
                    <textarea name="message" rows="4" class="w-full px-4 py-3 text-sm bg-white-50 border border-gray-200 rounded-md
        focus:ring-1 focus:ring-primary focus:border-primary outline-none resize-none
        dark:bg-white/5 dark:border-white/20 dark:text-white" placeholder="Message / Query (Optional)"></textarea>

                    <!-- Submit -->
                    <button type="submit" class="w-full h-12 rounded-lg bg-primary text-background-dark font-bold
        hover:bg-primary/90 transition-all flex items-center justify-center gap-2">
                        Apply for Partnership
                        <span class="material-symbols-outlined text-lg">arrow_forward</span>
                    </button>

                    <p class="text-xs text-center text-gray-500 dark:text-gray-400">
                        Our team will review your inquiry and reach out within 24 hours.
                    </p>

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