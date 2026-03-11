@php use Illuminate\Support\Str; @endphp
@extends('layouts.frontend')

@section('content')

<!-- HERO -->
<!-- <section class="relative min-h-[500px] flex items-center justify-center bg-black text-white">
<h1 class="text-5xl font-black">Taste Nature's <span class="text-primary">Purest Energy</span></h1>
</section> -->
<section class="relative min-h-[600px] flex items-center justify-center overflow-hidden">

    <!-- Background Video -->
    <div class="absolute inset-0 z-0">
        <video class="w-full h-full object-cover" autoplay muted loop playsinline>
            <source src="{{ asset('images/HOME SCREEN video.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Dark Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/30"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 container mx-auto px-4 md:px-10 lg:px-40 py-20 text-center">

        <span
            class="inline-block py-1 px-3 rounded-full bg-primary/20 text-primary backdrop-blur-md border border-primary/30 text-xs font-bold uppercase tracking-wider mb-6">
            Simple. Fresh. Desi vibes. 🌶️✨
        </span>

        <!--  <h1-->
        <!--  class="text-white text-4xl md:text-6xl lg:text-7xl font-playfair leading-tight tracking-tight mb-6 drop-shadow-lg">-->
        <!--   <br />-->
        <!--  <span class="text-primary italic">Quality jo Full Trust Banaye</span>-->
        <!--</h1>-->
        
        
        <h1 class="mb-6 text-5xl md:text-7xl font-playfair font-black text-primary-foreground leading-tight"style="
    color: white;
    font-family: pl;
"><span class="block"> Taste jo Dil Jeet Le</span><span class="block italic bg-gradient-fresh bg-clip-text text-primary-foreground" style="padding-top: 14px;"> Quality jo Full Trust Banaye!</span></h1>

        <p class="text-white/90 text-lg md:text-xl font-normal max-w-2xl mx-auto mb-10 leading-relaxed">
            Bubbly Soft Drink ke saath har sip mein desi swag, authentic flavour, full on fizz!
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('shop') }}"
                class="h-12 px-8 rounded-lg bg-primary hover:bg-primary/90 text-[#0d1b0d] text-base font-bold flex items-center justify-center transition-transform hover:scale-105 shadow-[0_0_20px_rgba(19,236,19,0.4)]">
                Order Now
            </a>

            <!--<a href="{{ url('/wholesale') }}"-->
            <!--    class="h-12 px-8 rounded-lg bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white border border-white/20 text-base font-bold flex items-center justify-center transition-colors">-->
            <!--    Become a Distributor-->
            <!--</a>-->
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
            <div
                class="group relative w-72 bg-white dark:bg-[#1a2e1a] rounded-2xl p-4 border border-[#e7f3e7] dark:border-white/5 transition-all hover:shadow-xl hover:-translate-y-1">



                <div class="aspect-[4/5] w-full rounded-xl bg-gray-100 dark:bg-black/20 overflow-hidden mb-4 relative">
                    <a href="{{ route('product.show', $product->slug) }}">
                    <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                        style="background-image: url('{{ asset('storage/'.$product->image) }}');">
                    </div>
                            </a>

                    <div
                        class="absolute top-3 left-3 bg-white dark:bg-black/60 text-text-main dark:text-white text-xs font-bold px-2 py-1 rounded">
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

<section class="relative overflow-hidden leading-none">

    <img src="{{ asset('images/home-page-banner-2.jpg.jpeg') }}" alt="Banner"
        class="block w-full h-auto md:h-[85vh] object-contain md:object-cover" />

