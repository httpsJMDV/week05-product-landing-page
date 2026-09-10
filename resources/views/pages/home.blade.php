@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <x-hero />

    <!-- Services / Features Section (6 Cards) -->
    <section id="services" class="py-20 lg:py-28 bg-[#F5F0E8] relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading 
                eyebrow="Master Craftsmanship" 
                title="Signature Services For The Modern Gentleman"
                description="We preserve the timeless heritage of traditional Filipino barbering while delivering modern precision styling, hygiene, and boutique relaxation."
            />

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <!-- Card 1: Expert Master Barbers -->
                <x-feature-card 
                    title="Expert Master Barbers" 
                    description="Our seasoned cutters bring decades of combined chair experience, blending classic heritage techniques with the sharpest contemporary fades."
                    delay="100"
                >
                    <!-- Scissor / Comb Icon -->
                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="6" cy="6" r="3"/>
                        <circle cx="6" cy="18" r="3"/>
                        <line x1="20" y1="4" x2="8.12" y2="15.88"/>
                        <line x1="14.47" y1="14.48" x2="20" y2="20"/>
                        <line x1="8.12" y1="8.12" x2="12" y2="12"/>
                    </svg>
                </x-feature-card>

                <!-- Card 2: Classic Hot Towel Shave -->
                <x-feature-card 
                    title="Classic Hot Towel Shave" 
                    description="Sink back for an authentic straight-razor shave prepared with aromatic essential oils, steamed eucalyptus towels, and soothing botanical balms."
                    delay="200"
                >
                    <!-- Straight Razor / Shave Icon -->
                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
                    </svg>
                </x-feature-card>

                <!-- Card 3: Walk-Ins Always Welcome -->
                <x-feature-card 
                    title="Walk-Ins Always Welcome" 
                    description="Never stress about rigid calendars. Pull up a chair, enjoy an ice-cold beverage, catch the game on TV, and soak in genuine neighborhood camaraderie."
                    delay="300"
                >
                    <!-- Door / Welcome Icon -->
                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 21h18M5 21V5a2 2 0 012-2h10a2 2 0 012 2v16M14 11h1"/>
                    </svg>
                </x-feature-card>

                <!-- Card 4: Kid-Friendly Cuts -->
                <x-feature-card 
                    title="Kid-Friendly Cuts" 
                    description="A calm, patient environment where young gentlemen get clean, handsome haircuts with gentle care, child boosters, and zero chair intimidation."
                    delay="150"
                >
                    <!-- Smile / Family Icon -->
                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M8 14s1.5 2 4 2 4-2 4-2"/>
                        <line x1="9" y1="9" x2="9.01" y2="9"/>
                        <line x1="15" y1="9" x2="15.01" y2="9"/>
                    </svg>
                </x-feature-card>

                <!-- Card 5: Sanitized, Grade-A Tools -->
                <x-feature-card 
                    title="Sanitized, Grade-A Tools" 
                    description="Hospital-grade barbicide immersion, medical-level UV sterilization cabinets, and fresh single-use razor blades opened directly in front of you."
                    delay="250"
                >
                    <!-- Shield / Hygiene Check Icon -->
                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        <path d="M9 12l2 2 4-4"/>
                    </svg>
                </x-feature-card>

                <!-- Card 6: Loyalty Rewards for Regulars -->
                <x-feature-card 
                    title="Loyalty Rewards Program" 
                    description="Earn digital stamps with every haircut toward complimentary grooming upgrades, anniversary sessions, and exclusive premium styling pomades."
                    delay="350"
                >
                    <!-- Gift / Badge Trophy Icon -->
                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-center max-w-6xl mx-auto pt-4">
                <!-- Tier 1: Basic Cut -->
                <x-pricing-card 
                    name="Basic Cut"
                    price="250"
                    duration="30 Mins"
                    description="Quick, sharp neighborhood haircut for gentlemen on the go."
                    :featured="false"
                    :features="[
                        'Precision Consultation & Scissors / Clippers Cut',
                        'Straight-Razor Neckline Lineup & Edging',
                        'Cooling Tonic Splash & Blow Dry Finish',
                        'Light Water-Based Pomade or Matte Wax Styling',
                        'Sanitized single-use razor blade guaranteed'
                    ]"
                    delay="100"
                />

                <!-- Tier 2: Signature Grooming (Most Popular, Elevated, Gold Accent) -->
                <x-pricing-card 
                    name="Signature Grooming"
                    price="450"
                    duration="55 Mins"
                    description="The ultimate client favorite: haircut, steaming shave, and scalp massage."
                    :featured="true"
                    badge="Most Booked"
                    :features="[
                        'Everything in the Basic Cut package',
                        'Signature Steamed Eucalyptus Hot Towel Treatment',
                        'Traditional Straight-Razor Beard or Cheek Lineup Shave',
                        'Soothing Post-Shave Aloe Balm & Alcohol-Free Toner',
                        'Relaxing 5-Minute Shoulder & Neck Tension Massage',
                        'Complimentary Cold Brew Coffee or Iced Tea'
                    ]"
                    delay="200"
                />

                <!-- Tier 3: VIP Experience -->
                <x-pricing-card 
                    name="VIP Lounge Experience"
                    price="750"
                    duration="80 Mins"
                    description="Full executive restoration package with priority chair booking."
                    :featured="false"
                    :features="[
                        'Master Barber Bespoke Haircut & Scissor Layering',
                        'Full Straight-Razor Hot & Cold Towel Double Shave',
                        'Deep Scalp Detox Wash & Conditioning Treatment',
                        'Facial Steam, Charcoal Clay Nose Strip & Moisturizer',
                        'Extended 15-Minute Head, Neck, & Arm Acupressure',
                        'Priority booking chair reservation & complimentary beverage'
                    ]"
                    delay="300"
                />
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
