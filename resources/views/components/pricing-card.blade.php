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
    class="group relative rounded-3xl p-7 sm:p-9 flex flex-col justify-between transition-all duration-500 overflow-hidden {{ 
        $featured 
            ? 'bg-gradient-to-b from-[#251F1D] to-[#1C1917] text-[#F5F0E8] border-2 border-[#C9A227] shadow-[0_25px_60px_-15px_rgba(201,162,39,0.35)] lg:-translate-y-4 lg:scale-105 z-20 ring-1 ring-[#C9A227]/40' 
            : 'bg-[#181615] text-[#F5F0E8] border border-stone-800/90 shadow-xl hover:border-stone-700 hover:shadow-2xl hover:-translate-y-1'
    }}"
    data-aos="fade-up"
    data-aos-delay="{{ $delay }}"
>
    <!-- Top Barber Stripe Accent for Featured Card -->
    @if ($featured)
        <div class="absolute top-0 left-0 right-0 h-1.5 barber-pole-stripe-gold"></div>
    @else
        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-stone-700/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
    @endif

    <!-- Floating Pill Badge on Top -->
    @if ($badge)
        <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 z-30">
            <span class="inline-flex items-center gap-1.5 px-4 py-1 rounded-full text-xs font-extrabold uppercase tracking-widest bg-gradient-to-r from-[#C9A227] via-[#E4C364] to-[#C9A227] text-[#1C1917] shadow-lg border border-[#C9A227]">
                <svg class="w-3.5 h-3.5 text-[#1C1917]" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                </svg>
                {{ $badge }}
            </span>
        </div>
    @endif

    <div>
        <!-- Package Header & Optional Thumbnail -->
        <div class="flex items-start justify-between gap-4">
            <div>
                <span class="text-[10px] font-bold uppercase tracking-widest block mb-1 {{ $featured ? 'text-[#C9A227]' : 'text-stone-400' }}">
                    {{ $featured ? 'Signature Experience' : 'Grooming Tier' }}
                </span>
                <h3 class="font-heading font-extrabold text-2xl sm:text-3xl tracking-tight {{ $featured ? 'text-[#F5F0E8]' : 'text-[#F5F0E8]' }}">
                    {{ $name }}
                </h3>
                <p class="text-xs sm:text-sm text-stone-400 mt-1.5 font-sans leading-relaxed">
                    {{ $description }}
                </p>
            </div>

            @if ($image)
                <div class="w-14 h-14 rounded-2xl overflow-hidden flex-shrink-0 border border-stone-700 shadow-md">
                    <img src="{{ asset($image) }}" alt="{{ $name }}" class="w-full h-full object-cover">
                </div>
            @endif
        </div>

        <!-- Duration Pill -->
        <div class="mt-4 inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-mono font-semibold {{ $featured ? 'bg-[#7A1F2B] text-[#F5F0E8] border border-[#C9A227]/40' : 'bg-stone-800/80 text-stone-300 border border-stone-700' }}">
            <svg class="w-3.5 h-3.5 {{ $featured ? 'text-[#C9A227]' : 'text-stone-400' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10" stroke-width="2"/>
                <polyline points="12 6 12 12 16 14" stroke-width="2"/>
            </svg>
            <span>{{ $duration }}</span>
        </div>

        <!-- Price Display -->
        <div class="mt-6 mb-6 pb-6 border-b border-stone-800/80 flex items-baseline gap-1.5">
            <span class="text-2xl font-bold font-heading {{ $featured ? 'text-[#C9A227]' : 'text-stone-400' }}">₱</span>
            <span class="text-5xl sm:text-6xl font-extrabold font-heading tracking-tight text-[#F5F0E8]">{{ $price }}</span>
            <div class="ml-2 flex flex-col text-left">
                <span class="text-xs text-stone-400 uppercase tracking-wider font-semibold">Net Price</span>
                <span class="text-[10px] text-stone-400">no extra taxes</span>
            </div>
        </div>

        <!-- Feature List with Gold Checkmarks -->
        <ul class="space-y-3.5 mb-8 text-xs sm:text-sm text-stone-300">
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

    <!-- Booking CTA Button -->
    <div class="mt-auto pt-4 border-t border-stone-800/60">
        <x-button 
            :variant="$featured ? 'gold' : 'secondary'" 
            size="lg" 
            href="#booking-preview" 
            class="w-full justify-center shadow-lg font-bold tracking-wider {{ $featured ? 'text-[#1C1917] hover:shadow-[0_15px_30px_rgba(201,162,39,0.4)]' : 'hover:border-[#C9A227]' }}"
        >
            <span>Book This Package</span>
            <span class="ml-2">&rarr;</span>
        </x-button>

        <div class="flex items-center justify-between text-[11px] text-stone-400 mt-3 px-1">
            <span>Walk-ins welcome</span>
            <span class="text-stone-400">&bull;</span>
            <span>GCash / Cash / Maya</span>
        </div>
    </div>
</div>
