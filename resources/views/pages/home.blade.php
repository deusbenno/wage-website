<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAGE Solutions</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="preconnect" href="https://images.unsplash.com">
</head>

<body class="bg-[#F8FAF5] font-sans">

<!-- NAVBAR -->
<header x-data="{ open: false }"
        class="fixed top-0 left-0 w-full z-50 bg-white/80 backdrop-blur shadow-sm">

    <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">

        <div class="text-xl font-bold text-[#0B5D1E]">
            WAGE
        </div>

        <nav class="hidden md:flex space-x-8 text-gray-700 font-medium">
            <a href="#" class="hover:text-[#0B5D1E]">Home</a>
            <a href="#about" class="hover:text-[#0B5D1E]">About</a>
            <a href="#products" class="hover:text-[#0B5D1E]">Products</a>
            <a href="#services" class="hover:text-[#0B5D1E]">Services</a>
            <a href="#contact" class="hover:text-[#0B5D1E]">Contact</a>
        </nav>

        <a href="#contact"
           class="hidden md:inline-block bg-[#0B5D1E] text-white px-5 py-2 rounded-full hover:bg-[#063412] transition">
            Get Quote
        </a>

        <button @click="open = !open" class="md:hidden text-2xl">☰</button>
    </div>

    <div x-show="open" class="md:hidden bg-white px-6 pb-4 space-y-3">
        <a href="#" class="block">Home</a>
        <a href="#about" class="block">About</a>
        <a href="#products" class="block">Products</a>
        <a href="#services" class="block">Services</a>
        <a href="#contact" class="block">Contact</a>
    </div>
</header>

<!-- HERO SECTION (STATIC MAIZE FARM BACKGROUND) -->
<section class="relative h-screen flex items-center justify-center text-center text-white overflow-hidden">

    <!-- BACKGROUND IMAGE -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1605000797510-6a3c0b2d8b4c"
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/60"></div>
    </div>

    <!-- CONTENT -->
    <div class="relative z-10 max-w-3xl px-6">

        <h1 class="text-4xl md:text-6xl font-bold leading-tight">
            Premium Agricultural Products from Tanzania
        </h1>

        <p class="mt-6 text-lg text-gray-200">
            We specialize in sourcing, processing and exporting high-quality maize,
            avocados and spices for local and global markets.
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

<!-- ABOUT -->
<section id="about" class="py-20 bg-[#F8FAF5]">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <img src="https://images.unsplash.com/photo-1587049352846-4a222e784d38"
             class="rounded-2xl shadow-lg w-full object-cover">

        <div>
            <h2 class="text-3xl md:text-4xl font-bold text-[#0B5D1E]">
                About WAGE Solutions Limited
            </h2>

            <p class="mt-6 text-gray-700 leading-relaxed">
                WAGE Solutions Limited is a Tanzanian agribusiness company focused on sourcing,
                processing, packaging, and supplying high-quality agricultural products including
                maize flour, avocados, ginger, turmeric, and cloves.
            </p>

            <p class="mt-4 text-gray-700 leading-relaxed">
                We work directly with farmers to ensure quality and fair value across the supply chain.
            </p>
        </div>

    </div>
</section>

<!-- VISION / MISSION / VALUES -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-8">

        <div class="p-8 rounded-2xl border text-center hover:shadow-xl transition">
            <div class="text-4xl">👁️</div>
            <h3 class="mt-4 text-xl font-bold text-[#0B5D1E]">Vision</h3>
            <p class="mt-3 text-gray-600">
                Leading agribusiness delivering premium Tanzanian products globally.
            </p>
        </div>

        <div class="p-8 rounded-2xl border text-center hover:shadow-xl transition">
            <div class="text-4xl">🎯</div>
            <h3 class="mt-4 text-xl font-bold text-[#0B5D1E]">Mission</h3>
            <p class="mt-3 text-gray-600">
                Connecting farmers to markets through quality processing and supply chains.
            </p>
        </div>

        <div class="p-8 rounded-2xl border text-center hover:shadow-xl transition">
            <div class="text-4xl">🌱</div>
            <h3 class="mt-4 text-xl font-bold text-[#0B5D1E]">Core Values</h3>
            <p class="mt-3 text-gray-600">
                Quality • Integrity • Sustainability • Innovation • Empowerment
            </p>
        </div>

    </div>
</section>

</body>
</html>