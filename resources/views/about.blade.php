@extends('layouts.frontend')

@section('title', 'About Us - APSAVI Global Pvt. Ltd.')

@section('content')

<style>
    @keyframes fade-up {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-up {
        animation: fade-up 0.8s ease-out forwards;
    }
    .glass-card {
        background: rgba(255, 255, 255, 0.03);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }
    .dark .glass-card {
        background: rgba(0, 0, 0, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.05);
    }
</style>

<!-- ================= ABOUT PAGE START ================= -->

<!-- HERO -->
<section class="relative min-h-[60vh] md:min-h-[70vh] flex items-center justify-center overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/about-us-banner-top.jpg.jpeg') }}" alt="About Us Banner" class="w-full h-full object-cover scale-105 animate-pulse-slow">
        <!-- Modern Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 container mx-auto px-6 text-center text-white animate-fade-up">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/20 backdrop-blur-xl text-primary text-xs font-black uppercase tracking-[0.2em] mb-8 border border-primary/30 shadow-lg shadow-primary/10">
            Our Legacy
        </div>

        <h1 class="text-5xl md:text-8xl font-black leading-[1] tracking-tighter mb-8 drop-shadow-2xl">
            Belief-led.<br>
            <span class="text-primary italic">Purpose-built.</span><br>
            Bottled to endure.
        </h1>

        <p class="text-lg md:text-2xl text-white/80 max-w-3xl mx-auto leading-relaxed font-medium">
            Every brand has a beginning. Ours began with belief, resilience, and an unwavering refusal to settle for average.
        </p>
    </div>
</section>

<!-- ABOUT STORY CARD -->
<section class="relative px-6 py-24 md:py-40 overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-primary/10 rounded-full blur-[120px] -z-10"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-primary/5 rounded-full blur-[100px] -z-10"></div>

    <div class="max-w-6xl mx-auto glass-card rounded-3xl p-10 md:p-24 shadow-2xl border border-white/10 relative overflow-hidden group">
        <div class="absolute top-0 right-0 p-10 opacity-10 group-hover:opacity-20 transition-opacity">
            <span class="material-symbols-outlined text-9xl">water_drop</span>
        </div>
        
        <div class="relative z-10 space-y-10 text-xl text-neutral-600 dark:text-neutral-300 leading-relaxed font-light">
            <h2 class="text-4xl md:text-5xl font-black tracking-tighter text-black dark:text-white mb-10">
                Our <span class="text-primary">Beginning</span>
            </h2>

            <p class="first-letter:text-5xl first-letter:font-black first-letter:text-primary first-letter:mr-3 first-letter:float-left">
                After building and expanding our café chain across India, Nepal, and the UAE, we stood at a crossroads.
                We had served millions of cups, shared countless conversations, and witnessed one constant truth —
                people don’t just consume beverages, they connect with them.
            </p>

            <p class="font-medium text-black dark:text-white">
                Cold drinks after long days. Water during quiet moments. Flavors tied to memories.
            </p>

            <p>
                Yet, as the market grew crowded, something felt missing. Refreshment was everywhere, but true <span class="text-primary font-bold italic">intention</span> was rare.
            </p>
        </div>
    </div>
</section>

<!-- THE GAP SECTION -->
<section class="px-6 py-24 md:py-40 bg-white/30 dark:bg-black/20">
    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-20 items-center">

        <div class="space-y-8 animate-fade-up">
            <h2 class="text-5xl md:text-6xl font-black tracking-tighter leading-tight">
                The Gap We <span class="text-primary">Couldn’t Ignore</span>
            </h2>

            <p class="text-xl text-neutral-600 dark:text-neutral-400 leading-relaxed font-light">
                We saw shelves full of options, but very few brands that felt honest,
                thoughtfully crafted, and trustworthy.
                Drinks that were refreshing, yes — but also made with a deep sense of responsibility.
            </p>

            <div class="p-8 rounded-2xl bg-primary/5 border-l-4 border-primary">
                <p class="text-xl text-neutral-800 dark:text-neutral-200 font-bold italic">
                    "That gap became our purpose. And from that purpose, Bubbly Soft Drinks and Aquapine were born."
                </p>
            </div>
        </div>

        <div class="relative rounded-3xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.2)] group">
            <img src="{{ asset('images/about-us-1-image.jpg.jpeg') }}"
                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="The Gap">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-10">
                <p class="text-white font-bold tracking-widest uppercase text-sm">Crafted with Intention</p>
            </div>
        </div>

    </div>
</section>

<!-- BUBBLY STORY -->
<section class="px-6 py-24 md:py-40 overflow-hidden">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-20">

        <div class="w-full md:w-1/2 space-y-8">
            <div class="w-16 h-1 bg-primary mb-6"></div>
            <h2 class="text-5xl md:text-6xl font-black text-slate-900 dark:text-white tracking-tighter">
                Flavors That <br><span class="text-primary">Feel Alive</span>
            </h2>

            <p class="text-xl text-slate-600 dark:text-slate-400 leading-relaxed font-light">
                Bubbly is our tribute to the flavors we grew up with — bold, familiar, and full of character.
                From Bubbly Jeera to Tangi Orange, Power Mint to timeless Cola —
                every flavor is created to match a mood, a moment, and a generation.
            </p>

            <div class="grid gap-6 pt-6">
                @foreach([
                    ['icon' => 'dynamic_form', 'title' => 'Bold & Familiar', 'desc' => 'Tastes that connect with your roots.'],
                    ['icon' => 'bolt', 'title' => 'High Energy', 'desc' => 'Sharp fizz for the fast-moving generation.'],
                    ['icon' => 'sentiment_very_satisfied', 'title' => 'Everyday Joy', 'desc' => 'Making every moment a celebration.']
                ] as $item)
                <div class="flex items-start gap-5 p-6 rounded-2xl border border-slate-100 dark:border-white/5 hover:border-primary/20 transition-colors bg-white/50 dark:bg-white/5">
                    <span class="material-symbols-outlined text-primary bg-primary/10 p-3 rounded-xl">{{ $item['icon'] }}</span>
                    <div>
                        <h4 class="font-bold text-lg mb-1">{{ $item['title'] }}</h4>
                        <p class="text-sm opacity-60">{{ $item['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="w-full md:w-1/2">
            <div class="relative group">
                <div class="absolute -inset-4 bg-primary/20 rounded-[2rem] blur-2xl group-hover:bg-primary/30 transition-all"></div>
                <div class="relative aspect-square rounded-[2rem] overflow-hidden shadow-2xl">
                    <img 
                        src="{{ asset('images/about-us-2-image-(-Flavors-That-Feel-Alive).jpg.jpeg') }}"
                        class="w-full h-full object-cover grayscale-[20%] group-hover:grayscale-0 transition-all duration-700"
                        alt="Bubbly Soft Drink"
                    />
                    <div class="absolute inset-0 bg-gradient-to-tr from-primary/40 to-transparent mix-blend-overlay"></div>
                    <div class="absolute bottom-10 left-10 glass-card p-8 rounded-2xl shadow-2xl transform group-hover:-translate-y-2 transition-transform">
                        <p class="text-3xl font-black text-primary italic tracking-tight">#StayBold</p>
                        <p class="text-white/70 text-sm font-bold uppercase tracking-widest mt-1">Join the tribe</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- FOUNDER PROMISE -->
<section class="relative px-6 py-32 md:py-48 bg-slate-900 overflow-hidden text-center rounded-[3rem] md:rounded-[5rem] mx-4 md:mx-10 my-20">
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-0 right-0 w-96 h-96 bg-primary rounded-full blur-[150px]"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-primary/50 rounded-full blur-[150px]"></div>
    </div>

    <div class="relative z-10 max-w-4xl mx-auto space-y-12">
        <span class="material-symbols-outlined text-8xl text-primary opacity-30">format_quote</span>
        
        <h2 class="text-5xl md:text-8xl font-black tracking-tight leading-tight text-white italic">
            "Kyoki hum <span class="text-primary underline underline-offset-8 decoration-4">haar nahi</span> maante."
        </h2>

        <div class="flex flex-col items-center gap-6 pt-10 border-t border-white/10 w-fit mx-auto">
            <div class="relative">
                <div class="absolute -inset-2 bg-primary/50 rounded-full blur-lg"></div>
                <div class="relative w-24 h-24 rounded-full overflow-hidden border-2 border-primary shadow-2xl">
                    <img alt="The Founder" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAoK3MwVbkmGY5dRAIYtaVClJOsgzFC-Y_9p9x_vEyrbELIsAJ_OLpq2xvB9n1A644Y9vVMbSp5ags2ojWOXdE7xekISvb0SsdZbbePQO4NoSNlDQ7X8GyUxi13eidErc2SHAUATBlacKjtmXOxfqjL9YV5x0zsAw0tFSRVOgCis81omrj_yQnjZsSCMx2XBpDDc2cfTbHUmTA5RdHW1g96kTQ9EZrhUcyICLyn1IJ01e2wGw1pWGprOMZ5vIlcbrEUmDEkoBanXoo"/>
                </div>
            </div>
            <div>
                <p class="text-2xl font-black text-white tracking-tight">The Founder's Promise</p>
                <p class="text-primary font-black uppercase tracking-[0.3em] text-xs mt-2">Persistence in Quality</p>
            </div>
        </div>
    </div>
</section>

<!-- MANIFESTO -->
<section class="px-6 py-32 md:py-48 bg-primary text-black text-center rounded-t-[4rem] relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 pointer-events-none">
        <div class="h-full w-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-black via-transparent to-transparent"></div>
    </div>

    <div class="max-w-5xl mx-auto space-y-10 relative z-10">
        <h2 class="text-5xl md:text-8xl font-black tracking-tighter leading-none">
            Built on Trust. <br>Driven by the Future.
        </h2>

        <p class="text-xl md:text-2xl font-medium max-w-3xl mx-auto leading-relaxed opacity-90">
            APSAVI Global Pvt. Ltd. stands for responsible growth, transparent practices, and long-term relationships. We don’t chase trends. We build brands that last.
        </p>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 pt-16">
            @foreach(['Drink Bold.', 'Stay Real.', 'Pure Choice.', 'Powerful Energy.'] as $text)
            <div class="p-6 rounded-2xl border-2 border-black/10 font-black text-xl hover:bg-black hover:text-primary transition-all cursor-default">
                {{ $text }}
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
