<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WAGE Company Solutions</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#f6f1e7] text-[#111] antialiased">

<!-- HEADER -->
<header class="sticky top-0 z-50 bg-[#061209]/95 text-white backdrop-blur">
    <div class="mx-auto flex items-center justify-between px-6 py-4">

        <!-- LOGO -->
        <a href="{{ url('/' . app()->getLocale()) }}" class="flex items-center gap-3">
            <span class="text-[#66ad4b] text-2xl">🌿</span>
            <div>
                <div class="text-2xl font-bold">WAGE</div>
                <div class="text-[10px] tracking-[0.25em] uppercase">
                    {{ __('messages.nav_brand_sub') }}
                </div>
            </div>
        </a>

        <!-- NAV -->
        <nav class="hidden lg:flex gap-8 text-sm font-bold">
            <a href="#home">{{ __('nav.home') }}</a>
            <a href="#services">{{ __('nav.services') }}</a>
            <a href="#products">{{ __('nav.products') }}</a>
            <a href="#about">{{ __('nav.about') }}</a>
            <a href="#learning">{{ __('nav.learning') }}</a>
            <a href="#contact">{{ __('nav.contact') }}</a>
        </nav>

        <!-- RIGHT SIDE -->
        <div class="flex items-center gap-5">

            <!-- LANGUAGE SWITCH -->
            <div class="flex items-center gap-2 text-sm font-bold">
                <a href="{{ route('lang.switch', 'en') }}" class="hover:text-green-400">EN</a>
                <span>|</span>
                <a href="{{ route('lang.switch', 'sw') }}" class="hover:text-green-400">SW</a>
                <span>|</span>
                <a href="{{ route('lang.switch', 'fr') }}" class="hover:text-green-400">FR</a>
            </div>

            <!-- AUTH SECTION -->
            @auth
                <div class="flex items-center gap-3">

                    <span class="text-green-300 font-semibold">
                        {{ Auth::user()->name }}
                    </span>

                    <a href="{{ url('/admin/dashboard') }}"
                       class="bg-green-600 hover:bg-green-700 px-5 py-2 rounded-lg font-semibold transition">
                        Dashboard
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                                class="text-red-300 hover:text-red-500 font-semibold">
                            Logout
                        </button>
                    </form>

                </div>
            @endauth

            @guest
                <a href="{{ route('login') }}"
                   class="bg-green-600 hover:bg-green-700 px-5 py-2 rounded-lg font-semibold transition">
                    Login
                </a>
            @endguest

        </div>

    </div>
</header>

<!-- HERO -->
<section id="home" class="relative h-screen flex items-center text-white">

    <img src="https://images.unsplash.com/photo-1592982537447-7440770cbfc9?auto=format&fit=crop&w=2000&q=80"
         class="absolute inset-0 w-full h-full object-cover">

    <div class="absolute inset-0 bg-black/60"></div>

    <div class="relative z-10 px-6 max-w-3xl">

        <h1 class="text-5xl lg:text-6xl font-black leading-tight">
            {{ __('messages.hero_title') }}
        </h1>

        <p class="mt-6 text-lg text-white/85">
            {{ __('messages.hero_desc') }}
        </p>

        <div class="mt-8 flex gap-4">
            <a href="#products" class="bg-[#5da143] px-6 py-3 rounded-lg font-bold">
                {{ __('messages.cta_products') }}
            </a>

            <a href="#contact" class="border border-white/60 px-6 py-3 rounded-lg font-bold">
                Contact Us
            </a>
        </div>

    </div>
</section>

<!-- SERVICES -->
<section id="services" class="px-6 py-20 bg-[#fbf7f0]">
    <h2 class="text-3xl font-black mb-10">Services</h2>

    <div class="grid md:grid-cols-4 gap-6">

        <div class="bg-white rounded-xl overflow-hidden shadow">
            <img src="https://images.unsplash.com/photo-1464226184884-fa280b87c399"
                 class="h-40 w-full object-cover">
            <div class="p-4">
                <h3 class="font-bold">{{ __('messages.service1_title') }}</h3>
                <p class="text-sm text-gray-600">{{ __('messages.service1_desc') }}</p>
            </div>
        </div>

        <div class="bg-white rounded-xl overflow-hidden shadow">
            <img src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3"
                 class="h-40 w-full object-cover">
            <div class="p-4">
                <h3 class="font-bold">{{ __('messages.service2_title') }}</h3>
                <p class="text-sm text-gray-600">{{ __('messages.service2_desc') }}</p>
            </div>
        </div>

        <div class="bg-white rounded-xl overflow-hidden shadow">
            <img src="https://images.unsplash.com/photo-1592982537367-6c3d3a0d3f49"
                 class="h-40 w-full object-cover">
            <div class="p-4">
                <h3 class="font-bold">{{ __('messages.service3_title') }}</h3>
                <p class="text-sm text-gray-600">{{ __('messages.service3_desc') }}</p>
            </div>
        </div>

        <div class="bg-white rounded-xl overflow-hidden shadow">
            <img src="https://images.unsplash.com/photo-1560493676-04071c5f467b"
                 class="h-40 w-full object-cover">
            <div class="p-4">
                <h3 class="font-bold">{{ __('messages.service4_title') }}</h3>
                <p class="text-sm text-gray-600">{{ __('messages.service4_desc') }}</p>
            </div>
        </div>

    </div>
