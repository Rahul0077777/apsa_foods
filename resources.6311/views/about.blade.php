@extends('layouts.frontend')

@section('title', 'About Us - APSAVI Global Pvt. Ltd.')

@section('content')

<!-- ================= ABOUT PAGE START ================= -->

<!-- HERO : FULL SCREEN BANNER -->
<!--<section class="relative min-h-screen flex items-center justify-center overflow-hidden">-->

<!-- <div-->
<!--  class="absolute inset-0 scale-105"-->
<!--  style='background-image: url("{{ asset('images/BUBBLY.jpeg') }}");'>-->
<!--</div>-->

<!--</section>-->

  <div class="relative overflow-hidden">
            <img
                src="{{ asset('images/BUBBLY.jpeg') }}"
                alt="Bubbly"
                class="w-full h-full object-cover hover:scale-105 transition-transform duration-700"
            >
        </div>



<!-- ABOUT US -->
<section class="py-20">
    <div class="max-w-5xl mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">About Us</h2>
        <div class="w-16 h-1 bg-primary mb-8"></div>

        <div class="space-y-6 text-lg text-neutral-600 dark:text-neutral-300">
            <p>
               After building and expanding our café chain across India, Nepal, and the UAE, we stood at a crossroads. We had served millions of cups, shared countless conversations, and witnessed one constant truth — people don’t just consume beverages, they connect with them.
            </p>

            <p>
                Cold drinks after long days. Water during quiet moments. Flavors tied to memories.
            </p>

            <p>
                Yet, as the market grew crowded, something felt missing.
            </p>
        </div>
    </div>
</section>

<!-- THE GAP -->
<section class="py-15 bg-background-light dark:bg-white/5">
    <div class="max-w-5xl mx-auto px-6 space-y-6">
        <h2 class="text-3xl font-bold">The Gap We Couldn’t Ignore</h2>
        <p class="text-lg text-neutral-600 dark:text-neutral-300">
           We saw shelves full of options, but very few brands that felt honest, thoughtfully crafted, and trustworthy. Drinks that were refreshing, yes — but also made with intention.
        </p>
        <p class="text-lg text-neutral-600 dark:text-neutral-300">
            That gap became our purpose.
        </p>
        <p class="text-lg text-neutral-600 dark:text-neutral-300">
           And from that purpose, Bubbly Soft Drinks and Aquapine Premium Drinking Water were born.
        </p>
    </div>
</section>

<!-- BRANDS -->
<section class="py-20">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12">

        <div>
            <h3 class="text-2xl font-bold mb-4">Bubbly – Flavors That Feel Alive</h3>
            <p class="text-lg text-neutral-600 dark:text-neutral-300">
              Bubbly is our tribute to the flavors we grew up with — bold, familiar, and full of character.<br><br>From the spice-forward energy of Bubbly Jeera, the citrus punch of Tangi Orange, the cooling freshness of Power Mint, to the timeless comfort of Cola, every flavor is created to match a mood, a moment, and a generation that lives unapologetically.

            </p>
            <p class="mt-4 text-lg text-neutral-600 dark:text-neutral-300">
               Bubbly isn’t just about taste.It’s about expression, confidence, and everyday joy.
            </p>
        </div>

        <div>
            <h3 class="text-2xl font-bold mb-4">Aquapine – Purity, Refined</h3>
            <p class="text-lg text-neutral-600 dark:text-neutral-300">
                With Aquapine Premium Drinking Water, we focused on one word: clarity.
            </p>
            <p class="mt-4 text-lg text-neutral-600 dark:text-neutral-300">
                Sourced and processed to meet stringent quality standards, Aquapine is designed for consumers who value consistency and trust.
            </p>
            <p class="mt-4 text-lg text-neutral-600 dark:text-neutral-300">
               Each product is manufactured in compliance with FSSAI regulations, maintaining defined quality parameters including mineral content and pH levels, without overstatement — because credibility matters more than claims.
            </p>
        </div>

    </div>
</section>

<!-- FOUNDER PROMISE -->
<section class="py-15 bg-background-light dark:bg-white/5 text-center">
    <h2 class="text-3xl md:text-4xl font-bold italic">
        A Founder’s Promise - “Kyoki hum haar nahi maante.”
    </h2>
    <p class="mt-4 text-lg text-neutral-600 dark:text-neutral-300 max-w-3xl mx-auto">
        As founders, our journey has never been linear.<br>We’ve faced challenges, learned the hard way, and grown stronger with every step. There is a line we live by:<br><strong>“Kyoki hum haar nahi maante.”</strong> Because resilience is not optional. And excellence is not accidental.<br>We believe we are <strong> born to shine </strong> — and so are the brands we build.
    </p>
</section>

<!-- MANIFESTO -->
<section class="py-16 text-center">
    <h2 class="text-3xl font-bold mb-6">Built on Trust. Driven by the Future.</h2>

    <div class="max-w-5xl mx-auto text-lg leading-relaxed text-neutral-600 dark:text-neutral-300 space-y-4">
        <p>APSAVI Global Pvt. Ltd. stands for <strong>responsible growth, transparent practices, and long-term relationships —  </strong></p>
        <p>with customers, partners, and communities.</p>
        <p>We don’t chase trends.</p>
        <p>We build brands that last.</p>
        <p>From street-side nostalgia to modern lifestyles, from hydration to celebration — every bottle of<strong> Bubbly </strong>and </p>
        <p><strong>Aquapine</strong> carries our commitment to quality, compliance, and care.</p>
        <p class="font-semibold">Because in the end, refreshment is not just about what you drink. It’s about<strong> how it makes you feel.</strong></p>
    </div>

    <div class="mt-10 text-sm text-neutral-500 space-y-1">
        <p>Drink Bold. Stay Real.</p>
        <p>Built for the Ones Who Rise.</p>
        <p>Refreshment with Attitude.</p>
        <p>Pure Choices. Powerful Energy.</p>
    </div>
</section>

<!-- ================= ABOUT PAGE END ================= -->

@endsection
