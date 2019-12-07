<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-white h-screen antialiased leading-none bg-gray-100">
    <div id="app">
        @include('layouts.partials.navigation')

        @yield('content')

        <footer class="">
            <div class="max-w-xl md:max-w-5xl mx-auto text-sm text-gray-500 sm:flex  py-8">
                <div class="sm:flex-1 text-center sm:text-left mb-6 sm:mb-0 sm:mt-3">
                    © {{ env('APP_NAME') }}
                </div>
                <div class="sm:flex-1 text-center sm:text-right">
                    <ul class="text-2xl">
                        <li class="inline-block mr-6 sm:mr-10">
                            <a href="https://twitter.com/jeffreyrossum" target="_blank">
                                <i class="enlarge fab fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="inline-block mr-6 sm:mr-10">
                            <a href="https://github.com/jeffreyvr" target="_blank">
                                <i class="enlarge fab fa-github" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="inline-block mr-6 sm:mr-10">
                            <a href="https://www.youtube.com/channel/UC6fQApKy1ULAlr0kS7EDsbg" target="_blank">
                                <i class="enlarge fab fa-youtube" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="inline-block mr-6 sm:mr-10">
                            <a href="https://instagram.com/jeffrey.rossum/" target="_blank">
                                <i class="enlarge fab fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="inline-block">
                            <a href="https://linkedin.com/in/jeffrey-van-rossum-97b27321" target="_blank">
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
</body>

</html>