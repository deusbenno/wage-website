<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAGE Solutions Limited</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        html { scroll-behavior: smooth; }
        section[id], footer[id] { scroll-margin-top: 96px; }
        [x-cloak] { display: none !important; }
    </style>
</head>

<body x-data="{ feedbackOpen: false }" class="bg-[#f6f8f2] font-sans text-[#10251d] antialiased">

@php
$features = [
    [
        'title' => __('home.features.f1_title'),
        'text'  => __('home.features.f1_text'),
        'icon'  => '<path d="M7 20c0-8 4-13 12-15-.4 8-5 12-12 12"/><path d="M7 20c0-5-2-8-6-10 5-.4 8 2 9 6"/>',
    ],
    [
        'title' => __('home.features.f2_title'),
        'text'  => __('home.features.f2_text'),
        'icon'  => '<circle cx="12" cy="12" r="10"/><path d="M2 12h20"/><path d="M12 2a15.3 15.3 0 0 1 0 20"/><path d="M12 2a15.3 15.3 0 0 0 0 20"/>',
    ],
    [
        'title' => __('home.features.f3_title'),
        'text'  => __('home.features.f3_text'),
        'icon'  => '<path d="m15.5 7.5-5.2 5.2-1.8-1.8"/><path d="M12 2l2.2 2 3-.5.9 2.9 2.7 1.4-1.4 2.7.5 3-2.9.9-1.4 2.7-2.7-1.4-3 .5-.9-2.9-2.7-1.4 1.4-2.7-.5-3 2.9-.9z"/><path d="m8.5 17.5-1.8 4.2 5.3-2.1 5.3 2.1-1.8-4.2"/>',
    ],
    [
        'title' => __('home.features.f4_title'),
        'text'  => __('home.features.f4_text'),
        'icon'  => '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
    ],
];

$products = [
    ['name' => 'Maize Flour', 'text' => 'High quality maize flour for diverse uses', 'image' => 'https://images.unsplash.com/photo-1551754655-cd27e38d2076?auto=format&fit=crop&w=700&q=80'],
    ['name' => 'Fresh Avocados', 'text' => 'Premium avocados, sourced from trusted farmers', 'image' => 'https://images.unsplash.com/photo-1601039641847-7857b994d704?auto=format&fit=crop&w=700&q=80'],
    ['name' => 'Ginger', 'text' => 'Fresh ginger, dried ginger & ginger powder', 'image' => 'https://images.unsplash.com/photo-1615485500834-bc10199bc727?auto=format&fit=crop&w=700&q=80'],
    ['name' => 'Turmeric', 'text' => 'Fresh turmeric, dried turmeric & turmeric powder', 'image' => 'https://images.unsplash.com/photo-1615485291234-9d694218aeb3?auto=format&fit=crop&w=700&q=80'],
    ['name' => 'Cloves', 'text' => 'High quality cloves for local & export markets', 'image' => 'https://source.unsplash.com/700x500/?cloves,spice'],
    ['name' => 'Other Products', 'text' => 'Other agricultural products based on seasonality & demand', 'image' => 'https://images.unsplash.com/photo-1615484477778-ca3b77940c25?auto=format&fit=crop&w=700&q=80'],
];

$services = [
    ['title' => 'Produce Aggregation', 'text' => 'Sourcing from farmers across regions', 'icon' => '<path d="M7 20c0-7 4-12 12-14-.4 7-5 11-12 11"/><path d="M7 20c0-4-2-7-6-9 4-.3 7 1.5 8 5"/>'],
    ['title' => 'Sorting & Grading', 'text' => 'Ensuring premium quality standards', 'icon' => '<circle cx="5" cy="6" r="2"/><circle cx="17" cy="6" r="2"/><circle cx="12" cy="12" r="2"/><circle cx="7" cy="18" r="2"/><circle cx="19" cy="18" r="2"/><path d="M7 7.5 10.5 11M13.5 11 16 7.5M10.5 13 8 16.5M13.5 13 17 16.5"/>'],
    ['title' => 'Processing & Value Addition', 'text' => 'Drying, grinding & other processing', 'icon' => '<path d="M3 21h18"/><path d="M5 21V9l6 4V9l8 5v7"/><path d="M7 16h2"/><path d="M13 16h2"/><path d="M17 16h2"/><path d="M9 9V5h4v6"/>'],
    ['title' => 'Packaging', 'text' => 'Hygienic packaging for local & export markets', 'icon' => '<path d="m21 8-9-5-9 5 9 5 9-5z"/><path d="M3 8v8l9 5 9-5V8"/><path d="M12 13v8"/><path d="m7.5 5.5 9 5"/>'],
    ['title' => 'Warehouse Storage', 'text' => 'Safe storage with proper handling systems', 'icon' => '<path d="M3 21h18"/><path d="M4 21V8l8-5 8 5v13"/><path d="M8 21v-8h8v8"/><path d="M8 11h8"/><path d="M10 17h4"/>'],
    ['title' => 'Logistics & Delivery', 'text' => 'Reliable transport & timely delivery', 'icon' => '<path d="M10 17H5a2 2 0 0 1-2-2V6h11v11"/><path d="M14 9h4l3 4v4h-3"/><circle cx="7" cy="17" r="2"/><circle cx="16" cy="17" r="2"/>'],
];
@endphp

