@props([
    'even' => false,
    'service' => null
])
<div class="grid grid-cols-1 lg:grid-cols-2 gap-16 mb-8 lg:mb-32">
    <div class="{{ $even ? 'lg:order-last' : null }}">
        <h2 class="text-lg lg:text-xl font-medium font-wide text-primary mb-4">{{ $service['title'] }}</h2>
        <div class="text-sm lg:text-base leading-loose text-primary mb-8 [&_p]:mt-4">{!! $service['description'] !!}</div>
        <x-button-link href="{{ $service['url'] }}" :arrow="true">{{ __('Read more') }}</x-button-link>
    </div>
    <div class="relative {{ $even ? '-rotate-1' : 'rotate-1' }}">
        <x-code-snippet :title="$service['snippet_name']" :url="$service['snippet_url']">
            {!! $service['snippet'] !!}
        </x-code-snippet>
    </div>
</div>
