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
        ['title' => 'Produce Aggregation', 'text' => 'Sourcing from farmers across regions', 'icon' => '<path d="M7 20c0-7 4-12 12-14-.4 7-5 11-12 11"/><path d="M7 20c0-4-2-7-6-9 4-.3 7 1.5 8 5"/>'],
        ['title' => 'Sorting & Grading', 'text' => 'Ensuring premium quality standards', 'icon' => '<circle cx="5" cy="6" r="2"/><circle cx="17" cy="6" r="2"/><circle cx="12" cy="12" r="2"/><circle cx="7" cy="18" r="2"/><circle cx="19" cy="18" r="2"/><path d="M7 7.5 10.5 11M13.5 11 16 7.5M10.5 13 8 16.5M13.5 13 17 16.5"/>'],
        ['title' => 'Processing & Value Addition', 'text' => 'Drying, grinding & other processing', 'icon' => '<path d="M3 21h18"/><path d="M5 21V9l6 4V9l8 5v7"/><path d="M7 16h2"/><path d="M13 16h2"/><path d="M17 16h2"/><path d="M9 9V5h4v6"/>'],
        ['title' => 'Packaging', 'text' => 'Hygienic packaging for local & export markets', 'icon' => '<path d="m21 8-9-5-9 5 9 5 9-5z"/><path d="M3 8v8l9 5 9-5V8"/><path d="M12 13v8"/><path d="m7.5 5.5 9 5"/>'],
        ['title' => 'Warehouse Storage', 'text' => 'Safe storage with proper handling systems', 'icon' => '<path d="M3 21h18"/><path d="M4 21V8l8-5 8 5v13"/><path d="M8 21v-8h8v8"/><path d="M8 11h8"/><path d="M10 17h4"/>'],
        ['title' => 'Logistics & Delivery', 'text' => 'Reliable transport & timely delivery', 'icon' => '<path d="M10 17H5a2 2 0 0 1-2-2V6h11v11"/><path d="M14 9h4l3 4v4h-3"/><circle cx="7" cy="17" r="2"/><circle cx="16" cy="17" r="2"/>'],
    ];
@endphp

<header x-data="{ open: false, langOpen: false }" class="fixed left-0 top-0 z-50 w-full border-b border-[#d2e829]/20 bg-gradient-to-r from-[#04140c] via-[#0b341c] to-[#062414] text-white shadow-xl shadow-black/20">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 lg:px-8">

        <!-- LOGO -->
        <a href="#" class="flex items-center gap-3">
            <span class="grid h-11 w-11 place-items-center rounded-full border border-[#d2e829]/50 text-[#d2e829]">
                <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M7 20c0-8 4-13 12-15-.4 8-5 12-12 12"/>
                    <path d="M7 20c0-5-2-8-6-10 5-.4 8 2 9 6"/>
                </svg>
            </span>
            <span class="leading-none">
                <span class="block text-3xl font-black tracking-wide">WAGE</span>
                <span class="block text-[11px] font-bold uppercase tracking-[0.18em]">Solutions Limited</span>
            </span>
        </a>

        <!-- NAV -->
    <a href="#" class="text-[#d2e829]">{{ __('home.home') }}</a>
<a href="#about" class="transition hover:text-[#d2e829]">{{ __('home.about') }}</a>
<a href="#products" class="transition hover:text-[#d2e829]">{{ __('home.products') }}</a>
<a href="#services" class="transition hover:text-[#d2e829]">{{ __('home.services') }}</a>
<a href="#why-us" class="transition hover:text-[#d2e829]">{{ __('home.why_us') }}</a>
<a href="#contact" class="transition hover:text-[#d2e829]">{{ __('home.contact') }}</a>

        <!-- RIGHT SIDE ACTIONS -->
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
         x-transition
         class="absolute right-0 mt-2 w-48 overflow-hidden rounded-lg border border-white/10 bg-[#071d12] shadow-xl">

        <a href="/lang/en">EN</a>
<a href="/lang/sw">SW</a>
<a href="/lang/de">DE</a>
<a href="/lang/nl">NL</a>
    </div>
</div>

            <!-- GET QUOTE -->
            <a href="#contact" class="rounded-full border border-[#d2e829] px-7 py-3 text-sm font-extrabold uppercase transition hover:bg-[#d2e829] hover:text-[#092114]">
                {{ __('home.get_quote') }}
            </a>
        </div>

        <!-- MOBILE BUTTON -->
        <button @click="open = !open" class="rounded-full border border-white/25 p-2 lg:hidden" aria-label="Open navigation">
            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M4 7h16M4 12h16M4 17h16"/>
            </svg>
        </button>
    </div>

    <!-- MOBILE MENU -->
    <div x-show="open" x-transition class="space-y-1 border-t border-white/10 bg-gradient-to-b from-[#082015] to-[#0b341c] px-5 py-4 text-sm font-bold uppercase lg:hidden">
      <a href="#" class="block rounded-lg px-3 py-2 text-[#d2e829]">{{ __('home.home') }}</a>
