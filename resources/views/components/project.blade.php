@props([
    'even' => false,
    'project' => null
])
<div {{ $attributes->merge(['class' => 'border-t border-zinc-200 dark:border-zinc-700 py-12 grid lg:grid-cols-2 gap-16']) }}>
    <div class="bg-zinc-100 dark:bg-zinc-800 p-12 {{ $even ? 'lg:order-last' : '' }}">
        <img src="{{ Storage::url($project->image) }}" class="shadow-xl">
    </div>
    <div>
        @if($project->external_url)
            <a href="{{ $project->external_url }}">
                <x-heading size="xl" period>{{ $project->title }}</x-heading>
            </a>
        @else
            <x-heading size="xl" period>{{ $project->title }}</x-heading>
        @endif
        <x-text class="mb-6">
            {{ __('Made for :client with :stack', ['client' => $project->client, 'stack' => $project->stack]) }}
        </x-text>
        <x-content class="mb-6">{!! $project->text !!}</x-content>
        <x-button href="{{ $project->external_url ?? '#' }}">{{ __('View project') }}</x-button>
    </div>
</div>
