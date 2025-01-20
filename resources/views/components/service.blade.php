<a href="{{ $service['url'] }}" class="hover:bg-zinc-50 dark:hover:bg-black/10 p-6 border-zinc-100 dark:border-zinc-800 border rounded-xl transition">
    @svg('si-'.strtolower($service['title']), ['class' => 'size-8 mb-4 dark:text-zinc-300'])

    <x-heading level="3">{{ $service['title'] }}</x-heading>

    <x-content class="[&_p]:mt-4">{!! $service['description'] !!}</x-content>

    {{-- <x-button-link href="{{ $service['url'] }}" :arrow="true">{{ __('Read more') }}</x-button-link> --}}
</a>
