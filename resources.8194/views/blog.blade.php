@extends('layouts.frontend')

@section('title', 'Blog - APSAVI Global Pvt. Ltd.')

@section('content')

{{-- Yahan apna Blog.html ka sirf body ke andar ka code paste karo --}}
{{-- <body> se <footer> tak, lekin <html>, <head>, <body> tags mat paste karna --}}

<main class="flex-1 w-full flex flex-col items-center">
   <div class="layout-content-container flex flex-col w-full px-4 md:px-10 lg:px-40 py-8">
<!-- Page Heading -->
<div class="flex flex-col gap-3 py-4">
<p class="text-slate-900 dark:text-white text-4xl md:text-5xl font-black leading-tight tracking-[-0.033em]">The Fresh Press</p>
<p class="text-green-700 dark:text-green-400 text-lg font-normal leading-normal max-w-2xl">
                        Your daily dose of wellness, recipes, and health tips designed to help you live your freshest life.
                    </p>
</div>
<!-- Hero Section (Featured Article) -->
<div class="py-6">
<div class="bg-white dark:bg-white/5 rounded-2xl overflow-hidden shadow-sm dark:shadow-none border border-black/5 dark:border-white/5">
<div class="flex flex-col md:flex-row">
<div class="w-full md:w-1/2 aspect-video md:aspect-auto h-64 md:h-auto bg-cover bg-center" data-alt="glass of celery juice on a table with fresh celery sticks" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDwVXGp-ThDyckcKmNjAS2_ZJbqjKDsaS5S4RwjuQAz3e7Wjo8OxgTCktv9Al01gFy6L_wWJXxg_zqplx3bqlREn_2aSgtXK_aavati0Qd-byR6BQ-ClaxF4cqJ_RcwZxS9_IQ5n3DB0aGfSCJL5khBp-aAn9eCV4QIePQZT9CGTJ5IL2oQk8GrZOW74a7vaudDBNBMaQZX-pxUrvi0j7aDiXIHDwog7_26u-7lECLr4CH9QWmTQqYQyHiAV7kQIL8S2tMV4RdtsRI");'>
</div>
<div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center gap-6">
<div class="flex flex-col gap-3">
<span class="inline-block px-3 py-1 rounded-full bg-primary/20 text-green-800 dark:text-green-200 text-xs font-bold uppercase tracking-wider w-fit">Featured</span>
<h1 class="text-slate-900 dark:text-white text-3xl md:text-4xl font-black leading-tight tracking-tight">
                                        Why Celery Juice is the Morning Miracle You Need
                                    </h1>
<h2 class="text-slate-600 dark:text-gray-300 text-base md:text-lg leading-relaxed">
                                        Discover the hydrating benefits of starting your day with pure celery juice and how it impacts your long-term health and digestion.
                                    </h2>
</div>

</div>
</div>
</div>
</div>

<!-- Blog Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 py-6">
<!-- Card 1 -->
<article class="card-hover-effect flex flex-col gap-4 group cursor-pointer">
<div class="image-zoom-container w-full aspect-[4/3] rounded-xl overflow-hidden bg-gray-100 dark:bg-gray-800">
<div class="zoom-image w-full h-full bg-center bg-no-repeat bg-cover" data-alt="Berry smoothie in a glass jar with fresh berries around" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBsRVD94MidQ5F5btSXxiQN13VO0jxSR3669FDz-JpmxnLZt-KndLY3psyGWpUonuSajtCGl6TW4xE2SAv-Wd2r26GFUIaO0O8uDeB6MXcxcXI7Soz2vyxHVNyQDyfMVIDlPr5lqY5H_RiCThRABWY6-oqRchor_uE8JhgSynTikIwZcg9rmgIe0jFK9s_f0v4ONbesHPkytgMDwXgasTsRovhw2BLRrGyfhfml38LYcHB6BSc-n4RtBl87capnMXKSDkPRAuODEdE");'>
</div>
</div>
<div class="flex flex-col gap-2">
<span class="text-xs font-bold text-primary uppercase tracking-wide">Recipes</span>
<h3 class="text-slate-900 dark:text-white text-xl font-bold leading-tight group-hover:text-green-700 dark:group-hover:text-green-400 transition-colors">
                                5 Smoothies for Post-Workout Recovery
                            </h3>
