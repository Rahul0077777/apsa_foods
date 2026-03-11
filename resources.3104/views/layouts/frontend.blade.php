<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Fresh Juice</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&display=swap"
        rel="stylesheet" />


    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;1,600;1,700&display=swap" rel="stylesheet">


    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                colors: {
                    "primary": "#13ec13",
                    "background-light": "#f6f8f6",
                    "background-dark": "#102210",
                    "text-main": "#0d1b0d",
                    "text-light": "#4c9a4c",
                },
                fontFamily: {
                    "display": ["Inter", "sans-serif"]
                },
                borderRadius: {
                    "DEFAULT": "0.375rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
                },
            },
        },
    }
    </script>
    <style>
    /* Custom scrollbar hiding */
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .no-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-text-main dark:text-white font-display overflow-x-hidden antialiased">
    <!-- Navigation -->
    <header
        class="sticky top-0 z-50 border-b border-[#e7f3e7] dark:border-white/10 bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-sm">
        <div class="px-4 md:px-10 lg:px-40 flex items-center justify-between py-4">
            <div class="flex items-center gap-8">
                <!-- Logo -->
                <a class="flex items-center gap-3 text-text-main dark:text-white group" href="{{ url('/') }}">
                    <img src="{{ asset('assets/logo.png') }}" class="h-10 object-contain" alt="al'sa Logo">
                </a>


                <!-- Desktop Links -->
                <nav class="hidden lg:flex items-center gap-8">

                    <a href="{{ url('/') }}"
                        class="text-[#0d1b0d] dark:text-gray-200 text-sm font-medium hover:text-primary transition-colors">
                        Home
                    </a>
                    <a href="{{ route('shop') }}"
                        class="text-[#0d1b0d] dark:text-gray-200 text-sm font-medium hover:text-primary transition-colors">
                        Our Product
                    </a>
                    <a class="text-sm font-medium hover:text-primary transition-colors" href="{{ url('/about') }}">About
                        us</a>
                    <a class="text-sm font-medium hover:text-primary transition-colors"
                        href="{{ url('/wholesale') }}">Become an Distributor</a>
                    <a class="text-sm font-medium hover:text-primary transition-colors"
                        href="{{ url('/blog') }}">Blog</a>
                    <a class="text-sm font-medium hover:text-primary transition-colors"
                        href="{{ url('/contact') }}">Contact</a>

                </nav>
            </div>

            <!-- Right Actions -->
            <div class="flex items-center gap-4 md:gap-6">

                <!-- Search (UI only for now) -->
                <!-- Search (Desktop) -->
                <form action="{{ route('shop') }}" method="GET" class="hidden md:flex w-full max-w-xs relative group">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-primary">
                        <span class="material-symbols-outlined">search</span>
                    </div>
                    <input name="search" value="{{ request('search') }}"
                        class="block w-full rounded-lg border-0 bg-[#e7f3e7] dark:bg-[#233b23] py-2 pl-10 pr-3 text-sm text-[#0d1b0d] dark:text-white placeholder:text-gray-500 focus:ring-2 focus:ring-primary focus:bg-white dark:focus:bg-[#2a4e2a] transition-all"
                        placeholder="Search fizz..." type="text">
                </form>



                <!-- Cart -->
                <a href="{{ route('cart.index') }}"
                    class="relative p-2 hover:bg-[#e7f3e7] dark:hover:bg-white/10 rounded-full transition-colors">
                    <span class="material-symbols-outlined">shopping_cart</span>


                    @php
                    $totalQty = 0;
                    if(session('cart')){
                    foreach(session('cart') as $item){
                    $totalQty += $item['quantity'];
                    }
                    }
                    @endphp

                    @if($totalQty > 0)
                    <span
                        class="absolute top-0 right-0 size-4 bg-primary text-text-main text-[10px] font-bold flex items-center justify-center rounded-full">
                        {{ $totalQty }}
                    </span>
                    @endif

                </a>

                <a href="{{ route('wishlist.index') }}" class="relative flex items-center justify-center">
                    <span class="material-symbols-outlined text-2xl text-gray-800">favorite</span>

                    @auth
                    @if(auth()->user()->wishlist->count() > 0)
                    <span class="absolute -top-1 -right-1 bg-red-500 text-white text-[10px] font-bold
                                rounded-full w-5 h-5 flex items-center justify-center leading-none">
                        {{ auth()->user()->wishlist->count() }}
                    </span>
                    @endif
                    @endauth
                </a>


                <!-- Mobile Menu Toggle (UI only) -->
                <!-- <button id="mobileMenuBtn" class="flex items-center justify-center size-10 rounded-full hover:bg-[#e7f3e7]">
                <span class="material-symbols-outlined">menu</span>
            </button> -->

                <button id="menuBtn" class="flex lg:hidden items-center justify-center size-10 rounded-full">
                    <span class="material-symbols-outlined">menu</span>
                </button>


                <!-- Mobile Left Drawer -->
                <!-- Menu Overlay -->
                <div id="menuOverlay" class="fixed inset-0 bg-black/40 z-[9998]
     opacity-0 pointer-events-none transition-opacity duration-300 lg:hidden">
                </div>

                <!-- Full Screen Mobile Menu -->
                <div id="mobileMenu" class="fixed inset-0 bg-white dark:bg-[#1a2e1a] z-[9999]
     transform -translate-x-full transition-transform duration-300 ease-in-out lg:hidden">

                    <!-- Header -->
                    <div
                        class="flex items-center justify-between px-5 h-16 border-b border-gray-200 dark:border-white/10">
                        <img src="{{ asset('assets/logo.png') }}" class="h-10 object-contain" alt="al'sa Logo">
                        <button id="closeMenu" class="text-2xl">✕</button>
                    </div>

                    <!-- Menu Links -->
                    <nav class="flex flex-col gap-6 p-8 text-xl font-semibold" style="
    background: white;
    height: 100vh;
