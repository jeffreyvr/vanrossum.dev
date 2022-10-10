<!doctype html>
<html lang="{{ app()->getLocale() }}" class="min-h-screen">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @isset($title)
        <title>{{ $title }} | {{ config('app.name', 'Laravel') }}</title>
    @else
        <title>{{ config('app.name', 'Laravel') }}</title>
    @endisset

    {{-- @yield('seo') --}}

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/icons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/images/icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/icons/favicon-16x16.png') }}">
    <link rel="shortcut icon" href="{{ asset('/images/icons/favicon.ico') }}">

    <link rel="webmention" href="https://webmention.io/vanrossum.dev/webmention" />
    <link rel="pingback" href="https://webmention.io/vanrossum.dev/xmlrpc" />

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="min-h-screen flex flex-col justify-between">

    <div x-data="{open: false}" @nav.window="open = !open">
        <div x-show="open" x-transition:enter="transition ease-in duration-300"
            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-out duration-300" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            class="absolute top-0 left-0 w-full h-full text-white mt-[75px] z-10 p-8"
            style="background-image:url({{ url('/assets/footer.png') }});">
            <nav aria-label="mobile nav" class="border-b border-white/25 pb-12 mb-12">

            </nav>

            <div class="flex gap-4">
            </div>
        </div>
    </div>

    <div>
        <div class="w-full flex justify-between border-b border-[#e9e9e9]">
            <div class="flex items-center">
                <a href="{{ config('app.url') }}" class="border-r border-[#e9e9e9] lg:pr-8 flex items-center gap-8">
                    <x-symbol class="h-[75px] lg:h-[100px]" />

                    <span class="text-[25px] text-primary font-wide font-medium hidden lg:block">vanrossum.dev</span>
                </a>

                <nav class="px-8 gap-8 text-[18px] font-medium font-wide hidden lg:flex">
                    @include('layouts.partials.navigation')
                </nav>

            </div>
            <div class="flex text-[18px] font-medium font-wide items-center">
                <div x-data="{open: false}" class="lg:hidden px-8">
                    <button x-on:click="open = !open; $dispatch('nav')">
                        <svg x-show="!open" width="27px" height="16px" viewBox="0 0 27 16" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Home" transform="translate(-324.000000, -29.000000)" fill="#02FB90">
                                    <g id="Group-9" transform="translate(324.000000, 29.000000)">
                                        <rect id="Rectangle" x="0" y="14" width="27" height="2"></rect>
                                        <rect id="Rectangle-Copy" x="0" y="7" width="27" height="2"></rect>
                                        <rect id="Rectangle-Copy-2" x="0" y="0" width="27" height="2"></rect>
                                    </g>
                                </g>
                            </g>
                        </svg>

                        <svg x-show="open" width="21px" height="22px" viewBox="0 0 21 22" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Menu" transform="translate(-327.000000, -26.000000)" fill="#02FB90">
                                    <g id="Group"
                                        transform="translate(337.500000, 37.000000) rotate(-315.000000) translate(-337.500000, -37.000000) translate(324.000000, 23.500000)">
                                        <rect id="Rectangle"
                                            transform="translate(13.500000, 13.500000) rotate(-270.000000) translate(-13.500000, -13.500000) "
                                            x="1.59161573e-12" y="12.5" width="27" height="2"></rect>
                                        <rect id="Rectangle-Copy-2" x="0" y="12.5" width="27" height="2"></rect>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </button>
                </div>
                <div class="gap-4 px-8 hidden lg:flex">
                    @foreach (config('app.locales') as $locale)
                        <a href="{{ current_route($locale) }}" class="uppercase text-primary border-b-2 {{ app()->getLocale() == $locale ? 'border-secondary' : 'border-transparent text-primary/20' }}">
                            {{ $locale }}
                        </a>
                    @endforeach
                </div>
                <div class="bg-secondary text-primary px-8 h-full items-center justify-center gap-4 hidden lg:flex">
                    {{ __('Get in touch') }}.
                    <svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Homepage" transform="translate(-1857.000000, -41.000000)" fill="#0C2175"
                                fill-rule="nonzero">
                                <g id="Group"
                                    transform="translate(1865.000000, 49.000000) rotate(-45.000000) translate(-1865.000000, -49.000000) translate(1855.000000, 41.000000)">
                                    <polygon id="Path"
                                        points="9.3143 16 15.6857 9.3487 0 9.3487 0 6.6513 15.6857 6.6513 9.3143 0 12.8857 0 20 7.6322 20 8.3678 12.8857 16">
                                    </polygon>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </div>

        <main>
            {{ $slot }}
        </main>
    </div>

    <footer class="bg-primary text-white lg:h-screen py-12 lg:py-0"
        style="background-image:url({{ url('/assets/footer.png') }});">
        <div class="container mx-auto max-w-screen-xl flex flex-col justify-between h-full px-8 lg:px-0">

            <div></div>

            <div class="lg:flex lg:gap-32 lg:items-center lg:justify-items-stretch">
                <div>
                    <div class="text-[26px] lg:text-3xl font-wide font-bold observe text-reveal"
                        data-splitting="words">{{ __('Let\'s work together') }}</div>

                    <div class="flex gap-6 mt-12 mb-12 lg:mb-0" data-aos="fade-in" data-aos-duration="1000">
                        <a href="#"
                            class="stack-dark px-6 py-3 font-medium bg-white text-primary text-[18px] flex gap-4">
                            {{ __('Shoot me a message') }}
                        </a>
                    </div>
                </div>

                <div class="grow" data-aos="fade-in" data-aos-delay="500" data-aos-duration="1000">
                    <div class="font-medium text-[28px] mb-6">{{ __('Get social') }}</div>
                    <div class="grid grid-cols-2 gap-6 text-base">
                        <a href="#" class="underline">Twitter</a>
                        <a href="#" class="underline">Youtube</a>
                        <a href="#" class="underline">GitHub</a>
                        <a href="#" class="underline">LinkedIn</a>
                    </div>
                </div>

            </div>

            <div
                class="border-t border-white/25 pt-12 lg:py-12 lg:flex lg:justify-between text-center lg:text-left text-base">
                <div>
                    &copy; {{ date('Y') }} | <a href="#" class="underline">Privacy</a>
                </div>
                <div>
                    <a href="https://github.com/jeffreyvr/sponsors" class="underline">Buy me a coffee ☕</a>
                </div>
            </div>
        </div>
    </footer>

    <script defer src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
