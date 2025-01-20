@props([
    'muted' => false
])

@php
$class = match ($muted) {
    true => 'text-zinc-500 dark:text-zinc-400',
    default => 'text-zinc-800 dark:text-zinc-300'
};
@endphp

<div {{ $attributes->merge(['class' => $class]) }}>{{ $slot }}</div>
