<nav class="py-8">
    <div class="max-w-xl md:max-w-5xl mx-auto">
        <div class="flex items-center justify-center">
            <div class="mr-6">
                <a href="{{ url('/') }}" class="brand text-lg font-semibold text-white bg-gray-900 py-2 px-4 no-underline">
                    <span class="text-yellow-300 uppercase">vanrossum</span>.<span class="text-pink-500">dev</span>
                </a>
            </div>
            <div class="flex-1 text-right">
                <a class="no-underline hover:underline text-gray-900 text-lg p-3" href="#">{{ __('About') }}</a>
                <a class="no-underline hover:underline text-gray-900 text-lg p-3" href="#">{{ __('Articles') }}</a>
                <a class="no-underline hover:underline text-gray-900 text-lg p-3" href="#projects">{{ __('Projects') }}</a>
                <a class="no-underline hover:underline text-gray-900 text-lg p-3" href="#">{{ __('Contact') }}</a>

                @auth
                    <a href="{{ route('logout') }}"
                       class="no-underline hover:underline text-gray-900 text-sm p-3"
                       onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                @endguest
            </div>
        </div>
    </div>
</nav>