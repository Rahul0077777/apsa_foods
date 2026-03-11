@extends('layouts.frontend')

@section('title', 'Register')

@section('content')

<div class="min-h-[70vh] flex items-center justify-center bg-background-light dark:bg-background-dark py-16">
    <div class="w-full max-w-md bg-white dark:bg-[#1a331a] p-8 rounded-2xl shadow-xl border border-green-100">

        <div class="text-center mb-6">
            <h2 class="text-2xl font-black text-text-main dark:text-white">Create Account 🍃</h2>
            <p class="text-text-secondary mt-1">Join apsa and start shopping</p>
        </div>

        <form method="POST" action="{{ route('register') }}" class="space-y-5">
            @csrf

            <!-- Name -->
            <div>
                <label class="text-sm font-semibold text-text-main dark:text-white">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" required autofocus
                    class="w-full mt-1 h-11 rounded-lg border border-green-200 bg-green-50 dark:bg-[#102210] px-4 focus:ring-2 focus:ring-primary focus:outline-none">
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label class="text-sm font-semibold text-text-main dark:text-white">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required
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

            <!-- Confirm Password -->
            <div>
                <label class="text-sm font-semibold text-text-main dark:text-white">Confirm Password</label>
                <input type="password" name="password_confirmation" required
                    class="w-full mt-1 h-11 rounded-lg border border-green-200 bg-green-50 dark:bg-[#102210] px-4 focus:ring-2 focus:ring-primary focus:outline-none">
                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Register Button -->
            <button type="submit"
                class="w-full h-12 bg-primary text-black font-bold rounded-lg hover:bg-green-400 transition">
                Create Account
            </button>

            <!-- Login Link -->
            <p class="text-center text-sm text-text-secondary mt-4">
                Already have an account?
                <a href="{{ route('login') }}" class="text-primary font-bold hover:underline">
                    Login here
                </a>
            </p>
        </form>
    </div>
</div>

@endsection
