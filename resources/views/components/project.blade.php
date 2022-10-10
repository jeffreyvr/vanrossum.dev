@props([
    'even' => false,
    'project' => null,
    'rotate' => false
])
<div {{ $attributes->merge(['class' => 'border-t py-12 grid lg:grid-cols-2 gap-8']) }}>
    @if($rotate)
        <div class="bg-[#f7f7fa] p-12 {{ $even ? 'rotate-1 lg:order-last' : '-rotate-1' }}">
            <img src="{{ url($project->image) }}" class="shadow-xl" data-aos="zoom-in" data-aos-duration="1000">
        </div>
    @else
        <div class="bg-[#f7f7fa] p-12 {{ $even ? 'lg:order-last' : '' }}">
            <img src="{{ url($project->image) }}" class="shadow-xl" data-aos="zoom-in" data-aos-duration="1000">
        </div>
    @endif
    <div>
        @if($project->external_url)
        <a href="{{ $project->external_url }}" class="font-medium text-xl lg:text-2xl font-wide text-primary mb-2 block">{{ $project->title }}</a>
        @endif
        <div class="text-gray-400 mb-8">
            {{ __('Made for :client with :stack', ['client' => $project->client, 'stack' => $project->stack]) }}
        </div>
        <div class="text-base leading-loose mb-8">{!! $project->text !!}</div>
        <x-button-link :arrow="true" href="{{ $project->external_url ?? '#' }}">{{ __('View project') }}</x-button-link>
    </div>
</div>
