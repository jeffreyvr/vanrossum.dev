@props([
    'size' => null,
    'level' => null,
    'period' => false,
    'tag' => 'div'
])

@php
$classes = match ($size) {
    '2xl' => 'text-4xl md:text-5xl font-medium mb-6',
    'xl' => 'text-3xl md:text-4xl font-medium mb-6',
    'lg' => 'text-2xl md:text-3xl mb-4',
    'sm' => 'text-lg md:text-xl mb-4',
    'xs' => 'text-base md:text-lg mb-4',
    default => 'text-xl md:text-2xl mb-4',
};

$tag = $level ? "h{$level}" : $tag;
@endphp

<{{ $tag }} {{ $attributes->merge(['class' => $classes. ' font-display tracking-tighter dark:text-zinc-200']) }}>
    {{ $slot }}@if($period)<span class="text-secondary">.</span>@endif
</{{ $tag }}>
