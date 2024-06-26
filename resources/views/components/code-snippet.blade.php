@props([
    'title' => false,
    'url' => false
])
<div data-aos="fade-up" data-aos-duration="1000" {{ $attributes->merge(['class' => 'relative mb-8 lg:my-12']) }}>
    <div class="absolute z-10 left-0 top-0 mt-3 px-6 flex justify-between max-w-full w-full">
        <div class="flex gap-1">
            <span class="h-3 w-3 bg-red-500 rounded-full"></span>
            <span class="h-3 w-3 bg-yellow-500 rounded-full"></span>
            <span class="h-3 w-3 bg-green-500 rounded-full"></span>
        </div>
        @if($title && $url)
            <div><a href="{{ $url }}" class="text-gray-300 hover:text-gray-500">{{ $title }}</a></div>
        @endif
        <div></div>
    </div>
    <div class="shadow-code text-[12px] lg:text-[16px] pb-8 pt-12 px-6 rounded-md bg-white">
<x-markdown>
{{ $slot }}
</x-markdown>
    </div>
</div>
