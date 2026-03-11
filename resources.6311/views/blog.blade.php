@extends('layouts.frontend')

@section('title', 'Blog')

@section('content')

<main class="flex-1 w-full flex flex-col items-center">
<div class="layout-content-container flex flex-col w-full px-4 md:px-10 lg:px-40 py-8">

    <!-- Heading -->
    <div class="flex flex-col gap-3 py-4">
        <p class="text-4xl md:text-5xl font-black">The Fresh Press</p>
        <p class="text-green-700 text-lg max-w-2xl">
            Your daily dose of wellness, recipes, and health tips.
        </p>
    </div>

    {{-- Featured Blog --}}
    @if($featured)
    <div class="py-6">
        <div class="bg-white rounded-2xl overflow-hidden shadow border">
            <div class="flex flex-col md:flex-row">

                <div class="w-full md:w-1/2 h-64 bg-cover bg-center"
                     style="background-image:url('{{ asset('storage/'.$featured->image) }}')">
                </div>

                <div class="w-full md:w-1/2 p-10 flex flex-col justify-center gap-4">
                    <span class="px-3 py-1 rounded-full bg-primary/20 text-green-800 text-xs font-bold w-fit">
                        Featured
                    </span>

                    <h1 class="text-3xl font-black">
                        {{ $featured->title }}
                    </h1>

                    <p class="text-gray-600">
                        {{ $featured->excerpt }}
                    </p>

                    <a href="{{ route('blog.show',$featured->slug) }}"
                       class="text-primary font-bold">
                        Read More →
                    </a>
                </div>

            </div>
        </div>
    </div>
    @endif


    <!-- Blog Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 py-6">

        @foreach($blogs as $blog)
        <article class="flex flex-col gap-4 group">

            <a href="{{ route('blog.show',$blog->slug) }}">
                <div class="w-full aspect-[4/3] rounded-xl overflow-hidden">
                    <div class="w-full h-full bg-center bg-cover group-hover:scale-105 transition"
                         style="background-image:url('{{ asset('storage/'.$blog->image) }}')">
                    </div>
                </div>
            </a>

            <div class="flex flex-col gap-2">
                <span class="text-xs font-bold text-primary uppercase">
                    {{ $blog->category }}
                </span>

                <h3 class="text-xl font-bold group-hover:text-green-700 transition">
                    {{ $blog->title }}
                </h3>

                <p class="text-gray-600 text-sm line-clamp-2">
                    {{ $blog->excerpt }}
                </p>

                <a href="{{ route('blog.show',$blog->slug) }}"
                   class="text-sm font-semibold text-primary">
                    Read More →
                </a>
            </div>

        </article>
        @endforeach

    </div>

    <!-- Pagination -->
    <div class="flex justify-center py-8">
        {{ $blogs->links() }}
    </div>

</div>
</main>

@endsection
