<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @isset($title)
    <title>{{ $title }} - {{ config('app.name', 'Laravel') }}</title>
    @else
    <title>{{ config('app.name', 'Laravel') }}</title>
    @endisset

    @yield('seo')

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-white h-screen antialiased leading-none bg-gray-100">
    <div id="app" class="">
        @include('layouts.partials.navigation')

        @yield('content')

        <footer class="">
            <div class="max-w-xl md:max-w-5xl mx-auto text-sm text-gray-500 sm:flex  py-8">
                <div class="sm:flex-1 text-center sm:text-left mb-6 sm:mb-0 sm:mt-3 uppercase">
                    © {{ date('Y') }} {{ config('app.name') }} | <a href="{{ route('privacy') }}">Privacy</a>
                </div>
                <div class="sm:flex-1 text-center sm:text-right">
                    <ul class="text-2xl">
                        <li class="inline-block mr-6 sm:mr-10">
                            <a href="https://twitter.com/jeffreyrossum" rel="me" target="_blank">
                                <i class="enlarge fab fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="inline-block mr-6 sm:mr-10">
                            <a href="https://github.com/jeffreyvr" rel="me" target="_blank">
                                <i class="enlarge fab fa-github" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="inline-block mr-6 sm:mr-10">
                            <a href="https://www.youtube.com/channel/UC6fQApKy1ULAlr0kS7EDsbg" rel="me" target="_blank">
                                <i class="enlarge fab fa-youtube" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="inline-block mr-6 sm:mr-10">
                            <a href="https://instagram.com/jeffrey.rossum/" rel="me" target="_blank">
                                <i class="enlarge fab fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="inline-block">
                            <a href="https://linkedin.com/in/jeffrey-van-rossum-97b27321" rel="me" target="_blank">
                                <i class="enlarge fab fa-linkedin-in" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
    </div>
    </footer>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    @if(!env('APP_DEBUG',false))
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154200476-1">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
            gtag('set', 'anonymizeIp', true);
            gtag('js', new Date());

            gtag('config', '{{ env("UA_CODE") }}');
    </script>
    @endif

</body>

</html>