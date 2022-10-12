<x-app-layout title="404">

    <div class="text-center px-8 max-w-screen-sm mx-auto my-12">
        <h1 class="font-wide font-semibold text-2xl mb-4 text-primary">{{ __('Whoops, 404...') }}</h1>
        <p class="text-base mb-8">{{ __('You might have broken the internet.') }}</p>

        <a href="https://www.youtube.com/watch?v=qdjRwpYM-Kw" target="_blank">
            <img src="{{ url('images/you-can-break-the-internet.gif') }}" class="w-full rounded-xl shadow-2xl shadow-primary/25" />
        </a>

        <div class="mt-8">
            <x-button-link :href="url('/')">Go home</x-button-link>
        </div>
    </div>
</x-site-layout>
