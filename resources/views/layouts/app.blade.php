<!doctype html>
<html lang="{{ app()->getLocale() }}" class="h-full">

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

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/icons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/images/icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/icons/favicon-16x16.png') }}">
    <link rel="shortcut icon" href="{{ asset('/images/icons/favicon.ico') }}">

    <link rel="webmention" href="https://webmention.io/vanrossum.dev/webmention"/>
    <link rel="pingback" href="https://webmention.io/vanrossum.dev/xmlrpc"/>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-white h-full antialiased leading-none bg-white">

<div id="app" class="h-full flex flex-col">
    <div style="flex: 1 0 auto;">
        @yield('content')
    </div>

    <footer class="bg-gray-800" style="flex-shrink: 0;">
        <div class="max-w-xl md:flex items-center md:max-w-5xl mx-auto text-sm text-gray-500 sm:flex py-8">
            <div class="sm:flex-1 text-center sm:text-left mb-6 sm:mb-0 sm:mt-3 uppercase">
                <div class="inline-block mb-4 relative w-64">
                    <select
                        onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);"
                        class="block appearance-none w-full bg-black border border-gray-900 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                        @foreach (config('app.locales') as $locale)
                            <option value="{{ current_route($locale) }}"
                                    @if (app()->getLocale() == $locale) selected @endif>{{ config('app.locale_labels.'.$locale) }}</option>
                        @endforeach
                    </select>
                    <div
                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                        </svg>
                    </div>
                </div>
                <div>© {{ date('Y') }} {{ config('app.name') }} | <a
                        href="{{ localized_route('privacy') }}">Privacy</a></div>
            </div>
            <div class="sm:flex-1 text-center sm:text-right">
                <ul class="text-2xl">
                    <li class="inline-block mr-6 sm:mr-10">
                        <a href="https://twitter.com/jeffreyrossum" class="hover:text-white" rel="me" target="_blank">
                            <i class="enlarge fab fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="inline-block mr-6 sm:mr-10">
                        <a href="https://github.com/jeffreyvr" class="hover:text-white" rel="me" target="_blank">
                            <i class="enlarge fab fa-github" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="inline-block mr-6 sm:mr-10">
                        <a href="https://www.youtube.com/channel/UC6fQApKy1ULAlr0kS7EDsbg" class="hover:text-white"
                           rel="me" target="_blank">
                            <i class="enlarge fab fa-youtube" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="inline-block mr-6 sm:mr-10">
                        <a href="https://instagram.com/jeffrey.rossum/" rel="me" class="hover:text-white"
                           target="_blank">
                            <i class="enlarge fab fa-instagram" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="inline-block">
                        <a href="https://linkedin.com/in/jeffrey-van-rossum-97b27321" rel="me" class="hover:text-white"
                           target="_blank">
                            <i class="enlarge fab fa-linkedin-in" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</div>
<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>
@if(!env('APP_DEBUG',false))
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154200476-1">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('set', 'anonymizeIp', true);
        gtag('js', new Date());

        gtag('config', '{{ env("UA_CODE") }}');
    </script>
@endif

</body>

</html>
