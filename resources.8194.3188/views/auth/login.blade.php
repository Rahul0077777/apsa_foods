@extends('layouts.frontend')

@section('title', 'Login')

@section('content')

<div class="min-h-[70vh] flex items-center justify-center bg-background-light dark:bg-background-dark py-16">
    <div class="w-full max-w-md bg-white dark:bg-[#1a331a] p-8 rounded-2xl shadow-xl border border-green-100">

        <div class="text-center mb-6">
            <h2 class="text-2xl font-black text-text-main dark:text-white">Welcome Back 🍃</h2>
            <p class="text-text-secondary mt-1">Login to continue shopping apsa</p>
        </div>

        @if (session('status'))
            <div class="mb-4 text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <!-- Email -->
            <div>
                <label class="text-sm font-semibold text-text-main dark:text-white">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required autofocus
                    class="w-full mt-1 h-11 rounded-lg border border-green-200 bg-green-50 dark:bg-[#102210] px-4 focus:ring-2 focus:ring-primary focus:outline-none">
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label class="text-sm font-semibold text-text-main dark:text-white">Password</label>
                <input type="password" name="password" required
                    class="w-full mt-1 h-11 rounded-lg border border-green-200 bg-green-50 dark:bg-[#102210] px-4 focus:ring-2 focus:ring-primary focus:outline-none">
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Remember & Forgot -->
            <div class="flex items-center justify-between text-sm">
                <label class="flex items-center gap-2">
                    <input type="checkbox" name="remember" class="rounded border-green-300 text-primary">
                    Remember me
                </label>

                <a href="{{ route('password.request') }}" class="text-primary hover:underline">
                    Forgot Password?
                </a>
            </div>

            <!-- Login Button -->
            <button type="submit"
                class="w-full h-12 bg-primary text-black font-bold rounded-lg hover:bg-green-400 transition">
                Login
            </button>

            <!-- Register Link -->
            <p class="text-center text-sm text-text-secondary mt-4">
                New here?
                <a href="{{ route('register') }}" class="text-primary font-bold hover:underline">
                    Create your account
                </a>
            </p>
        </form>
    </div>
</div>

@endsection
