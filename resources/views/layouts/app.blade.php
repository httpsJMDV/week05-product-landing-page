<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kuya Lito's Barbershop - Classic craftsmanship meets modern premium grooming in your neighborhood. Walk-ins welcome, master barbers, hot towel shaves.">
    <meta name="theme-color" content="#7A1F2B">

    <title>{{ $title ?? "Kuya Lito's Barbershop | Classic Craftsmanship & Modern Grooming Lounge" }}</title>

    <!-- Google Fonts Preconnect & Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>💈</text></svg>">

    <!-- Vite Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>
<body class="bg-[#F5F0E8] text-[#1C1917] font-sans antialiased selection:bg-[#7A1F2B] selection:text-[#F5F0E8] flex flex-col min-h-screen">
    <!-- Subtle barber-pole animated stripe accent at top of site -->
    <div class="h-1.5 w-full barber-pole-stripe" aria-hidden="true"></div>

    <!-- Navigation -->
    <x-navbar />

    <!-- Main Content Slot -->
    <main class="flex-grow">
        {{ $slot ?? '' }}
        @yield('content')
    </main>

    <!-- Footer -->
    <x-footer />

    @stack('scripts')
</body>
</html>
