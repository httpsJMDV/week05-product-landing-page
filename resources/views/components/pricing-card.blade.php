@props([
    'name' => '',
    'price' => '',
    'duration' => '30 mins',
    'description' => '',
    'featured' => false,
    'features' => [],
    'badge' => null,
    'image' => null,
    'delay' => 0,
])

<div 
    class="group relative rounded-3xl flex flex-col justify-between transition-all duration-500 overflow-hidden {{ 
        $featured 
            ? 'bg-[#241F1D] text-[#F5F0E8] border-2 border-[#C9A227] shadow-[0_25px_60px_-15px_rgba(201,162,39,0.3)] lg:-translate-y-4 lg:scale-105 z-20 ring-1 ring-[#C9A227]/50' 
            : 'bg-[#1D1A18] text-[#F5F0E8] border border-stone-800/90 shadow-xl hover:border-stone-700 hover:shadow-2xl hover:-translate-y-1 z-10'
    }}"
    data-aos="fade-up"
    data-aos-delay="{{ $delay }}"
>
    <!-- Top Barber Pole Accent for Featured Card -->
    @if ($featured)
        <div class="h-2 w-full barber-pole-stripe-gold" aria-hidden="true"></div>
    @endif

    <!-- Card Photo Header Banner -->
    @if ($image)
        <div class="relative h-44 sm:h-48 w-full overflow-hidden bg-stone-900">
            <img 
                src="{{ asset($image) }}" 
                alt="{{ $name }}" 
                class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110 filter brightness-[0.85] contrast-105"
            >
            <!-- Atmospheric Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-t from-[#241F1D] via-[#241F1D]/40 to-transparent"></div>

            <!-- Floating Top Badges -->
            <div class="absolute top-4 left-4 right-4 flex items-center justify-between">
                @if ($badge)
                    <span class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full text-[11px] font-extrabold uppercase tracking-widest bg-gradient-to-r from-[#C9A227] via-[#E4C364] to-[#C9A227] text-[#1C1917] shadow-lg border border-[#C9A227]">
                        ★ {{ $badge }}
                    </span>
                @else
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-black/60 backdrop-blur-md text-stone-300 border border-stone-700">
                        Craft Package
                    </span>
                @endif

                <!-- Duration Pill -->
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-mono font-semibold bg-black/70 backdrop-blur-md text-[#F5F0E8] border border-stone-700/80">
                    <svg class="w-3.5 h-3.5 text-[#C9A227]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10" stroke-width="2"/>
                        <polyline points="12 6 12 12 16 14" stroke-width="2"/>
                    </svg>
                    <span>{{ $duration }}</span>
                </span>
            </div>

            <!-- Bottom of Image: Price Callout Overlay -->
            <div class="absolute bottom-3 left-6 right-6 flex items-baseline justify-between">
                <div class="flex items-baseline gap-1">
                    <span class="text-xl font-bold font-heading {{ $featured ? 'text-[#C9A227]' : 'text-stone-300' }}">₱</span>
                    <span class="text-4xl sm:text-5xl font-extrabold font-heading tracking-tight text-[#F5F0E8] drop-shadow-md">{{ $price }}</span>
                    <span class="text-xs text-stone-300 uppercase tracking-widest font-sans ml-1">/ cut</span>
                </div>
                <span class="text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded bg-[#7A1F2B] text-[#F5F0E8]">
                    Net Price
                </span>
            </div>
        </div>
    @endif

    <!-- Card Body Content -->
    <div class="p-6 sm:p-8 flex flex-col justify-between flex-1">
        <div>
            <!-- Title & Description -->
            <div class="mb-5">
                <h3 class="font-heading font-extrabold text-2xl text-[#F5F0E8] group-hover:text-[#C9A227] transition-colors">
                    {{ $name }}
                </h3>
                <p class="text-xs sm:text-sm text-stone-400 mt-1.5 font-sans leading-relaxed">
                    {{ $description }}
                </p>
            </div>

            <!-- Divider with subtle gold dot -->
            <div class="h-px w-full bg-stone-800 mb-6 flex items-center justify-center">
                <span class="w-1.5 h-1.5 rounded-full {{ $featured ? 'bg-[#C9A227]' : 'bg-stone-700' }}"></span>
            </div>

            <!-- Features List -->
            <ul class="space-y-3 mb-8 text-xs sm:text-sm text-stone-300">
                @foreach ($features as $feature)
                    <li class="flex items-start gap-3">
                        <span class="flex-shrink-0 w-5 h-5 rounded-full {{ $featured ? 'bg-[#C9A227]/20 text-[#C9A227] ring-1 ring-[#C9A227]/40' : 'bg-[#7A1F2B]/30 text-[#C9A227]' }} flex items-center justify-center text-xs mt-0.5 font-bold">
                            &#10003;
                        </span>
                        <span class="leading-relaxed">{{ $feature }}</span>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Booking CTA Button at Bottom -->
        <div class="pt-4 border-t border-stone-800/80 mt-auto">
            <x-button 
                :variant="$featured ? 'gold' : 'secondary'" 
                size="md" 
                href="#booking-preview" 
                class="w-full justify-center shadow-lg font-bold tracking-wider {{ $featured ? 'text-[#1C1917] hover:shadow-[0_15px_30px_rgba(201,162,39,0.4)]' : 'hover:border-[#C9A227]' }}"
            >
                <span>Book This Package</span>
                <span class="ml-2">&rarr;</span>
            </x-button>

            <div class="flex items-center justify-between text-[11px] text-stone-400 mt-3 px-1">
                <span>Walk-ins welcome</span>
                <span class="text-stone-600">&bull;</span>
                <span>GCash & Cash</span>
            </div>
        </div>
    </div>
</div>
