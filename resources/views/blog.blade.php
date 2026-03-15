@extends('layouts.frontend')

@section('title', 'Blog')

@section('content')

<style>
    .font-cursive { font-family: 'Dancing Script', cursive; }
    .read-more-btn {
        background-color: #0d4a10; /* Dark green */
        color: white;
        border-radius: 9999px;
        transition: transform 0.3s ease;
    }
    .read-more-btn:hover {
        transform: scale(1.05);
    }
</style>

<main class="flex-1 w-full flex flex-col items-center bg-[#fcfcfc] dark:bg-[#0c180c]">
    
    <!-- Top Banner -->
    <div class="w-full">
<img 
  src="{{ asset('images/Blog_banner.jpg') }}" 
  alt="Blog Banner" 
  class="w-full h-auto object-contain"
/>
    </div>

    <div class="layout-content-container flex flex-col w-full px-4 md:px-10 lg:px-40 py-12">
        
        <!-- Cursive Title -->
        <h1 class="text-center text-5xl md:text-6xl font-cursive mb-16 text-[#111]">
            Blog
        </h1>

        <!-- Alternating Blog List -->
        <div class="flex flex-col gap-16 md:gap-24 mb-12">
            @foreach($blogs as $index => $blog)
            <div class="flex flex-col md:flex-row items-center gap-8 md:gap-16 {{ $index % 2 != 0 ? 'md:flex-row-reverse' : '' }}">
                
                <!-- Image Side -->
                <div class="w-full md:w-1/2">
                    <a href="{{ route('blog.show', $blog->slug) }}" class="block w-full rounded-2xl overflow-hidden bg-gray-200 aspect-[5/3] shadow-sm transform hover:scale-[1.02] transition">
                        @if($blog->image)
                            <img src="{{ asset('storage/'.$blog->image) }}" alt="{{ $blog->title }}" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-gray-400">No Image</div>
                        @endif
                    </a>
                </div>

                <!-- Content Side -->
                <div class="w-full md:w-1/2 flex flex-col items-center text-center">
                    <h2 class="text-2xl md:text-[28px] font-bold text-[#111] mb-6 max-w-sm leading-snug">
                        {{ $blog->title }}
                    </h2>
                    
                    <a href="{{ route('blog.show', $blog->slug) }}" class="read-more-btn px-8 py-3 text-sm md:text-base font-bold shadow-md">
                        Read More
                    </a>
                </div>

            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="flex justify-center py-8">
            {{ $blogs->links() }}
        </div>

    </div>
</main>

@endsection
