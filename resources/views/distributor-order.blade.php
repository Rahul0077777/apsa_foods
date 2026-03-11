@extends('layouts.frontend')

@section('content')

<div class="max-w-4xl mx-auto py-10">

    <h1 class="text-2xl font-bold mb-4">
        {{ $package->title }}
    </h1>

    <p class="mb-6">
        Price: ${{ $package->price }}
    </p>

    <h3 class="font-bold mb-2">Features:</h3>

    <ul class="list-disc pl-5 mb-6">
        @foreach($package->features as $feature)
            <li>{{ $feature }}</li>
        @endforeach
    </ul>

    {{-- You will add flavour selection here --}}
    <div class="bg-white p-6 rounded shadow">

        <h2 class="font-bold mb-4">
            Select Flavours for Trial Pack
        </h2>

        {{-- next step we add flavour selection system --}}

    </div>

</div>

@endsection