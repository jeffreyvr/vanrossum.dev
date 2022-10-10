<x-site-layout :title="__('Jeffrey van Rossum - Freelance PHP developer specialized in Laravel and WordPress')">
    @include('pages.home.'.app()->getLocale().'.introduction')

    <x-tools-slider />

    <div class="container relative z-1 mx-auto max-w-screen-xl px-8 lg:px-0">
        <div class="border-b mb-8 pb-8 lg:pb-16 lg:mb-16">
            <h2 class="text-lg lg:text-2xl text-primary font-wide font-bold mb-2">{{ __('What I work with') }}</h2>
            <p class="text-sm lg:text-[24px] text-primary">{{ __('As a freelance developer, I specialise in...') }}</p>
        </div>

        @foreach(App\Service::where('lang', app()->getLocale())->get() as $service)
            <x-service :even="$loop->even" :service="$service" />
        @endforeach
    </div>

    <div class="container mx-auto max-w-screen-xl px-8 lg:px-0">
        <div class="mb-2 lg:mb-16">
            <h2 class="text-lg lg:text-2xl text-primary font-wide font-semibold lg:mb-2">{{ __('Latest blogs') }}</h2>
        </div>

        @foreach($posts as $post)
            @include('posts.block', compact('post'))
        @endforeach

        <div class="flex justify-center my-12 text-base">
            <x-button-link.more href="{{ route('posts') }}">
                {{ __('Show me more blog articles') }}
            </x-button-link.more>
        </div>
    </div>

    <div class="container mx-auto max-w-screen-xl mt-32 px-8 lg:px-0">
        <div class="mb-8 lg:mb-16">
            <h2 class="text-lg lg:text-2xl text-primary font-wide font-semibold mb-2">{{ __('What I\'m working on') }}</h2>
            <p class="text-sm lg:text-[24px] text-primary">{{ __('A few awesome projects where I get to do what I love.') }}</p>
        </div>

        @foreach($projects as $project)
            <x-project :project="$project" :even="$loop->even" :rotate="true" />
        @endforeach

        <div class="flex justify-center my-12 text-base">
            <x-button-link.more href="{{ localized_route('projects') }}">
                {{ __('Show me more projects') }}
            </x-button-link.more>
        </div>
    </div>
</x-site-layout>
