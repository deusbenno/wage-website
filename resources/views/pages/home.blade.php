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
        ['title' => 'Sorting & Grading', 'text' => 'Ensuring premium quality standards', 'icon' => '<circle cx="5" cy="6" r="2"/><circle cx="17" cy="6" r="2"/><circle cx="12" cy="12" r="2"/><circle cx="7" cy="18" r="2"/><circle cx="19" cy="18" r="2"/>'],
        ['title' => 'Processing & Value Addition', 'text' => 'Drying, grinding & other processing', 'icon' => '<path d="M3 21h18"/><path d="M5 21V9l6 4V9l8 5v7"/>'],
        ['title' => 'Packaging', 'text' => 'Hygienic packaging for local & export markets', 'icon' => '<path d="m21 8-9-5-9 5 9 5 9-5z"/>'],
        ['title' => 'Warehouse Storage', 'text' => 'Safe storage with proper handling systems', 'icon' => '<path d="M3 21h18"/><path d="M4 21V8l8-5 8 5v13"/>'],
        ['title' => 'Logistics & Delivery', 'text' => 'Reliable transport & timely delivery', 'icon' => '<circle cx="7" cy="17" r="2"/><circle cx="16" cy="17" r="2"/>'],
    ];
@endphp

<header x-data="{ open: false, langOpen: false }"
    class="fixed left-0 top-0 z-50 w-full border-b border-[#d2e829]/20 bg-gradient-to-r from-[#04140c] via-[#0b341c] to-[#062414] text-white shadow-xl">

    <div class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 lg:px-8">

        <a href="#" class="flex items-center gap-3">
            <span class="grid h-11 w-11 place-items-center rounded-full border border-[#d2e829]/50 text-[#d2e829]">
                <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path d="M7 20c0-8 4-13 12-15-.4 8-5 12-12 12"/>
                </svg>
            </span>
            <span>
                <span class="block text-3xl font-black">WAGE</span>
                <span class="block text-[11px] uppercase tracking-[0.18em]">Solutions Limited</span>
            </span>
        </a>

        <nav class="hidden lg:flex items-center gap-9 text-sm font-extrabold uppercase">
            <a href="#" data-i18n="home" class="text-[#d2e829]">Home</a>
            <a href="#about" data-i18n="about">About</a>
            <a href="#products" data-i18n="products">Products</a>
            <a href="#services" data-i18n="services">Services</a>
            <a href="#why-us" data-i18n="why">Why Us</a>
            <a href="#contact" data-i18n="contact">Contact</a>
        </nav>

        <div class="hidden lg:flex items-center gap-4">

            <div class="relative">
                <button @click="langOpen = !langOpen"
                    class="flex items-center gap-2 rounded-full border border-white/20 px-4 py-2 text-sm font-bold uppercase">
                    🌐 Lang
                </button>

                <div x-show="langOpen" @click.away="langOpen = false"
                    x-transition
                    class="absolute right-0 mt-2 w-48 rounded-lg bg-[#071d12] border border-white/10 shadow-xl">

                    <div class="px-4 py-3 cursor-pointer hover:bg-white/10" onclick="setLang('en')">
                        🇬🇧 English
                    </div>

                    <div class="px-4 py-3 cursor-pointer hover:bg-white/10" onclick="setLang('sw')">
                        🇹🇿 Swahili
                    </div>

                    <div class="px-4 py-3 opacity-50">🇩🇪 Deutsch</div>
                    <div class="px-4 py-3 opacity-50">🇳🇱 Dutch</div>
                </div>
            </div>

            <a href="#contact" data-i18n="quote"
                class="rounded-full border border-[#d2e829] px-7 py-3 text-sm font-extrabold uppercase">
                Get a Quote
            </a>
        </div>

        <button @click="open = !open" class="lg:hidden border p-2 rounded-full">☰</button>
    </div>
</header>

<main>

<section class="pt-28 relative min-h-[720px] text-white"
    x-data="{ current: 0 }">

    <div class="absolute inset-0">
        <img class="absolute inset-0 h-full w-full object-cover"
            src="https://images.unsplash.com/photo-1551754655-cd27e38d2076?auto=format&fit=crop&w=1900&q=85">
        <div class="absolute inset-0 bg-black/60"></div>
    </div>

    <div class="relative z-10 max-w-3xl px-6 py-24">

        <h1 data-i18n="heroTitle" class="text-5xl font-black">
            Premium Agricultural Products from Tanzania
        </h1>

        <p data-i18n="heroText" class="mt-6 text-lg">
            WAGE Solutions Limited specializes in sourcing, aggregation, processing, packaging, and marketing of agricultural products.
        </p>

    </div>
