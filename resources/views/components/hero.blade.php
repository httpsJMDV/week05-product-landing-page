<section id="home" class="relative min-h-[90vh] flex items-center justify-center overflow-hidden bg-[#1C1917] text-[#F5F0E8] py-20 lg:py-28">
    <!-- Looping Muted Background Video Container -->
    <div class="absolute inset-0 w-full h-full overflow-hidden z-0 pointer-events-none">
        {{-- TODO: replace with AI-generated barbershop ambience clip (e.g. via Runway, Pika, or Sora) or real shop footage — 10-15s seamless loop, muted, dimmed with a dark overlay so hero text stays readable --}}
        <video 
            autoplay 
            muted 
            loop 
            playsinline 
            poster="{{ asset('assets/images/hero-poster.jpg') }}" 
            class="w-full h-full object-cover object-center scale-105 filter brightness-[0.45] contrast-110"
        >
            <source src="{{ asset('assets/video/hero-loop.mp4') }}" type="video/mp4">
            <!-- Fallback image for older browsers -->
            <img src="{{ asset('assets/images/hero-poster.jpg') }}" alt="Kuya Lito's Barbershop Ambience" class="w-full h-full object-cover opacity-40">
        </video>

        <!-- Deep atmospheric vignettes and gradient overlays to guarantee WCAG AA text contrast -->
        <div class="absolute inset-0 bg-gradient-to-b from-[#1C1917]/90 via-[#1C1917]/75 to-[#1C1917] z-10"></div>
        <div class="absolute inset-0 bg-[radial-gradient(#C9A227_1px,transparent_1px)] [background-size:24px_24px] opacity-10 z-10"></div>
        
        <!-- Subtle Barber Pole Accent Line on Right Edge of Hero -->
        <div class="absolute right-0 top-0 bottom-0 w-1 barber-pole-stripe opacity-40 hidden lg:block z-10"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-20 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center flex flex-col items-center">
        <!-- Eyebrow Badge -->
        <div class="hero-badge inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-[#1C1917]/80 border border-[#C9A227]/50 backdrop-blur-sm mb-6 shadow-md">
            <span class="w-2 h-2 rounded-full bg-[#C9A227] animate-pulse"></span>
            <span class="text-xs uppercase tracking-widest text-[#F5F0E8] font-semibold font-sans">
                Neighborhood Craftsmanship &bull; Est. 2014
            </span>
            <span class="text-xs px-1.5 py-0.5 rounded bg-[#7A1F2B] text-[#F5F0E8] font-bold">Manila</span>
        </div>

        <!-- 
            HEADLINE OPTIONS FOR CLIENT SELECTION:
            Option 1 (Active Default): "Sharp Cuts. Honest Prices. Real Barbers."
            Option 2 (Alternative): "Where Neighborhood Heritage Meets Modern Mastery."
            Option 3 (Alternative): "Crafting Confidence, One Hot Towel and Clean Fade at a Time."
        -->
        <h1 class="font-heading font-extrabold text-4xl sm:text-5xl md:text-6xl lg:text-7xl text-[#F5F0E8] tracking-tight leading-[1.12] max-w-4xl">
            <span class="hero-word inline-block">Sharp</span>
            <span class="hero-word inline-block text-[#C9A227]">Cuts.</span>
            <span class="hero-word inline-block">Honest</span>
            <span class="hero-word inline-block text-[#F5F0E8]">Prices.</span>
            <span class="hero-word inline-block text-[#7A1F2B] drop-shadow-[0_2px_12px_rgba(122,31,43,0.8)]">Real</span>
            <span class="hero-word inline-block text-[#F5F0E8]">Barbers.</span>
        </h1>

        <!-- Subheadline -->
        <p class="hero-subheadline mt-6 text-base sm:text-lg md:text-xl text-stone-300 font-sans max-w-2xl leading-relaxed font-normal">
            Step in for world-class scissor work, razor-sharp fades, and our legendary steaming hot towel finish. 
            Rooted in neighborhood trust and classic Filipino barber heritage — no appointment rush, walk-ins always welcome.
        </p>

        <!-- CTAs -->
        <div class="hero-cta-group mt-10 flex flex-col sm:flex-row items-center justify-center gap-4 w-full sm:w-auto">
            <x-button variant="primary" size="lg" href="#booking-preview" class="w-full sm:w-auto shadow-xl">
                <span>Book an Appointment</span>
                <svg class="w-5 h-5 ml-2 text-[#C9A227]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
            </x-button>

            <x-button variant="ghost-light" size="lg" href="#services" class="w-full sm:w-auto">
                <span>View Services & Rates</span>
                <svg class="w-4 h-4 ml-2 text-stone-400 group-hover:text-[#C9A227]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </x-button>
        </div>

        <!-- Trust Badges & Highlights Row -->
        <div class="hero-feature-pills mt-14 grid grid-cols-2 md:grid-cols-4 gap-3 sm:gap-4 w-full max-w-3xl pt-8 border-t border-stone-800/80">
            <div class="flex items-center justify-center sm:justify-start gap-2 text-stone-300 text-xs sm:text-sm">
                <span class="text-[#C9A227]">&#10003;</span>
                <span>Walk-Ins Welcome</span>
            </div>
            <div class="flex items-center justify-center sm:justify-start gap-2 text-stone-300 text-xs sm:text-sm">
                <span class="text-[#C9A227]">&#10003;</span>
                <span>Hot Towel Service</span>
            </div>
            <div class="flex items-center justify-center sm:justify-start gap-2 text-stone-300 text-xs sm:text-sm">
                <span class="text-[#C9A227]">&#10003;</span>
                <span>Sanitized Tools</span>
            </div>
            <div class="flex items-center justify-center sm:justify-start gap-2 text-stone-300 text-xs sm:text-sm">
                <span class="text-[#C9A227]">&#10003;</span>
                <span>Complimentary Brew</span>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Respect prefers-reduced-motion
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        if (window.gsap && !prefersReducedMotion) {
            const tl = gsap.timeline({ defaults: { ease: 'power3.out' } });
            
            tl.from('.hero-badge', {
                opacity: 0,
                y: -15,
                duration: 0.6,
                delay: 0.15
            })
            .from('.hero-word', {
                opacity: 0,
                y: 35,
                stagger: 0.1,
                duration: 0.75,
                ease: 'expo.out'
            }, '-=0.25')
            .from('.hero-subheadline', {
                opacity: 0,
                y: 20,
                duration: 0.7
            }, '-=0.35')
            .from('.hero-cta-group', {
                opacity: 0,
                y: 20,
                duration: 0.6
            }, '-=0.3')
            .from('.hero-feature-pills > div', {
                opacity: 0,
                y: 15,
                stagger: 0.08,
                duration: 0.5
            }, '-=0.2');
        }
    });
</script>
@endpush
