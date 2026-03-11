@extends('layouts.frontend')

@section('title', 'Contact Us - JuiceBrand')

@section('content')
<main class="flex flex-col min-h-screen">
    <!-- Hero Section -->
     <!-- Hero Section -->
    <div class="w-full bg-background-light dark:bg-background-dark py-16 lg:py-20">
        <div class="layout-content-container max-w-[1200px] mx-auto px-6 lg:px-10">
            <div class="flex flex-col gap-6 max-w-3xl">

                <h1 class="text-text-main dark:text-white text-4xl md:text-5xl font-black leading-tight tracking-tight">
                    Let’s Get Bubbly Together 💥
                </h1>

                <p class="text-text-secondary dark:text-gray-300 text-lg">
                    Partner with Apsavi Bubbly – Refreshment That Moves the Market
                </p>

                <p class="text-text-secondary dark:text-gray-300 text-base leading-relaxed">
                    Looking to stock a fast-moving, youth-loved bubbly soda or trusted mineral water brand?
                    You’re in the right place.
                </p>

                <p class="text-text-secondary dark:text-gray-300 text-base leading-relaxed">
                    Whether you’re a Distributor, Super Stockist, HoReCa buyer, Modern Trade chain, or Retailer,
                    we’re ready to build a profitable partnership with you.
                </p>

            </div>
        </div>
        
    </div>

    <!-- Content Grid -->
    <div class="layout-content-container max-w-[1200px] mx-auto px-6 lg:px-10 pb-20">

        <div class="mb-5 grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

            <!-- LEFT: WHY PARTNER -->
            <div class="lg:col-span-5 flex flex-col gap-10">

                <div>
                    <h2 class="text-2xl font-bold text-text-main dark:text-white mb-6">
                        Why Partner with Apsavi Bubbly?
                    </h2>

                    <ul class="space-y-5 text-text-secondary dark:text-gray-300">

                        <li>
                            <strong class="text-text-main dark:text-white">🔥 High-Repeat Consumption Products</strong><br>
                            Bubbly sodas & mineral water designed for everyday demand.
                        </li>

                        <li>
                            <strong class="text-text-main dark:text-white">💧 Consistent Quality & Trusted Hydration</strong><br>
                            Modern processing, strict quality checks, and reliable supply.
                        </li>

                        <li>
                            <strong class="text-text-main dark:text-white">📈 Strong Trade Margins</strong><br>
                            Attractive pricing structures for distributors, stockists, and bulk buyers.
                        </li>

                        <li>
                            <strong class="text-text-main dark:text-white">🛒 Market-Ready Support</strong><br>
                            POS material, visibility support, launch schemes & trade marketing.
                        </li>

                        <li>
                            <strong class="text-text-main dark:text-white">🤝 Long-Term Partnership Mindset</strong><br>
                            We don’t just sell bottles — we build territories.
                        </li>

                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-bold text-text-main dark:text-white mb-4">
                        Who Should Connect With Us?
                    </h3>

                    <ul class="space-y-2 text-text-secondary dark:text-gray-300">
                        <li>✔️ Beverage Distributors & Super Stockists</li>
                        <li>✔️ HoReCa (Hotels, Restaurants, Cafés, QSRs)</li>
                        <li>✔️ Modern Trade & Retail Chains</li>
                        <li>✔️ Wholesalers & Cash-and-Carry</li>
                        <li>✔️ Event, Corporate & Bulk Buyers</li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="mt-5 grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

            <!-- Contact Form -->
            <div
                class="lg:col-span-7 bg-white dark:bg-[#1a331a]/50 border border-[#e7f3e7] dark:border-[#1a331a] rounded-2xl p-6 md:p-8 shadow-sm">
                <form method="POST" action="{{ route('contact.submit') }}" class="flex flex-col gap-6">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <label class="flex flex-col gap-2">
                            <span class="text-text-main dark:text-gray-200 text-sm font-semibold">Full Name</span>
                            <input name="name"
                                class="w-full rounded-lg border border-[#cfe7cf] dark:border-gray-600 bg-[#f8fcf8] dark:bg-[#102210] h-12 px-4 text-base text-text-main dark:text-white placeholder:text-text-secondary focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all"
                                placeholder="Jane Doe" type="text" required />
                        </label>

                        <label class="flex flex-col gap-2">
                            <span class="text-text-main dark:text-gray-200 text-sm font-semibold">Email Address</span>
                            <input name="email"
                                class="w-full rounded-lg border border-[#cfe7cf] dark:border-gray-600 bg-[#f8fcf8] dark:bg-[#102210] h-12 px-4 text-base text-text-main dark:text-white placeholder:text-text-secondary focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all"
                                placeholder="jane@example.com" type="email" required />
                        </label>
                    </div>

                    <label class="flex flex-col gap-2">
                        <span class="text-text-main dark:text-gray-200 text-sm font-semibold">
                            Phone Number <span class="text-text-secondary font-normal">(Optional)</span>
                        </span>
                        <input name="phone"
                            class="w-full rounded-lg border border-[#cfe7cf] dark:border-gray-600 bg-[#f8fcf8] dark:bg-[#102210] h-12 px-4 text-base text-text-main dark:text-white placeholder:text-text-secondary focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all"
                            placeholder="(555) 123-4567" type="tel" />
                    </label>

                    <label class="flex flex-col gap-2">
                        <span class="text-text-main dark:text-gray-200 text-sm font-semibold">Message</span>
                        <textarea name="message"
                            class="w-full rounded-lg border border-[#cfe7cf] dark:border-gray-600 bg-[#f8fcf8] dark:bg-[#102210] min-h-[160px] p-4 text-base text-text-main dark:text-white placeholder:text-text-secondary focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all resize-y"
                            placeholder="How can we help you today?" required></textarea>
                    </label>

                    <button
                        class="mt-2 flex w-full md:w-auto md:self-start items-center justify-center rounded-lg bg-primary h-12 px-8 text-text-main font-bold text-base hover:bg-green-400 hover:shadow-lg hover:shadow-green-500/20 active:scale-95 transition-all duration-200"
                        type="submit">
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Sidebar Info -->
            <div class="lg:col-span-5 flex flex-col gap-8">
                <!-- Info Card -->
                <div class="bg-[#e7f3e7] dark:bg-[#1a331a] rounded-2xl p-8 flex flex-col gap-8">
                    <div>
                        <h3 class="text-xl font-bold text-text-main dark:text-white mb-6">Need Immediate Assistance?</h3>
                        <p> Our sales and expansion team is just a call or email away.</p>
                        <div class="flex flex-col gap-6">

                            <div class="flex items-start gap-4">
                                <div
                                    class="mt-1 flex items-center justify-center size-10 rounded-full bg-white dark:bg-white/10 text-primary shrink-0">
                                    <span class="material-symbols-outlined">location_on</span>
                                </div>
                                <div>
                                    <p class="font-bold text-text-main dark:text-white">Headquarters</p>
                                    <p class="text-text-secondary dark:text-gray-300 leading-relaxed">
                                       Serving: Delhi NCR & Expanding Across India
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div
                                    class="mt-1 flex items-center justify-center size-10 rounded-full bg-white dark:bg-white/10 text-primary shrink-0">
                                    <span class="material-symbols-outlined">mail</span>
                                </div>
                                <div>
                                    <p class="font-bold text-text-main dark:text-white">Email Us</p>
                                    <a class="text-text-secondary dark:text-gray-300 hover:text-primary transition-colors"
                                        href="mailto:Customercare@Apsafoods.com">
                                        Customercare@Apsafoods.com
                                    </a>
                                    <a class="text-text-secondary dark:text-gray-300 hover:text-primary transition-colors"
                                        href="mailto:Sales.Head@Apsafoods.com">
                                        Sales.Head@Apsafoods.com
                                    </a>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div
                                    class="mt-1 flex items-center justify-center size-10 rounded-full bg-white dark:bg-white/10 text-primary shrink-0">
                                    <span class="material-symbols-outlined">phone</span>
                                </div>
                                <div>
                                    <p class="mt-3 text-text-secondary dark:text-gray-300">91+ 9718488269</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

   <!-- BRAND FOOTER NOTE -->
    <div class="py-16 text-center bg-background-light dark:bg-background-dark">
        <h3 class="text-xl font-bold text-text-main dark:text-white">
            Apsavi Bubbly
        </h3>
        <p class="text-text-secondary dark:text-gray-300 mt-2">
            Built on Belief. Bottled with Purpose.
        </p>
        <p class="text-text-secondary dark:text-gray-300 mt-1">
            Refreshing India — one sip at a time 🥤✨
        </p>
    </div>

</main>


@endsection