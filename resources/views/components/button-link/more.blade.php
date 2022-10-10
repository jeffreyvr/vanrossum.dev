<a {{ $attributes->merge(['class' => 'flex gap-4 group text-secondary items-center']) }}>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="group-hover:animate-spin w-7 h-7">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
    </svg>

    <span class="text-primary border-b-2 border-primary">
        {{ $slot }}
    </span>
</a>
