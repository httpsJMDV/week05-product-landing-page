@props([
    'variant' => 'primary',
    'size' => 'md',
    'href' => null,
    'type' => 'button',
    'icon' => null,
])

@php
    $baseStyles = 'inline-flex items-center justify-center font-medium tracking-wider uppercase transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#C9A227] disabled:opacity-50 disabled:cursor-not-allowed group text-center';

    $sizeStyles = [
        'sm' => 'px-4 py-2 text-xs rounded-md gap-1.5',
        'md' => 'px-6 py-3 text-sm rounded-lg gap-2',
        'lg' => 'px-8 py-4 text-base rounded-xl gap-2.5 shadow-md',
    ][$size] ?? 'px-6 py-3 text-sm rounded-lg gap-2';

    $variantStyles = [
        // Primary: Deep maroon, cream text, gold glow on hover
        'primary' => 'bg-[#7A1F2B] text-[#F5F0E8] hover:bg-[#631721] hover:shadow-[0_10px_25px_-5px_rgba(122,31,43,0.5)] border border-[#7A1F2B] active:scale-[0.98]',

        // Secondary: Charcoal/near-black, cream text, subtle gold border
        'secondary' => 'bg-[#1C1917] text-[#F5F0E8] hover:bg-[#292524] hover:border-[#C9A227] border border-stone-800 shadow-sm active:scale-[0.98]',

        // Gold: Warm gold/brass, dark charcoal text
        'gold' => 'bg-[#C9A227] text-[#1C1917] font-semibold hover:bg-[#b38e1e] hover:shadow-[0_10px_25px_-5px_rgba(201,162,39,0.4)] border border-[#C9A227] active:scale-[0.98]',

        // Ghost: Transparent with border, responsive to dark/light contexts
        'ghost' => 'bg-transparent text-[#1C1917] hover:text-[#7A1F2B] border border-stone-300 hover:border-[#7A1F2B] hover:bg-stone-100/50 active:scale-[0.98]',

        // Ghost Light: Transparent with light border for dark sections
        'ghost-light' => 'bg-transparent text-[#F5F0E8] hover:text-[#C9A227] border border-stone-700 hover:border-[#C9A227] hover:bg-stone-900/50 active:scale-[0.98]',
    ][$variant] ?? 'bg-[#7A1F2B] text-[#F5F0E8] hover:bg-[#631721]';
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => "$baseStyles $sizeStyles $variantStyles"]) }}>
        {{ $slot }}
        @if ($icon)
            <span class="inline-block transition-transform duration-300 group-hover:translate-x-1">{{ $icon }}</span>
        @endif
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => "$baseStyles $sizeStyles $variantStyles"]) }}>
        {{ $slot }}
        @if ($icon)
            <span class="inline-block transition-transform duration-300 group-hover:translate-x-1">{{ $icon }}</span>
        @endif
    </button>
@endif