<a href="#about" class="block rounded-lg px-3 py-2">{{ __('home.about') }}</a>
<a href="#products" class="block rounded-lg px-3 py-2">{{ __('home.products') }}</a>
<a href="#services" class="block rounded-lg px-3 py-2">{{ __('home.services') }}</a>
<a href="#why-us" class="block rounded-lg px-3 py-2">{{ __('home.why_us') }}</a>
<a href="#contact" class="block rounded-lg px-3 py-2">{{ __('home.contact') }}</a>
        <!-- MOBILE LANGUAGE -->
        <div class="mt-3 border-t border-white/10 pt-3">
            <p class="px-3 text-xs text-white/60">Language</p>

            <div class="mt-2 space-y-1">
                 <a href="/lang/en">EN</a>
<a href="/lang/sw">SW</a>
<a href="/lang/de">DE</a>
<a href="/lang/nl">NL</a>
            </div>
        </div>
    </div>
</header>
<main>
    <section
        x-data="{
            current: 0,
            slides: [
                {
                    label: 'Fresh Avocados',
                    image: 'https://images.unsplash.com/photo-1601039641847-7857b994d704?auto=format&fit=crop&w=1900&q=85',
                    alt: 'Fresh avocados growing on a tree'
                },
                {
                    label: 'Maize Flour',
                    image: 'https://images.unsplash.com/photo-1551754655-cd27e38d2076?auto=format&fit=crop&w=1900&q=85',
                    alt: 'Maize and maize flour'
                },
                {
                    label: 'Pilipili Spices',
                    image: 'https://source.unsplash.com/1900x1100/?chili,pepper,spices',
                    alt: 'Pilipili chili spices'
                },
                {
                    label: 'Fresh Ginger',
                    image: 'https://images.unsplash.com/photo-1615485500834-bc10199bc727?auto=format&fit=crop&w=1900&q=85',
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
            <img src="https://images.unsplash.com/photo-1595275372297-f5d64f8ca31a?auto=format&fit=crop&w=1200&q=80"
                 alt="african warehouse"
                 class="h-[360px] w-full object-cover">
        </div>

    </div>
</section>

  <section id="products" class="bg-[#f4f6ef] px-5 py-16 lg:px-8 overflow-hidden">
    <div class="mx-auto max-w-7xl">
        <div class="text-center">
            <p class="text-sm font-extrabold uppercase tracking-wide text-[#15812d]">Our Products</p>
            <h2 class="mt-2 text-4xl font-black tracking-normal text-[#13241f]">Quality Products, Naturally Grown</h2>
        </div>

        <!-- Premium Products Auto-Scrolling Slideshow -->
        <div class="mt-10 relative">
            <h3 class="text-xs font-bold uppercase tracking-wider text-[#24352f]/60 mb-4 px-1 text-center">Featured Commodities</h3>
            
            <!-- The Scrolling Track -->
            <div class="flex animate-marquee gap-6">
                
                <!-- Card 1: Turmeric -->
                <div class="min-w-[280px] sm:min-w-[320px] max-w-[320px] flex-shrink-0 rounded-xl bg-white p-3 shadow-md shadow-black/5 ring-1 ring-black/5">
                    <img src="https://images.pexels.com/photos/6356711/pexels-photo-6356711.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Turmeric" class="h-44 w-full rounded-lg object-cover">
                    <div class="mt-4 px-2 pb-2">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#15812d] bg-[#15812d]/10 px-2 py-0.5 rounded-md">Spice</span>
                        <h4 class="mt-2 text-lg font-black text-[#13241f]">Pure Turmeric</h4>
                        <p class="mt-1 text-sm leading-6 text-[#24352f]">Rich in curcumin, dried and processed to pristine grades from selected smallholder farms.</p>
                    </div>
                </div>

                <!-- Card 2: Ginger -->
                <div class="min-w-[280px] sm:min-w-[320px] max-w-[320px] flex-shrink-0 rounded-xl bg-white p-3 shadow-md shadow-black/5 ring-1 ring-black/5">
                    <img src="https://images.pexels.com/photos/4666750/pexels-photo-4666750.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Ginger" class="h-44 w-full rounded-lg object-cover">
                    <div class="mt-4 px-2 pb-2">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#15812d] bg-[#15812d]/10 px-2 py-0.5 rounded-md">Spice</span>
                        <h4 class="mt-2 text-lg font-black text-[#13241f]">Aromatic Ginger</h4>
                        <p class="mt-1 text-sm leading-6 text-[#24352f]">Pungent, high-grade ginger rhizomes cleaned and processed carefully for maximum flavor.</p>
                    </div>
                </div>

                <!-- Card 3: Cloves -->
                <div class="min-w-[280px] sm:min-w-[320px] max-w-[320px] flex-shrink-0 rounded-xl bg-white p-3 shadow-md shadow-black/5 ring-1 ring-black/5">
                    <img src="https://images.pexels.com/photos/10757656/pexels-photo-10757656.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Cloves" class="h-44 w-full rounded-lg object-cover">
                    <div class="mt-4 px-2 pb-2">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#15812d] bg-[#15812d]/10 px-2 py-0.5 rounded-md">Spice</span>
                        <h4 class="mt-2 text-lg font-black text-[#13241f]">Zanzibar Cloves</h4>
                        <p class="mt-1 text-sm leading-6 text-[#24352f]">Premium whole cloves harvested carefully at optimal maturity, featuring strong aroma.</p>
                    </div>
                </div>

                <!-- Card 4: Hot Chillies -->
                <div class="min-w-[280px] sm:min-w-[320px] max-w-[320px] flex-shrink-0 rounded-xl bg-white p-3 shadow-md shadow-black/5 ring-1 ring-black/5">
                    <img src="https://images.pexels.com/photos/3315286/pexels-photo-3315286.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Hot Chillies" class="h-44 w-full rounded-lg object-cover">
                    <div class="mt-4 px-2 pb-2">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#15812d] bg-[#15812d]/10 px-2 py-0.5 rounded-md">Spice</span>
                        <h4 class="mt-2 text-lg font-black text-[#13241f]">Hot African Chillies</h4>
                        <p class="mt-1 text-sm leading-6 text-[#24352f]">Fiery and brightly colored hot peppers sun-dried to perfect humidity metrics.</p>
                    </div>
                </div>

                <!-- Card 5: Avocados -->
                <div class="min-w-[280px] sm:min-w-[320px] max-w-[320px] flex-shrink-0 rounded-xl bg-white p-3 shadow-md shadow-black/5 ring-1 ring-black/5">
                    <img src="https://images.pexels.com/photos/2365281/pexels-photo-2365281.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Avocados" class="h-44 w-full rounded-lg object-cover">
                    <div class="mt-4 px-2 pb-2">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#15812d] bg-[#15812d]/10 px-2 py-0.5 rounded-md">Fresh Produce</span>
                        <h4 class="mt-2 text-lg font-black text-[#13241f]">Premium Avocados</h4>
                        <p class="mt-1 text-sm leading-6 text-[#24352f]">Top-grade Hass varieties, sorted gently and packed to meet high trade criteria.</p>
                    </div>
                </div>

                <!-- Card 6: Maize Flour -->
                <div class="min-w-[280px] sm:min-w-[320px] max-w-[320px] flex-shrink-0 rounded-xl bg-white p-3 shadow-md shadow-black/5 ring-1 ring-black/5">
                    <img src="https://images.pexels.com/photos/1435735/pexels-photo-1435735.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Maize Flour" class="h-44 w-full rounded-lg object-cover">
                    <div class="mt-4 px-2 pb-2">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#15812d] bg-[#15812d]/10 px-2 py-0.5 rounded-md">Staples</span>
                        <h4 class="mt-2 text-lg font-black text-[#13241f]">Fortified Maize Flour</h4>
                        <p class="mt-1 text-sm leading-6 text-[#24352f]">Nutrient-rich, finely milled white corn flour perfect for preparing local meals.</p>
                    </div>
                </div>

                <!-- Duplicated set for seamless infinite loop effect -->
                <div class="min-w-[280px] sm:min-w-[320px] max-w-[320px] flex-shrink-0 rounded-xl bg-white p-3 shadow-md shadow-black/5 ring-1 ring-black/5">
                    <img src="https://images.pexels.com/photos/6356711/pexels-photo-6356711.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Turmeric" class="h-44 w-full rounded-lg object-cover">
                    <div class="mt-4 px-2 pb-2">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#15812d] bg-[#15812d]/10 px-2 py-0.5 rounded-md">Spice</span>
                        <h4 class="mt-2 text-lg font-black text-[#13241f]">Pure Turmeric</h4>
                        <p class="mt-1 text-sm leading-6 text-[#24352f]">Rich in curcumin, dried and processed to pristine grades from selected smallholder farms.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Inject this custom CSS into your stylesheet to handle the animation -->
<style>
    @keyframes marquee {
        0% { transform: translateX(0); }
        100% { transform: translateX(calc(-320px * 3 - 1.5rem * 3)); }
    }
    .animate-marquee {
        display: flex;
        animation: marquee 20s linear infinite;
    }
    .animate-marquee:hover {
        animation-play-state: paused;
    }
</style>

        <!-- Dynamic Loop Area for Other Custom Products 
        <div class="mt-12">
            <h3 class="text-xs font-bold uppercase tracking-wider text-[#24352f]/60 mb-6 px-1">All Catalog Items</h3>
            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6">
                @foreach ($products as $product)
                    <article class="overflow-hidden rounded-lg bg-white text-center shadow-lg shadow-black/5 ring-1 ring-black/5">
                        <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="h-44 w-full object-cover">
                        <div class="px-4 py-5">
                            <h3 class="text-lg font-extrabold text-[#14231e]">{{ $product['name'] }}</h3>
                            <p class="mt-2 text-sm leading-6 text-[#24352f]">{{ $product['text'] }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>-->
    </div>
</section>

<section id="services" class="bg-[#eef5ec] px-5 py-16 lg:px-8">
    <div class="mx-auto max-w-7xl">
        <div class="text-center">
            <p class="text-sm font-extrabold uppercase tracking-wide text-[#15812d]">Our Services</p>
            <h2 class="mt-2 text-4xl font-black tracking-normal text-[#13241f]">From Farm to Market - We Deliver Value</h2>
        </div>

        <div class="mt-10 grid gap-0 rounded-xl bg-white/30 md:grid-cols-3 lg:grid-cols-6">
            @foreach ($services as $service)
                <article class="border-b border-[#cfd9cb] px-5 py-8 text-center last:border-b-0 md:border-r md:last:border-r-0 lg:border-b-0">
                    <svg class="mx-auto h-10 w-10 text-[#155f2b]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        {!! $service['icon'] !!}
                    </svg>
                    <h3 class="mt-4 text-base font-extrabold leading-tight text-[#13241f]">{{ $service['title'] }}</h3>
                    <p class="mt-2 text-sm leading-6 text-[#24352f]">{{ $service['text'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
</main>

<footer id="contact" class="bg-gradient-to-br from-[#04140c] via-[#0b301d] to-[#071d12] px-5 py-16 text-white lg:px-8">
    <div class="mx-auto grid max-w-7xl gap-10 lg:grid-cols-[1fr_1.15fr]">
        <div>
            <div class="flex items-center gap-3">
                <span class="grid h-12 w-12 place-items-center rounded-full border border-[#d2e829]/50 text-[#d2e829]">
                    <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M7 20c0-8 4-13 12-15-.4 8-5 12-12 12"/>
                        <path d="M7 20c0-5-2-8-6-10 5-.4 8 2 9 6"/>
                    </svg>
                </span>
                <span class="leading-none">
                    <span class="block text-3xl font-black tracking-wide">WAGE</span>
                    <span class="block text-[11px] font-bold uppercase tracking-[0.18em] text-white/80">Solutions Limited</span>
                </span>
            </div>

            <p class="mt-6 max-w-xl text-base leading-8 text-white/78">
                Premium Tanzanian agricultural products, processed and supplied with care for local and international markets.
            </p>

            <button type="button" @click="feedbackOpen = true" class="mt-8 inline-flex items-center gap-3 rounded-full bg-[#d2e829] px-7 py-3 text-sm font-extrabold uppercase text-[#082015] transition hover:bg-white">
                Send Feedback
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2 11 13"/><path d="m22 2-7 20-4-9-9-4 20-7z"/></svg>
            </button>
        </div>

        <div class="grid gap-5 sm:grid-cols-2">
            <div class="rounded-xl border border-white/10 bg-white/[0.08] p-6">
                <p class="text-sm font-extrabold uppercase tracking-wide text-[#d2e829]">Business Location</p>
                <p class="mt-3 leading-7 text-white/85">
                    Morogoro Region, Mvomero District, Dakawa Ward, Wami Sokoine Kibao cha Ranch near Makunganya Mosque
                </p>
            </div>

            <div class="rounded-xl border border-white/10 bg-white/[0.08] p-6">
                <p class="text-sm font-extrabold uppercase tracking-wide text-[#d2e829]">Postal Address</p>
                <p class="mt-3 leading-7 text-white/85">P.O. Box 3294, Morogoro, Tanzania</p>
            </div>

            <div class="rounded-xl border border-white/10 bg-white/[0.08] p-6">
                <p class="text-sm font-extrabold uppercase tracking-wide text-[#d2e829]">Telephone</p>
                <div class="mt-3 space-y-2 text-white/85">
                    <a href="tel:+255786052912" class="block transition hover:text-[#d2e829]">+255 786 052 912</a>
                    <a href="tel:+255792240381" class="block transition hover:text-[#d2e829]">+255 792 240 381</a>
                </div>
            </div>

            <div class="rounded-xl border border-white/10 bg-white/[0.08] p-6">
                <p class="text-sm font-extrabold uppercase tracking-wide text-[#d2e829]">Email</p>
                <a href="mailto:getupala@yahoo.co.uk" class="mt-3 block break-words text-white/85 transition hover:text-[#d2e829]">getupala@yahoo.co.uk</a>
            </div>
        </div>
    </div>

    <div class="mx-auto mt-12 grid max-w-7xl gap-6 lg:grid-cols-[0.85fr_1.15fr]">
        <div class="rounded-xl border border-white/10 bg-white/[0.08] p-6">
            <p class="text-sm font-extrabold uppercase tracking-wide text-[#d2e829]">Find Us on the Map</p>
            <h2 class="mt-3 text-3xl font-black">Dakawa, Mvomero, Morogoro</h2>
            <p class="mt-4 leading-7 text-white/78">
                The map points visitors to Dakawa Ward in Mvomero District, Morogoro Region. For exact arrival guidance, contact WAGE Solutions Limited using the phone numbers above.
            </p>
            <a href="https://www.google.com/maps/search/?api=1&query=Dakawa%20Mvomero%20Morogoro%20Tanzania" target="_blank" rel="noopener" class="mt-6 inline-flex items-center gap-3 rounded-full border border-[#d2e829] px-6 py-3 text-sm font-extrabold uppercase text-[#d2e829] transition hover:bg-[#d2e829] hover:text-[#082015]">
                Open Google Maps
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
        <p>&copy; {{ date('Y') }} WAGE Solutions Limited. All rights reserved.</p>
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
                <p class="text-sm font-extrabold uppercase tracking-wide text-[#15812d]">WAGE Feedback</p>
                <h2 class="mt-1 text-3xl font-black text-[#13241f]">Send Feedback</h2>
            </div>
            <button type="button" @click="feedbackOpen = false" class="grid h-10 w-10 place-items-center rounded-full bg-[#eef5ec] text-[#13241f] transition hover:bg-[#d2e829]" aria-label="Close feedback form">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
            </button>
        </div>

        <form class="mt-6 space-y-4" @submit.prevent="feedbackOpen = false">
            <div class="grid gap-4 sm:grid-cols-2">
                <label class="block">
                    <span class="text-sm font-bold text-[#24352f]">Full Name</span>
                    <input type="text" required class="mt-2 w-full rounded-lg border border-[#cfd9cb] px-4 py-3 outline-none transition focus:border-[#15812d] focus:ring-2 focus:ring-[#15812d]/20">
                </label>
                <label class="block">
                    <span class="text-sm font-bold text-[#24352f]">Phone or Email</span>
                    <input type="text" required class="mt-2 w-full rounded-lg border border-[#cfd9cb] px-4 py-3 outline-none transition focus:border-[#15812d] focus:ring-2 focus:ring-[#15812d]/20">
                </label>
            </div>

            <label class="block">
                <span class="text-sm font-bold text-[#24352f]">Subject</span>
                <input type="text" required class="mt-2 w-full rounded-lg border border-[#cfd9cb] px-4 py-3 outline-none transition focus:border-[#15812d] focus:ring-2 focus:ring-[#15812d]/20">
            </label>

            <label class="block">
                <span class="text-sm font-bold text-[#24352f]">Message</span>
                <textarea rows="5" required class="mt-2 w-full resize-none rounded-lg border border-[#cfd9cb] px-4 py-3 outline-none transition focus:border-[#15812d] focus:ring-2 focus:ring-[#15812d]/20"></textarea>
            </label>

            <div class="flex flex-col gap-3 pt-2 sm:flex-row sm:justify-end">
                <button type="button" @click="feedbackOpen = false" class="rounded-full border border-[#cfd9cb] px-6 py-3 text-sm font-extrabold uppercase text-[#24352f] transition hover:bg-[#eef5ec]">
                    Cancel
                </button>
                <button type="submit" class="rounded-full bg-[#15812d] px-7 py-3 text-sm font-extrabold uppercase text-white transition hover:bg-[#0f5f22]">
                    Submit Feedback
                </button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
