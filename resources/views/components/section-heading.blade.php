@props([
    'eyebrow' => null,
    'title' => '',
    'description' => null,
    'align' => 'center',
    'dark' => false,
])

@php
    $alignClasses = [
        'center' => 'text-center mx-auto items-center',
        'left' => 'text-left items-start',
        'right' => 'text-right items-end ml-auto',
    ][$align] ?? 'text-center mx-auto items-center';

    $titleColor = $dark ? 'text-[#F5F0E8]' : 'text-[#1C1917]';
    $descColor = $dark ? 'text-stone-300' : 'text-stone-600';
@endphp

<div {{ $attributes->merge(['class' => "max-w-3xl flex flex-col mb-12 sm:mb-16 $alignClasses"]) }} data-aos="fade-up">
    @if ($eyebrow)
        <div class="inline-flex items-center gap-2 mb-3">
            <span class="h-0.5 w-6 bg-[#C9A227]"></span>
            <span class="text-xs sm:text-sm font-semibold tracking-widest text-[#C9A227] uppercase font-sans">
                {{ $eyebrow }}
            </span>
            <span class="h-0.5 w-6 bg-[#C9A227]"></span>
        </div>
    @endif

    <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold font-heading tracking-tight {{ $titleColor }} leading-tight">
        {{ $title }}
    </h2>

    @if ($description)
        <p class="mt-4 text-base sm:text-lg {{ $descColor }} font-sans max-w-2xl leading-relaxed">
            {{ $description }}
        </p>
    @endif

    <!-- Subtle accent line -->
    <div class="mt-5 flex items-center justify-center gap-1.5" aria-hidden="true">
        <span class="h-1 w-8 rounded-full bg-[#7A1F2B]"></span>
        <span class="h-1.5 w-1.5 rounded-full bg-[#C9A227]"></span>
        <span class="h-1 w-8 rounded-full bg-[#7A1F2B]"></span>
    </div>
</div>
