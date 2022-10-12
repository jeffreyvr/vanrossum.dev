<x-app-layout :title="__('Jeffrey van Rossum - Freelance PHP developer specialized in Laravel and WordPress')">
    @include('pages.home.'.app()->getLocale().'.introduction')

    <x-tools-slider />

    <div class="container relative z-1 mx-auto">
        <div class="border-b mb-8 pb-8 lg:pb-16 lg:mb-16">
            <h2 class="text-lg lg:text-2xl text-primary font-wide font-bold mb-2">{{ __('Specializations') }}</h2>
            <p class="text-sm lg:text-[24px] text-primary">{{ __('Tools of the trade') }}</p>
        </div>

        @foreach(App\Service::where('lang', app()->getLocale())->get() as $service)
            <x-service :even="$loop->even" :service="$service" />
        @endforeach
    </div>

    <div class="container relative z-1 mx-auto">
        <div class="mb-2 lg:mb-16">
            <h2 class="text-lg lg:text-2xl text-primary font-wide font-semibold lg:mb-2">{{ __('Latest blogs') }}</h2>
        </div>

        @foreach($posts as $post)
            @include('posts.block', compact('post'))
        @endforeach

        <div class="flex justify-center mt-8 mb-20 text-base">
            <x-button-link.more href="{{ route('posts') }}">
                {{ __('Show me more blog articles') }}
            </x-button-link.more>
        </div>
    </div>

    <div class="container relative z-1 mx-auto">
        <div class="mb-8 lg:mb-16">
            @if(app()->getLocale() === 'nl')
            <h2 class="text-lg lg:text-2xl text-primary font-wide font-semibold mb-2">Waar ik aan <span class="text-secondary decoration-primary underline">werk</span> heb</h2>
            <p class="text-sm lg:text-[24px] text-primary">{{ __('A few awesome projects where I get to do what I love.') }}</p>
            @else
            <h2 class="text-lg lg:text-2xl text-primary font-wide font-semibold mb-2">What I've <span class="text-secondary decoration-primary underline">worked</span> on</h2>
            <p class="text-sm lg:text-[24px] text-primary">{{ __('A few awesome projects where I get to do what I love.') }}</p>
            @endif
        </div>

        @foreach($projects as $project)
            <x-project :project="$project" :even="$loop->even" :rotate="true" />
        @endforeach

        <div class="flex justify-center mt-8 mb-20 text-base">
            <x-button-link.more href="{{ localized_route('projects') }}">
                {{ __('Show me more projects') }}
            </x-button-link.more>
        </div>
    </div>
</x-site-layout>
