@props([
    'href' => null,
    'iconTrailing' => null
])

@if(is_null($href))
    <button {{ $attributes->merge(['class' => 'inline-flex items-center gap-2.5 justify-center px-4 py-[calc(theme(spacing.2)-1px)] rounded-full border border-transparent bg-primary dark:bg-secondary dark:text-zinc-800 shadow-md whitespace-nowrap text-base font-medium text-white data-[disabled]:bg-zinc-950 data-[hover]:bg-zinc-800 data-[disabled]:opacity-40']) }}>
        {{ $slot }}
        @if($iconTrailing)
            @svg('heroicon-' . $iconTrailing, ['class' => 'size-5 text-secondary'])
        @endif
    </button>
@else
    <a href="{{ $href }}" {{ $attributes->merge(['class' => 'inline-flex items-center gap-2.5 items-center justify-center px-4 py-[calc(theme(spacing.2)-1px)] rounded-full border border-transparent bg-primary dark:bg-secondary dark:text-zinc-800 shadow-md whitespace-nowrap text-base font-medium text-white data-[disabled]:bg-zinc-950 data-[hover]:bg-zinc-800 data-[disabled]:opacity-40']) }}>
        {{ $slot }}
        @if($iconTrailing)
            @svg('heroicon-' . $iconTrailing, ['class' => 'size-5 text-secondary dark:text-zinc-800'])
        @endif
    </a>
@endif
