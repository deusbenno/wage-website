<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://images.unsplash.com">
    <title>WAGE Solutions</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-[#F8FAF5] font-sans">

<!-- NAVBAR -->
<header x-data="{ open: false }"
        class="fixed top-0 left-0 w-full z-50 bg-white/80 backdrop-blur shadow-sm">

    <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">

        <!-- LOGO -->
        <div class="text-xl font-bold text-[#0B5D1E]">
            WAGE
        </div>

        <!-- DESKTOP MENU -->
        <nav class="hidden md:flex space-x-8 text-gray-700 font-medium">
            <a href="#" class="hover:text-[#0B5D1E]">Home</a>
            <a href="#about" class="hover:text-[#0B5D1E]">About</a>
            <a href="#products" class="hover:text-[#0B5D1E]">Products</a>
            <a href="#services" class="hover:text-[#0B5D1E]">Services</a>
            <a href="#contact" class="hover:text-[#0B5D1E]">Contact</a>
        </nav>

        <!-- CTA -->
        <a href="#contact"
           class="hidden md:inline-block bg-[#0B5D1E] text-white px-5 py-2 rounded-full hover:bg-[#063412] transition">
            Get Quote
        </a>

        <!-- MOBILE BUTTON -->
        <button @click="open = !open" class="md:hidden text-2xl">
            ☰
        </button>
    </div>

    <!-- MOBILE MENU -->
    <div x-show="open" class="md:hidden bg-white px-6 pb-4 space-y-3">
        <a href="#" class="block">Home</a>
        <a href="#about" class="block">About</a>
        <a href="#products" class="block">Products</a>
        <a href="#services" class="block">Services</a>
        <a href="#contact" class="block">Contact</a>
    </div>
</header>

<!-- HERO SECTION WITH SLIDESHOW -->
<section x-data="{
    active: 0,
    images: [
        'https://images.unsplash.com/photo-1592928302636-c83cf1b6c3a8',  /* avocado */
        'https://images.unsplash.com/photo-1603048297172-c92544798d5a',  /* maize */
        'https://images.unsplash.com/photo-1615485290382-441e4d049cb5',  /* spices */
        'https://images.unsplash.com/photo-1625246333195-78d9c38ad449'   /* farm */
    ],
    init() {
        setInterval(() => {
            this.active = (this.active + 1) % this.images.length;
        }, 5000);
    }
}"
class="relative h-screen flex items-center justify-center text-center text-white overflow-hidden">

    <!-- SLIDES -->
    <template x-for="(img, index) in images" :key="index">
        <img
            :src="img"
            x-show="active === index"
            x-transition
            class="absolute inset-0 w-full h-full object-cover"
        >
    </template>

    <!-- DARK OVERLAY -->
    <div class="absolute inset-0 bg-black/60"></div>

    <!-- CONTENT -->
    <div class="relative z-10 max-w-3xl px-6">

        <h1 class="text-4xl md:text-6xl font-bold leading-tight">
            Premium Agricultural Products from Tanzania
        </h1>

        <p class="mt-6 text-lg text-gray-200">
            We specialize in sourcing, processing and exporting avocados, maize,
            and premium spices to local and global markets.
        </p>

        <div class="mt-8 flex justify-center gap-4">
            <a href="#products"
               class="bg-[#0B5D1E] px-6 py-3 rounded-full hover:bg-[#063412] transition">
                Explore Products
            </a>

            <a href="#contact"
               class="border border-white px-6 py-3 rounded-full hover:bg-white hover:text-black transition">
                Contact Us
            </a>
        </div>

    </div>
</section>
<!-- STATS -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-6 text-center">

        <div>
            <h2 class="text-3xl font-bold text-[#0B5D1E]">4+</h2>
            <p class="text-gray-600">Product Lines</p>
        </div>

        <div>
            <h2 class="text-3xl font-bold text-[#0B5D1E]">10+</h2>
            <p class="text-gray-600">Farm Partners</p>
        </div>

        <div>
            <h2 class="text-3xl font-bold text-[#0B5D1E]">Local</h2>
            <p class="text-gray-600">Market Supply</p>
        </div>

        <div>
            <h2 class="text-3xl font-bold text-[#0B5D1E]">Export</h2>
            <p class="text-gray-600">Ready Products</p>
        </div>

    </div>
</section>
<!-- VISION / MISSION / VALUES -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-8">

        <!-- VISION -->
        <div class="p-8 rounded-2xl border hover:shadow-xl transition text-center">
            <div class="text-4xl">👁️</div>
            <h3 class="text-xl font-bold text-[#0B5D1E] mt-4">Vision</h3>
            <p class="mt-3 text-gray-600">
                To become a leading agribusiness delivering premium Tanzanian products globally.
            </p>
        </div>

        <!-- MISSION -->
        <div class="p-8 rounded-2xl border hover:shadow-xl transition text-center">
            <div class="text-4xl">🎯</div>
            <h3 class="text-xl font-bold text-[#0B5D1E] mt-4">Mission</h3>
            <p class="mt-3 text-gray-600">
                To connect farmers and markets through quality processing, packaging and supply.
            </p>
        </div>

        <!-- CORE VALUES -->
        <div class="p-8 rounded-2xl border hover:shadow-xl transition text-center">
            <div class="text-4xl">🌱</div>
            <h3 class="text-xl font-bold text-[#0B5D1E] mt-4">Core Values</h3>
            <p class="mt-3 text-gray-600">
                Quality • Integrity • Sustainability • Innovation • Farmer Empowerment
            </p>
        </div>

    </div>
</section>

</body>
</html>