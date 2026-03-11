<aside class="w-full md:w-72 flex flex-col gap-6">
    <!-- User Profile Card -->
    <div class="bg-white dark:bg-[#1a2e1a] p-6 rounded-xl border border-soft-green dark:border-[#2a3f2a] shadow-sm">
        <div class="flex flex-col items-center text-center gap-3">
            <div class="size-20 rounded-full bg-cover bg-center border-4 border-soft-green dark:border-[#2a3f2a]"
                style="background-image: url('{{ auth()->user()->profile_image ?? asset('images/default-user.png') }}')">
            </div>

            <div>
                <h1 class="text-xl font-bold">{{ auth()->user()->name }}</h1>
                <p class="text-accent-green dark:text-primary/70 text-sm font-medium">
                    Member since {{ auth()->user()->created_at->format('M Y') }}
                </p>
            </div>
        </div>
    </div>
    <!-- Navigation Links -->
    <nav class="bg-white p-2 rounded-xl border shadow-sm flex flex-col gap-1">

        @php
        $active = 'bg-green-100 text-green-700 font-bold';
        $normal = 'text-gray-700 hover:bg-green-50 hover:text-green-600';
        @endphp

        <a href="{{ route('user.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg transition
   {{ request()->routeIs('user.dashboard') ? $active : $normal }}">
            <span class="material-symbols-outlined">grid_view</span>
            <span>Dashboard</span>
        </a>

        <a href="{{ route('user.orders') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg transition
   {{ request()->routeIs('user.orders*') ? $active : $normal }}">
            <span class="material-symbols-outlined">shopping_bag</span>
            <span>Orders</span>
        </a>

        <a href="{{ route('user.profile') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg transition
   {{ request()->routeIs('user.profile') ? $active : $normal }}">
            <span class="material-symbols-outlined">person</span>
            <span>Profile Info</span>
        </a>

        <div class="h-px bg-gray-200 my-2"></div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button
                class="flex items-center gap-3 px-4 py-3 rounded-lg text-red-500 hover:bg-red-50 w-full text-left transition">
                <span class="material-symbols-outlined">logout</span>
                <span>Logout</span>
            </button>
        </form>

    </nav>


</aside>