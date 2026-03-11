@extends('layouts.frontend')

@section('title', 'Contact Us - JuiceBrand')

@section('content')

<style>
.bubble-bg {
    background: linear-gradient(180deg,#dfe9d9 0%,#e8f0e4 100%);
}

.soft-card {
    background: #e9eee6;
    border-radius: 32px;
    box-shadow: 0 25px 45px rgba(0,0,0,0.08);
}

.soft-form-wrapper {
    position: relative;
}

.soft-form-bg {
    position: absolute;
    inset: 0;
    background: #cfe59b;
    border-radius: 40px;
    transform: rotate(3deg) scale(1.03);
    z-index: 0;
}

.soft-form {
    position: relative;
    background: #dce8b7;
    border-radius: 40px;
    padding: 50px;
    z-index: 10;
    box-shadow: 0 35px 60px rgba(0,0,0,0.15);
}

.soft-input {
    background: #e4e6e4;
    border-radius: 20px;
    padding: 16px 24px;
    width: 100%;
    border: none;
    outline: none;
}

.lime-btn {
    background: linear-gradient(90deg,#b4f000,#9be21a);
    padding: 18px;
    border-radius: 999px;
    font-weight: 800;
    font-size: 18px;
    transition: all .3s ease;
}

.lime-btn:hover {
    transform: translateY(-4px);
    box-shadow: 0 15px 25px rgba(155,226,26,.4);
}
</style>

<main class="relative overflow-hidden min-h-screen bubble-bg">

    <!-- Floating Background Bubbles -->
    <div class="absolute top-10 left-10 w-24 h-24 bg-primary/20 rounded-full blur-2xl floating"></div>
    <div class="absolute top-40 right-20 w-32 h-32 bg-blue-200 rounded-full blur-2xl floating" style="animation-delay:-2s;"></div>
    <div class="absolute -bottom-10 left-1/2 w-48 h-48 bg-pink-200/40 rounded-full blur-3xl floating" style="animation-delay:-4s;"></div>


    <!-- ================= HERO SECTION ================= -->
    <section class="pt-20 pb-16 px-6 text-center relative z-10">
        <div class="max-w-4xl mx-auto">

            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white rounded-full shadow mb-6 animate-bounce">
                <span>✨</span>
                <span class="text-sm font-bold uppercase tracking-widest">
                    Partner Inquiry
                </span>
            </div>

            <h1 class="text-5xl md:text-7xl font-black font-display leading-[1.1] mb-6">
                Let’s Get <span class="relative inline-block">Bubbly
                    <span class="absolute -bottom-2 left-0 w-full h-4 bg-primary -z-10 rounded-full opacity-60"></span>
                </span> Together 💥
            </h1>

            <p class="text-xl text-gray-600 font-medium">
                Partner with Apsavi Bubbly – Refreshment That Moves the Market
            </p>

        </div>
    </section>



    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-20 items-start">

    <!-- LEFT CONTENT -->
    <div class="lg:col-span-7 flex flex-col gap-8">

        <p class="text-gray-700 text-lg">
            Looking to stock a fast-moving, youth-loved bubbly soda or trusted mineral water brand?
            You’re in the right place.
        </p>

        <p class="text-gray-700">
            Whether you’re a Distributor, Super Stockist, HoReCa buyer,
            Modern Trade chain, or Retailer, we’re ready to build a profitable partnership.
        </p>

        <!-- WHY PARTNER CARDS -->
        <div class="flex flex-col gap-10 mt-6">

            <div class="soft-card p-10 flex items-start gap-6">
                <div class="bg-lime-300 p-4 rounded-2xl">
                    <span class="material-symbols-outlined text-3xl">local_shipping</span>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mb-2">🔥 High-Repeat Consumption Products</h3>
                    <p class="text-gray-600">
                        Bubbly sodas & mineral water designed for everyday demand.
                    </p>
                </div>
            </div>

            <div class="soft-card p-10 flex items-start gap-6">
                <div class="bg-blue-200 p-4 rounded-2xl">
                    <span class="material-symbols-outlined text-3xl text-blue-600">eco</span>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mb-2">💧 Consistent Quality & Trusted Hydration</h3>
                    <p class="text-gray-600">
                        Modern processing and strict quality checks.
                    </p>
                </div>
            </div>

            <div class="soft-card p-10 flex items-start gap-6">
                <div class="bg-pink-200 p-4 rounded-2xl">
                    <span class="material-symbols-outlined text-3xl text-pink-600">trending_up</span>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mb-2">📈 Strong Trade Margins</h3>
                    <p class="text-gray-600">
                        Attractive pricing structures for distributors.
                    </p>
                </div>
            </div>

            <div class="soft-card p-10 flex items-start gap-6">
                <div class="bg-purple-200 p-4 rounded-2xl">
                    <span class="material-symbols-outlined text-3xl text-purple-600">campaign</span>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mb-2">🛒 Market-Ready Support</h3>
                    <p class="text-gray-600">
                        POS material, visibility support & marketing.
                    </p>
                </div>
            </div>

            <div class="soft-card p-10 flex items-start gap-6">
                <div class="bg-orange-200 p-4 rounded-2xl">
                    <span class="material-symbols-outlined text-3xl text-orange-600">handshake</span>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mb-2">🤝 Long-Term Partnership Mindset</h3>
                    <p class="text-gray-600">
                        We build territories, not just sales.
                    </p>
                </div>
            </div>

        </div>

    </div>



    <!-- RIGHT FORM -->
    <div class="lg:col-span-5 soft-form-wrapper">

        <div class="soft-form-bg"></div>

        <div class="soft-form">

            <h2 class="text-4xl font-bold mb-10 flex items-center gap-3">
                Drop a line
                <span class="material-symbols-outlined text-lime-600">edit_note</span>
            </h2>

            <form method="POST" action="{{ route('contact.submit') }}" class="space-y-6">
                @csrf

                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="text-sm font-bold text-gray-500">NAME</label>
                        <input name="name" class="soft-input mt-2" placeholder="Full Name" required>
                    </div>

                    <div>
                        <label class="text-sm font-bold text-gray-500">EMAIL</label>
                        <input name="email" type="email" class="soft-input mt-2" placeholder="Email Address" required>
                    </div>
                </div>

                <input name="phone" class="soft-input" placeholder="Phone Number (Optional)">

                <div>
                    <label class="text-sm font-bold text-gray-500">MESSAGE</label>
                    <textarea name="message" rows="4"
                              class="soft-input mt-2"
                              placeholder="Message"
                              required></textarea>
                </div>

                <button class="lime-btn w-full">
                    Send Message
                </button>

            </form>

        </div>

    </div>

</div>


<!-- BRAND FOOTER NOTE -->
<div class="py-16 text-center">
    <h3 class="text-xl font-bold">Apsavi Bubbly</h3>
    <p class="text-gray-500 mt-2">Built on Belief. Bottled with Purpose.</p>
    <p class="text-gray-500 mt-1">Refreshing India — one sip at a time 🥤✨</p>
</div>

</main>

@endsection