@extends('layouts.frontend')

@section('title', 'About Us - APSAVI Global Pvt. Ltd.')

@section('content')

<!-- ================= ABOUT PAGE START ================= -->

<!-- Hero Section -->
<div class="relative flex h-auto w-full flex-col">
    <div class="layout-container flex h-full grow flex-col">
        <div class="px-4 md:px-10 xl:px-40 flex flex-1 justify-center py-5">
            <div class="layout-content-container flex flex-col flex-1">
                <div class="@container">
                    <div class="@[480px]:p-4">
                        <div class="flex min-h-[480px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 @[480px]:rounded-xl items-center justify-center p-8 text-center relative overflow-hidden"
                             style='background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.6)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuBOaWWZTFjeaLE7Zjj5sQbE_BkeItJyC1phu1sCDQfWcxOlpBWMTACg-Tg9RnMTFB1hfPi4CnUswqjYk6u3VZvj98O-aq0Zmj-XMoETGvW_rzDAA7pj50pRaxH646p_DGFdBqzMJSnHqKKs6GsodNv3lHr310NzwksaexR46DvQH8gWwVrBjTLPSxgZg6c6BGF0mUfw8r3UUayTqwwvsaVH3H3kl2GUaFqVbOMED3SGI533qCuXkv01twLAdikgSbLjKDJZadJ8yAo");'>
                            
                            <div class="flex flex-col gap-4 z-10 max-w-[720px]">
                                <h1 class="text-white text-5xl md:text-6xl font-black leading-tight tracking-tight">
                                    Built on Belief. Bottled with Purpose.
                                </h1>
                                <p class="text-white text-lg md:text-xl opacity-90">
                                    From resilience to refreshment — crafting brands that connect, inspire, and endure.
                                </p>
                            </div>

                            <button onclick="document.getElementById('our-story').scrollIntoView({ behavior: 'smooth' });"
                                class="z-10 rounded-lg h-12 px-6 bg-primary text-neutral-900 font-bold hover:scale-105 transition">
                                Read Our Story
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Our Story -->
<div class="relative flex h-auto w-full flex-col" id="our-story">
    <div class="layout-container flex h-full grow flex-col">
        <div class="px-4 md:px-10 xl:px-40 flex flex-1 justify-center py-16">
            <div class="layout-content-container flex flex-col flex-1">
                <div class="flex flex-col md:flex-row gap-12 items-center">
                    
                    <div class="flex-1 flex flex-col gap-6">
                        <h2 class="text-3xl md:text-4xl font-bold">
                            About Us – APSAVI Global Pvt. Ltd.
                        </h2>
                        <div class="w-16 h-1 bg-primary rounded-full"></div>

                        <p class="text-neutral-600 dark:text-neutral-300 text-lg">
                            Every brand has a beginning. Ours began with belief, resilience, and a refusal to give up.
                        </p>

                        <p class="text-neutral-600 dark:text-neutral-300 text-lg">
                            After building and expanding our café chain across India, Nepal, and the UAE, we served millions of cups and shared countless conversations. Through it all, one truth remained constant — people don’t just consume beverages, they connect with them.
                        </p>

                        <p class="text-neutral-600 dark:text-neutral-300 text-lg">
                            Cold drinks after long days. Water during quiet moments. Flavors tied to memories.
                            As the market grew crowded, we saw a gap we couldn’t ignore.
                        </p>
                    </div>

                    <div class="flex-1 min-h-[320px] rounded-xl bg-cover bg-center shadow-xl"
                        style='background-image:url("https://lh3.googleusercontent.com/aida-public/AB6AXuBxzW8oEeuBO0TkefMmprZsVVeWrtfXhcXP2jrbV2yS976fVuNFsutAnPS_zz1VNFMr9_mi63ffmwSS5ljaWgz38ax2pmhYzowQaZKc4btDIs9jn_e3DfqjfFlg1mjmVURE3V4tDlKaqRz2YJPJ7YA9dpp79IIdiYx2r5f6odDR7ZFVmxfRDme3AEjg9wDq31VG4W_Ifi_Jy0OsUqB4NA-Y-xHtK3EJH2Tivq-NGFtRdsZmJ7MH4n-nNj02Ue0A_kDzsDLoy0jojk8");'>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Mission & Vision -->
<div class="bg-background-light dark:bg-white/5 py-16">
    <div class="layout-container px-4 md:px-10 xl:px-40">
        <div class="grid md:grid-cols-2 gap-10 max-w-5xl mx-auto">

            <div class="p-8 rounded-2xl bg-white dark:bg-neutral-800/50 border">
                <h3 class="text-2xl font-bold mb-4">Our Mission</h3>
                <p class="text-neutral-600 dark:text-neutral-300 text-lg">
                    To build beverage brands rooted in honesty, consistency, and intention — delivering refreshment people can trust and choose confidently.
                </p>
            </div>

            <div class="p-8 rounded-2xl bg-white dark:bg-neutral-800/50 border">
                <h3 class="text-2xl font-bold mb-4">Our Vision</h3>
                <p class="text-neutral-600 dark:text-neutral-300 text-lg">
                    To shape the future of refreshment through responsible growth, transparent practices, and brands that stand the test of time.
                </p>
            </div>

        </div>
    </div>
</div>

<!-- Quote -->
<div class="py-20 text-center">
    <h2 class="text-3xl md:text-4xl font-bold italic">
        “Kyoki hum haar nahi maante.”
    </h2>
    <p class="mt-4 text-neutral-500">
        Because resilience is not optional — and excellence is never accidental.
    </p>
</div>

<!-- Core Values / Brands -->
<div class="pb-20">
    <div class="layout-container px-4 md:px-10 xl:px-40">
        <div class="grid md:grid-cols-3 gap-10 text-center">

            <div>
                <h3 class="text-xl font-bold mb-2">Bubbly</h3>
                <p class="text-neutral-600 dark:text-neutral-300">
                    Bold, familiar flavors that feel alive. From Jeera to Cola, Bubbly represents expression, confidence, and everyday joy.
                </p>
            </div>

            <div>
                <h3 class="text-xl font-bold mb-2">Aquapine</h3>
                <p class="text-neutral-600 dark:text-neutral-300">
                    Premium drinking water focused on clarity, consistency, and compliance — manufactured under FSSAI regulations without overstatement.
                </p>
            </div>

            <div>
                <h3 class="text-xl font-bold mb-2">Built on Trust</h3>
                <p class="text-neutral-600 dark:text-neutral-300">
                    We don’t chase trends. We build brands that last — driven by transparency, responsibility, and long-term relationships.
                </p>
            </div>

        </div>
    </div>
</div>

<!-- Manifesto -->
<div class="py-20 bg-background-light dark:bg-white/5 text-center">
    <h2 class="text-3xl font-bold mb-6">The Bubbly Manifesto</h2>
    <p class="max-w-3xl mx-auto text-neutral-600 dark:text-neutral-300 leading-relaxed">
        We move fast. We feel deeply. We choose boldly.  
        We drink to pause, celebrate, reset, and rise.  
        We don’t follow trends — we build habits.  
        And when life tests us, we remember one thing:  
        <strong>Kyoki hum haar nahi maante.</strong>
    </p>

    <div class="mt-8 text-sm text-neutral-500 space-y-1">
        <p>Drink Bold. Stay Real.</p>
        <p>Built for the Ones Who Rise.</p>
        <p>Refreshment with Attitude.</p>
        <p>Pure Choices. Powerful Energy.</p>
    </div>
</div>

<!-- ================= ABOUT PAGE END ================= -->

@endsection
