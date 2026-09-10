@props([
    'title' => '',
    'description' => '',
    'delay' => 0,
])

<div 
    class="group relative bg-[#ECE5D8]/70 hover:bg-[#F5F0E8] p-6 sm:p-8 rounded-2xl border border-stone-300/70 hover:border-[#C9A227] shadow-sm hover:shadow-[0_15px_30px_-10px_rgba(201,162,39,0.25)] hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between overflow-hidden"
    data-aos="fade-up"
    data-aos-delay="{{ $delay }}"
>
    <!-- Top Accent Glow (Appears on hover) -->
    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-[#C9A227] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

    <div>
        <!-- Icon Container -->
        <div class="w-13 h-13 sm:w-14 sm:h-14 rounded-xl bg-[#1C1917] text-[#C9A227] flex items-center justify-center mb-6 shadow-md group-hover:bg-[#7A1F2B] group-hover:text-[#F5F0E8] transition-colors duration-300 ring-1 ring-stone-800">
            {{ $slot }}
        </div>

        <!-- Title -->
        <h3 class="font-heading font-bold text-xl sm:text-2xl text-[#1C1917] group-hover:text-[#7A1F2B] transition-colors duration-200">
            {{ $title }}
        </h3>

        <!-- Description -->
        <p class="mt-3 text-sm sm:text-base text-stone-600 font-sans leading-relaxed">
            {{ $description }}
        </p>
    </div>

    <!-- Bottom aesthetic cue -->
    <div class="mt-6 pt-4 border-t border-stone-300/40 flex items-center justify-between text-xs font-semibold text-stone-500 uppercase tracking-wider group-hover:text-[#C9A227] transition-colors">
        <span>Barbershop Standard</span>
        <span class="transform group-hover:translate-x-1 transition-transform duration-200">&rarr;</span>
    </div>
</div>
