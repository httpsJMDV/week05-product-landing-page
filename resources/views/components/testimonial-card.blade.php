@props([
    'testimonials' => [
        [
            'name' => 'Jerome Santos',
            'role' => 'Regular Customer, 3 years',
            'rating' => 5,
            'avatar' => 'assets/images/avatar-1.jpg',
            'quote' => 'Kuya Lito has been cutting my hair since 2021. You will not find this level of razor precision anywhere else in Santa Cruz, Laguna. The hot towel eucalyptus finish after a taper fade is pure relaxation after a long work week.',
            'cut' => 'Signature Grooming Package'
        ],
        [
            'name' => 'Mark Anthony Reyes',
            'role' => 'Father & Son Regulars',
            'rating' => 5,
            'avatar' => 'assets/images/avatar-2.jpg',
            'quote' => 'Brought my 7-year-old son here for his first barbershop experience. The barbers were incredibly patient, made him laugh, and gave him the sharpest gentleman cut. Now Saturday chair visits are our family tradition.',
            'cut' => 'Kid-Friendly & Master Fade'
        ],
        [
            'name' => 'Danilo Ramos',
            'role' => 'First-Time Walk-In',
            'rating' => 5,
            'avatar' => 'assets/images/avatar-3.jpg',
            'quote' => 'I walked in without an appointment on a busy Friday night. Zero attitude, warm greeting, and Barber Jun took his time to understand my hair crown flow. Cleanest taper fade I have had in years. Found my permanent shop.',
            'cut' => 'Low Taper Fade & Lineup'
        ],
        [
            'name' => 'Christian Cruz',
            'role' => 'Loyalty Member, 2 years',
            'rating' => 5,
            'avatar' => 'assets/images/avatar-4.jpg',
            'quote' => 'Old-school barber pole heritage with the sanitation standards of a premier boutique clinic. Every blade is opened fresh in front of you. Top-tier craftsmanship and honest neighborhood pricing.',
            'cut' => 'VIP Experience & Beard Sculpt'
        ]
    ]
])

<div 
    x-data="{
        current: 0,
        total: {{ count($testimonials) }},
        autoplay: true,
        timer: null,
        start() {
            this.timer = setInterval(() => {
                if (this.autoplay) this.next();
            }, 6000);
        },
        stop() {
            clearInterval(this.timer);
        },
        next() {
            this.current = (this.current + 1) % this.total;
        },
        prev() {
            this.current = (this.current - 1 + this.total) % this.total;
        },
        goTo(index) {
            this.current = index;
        }
    }"
    x-init="start()"
    @mouseenter="autoplay = false"
    @mouseleave="autoplay = true"
    class="relative max-w-4xl mx-auto"
>
    <!-- Carousel Slides Container -->
    <div class="relative min-h-[380px] sm:min-h-[320px] flex items-center justify-center">
        @foreach ($testimonials as $index => $item)
            <div 
                x-show="current === {{ $index }}"
                x-cloak
                x-transition:enter="transition ease-out duration-500 transform"
                x-transition:enter-start="opacity-0 translate-y-4 scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                x-transition:leave="transition ease-in duration-300 transform absolute"
                x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                x-transition:leave-end="opacity-0 -translate-y-4 scale-95"
                class="w-full bg-[#ECE5D8] rounded-3xl p-6 sm:p-10 border border-stone-300/90 shadow-xl relative overflow-hidden"
            >
                <!-- Vintage Watermark Quote Mark -->
                <div class="absolute right-6 top-6 text-7xl font-serif text-[#7A1F2B]/10 select-none pointer-events-none font-bold">
                    &ldquo;
                </div>

                <div class="flex flex-col sm:flex-row items-center sm:items-start gap-6 sm:gap-8">
                    <!-- Customer Avatar with Gold Border -->
                    <div class="relative flex-shrink-0">
                        <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-2xl overflow-hidden ring-3 ring-[#C9A227] shadow-lg bg-stone-900">
                            <img src="{{ asset($item['avatar']) }}" alt="{{ $item['name'] }}" class="w-full h-full object-cover">
                        </div>
                        <span class="absolute -bottom-2 -right-1 bg-[#7A1F2B] text-[#F5F0E8] text-[10px] font-bold px-2 py-0.5 rounded-full border border-[#C9A227]">
                            Verified
                        </span>
                    </div>

                    <!-- Review Content -->
                    <div class="flex-1 text-center sm:text-left">
                        <!-- Star Ratings -->
                        <div class="flex items-center justify-center sm:justify-start gap-1 text-[#C9A227] mb-3">
                            @for ($i = 0; $i < $item['rating']; $i++)
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            @endfor
                        </div>

                        <!-- Quote -->
                        <blockquote class="text-base sm:text-lg text-stone-800 font-sans italic leading-relaxed mb-4">
                            &ldquo;{{ $item['quote'] }}&rdquo;
                        </blockquote>

                        <!-- Author Meta -->
                        <div class="pt-3 border-t border-stone-300/80 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                            <div>
                                <h4 class="font-heading font-bold text-lg text-[#1C1917]">{{ $item['name'] }}</h4>
                                <p class="text-xs font-medium text-stone-500">{{ $item['role'] }}</p>
                            </div>
                            <span class="inline-block text-xs font-mono font-semibold px-2.5 py-1 bg-stone-200 text-stone-700 rounded-md self-center sm:self-auto">
                                {{ $item['cut'] }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Navigation Controls & Indicators -->
    <div class="mt-8 flex items-center justify-between px-2">
        <!-- Prev Button -->
        <button 
            @click="prev()"
            type="button" 
            class="w-11 h-11 rounded-full bg-[#1C1917] hover:bg-[#7A1F2B] text-[#F5F0E8] hover:text-[#C9A227] flex items-center justify-center transition-all duration-200 shadow-md focus:outline-none focus:ring-2 focus:ring-[#C9A227]"
            aria-label="Previous testimonial"
        >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>

        <!-- Dot Indicators -->
        <div class="flex items-center gap-2">
            <template x-for="(item, idx) in total" :key="idx">
                <button 
                    @click="goTo(idx)"
                    type="button"
                    class="h-2.5 rounded-full transition-all duration-300 focus:outline-none"
                    :class="current === idx ? 'w-8 bg-[#C9A227]' : 'w-2.5 bg-stone-400 hover:bg-stone-500'"
                    :aria-label="'Go to review ' + (idx + 1)"
                >
                </button>
            </template>
        </div>

        <!-- Next Button -->
        <button 
            @click="next()"
            type="button" 
            class="w-11 h-11 rounded-full bg-[#1C1917] hover:bg-[#7A1F2B] text-[#F5F0E8] hover:text-[#C9A227] flex items-center justify-center transition-all duration-200 shadow-md focus:outline-none focus:ring-2 focus:ring-[#C9A227]"
            aria-label="Next testimonial"
        >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    </div>
</div>
