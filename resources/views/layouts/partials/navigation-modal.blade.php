<div x-data="{open: false}" @nav.window="open = !open">
    <div x-cloak x-show="open" x-transition:enter="transition ease-in duration-300"
        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
        class="absolute top-0 left-0 w-full h-full text-white mt-[75px] z-10 p-8"
        style="background-image:url({{ url('/images/footer.png') }});">
        <nav aria-label="mobile nav" class="flex flex-col text-white border-b border-white/25 pb-12 mb-12">
            @foreach($items as $item)
            <a href="{{ $item['url'] }}"
                class="text-white block text-lg font-wide font-medium mb-12 last:mb-0 ">{!! $item['label'] !!}.</a>
            @endforeach
        </nav>

        @if(isset($backLink) && $backLink)
        <div class="flex gap-4">
            <a href="{{ $backLink['url'] }}"
                class="text-white text-lg font-wide font-medium flex items-center gap-2">
                <x-svgs.arrow-left />
                {{ $backLink['label'] }}
            </a>
        </div>
        @endif

        @if(isset($showLocale) && $showLocale)
        <div class="flex gap-4">
            @foreach (config('app.locales') as $locale)
            <a href="{{ current_route($locale, false) }}"
                class="uppercase text-white border-b-2 {{ app()->getLocale() == $locale ? 'border-secondary' : 'border-transparent text-white/20' }}">
                {{ $locale }}
            </a>
            @endforeach
        </div>
        @endif
    </div>
</div>
