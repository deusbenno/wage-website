<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WAGE Login</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex items-center justify-center relative bg-black">

    <!-- BACKGROUND IMAGE -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1592982537447-7440770cbfc9?auto=format&fit=crop&w=2000&q=80"
             class="w-full h-full object-cover opacity-60">
    </div>

    <!-- DARK GREEN OVERLAY -->
    <div class="absolute inset-0 bg-gradient-to-br from-[#04150b]/90 via-[#063816]/80 to-[#020c05]/90"></div>

    <!-- BRAND HEADER -->
    <div class="absolute top-6 left-6 flex items-center gap-3 text-white z-10">
        <span class="text-3xl">🌿</span>
        <div>
            <div class="text-2xl font-black">WAGE</div>
            <div class="text-xs tracking-[0.3em] uppercase text-white/70">
                Company Solutions
            </div>
        </div>
    </div>

    <!-- LOGIN CONTENT -->
    <div class="relative z-10 w-full sm:max-w-md px-6">

        {{ $slot }}

    </div>

</body>
</html>