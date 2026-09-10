<section id="gallery" class="py-20 lg:py-28 bg-[#F5F0E8] relative overflow-hidden">
    <!-- Subtle background embellishment -->
    <div class="absolute top-0 right-1/4 w-96 h-96 bg-[#C9A227]/5 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-0 left-10 w-80 h-80 bg-[#7A1F2B]/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Section Header -->
        <x-section-heading 
            eyebrow="Craftsmanship Showcase" 
            title="The Chair Experience: Precision in Every Stroke"
            description="From master fades to straight-razor lines, witness the artistry that built our neighborhood reputation over a decade."
        />

        <!-- 4 Key Highlight Stat Callouts -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-16 sm:mb-20">
            <div class="bg-[#ECE5D8]/80 p-6 rounded-2xl border border-stone-300/80 text-center shadow-sm" data-aos="fade-up" data-aos-delay="50">
                <div class="text-3xl sm:text-4xl font-extrabold font-heading text-[#7A1F2B]">500+</div>
                <div class="font-display tracking-widest text-sm text-[#1C1917] mt-1 uppercase">Happy Clients</div>
                <p class="text-xs text-stone-500 mt-1">Loyal regulars returning every 2-3 weeks</p>
            </div>

            <div class="bg-[#ECE5D8]/80 p-6 rounded-2xl border border-stone-300/80 text-center shadow-sm" data-aos="fade-up" data-aos-delay="100">
                <div class="text-3xl sm:text-4xl font-extrabold font-heading text-[#C9A227]">10+</div>
                <div class="font-display tracking-widest text-sm text-[#1C1917] mt-1 uppercase">Years In Service</div>
                <p class="text-xs text-stone-500 mt-1">Serving our neighborhood since 2014</p>
            </div>

            <div class="bg-[#ECE5D8]/80 p-6 rounded-2xl border border-stone-300/80 text-center shadow-sm" data-aos="fade-up" data-aos-delay="150">
                <div class="text-3xl sm:text-4xl font-extrabold font-heading text-[#7A1F2B]">4.9★</div>
                <div class="font-display tracking-widest text-sm text-[#1C1917] mt-1 uppercase">Google Rating</div>
                <p class="text-xs text-stone-500 mt-1">Over 380 verified 5-star customer reviews</p>
            </div>

            <div class="bg-[#ECE5D8]/80 p-6 rounded-2xl border border-stone-300/80 text-center shadow-sm" data-aos="fade-up" data-aos-delay="200">
                <div class="text-3xl sm:text-4xl font-extrabold font-heading text-[#C9A227]">100%</div>
                <div class="font-display tracking-widest text-sm text-[#1C1917] mt-1 uppercase">Sanitized Tools</div>
                <p class="text-xs text-stone-500 mt-1">Barbicide & single-use blades for every cut</p>
            </div>
        </div>

        <!-- Haircut Transformation Grid (8 Styles) -->
        <div class="mb-20">
            <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-8">
                <div>
                    <h3 class="font-heading font-bold text-2xl sm:text-3xl text-[#1C1917]">Recent Chair Cuts</h3>
                    <p class="text-sm text-stone-600 font-sans mt-1">Hover over cuts to inspect taper precision, beard sculpting, and texture</p>
                </div>
                <div class="mt-3 sm:mt-0 inline-flex items-center gap-2 text-xs font-semibold text-[#7A1F2B] uppercase tracking-wider">
                    <span>Authentic Barber Portfolio</span>
                    <span class="w-2 h-2 rounded-full bg-[#7A1F2B]"></span>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $cuts = [
                        ['id' => 1, 'title' => 'Low Taper Fade', 'cat' => 'Signature Fade', 'tag' => 'Before / After Clean Up'],
                        ['id' => 2, 'title' => 'Classic Pompadour', 'cat' => 'Heritage Cut', 'tag' => 'Matte Clay Finish'],
                        ['id' => 3, 'title' => 'Textured Crop', 'cat' => 'Modern Fade', 'tag' => 'Blunt Fringe Detail'],
                        ['id' => 4, 'title' => 'Hot Towel Beard Shave', 'cat' => 'Straight Razor', 'tag' => 'Eucalyptus Steamed'],
                        ['id' => 5, 'title' => 'Executive Side Part', 'cat' => 'Gentleman', 'tag' => 'Razor-Etched Part'],
                        ['id' => 6, 'title' => 'Clean Buzz & Lineup', 'cat' => 'Precision Cut', 'tag' => 'Geometric Edge'],
                        ['id' => 7, 'title' => 'Scissor Quiff Flow', 'cat' => 'Artisan Scissor', 'tag' => 'Natural Crown Fall'],
                        ['id' => 8, 'title' => 'Beard Sculpt & Shape', 'cat' => 'Beard Care', 'tag' => 'Hot Balm Conditioned']
                    ];
                @endphp

                @foreach ($cuts as $index => $cut)
                    <div 
                        class="group relative bg-[#1C1917] rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500 border border-stone-800 flex flex-col"
                        data-aos="zoom-in"
                        data-aos-delay="{{ ($index % 4) * 100 }}"
                    >
                        <div class="relative aspect-[4/3] w-full overflow-hidden bg-stone-900">
                            <img 
                                src="{{ asset('assets/images/gallery-' . $cut['id'] . '.jpg') }}" 
                                alt="{{ $cut['title'] }}" 
                                class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110"
                                loading="lazy"
                            >
                            <div class="absolute inset-0 bg-gradient-to-t from-[#1C1917] via-[#1C1917]/30 to-transparent opacity-80 group-hover:opacity-60 transition-opacity"></div>
                            
                            <!-- Badges -->
                            <div class="absolute top-3 left-3">
                                <span class="inline-block px-2.5 py-1 text-[10px] font-bold uppercase tracking-wider rounded-md bg-[#7A1F2B] text-[#F5F0E8] shadow-sm">
                                    {{ $cut['cat'] }}
                                </span>
                            </div>
                            <div class="absolute bottom-3 right-3">
                                <span class="inline-block px-2 py-0.5 text-[10px] font-semibold text-[#C9A227] bg-[#1C1917]/80 rounded border border-[#C9A227]/40 backdrop-blur-xs">
                                    {{ $cut['tag'] }}
                                </span>
                            </div>
                        </div>

                        <div class="p-4 bg-[#1C1917] flex items-center justify-between">
                            <div>
                                <h4 class="font-heading font-bold text-base text-[#F5F0E8] group-hover:text-[#C9A227] transition-colors">
                                    {{ $cut['title'] }}
                                </h4>
                                <span class="text-xs text-stone-400">Master Barber Chair &bull; 45 Mins</span>
                            </div>
                            <span class="w-8 h-8 rounded-full bg-stone-800 group-hover:bg-[#C9A227] text-stone-300 group-hover:text-[#1C1917] flex items-center justify-center text-sm font-bold transition-colors">
                                &nearr;
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Two-Column Feature: Online Booking Mock + Mobile View Frame -->
        <div id="booking-preview" class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center pt-8">
            <!-- Left: "Book Online" Stylized Mock UI (Dashboard / Concierge preview) -->
            <div 
                class="lg:col-span-7 bg-[#1C1917] rounded-3xl p-6 sm:p-8 border border-stone-800 shadow-2xl relative overflow-hidden"
                data-aos="fade-right"
                x-data="{ 
                    selectedPackage: 'signature',
                    selectedDate: 'today',
                    selectedTime: '11:00 AM',
                    barber: 'Kuya Lito',
                    booked: false
                }"
            >
                <!-- Top Accent Stripe -->
                <div class="absolute top-0 left-0 right-0 h-1.5 barber-pole-stripe"></div>

                <!-- Window Header Bar -->
                <div class="flex items-center justify-between pb-5 border-b border-stone-800">
                    <div class="flex items-center gap-2">
                        <span class="w-3 h-3 rounded-full bg-rose-500/80"></span>
                        <span class="w-3 h-3 rounded-full bg-amber-500/80"></span>
                        <span class="w-3 h-3 rounded-full bg-emerald-500/80"></span>
                        <span class="ml-2 text-xs font-mono text-stone-400">concierge.kuyalitosbarber.ph</span>
                    </div>
                    <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold uppercase tracking-widest bg-[#C9A227]/20 text-[#C9A227] border border-[#C9A227]/40">
                        Interactive Preview
                    </span>
                </div>

                <div class="mt-6">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 mb-6">
                        <div>
                            <h4 class="font-heading font-bold text-2xl text-[#F5F0E8]">Digital Chair Booking</h4>
                            <p class="text-xs sm:text-sm text-stone-400">Lock your preferred master barber and time slot without waiting</p>
                        </div>
                        <div class="text-right">
                            <span class="text-xs text-stone-400 block">Queue Status</span>
                            <span class="inline-flex items-center gap-1.5 text-xs font-bold text-emerald-400">
                                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                                Chairs Active (3)
                            </span>
                        </div>
                    </div>

                    <!-- Step 1: Package Selection -->
                    <div class="mb-5">
                        <label class="block text-xs uppercase font-bold tracking-wider text-stone-300 mb-2.5">1. Select Grooming Experience</label>
                        <div class="grid grid-cols-3 gap-2.5">
                            <button 
                                type="button" 
                                @click="selectedPackage = 'basic'"
                                :class="selectedPackage === 'basic' ? 'border-[#C9A227] bg-[#7A1F2B]/30 text-[#F5F0E8]' : 'border-stone-800 bg-stone-900/60 text-stone-400 hover:border-stone-700'"
                                class="p-3 rounded-xl border text-left transition-all"
                            >
                                <span class="block text-xs font-bold font-heading">Basic Cut</span>
                                <span class="block text-sm font-extrabold text-[#C9A227] mt-0.5">₱250</span>
                            </button>

                            <button 
                                type="button" 
                                @click="selectedPackage = 'signature'"
                                :class="selectedPackage === 'signature' ? 'border-[#C9A227] bg-[#7A1F2B]/40 text-[#F5F0E8] ring-1 ring-[#C9A227]' : 'border-stone-800 bg-stone-900/60 text-stone-400 hover:border-stone-700'"
                                class="p-3 rounded-xl border text-left transition-all relative"
                            >
                                <span class="absolute -top-2 right-2 px-1.5 py-0.2 text-[9px] font-bold uppercase bg-[#C9A227] text-[#1C1917] rounded">Popular</span>
                                <span class="block text-xs font-bold font-heading">Signature</span>
                                <span class="block text-sm font-extrabold text-[#C9A227] mt-0.5">₱450</span>
                            </button>

                            <button 
                                type="button" 
                                @click="selectedPackage = 'vip'"
                                :class="selectedPackage === 'vip' ? 'border-[#C9A227] bg-[#7A1F2B]/30 text-[#F5F0E8]' : 'border-stone-800 bg-stone-900/60 text-stone-400 hover:border-stone-700'"
                                class="p-3 rounded-xl border text-left transition-all"
                            >
                                <span class="block text-xs font-bold font-heading">VIP Lounge</span>
                                <span class="block text-sm font-extrabold text-[#C9A227] mt-0.5">₱750</span>
                            </button>
                        </div>
                    </div>

                    <!-- Step 2: Preferred Barber & Day -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-5">
                        <div>
                            <label class="block text-xs uppercase font-bold tracking-wider text-stone-300 mb-2">2. Master Barber</label>
                            <select x-model="barber" class="w-full bg-stone-900 border border-stone-800 text-stone-200 text-sm rounded-xl px-3 py-2.5 focus:border-[#C9A227] focus:outline-none">
                                <option value="Kuya Lito">Kuya Lito (Founder & Master Cutter)</option>
                                <option value="Barber Jun">Barber Jun (Fade & Lineup Specialist)</option>
                                <option value="Barber Mark">Barber Mark (Hot Towel Artisan)</option>
                            </select>
                            <div class="flex items-center gap-2.5 mt-2.5 p-2 bg-stone-900/80 rounded-xl border border-stone-800">
                                <img src="{{ asset('assets/images/barber-lito.jpg') }}" alt="Master Barber" class="w-8 h-8 rounded-full object-cover ring-2 ring-[#C9A227]">
                                <div class="text-[11px]">
                                    <span class="font-bold text-[#F5F0E8] block" x-text="barber"></span>
                                    <span class="text-[10px] text-[#C9A227]">12+ Years Master Chair Experience</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs uppercase font-bold tracking-wider text-stone-300 mb-2">3. Day</label>
                            <div class="flex gap-2">
                                <button type="button" @click="selectedDate = 'today'" :class="selectedDate === 'today' ? 'bg-[#7A1F2B] text-[#F5F0E8] border-[#7A1F2B]' : 'bg-stone-900 text-stone-400 border-stone-800'" class="flex-1 py-2 text-xs font-bold rounded-xl border transition-colors">Today</button>
                                <button type="button" @click="selectedDate = 'tomorrow'" :class="selectedDate === 'tomorrow' ? 'bg-[#7A1F2B] text-[#F5F0E8] border-[#7A1F2B]' : 'bg-stone-900 text-stone-400 border-stone-800'" class="flex-1 py-2 text-xs font-bold rounded-xl border transition-colors">Tomorrow</button>
                                <button type="button" @click="selectedDate = 'saturday'" :class="selectedDate === 'saturday' ? 'bg-[#7A1F2B] text-[#F5F0E8] border-[#7A1F2B]' : 'bg-stone-900 text-stone-400 border-stone-800'" class="flex-1 py-2 text-xs font-bold rounded-xl border transition-colors">Saturday</button>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3: Available Time Slots -->
                    <div class="mb-6">
                        <label class="block text-xs uppercase font-bold tracking-wider text-stone-300 mb-2">4. Available Chair Slots</label>
                        <div class="grid grid-cols-4 gap-2">
                            <template x-for="time in ['10:00 AM', '11:30 AM', '02:00 PM', '04:15 PM', '05:30 PM', '06:15 PM', '07:00 PM', '07:45 PM']" :key="time">
                                <button 
                                    type="button" 
                                    @click="selectedTime = time"
                                    :class="selectedTime === time ? 'bg-[#C9A227] text-[#1C1917] font-bold shadow-sm' : 'bg-stone-900/80 text-stone-300 hover:bg-stone-800 border border-stone-800'"
                                    class="py-2 text-xs rounded-lg transition-all text-center"
                                    x-text="time"
                                >
                                </button>
                            </template>
                        </div>
                    </div>

                    <!-- Action & Feedback Bar -->
                    <div class="p-4 rounded-xl bg-stone-900/90 border border-stone-800 flex flex-col sm:flex-row items-center justify-between gap-3">
                        <div class="text-xs text-stone-300">
                            Selected: <span class="font-bold text-[#C9A227]" x-text="barber"></span> &bull; 
                            <span class="font-bold text-[#F5F0E8]" x-text="selectedTime"></span> 
                            (<span class="uppercase font-semibold text-stone-400" x-text="selectedDate"></span>)
                        </div>

                        <div class="flex items-center gap-2 w-full sm:w-auto">
                            <button 
                                type="button" 
                                @click="booked = true; setTimeout(() => booked = false, 3000)"
                                class="w-full sm:w-auto px-5 py-2.5 bg-[#7A1F2B] hover:bg-[#631721] text-[#F5F0E8] font-bold text-xs uppercase tracking-wider rounded-lg shadow-md hover:shadow-lg transition-all focus:outline-none flex items-center justify-center gap-1.5"
                            >
                                <span x-show="!booked">Reserve Chair</span>
                                <span x-show="booked" x-cloak class="text-emerald-300">&#10003; Reserved!</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: "Mobile View" Mockup Frame (Satisfies mobile view showcase requirement) -->
            <div class="lg:col-span-5 flex justify-center" data-aos="fade-left">
                <!-- Realistic Smartphone Frame -->
                <div class="relative w-[290px] sm:w-[320px] rounded-[48px] p-3.5 bg-gradient-to-b from-stone-700 via-stone-800 to-stone-900 shadow-2xl border-4 border-stone-700/80 ring-1 ring-stone-600">
                    <!-- Speaker / Notch Pill -->
                    <div class="absolute top-6 left-1/2 -translate-x-1/2 w-28 h-5 bg-[#1C1917] rounded-full z-30 flex items-center justify-center gap-2">
                        <div class="w-10 h-1 rounded-full bg-stone-700"></div>
                        <div class="w-2.5 h-2.5 rounded-full bg-stone-800 border border-stone-700"></div>
                    </div>

                    <!-- Inner Phone Screen -->
                    <div class="relative bg-[#1C1917] rounded-[36px] overflow-hidden text-[#F5F0E8] aspect-[9/19] flex flex-col justify-between border border-stone-900">
                        <!-- Top Mini Status Bar -->
                        <div class="pt-3 px-6 flex justify-between items-center text-[10px] text-stone-400 z-20">
                            <span>9:41</span>
                            <div class="flex items-center gap-1">
                                <span>5G</span>
                                <span class="text-xs">&#9632;</span>
                            </div>
                        </div>

                        <!-- Mini Mobile Site Header -->
                        <div class="p-4 border-b border-stone-800/80 bg-[#1C1917]/90 backdrop-blur flex items-center justify-between mt-2">
                            <div class="flex items-center gap-1.5">
                                <div class="w-6 h-6 rounded bg-[#7A1F2B] flex items-center justify-center text-[10px] text-[#C9A227]">💈</div>
                                <span class="font-heading text-sm font-bold">Kuya Lito's</span>
                            </div>
                            <span class="px-2 py-0.5 text-[9px] font-bold uppercase bg-[#C9A227] text-[#1C1917] rounded">Book</span>
                        </div>

                        <!-- Mini Mobile Site Content Area -->
                        <div class="p-4 space-y-3 flex-1 overflow-hidden">
                            <!-- Hero Mini Banner -->
                            <div class="bg-gradient-to-br from-[#2D2022] to-[#1C1917] p-3.5 rounded-xl border border-stone-800 text-center">
                                <span class="inline-block px-2 py-0.5 text-[8px] font-bold uppercase bg-[#7A1F2B] text-[#F5F0E8] rounded-full mb-1">Pasig City</span>
                                <p class="font-heading font-bold text-sm text-[#F5F0E8]">Sharp Cuts. Honest Prices.</p>
                                <p class="text-[10px] text-stone-400 mt-1">Walk-ins always welcome.</p>
                            </div>

                            <!-- Mini Service Item -->
                            <div class="bg-stone-900/90 p-2.5 rounded-xl border border-stone-800 flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <span class="w-7 h-7 rounded-lg bg-[#7A1F2B]/40 text-[#C9A227] flex items-center justify-center text-xs">✂</span>
                                    <div>
                                        <p class="text-xs font-bold">Signature Grooming</p>
                                        <p class="text-[9px] text-stone-400">Haircut + Hot Towel</p>
                                    </div>
                                </div>
                                <span class="text-xs font-bold text-[#C9A227]">₱450</span>
                            </div>

                            <!-- Mini Reviews Pill -->
                            <div class="bg-stone-900/60 p-2.5 rounded-xl border border-stone-800 text-center">
                                <div class="text-[#C9A227] text-xs">★★★★★</div>
                                <p class="text-[9px] text-stone-300 mt-0.5">"Best neighborhood fade in town!"</p>
                            </div>
                        </div>

                        <!-- Bottom Mini Bar -->
                        <div class="p-3 bg-[#1C1917] border-t border-stone-800 flex justify-around text-[10px] text-stone-400">
                            <span class="text-[#C9A227] font-semibold">Home</span>
                            <span>Services</span>
                            <span>Pricing</span>
                            <span>Contact</span>
                        </div>

                        <!-- Home Bar Indicator -->
                        <div class="pb-2 flex justify-center">
                            <div class="w-24 h-1 bg-stone-600 rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