<p class="text-slate-600 dark:text-gray-400 text-sm leading-relaxed line-clamp-2">
                                Replenish your electrolytes naturally with these delicious berry blends that are packed with antioxidants.
                            </p>
<div class="pt-1">

</div>
</div>
</article>
<!-- Card 2 -->
<article class="card-hover-effect flex flex-col gap-4 group cursor-pointer">
<div class="image-zoom-container w-full aspect-[4/3] rounded-xl overflow-hidden bg-gray-100 dark:bg-gray-800">
<div class="zoom-image w-full h-full bg-center bg-no-repeat bg-cover" data-alt="Green juice bottles on a wooden table" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuANoIR0WAt2TQ2fy6-Qz4FgDVRV0GRQvm1cA-mj6kUt1hqu8Fcaby1KLdL04yiJssuwnThcnLp9CwYMGrfntG43C6CUx2Xis6fTyR8pEOhPgOhoZURwFScJGEpcsBdwhNL17U4i085bs4WCId33vWbnCbxc-nNMg0R_25Vq1GUCIvIlYlFLA8DlBBzNA0RKn0gKo1U9ptRmIoCoMM-OphlE8QE2twZNRPGVhUIbuKakB_8zQ5bFuOyItbEQzo8r-2FACS7n4ONUKX8");'>
</div>
</div>
<div class="flex flex-col gap-2">
<span class="text-xs font-bold text-primary uppercase tracking-wide">Education</span>
<h3 class="text-slate-900 dark:text-white text-xl font-bold leading-tight group-hover:text-green-700 dark:group-hover:text-green-400 transition-colors">
                                Understanding Cold-Pressed vs. Centrifugal
                            </h3>
<p class="text-slate-600 dark:text-gray-400 text-sm leading-relaxed line-clamp-2">
                                Why the method of extraction matters for nutrient retention in your daily juice and which one you should choose.
                            </p>
<div class="pt-1">

</div>
</div>
</article>
<!-- Card 3 -->
<article class="card-hover-effect flex flex-col gap-4 group cursor-pointer">
<div class="image-zoom-container w-full aspect-[4/3] rounded-xl overflow-hidden bg-gray-100 dark:bg-gray-800">
<div class="zoom-image w-full h-full bg-center bg-no-repeat bg-cover" data-alt="Assorted citrus fruits slices on a table" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA0wYZ79cO4XGBWMQsEAklsAc7Gqqrqi2pnpsdIcDdhW-Xt4qipMxPzCmqiKE0q10qxhn6mnfrmHThwgfJrBj6tpIBC8UiOBQRYnSbfCk_ARIJJZGD1cBDcyqtd5RRImS2v9z7oR59R8wvOF-jlV244jKpYbK_E9hDfdC4vzxcTHHg0DOxTgy6YZUGFmQux-pGEgCKT0JGOnU0fWeM71rTgns-P_WC9utUYYXjidHnVaM7yeBs1HbapfGnwJECGmnm7VoaCTrnyWAE");'>
</div>
</div>
<div class="flex flex-col gap-2">
<span class="text-xs font-bold text-primary uppercase tracking-wide">Detox</span>
<h3 class="text-slate-900 dark:text-white text-xl font-bold leading-tight group-hover:text-green-700 dark:group-hover:text-green-400 transition-colors">
                                The Ultimate 3-Day Cleanse Guide
                            </h3>
<p class="text-slate-600 dark:text-gray-400 text-sm leading-relaxed line-clamp-2">
                                A step-by-step guide to resetting your digestive system safely and effectively without feeling deprived.
                            </p>
<div class="pt-1">

</div>
</div>
</article>
<!-- Card 4 -->
<article class="card-hover-effect flex flex-col gap-4 group cursor-pointer">
<div class="image-zoom-container w-full aspect-[4/3] rounded-xl overflow-hidden bg-gray-100 dark:bg-gray-800">
<div class="zoom-image w-full h-full bg-center bg-no-repeat bg-cover" data-alt="Green juice in a clear glass on white background" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCUyJtp3VNEkDJbo3DfZoJxunCYCGSTNwN3lKSan_jafZd_7VByJf15npfCPN7e990Xb04h3clCIoIOKiYZPtJRDBPzCQlA4T8LDOWRwb2VIz5Sq_tWCckGxoffCrnkwdGoBvuv_01L0V2Em8HsMa3sa9WtV950460CqX95-hSoAMA5QYnWirtw9WWq9VVxa8cJJUakNcQlHNwKmwDu80Es82rmVOr-8hNHcPBLNkjWnsMctQ04HNjQ1jhd6SeO-5wDxV3KYnt9zDc");'>
</div>
</div>
<div class="flex flex-col gap-2">
<span class="text-xs font-bold text-primary uppercase tracking-wide">Myth Busting</span>
<h3 class="text-slate-900 dark:text-white text-xl font-bold leading-tight group-hover:text-green-700 dark:group-hover:text-green-400 transition-colors">
                                Green Juice Myths Debunked
                            </h3>
