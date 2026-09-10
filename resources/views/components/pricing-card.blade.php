@props([
    'name' => '',
    'price' => '',
    'duration' => '30 mins',
    'description' => '',
    'featured' => false,
    'features' => [],
    'badge' => null,
    'delay' => 0,
])

<div 
    class="relative rounded-3xl p-6 sm:p-8 flex flex-col justify-between transition-all duration-300 {{ 
        $featured 
            ? 'bg-[#231F1D] text-[#F5F0E8] border-2 border-[#C9A227] shadow-[0_20px_50px_-15px_rgba(201,162,39,0.35)] lg:-translate-y-2 lg:scale-105 z-10' 
            : 'bg-[#1C1917] text-[#F5F0E8] border border-stone-800/90 shadow-lg hover:border-stone-700'
    }}"
    data-aos="fade-up"
    data-aos-delay="{{ $delay }}"
>
    <!-- Featured Badge Floating on Top -->
    @if ($badge)
        <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 z-20">
            <span class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-gradient-to-r from-[#C9A227] to-[#E4C364] text-[#1C1917] shadow-md">
                <svg class="w-3 h-3 text-[#1C1917]" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                </svg>
                {{ $badge }}
            </span>
        </div>
    @endif

    <div>
        <!-- Card Header -->
        <div class="flex items-start justify-between">
            <div>
                <h3 class="font-heading font-extrabold text-2xl {{ $featured ? 'text-[#C9A227]' : 'text-[#F5F0E8]' }}">
                    {{ $name }}
                </h3>
                <p class="text-xs text-stone-400 mt-1 font-sans">{{ $description }}</p>
            </div>
            <span class="px-2.5 py-1 rounded-lg text-xs font-mono font-semibold {{ $featured ? 'bg-[#7A1F2B] text-[#F5F0E8]' : 'bg-stone-800 text-stone-300' }}">
                {{ $duration }}
            </span>
        </div>

        <!-- Pricing Tag -->
        <div class="mt-6 mb-6 pb-6 border-b border-stone-800 flex items-baseline gap-1.5">
            <span class="text-xl font-bold font-heading {{ $featured ? 'text-[#C9A227]' : 'text-stone-400' }}">₱</span>
            <span class="text-4xl sm:text-5xl font-extrabold font-heading tracking-tight text-[#F5F0E8]">{{ $price }}</span>
            <span class="text-xs text-stone-400 uppercase tracking-widest font-sans ml-1">/ session</span>
        </div>

        <!-- Features List -->
        <ul class="space-y-3.5 mb-8 text-sm text-stone-300">
            @foreach ($features as $feature)
                <li class="flex items-start gap-3">
                    <span class="flex-shrink-0 w-5 h-5 rounded-full {{ $featured ? 'bg-[#C9A227]/20 text-[#C9A227]' : 'bg-[#7A1F2B]/30 text-[#C9A227]' }} flex items-center justify-center text-xs mt-0.5 font-bold">
                        &#10003;
                    </span>
                    <span class="leading-relaxed">{{ $feature }}</span>
                </li>
            @endforeach
        </ul>
    </div>

    <!-- Booking CTA Button -->
    <div class="mt-auto pt-2">
        <x-button 
            :variant="$featured ? 'gold' : 'secondary'" 
            size="md" 
            href="#booking-preview" 
            class="w-full justify-center shadow-md {{ $featured ? 'text-[#1C1917] font-bold' : '' }}"
        >
            <span>Book This Package</span>
            <span class="ml-1.5">&rarr;</span>
        </x-button>
        <p class="text-center text-[11px] text-stone-400 mt-2.5">Walk-ins welcome &bull; Cash & GCash accepted</p>
    </div>
</div>
