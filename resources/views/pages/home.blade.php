<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<!-- HERO SECTION -->
<section class="relative h-screen flex items-center justify-center text-center text-white">

    <!-- BACKGROUND IMAGE -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1605000797499-95a51c5269ae"
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/50"></div>
    </div>

    <!-- CONTENT -->
    <div class="relative z-10 max-w-3xl px-6">

        <h1 class="text-4xl md:text-6xl font-bold leading-tight">
            Premium Agricultural Products from Tanzania
        </h1>

        <p class="mt-6 text-lg text-gray-200">
            We specialize in sourcing, processing and exporting high-quality maize flour,
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

</body>
</html>