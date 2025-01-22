@props(['active' => false, 'href'])

@php
$classes = $active 
    ? 'bg-accent text-white px-3 py-2 rounded-md text-sm font-medium transition-colors duration-150 ease-in-out'
    : 'text-gray-700 hover:bg-accent/10 hover:text-accent px-3 py-2 rounded-md text-sm font-medium transition-colors duration-150 ease-in-out';
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