">
                        <a href="{{ url('/') }}" class="hover:text-primary">Home</a>
                        <a href="{{ route('shop') }}" class="hover:text-primary">Our Product</a>
                        <a href="{{ url('/wholesale') }}" class="hover:text-primary">Become an Distributor</a>
                        <a href="{{ url('/about') }}" class="hover:text-primary">About us</a>
                        <a href="{{ url('/blog') }}" class="hover:text-primary">Blog</a>
                        <a href="{{ url('/contact') }}" class="hover:text-primary">Contact</a>
                        <a href="{{ url('/careers') }}" class="hover:text-primary">Careers</a>

                        <form action="{{ route('shop') }}" method="GET" class="w-full relative group mt-2">

                            <div
                                class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-primary">
                                <span class="material-symbols-outlined">search</span>
                            </div>

                            <input name="search" value="{{ request('search') }}" type="text"
                                placeholder="Search fizz..." class="w-full rounded-xl border border-[#e7f3e7] 
               bg-[#e7f3e7] dark:bg-[#233b23]
               py-3 pl-10 pr-3 text-base
               text-[#0d1b0d] dark:text-white
               placeholder:text-gray-500
               focus:ring-2 focus:ring-primary 
               focus:bg-white dark:focus:bg-[#2a4e2a] 
               transition-all">
                        </form>

                        @auth
                        <hr class="my-6 border-gray-300 dark:border-white/10">
                        <a href="{{ route('dashboard') }}" class="hover:text-primary">
                            Dashboard
                        </a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-left text-red-600">
                                Logout
                            </button>
                        </form>
                        @endauth

                        @guest
                        <a href="{{ route('login') }}" class="hover:text-primary">
                            Login
                        </a>
                        @endguest
                    </nav>
                </div>






                <!-- User / Login Avatar -->
                @auth
                <div class="relative group">
                    <button class="hidden md:flex size-10 rounded-full bg-primary text-black
               items-center justify-center font-bold">
                        <div class="size-9 rounded-full overflow-hidden border border-gray-300">
                            <img src="{{ auth()->user()->profile_image 
                                        ? asset('storage/'.auth()->user()->profile_image) 
                                        : asset('images/default-avatar.png') }}" class="w-full h-full object-cover"
                                alt="Profile">
                        </div>
                    </button>

                    <!-- Dropdown -->
                    <div class="absolute right-0 mt-0 w-40 bg-white border rounded-lg shadow-lg
               opacity-0 invisible group-hover:opacity-100 group-hover:visible
               transition-all duration-200 z-50">

                        <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:bg-gray-100">
                            Dashboard
                        </a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
                @else
                <a href="{{ route('login') }}" class="text-sm font-medium hover:text-primary">
                    Login
                </a>
                @endauth



            </div>
        </div>
    </header>

    <!-- End Navigation -->
    <main>
        @yield('content')
    </main>

    <!-- Newsletter & Footer -->
    <footer class="bg-[#1a331a] dark:bg-black text-white pt-20 pb-10">
        <div class="container mx-auto px-4 md:px-10 lg:px-40">
            <!-- Newsletter Section -->
            <div class="flex flex-col md:flex-row justify-between items-center gap-10 pb-20 border-b border-white/10">
                <div class="max-w-md">
                    <h2 class="text-3xl font-bold mb-3">Join the Fresh Club</h2>
                    <p class="text-white/70">Get 10% off your first order when you subscribe to our newsletter. No spam,
                        just fresh updates.</p>
                </div>
                <div class="w-full flex-1">

                    <form action="{{ route('subscribe') }}" method="POST"
                        class="flex flex-col lg:flex-row gap-3 w-full">
                        @csrf

                        <input type="email" name="email" placeholder="Enter your email" class="bg-green-900/40 text-white px-4 py-3 rounded-lg
                      w-full lg:flex-1 min-w-0" required>

                        <button type="submit" class="bg-primary text-[#0d1b0d] font-bold h-12 px-6 rounded-lg
                       w-full lg:w-auto whitespace-nowrap">
                            Subscribe
                        </button>
                    </form>

                </div>

            </div>
            <!-- Footer Links -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 py-16">
                <div>
                    <h4 class="font-bold text-lg mb-6">Shop</h4>
                    <ul class="space-y-4 text-white/70">
                        <li><a class="hover:text-primary transition-colors" href="{{ route('shop') }}">All Product</a>
                        </li>
                    </ul>

                </div>
                <div>
                    <h4 class="font-bold text-lg mb-6">Company</h4>
                    <ul class="space-y-4 text-white/70">
                        <li><a class="hover:text-primary transition-colors" href="{{ url('/about') }}">About Us</a></li>
                        <li><a class="hover:text-primary transition-colors" href="{{ url('/careers') }}">Careers</a>
                        </li>
                        <li><a class="hover:text-primary transition-colors" href="{{ url('/contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-6">Support</h4>
                    <ul class="space-y-4 text-white/70">
                        <li><a class="hover:text-primary transition-colors" href="{{'/faq'}}">FAQ</a></li>
                        <li><a class="hover:text-primary transition-colors" href="{{'/shipping-policy'}}">Shipping policy</a></li>
                        <li><a class="hover:text-primary transition-colors" href="{{'/return-refund-policy'}}">Refund
                                Policy</a></li>
                        
                        </li>
                        <li><a class="hover:text-primary transition-colors" href="{{ url('/privacy-policy') }}">Privacy Policy</a></li>
                        <li><a class="hover:text-primary transition-colors" href="{{ url('/terms-and-conditions') }}">Terms & Conditions</a></li>
                    </ul>
                    
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-6">Follow Us</h4>
                    <div class="flex flex-wrap gap-4">
                        <a class="size-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-primary hover:text-[#0d1b0d] transition-colors"
                            href="https://www.facebook.com/share/1BoU44uwbE/?mibextid=wwXIfr">
                            <svg aria-hidden="true" class="size-5" fill="currentColor" viewbox="0 0 24 24">
                                <path clip-rule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    fill-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a class="size-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-primary hover:text-[#0d1b0d] transition-colors"
                            href="https://www.instagram.com/apsa.foods?igsh=MXFlcTlsMDNiOGVhdw==">
                            <svg aria-hidden="true" class="size-5" fill="currentColor" viewbox="0 0 24 24">
                                <path clip-rule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772 4.902 4.902 0 011.772-1.153c.636-.247 1.363-.416 2.427-.465 1.067-.047 1.409-.06 3.809-.06h.63zm1.673 5.334c-3.252 0-5.888 2.636-5.888 5.888 0 3.252 2.636 5.888 5.888 5.888 3.252 0 5.888-2.636 5.888-5.888 0-3.252-2.636-5.888-5.888-5.888zm0 7.955a2.067 2.067 0 110-4.134 2.067 2.067 0 010 4.134zm4.55-7.55a.968.968 0 010 1.935.968.968 0 010-1.935z"
                                    fill-rule="evenodd"></path>
                            </svg>
                        </a>

                        <!-- LinkedIn -->
                        <a class="size-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-primary hover:text-[#0d1b0d] transition-colors"
                            href="https://www.linkedin.com/company/apsa-foods/" target="_blank">
                            <svg aria-hidden="true" class="size-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M4.98 3.5a2.5 2.5 0 110 5 2.5 2.5 0 010-5zM3 8.98h3.96V21H3V8.98zM9.5 8.98H13v1.64h.05c.49-.93 1.69-1.9 3.48-1.9 3.72 0 4.41 2.45 4.41 5.64V21h-3.96v-5.18c0-1.24-.02-2.84-1.73-2.84-1.74 0-2 1.36-2 2.75V21H9.5V8.98z" />
                            </svg>
                        </a>


                        <!-- Threads -->
                        <a class="size-10 rounded-full bg-white/10 flex items-center justify-center
           hover:bg-primary hover:text-[#0d1b0d] transition-colors"
                            href="https://www.threads.com/@apsa.foods?igshid=NTc4MTIwNjQ2YQ==" target="_blank">
                            <svg viewBox="0 0 24 24" class="w-5 h-5" fill="white">
                                <!-- The path now defines the entire shape -->
                                <path
                                    d="M14.821 11.417c-.198 0-.376-.017-.532-.051.156.541.234 1.155.234 1.841 0 1.25-.333 2.195-.998 2.834-.666.64-1.57.96-2.712.96-1.124 0-1.996-.302-2.614-.906-.619-.604-.928-1.472-.928-2.604 0-1.161.34-2.072 1.021-2.733.68-.661 1.62-.992 2.818-.992.54 0 1.053.07 1.54.21.054-.92-.128-1.636-.547-2.146-.419-.51-.986-.765-1.7-.765-.892 0-1.673.344-2.342 1.031L6.75 6.132C7.887 5.013 9.255 4.453 10.852 4.453c1.378 0 2.47.43 3.275 1.291.805.86 1.166 2.053 1.084 3.578l.006.012c.703.337 1.216.848 1.538 1.534.322.686.483 1.487.483 2.404 0 2.062-.577 3.655-1.73 4.78C14.354 19.176 12.7 19.74 10.547 19.74c-2.32 0-4.148-.713-5.485-2.14-1.336-1.426-2.004-3.418-2.004-5.977 0-2.522.66-4.49 1.98-5.904C6.357 4.305 8.163 3.6 10.457 3.6c1.196 0 2.316.21 3.361.63l-.703 1.64c-.812-.312-1.697-.468-2.658-.468-1.758 0-3.155.534-4.192 1.602-1.037 1.068-1.555 2.593-1.555 4.576 0 1.95.492 3.486 1.477 4.608.984 1.122 2.347 1.683 4.088 1.683 1.67 0 2.946-.425 3.826-1.275.88-.85 1.321-2.083 1.321-3.698 0-.668-.103-1.23-.309-1.686-.206-.456-.513-.772-.921-.948zm-5.076 1.644c0 .644.153 1.11.459 1.398.306.287.7.431 1.183.431.516 0 .914-.143 1.192-.43.279-.286.418-.751.418-1.393 0-.64-.142-1.114-.426-1.42-.284-.306-.71-.459-1.277-.459-.536 0-.946.155-1.23.465-.284.31-.427.784-.427 1.422z" />
                            </svg>

                        </a>

                    </div>
                </div>
            </div>
            <!-- Copyright -->
            <div
                class="flex flex-col lg:flex-row justify-between items-center gap-4 text-center lg:text-left pt-8 border-t border-white/10 text-white/50 text-sm">
                <div class="text-center md:text-left">
                    <p>© {{ date('Y') }} Apsa – Vibe of Youth. All rights reserved.</p>
                    <p class="text-xs mt-1">
                        Design & Developed by
                        <a href="https://ssinfoserve.com" target="_blank"
                            class="underline hover:text-primary transition">
                            Ss Infoserve
                        </a>
                    </p>
                </div>
               
            </div>
        </div>
    </footer>

    <script>
    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuOverlay = document.getElementById('menuOverlay');
    const closeMenu = document.getElementById('closeMenu');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.remove('-translate-x-full');
        menuOverlay.classList.remove('hidden');
    });

    closeMenu.addEventListener('click', closeDrawer);
    menuOverlay.addEventListener('click', closeDrawer);

    function closeDrawer() {
        mobileMenu.classList.add('-translate-x-full');
        menuOverlay.classList.add('hidden');
    }
    </script>
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
        ['toast-success', 'toast-error', 'toast-validate'].forEach(id => {
            let el = document.getElementById(id);
            if (el) {
                el.style.opacity = '0';
                el.style.transform = 'translateY(-20px)';
                setTimeout(() => el.remove(), 500);
            }
        });
    }, 3000);
    </script>



</body>

</html>