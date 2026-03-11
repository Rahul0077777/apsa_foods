@extends('layouts.frontend')

@section('content')
<div class="max-w-3xl mx-auto py-20 text-center">
    <h1 class="text-3xl font-bold text-primary mb-4">🎉 Order Placed!</h1>
    <p class="text-gray-600">Your order has been placed successfully (Demo Mode).</p>
    <a href="{{ url('/') }}" class="mt-6 inline-block bg-primary px-6 py-3 rounded-lg font-bold">
        Continue Shopping
    </a>
</div>
@endsection
