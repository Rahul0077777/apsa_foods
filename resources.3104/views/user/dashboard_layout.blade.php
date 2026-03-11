@extends('layouts.frontend')

@section('content')
<div class="bg-background-light min-h-screen">
    <div class="max-w-[1280px] mx-auto px-4 md:px-10 py-10 flex flex-col md:flex-row gap-8">

        @include('user.partials.sidebar')

        <section class="flex-1 space-y-8">
            @yield('dashboard-content')
        </section>

    </div>
</div>
@endsection