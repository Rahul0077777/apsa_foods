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
                After building and expanding our café chain across India, Nepal, and the UAE, we stood at a crossroads.
                We had served millions of cups, shared countless conversations, and witnessed one constant truth —
                people don’t just consume beverages, they connect with them.Cold drinks after long days. Water during quiet moments. Flavors tied to memories.Yet, as the market grew crowded, something felt missing.
            </p>
        </div>
    </div>
</section>

<!-- THE GAP -->
<section class="py-15 bg-background-light dark:bg-white/5">
    <div class="max-w-5xl mx-auto px-6 space-y-6">
        <h2 class="text-3xl font-bold">The Gap We Couldn’t Ignore</h2>
        <p class="text-lg text-neutral-600 dark:text-neutral-300">
            We saw shelves full of options, but very few brands that felt honest, thoughtfully crafted, and trustworthy.
            Drinks that were refreshing, yes — but also made with intention.<br> That gap became our purpose.
        </p>
    </div>
</section>

<!-- BRANDS -->
<section class="py-16">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12">

        <div>
            <h3 class="text-2xl font-bold mb-4">Bubbly – Flavors That Feel Alive</h3>
            <p class="text-lg text-neutral-600 dark:text-neutral-300">
                Bubbly is our tribute to the flavors we grew up with — bold, familiar, and full of character.
                From spice-forward Jeera to citrusy Tangi Orange, cooling Power Mint, and timeless Cola —
                each flavor matches a mood, a moment, and a generation that lives unapologetically.
            </p>
            <p class="mt-4 text-lg text-neutral-600 dark:text-neutral-300">
                Bubbly isn’t just about taste. It’s about expression, confidence, and everyday joy.
            </p>
        </div>

        <div>
            <h3 class="text-2xl font-bold mb-4">Aquapine – Purity, Refined</h3>
            <p class="text-lg text-neutral-600 dark:text-neutral-300">
                With Aquapine Premium Drinking Water, we focused on one word: clarity.
                Sourced and processed to meet stringent quality standards for consumers who value trust and consistency.
            </p>
            <ul class="mt-4 list-disc list-inside text-lg text-neutral-600 dark:text-neutral-300">
                <li>Aquapine Premium Drinking Water</li>
                <li>Aquapine Black Alkaline Water</li>
            </ul>
            <p class="mt-4 text-lg text-neutral-600 dark:text-neutral-300">
                Manufactured in compliance with FSSAI regulations — because credibility matters more than claims.
            </p>
        </div>

    </div>
</section>

<!-- FOUNDER PROMISE -->
<section class="py-16 pt-0 pb-0 bg-background-light dark:bg-white/5 text-center">
    <h2 class="text-3xl md:text-4xl font-bold italic">
        “Kyoki hum haar nahi maante.”
    </h2>
    <p class="mt-4 text-lg text-neutral-600 dark:text-neutral-300 max-w-3xl mx-auto">
        As founders, our journey has never been linear. We’ve faced challenges, learned the hard way,
        and grown stronger with every step. Resilience is not optional. Excellence is not accidental.
    </p>
</section>

<!-- MANIFESTO -->
<section class="py-16 text-center">
    <h2 class="text-3xl font-bold mb-6">The Bubbly Manifesto</h2>

    <div class="max-w-4xl mx-auto text-lg leading-relaxed text-neutral-600 dark:text-neutral-300 space-y-4">
        <p>We are the generation that doesn’t wait.</p>
        <p>We move fast. We feel deeply. We choose boldly.</p>
        <p>We don’t drink just to quench thirst — we drink to pause, celebrate, reset, and rise.</p>
        <p>We believe refreshment should have character, water should have clarity, and brands should have honesty.</p>
        <p class="font-semibold">Kyoki hum haar nahi maante. We rise. We shine. We keep going.</p>
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
