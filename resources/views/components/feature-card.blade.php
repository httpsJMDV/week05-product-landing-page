@props([
    'number' => null,
    'badge' => null,
    'title' => '',
    'description' => '',
    'dark' => false,
    'delay' => 0,
])

<div 
    class="group relative rounded-3xl p-7 sm:p-8 flex flex-col justify-between transition-all duration-500 overflow-hidden border {{
        $dark 
            ? 'bg-[#1C1917] text-[#F5F0E8] border-stone-800 shadow-xl hover:border-[#C9A227] hover:shadow-[0_20px_40px_-15px_rgba(201,162,39,0.3)]' 
            : 'bg-white/80 backdrop-blur-sm text-[#1C1917] border-stone-200/90 shadow-sm hover:border-[#C9A227] hover:shadow-[0_20px_40px_-15px_rgba(122,31,43,0.15)] hover:-translate-y-1.5'
    }}"
    data-aos="fade-up"
    data-aos-delay="{{ $delay }}"
>
    <!-- Subtle top gold glow accent -->
    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-[#C9A227] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

    <div>
        <!-- Card Top Bar: Icon + Numeral / Badge -->
        <div class="flex items-center justify-between mb-6">
            <div class="w-13 h-13 rounded-2xl flex items-center justify-center transition-all duration-300 shadow-sm {{
                $dark 
                    ? 'bg-stone-800/90 text-[#C9A227] group-hover:bg-[#7A1F2B] group-hover:text-[#F5F0E8] ring-1 ring-stone-700' 
                    : 'bg-[#1C1917] text-[#C9A227] group-hover:bg-[#7A1F2B] group-hover:text-[#F5F0E8]'
            }}">
                {{ $slot }}
            </div>

            <div class="flex items-center gap-2">
                @if ($badge)
                    <span class="text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-full {{
                        $dark 
                            ? 'bg-[#C9A227]/15 text-[#C9A227] border border-[#C9A227]/30' 
                            : 'bg-stone-100 text-stone-700 border border-stone-200'
                    }}">
                        {{ $badge }}
                    </span>
                @endif

                @if ($number)
                    <span class="font-display text-2xl font-bold tracking-wider {{ $dark ? 'text-stone-700 group-hover:text-stone-600' : 'text-stone-300 group-hover:text-stone-400' }} transition-colors select-none">
                        {{ $number }}
                    </span>
                @endif
            </div>
        </div>

        <!-- Title -->
        <h3 class="font-heading font-extrabold text-xl sm:text-2xl tracking-tight {{ $dark ? 'text-[#F5F0E8] group-hover:text-[#C9A227]' : 'text-[#1C1917] group-hover:text-[#7A1F2B]' }} transition-colors duration-200">
            {{ $title }}
        </h3>

        <!-- Description -->
        <p class="mt-3 text-sm sm:text-[15px] {{ $dark ? 'text-stone-400' : 'text-stone-600' }} font-sans leading-relaxed">
            {{ $description }}
        </p>
    </div>

    <!-- Bottom Indicator -->
    <div class="mt-8 pt-4 border-t {{ $dark ? 'border-stone-800' : 'border-stone-100' }} flex items-center justify-between text-xs font-semibold uppercase tracking-wider {{ $dark ? 'text-stone-400 group-hover:text-[#C9A227]' : 'text-stone-400 group-hover:text-[#7A1F2B]' }} transition-colors">
        <span>Chair Standard</span>
        <span class="transform group-hover:translate-x-1.5 transition-transform duration-300">&rarr;</span>
    </div>
</div>