</section>
<!-- Features Section (Why Choose Us) -->
<section class="py-20 bg-white/50 dark:bg-white/5 border-y border-[#e7f3e7] dark:border-white/5">
    <div class="container mx-auto px-4 md:px-10 lg:px-40">
        <div class="flex flex-col md:flex-row gap-12 items-start">
            <div class="flex-1 max-w-lg">
                <h2 class="text-4xl font-black tracking-tight mb-4 text-text-main dark:text-white">Why Choose APSA Foods
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
                    At APSA Foods, we believe beverages should do more than simply refresh — they should deliver consistency, quality, and confidence in every sip.<br><br>When we looked at the market, we saw shelves full of options, yet very few brands that truly balanced authenticity with structured quality systems and long-term trust. Refreshing products were everywhere — but dependable, thoughtfully built beverage brands were rare.<br><br>That gap became our purpose.<br><br>Our products are developed using carefully sourced ingredients, modern manufacturing infrastructure, and stringent quality control protocols. From sourcing and processing to packaging and distribution, every stage is governed by defined standards to ensure taste consistency, safety, and reliable hydration — without compromise.<br><br>Because for us, refreshment is not just about flavour.It is about building trust that lasts.


                </p>
                <a href="{{ url('/about') }}">
                    <button class="mt-8 text-primary font-bold flex items-center gap-2 group">
                        Want to know how we do it?
                        <span
                            class="material-symbols-outlined transition-transform group-hover:translate-x-1">arrow_forward</span>
                    </button>
                </a>
            </div>
            <div class="flex-1 grid grid-cols-1 sm:grid-cols-2 gap-6 w-full">
                <!-- Feature 1 -->
                <div
                    class="p-6 rounded-xl bg-background-light dark:bg-background-dark border border-[#cfe7cf] dark:border-white/10 hover:border-primary/50 transition-colors">
                    <div class="size-12 rounded-full bg-primary/20 text-primary flex items-center justify-center mb-4">
                        <span class="material-symbols-outlined">eco</span>
                    </div>
                    <h3 class="text-lg font-bold mb-2">Premium Quality Ingredients</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Carefully sourced, hygienically processed, and
                        quality-checked—because India doesn’t settle for average.</p>
                </div>
                <!-- Feature 2 -->
                <div
                    class="p-6 rounded-xl bg-background-light dark:bg-background-dark border border-[#cfe7cf] dark:border-white/10 hover:border-primary/50 transition-colors">
                    <div class="size-12 rounded-full bg-primary/20 text-primary flex items-center justify-center mb-4">
                        <span class="material-symbols-outlined">ac_unit</span>
                    </div>
                    <h3 class="text-lg font-bold mb-2">Refreshing Taste, Full Power</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400">- From the bold, chatakdaar kick of bubbly Jeera
                        to clean, smooth hydration—every sip is instant refresh.</p>
                </div>
                <!-- Feature 3 -->
                <div
                    class="p-6 rounded-xl bg-background-light dark:bg-background-dark border border-[#cfe7cf] dark:border-white/10 hover:border-primary/50 transition-colors">
                    <div class="size-12 rounded-full bg-primary/20 text-primary flex items-center justify-center mb-4">
                        <span class="material-symbols-outlined">water_drop</span>
                    </div>
                    <h3 class="text-lg font-bold mb-2">Zero Compromise on Purity </h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Our Soft beverage & mineral water goes through
                        multiple filtration levels to deliver clean; reliable hydration you can trust forever.</p>
                </div>
                <!-- Feature 4 -->
                <div
                    class="p-6 rounded-xl bg-background-light dark:bg-background-dark border border-[#cfe7cf] dark:border-white/10 hover:border-primary/50 transition-colors">
                    <div class="size-12 rounded-full bg-primary/20 text-primary flex items-center justify-center mb-4">
                        <span class="material-symbols-outlined">recycling</span>
                    </div>
                    <h3 class="text-lg font-bold mb-2">Trusted. Responsible. Ready for Every Scene</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Perfect for daily use, parties, events, and bulk
                        supply—packed responsibly with a strong focus on sustainability.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BRAND STORY SECTION -->
<section class="py-24 px-4 md:px-10 lg:px-40 bg-white dark:bg-[#0c180c]"style="
    background: #F5F5F5;
">
    <div class="max-w-[1200px] mx-auto grid grid-cols-1 md:grid-cols-2 gap-16 items-center">

    <!-- RIGHT IMAGE -->
       <div class="flex justify-center">
  <img
    src="{{ asset('images/home-page--image.jpg.jpeg') }}"
    alt="Bubbly Power Mint"
    class="
      max-h-[420px] object-contain
    "
  />
</div>
        <!-- LEFT CONTENT -->
        <div>
            <h2 class="text-4xl md:text-5xl font-abril font-bold text-text-main dark:text-white mb-6">
                Bubbly Power Mint,
            </h2>

            <p class="text-lg text-gray-700 dark:text-gray-300 mb-4">
               India’s New-Age Fizzy Refreshment Brand
            </p>

            <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
               Born Desi. Built for Today.
            </p>

            <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
             Apsavi Bubbly is not just a soft drink — it’s a mood, a vibe, and a burst of everyday celebration.
            </p>

            <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-6">
              Crafted for India’s fast-moving youth, street culture, and social moments, Apsavi Bubbly blends bold flavours, sharp fizz, and refreshing balance that hits right — every single time.
            </p>
            
             <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-6">
                   From roadside addas to house parties, from college breaks to office cool-downs —
Apsavi Bubbly fits everywhere.
                             </p>
            
          

            <p class="font-bold text-primary">
               “Kyoki hum haar nahi maante.”
            </p>
        </div>

        

    </div>
</section>



