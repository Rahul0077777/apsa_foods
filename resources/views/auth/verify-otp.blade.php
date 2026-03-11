<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400 text-center">
        {{ __('We have sent a 6-digit verification code to your email. Please enter it below to verify your identity.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.verify.submit') }}">
        @csrf

        <input type="hidden" name="email" value="{{ $email ?? '' }}">

        <!-- OTP Input -->
        <div>
            <x-input-label for="otp" :value="__('6-Digit OTP Code')" class="text-primary font-bold"/>
            <x-text-input id="otp" class="block mt-1 w-full text-center tracking-[0.5em] font-mono text-2xl" 
                type="text" 
                name="otp" 
                required 
                autofocus 
                maxlength="6"
                placeholder="------" />
            <x-input-error :messages="$errors->get('otp')" class="mt-2 text-center" />
        </div>

        <div class="flex items-center justify-center mt-6">
            <x-primary-button class="w-full justify-center bg-primary text-black hover:bg-primary/90">
                {{ __('Verify Code') }}
            </x-primary-button>
        </div>
        
        <div class="mt-4 text-center">
            <a href="{{ route('password.request') }}" class="text-sm text-gray-400 hover:text-white underline">
                Didn't receive code? Request again
            </a>
        </div>
    </form>
</x-guest-layout>
