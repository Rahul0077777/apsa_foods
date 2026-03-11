@php use Illuminate\Support\Str; @endphp
@extends('layouts.frontend')

@section('content')

<!-- HERO -->
<!-- <section class="relative min-h-[500px] flex items-center justify-center bg-black text-white">
<h1 class="text-5xl font-black">Taste Nature's <span class="text-primary">Purest Energy</span></h1>
</section> -->
<section class="relative min-h-[600px] flex items-center justify-center overflow-hidden">
<!-- Background Image with Overlay -->
<div class="absolute inset-0 bg-cover bg-center bg-no-repeat z-0" data-alt="Close up of splashing orange liquid and fresh citrus fruits" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAPac42WC5E1hiMiiJ5-BwCp2YvHV191C0SomxuqmYLPODQHeXJ-YW2EYUBUf1JE3Jzzm61Q2zp1RKhwAxRNIwl4kEjU9Am1P63iBNduLaXuvNL7-wKdnQVMHPa_1ZY4iFtGN3ETIWbN3Rrvxb8s_z_9WUrek-MrghcJ-TMd11mo4sckWDg1_ONxybY3KtJvxI9Hfh_6Kc3On8ByekIZ5GZ76UXfhvNC5mFwRLdlsiAxMTpLBhOIlL8Ka6Cq7WPS3SVxt5z9n-qwyU");'>
<div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/30"></div>
</div>
<div class="relative z-10 container mx-auto px-4 md:px-10 lg:px-40 py-20 text-center">
<span class="inline-block py-1 px-3 rounded-full bg-primary/20 text-primary backdrop-blur-md border border-primary/30 text-xs font-bold uppercase tracking-wider mb-6">
                100% Organic &amp; Fresh
            </span>
<h1 class="text-white text-4xl md:text-6xl lg:text-7xl font-black leading-tight tracking-tight mb-6 drop-shadow-lg">
                Taste Nature's <br/> <span class="text-primary">Purest Energy</span>
</h1>
<p class="text-white/90 text-lg md:text-xl font-normal max-w-2xl mx-auto mb-10 leading-relaxed">
                Cold-pressed, 100% organic juices delivered straight to your door. Experience the vitality of raw ingredients.
            </p>
<div class="flex flex-col sm:flex-row gap-4 justify-center">
<button class="h-12 px-8 rounded-lg bg-primary hover:bg-primary/90 text-[#0d1b0d] text-base font-bold transition-transform hover:scale-105 shadow-[0_0_20px_rgba(19,236,19,0.4)]">
                  <a href="{{ route('shop') }}" >  Shop Now</a>
                </button>
<button class="h-12 px-8 rounded-lg bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white border border-white/20 text-base font-bold transition-colors">
                   <a href="{{ url('/wholesale') }}"> Become a Distributor</a>
                </button>
</div>
</div>
</section>

<section class="py-16 md:py-24 px-4 md:px-10 lg:px-40">
    <div class="flex items-end justify-between mb-10 max-w-[1200px] mx-auto">
        <div>
            <h2 class="text-text-main dark:text-white text-3xl font-bold tracking-tight mb-2">New Arrivals</h2>
            <p class="text-text-light dark:text-gray-400">Freshly pressed this week.</p>
        </div>
        <a class="hidden sm:flex items-center gap-1 text-primary font-bold hover:underline" href="{{ route('shop') }}">
            View All <span class="material-symbols-outlined text-sm">arrow_forward</span>
        </a>
    </div>

    <div class="max-w-[1200px] mx-auto overflow-x-auto no-scrollbar pb-8">
        <div class="flex gap-6 min-w-max">

            @foreach($products as $product)
            <div class="group relative w-72 bg-white dark:bg-[#1a2e1a] rounded-2xl p-4 border border-[#e7f3e7] dark:border-white/5 transition-all hover:shadow-xl hover:-translate-y-1">
                
                <div class="aspect-[4/5] w-full rounded-xl bg-gray-100 dark:bg-black/20 overflow-hidden mb-4 relative">
                    <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                        style="background-image: url('{{ asset('storage/'.$product->image) }}');">
                    </div>

                    <div class="absolute top-3 left-3 bg-white dark:bg-black/60 text-text-main dark:text-white text-xs font-bold px-2 py-1 rounded">
                        New
                    </div>
                </div>

                <h3 class="text-lg font-bold text-text-main dark:text-white">
                    {{ $product->name }}
                </h3>

                <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">
                    {{ \Illuminate\Support\Str::limit($product->description, 40) }}
                </p>

                <div class="flex items-center justify-between">
                    <span class="text-lg font-bold text-primary">₹ {{ $product->price }}</span>

                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="size-10 rounded-full bg-[#e7f3e7] dark:bg-white/10 text-text-main dark:text-white flex items-center justify-center hover:bg-primary hover:text-[#0d1b0d] transition-colors">
                            <span class="material-symbols-outlined">add</span>
                        </button>
                    </form>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<!-- Features Section (Why Choose Us) -->
