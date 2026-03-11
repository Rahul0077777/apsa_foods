<!DOCTYPE html>
<html lang="en" class="light">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'al’sa Admin Panel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@300;400;600&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                colors: {
                    primary: "#33e633",
                    "background-light": "#f6f8f6",
                    "background-dark": "#112111",
                },
                fontFamily: {
                    display: ["Inter", "sans-serif"]
                },
            },
        },
    }
    </script>
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white min-h-screen">

    <div class="flex">

        <!-- Sidebar -->
        <aside
            class="w-64 fixed inset-y-0 left-0 bg-white dark:bg-zinc-900 border-r border-slate-200 dark:border-zinc-800">
            <div class="flex flex-col h-full p-4">

                <div class="flex items-center gap-3 mb-8">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('assets/logo.png') }}" class="w-12 h-12 object-contain cursor-pointer"
                            alt="al'sa Logo">
                    </a>
                </div>

                <nav class="flex flex-col gap-1">
                    <a href="{{ route('admin.dashboard') }}"
                        class="px-3 py-2 rounded-lg flex items-center gap-2
                    {{ request()->routeIs('admin.dashboard') ? 'bg-primary/10 text-primary font-semibold' : 'hover:bg-gray-100 dark:hover:bg-zinc-800' }}">
                        <span class="material-symbols-outlined">dashboard</span> Dashboard
                    </a>

                    <a href="{{ route('products.index') }}"
                        class="px-3 py-2 rounded-lg flex items-center gap-2
                {{ request()->routeIs('products.*') ? 'bg-primary/10 text-primary font-semibold' : 'hover:bg-gray-100 dark:hover:bg-zinc-800' }}">
                        <span class="material-symbols-outlined">inventory_2</span> Products
                    </a>

                    <a href="{{ route('categories.index') }}"
                        class="px-3 py-2 rounded-lg flex items-center gap-2
                    {{ request()->routeIs('categories.*') ? 'bg-primary/10 text-primary font-semibold' : 'hover:bg-gray-100 dark:hover:bg-zinc-800' }}">
                        <span class="material-symbols-outlined">category</span> Categories
                    </a>

                    <a href="{{ route('orders.index') }}"
                        class="px-3 py-2 rounded-lg flex items-center gap-2
                {{ request()->routeIs('orders.*') ? 'bg-primary/10 text-primary font-semibold' : 'hover:bg-gray-100 dark:hover:bg-zinc-800' }}">
                        <span class="material-symbols-outlined">shopping_cart</span> Orders
                    </a>

                    <a href="{{ route('customers.index') }}"
                        class="px-3 py-2 rounded-lg flex items-center gap-2
                {{ request()->routeIs('customers.*') ? 'bg-primary/10 text-primary font-semibold' : 'hover:bg-gray-100 dark:hover:bg-zinc-800' }}">
                        <span class="material-symbols-outlined">group</span> Customers
                    </a>

                    <a href="{{ route('admin.jobs') }}"
                        class="px-3 py-2 rounded-lg flex items-center gap-2
                    {{ request()->routeIs('admin.jobs*') ? 'bg-primary/10 text-primary font-semibold' : 'hover:bg-gray-100 dark:hover:bg-zinc-800' }}">
                        <span class="material-symbols-outlined">work</span> Careers / Jobs
                    </a>

                    <a href="{{ route('admin.subscribers') }}"
                        class="px-3 py-2 rounded-lg flex items-center gap-2
                    {{ request()->routeIs('admin.subscribers') ? 'bg-primary/10 text-primary font-semibold' : 'hover:bg-gray-100 dark:hover:bg-zinc-800' }}">
                        <span class="material-symbols-outlined">mail</span> Subscribers
                    </a>

                    <a href="{{ route('admin.contact.leads') }}"
                        class="px-3 py-2 rounded-lg flex items-center gap-2
                        {{ request()->routeIs('admin.contact.leads') ? 'bg-primary/10 text-primary font-semibold' : 'hover:bg-gray-100 dark:hover:bg-zinc-800' }}">
                            <span class="material-symbols-outlined">support_agent</span> Contact Leads
                    </a>

                    <a href="{{ route('admin.blogs') }}"
                        class="px-3 py-2 rounded-lg flex items-center gap-2
                        {{ request()->routeIs('admin.blogs*') ? 'bg-primary/10 text-primary font-semibold' : 'hover:bg-gray-100 dark:hover:bg-zinc-800' }}">
                            <span class="material-symbols-outlined">edit_note</span>
                            Blogs
                        </a>
                        <a href="{{ route('admin.distributor.index') }}"
                            class="px-3 py-2 rounded-lg flex items-center gap-2
                            {{ request()->routeIs('admin.distributor.*') ? 'bg-primary/10 text-primary font-semibold' : 'hover:bg-gray-100 dark:hover:bg-zinc-800' }}">

                            <span class="material-symbols-outlined">local_shipping</span>

                            Distributor Packages

                        </a>

                </nav>

                <div class="mt-auto border-t pt-4">
                    <p class="text-sm font-semibold">{{ auth()->user()->name }}</p>
                    <p class="text-xs text-gray-500">Administrator</p>

                    <form method="POST" action="{{ route('logout') }}" class="mt-3">
                        @csrf
                        <button class="text-red-500 text-sm">Logout</button>
                    </form>
                </div>
            </div>
        </aside>

        <!-- Main Area -->
        <main class="ml-64 flex-1 min-h-screen">
            <header class="h-16 bg-white dark:bg-zinc-900 border-b px-6 flex items-center justify-between">
                <h2 class="font-bold text-lg">@yield('title', 'Dashboard')</h2>
            </header>

            <div class="p-6">
                @yield('content')
            </div>


        </main>

    </div>
    @yield('scripts')

    {{-- SUCCESS TOAST --}}
@if(session('success'))
<div id="toast-success"
     class="fixed top-6 right-6 z-50 bg-green-600 text-white px-6 py-4 rounded-lg shadow-lg transition-all duration-500">
    {{ session('success') }}
</div>
@endif

{{-- ERROR TOAST --}}
@if(session('error'))
<div id="toast-error"
     class="fixed top-6 right-6 z-50 bg-red-600 text-white px-6 py-4 rounded-lg shadow-lg transition-all duration-500">
    {{ session('error') }}
</div>
@endif

{{-- VALIDATION ERRORS TOAST --}}
@if($errors->any())
<div id="toast-validate"
     class="fixed top-6 right-6 z-50 bg-red-600 text-white px-6 py-4 rounded-lg shadow-lg transition-all duration-500">
    {{ $errors->first() }}
</div>
@endif

<script>
    setTimeout(() => {
        ['toast-success','toast-error','toast-validate'].forEach(id => {
            let el = document.getElementById(id);
            if(el){
                el.style.opacity = '0';
                el.style.transform = 'translateY(-20px)';
                setTimeout(() => el.remove(), 500);
            }
        });
    }, 3000);
</script>

</body>

</html>