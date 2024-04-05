<!doctype html>
<html lang="{{ app()->getLocale() }}" class="min-h-screen">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ? $title . ' - ' . config('app.name', 'Laravel') : config('app.name', 'Laravel') }}</title>

    @yield('seo')

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/icons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/images/icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/icons/favicon-16x16.png') }}">
    <link rel="shortcut icon" href="{{ asset('/images/icons/favicon.ico') }}">

    @if(app()->environment('production') && $fathom_id = config('services.fathom.site_id'))
    <script src="https://cdn.usefathom.com/script.js" data-site="{{ $fathom_id }}" defer></script>
    @endif

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    @yield('styles')
</head>

<body class="min-h-screen antialiased flex flex-col justify-between text-dark">
    <div class="relative z-10 min-h-screen bg-white">
        <div class="w-full flex justify-between border-b border-[#e9e9e9]">
            <div class="flex items-center">
                <a href="{{ localized_route('home') }}" class="border-r border-[#e9e9e9] lg:pr-8 flex items-center gap-8">
                    <x-symbol class="h-[75px] lg:h-[80px]" />

                    <span class="text-sm xl:text-base text-primary font-wide font-medium hidden lg:block">{{ config('app.name') }}</span>
                </a>
            </div>

            <div class="flex text-[18px] font-medium font-wide items-center">
                <nav class="px-8 gap-8 text-xs xl:text-base lowercase font-medium font-wide hidden lg:flex">
                    @yield('navigation')
                </nav>
                <div x-data="{open: false}" class="lg:hidden px-8">
                    <button x-on:click="open = !open; $dispatch('nav')" class="flex items-center gap-6">
                        <span x-show="!open">menu.</span>
                        <span x-show="open">{{__('close.')}}</span>

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

                <a href="{{ route('products') }}"
                    class="border-l text-primary px-8 h-full items-center justify-center gap-4 hidden xl:flex">
                    <x-svgs.arrow-left />
                    {{ __('Back to products') }}
                </a>
            </div>
        </div>

        <main>
            {{ $slot }}
        </main>
    </div>

    @include('layouts.partials.footer')

    @yield('navigation-modal')

    @yield('scripts')
    <script defer src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
