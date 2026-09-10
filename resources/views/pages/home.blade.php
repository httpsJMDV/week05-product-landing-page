@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <x-hero />

    <!-- Services / Features Section (Modern Professional Bento Grid) -->
    <section id="services" class="py-24 lg:py-32 bg-[#F5F0E8] relative overflow-hidden">
        <!-- Ambient atmospheric glow -->
        <div class="absolute top-1/4 left-1/2 -translate-x-1/2 w-[800px] h-[400px] bg-[#C9A227]/5 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Modern Section Header -->
            <x-section-heading 
                eyebrow="Master Craftsmanship" 
                title="Signature Services For The Modern Gentleman"
                description="We preserve the timeless heritage of traditional Filipino barbering while delivering modern precision styling, hygiene, and boutique relaxation."
            />

            <!-- Professional Modern Bento Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 sm:gap-8">
                
                <!-- Bento Card 1: Expert Master Barbers (7 Cols on LG - Featured Hero Card) -->
                <div 
                    class="lg:col-span-7 bg-white/90 backdrop-blur-md rounded-3xl p-6 sm:p-8 lg:p-10 border border-stone-200/90 shadow-sm hover:shadow-xl hover:border-[#C9A227] transition-all duration-500 flex flex-col justify-between group overflow-hidden relative"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >
                    <!-- Top Gold Accent -->
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-[#C9A227] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                    <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 items-center">
                        <div class="sm:col-span-7 space-y-4">
                            <div class="flex items-center gap-2">
                                <span class="text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-full bg-[#7A1F2B]/10 text-[#7A1F2B] border border-[#7A1F2B]/20">
                                    01 &bull; Heritage Craft
                                </span>
                                <span class="text-xs font-mono font-semibold text-stone-400">10+ Years Chairs Active</span>
                            </div>

                            <h3 class="font-heading font-extrabold text-2xl sm:text-3xl text-[#1C1917] group-hover:text-[#7A1F2B] transition-colors leading-tight">
                                Expert Master Barbers
                            </h3>

                            <p class="text-sm sm:text-base text-stone-600 font-sans leading-relaxed">
                                Our seasoned cutters bring decades of combined chair experience, blending classic heritage techniques with the sharpest contemporary fades and personalized crown-growth consultations.
                            </p>

                            <div class="pt-2 flex flex-wrap gap-2 text-xs font-semibold text-stone-700">
                                <span class="px-2.5 py-1 bg-stone-100 rounded-lg border border-stone-200">&#10003; Scissor-Over-Comb Mastery</span>
                                <span class="px-2.5 py-1 bg-stone-100 rounded-lg border border-stone-200">&#10003; Razor-Edged Lineups</span>
                            </div>
                        </div>

                        <!-- Barber Portrait Snippet -->
                        <div class="sm:col-span-5 relative">
                            <div class="relative rounded-2xl overflow-hidden aspect-[4/5] shadow-md border-2 border-stone-200 group-hover:border-[#C9A227] transition-all">
                                <img 
                                    src="{{ asset('assets/images/barber-lito.jpg') }}" 
                                    alt="Kuya Lito Master Barber" 
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                >
                                <div class="absolute inset-0 bg-gradient-to-t from-[#1C1917]/90 via-transparent to-transparent"></div>
                                <div class="absolute bottom-3 left-3 right-3 text-left">
                                    <span class="text-[11px] font-bold text-[#F5F0E8] block font-heading">Kuya Lito & Team</span>
                                    <span class="text-[10px] text-[#C9A227] block">Master Cutters on Duty</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 pt-4 border-t border-stone-100 flex items-center justify-between text-xs font-bold uppercase tracking-wider text-[#7A1F2B]">
                        <span>Meet Our Barbers in Action</span>
                        <a href="#booking-preview" class="hover:underline flex items-center gap-1">Reserve Preferred Barber &rarr;</a>
                    </div>
                </div>

                <!-- Bento Card 2: Classic Hot Towel Shave (5 Cols on LG - Dark Luxury Card) -->
                <div 
                    class="lg:col-span-5 bg-[#1C1917] rounded-3xl p-6 sm:p-8 lg:p-10 border border-stone-800 shadow-xl hover:border-[#C9A227] hover:shadow-[0_20px_40px_-15px_rgba(201,162,39,0.3)] transition-all duration-500 flex flex-col justify-between group overflow-hidden relative"
                    data-aos="fade-up"
                    data-aos-delay="200"
                >
                    <!-- Background Photo with Atmospheric Vignette -->
                    <div class="absolute inset-0 z-0">
                        <img 
                            src="{{ asset('assets/images/gallery-4.jpg') }}" 
                            alt="Hot towel shave in action" 
                            class="w-full h-full object-cover opacity-25 filter brightness-75 group-hover:scale-105 transition-transform duration-700"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-[#1C1917] via-[#1C1917]/90 to-[#1C1917]/80"></div>
                    </div>

                    <div class="relative z-10 space-y-4">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-full bg-[#C9A227]/20 text-[#C9A227] border border-[#C9A227]/40">
                                02 &bull; Signature Ritual
                            </span>
                            <div class="w-10 h-10 rounded-xl bg-[#7A1F2B] text-[#C9A227] flex items-center justify-center shadow-md">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
                                </svg>
                            </div>
                        </div>

                        <h3 class="font-heading font-extrabold text-2xl sm:text-3xl text-[#F5F0E8] group-hover:text-[#C9A227] transition-colors leading-tight">
                            Classic Hot Towel Shave
                        </h3>

                        <p class="text-sm sm:text-base text-stone-300 font-sans leading-relaxed">
                            Sink back for an authentic straight-razor shave prepared with aromatic essential oils, steamed eucalyptus towels, and soothing botanical balms.
                        </p>

                        <ul class="space-y-2 text-xs text-stone-300 pt-2">
                            <li class="flex items-center gap-2">
                                <span class="text-[#C9A227] font-bold">&#10003;</span>
                                <span>Steamed aromatic eucalyptus towels</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-[#C9A227] font-bold">&#10003;</span>
                                <span>Single-use straight razor glide</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-[#C9A227] font-bold">&#10003;</span>
                                <span>Cooling aloe post-shave skin therapy</span>
                            </li>
                        </ul>
                    </div>

                    <div class="relative z-10 mt-8 pt-4 border-t border-stone-800 flex items-center justify-between text-xs font-bold uppercase tracking-wider text-[#C9A227]">
                        <span>Included in Signature Package</span>
                        <span class="group-hover:translate-x-1.5 transition-transform duration-300">&rarr;</span>
                    </div>
                </div>

                <!-- Bento Row 2: Four Balanced Cards (Cols 3 each on LG) -->
                
                <!-- Card 3: Walk-Ins Always Welcome -->
                <div class="lg:col-span-3">
                    <x-feature-card 
                        number="03"
                        badge="No Rush"
                        title="Walk-Ins Welcome" 
                        description="Never worry about rigid calendars. Pull up a chair, grab a cold drink, and enjoy authentic neighborhood banter."
                        delay="150"
                    >
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 21h18M5 21V5a2 2 0 012-2h10a2 2 0 012 2v16M14 11h1"/>
                        </svg>
                    </x-feature-card>
                </div>

                <!-- Card 4: Kid-Friendly Cuts -->
                <div class="lg:col-span-3">
                    <x-feature-card 
                        number="04"
                        badge="All Ages"
                        title="Kid-Friendly Cuts" 
                        description="A calm, patient environment where young gentlemen get clean, handsome haircuts with gentle care and zero stress."
                        delay="250"
                    >
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M8 14s1.5 2 4 2 4-2 4-2"/>
                            <line x1="9" y1="9" x2="9.01" y2="9"/>
                            <line x1="15" y1="9" x2="15.01" y2="9"/>
                        </svg>
                    </x-feature-card>
                </div>

                <!-- Card 5: Sanitized Tools -->
                <div class="lg:col-span-3">
                    <x-feature-card 
                        number="05"
                        badge="Hospital Grade"
                        title="Sanitized Tools" 
                        description="Hospital-grade Barbicide immersion, UV cabinets, and fresh single-use razor blades opened right before your eyes."
                        delay="350"
                    >
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            <path d="M9 12l2 2 4-4"/>
                        </svg>
                    </x-feature-card>
                </div>

                <!-- Card 6: Loyalty Rewards -->
                <div class="lg:col-span-3">
                    <x-feature-card 
                        number="06"
                        badge="Digital Perks"
                        title="Loyalty Rewards" 
                        description="Earn stamps toward complimentary grooming services, anniversary upgrades, and exclusive styling pomades."
                        delay="450"
                    >
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 9H4.5a2.5 2.5 0 010-5H6"/>
                            <path d="M18 9h1.5a2.5 2.5 0 000-5H18"/>
                            <path d="M4 22h16"/>
                            <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"/>
                            <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"/>
                            <path d="M18 2H6v7a6 6 0 0012 0V2z"/>
                        </svg>
                    </x-feature-card>
                </div>

            </div>
        </div>
    </section>

    <!-- Gallery & Showcase Section -->
    <x-gallery-showcase />

    <!-- Pricing Packages Section (3 Tiers) -->
    <section id="pricing" class="py-20 lg:py-28 bg-[#1C1917] text-[#F5F0E8] relative overflow-hidden">
        <!-- Subtle leather / texture cues -->
        <div class="absolute inset-0 bg-leather-pattern opacity-40 pointer-events-none"></div>
        <div class="absolute -top-20 -right-20 w-80 h-80 bg-[#C9A227]/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-[#7A1F2B]/15 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <x-section-heading 
                eyebrow="Transparent Rates" 
                title="Craft Grooming Packages"
                description="Straightforward pricing with no hidden charges. Every package comes with neck cleanup, hot lather razor edging, and artisan pomade styling."
                :dark="true"
            />

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch max-w-6xl mx-auto pt-6">
                <!-- Tier 1: Basic Cut -->
                <x-pricing-card 
                    name="Basic Cut"
                    price="250"
                    duration="30 Mins"
                    description="Quick, razor-sharp neighborhood haircut tailored to your head shape and lifestyle."
                    image="assets/images/gallery-1.jpg"
                    :featured="false"
                    :features="[
                        'Bespoke consultation & master clipper / scissor cut',
                        'Straight-razor neckline cleanup & crisp edging',
                        'Cooling botanical tonic splash & blow dry finish',
                        'Light water-based pomade or matte wax styling',
                        'Sanitized single-use razor blade guaranteed'
                    ]"
                    delay="100"
                />

                <!-- Tier 2: Signature Grooming (Most Popular, Elevated, Gold Accent) -->
                <x-pricing-card 
                    name="Signature Grooming"
                    price="450"
                    duration="55 Mins"
                    description="Our celebrated chair favorite: full precision cut, steaming shave, and soothing scalp relaxation."
                    image="assets/images/gallery-4.jpg"
                    :featured="true"
                    badge="Most Booked"
                    :features="[
                        'Everything in the Basic Cut package',
                        'Steamed eucalyptus aromatic hot towel therapy',
                        'Traditional straight-razor cheek & beard lineup shave',
                        'Soothing post-shave aloe balm & alcohol-free toner',
                        'Relaxing 5-minute shoulder & neck tension acupressure',
                        'Complimentary iced brew or refreshment'
                    ]"
                    delay="200"
                />

                <!-- Tier 3: VIP Experience -->
                <x-pricing-card 
                    name="VIP Lounge Experience"
                    price="750"
                    duration="80 Mins"
                    description="Complete head-to-shoulder executive restoration package with priority chair booking."
                    image="assets/images/gallery-5.jpg"
                    :featured="false"
                    :features="[
                        'Master Barber bespoke haircut & textured scissor layering',
                        'Full straight-razor double hot & cold towel shave',
                        'Deep scalp detox wash & revitalizing conditioning treatment',
                        'Facial steam, clay pore treatment & hydrating moisturizer',
                        'Extended 15-minute head, neck & arm acupressure massage',
                        'Guaranteed priority chair reservation & beverage of choice'
                    ]"
                    delay="300"
                />
            </div>

            <!-- Guarantee & Transparency Banner -->
            <div class="mt-14 max-w-5xl mx-auto rounded-3xl bg-stone-900/90 border border-stone-800 p-6 sm:p-8 flex flex-col md:flex-row items-center justify-between gap-6 shadow-2xl relative overflow-hidden" data-aos="fade-up">
                <div class="flex items-center gap-4 text-left">
                    <div class="w-12 h-12 rounded-2xl bg-[#7A1F2B] text-[#C9A227] flex items-center justify-center text-xl font-bold flex-shrink-0 shadow-md">
                        💈
                    </div>
                    <div>
                        <h4 class="font-heading font-extrabold text-base sm:text-lg text-[#F5F0E8]">Every Package Includes Full Finishing Service</h4>
                        <p class="text-xs sm:text-sm text-stone-400 font-sans mt-0.5">Straight-razor neck taper, warm lather shave, cooling botanical tonic, and artisan pomade styling.</p>
                    </div>
                </div>
                <div class="flex flex-wrap items-center justify-center sm:justify-end gap-4 text-xs font-semibold text-stone-300 flex-shrink-0 pt-2 md:pt-0 border-t md:border-t-0 border-stone-800 w-full md:w-auto">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-stone-800 text-stone-200 border border-stone-700">
                        <strong class="text-[#C9A227]">&#10003;</strong> No Hidden Charges
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-stone-800 text-stone-200 border border-stone-700">
                        <strong class="text-[#C9A227]">&#10003;</strong> GCash / Maya / Cash
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-stone-800 text-[#C9A227] border border-[#C9A227]/30">
                        <strong>10% OFF</strong> Senior & Student Weekday Mornings
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section (Alpine Carousel) -->
    <section id="testimonials" class="py-20 lg:py-28 bg-[#F5F0E8] relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading 
                eyebrow="Neighborhood Trust" 
                title="What The Regulars Say"
                description="Over a decade of chair conversations, sharp fades, and loyal friendships built right here in our community."
            />

            <!-- Alpine Testimonial Carousel -->
            <x-testimonial-card />
        </div>
    </section>

    <!-- High-Impact CTA Band with Animated Barber Pole Stripe -->
    <x-cta-section />
@endsection
