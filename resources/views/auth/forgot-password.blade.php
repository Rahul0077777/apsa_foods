<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400 text-center">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a 6-digit OTP code to verify your identity and choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-primary font-bold" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-6">
            <x-primary-button class="bg-primary text-black hover:bg-primary/90 w-full justify-center">
                {{ __('Send OTP Code') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
