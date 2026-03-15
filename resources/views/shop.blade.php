@extends('layouts.frontend')

@section('content')
<style>
    .font-cursive {
        font-family: 'Dancing Script', cursive;
    }
    
    .font-abril {
        font-family: 'Abril Fatface', cursive;
    }

    .shop-now-btn {
        transition: all 0.3s ease;
        border-radius: 9999px; /* Fully rounded */
        border: 1px solid #d1d5db; /* Light gray border */
        background-color: transparent;
        color: #4b5563; /* Gray text */
        font-family: 'Inter', sans-serif;
    }
    
    .shop-now-btn:hover {
        background-color: #f3f4f6; /* Light gray hover */
    }

    /* Product Title Styling */
    .product-title {
        font-family: 'Dancing Script', cursive;
        color: #8DAA36; /* Default lime green, overridden inline */
        font-weight: 700;
        line-height: 1.2;
    }

    .trial-pack-btn {
        transition: all 0.3s ease;
        border-radius: 9999px; /* Fully rounded */
        font-family: 'Inter', sans-serif;
        background-color: #8DAA36;
        color: white;
        font-weight: 700;
    }

    .trial-pack-btn:hover {
        background-color: #7a932e;
        transform: scale(1.02);
    }
</style>

<main class="flex-grow bg-[#fcfcfc] dark:bg-[#0c180c]">
    <div class="w-full">
        
        {{-- Top Banner Section --}}
        <div class="w-full mb-6 relative">
       <img 
        src="{{ asset('images/shop_banner.jpg') }}" 
        alt="Shop Banner" 
        class="w-full h-auto object-contain"
       />
    </div>
        
        {{-- Cursive Intro Text --}}
        <div class="text-center mb-8 px-4">
            <p class="font-cursive text-2xl md:text-3xl lg:text-4xl text-[#111111] leading-tight max-w-3xl mx-auto">
                <span class="block">Flavor ki full team ready hai yaar,</span>
                <span class="block">Jeera ho, Shikanji ho ya Cola — sab hai superstar! </span>
                <span class="block">Ek sip loge toh kahoge baar-baar,</span>
                <span class="block">Ye drink nahi… summer ka blockbuster hai yaar!</span>

            </p>
        </div>

        {{-- Toolbar / Filters Placeholder (Matching design) --}}
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-12 border-y border-gray-200 p-4 bg-white w-full mx-auto px-4 md:px-8">
            <div class="flex flex-wrap items-center gap-4 w-full md:w-auto">
                {{-- Show Filters Placeholder (could be tied to a modal or sliding sidebar in the future) --}}
                <button class="flex items-center gap-2 text-sm text-gray-600 px-4 py-2 border border-gray-300 rounded hover:bg-gray-50 shrink-0">
                    <span class="material-symbols-outlined text-[18px]">tune</span>
                    Show Filters
                </button>
                <div class="text-sm shrink-0">
                    <a href="/" class="hover:text-primary transition-colors">Home</a> / <span class="text-neutral-900 font-bold">Shop</span>
                </div>
            </div>

            <form method="GET" action="{{ route('shop') }}" class="flex items-center gap-2 w-full md:w-auto mt-2 md:mt-0 justify-between md:justify-end">
                <label class="text-sm font-medium text-gray-500 whitespace-nowrap">Sort by:</label>
                <select name="sort" onchange="this.form.submit()" class="text-sm border flex-grow md:flex-grow-0 border-gray-200 rounded-md p-1 bg-transparent outline-none text-gray-800 font-medium font-inter cursor-pointer">
                    <option value="">Featured</option>
                    <option value="low_high" {{ request('sort')=='low_high'?'selected':'' }}>Price: Low to High</option>
                    <option value="high_low" {{ request('sort')=='high_low'?'selected':'' }}>Price: High to Low</option>
                </select>

                {{-- Keep existing filters on sort --}}
                @foreach(request()->get('category', []) as $cat)
                    <input type="hidden" name="category[]" value="{{ $cat }}">
                @endforeach
                <input type="hidden" name="max_price" value="{{ request('max_price') }}">
            </form>
        </div>

        {{-- Trial Pack Section (if available) --}}
        <div class="px-4 md:px-8">
            @if(isset($packages) && $packages->count())
                @foreach($packages as $package)
                <div class="flex flex-col md:flex-row items-center justify-between mb-24 gap-8 md:gap-16">
                {{-- Left Side: Image Container with Gray Background --}}
                <div class="w-full md:w-[60%] h-[300px] md:h-[400px] bg-[#d9d9d9] rounded-3xl flex items-center justify-center overflow-hidden p-8">
                    @if($package->image)
                        <img src="{{ asset('storage/'.$package->image) }}" alt="{{ $package->title }}" class="w-full h-full object-contain mix-blend-multiply hover:scale-105 transition duration-500">
                    @else
                        {{-- Fallback if no image uploaded --}}
                        <span class="text-gray-400 font-semibold">Image</span>
                    @endif
                </div>
                
                {{-- Right Side: Content --}}
                <div class="w-full md:w-[40%] text-center md:text-left">
                    <h2 class="text-6xl md:text-[80px] font-abril text-[#111] mb-2 leading-none">
                        {{ $package->title }}
                    </h2>
                    
                    <div class="flex items-center justify-center md:justify-start gap-2 mb-6 font-inter">
                        <span class="text-[#A0A0A0] text-sm md:text-base line-through">MRP {{ number_format($package->price * 1.05, 2) }}</span>
                        <span class="text-[#8DAA36] text-sm md:text-base font-bold">From Rs. {{ number_format($package->price, 2) }}</span>
                    </div>
                    
                    <form action="{{ route('cart.add.package', $package->id) }}" method="POST" class="flex justify-center md:justify-start">
                        @csrf
                        <button type="submit" class="trial-pack-btn px-12 py-3 md:px-16 md:py-4 shadow-sm text-lg w-full max-w-[300px]">
                            Shop Now
                        </button>
                    </form>
                </div>
                </div>
                @endforeach
            @endif
        </div>

        {{-- Product Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-20 p-4 md:p-8">
            @foreach($products as $product)
                @php
                    // Logic for exact colors from Figma based on product name
                    $bgColor = '#8DAA36'; // Default Lime Green
                    $textColor = '#8DAA36'; // Default Title Color
                    
                    if (Str::contains(Str::lower($product->name), 'jeera')) {
                        $bgColor = '#2F5939'; // Dark green
                        $textColor = '#8DAA36'; // Standard Lime text for all in this design? The design shows "Bubbly Lime" text for all, which might be placeholder, but the color is all the same lime green #8DAA36.
                    }
                    if (Str::contains(Str::lower($product->name), 'cola')) {
                        $bgColor = '#B81D22'; // Cola Red
                        $textColor = '#8DAA36';
                    }
                    if (Str::contains(Str::lower($product->name), 'shikanji')) {
                        $bgColor = '#00A3E0'; // Blue
                        $textColor = '#8DAA36';
                    }
                    if (Str::contains(Str::lower($product->name), 'litchi')) {
                        $bgColor = '#D95383'; // Pinkish red
                        $textColor = '#8DAA36';
                    }
                    if (Str::contains(Str::lower($product->name), 'mojito')) {
                        $bgColor = '#2EA31E'; // Bright green
                        $textColor = '#8DAA36';
                    }
                    if (Str::contains(Str::lower($product->name), 'club soda')) {
                        $bgColor = '#000000'; // Black
                        $textColor = '#8DAA36';
                    }
                    if (Str::contains(Str::lower($product->name), 'aquaping')) {
                        $bgColor = '#4A5D7C'; // Grayish blue
                        $textColor = '#8DAA36';
                    }
                @endphp
                
                <div class="flex flex-col items-center">
                    {{-- Image Container with Circle Background --}}
                    <div class="relative w-full aspect-square flex items-center justify-center mb-6">
                        <div class="absolute inset-0 m-auto w-[85%] h-[85%] rounded-full" ></div>
                        <a href="{{ route('product.show', $product->slug) }}" class="relative z-10 h-full flex items-center justify-center transform hover:scale-105 transition-transform duration-300">
                            <img src="{{ asset('storage/'.$product->image) }}" 
                                 alt="{{ $product->name }}" 
                                 class="h-[110%] w-auto object-contain mb-[-10%] drop-shadow-xl saturate-110">
                        </a>
                    </div>
                    
                    {{-- Product Details --}}
                    <div class="text-center w-full">
                        {{-- Price --}}
                        <div class="flex items-center justify-center gap-2 mb-1 font-inter">
                            <span class="text-[#A0A0A0] text-xs font-semibold line-through">MRP {{ number_format($product->price * 1.1, 2) }}</span>
                            <span class="text-[#111111] text-xs font-bold">From Rs. {{ number_format($product->price, 2) }}</span>
                        </div>
                        
                        {{-- Title --}}
                        <div class="text-[32px] product-title mb-4" style="color: {{ $textColor }};">
                            {{ $product->name }}
                        </div>
                        
                        {{-- Shop Now Button --}}
                        <form action="{{ route('cart.add', $product->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="shop-now-btn px-8 py-2 text-sm font-semibold max-w-[200px] w-full mx-auto">
                                Shop Now
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Pagination --}}
        <div class="mt-20 flex justify-center">
            @if($products instanceof \Illuminate\Pagination\LengthAwarePaginator)
                {{ $products->links('pagination::tailwind') }}
            @endif
        </div>
    </div>
</main>
@endsection
