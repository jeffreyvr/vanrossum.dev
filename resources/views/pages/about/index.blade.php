<x-app-layout :title="__('About me')">
    @include('pages.about.'.app()->getLocale().'.content')

    <div class="container">
        <div class="border-b pb-8 mb-8 lg:pb-16 lg:mb-16">
            <h2 class="text-lg lg:text-2xl text-primary font-wide font-bold mb-2">{{ __('Specializations') }}</h2>
            <p class="text-sm lg:text-[24px]">{{ __('Tools of the trade') }}</p>
        </div>

        @foreach(App\Service::where('lang', app()->getLocale())->get() as $service)
            <x-service :even="$loop->even" :service="$service" />
        @endforeach
    </div>
</x-site-layout>