<section class="py-20 bg-white/50 dark:bg-white/5 border-y border-[#e7f3e7] dark:border-white/5">
<div class="container mx-auto px-4 md:px-10 lg:px-40">
<div class="flex flex-col md:flex-row gap-12 items-start">
<div class="flex-1 max-w-lg">
<h2 class="text-4xl font-black tracking-tight mb-4 text-text-main dark:text-white">Why Choose Us</h2>
<p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
                        We believe in the power of raw nature. Our juices are never heated, never treated with preservatives, and always bursting with life.
                    </p>
<a href="{{ url('/about') }}">
<button class="mt-8 text-primary font-bold flex items-center gap-2 group">
                        Learn more about our process
                        <span class="material-symbols-outlined transition-transform group-hover:translate-x-1">arrow_forward</span>
</button>
</a>
</div>
<div class="flex-1 grid grid-cols-1 sm:grid-cols-2 gap-6 w-full">
<!-- Feature 1 -->
<div class="p-6 rounded-xl bg-background-light dark:bg-background-dark border border-[#cfe7cf] dark:border-white/10 hover:border-primary/50 transition-colors">
<div class="size-12 rounded-full bg-primary/20 text-primary flex items-center justify-center mb-4">
<span class="material-symbols-outlined">eco</span>
</div>
<h3 class="text-lg font-bold mb-2">100% Organic</h3>
<p class="text-sm text-gray-500 dark:text-gray-400">Sourced from certified organic local farms. No synthetic pesticides ever.</p>
</div>
<!-- Feature 2 -->
<div class="p-6 rounded-xl bg-background-light dark:bg-background-dark border border-[#cfe7cf] dark:border-white/10 hover:border-primary/50 transition-colors">
<div class="size-12 rounded-full bg-primary/20 text-primary flex items-center justify-center mb-4">
<span class="material-symbols-outlined">ac_unit</span>
</div>
<h3 class="text-lg font-bold mb-2">Cold Pressed</h3>
<p class="text-sm text-gray-500 dark:text-gray-400">Hydraulic pressed to retain maximum enzymes, vitamins, and minerals.</p>
</div>
<!-- Feature 3 -->
<div class="p-6 rounded-xl bg-background-light dark:bg-background-dark border border-[#cfe7cf] dark:border-white/10 hover:border-primary/50 transition-colors">
<div class="size-12 rounded-full bg-primary/20 text-primary flex items-center justify-center mb-4">
<span class="material-symbols-outlined">water_drop</span>
</div>
<h3 class="text-lg font-bold mb-2">No Added Sugar</h3>
<p class="text-sm text-gray-500 dark:text-gray-400">Sweetness comes purely from the fruit itself. Zero artificial additives.</p>
</div>
<!-- Feature 4 -->
<div class="p-6 rounded-xl bg-background-light dark:bg-background-dark border border-[#cfe7cf] dark:border-white/10 hover:border-primary/50 transition-colors">
<div class="size-12 rounded-full bg-primary/20 text-primary flex items-center justify-center mb-4">
<span class="material-symbols-outlined">recycling</span>
</div>
<h3 class="text-lg font-bold mb-2">Eco-Friendly</h3>
<p class="text-sm text-gray-500 dark:text-gray-400">Bottled in glass and delivered in sustainable, recyclable packaging.</p>
</div>
</div>
</div>
</div>
</section>

<!-- Best Sellers Grid -->
<section class="py-24 px-4 md:px-10 lg:px-40">
    <div class="text-center max-w-2xl mx-auto mb-16">
        <h2 class="text-3xl md:text-4xl font-bold tracking-tight mb-4">Customer Favorites</h2>
        <p class="text-gray-600 dark:text-gray-300">
            Our community's most loved blends, perfect for your daily routine.
        </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 max-w-[1200px] mx-auto">
        
        @foreach($products->take(4) as $product)
        <div class="flex flex-col group">
            <div class="relative aspect-[3/4] bg-gray-100 dark:bg-white/5 rounded-2xl overflow-hidden mb-4">
                
                 <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                        style="background-image: url('{{ asset('storage/'.$product->image) }}');">
                    </div>

                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="absolute bottom-4 right-4 size-10 bg-white dark:bg-black text-text-main dark:text-white rounded-full shadow-lg flex items-center justify-center translate-y-14 group-hover:translate-y-0 transition-transform duration-300 hover:bg-primary hover:text-black">
                        <span class="material-symbols-outlined">shopping_bag</span>
                    </button>
                </form>
            </div>

            <h3 class="text-lg font-bold">{{ $product->name }}</h3>
            <span class="text-primary font-bold">₹ {{ $product->price }}</span>
        </div>
        @endforeach

    </div>

    <div class="flex justify-center mt-12">
        <a href="{{ route('shop') }}"
           class="px-8 py-3 rounded-lg border-2 border-[#0d1b0d] dark:border-white text-[#0d1b0d] dark:text-white font-bold hover:bg-[#0d1b0d] hover:text-white dark:hover:bg-white dark:hover:text-[#0d1b0d] transition-colors">
            View All Products
        </a>
    </div>
</section>


