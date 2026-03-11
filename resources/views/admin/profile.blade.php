@extends('layouts.admin')

@section('title', 'Admin Profile')

@section('content')
<div class="max-w-4xl mx-auto space-y-8">

    <!-- Profile Details Card -->
    <div class="bg-white dark:bg-zinc-900 rounded-xl border border-slate-200 dark:border-zinc-800 shadow-sm overflow-hidden">
        <div class="bg-gradient-to-r from-primary/10 to-primary/5 px-8 py-6 border-b border-slate-200 dark:border-zinc-800">
            <div class="flex items-center gap-4">
                <div class="w-16 h-16 rounded-full bg-primary/20 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-3xl">person</span>
                </div>
                <div>
                    <h2 class="text-2xl font-bold">{{ $user->name }}</h2>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Administrator • Member since {{ $user->created_at->format('M Y') }}</p>
                </div>
            </div>
        </div>

        <form method="POST" action="{{ route('admin.profile.update') }}" class="p-8">
            @csrf

            <h3 class="text-lg font-semibold mb-6 flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">edit</span>
                Edit Profile
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-1">Full Name</label>
                    <input type="text" name="name" value="{{ $user->name }}"
                        class="w-full rounded-lg border border-slate-300 dark:border-zinc-700 dark:bg-zinc-800 p-3 focus:ring-2 focus:ring-primary/50 focus:border-primary transition">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-1">Email Address</label>
                    <input type="email" name="email" value="{{ $user->email }}"
                        class="w-full rounded-lg border border-slate-300 dark:border-zinc-700 dark:bg-zinc-800 p-3 focus:ring-2 focus:ring-primary/50 focus:border-primary transition">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-1">Phone</label>
                    <input type="text" name="phone" value="{{ $user->phone }}"
                        class="w-full rounded-lg border border-slate-300 dark:border-zinc-700 dark:bg-zinc-800 p-3 focus:ring-2 focus:ring-primary/50 focus:border-primary transition">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-1">Role</label>
                    <input type="text" value="Administrator" disabled
                        class="w-full rounded-lg border border-slate-300 dark:border-zinc-700 dark:bg-zinc-800 p-3 bg-gray-50 dark:bg-zinc-800/50 text-gray-500 cursor-not-allowed">
                </div>
            </div>

            <div class="mt-6 flex justify-end">
                <button type="submit"
                    class="bg-primary hover:bg-primary/90 text-black font-bold px-6 py-3 rounded-lg transition shadow-sm">
                    Save Changes
                </button>
            </div>
        </form>
    </div>

    <!-- Change Password Card -->
    <div class="bg-white dark:bg-zinc-900 rounded-xl border border-slate-200 dark:border-zinc-800 shadow-sm overflow-hidden">
        <form method="POST" action="{{ route('admin.password.update') }}" class="p-8">
            @csrf

            <h3 class="text-lg font-semibold mb-6 flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">lock</span>
                Change Password
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-1">Current Password</label>
                    <input type="password" name="current_password" required
                        class="w-full rounded-lg border border-slate-300 dark:border-zinc-700 dark:bg-zinc-800 p-3 focus:ring-2 focus:ring-primary/50 focus:border-primary transition">
                    @error('current_password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-1">New Password</label>
                    <input type="password" name="password" required
                        class="w-full rounded-lg border border-slate-300 dark:border-zinc-700 dark:bg-zinc-800 p-3 focus:ring-2 focus:ring-primary/50 focus:border-primary transition">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-1">Confirm Password</label>
                    <input type="password" name="password_confirmation" required
                        class="w-full rounded-lg border border-slate-300 dark:border-zinc-700 dark:bg-zinc-800 p-3 focus:ring-2 focus:ring-primary/50 focus:border-primary transition">
                </div>
            </div>

            <div class="mt-6 flex justify-end">
                <button type="submit"
                    class="bg-red-500 hover:bg-red-600 text-white font-bold px-6 py-3 rounded-lg transition shadow-sm">
                    Update Password
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