<!-- Best Sellers Grid -->
<section class="py-24 px-4 md:px-10 lg:px-40">
    <div class="text-center max-w-2xl mx-auto mb-16">
        <h2 class="text-3xl md:text-4xl font-bold tracking-tight mb-4">Customer Favorites</h2>
        <p class="text-gray-600 dark:text-gray-300">
            Our crowd’s top picks—full taste, full refresh, any time of the day.
        </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 max-w-[1200px] mx-auto">

        @foreach($products->take(4) as $product)
        <div class="flex flex-col group">
            <div class="relative aspect-[3/4] bg-gray-100 dark:bg-white/5 rounded-2xl overflow-hidden mb-4">
                <a href="{{ route('product.show', $product->slug) }}">
                <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                    style="background-image: url('{{ asset('storage/'.$product->image) }}');">
                </div>
                
                </a>

                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                    @csrf

                      <input type="hidden" name="variant_id"
                        value="{{ $product->variants->first()->id ?? '' }}">

                    <input type="hidden" name="quantity" value="1">

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
            <div
                class="bg-background-light dark:bg-[#152a15] p-8 rounded-2xl shadow-sm border border-[#e7f3e7] dark:border-white/5">
                <div class="flex gap-1 text-primary mb-4">
                    <span class="material-symbols-outlined fill-current">star</span>
                    <span class="material-symbols-outlined fill-current">star</span>
                    <span class="material-symbols-outlined fill-current">star</span>
                    <span class="material-symbols-outlined fill-current">star</span>
                    <span class="material-symbols-outlined fill-current">star</span>
                </div>
                <p class="text-lg font-medium mb-6 leading-relaxed">"Super refreshing and perfectly fizzy—now my go-to
                    drink whenever I need an instant pick-me-up."</p>
                <div class="flex items-center gap-4">
                    <div class="size-10 rounded-full bg-cover bg-center" data-alt="Portrait of Sarah J."
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBvmbtwvrafN4oAp50yadItrVz4Z8fKGweT8k1o13U_norcGSBGRotw1IJLZMpQSQS0yerbYGVkcQzletl8t1ii5Kr6htAIaCQI5d2tQ8auzfn5pEQUypztoBp_fj5mGxSGhOXpNC8MXMXec0Fwet3RcgTUkxBLjrPhJrQ0oveLeWnJz-omw06EVsdU7FKhjenSM908GexytqyCcd0htduf7VhRTbvDXK7KOvIrF18H2N1kcew_R2UWlRZIPmT8cuvdddk1ePRVkEo");'>
                    </div>
                    <div>
                        <p class="font-bold text-sm">Ankita</p>
                        <p class="text-xs text-gray-500">Verified Buyer</p>
                    </div>
                </div>
            </div>
            <!-- Testimonial 2 -->
            <div
                class="bg-background-light dark:bg-[#152a15] p-8 rounded-2xl shadow-sm border border-[#e7f3e7] dark:border-white/5">
                <div class="flex gap-1 text-primary mb-4">
                    <span class="material-symbols-outlined fill-current">star</span>
                    <span class="material-symbols-outlined fill-current">star</span>
                    <span class="material-symbols-outlined fill-current">star</span>
                    <span class="material-symbols-outlined fill-current">star</span>
                    <span class="material-symbols-outlined fill-current">star</span>
                </div>
                <p class="text-lg font-medium mb-6 leading-relaxed">"Great taste and reliable quality. The bubbly soda
                    hits just right, especially after a long day."</p>
                <div class="flex items-center gap-4">
                    <div class="size-10 rounded-full bg-cover bg-center" data-alt="Portrait of Mark T."
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBpspEFTrZ3oIXpgIrbS_4cR1UIjXw0PM5Qt9mKOO2UWdmiGtGzZgfBad0uPpuy78wApjxbZYPJfXhLFC0KReJ_LBeXJgNkH54s_nhUZ2_pi_aU2TOFDphxT96D6zq7wloKZNck143coEBsq96l3-q-z1lbMVtJR6yi6I2rf5vSIqM5AWGxMbqpaiIHhDa0UDLMr4TzYVdYpWhujTjzl--mmM72L9K57gnr6EaTF5vcV9P0cbUabCCF4c2Pvf5rkI56LOYMJkj8IZA");'>
                    </div>
                    <div>
                        <p class="font-bold text-sm">Anil</p>
                        <p class="text-xs text-gray-500">Verified Buyer</p>
                    </div>
                </div>
            </div>
            <!-- Testimonial 3 -->
            <div
                class="bg-background-light dark:bg-[#152a15] p-8 rounded-2xl shadow-sm border border-[#e7f3e7] dark:border-white/5">
                <div class="flex gap-1 text-primary mb-4">
                    <span class="material-symbols-outlined fill-current">star</span>
                    <span class="material-symbols-outlined fill-current">star</span>
                    <span class="material-symbols-outlined fill-current">star</span>
                    <span class="material-symbols-outlined fill-current">star</span>
                    <span class="material-symbols-outlined">star</span>
                </div>
                <p class="text-lg font-medium mb-6 leading-relaxed">"Love the focus on purity and sustainability. Clean
                    mineral water and responsible packaging make me feel good about choosing APSA."</p>
                <div class="flex items-center gap-4">
                    <div class="size-10 rounded-full bg-cover bg-center" data-alt="Portrait of Emily R."
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCWeY-_U0Lgo3vtCtC0VBbvboTdiGprBFNg3_gOUhnnig9yMMRSQRfHx5zuNBQtzFTbetJOTOUi7qx86tx56tS7Kl8hsNHPoCnPMtpD6ej99DkgL70erqZS5O0qC88WgV4QPqwkS9wTEYMu7Z8HssTLHGM4yjlRf5507qsZs31cyZAFDZCjrYpnK-VtNaD8mEyuWNXLS9KXde9yhkRo5d6v7-MOXSdDvoCami1O58YhViE90uLn0YaBBer_NVPT7LL8FiBuuJhNzQw");'>
                    </div>
                    <div>
                        <p class="font-bold text-sm">Khushi</p>
                        <p class="text-xs text-gray-500">Verified Buyer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection