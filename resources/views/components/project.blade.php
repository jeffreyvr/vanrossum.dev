@props([
    'even' => false,
    'project' => null
])
<div {{ $attributes->merge(['class' => 'border-t py-12 grid lg:grid-cols-2 gap-16']) }}>
    <div class="bg-[#f7f7fa] p-12 {{ $even ? 'lg:order-last' : '' }}">
        <img src="{{ Storage::url($project->image) }}" class="shadow-xl" data-aos="zoom-in" data-aos-duration="1000">
    </div>
    <div>
        @if($project->external_url)
            <a href="{{ $project->external_url }}" class="font-medium text-xl lg:text-2xl font-wide text-primary mb-2 block">{{ $project->title }}</a>
        @else
            <h3 href="{{ $project->external_url }}" class="font-medium text-xl lg:text-2xl font-wide text-primary mb-2 block">{{ $project->title }}</h3>
        @endif
        <div class="text-gray-400 mb-8">
            {{ __('Made for :client with :stack', ['client' => $project->client, 'stack' => $project->stack]) }}
        </div>
        <div class="text-base leading-loose mb-8">{!! $project->text !!}</div>
        <x-button-link :arrow="true" href="{{ $project->external_url ?? '#' }}">{{ __('View project') }}</x-button-link>
    </div>
</div>
