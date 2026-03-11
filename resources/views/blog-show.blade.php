@extends('layouts.frontend')

@section('title', $blog->title)

@section('content')

<main class="w-full flex justify-center py-12 px-4 md:px-20">
    <div class="max-w-4xl w-full">

        <img src="{{ asset('storage/'.$blog->image) }}"
             class="w-full h-[350px] object-cover rounded-xl mb-8" />

        <h1 class="text-4xl font-black mb-4">{{ $blog->title }}</h1>

        <p class="text-gray-500 mb-6">
            {{ $blog->created_at->format('d M Y') }}
        </p>

        <div class="prose max-w-none">
            {!! $blog->content !!}
        </div>

    </div>
</main>

@endsection
