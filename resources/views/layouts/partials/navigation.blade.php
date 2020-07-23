<nav class="{{ isset($shape) ? 'pt-8 pb-12' : 'py-8' }} px-8 md:px-0 bg-gray-800 relative">
    <div class="max-w-xl md:max-w-5xl mx-auto relative items-center justify-center">
        <button id="toggleNav" class="block md:hidden text-3xl absolute right-0 top-0 text-white"><i
                class="fas fa-bars"></i></button>
        <div class="md:flex content-center">
            <a href="{{ localized_route('welcome') }}"
               class="brand inline-block font-semibold text-white bg-gray-900 no-underline">
                <div class="p-2 sm:p-4">
                    <span class="text-yellow-300 uppercase text-lg">vanrossum</span>.<span
                        class="text-lg text-pink-500">dev</span>
                </div>
            </a>
            <div id="nav"
                 class="flex-1 w-full md:w-auto mt-8 md:mt-0 text-right hidden md:block">
                <a class="block md:inline-block text-left no-underline hover:underline hover:text-white text-gray-200 text-lg pb-3 md:p-3"
                   href="{{ localized_route('about') }}">{{ __('About') }}</a>
                <a class="block md:inline-block text-left no-underline hover:underline hover:text-white text-gray-200 text-lg pb-3 md:p-3"
                   href="{{ route('posts') }}">{{ __('Articles') }}</a>
                <a class="block md:inline-block text-left no-underline hover:underline hover:text-white text-gray-200 text-lg pb-3 md:p-3"
                   href="{{ localized_route('welcome') }}#projects">{{ __('Projects') }}</a>
                <a class="block md:inline-block text-left no-underline hover:underline hover:text-white text-gray-200 text-lg pb-3 md:p-3"
                   href="{{ localized_route('contact')}}">{{ __('Contact') }}</a>
            </div>
        </div>
    </div>
    @if(isset($shape))
        <svg class="absolute text-white left-0 bottom-0 w-full h-8 sm:h-12" xmlns="http://www.w3.org/2000/svg"
             viewBox="0 0 100 100" preserveAspectRatio="none">
            <polygon fill="currentColor" points="0,100 100,0 100,100"></polygon>
        </svg>
    @endif
</nav>
