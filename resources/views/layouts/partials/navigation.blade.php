<nav class="py-6 px-8 lg:px-0 relative block z-10">
    <div class="max-w-xl md:max-w-5xl mx-auto relative items-center justify-center">
        <button id="toggleNav" class="block md:hidden text-3xl absolute right-0 top-0 text-black"><i
                class="fas fa-bars"></i></button>
        <div class="md:flex items-center">
            <a href="{{ localized_route('welcome') }}">
                <x-logo class="w-[240px]" />
            </a>
            <div id="nav"
                 class="font-wide flex-1 w-full md:w-auto mt-8 md:mt-0 text-right hidden md:block">
                <a class="block md:inline-block text-left decoration-2 underline-offset-4 hover:text-secondary hover:underline hover:decoration-primary text-gray-800 text-lg pb-3 md:p-3"
                   href="{{ localized_route('about') }}">{{ __('About') }}</a>
                <a class="block md:inline-block text-left decoration-2 underline-offset-4 hover:text-secondary hover:underline hover:decoration-primary text-gray-800 text-lg pb-3 md:p-3"
                   href="{{ route('posts') }}">{{ __('Articles') }}</a>
                <a class="block md:inline-block text-left decoration-2 underline-offset-4 hover:text-secondary hover:underline hover:decoration-primary text-gray-800 text-lg pb-3 md:p-3"
                   href="{{ localized_route('welcome') }}#projects">{{ __('Projects') }}</a>
                <a class="block md:inline-block text-left decoration-2 underline-offset-4 hover:text-secondary hover:underline hover:decoration-primary text-gray-800 text-lg pb-3 md:p-3"
                   href="{{ localized_route('contact')}}">{{ __('Contact') }}</a>
            </div>
        </div>
    </div>
</nav>
