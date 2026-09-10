<section class="relative bg-[#1C1917] text-[#F5F0E8] overflow-hidden">
    <!-- Animated gold/maroon barber-pole stripe accent along top edge -->
    <div class="h-2.5 w-full barber-pole-stripe-gold" aria-hidden="true"></div>

    <div class="relative py-20 lg:py-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <!-- Deep maroon atmospheric radial background lighting -->
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-[#7A1F2B]/40 via-transparent to-transparent pointer-events-none"></div>

        <div class="relative z-10 max-w-4xl mx-auto text-center" data-aos="fade-up">
            <!-- Eyebrow Tag -->
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-[#7A1F2B]/30 border border-[#C9A227]/40 mb-6">
                <span class="w-2 h-2 rounded-full bg-[#C9A227]"></span>
                <span class="text-xs uppercase font-bold tracking-widest text-[#C9A227]">Your Neighborhood Chair Is Waiting</span>
            </div>

            <!-- Main Headline -->
            <h2 class="font-heading font-extrabold text-3xl sm:text-4xl md:text-5xl text-[#F5F0E8] tracking-tight leading-tight">
                Ready for the Cleanest Cut in Town?
            </h2>

            <p class="mt-4 text-base sm:text-lg text-stone-300 font-sans max-w-2xl mx-auto leading-relaxed">
                Whether you need a fresh Friday lineup, a hot towel straight-razor shave, or a complete style revamp — step into Kuya Lito's chair and experience true neighborhood craftsmanship.
            </p>

            <!-- Three Action CTAs (Primary, Secondary, Tertiary) -->
            <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-5">
                <!-- 1. Primary Button: Book Your Next Cut -->
                <x-button variant="gold" size="lg" href="#booking-preview" class="w-full sm:w-auto shadow-xl">
                    <span class="text-[#1C1917] font-bold">Book Your Next Cut</span>
                    <svg class="w-5 h-5 ml-2 text-[#1C1917]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </x-button>

                <!-- 2. Secondary Button: Message Us on Facebook -->
                <x-button 
                    variant="primary" 
                    size="lg" 
                    href="https://facebook.com" 
                    target="_blank" 
                    rel="noopener noreferrer"
                    class="w-full sm:w-auto bg-[#7A1F2B] hover:bg-[#631721] border-[#C9A227]/40"
                >
                    <svg class="w-5 h-5 mr-2 text-[#F5F0E8]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                    <span>Message on Facebook</span>
                </x-button>

                <!-- 3. Tertiary CTA: Call the Shop (with phone icon) -->
                <a 
                    href="tel:+639171234567" 
                    class="inline-flex items-center gap-2 text-stone-300 hover:text-[#C9A227] font-medium text-sm transition-colors py-2 px-3 group"
                >
                    <span class="w-9 h-9 rounded-full bg-stone-800 flex items-center justify-center text-[#C9A227] group-hover:bg-[#C9A227] group-hover:text-[#1C1917] transition-all">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                    </span>
                    <span class="text-left">
                        <span class="block text-[10px] uppercase tracking-wider text-stone-400">Direct Hotline</span>
                        <span class="font-bold text-[#F5F0E8] group-hover:text-[#C9A227]">(02) 8631-LITO</span>
                    </span>
                </a>
            </div>

            <!-- Perks Bar -->
            <div class="mt-12 pt-8 border-t border-stone-800/80 grid grid-cols-1 sm:grid-cols-3 gap-4 text-xs text-stone-400">
                <div class="flex items-center justify-center gap-2">
                    <span class="text-[#C9A227] text-base">&#9733;</span>
                    <span>No Appointment Rush &bull; Walk-Ins Welcomed</span>
                </div>
                <div class="flex items-center justify-center gap-2">
                    <span class="text-[#C9A227] text-base">&#9733;</span>
                    <span>Fully Airconditioned Lounge & Cold Drinks</span>
                </div>
                <div class="flex items-center justify-center gap-2">
                    <span class="text-[#C9A227] text-base">&#9733;</span>
                    <span>Free High-Speed Wi-Fi for Waiting Guests</span>
                </div>
            </div>
        </div>
    </div>
</section>
