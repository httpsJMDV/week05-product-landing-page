<header 
    x-data="{ scrolled: false, mobileMenuOpen: false }"
    x-init="scrolled = (window.pageYOffset > 20)"
    @scroll.window="scrolled = (window.pageYOffset > 20)"
    :class="{ 'py-2.5 bg-[#F5F0E8]/95 backdrop-blur-md shadow-md border-b border-stone-300/80': scrolled, 'py-5 bg-[#F5F0E8]': !scrolled }"
    class="sticky top-0 z-50 transition-all duration-300 w-full"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">
            <!-- Brand / Logo -->
            <a href="#home" class="flex items-center gap-3 group focus:outline-none">
                <!-- Barber Pole Icon Mark -->
                <div class="w-9 h-9 rounded-lg bg-[#1C1917] p-1 flex items-center justify-center shadow-sm group-hover:ring-2 group-hover:ring-[#C9A227] transition-all">
                    <svg class="w-6 h-6 text-[#C9A227]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="6" cy="6" r="3"/>
                        <circle cx="6" cy="18" r="3"/>
                        <line x1="20" y1="4" x2="8.12" y2="15.88"/>
                        <line x1="14.47" y1="14.48" x2="20" y2="20"/>
                        <line x1="8.12" y1="8.12" x2="12" y2="12"/>
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="font-heading font-extrabold text-xl sm:text-2xl text-[#1C1917] tracking-tight group-hover:text-[#7A1F2B] transition-colors">
                        Kuya Lito's
                    </span>
                    <span class="font-display tracking-[0.25em] text-[10px] text-[#7A1F2B] font-bold uppercase -mt-1">
                        Barbershop &bull; Manila
                    </span>
                </div>
            </a>

            <!-- Desktop Navigation Links -->
            <nav class="hidden md:flex items-center space-x-1 lg:space-x-2">
                <a href="#home" class="px-3 py-2 text-sm font-medium text-[#1C1917] hover:text-[#7A1F2B] transition-colors relative group">
                    Home
                    <span class="absolute bottom-0 left-3 right-3 h-0.5 bg-[#C9A227] scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-200"></span>
                </a>
                <a href="#services" class="px-3 py-2 text-sm font-medium text-stone-700 hover:text-[#7A1F2B] transition-colors relative group">
                    Services
                    <span class="absolute bottom-0 left-3 right-3 h-0.5 bg-[#C9A227] scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-200"></span>
                </a>
                <a href="#gallery" class="px-3 py-2 text-sm font-medium text-stone-700 hover:text-[#7A1F2B] transition-colors relative group">
                    Showcase
                    <span class="absolute bottom-0 left-3 right-3 h-0.5 bg-[#C9A227] scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-200"></span>
                </a>
                <a href="#pricing" class="px-3 py-2 text-sm font-medium text-stone-700 hover:text-[#7A1F2B] transition-colors relative group">
                    Pricing
                    <span class="absolute bottom-0 left-3 right-3 h-0.5 bg-[#C9A227] scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-200"></span>
                </a>
                <a href="#testimonials" class="px-3 py-2 text-sm font-medium text-stone-700 hover:text-[#7A1F2B] transition-colors relative group">
                    Testimonials
                    <span class="absolute bottom-0 left-3 right-3 h-0.5 bg-[#C9A227] scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-200"></span>
                </a>
                <a href="#contact" class="px-3 py-2 text-sm font-medium text-stone-700 hover:text-[#7A1F2B] transition-colors relative group">
                    Contact
                    <span class="absolute bottom-0 left-3 right-3 h-0.5 bg-[#C9A227] scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-200"></span>
                </a>
            </nav>

            <!-- Desktop CTAs -->
            <div class="hidden md:flex items-center space-x-3">
                <!-- Loyalty Member Log In (Ghost button) -->
                <x-button variant="ghost" size="sm" href="#login" class="text-xs" title="Loyalty Member Login">
                    <svg class="w-4 h-4 mr-1.5 text-stone-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    Log In
                </x-button>

                <!-- Book Now Primary CTA -->
                <x-button variant="primary" size="sm" href="#booking-preview" class="shadow-sm">
                    <span>Book Now</span>
                    <svg class="w-3.5 h-3.5 ml-1 text-[#C9A227]" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </x-button>
            </div>

            <!-- Mobile Hamburger Button -->
            <div class="flex items-center md:hidden gap-2">
                <a href="#booking-preview" class="px-3 py-1.5 text-xs font-semibold uppercase bg-[#7A1F2B] text-[#F5F0E8] rounded-md shadow-sm">
                    Book
                </a>
                <button 
                    @click="mobileMenuOpen = !mobileMenuOpen"
                    type="button" 
                    class="p-2 rounded-lg text-[#1C1917] hover:bg-stone-200/60 focus:outline-none focus:ring-2 focus:ring-[#C9A227]"
                    aria-label="Toggle navigation menu"
                    :aria-expanded="mobileMenuOpen"
                >
                    <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="mobileMenuOpen" x-cloak class="w-6 h-6 text-[#7A1F2B]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Slide-In Drawer Backdrop -->
    <div 
        x-show="mobileMenuOpen" 
        x-cloak
        @click="mobileMenuOpen = false"
        x-transition:enter="transition-opacity ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-black/60 backdrop-blur-sm z-40 md:hidden"
    ></div>

    <!-- Mobile Slide-In Drawer Panel -->
    <div 
        x-show="mobileMenuOpen" 
        x-cloak
        x-transition:enter="transition ease-out duration-300 transform"
        x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in duration-200 transform"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
        class="fixed top-0 right-0 bottom-0 w-5/6 max-w-sm bg-[#1C1917] text-[#F5F0E8] z-50 p-6 flex flex-col justify-between shadow-2xl md:hidden overflow-y-auto"
    >
        <div>
            <div class="flex items-center justify-between pb-6 border-b border-stone-800">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded bg-[#7A1F2B] flex items-center justify-center">
                        <svg class="w-5 h-5 text-[#C9A227]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="6" cy="6" r="3"/>
                            <circle cx="6" cy="18" r="3"/>
                            <line x1="20" y1="4" x2="8.12" y2="15.88"/>
                            <line x1="14.47" y1="14.48" x2="20" y2="20"/>
                        </svg>
                    </div>
                    <span class="font-heading text-lg font-bold text-[#F5F0E8]">Kuya Lito's</span>
                </div>
                <button 
                    @click="mobileMenuOpen = false"
                    class="p-2 text-stone-400 hover:text-[#C9A227] focus:outline-none"
                    aria-label="Close menu"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <nav class="mt-6 flex flex-col space-y-4">
                <a @click="mobileMenuOpen = false" href="#home" class="text-lg font-medium text-stone-200 hover:text-[#C9A227] transition-colors py-2 border-b border-stone-800/60">
                    Home
                </a>
                <a @click="mobileMenuOpen = false" href="#services" class="text-lg font-medium text-stone-200 hover:text-[#C9A227] transition-colors py-2 border-b border-stone-800/60">
                    Services
                </a>
                <a @click="mobileMenuOpen = false" href="#gallery" class="text-lg font-medium text-stone-200 hover:text-[#C9A227] transition-colors py-2 border-b border-stone-800/60">
                    Showcase & Gallery
                </a>
                <a @click="mobileMenuOpen = false" href="#pricing" class="text-lg font-medium text-stone-200 hover:text-[#C9A227] transition-colors py-2 border-b border-stone-800/60">
                    Pricing Packages
                </a>
                <a @click="mobileMenuOpen = false" href="#testimonials" class="text-lg font-medium text-stone-200 hover:text-[#C9A227] transition-colors py-2 border-b border-stone-800/60">
                    Client Reviews
                </a>
                <a @click="mobileMenuOpen = false" href="#contact" class="text-lg font-medium text-stone-200 hover:text-[#C9A227] transition-colors py-2 border-b border-stone-800/60">
                    Contact & Hours
                </a>
            </nav>
        </div>

        <div class="pt-6 border-t border-stone-800 space-y-3">
            <x-button variant="primary" size="md" href="#booking-preview" @click="mobileMenuOpen = false" class="w-full justify-center">
                Book An Appointment
            </x-button>
            <x-button variant="ghost-light" size="md" href="#login" @click="mobileMenuOpen = false" class="w-full justify-center">
                Loyalty Member Log In
            </x-button>

            <div class="mt-4 pt-4 text-xs text-stone-400 text-center space-y-1">
                <p class="text-[#C9A227] font-semibold">Walk-ins Always Welcome!</p>
                <p>Mon - Sat: 9:00 AM - 7:00 PM</p>
                <p>Barangay San Antonio, Pasig City</p>
            </div>
        </div>
    </div>
</header>
