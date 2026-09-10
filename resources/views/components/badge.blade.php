@props([
    'variant' => 'gold',
    'size' => 'sm',
])

@php
    $base = 'inline-flex items-center font-semibold uppercase tracking-wider rounded-full';
    
    $sizes = [
        'xs' => 'px-2 py-0.5 text-[10px]',
        'sm' => 'px-3 py-1 text-xs',
        'md' => 'px-4 py-1.5 text-sm',
    ][$size] ?? 'px-3 py-1 text-xs';

    $variants = [
        'gold' => 'bg-[#C9A227]/15 text-[#8E6F14] border border-[#C9A227]/40 dark:text-[#E4C364]',
        'maroon' => 'bg-[#7A1F2B]/15 text-[#7A1F2B] border border-[#7A1F2B]/40',
        'charcoal' => 'bg-[#1C1917] text-[#F5F0E8] border border-stone-800',
        'highlight' => 'bg-gradient-to-r from-[#C9A227] to-[#E4C364] text-[#1C1917] shadow-sm font-bold',
    ][$variant] ?? 'bg-[#C9A227]/15 text-[#C9A227] border border-[#C9A227]/40';
@endphp

<span {{ $attributes->merge(['class' => "$base $sizes $variants"]) }}>
    {{ $slot }}
</span>