</section>

</main>

<footer id="contact" class="bg-gradient-to-br from-[#04140c] via-[#0b301d] to-[#071d12] px-5 py-16 text-white lg:px-8">
    <div class="mx-auto grid max-w-7xl gap-10 lg:grid-cols-[1fr_1.15fr]">
        <div>
            <div class="flex items-center gap-3">
                <span class="grid h-12 w-12 place-items-center rounded-full border border-[#d2e829]/50 text-[#d2e829]">
                    <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M7 20c0-8 4-13 12-15-.4 8-5 12-12 12"/>
                    </svg>
                </span>
                <span>
                    <span class="block text-3xl font-black">WAGE</span>
                    <span class="block text-[11px] uppercase tracking-[0.18em] text-white/80">Solutions Limited</span>
                </span>
            </div>

            <p class="mt-6 max-w-xl text-white/80 leading-7">
                Premium Tanzanian agricultural products processed and supplied for local and international markets.
            </p>

            <button type="button"
                @click="feedbackOpen = true"
                class="mt-8 inline-flex items-center gap-3 rounded-full bg-[#d2e829] px-7 py-3 text-sm font-extrabold uppercase text-[#082015] hover:bg-white transition">
                Send Feedback
            </button>
        </div>

        <div class="grid gap-5 sm:grid-cols-2">
            <div class="rounded-xl border border-white/10 bg-white/5 p-6">
                <p class="text-sm font-bold uppercase text-[#d2e829]">Business Location</p>
                <p class="mt-3 text-white/80 leading-7">
                    Morogoro Region, Mvomero District, Dakawa Ward
                </p>
            </div>

            <div class="rounded-xl border border-white/10 bg-white/5 p-6">
                <p class="text-sm font-bold uppercase text-[#d2e829]">Postal Address</p>
                <p class="mt-3 text-white/80">P.O. Box 3294, Morogoro, Tanzania</p>
            </div>

            <div class="rounded-xl border border-white/10 bg-white/5 p-6">
                <p class="text-sm font-bold uppercase text-[#d2e829]">Telephone</p>
                <a href="tel:+255786052912" class="block mt-3 text-white/80 hover:text-[#d2e829]">
                    +255 786 052 912
                </a>
                <a href="tel:+255792240381" class="block text-white/80 hover:text-[#d2e829]">
                    +255 792 240 381
                </a>
            </div>

            <div class="rounded-xl border border-white/10 bg-white/5 p-6">
                <p class="text-sm font-bold uppercase text-[#d2e829]">Email</p>
                <a href="mailto:getupala@yahoo.co.uk" class="block mt-3 text-white/80 hover:text-[#d2e829]">
                    getupala@yahoo.co.uk
                </a>
            </div>
        </div>
    </div>

    <div class="mt-12 border-t border-white/10 pt-6 text-center text-white/60 text-sm">
        &copy; {{ date('Y') }} WAGE Solutions Limited. All rights reserved.
    </div>
</footer>

<script>
const translations = {
    en: {
        home: "Home",
        about: "About",
        products: "Products",
        services: "Services",
        why: "Why Us",
        contact: "Contact",
        quote: "Get a Quote",
        heroTitle: "Premium Agricultural Products from Tanzania",
        heroText: "WAGE Solutions Limited specializes in sourcing, aggregation, processing, packaging, and marketing of agricultural products."
    },
    sw: {
        home: "Nyumbani",
        about: "Kuhusu Sisi",
        products: "Bidhaa",
        services: "Huduma",
        why: "Kwa Nini Sisi",
        contact: "Mawasiliano",
        quote: "Omba Bei",
        heroTitle: "Bidhaa Bora za Kilimo kutoka Tanzania",
        heroText: "WAGE Solutions Limited inajihusisha na ukusanyaji na uchakataji wa mazao ya kilimo."
    }
};

function setLang(lang) {
    localStorage.setItem("wage_lang", lang);
    applyLang(lang);
}

function applyLang(lang) {
    const t = translations[lang];
    if (!t) return;

    document.querySelectorAll("[data-i18n]").forEach(el => {
        const key = el.getAttribute("data-i18n");
        if (t[key]) el.innerText = t[key];
    });
}

window.addEventListener("DOMContentLoaded", () => {
    applyLang(localStorage.getItem("wage_lang") || "en");
});
</script>

</body>
</html>