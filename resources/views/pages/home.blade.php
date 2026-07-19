<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAGE Solutions Limited</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        html {
            scroll-behavior: smooth;
        }

        section[id],
        footer[id] {
            scroll-margin-top: 96px;
        }

        [x-cloak] {
            display: none !important;
        }

        /* Hide scrollbars for the product carousel */
        .scrollbar-none::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-none {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body x-data="{ feedbackOpen: false }" class="bg-[#f6f8f2] font-sans text-[#10251d] antialiased">
@php
    $features = [
        [
            'title' => 'Premium Product Categories',
            'text' => 'Maize Flour, Avocados, Spices & More',
            'icon' => '<path d="M7 20c0-8 4-13 12-15-.4 8-5 12-12 12"/><path d="M7 20c0-5-2-8-6-10 5-.4 8 2 9 6"/>',
        ],
        [
            'title' => 'Local & International Markets',
            'text' => 'Serving Local Buyers and Global Markets',
            'icon' => '<circle cx="12" cy="12" r="10"/><path d="M2 12h20"/><path d="M12 2a15.3 15.3 0 0 1 0 20"/><path d="M12 2a15.3 15.3 0 0 0 0 20"/>',
        ],
        [
            'title' => 'Quality Processing',
            'text' => 'Advanced Processing, Sorting & Packaging',
            'icon' => '<path d="m15.5 7.5-5.2 5.2-1.8-1.8"/><path d="M12 2l2.2 2 3-.5.9 2.9 2.7 1.4-1.4 2.7.5 3-2.9.9-1.4 2.7-2.7-1.4-3 .5-.9-2.9-2.7-1.4 1.4-2.7-.5-3 2.9-.9z"/><path d="m8.5 17.5-1.8 4.2 5.3-2.1 5.3 2.1-1.8-4.2"/>',
        ],
        [
            'title' => 'Farmer Partnerships',
            'text' => 'Working Together for Sustainable Growth',
            'icon' => '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
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
    [
        'title' => __('service1_title'),
        'text' => __('service1_text'),
        'description' => __('service1_description'),
        'image' => 'https://i.pinimg.com/1200x/4e/f9/b3/4ef9b3da8cd9152d90fa9234e9c398a1.jpg',
        'icon' => '<path d="M7 20c0-7 4-12 12-14-.4 7-5 11-12 11"/><path d="M7 20c0-4-2-7-6-9 4-.3 7 1.5 8 5"/>'
    ],
    [
        'title' => __('service2_title'),
        'text' => __('service2_text'),
        'description' => __('service2_description'),
        'image' => 'https://i.pinimg.com/1200x/d1/3e/04/d13e0411f3b6db4b9131c3cf73c3a3e0.jpg',
        'icon' => '<circle cx="5" cy="6" r="2"/><circle cx="17" cy="6" r="2"/><circle cx="12" cy="12" r="2"/><circle cx="7" cy="18" r="2"/><circle cx="19" cy="18" r="2"/><path d="M7 7.5 10.5 11M13.5 11 16 7.5M10.5 13 8 16.5M13.5 13 17 16.5"/>'
    ],
    [
        'title' => __('service3_title'),
        'text' => __('service3_text'),
        'description' => __('service3_description'),
        'image' => 'https://i.pinimg.com/736x/19/57/5b/19575bb3dfac8580cac14273bddd409b.jpg',
        'icon' => '<path d="M3 21h18"/><path d="M5 21V9l6 4V9l8 5v7"/><path d="M7 16h2"/><path d="M13 16h2"/><path d="M17 16h2"/><path d="M9 9V5h4v6"/>'
    ],
    [
        'title' => __('service4_title'),
        'text' => __('service4_text'),
        'description' => __('service4_description'),
        'image' => 'https://i.pinimg.com/736x/50/e3/98/50e398cd6baf1a9727dd10b09a140e00.jpg',
        'icon' => '<path d="m21 8-9-5-9 5 9 5 9-5z"/><path d="M3 8v8l9 5 9-5V8"/><path d="M12 13v8"/><path d="m7.5 5.5 9 5"/>'
    ],
    [
        'title' => __('service5_title'),
        'text' => __('service5_text'),
        'description' => __('service5_description'),
        'image' => 'https://i.pinimg.com/736x/2a/fd/d1/2afdd1af2261b3dd272c081b82ffdbc1.jpg',
        'icon' => '<path d="M3 21h18"/><path d="M4 21V8l8-5 8 5v13"/><path d="M8 21v-8h8v8"/><path d="M8 11h8"/><path d="M10 17h4"/>'
    ],
    [
        'title' => __('service6_title'),
        'text' => __('service6_text'),
        'description' => __('service6_description'),
        'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=700&q=80',
        'icon' => '<path d="M10 17H5a2 2 0 0 1-2-2V6h11v11"/><path d="M14 9h4l3 4v4h-3"/><circle cx="7" cy="17" r="2"/><circle cx="16" cy="17" r="2"/>'
    ],
];
@endphp

<header x-data="{ open: false, langOpen: false }" class="fixed left-0 top-0 z-50 w-full border-b border-[#d2e829]/20 bg-gradient-to-r from-[#04140c] via-[#0b341c] to-[#062414] text-white shadow-xl shadow-black/20">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 lg:px-8">

        <!-- LOGO -->
        <a href="#" class="flex items-center gap-3">
            <img src="{{ asset('images/logo.png') }}"
     alt="WAGE Solutions Limited Logo"
     class="h-14 w-auto">
            <span class="leading-none">
                <span class="block text-3xl font-black tracking-wide">WAGE</span>
                <span class="block text-[11px] font-bold uppercase tracking-[0.18em]">Solutions Limited</span>
            </span>
        </a>

        <!-- DESKTOP NAV -->
        <nav class="hidden items-center gap-6 lg:flex">
            <a href="#" class="text-[#d2e829]">{{ __('home.home') }}</a>
            <a href="#about" class="transition hover:text-[#d2e829]">{{ __('home.about') }}</a>
            <a href="#products" class="transition hover:text-[#d2e829]">{{ __('home.products') }}</a>
            <a href="#services" class="transition hover:text-[#d2e829]">{{ __('home.services') }}</a>
            <a href="#why-us" class="transition hover:text-[#d2e829]">{{ __('home.why_us') }}</a>
            <a href="#contact" class="transition hover:text-[#d2e829]">{{ __('home.contact') }}</a>
        </nav>

        <!-- RIGHT SIDE ACTIONS (DESKTOP) -->
        <div class="hidden items-center gap-4 lg:flex">
            <!-- 🌐 LANGUAGE DROPDOWN -->
            <div class="relative">
                <button @click="langOpen = !langOpen"
                        class="flex items-center gap-2 rounded-full border border-white/20 px-4 py-2 text-sm font-bold uppercase hover:bg-white/10">
                    🌐 Lang
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="m6 9 6 6 6-6"/>
                    </svg>
                </button>

                <div x-show="langOpen" @click.away="langOpen = false"
                     x-cloak
                     x-transition
                     class="absolute right-0 mt-2 w-32 overflow-hidden rounded-lg border border-white/10 bg-[#071d12] shadow-xl flex flex-col">
                    <a href="/lang/en" class="px-4 py-2 text-sm hover:bg-white/10 transition">EN</a>
                    <a href="/lang/sw" class="px-4 py-2 text-sm hover:bg-white/10 transition">SW</a>
                    <a href="/lang/de" class="px-4 py-2 text-sm hover:bg-white/10 transition">DE</a>
                    <a href="/lang/nl" class="px-4 py-2 text-sm hover:bg-white/10 transition">NL</a>
                </div>
            </div>

            <!-- GET QUOTE -->
            <a href="#contact" class="rounded-full border border-[#d2e829] px-7 py-3 text-sm font-extrabold uppercase transition hover:bg-[#d2e829] hover:text-[#092114]">
                {{ __('home.get_quote') }}
            </a>
        </div>

        <!-- MOBILE THREE LINES BURGER BUTTON -->
        <button @click="open = !open" class="rounded-full border border-white/25 p-2 lg:hidden" aria-label="Open navigation">
            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M4 7h16M4 12h16M4 17h16"/>
            </svg>
        </button>
    </div>

    <!-- MOBILE MENU DRAWER -->
    <div x-show="open" x-cloak x-transition class="border-t border-white/10 bg-gradient-to-b from-[#082015] to-[#0b341c] px-5 py-4 text-sm font-bold uppercase lg:hidden">
        <nav class="flex flex-col space-y-2">
            <a href="#" @click="open = false" class="block rounded-lg px-3 py-2 text-[#d2e829]">{{ __('home.home') }}</a>
            <a href="#about" @click="open = false" class="block rounded-lg px-3 py-2 text-white hover:text-[#d2e829]">{{ __('home.about') }}</a>
            <a href="#products" @click="open = false" class="block rounded-lg px-3 py-2 text-white hover:text-[#d2e829]">{{ __('home.products') }}</a>
            <a href="#services" @click="open = false" class="block rounded-lg px-3 py-2 text-white hover:text-[#d2e829]">{{ __('home.services') }}</a>
            <a href="#why-us" @click="open = false" class="block rounded-lg px-3 py-2 text-white hover:text-[#d2e829]">{{ __('home.why_us') }}</a>
            <a href="#contact" @click="open = false" class="block rounded-lg px-3 py-2 text-white hover:text-[#d2e829]">{{ __('home.contact') }}</a>
            <a href="#contact" @click="open = false" class="block text-center mt-2 rounded-full border border-[#d2e829] px-4 py-2 text-[#d2e829]">{{ __('home.get_quote') }}</a>
        </nav>

        <!-- MOBILE LANGUAGE PICKER -->
        <div class="mt-4 border-t border-white/10 pt-3">
            <p class="px-3 text-xs text-white/60 lowercase tracking-wider">Language</p>
            <div class="mt-2 flex flex-wrap gap-3 px-3">
                <a href="/lang/en" class="text-white hover:text-[#d2e829]">EN</a>
                <a href="/lang/sw" class="text-white hover:text-[#d2e829]">SW</a>
                <a href="/lang/de" class="text-white hover:text-[#d2e829]">DE</a>
                <a href="/lang/nl" class="text-white hover:text-[#d2e829]">NL</a>
            </div>
        </div>
    </div>
</header>

<main>
    <!-- HERO SECTION -->
    <section
        x-data="{
            current: 0,
            slides: [
                {
                    label: 'Fresh Avocados',
                    image: '{{ asset('images/image.png') }}',
                    alt: 'Fresh avocados growing on a tree'
                },
                {
                    label: 'Maize Flour',
                    image: 'https://i.pinimg.com/1200x/19/d3/93/19d3938e62a7ca0ce2f0af202ec81d56.jpg',
                    alt: 'Maize and maize flour'
                },
                {
                    label: 'Pilipili Spices',
                    image: 'https://i.pinimg.com/1200x/92/12/85/921285754f035b7f41171e5ba7259976.jpg',
                    alt: 'Pilipili chili spices'
                },
                {
                    label: 'Fresh Ginger',
                    image: 'https://i.pinimg.com/736x/50/8e/ff/508eff21da147ef089dab9f38ef4cb4f.jpg',
                    alt: 'Fresh ginger roots'
                }
            ],
            next() {
                this.current = (this.current + 1) % this.slides.length;
            },
            previous() {
                this.current = (this.current - 1 + this.slides.length) % this.slides.length;
            }
        }"
        class="relative min-h-[720px] overflow-hidden pt-28 text-white"
    >
        <div class="absolute inset-0">
            <template x-for="(slide, index) in slides" :key="slide.label">
                <img
                    x-show="current === index"
                    x-transition.opacity.duration.500ms
                    :src="slide.image"
                    :alt="slide.alt"
                    class="absolute inset-0 h-full w-full object-cover"
                >
            </template>
            <div class="absolute inset-0 bg-gradient-to-r from-[#06150e]/92 via-[#06150e]/68 to-[#06150e]/25"></div>
            <div class="absolute inset-0 bg-black/20"></div>
        </div>

        <button type="button" @click="previous()" class="absolute left-5 top-1/2 z-10 hidden -translate-y-1/2 rounded-full bg-black/20 p-2 text-white/90 transition hover:bg-[#d2e829] hover:text-[#082015] md:block" aria-label="Previous slide">
            <svg class="h-10 w-10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3"><path d="m15 18-6-6 6-6"/></svg>
        </button>
        <button type="button" @click="next()" class="absolute right-5 top-1/2 z-10 hidden -translate-y-1/2 rounded-full bg-black/20 p-2 text-white/90 transition hover:bg-[#d2e829] hover:text-[#082015] md:block" aria-label="Next slide">
            <svg class="h-10 w-10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3"><path d="m9 18 6-6-6-6"/></svg>
        </button>

        <div class="relative z-10 mx-auto max-w-7xl px-5 pb-44 pt-20 lg:px-8 lg:pt-32">
            <div class="max-w-2xl">
                <h1 class="text-5xl font-black leading-[1.08] tracking-normal md:text-7xl">
                    {{ __('home.hero_title') }}
                </h1>

                <p class="mt-7 max-w-xl text-lg font-medium leading-8 text-white/95">
                    {{ __('home.hero_description') }}
                </p>

                <div class="mt-10 flex flex-col gap-4 sm:flex-row">
                    <a href="#products" class="inline-flex items-center justify-center gap-3 rounded-lg bg-[#159332] px-8 py-4 text-sm font-extrabold uppercase shadow-lg shadow-black/20 transition hover:bg-[#117d2b]">
                        {{ __('home.explore_products') }}
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    </a>
                    <a href="#contact" class="inline-flex items-center justify-center gap-3 rounded-full border border-white px-8 py-4 text-sm font-extrabold uppercase transition hover:bg-white hover:text-[#0d2418]">
                        {{ __('home.contact_us') }}
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="absolute bottom-24 left-1/2 z-10 flex -translate-x-1/2 gap-3">
            <template x-for="(slide, index) in slides" :key="slide.label">
                <button
                    type="button"
                    @click="current = index"
                    class="h-3.5 w-3.5 rounded-full transition"
                    :class="current === index ? 'bg-[#d2e829] scale-110' : 'bg-white/90 hover:bg-white'"
                    :aria-label="'Show ' + slide.label"
                ></button>
            </template>
        </div>
    </section>

    <!-- WHY US SECTION -->
    <section id="why-us"
        x-data="{ current: 0, total: 4 }"
        class="relative z-20 -mt-16 px-5 lg:px-8"
    >
        <div class="mx-auto max-w-6xl overflow-hidden rounded-2xl bg-white/95 shadow-2xl shadow-[#092114]/10 ring-1 ring-black/5 backdrop-blur">

            <div class="px-6 py-8 text-center md:px-10">
                <p class="text-sm font-extrabold uppercase tracking-wide text-[#15812d]">{{ __('why_us_title') }}</p>
                <h2 class="mt-2 text-3xl font-black tracking-normal text-[#13241f] md:text-4xl">
                    {{ __('why_us_heading') }}
                </h2>
                <p class="mx-auto mt-4 max-w-3xl text-base leading-8 text-[#24352f]">
                    {{ __('why_us_description') }}
                </p>
            </div>

            <div class="relative px-6 pb-8 md:px-10">
                <div class="overflow-hidden">
                    <div class="flex transition-transform duration-500 ease-out"
                         :style="'transform: translateX(-' + (current * 100) + '%)'">

                        <div class="w-full flex-shrink-0 px-1">
                            <div class="rounded-xl border border-[#d8ded5] bg-[#f8faf4] px-7 py-8 text-center">
                                <svg class="mx-auto h-12 w-12 text-[#155f2b]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M7 20c0-8 4-13 12-15-.4 8-5 12-12 12"/>
                                    <path d="M7 20c0-5-2-8-6-10 5-.4 8 2 9 6"/>
                                </svg>
                                <h3 class="mt-4 text-lg font-extrabold leading-tight text-[#0b301d]">
                                    {{ __('why_us_1_title') }}
                                </h3>
                                <p class="mt-2 text-sm leading-6 text-[#1c3028]">
                                    {{ __('why_us_1_text') }}
                                </p>
                            </div>
                        </div>

                        <div class="w-full flex-shrink-0 px-1">
                            <div class="rounded-xl border border-[#d8ded5] bg-[#f8faf4] px-7 py-8 text-center">
                                <svg class="mx-auto h-12 w-12 text-[#155f2b]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"/>
                                    <path d="M2 12h20"/>
                                    <path d="M12 2a15.3 15.3 0 0 1 0 20"/>
                                    <path d="M12 2a15.3 15.3 0 0 0 0 20"/>
                                </svg>
                                <h3 class="mt-4 text-lg font-extrabold leading-tight text-[#0b301d]">
                                    {{ __('why_us_2_title') }}
                                </h3>
                                <p class="mt-2 text-sm leading-6 text-[#1c3028]">
                                    {{ __('why_us_2_text') }}
                                </p>
                            </div>
                        </div>

                        <div class="w-full flex-shrink-0 px-1">
                            <div class="rounded-xl border border-[#d8ded5] bg-[#f8faf4] px-7 py-8 text-center">
                                <svg class="mx-auto h-12 w-12 text-[#155f2b]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m15.5 7.5-5.2 5.2-1.8-1.8"/>
                                    <path d="M12 2l2.2 2 3-.5.9 2.9 2.7 1.4-1.4 2.7.5 3-2.9.9-1.4 2.7-2.7-1.4-3 .5-.9-2.9-2.7-1.4 1.4-2.7-.5-3 2.9-.9z"/>
                                    <path d="m8.5 17.5-1.8 4.2 5.3-2.1 5.3 2.1-1.8-4.2"/>
                                </svg>
                                <h3 class="mt-4 text-lg font-extrabold leading-tight text-[#0b301d]">
                                    {{ __('why_us_3_title') }}
                                </h3>
                                <p class="mt-2 text-sm leading-6 text-[#1c3028]">
                                    {{ __('why_us_3_text') }}
                                </p>
                            </div>
                        </div>

                        <div class="w-full flex-shrink-0 px-1">
                            <div class="rounded-xl border border-[#d8ded5] bg-[#f8faf4] px-7 py-8 text-center">
                                <svg class="mx-auto h-12 w-12 text-[#155f2b]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                    <circle cx="9" cy="7" r="4"/>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                                </svg>
                                <h3 class="mt-4 text-lg font-extrabold leading-tight text-[#0b301d]">
                                    {{ __('why_us_4_title') }}
                                </h3>
                                <p class="mt-2 text-sm leading-6 text-[#1c3028]">
                                    {{ __('why_us_4_text') }}
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <button type="button"
                        @click="current = (current - 1 + total) % total"
                        class="absolute left-3 top-1/2 grid h-10 w-10 -translate-y-1/2 place-items-center rounded-full bg-[#155f2b] text-white shadow-lg transition hover:bg-[#0f4820]"
                        aria-label="Previous why us point">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3">
                        <path d="m15 18-6-6 6-6"/>
                    </svg>
                </button>

                <button type="button"
                        @click="current = (current + 1) % total"
                        class="absolute right-3 top-1/2 grid h-10 w-10 -translate-y-1/2 place-items-center rounded-full bg-[#155f2b] text-white shadow-lg transition hover:bg-[#0f4820]"
                        aria-label="Next why us point">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3">
                        <path d="m9 18 6-6-6-6"/>
                    </svg>
                </button>

                <div class="mt-6 flex justify-center gap-2">
                    <button type="button" @click="current = 0" class="h-3 w-3 rounded-full transition" :class="current === 0 ? 'bg-[#155f2b]' : 'bg-[#cfd9cb]'"></button>
                    <button type="button" @click="current = 1" class="h-3 w-3 rounded-full transition" :class="current === 1 ? 'bg-[#155f2b]' : 'bg-[#cfd9cb]'"></button>
                    <button type="button" @click="current = 2" class="h-3 w-3 rounded-full transition" :class="current === 2 ? 'bg-[#155f2b]' : 'bg-[#cfd9cb]'"></button>
                    <button type="button" @click="current = 3" class="h-3 w-3 rounded-full transition" :class="current === 3 ? 'bg-[#155f2b]' : 'bg-[#cfd9cb]'"></button>
                </div>
            </div>

        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="bg-white px-5 py-20 lg:px-8">
        <div class="mx-auto grid max-w-7xl items-center gap-12 lg:grid-cols-[1.1fr_0.9fr]">

            <div>
                <p class="text-sm font-extrabold uppercase tracking-wide text-[#15812d]">
                    {{ __('about_title') }}
                </p>

                <h2 class="mt-3 text-4xl font-black tracking-normal text-[#13241f] md:text-5xl">
                    {{ __('about_heading') }}
                </h2>

                <p class="mt-6 max-w-2xl text-base leading-8 text-[#24352f]">
                    {{ __('about_description') }}
                </p>

                <!-- Vision & Mission Grid -->
                <div class="mt-10 grid gap-8 sm:grid-cols-2">
                    <!-- Vision -->
                    <div class="flex flex-col gap-3">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#15812d]/10 text-[#15812d]">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-[#13241f]">
                                {{ __('about_vision_title') }}
                            </h3>
                            <p class="mt-2 text-sm leading-6 text-[#24352f]">
                                {{ __('about_vision_text') }}
                            </p>
                        </div>
                    </div>

                    <!-- Mission -->
                    <div class="flex flex-col gap-3">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#15812d]/10 text-[#15812d]">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <circle cx="12" cy="12" r="6"/>
                                <circle cx="12" cy="12" r="2"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-[#13241f]">
                                {{ __('about_mission_title') }}
                            </h3>
                            <p class="mt-2 text-sm leading-6 text-[#24352f]">
                                {{ __('about_mission_text') }}
                            </p>
                        </div>
                    </div>
                </div>

                <a href="#contact" class="mt-10 inline-flex items-center gap-3 rounded-full bg-[#155f2b] px-7 py-3 text-sm font-extrabold uppercase text-white transition hover:bg-[#0f4820]">
                    {{ __('about_button') }}
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14"/><path d="m12 5 7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <div class="overflow-hidden rounded-2xl shadow-xl shadow-black/10 lg:h-full flex items-center">
                <img src="https://i.pinimg.com/736x/2a/fd/d1/2afdd1af2261b3dd272c081b82ffdbc1.jpg"
                     alt="african warehouse"
                     class="h-[360px] w-full object-cover">
            </div>

        </div>
    </section>

    <!-- PRODUCTS SECTION -->
    <section id="products" class="bg-[#f4f6ef] px-5 py-16 lg:px-8">
        <div class="mx-auto max-w-7xl">

            <div class="text-center">
                <p class="text-sm font-extrabold uppercase tracking-wide text-[#15812d]">
                    {{ __('products_title') }}
                </p>
                <h2 class="mt-2 text-4xl font-black tracking-normal text-[#13241f]">
                    {{ __('products_heading') }}
                </h2>
            </div>

            <div class="mt-10 relative group">
                <h3 class="text-xs font-bold uppercase tracking-wider text-[#24352f]/60 mb-4 px-1">
                    {{ __('products_featured') }}
                </h3>

                <div id="product-carousel"
                     class="flex gap-6 overflow-x-auto pb-6 scrollbar-none scroll-smooth snap-x snap-mandatory">

                    <!-- Turmeric -->
                    <div class="carousel-card min-w-[280px] sm:min-w-[320px] max-w-[320px] flex-shrink-0 snap-start rounded-xl bg-white p-3 shadow-md ring-1 ring-black/5">
                        <img src="https://i.pinimg.com/webp/1200x/04/bf/48/04bf48a613d52da69acc73ad7c935c73.webp"
                             alt="Turmeric"
                             class="h-44 w-full rounded-lg object-cover">
                        <div class="mt-4 px-2 pb-2">
                            <span class="text-xs font-bold uppercase tracking-wider text-[#15812d] bg-[#15812d]/10 px-2 py-0.5 rounded-md">spice</span>
                            <h4 class="mt-2 text-lg font-black text-[#13241f]">{{ __('product_turmeric_title') }}</h4>
                            <p class="mt-1 text-sm leading-6 text-[#24352f]">{{ __('product_turmeric_text') }}</p>
                        </div>
                    </div>

                    <!-- Ginger -->
                    <div class="carousel-card min-w-[280px] sm:min-w-[320px] max-w-[320px] flex-shrink-0 snap-start rounded-xl bg-white p-3 shadow-md ring-1 ring-black/5">
                        <img src="https://i.pinimg.com/webp/736x/b1/df/30/b1df30c984239d72b391a480f03c05fc.webp"
                             alt="Ginger"
                             class="h-44 w-full rounded-lg object-cover">
                        <div class="mt-4 px-2 pb-2">
                            <span class="text-xs font-bold uppercase tracking-wider text-[#15812d] bg-[#15812d]/10 px-2 py-0.5 rounded-md">spice</span>
                            <h4 class="mt-2 text-lg font-black text-[#13241f]">{{ __('product_ginger_title') }}</h4>
                            <p class="mt-1 text-sm leading-6 text-[#24352f]">{{ __('product_ginger_text') }}</p>
                        </div>
                    </div>

                    <!-- Cloves -->
                    <div class="carousel-card min-w-[280px] sm:min-w-[320px] max-w-[320px] flex-shrink-0 snap-start rounded-xl bg-white p-3 shadow-md ring-1 ring-black/5">
                        <img src="https://media.istockphoto.com/id/471346177/photo/cloves-closeup.jpg"
                             alt="Cloves"
                             class="h-44 w-full rounded-lg object-cover">
                        <div class="mt-4 px-2 pb-2">
                            <span class="text-xs font-bold uppercase tracking-wider text-[#15812d] bg-[#15812d]/10 px-2 py-0.5 rounded-md">spice</span>
                            <h4 class="mt-2 text-lg font-black text-[#13241f]">{{ __('product_cloves_title') }}</h4>
                            <p class="mt-1 text-sm leading-6 text-[#24352f]">{{ __('product_cloves_text') }}</p>
                        </div>
                    </div>

                    <!-- Chillies -->
                    <div class="carousel-card min-w-[280px] sm:min-w-[320px] max-w-[320px] flex-shrink-0 snap-start rounded-xl bg-white p-3 shadow-md ring-1 ring-black/5">
                        <img src="https://i.pinimg.com/736x/7e/fd/62/7efd62cbb1eeb44200d30f4d756ed4af.jpg"
                             alt="Chillies"
                             class="h-44 w-full rounded-lg object-cover">
                        <div class="mt-4 px-2 pb-2">
                            <span class="text-xs font-bold uppercase tracking-wider text-[#15812d] bg-[#15812d]/10 px-2 py-0.5 rounded-md">spice</span>
                            <h4 class="mt-2 text-lg font-black text-[#13241f]">{{ __('product_chillies_title') }}</h4>
                            <p class="mt-1 text-sm leading-6 text-[#24352f]">{{ __('product_chillies_text') }}</p>
                        </div>
                    </div>

                    <!-- Avocados -->
                    <div class="carousel-card min-w-[280px] sm:min-w-[320px] max-w-[320px] flex-shrink-0 snap-start rounded-xl bg-white p-3 shadow-md ring-1 ring-black/5">
                        <img src="https://images.immediate.co.uk/production/volatile/sites/30/2022/07/Avocado-sliced-in-half-ca9d808.jpg"
                             alt="Avocados"
                             class="h-44 w-full rounded-lg object-cover">
                        <div class="mt-4 px-2 pb-2">
                            <span class="text-xs font-bold uppercase tracking-wider text-[#15812d] bg-[#15812d]/10 px-2 py-0.5 rounded-md">fresh products</span>
                            <h4 class="mt-2 text-lg font-black text-[#13241f]">{{ __('product_avocado_title') }}</h4>
                            <p class="mt-1 text-sm leading-6 text-[#24352f]">{{ __('product_avocado_text') }}</p>
                        </div>
                    </div>

                    <!-- Maize Flour -->
                    <div class="carousel-card min-w-[280px] sm:min-w-[320px] max-w-[320px] flex-shrink-0 snap-start rounded-xl bg-white p-3 shadow-md ring-1 ring-black/5">
                        <img src="https://i.pinimg.com/1200x/0a/0b/9b/0a0b9ba61fe09f87827477c8283ec1f9.jpg"
                             alt="Maize Flour"
                             class="h-44 w-full rounded-lg object-cover">
                        <div class="mt-4 px-2 pb-2">
                            <span class="text-xs font-bold uppercase tracking-wider text-[#15812d] bg-[#15812d]/10 px-2 py-0.5 rounded-md">staples</span>
                            <h4 class="mt-2 text-lg font-black text-[#13241f]">{{ __('product_maize_title') }}</h4>
                            <p class="mt-1 text-sm leading-6 text-[#24352f]">{{ __('product_maize_text') }}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- SERVICES SECTION -->
<section id="services" class="relative bg-white px-5 py-24 lg:px-8 overflow-hidden">
    <div class="mx-auto max-w-7xl">

        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto">
            <p class="text-sm font-extrabold uppercase tracking-wide text-[#15812d]">
                {{ __('services_title') }}
            </p>

            <h2 class="mt-3 text-4xl font-black tracking-normal text-[#13241f] md:text-5xl">
                {{ __('services_heading') }}
            </h2>

            <p class="mt-5 text-lg leading-8 text-[#24352f]">
                {{ __('services_description') }}
            </p>
        </div>

        <!-- Vertical Cards Container -->
        <div class="mt-20 flex flex-col gap-12 lg:gap-16">
            @foreach($services as $index => $service)

            <div class="group relative flex flex-col overflow-hidden rounded-[2rem] bg-[#f8faf4] shadow-md transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl md:flex-row @if($index % 2 != 0) md:flex-row-reverse @endif">

                <!-- Image -->
                <div class="relative h-72 w-full overflow-hidden md:h-auto md:w-5/12">
                    <img src="{{ $service['image'] }}"
                         alt="{{ $service['title'] }}"
                         class="h-full w-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-110">

                    <div class="absolute bottom-4 right-4 rounded-2xl bg-white/90 p-4 text-[#15812d] shadow-xl backdrop-blur-md transition-transform duration-500 group-hover:-translate-y-2 md:bottom-auto md:top-6 md:left-6 md:right-auto">
                        <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            {!! $service['icon'] !!}
                        </svg>
                    </div>
                </div>

                <!-- Content -->
                <div class="flex w-full flex-col justify-center p-8 sm:p-10 md:w-7/12 lg:p-14">

                    <h3 class="text-2xl font-black text-[#13241f] transition-colors duration-300 group-hover:text-[#15812d] md:text-3xl">
                        {{ $service['title'] }}
                    </h3>

                    <p class="mt-3 inline-block font-extrabold uppercase tracking-wider text-sm text-[#87a922]">
                        {{ $service['text'] }}
                    </p>

                    <p class="mt-5 text-base leading-relaxed text-[#24352f] md:text-lg">
                        {{ $service['description'] }}
                    </p>

                    <div class="mt-8">
                        <a href="#contact" class="inline-flex items-center gap-2 rounded-full border-2 border-[#15812d] px-6 py-2.5 text-sm font-bold uppercase tracking-wider text-[#15812d] transition-all hover:bg-[#15812d] hover:text-white">
                            {{ __('inquire_service') }}

                            <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14"/>
                                <path d="m12 5 7 7-7 7"/>
                            </svg>
                        </a>
                    </div>

                </div>

            </div>

            @endforeach
        </div>

    </div>
</section>
</main>

<!-- FLOATING FEEDBACK BUTTON TRIGGER -->
<div class="fixed bottom-5 right-5 z-40">
    <button @click="feedbackOpen = true" class="flex items-center gap-2 rounded-full bg-[#15812d] px-5 py-3 font-bold text-white shadow-xl hover:bg-[#116924] transition">
        {{ __('feedback') }}
    </button>
</div>

<!-- FIXED RESPONSIVE FEEDBACK MODAL OVERLAY -->
<div x-show="feedbackOpen" x-cloak class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/60 backdrop-blur-sm" x-transition>
    <div @click.away="feedbackOpen = false" class="w-full max-w-md rounded-2xl bg-white p-6 shadow-2xl relative flex flex-col max-h-[90vh] md:max-h-[85vh]">
        
        <!-- Modal Title Header -->
        <div class="flex items-center justify-between pb-3 border-b border-gray-100 mb-4 flex-shrink-0">
            <h3 class="text-xl font-black text-[#13241f]">{{ __('send_feedback') }}</h3>
            <button @click="feedbackOpen = false" class="text-gray-400 hover:text-gray-600 p-1 rounded-lg">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Scrollable Form Container -->
        <form action="#" method="POST" class="flex-1 overflow-y-auto pr-1 space-y-4">
            <div>
                <label class="block text-xs font-bold uppercase text-[#24352f] mb-1">{{ __('your_name') }}</label>
                <input type="text" required class="w-full rounded-lg border border-gray-300 p-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#15812d]">
            </div>
            <div>
                <label class="block text-xs font-bold uppercase text-[#24352f] mb-1">{{ __('email_address') }}</label>
                <input type="email" required class="w-full rounded-lg border border-gray-300 p-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#15812d]">
            </div>
            <div>
                <label class="block text-xs font-bold uppercase text-[#24352f] mb-1">{{ __('your_message') }}</label>
                <textarea rows="4" required class="w-full rounded-lg border border-gray-300 p-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-[#15812d]"></textarea>
            </div>

            <!-- Action Buttons at bottom inside form workflow -->
            <div class="pt-2 flex justify-end gap-3 sticky bottom-0 bg-white border-t border-gray-50 mt-4 py-2">
                <button type="button" @click="feedbackOpen = false" class="px-4 py-2 text-sm font-bold text-gray-500 hover:bg-gray-100 rounded-lg transition">
                    {{ __('cancel') }}
                </button>
                <button type="submit" class="px-6 py-2 text-sm font-bold text-white bg-[#15812d] hover:bg-[#116924] rounded-lg transition shadow-md">
                    {{ __('submit_feedback') }}
                </button>
            </div>
        </form>
    </div>
</div>
<footer id="contact" class="bg-gradient-to-br from-[#04140c] via-[#0b301d] to-[#071d12] px-5 py-16 text-white lg:px-8">
    <div class="mx-auto grid max-w-7xl gap-10 lg:grid-cols-[1fr_1.15fr]">
        <div>
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/logo.png') }}"
     alt="WAGE Solutions Limited Logo"
     class="h-14 w-auto">
                <span class="leading-none">
                    <span class="block text-3xl font-black tracking-wide">WAGE</span>
                    <span class="block text-[11px] font-bold uppercase tracking-[0.18em] text-white/80">Solutions Limited</span>
                </span>
            </div>

            <p class="mt-6 max-w-xl text-base leading-8 text-white/78">
                {{ __('footer_description') }}
            </p>

            <button type="button" @click="feedbackOpen = true" class="mt-8 inline-flex items-center gap-3 rounded-full bg-[#d2e829] px-7 py-3 text-sm font-extrabold uppercase text-[#082015] transition hover:bg-white">
                {{ __('send_feedback') }}
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2 11 13"/><path d="m22 2-7 20-4-9-9-4 20-7z"/></svg>
            </button>
        </div>

        <div class="grid gap-5 sm:grid-cols-2">
            <div class="rounded-xl border border-white/10 bg-white/[0.08] p-6">
                <p class="text-sm font-extrabold uppercase tracking-wide text-[#d2e829]">{{ __('business_location') }}</p>
                <p class="mt-3 leading-7 text-white/85">
                    Morogoro Region, Mvomero District, Dakawa Ward, Wami Sokoine Kibao cha Ranch near Makunganya Mosque
                </p>
            </div>

            <div class="rounded-xl border border-white/10 bg-white/[0.08] p-6">
                <p class="text-sm font-extrabold uppercase tracking-wide text-[#d2e829]">{{ __('postal_address') }}</p>
                <p class="mt-3 leading-7 text-white/85">P.O. Box 3294, Morogoro, Tanzania</p>
            </div>

            <div class="rounded-xl border border-white/10 bg-white/[0.08] p-6">
                <p class="text-sm font-extrabold uppercase tracking-wide text-[#d2e829]">{{ __('telephone') }}</p>
                <div class="mt-3 space-y-2 text-white/85">
                    <a href="tel:+255786052912" class="block transition hover:text-[#d2e829]">+255 786 052 912</a>
                    <a href="tel:+255679135676" class="block transition hover:text-[#d2e829]">+255 679 135 676</a>
                </div>
            </div>

            <div class="rounded-xl border border-white/10 bg-white/[0.08] p-6">
                <p class="text-sm font-extrabold uppercase tracking-wide text-[#d2e829]">{{ __('email') }}</p>
                <a href="mailto:getupala@yahoo.co.uk" class="mt-3 block break-words text-white/85 transition hover:text-[#d2e829]">info@wagesolutions.com</a>
            </div>
        </div>
    </div>

    <div class="mx-auto mt-12 grid max-w-7xl gap-6 lg:grid-cols-[0.85fr_1.15fr]">
        <div class="rounded-xl border border-white/10 bg-white/[0.08] p-6">
            <p class="text-sm font-extrabold uppercase tracking-wide text-[#d2e829]">{{ __('find_us_map') }}</p>
            <h2 class="mt-3 text-3xl font-black">Dakawa, Mvomero, Morogoro</h2>
            <p class="mt-4 leading-7 text-white/78">
                {{ __('map_description') }}
            </p>
            <a href="https://www.google.com/maps/search/?api=1&query=Dakawa%20Mvomero%20Morogoro%20Tanzania" target="_blank" rel="noopener" class="mt-6 inline-flex items-center gap-3 rounded-full border border-[#d2e829] px-6 py-3 text-sm font-extrabold uppercase text-[#d2e829] transition hover:bg-[#d2e829] hover:text-[#082015]">
                {{ __('open_google_maps') }}
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17 17 7"/><path d="M7 7h10v10"/></svg>
            </a>
        </div>

        <div class="overflow-hidden rounded-xl border border-white/10 bg-white/[0.08] shadow-2xl shadow-black/20">
            <iframe
                title="WAGE Solutions Limited location in Dakawa, Mvomero, Morogoro"
                src="https://www.google.com/maps?q=Dakawa%20Mvomero%20Morogoro%20Tanzania&output=embed"
                class="h-[360px] w-full"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
        </div>
    </div>

    <div class="mx-auto mt-12 flex max-w-7xl flex-col gap-4 border-t border-white/10 pt-6 text-sm text-white/60 md:flex-row md:items-center md:justify-between">
        <p>&copy; {{ date('Y') }} WAGE Solutions Limited. {{ __('all_rights_reserved') }}</p>
        <div class="flex gap-5 font-bold uppercase">
            <a href="#" class="transition hover:text-[#d2e829]">Home</a>
            <a href="#products" class="transition hover:text-[#d2e829]">Products</a>
            <a href="#services" class="transition hover:text-[#d2e829]">Services</a>
        </div>
    </div>
</footer>

<div x-show="feedbackOpen" x-transition.opacity class="fixed inset-0 z-[80] grid place-items-center bg-black/70 px-5" style="display: none;">
    <div @click.away="feedbackOpen = false" class="w-full max-w-xl rounded-2xl bg-white p-6 shadow-2xl">
        <div class="flex items-start justify-between gap-4">
            <div>
                <p class="text-sm font-extrabold uppercase tracking-wide text-[#15812d]">{{ __('feedback_title') }}</p>
                <h2 class="mt-1 text-3xl font-black text-[#13241f]">{{ __('submit_feedback') }}</h2>
            </div>
            <button type="button" @click="feedbackOpen = false" class="grid h-10 w-10 place-items-center rounded-full bg-[#eef5ec] text-[#13241f] transition hover:bg-[#d2e829]" aria-label="Close feedback form">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
            </button>
        </div>

        <form class="mt-6 space-y-4" @submit.prevent="feedbackOpen = false">
            <div class="grid gap-4 sm:grid-cols-2">
                <label class="block">
                    <span class="text-sm font-bold text-[#24352f]">{{ __('full_name') }}</span>
                    <input type="text" required class="mt-2 w-full rounded-lg border border-[#cfd9cb] px-4 py-3 outline-none transition focus:border-[#15812d] focus:ring-2 focus:ring-[#15812d]/20">
                </label>
                <label class="block">
                    <span class="text-sm font-bold text-[#24352f]">{{ __('phone_or_email') }}</span>
                    <input type="text" required class="mt-2 w-full rounded-lg border border-[#cfd9cb] px-4 py-3 outline-none transition focus:border-[#15812d] focus:ring-2 focus:ring-[#15812d]/20">
                </label>
            </div>

            <label class="block">
                <span class="text-sm font-bold text-[#24352f]">{{ __('subject') }}</span>
                <input type="text" required class="mt-2 w-full rounded-lg border border-[#cfd9cb] px-4 py-3 outline-none transition focus:border-[#15812d] focus:ring-2 focus:ring-[#15812d]/20">
            </label>

            <label class="block">
                <span class="text-sm font-bold text-[#24352f]">{{ __('message') }}</span>
                <textarea rows="5" required class="mt-2 w-full resize-none rounded-lg border border-[#cfd9cb] px-4 py-3 outline-none transition focus:border-[#15812d] focus:ring-2 focus:ring-[#15812d]/20"></textarea>
            </label>

            <div class="flex flex-col gap-3 pt-2 sm:flex-row sm:justify-end">
                <button type="button" @click="feedbackOpen = false" class="rounded-full border border-[#cfd9cb] px-6 py-3 text-sm font-extrabold uppercase text-[#24352f] transition hover:bg-[#eef5ec]">
                    {{ __('cancel') }}
                </button>
                <button type="submit" class="rounded-full bg-[#15812d] px-7 py-3 text-sm font-extrabold uppercase text-white transition hover:bg-[#0f5f22]">
                    {{ __('submit_feedback') }}
                </button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
