<nav class="py-8 px-8 md:px-0">
    <div class="max-w-xl md:max-w-5xl mx-auto relative items-center justify-center">
        <button id="toggleNav" class="block md:hidden text-3xl absolute right-0 top-0 text-black"><i class="fas fa-bars"></i></button>
        <div class="md:flex content-center">
            <a href="{{ route('welcome', app()->getLocale()) }}" class="brand inline-block font-semibold text-white bg-gray-900 no-underline">
                <div class="p-2 sm:p-4">
                    <span class="text-yellow-300 uppercase text-lg">vanrossum</span>.<span class="text-lg text-pink-500">dev</span>
                </div>
            </a>
            <div id="nav" class="flex-1 w-full md:w-auto bg-gray-200 md:bg-transparent mt-8 md:mt-0 text-right hidden md:block">
                <a class="block md:inline-block text-left no-underline hover:underline text-gray-900 text-lg p-3" href="{{ route('about', app()->getLocale()) }}">{{ __('About') }}</a>
                <a class="block md:inline-block text-left no-underline hover:underline text-gray-900 text-lg p-3" href="{{ route('posts') }}">{{ __('Articles') }}</a>
                <a class="block md:inline-block text-left no-underline hover:underline text-gray-900 text-lg p-3" href="{{ route('welcome', app()->getLocale()) }}#projects">{{ __('Projects') }}</a>
                <a class="block md:inline-block text-left no-underline hover:underline text-gray-900 text-lg p-3" href="{{ route('contact', app()->getLocale())}}">{{ __('Contact') }}</a>
            </div>
        </div>
    </div>
</nav>