<!-- Testimonials -->
<section class="py-20 bg-[#fcfefc] dark:bg-[#0c180c]">
<div class="container mx-auto px-4 md:px-10 lg:px-40">
<h2 class="text-3xl font-bold text-center mb-16">What Our Tribe Says</h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-[1200px] mx-auto">
<!-- Testimonial 1 -->
<div class="bg-background-light dark:bg-[#152a15] p-8 rounded-2xl shadow-sm border border-[#e7f3e7] dark:border-white/5">
<div class="flex gap-1 text-primary mb-4">
<span class="material-symbols-outlined fill-current">star</span>
<span class="material-symbols-outlined fill-current">star</span>
<span class="material-symbols-outlined fill-current">star</span>
<span class="material-symbols-outlined fill-current">star</span>
<span class="material-symbols-outlined fill-current">star</span>
</div>
<p class="text-lg font-medium mb-6 leading-relaxed">"The freshest juice I've ever tasted. It's my daily morning ritual now, and I can truly feel the difference in my energy levels."</p>
<div class="flex items-center gap-4">
<div class="size-10 rounded-full bg-cover bg-center" data-alt="Portrait of Sarah J." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBvmbtwvrafN4oAp50yadItrVz4Z8fKGweT8k1o13U_norcGSBGRotw1IJLZMpQSQS0yerbYGVkcQzletl8t1ii5Kr6htAIaCQI5d2tQ8auzfn5pEQUypztoBp_fj5mGxSGhOXpNC8MXMXec0Fwet3RcgTUkxBLjrPhJrQ0oveLeWnJz-omw06EVsdU7FKhjenSM908GexytqyCcd0htduf7VhRTbvDXK7KOvIrF18H2N1kcew_R2UWlRZIPmT8cuvdddk1ePRVkEo");'></div>
<div>
<p class="font-bold text-sm">Sarah Jenkins</p>
<p class="text-xs text-gray-500">Verified Buyer</p>
</div>
</div>
</div>
<!-- Testimonial 2 -->
<div class="bg-background-light dark:bg-[#152a15] p-8 rounded-2xl shadow-sm border border-[#e7f3e7] dark:border-white/5">
<div class="flex gap-1 text-primary mb-4">
<span class="material-symbols-outlined fill-current">star</span>
<span class="material-symbols-outlined fill-current">star</span>
<span class="material-symbols-outlined fill-current">star</span>
<span class="material-symbols-outlined fill-current">star</span>
<span class="material-symbols-outlined fill-current">star</span>
</div>
<p class="text-lg font-medium mb-6 leading-relaxed">"Incredible service and even better taste. The Green Detox is a lifesaver after a long weekend."</p>
<div class="flex items-center gap-4">
<div class="size-10 rounded-full bg-cover bg-center" data-alt="Portrait of Mark T." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBpspEFTrZ3oIXpgIrbS_4cR1UIjXw0PM5Qt9mKOO2UWdmiGtGzZgfBad0uPpuy78wApjxbZYPJfXhLFC0KReJ_LBeXJgNkH54s_nhUZ2_pi_aU2TOFDphxT96D6zq7wloKZNck143coEBsq96l3-q-z1lbMVtJR6yi6I2rf5vSIqM5AWGxMbqpaiIHhDa0UDLMr4TzYVdYpWhujTjzl--mmM72L9K57gnr6EaTF5vcV9P0cbUabCCF4c2Pvf5rkI56LOYMJkj8IZA");'></div>
<div>
<p class="font-bold text-sm">Mark Thompson</p>
<p class="text-xs text-gray-500">Verified Buyer</p>
</div>
</div>
</div>
<!-- Testimonial 3 -->
<div class="bg-background-light dark:bg-[#152a15] p-8 rounded-2xl shadow-sm border border-[#e7f3e7] dark:border-white/5">
<div class="flex gap-1 text-primary mb-4">
<span class="material-symbols-outlined fill-current">star</span>
<span class="material-symbols-outlined fill-current">star</span>
<span class="material-symbols-outlined fill-current">star</span>
<span class="material-symbols-outlined fill-current">star</span>
<span class="material-symbols-outlined">star</span>
</div>
<p class="text-lg font-medium mb-6 leading-relaxed">"Love the sustainability focus. Glass bottles and recyclable packaging make me feel good about my purchase."</p>
<div class="flex items-center gap-4">
<div class="size-10 rounded-full bg-cover bg-center" data-alt="Portrait of Emily R." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCWeY-_U0Lgo3vtCtC0VBbvboTdiGprBFNg3_gOUhnnig9yMMRSQRfHx5zuNBQtzFTbetJOTOUi7qx86tx56tS7Kl8hsNHPoCnPMtpD6ej99DkgL70erqZS5O0qC88WgV4QPqwkS9wTEYMu7Z8HssTLHGM4yjlRf5507qsZs31cyZAFDZCjrYpnK-VtNaD8mEyuWNXLS9KXde9yhkRo5d6v7-MOXSdDvoCami1O58YhViE90uLn0YaBBer_NVPT7LL8FiBuuJhNzQw");'></div>
<div>
<p class="font-bold text-sm">Emily Rodriguez</p>
<p class="text-xs text-gray-500">Verified Buyer</p>
</div>
</div>
</div>
</div>
</div>
</section>

@endsection