<p class="text-slate-600 dark:text-gray-400 text-sm leading-relaxed line-clamp-2">
                                Separating fact from fiction in the wellness world regarding sugar content, fiber, and actual health benefits.
                            </p>
<div class="pt-1">

</div>
</div>
</article>
<!-- Card 5 -->
<article class="card-hover-effect flex flex-col gap-4 group cursor-pointer">
<div class="image-zoom-container w-full aspect-[4/3] rounded-xl overflow-hidden bg-gray-100 dark:bg-gray-800">
<div class="zoom-image w-full h-full bg-center bg-no-repeat bg-cover" data-alt="Woman waking up stretching in bed near window" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDYnyhNxQb9decjeufscvdz-Mq0Mllb42AxjXA01mNrU_Jhk8Gd9lWM1Qpq3SvHjOoaHRBc1JO1c1n50RBaHpFs26yaTf7Gv8wNk2zx-uzrtlfLbqvIdlr6Ohr3QTUOcfU0BsK6CEQOR4izrCrc9LFgliBm4JaQTe_tewjiu8_k9l2mRZhGc_AOrAOwicPepsSMse8iJUMaC0oBr9-pqQmSzX5APqgXqq2ZAgD7JD1ItjBneGJL9yulRQRICRSIBnW1c8IWfPSqDZw");'>
</div>
</div>
<div class="flex flex-col gap-2">
<span class="text-xs font-bold text-primary uppercase tracking-wide">Lifestyle</span>
<h3 class="text-slate-900 dark:text-white text-xl font-bold leading-tight group-hover:text-green-700 dark:group-hover:text-green-400 transition-colors">
                                Morning Routine for Energy
                            </h3>
<p class="text-slate-600 dark:text-gray-400 text-sm leading-relaxed line-clamp-2">
                                How to start your day right without relying on caffeine. Small habits that lead to big energy shifts.
                            </p>
<div class="pt-1">

</div>
</div>
</article>
<!-- Card 6 -->
<article class="card-hover-effect flex flex-col gap-4 group cursor-pointer">
<div class="image-zoom-container w-full aspect-[4/3] rounded-xl overflow-hidden bg-gray-100 dark:bg-gray-800">
<div class="zoom-image w-full h-full bg-center bg-no-repeat bg-cover" data-alt="Bowl of fresh oranges and lemons" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAEj6ARyjZLP9cJ8K-0K9rEftJdewSWi4-lnX09nBwdV9rtUhd09fPohI1Il9qb0R4Snn3amG22W9c_Tf3UNBvCXvfew4i9LDXVbRQKbrGFEX_JOdZwkBBuuSnmbJ5_Zcm9_y6xK_-eCUvQnq3oQsuAmZ3pbo-rGCpsWBsslQ9qmZnrm1hW1M8VM15JOSSQJqIwdw_WauaAFSB6zT8YmpaTEfOYVOy9tLnklfi_cPvm8DWpOuxebw9engUIj1ATtvZnVYdnACGRxtM");'>
</div>
</div>
<div class="flex flex-col gap-2">
<span class="text-xs font-bold text-primary uppercase tracking-wide">Beauty</span>
<h3 class="text-slate-900 dark:text-white text-xl font-bold leading-tight group-hover:text-green-700 dark:group-hover:text-green-400 transition-colors">
                                Best Fruits for Glowing Skin
                            </h3>
<p class="text-slate-600 dark:text-gray-400 text-sm leading-relaxed line-clamp-2">
                                Vitamin C packed fruits to boost your collagen and radiance from the inside out.
                            </p>
<div class="pt-1">

</div>
</div>
</article>
</div>
<div class="flex justify-center py-8">

</div>
</div>

</main>

@endsection