@extends('layouts.frontend')

@section('title', 'Contact Us')

@section('content')
<main class="flex flex-col min-h-screen">
    <!-- Hero Section -->
    <!-- Hero Section -->
    <div class="w-full bg-background-light dark:bg-background-dark py-10 lg:py-10">
        <div class="layout-content-container max-w-[1200px] mx-auto px-6 lg:px-10">

        </div>
    </div>

    <!-- Content Grid -->
    <div class="layout-content-container max-w-[1200px] mx-auto px-6 lg:px-10 pb-15">

        <!-- TOP SECTION -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start mb-10">

            <!-- LEFT TEXT -->
            <div class="lg:col-span-7 flex flex-col gap-6">
                <h1 class="text-text-main dark:text-white text-4xl md:text-5xl font-black">
                    Let’s Get Bubbly Together
                </h1>

                <p class="text-text-secondary dark:text-gray-300 text-lg">
                    Partner with Apsavi Bubbly – Refreshment That Moves the Market
                </p>

                <p class="text-text-secondary dark:text-gray-300">
                    Looking to stock a fast-moving, youth-loved bubbly soda or trusted mineral water brand?
                    You’re in the right place.
                </p>

                <p class="text-text-secondary dark:text-gray-300">
                    Whether you’re a Distributor, Super Stockist, HoReCa buyer,
                    Modern Trade chain, or Retailer, we’re ready to build a profitable partnership.
                </p>

                <!-- WHY PARTNER -->
                <div class="mt-6">
                    <h2 class="text-2xl font-bold mb-6 dark:text-white">
                        Why Partner with Apsavi Bubbly?
                    </h2>

                    <ul class="space-y-4 text-text-secondary dark:text-gray-300">
                        <li>
                            <strong class="text-text-main dark:text-white">
                                🔥 High-Repeat Consumption Products
                            </strong><br>
                            Bubbly sodas & mineral water designed for everyday demand.
                        </li>

                        <li>
                            <strong class="text-text-main dark:text-white">
                                💧 Consistent Quality & Trusted Hydration
                            </strong><br>
                            Modern processing and strict quality checks.
                        </li>

                        <li>
                            <strong class="text-text-main dark:text-white">
                                📈 Strong Trade Margins
                            </strong><br>
                            Attractive pricing structures for distributors.
                        </li>

                        <li>
                            <strong class="text-text-main dark:text-white">
                                🛒 Market-Ready Support
                            </strong><br>
                            POS material, visibility support & marketing.
                        </li>

                        <li>
                            <strong class="text-text-main dark:text-white">
                                🤝 Long-Term Partnership Mindset
                            </strong><br>
                            We build territories, not just sales.
                        </li>
                    </ul>
                </div>

            </div>

            <!-- RIGHT SIDE -->
            <div class="lg:col-span-5 flex flex-col gap-8">

                <!-- CONTACT FORM -->
                <div class="bg-white dark:bg-[#1a331a]/50 border border-[#e7f3e7] rounded-2xl p-6 shadow-sm">

                    <form method="POST" action="{{ route('contact.submit') }}" class="flex flex-col gap-5">
                        @csrf

                        <div class="grid md:grid-cols-2 gap-4">

                            <input name="name" class="border rounded-lg h-12 px-4" placeholder="Full Name" required>

                            <input name="email" type="email" class="border rounded-lg h-12 px-4"
                                placeholder="Email Address" required>

                        </div>

                        <input name="phone" class="border rounded-lg h-12 px-4" placeholder="Phone Number (Optional)">

                        <textarea name="message" class="border rounded-lg p-4 min-h-[140px]" placeholder="Message"
                            required></textarea>

                        <button class="bg-primary text-white font-bold h-12 rounded-lg hover:bg-green-600 transition">
                            Send Message
                        </button>

                    </form>

                </div>

                <!-- Info Card -->
                <div class="bg-[#e7f3e7] dark:bg-[#1a331a] rounded-2xl p-8 flex flex-col gap-8">
                    <div>
                        <h3 class="text-xl font-bold text-text-main dark:text-white mb-6">Need Immediate Assistance?
                        </h3>
                        <p> Our sales and expansion team is just a call or email away.</p>
                        <div class="flex flex-col gap-6">
                            <div class="flex items-start gap-4">
                                <div
                                    class="mt-1 flex items-center justify-center size-10 rounded-full bg-white dark:bg-white/10 text-primary shrink-0">
                                    <span class="material-symbols-outlined">location_on</span> </div>
                                <div>
                                    <p class="font-bold text-text-main dark:text-white">Headquarters</p>
                                    <p class="text-text-secondary dark:text-gray-300 leading-relaxed"> Serving: Delhi
                                        NCR & Expanding Across India </p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div
                                    class="mt-1 flex items-center justify-center size-10 rounded-full bg-white dark:bg-white/10 text-primary shrink-0">
                                    <span class="material-symbols-outlined">mail</span> </div>
                                <div>
                                    <p class="font-bold text-text-main dark:text-white">Email Us</p> <a
                                        class="text-text-secondary dark:text-gray-300 hover:text-primary transition-colors"
                                        href="mailto:Customercare@Apsafoods.com"> Customercare@Apsafoods.com </a> <a
                                        class="text-text-secondary dark:text-gray-300 hover:text-primary transition-colors"
                                        href="mailto:Sales.Head@Apsafoods.com"> Sales.Head@Apsafoods.com </a>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div
                                    class="mt-1 flex items-center justify-center size-10 rounded-full bg-white dark:bg-white/10 text-primary shrink-0">
                                    <span class="material-symbols-outlined">phone</span> </div>
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

    </div>


    <!-- BRAND FOOTER NOTE -->
    <div class="py-10 text-center bg-background-light dark:bg-background-dark">
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