<nav class="py-6 px-8 lg:px-0 relative block z-10">
    <div class="max-w-xl md:max-w-5xl mx-auto relative items-center justify-center">
        <button id="toggleNav" class="block md:hidden text-3xl absolute right-0 top-0 text-black"><i
                class="fas fa-bars"></i></button>
        <div class="md:flex content-center">
            <a href="{{ localized_route('welcome') }}"
               class="shadow-3d inline-block font-semibold text-white bg-gray-900 no-underline">
                <div class="p-2 sm:p-4">
                    <span class="text-yellow-300 uppercase text-lg">vanrossum</span>.<span
                        class="text-lg text-pink-500">dev</span>
                </div>
            </a>
            <div id="nav"
                 class="flex-1 w-full md:w-auto mt-8 md:mt-0 text-right hidden md:block">
                <a class="block md:inline-block text-left no-underline hover:text-pink-500 text-gray-800 text-lg pb-3 md:p-3"
                   href="{{ localized_route('about') }}">{{ __('About') }}</a>
                <a class="block md:inline-block text-left no-underline hover:text-pink-500 text-gray-800 text-lg pb-3 md:p-3"
                   href="{{ route('posts') }}">{{ __('Articles') }}</a>
                <a class="block md:inline-block text-left no-underline hover:text-pink-500 text-gray-800 text-lg pb-3 md:p-3"
                   href="{{ localized_route('welcome') }}#projects">{{ __('Projects') }}</a>
                <a class="block md:inline-block text-left no-underline hover:text-pink-500 text-gray-800 text-lg pb-3 md:p-3"
                   href="{{ route('products') }}">{{ __('Products') }}</a>
                <a class="block md:inline-block text-left no-underline hover:text-pink-500 text-gray-800 text-lg pb-3 md:p-3"
                   href="{{ localized_route('contact')}}">{{ __('Contact') }}</a>
            </div>
        </div>
    </div>
</nav>