<!-- HEADER -->
<header x-data="{ open: false }" class="fixed left-0 top-0 z-50 w-full border-b border-[#d2e829]/20 bg-gradient-to-r from-[#04140c] via-[#0b341c] to-[#062414] text-white shadow-xl">

    <div class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 lg:px-8">

        <a href="#" class="flex items-center gap-3">
            <span class="text-[#d2e829]">🌿</span>
            <span class="text-3xl font-black">WAGE</span>
        </a>

        <nav class="hidden lg:flex gap-8 text-sm font-extrabold uppercase">
            <a href="#">{{ __('home.nav.home') }}</a>
            <a href="#about">{{ __('home.nav.about') }}</a>
            <a href="#products">{{ __('home.nav.products') }}</a>
            <a href="#services">{{ __('home.nav.services') }}</a>
            <a href="#why-us">{{ __('home.nav.why_us') }}</a>
            <a href="#contact">{{ __('home.nav.contact') }}</a>
        </nav>

        <a href="#contact" class="hidden lg:inline-flex border border-[#d2e829] px-6 py-2 uppercase text-sm font-bold rounded-full">
            {{ __('home.nav.quote') }}
        </a>

    </div>
</header>

<main>

<!-- HERO -->
<section class="relative min-h-[720px] pt-28 text-white bg-black">

    <div class="relative z-10 max-w-3xl px-6 pt-24">
        <h1 class="text-5xl font-black md:text-7xl">
            {{ __('home.hero.title') }}
        </h1>

        <p class="mt-6 text-lg">
            {{ __('home.hero.desc') }}
        </p>

        <div class="mt-10 flex gap-4">
            <a href="#products" class="bg-green-600 px-6 py-3 font-bold uppercase">
                {{ __('home.hero.btn1') }}
            </a>

            <a href="#contact" class="border px-6 py-3 font-bold uppercase">
                {{ __('home.hero.btn2') }}
            </a>
        </div>
    </div>

</section>

<!-- FEATURES -->
<section id="why-us">
    <div class="grid md:grid-cols-4">
        @foreach ($features as $f)
        <div class="p-6 text-center">
            <h3 class="font-bold">{{ $f['title'] }}</h3>
            <p>{{ $f['text'] }}</p>
        </div>
        @endforeach
    </div>
</section>

<!-- ABOUT -->
<section id="about">
    <h2>{{ __('home.about.title') }}</h2>
    <p>{{ __('home.about.desc') }}</p>
</section>

<!-- PRODUCTS -->
<section id="products">
    <h2>{{ __('home.products.title') }}</h2>
</section>

<!-- SERVICES -->
<section id="services">
    <h2>{{ __('home.services.title') }}</h2>
</section>

</main>

<!-- FOOTER (NOT TRANSLATED ON PURPOSE) -->
<footer id="contact">
    <p>Morogoro Region, Mvomero District, Dakawa Ward...</p>
    <p>P.O. Box 3294, Morogoro, Tanzania</p>
    <p>+255 786 052 912</p>
    <p>getupala@yahoo.co.uk</p>
</footer>

<!-- FEEDBACK -->
<div x-show="feedbackOpen" class="fixed inset-0 bg-black/70">
    <div class="bg-white p-6">
        <h2>Send Feedback</h2>
    </div>
</div>

</body>
</html>