</section>

<!-- ABOUT -->
<section id="about" class="px-6 py-20 grid md:grid-cols-2 gap-10 items-center">

    <img src="https://images.unsplash.com/photo-1615811361523-6bd03d7748e7"
         class="rounded-xl shadow-lg">

    <div>
        <h2 class="text-3xl font-black mb-4">{{ __('messages.about_title') }}</h2>
        <p class="text-gray-700 leading-relaxed">
            {{ __('messages.about_desc') }}
        </p>
    </div>

</section>

<!-- PRODUCTS -->
<section id="products" class="px-6 py-20 bg-[#fbf7f0]">

    <h2 class="text-3xl font-black mb-10">{{ __('messages.products_title') }}</h2>

    <div class="grid md:grid-cols-3 gap-6">

        <img class="rounded-xl shadow object-cover h-64 w-full"
             src="https://images.unsplash.com/photo-1615485290382-441e4d049cb5">

        <img class="rounded-xl shadow object-cover h-64 w-full"
             src="https://images.unsplash.com/photo-1587049352851-8d4e89133924">

        <img class="rounded-xl shadow object-cover h-64 w-full"
             src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449">

    </div>

</section>

<!-- LEARNING -->
<section id="learning" class="px-6 py-20 bg-[#0f2f14] text-white text-center">

    <h2 class="text-3xl font-black">{{ __('messages.learning_title') }}</h2>

    <p class="mt-4 text-white/80 max-w-2xl mx-auto">
        {{ __('messages.learning_desc') }}
    </p>

    <img src="https://images.unsplash.com/photo-1523348837708-15d4a09cfac2"
         class="mt-10 mx-auto rounded-xl shadow-lg max-w-3xl">

</section>

<!-- CONTACT -->
<section id="contact" class="px-6 py-20 text-center">

    <h2 class="text-3xl font-black">{{ __('messages.contact_title') }}</h2>

    <p class="mt-4 text-gray-600">
        {{ __('messages.contact_desc') }}
    </p>

    <div class="mt-8">
        <a href="mailto:info@wage.com"
           class="bg-[#5da143] text-white px-8 py-3 rounded-lg font-bold">
            Get in Touch
        </a>
    </div>

</section>

<!-- FOOTER (UNCHANGED) -->
<footer class="relative text-white mt-20 overflow-hidden bg-[#04150b]">

    <div class="absolute inset-0 bg-[#04150b]"></div>

    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1592928302636-c83cf1e1a6f8?auto=format&fit=crop&w=2000&q=80"
             class="w-full h-full object-cover opacity-35 mix-blend-overlay">
    </div>

    <div class="relative max-w-7xl mx-auto px-6 py-16 grid md:grid-cols-4 gap-10">

        <div>
            <div class="flex items-center gap-2 mb-4">
                <span class="text-[#9DFF73] text-3xl">🌿</span>
                <h2 class="text-2xl font-black">WAGE</h2>
            </div>
            <p class="text-white/75 text-sm">
                Sustainable agricultural solutions in Tanzania.
            </p>
        </div>

        <div>
            <h3 class="text-lg font-bold mb-4 text-[#9DFF73]">Location</h3>
            <p class="text-white/85 text-sm">
                Morogoro Region<br>
                Mvomero District<br>
                Dakawa Ward
            </p>
        </div>

        <div>
            <h3 class="text-lg font-bold mb-4 text-[#9DFF73]">Contact</h3>
            <p class="text-white/85 text-sm">
                +255 786 052 912<br>
                getupala@yahoo.co.uk
            </p>
        </div>

    </div>

    <div class="border-t border-white/10 py-6 text-center text-white/55 text-sm">
        © {{ date('Y') }} WAGE Company Solutions
    </div>

</footer>

</body>
</html>