<x-site-layout title="404">

    <div class="text-center max-w-screen-sm mx-auto">
        <x-heading level="1" size="2xl">{{ __('Whoops, 404...') }}</x-heading>
        <x-text class="mb-8">{{ __('You might have broken the internet.') }}</x-text>

        <a href="https://www.youtube.com/watch?v=qdjRwpYM-Kw" target="_blank">
            <img src="{{ url('images/you-can-break-the-internet.gif') }}" class="w-full rounded-xl shadow-2xl shadow-primary/25" />
        </a>

        <div class="mt-8">
            <x-button :href="url('/')">Go home</x-button>
        </div>
    </div>
</x-site-layout>
