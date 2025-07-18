<!doctype html>
<html lang="{{ app()->getLocale() }}"
    class="h-full antialiased"
    x-data="{
        darkMode: localStorage.getItem('darkMode') ?? null,

        init() {
            if(! localStorage.getItem('darkMode')) {
                localStorage.setItem('darkMode', window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light')

                this.darkMode = localStorage.getItem('darkMode')
            }

            this.$watch('darkMode', val => localStorage.setItem('darkMode', val))
        }
    }"
    :class="darkMode === 'dark' ? 'dark' : ''">
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

    <link rel="webmention" href="https://webmention.io/vanrossum.dev/webmention" />
    <link rel="pingback" href="https://webmention.io/vanrossum.dev/xmlrpc" />

    <script defer src="https://unpkg.com/@alpinejs/ui@3.14.8/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/@alpinejs/focus@3.14.8/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.14.8/dist/cdn.min.js"></script>

    @if(app()->environment('production') && $fathom_id = config('services.fathom.site_id'))
    <script src="https://cdn.usefathom.com/script.js" data-site="{{ $fathom_id }}" defer></script>
    @endif

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    @yield('styles')
</head>

<body class="flex h-full bg-zinc-50 dark:bg-black">
    <div class="fixed inset-0 flex justify-center sm:px-8">
        <div class="flex container"><div class="w-full bg-white ring-1 ring-zinc-100 dark:bg-zinc-900 dark:ring-zinc-300/20"></div></div>
    </div>

    <div class="relative flex w-full flex-col">
        <div class="mx-auto min-h-screen container bg-white dark:bg-zinc-900 md:border-x border-zinc-100 dark:border-zinc-800">
            <header class="bg-white/50 dark:bg-zinc-900/50 backdrop-blur-sm inline-block w-full bg-gradient-to-b from-white dark:from-zinc-900 to-white/50 dark:to-transparent px-6 md:px-20 py-4 sticky top-0 z-10">
                <div class="flex justify-between items-center relative w-full">
                    <a href="{{ localized_route('home') }}" class="flex items-center gap-2 md:gap-4">
                        <x-symbol class="h-[30px] md:h-[40px] rounded-lg dark:border-secondary/10 dark:border" />
                        <span class="text-xs md:text-sm xl:text-base text-primary dark:text-zinc-300 font-wide font-medium">{{ config('app.name') }}</span>
                    </a>

                    <div class="absolute left-1/2 transform -translate-x-1/2">
                        <div class="absolute -top-10 w-full h-[50px] bg-gradient-to-b from-secondary/90 dark:from-secondary/25 to-transparent blur-xl"></div>
                        <nav class="dark:text-zinc-300 px-8 gap-8 text-xs sm:text-lg lowercase font-medium hidden md:flex md:justify-center relative">
                            @include('layouts.partials.navigation')
                        </nav>
                    </div>

                    <div class="flex items-center justify-end">
                        @if(!request()->routeIs('posts')&&!request()->routeIs('posts.show'))
                            <div class="hidden md:flex md:gap-2 text-zinc-800 dark:text-zinc-300 pr-4 font-medium">
                                @foreach (config('app.locales') as $locale)
                                <a href="{{ current_route($locale) }}"
                                    class="{{ app()->getLocale() == $locale ? 'text-zinc-800 dark:text-zinc-400' : 'text-zinc-400 dark:text-zinc-600' }}">
                                    {{ $locale }}
                                </a>
                                @endforeach
                            </div>
                        @endif

                        <div class="flex gap-4 items-center">
                            <x-mobile-navigation />


                            <button type="button" aria-label="Toggle system appearance" x-on:click="darkMode = darkMode == 'dark' ? 'light' : 'dark'" class="text-zinc-900 dark:text-zinc-300 group rounded-full bg-white/90 px-3 py-2 shadow-lg shadow-zinc-800/5 ring-1 ring-zinc-900/5 backdrop-blur transition dark:bg-zinc-800/90 dark:ring-white/10 dark:hover:ring-white/20">
                                <x-heroicon-o-sun class="size-5" x-show="darkMode != 'dark'" />
                                <x-heroicon-o-moon class="size-5" x-show="darkMode != 'light'" />
                            </button>
                        </div>
                    </div>
                </div>
            </header>

            <main class="relative py-4 px-6 mt-10 sm:mt-20 md:px-12 lg:px-20">
                {{ $slot }}
            </main>

            <footer class="mt-32 flex-none text-zinc-400 dark:text-zinc-500">
                <div class="md:flex md:justify-between py-6 px-6 md:px-12 lg:px-20 border-t dark:border-zinc-800 border-zinc-100 text-sm">
                    <div class="mb-6 md:mb-0">
                        &copy; {{ date('Y') }} vanrossum.dev. All rights reserved.
                    </div>
                    <div class="text-zinc-800 dark:text-zinc-300 flex items-center gap-6">
                        <a href="{{ localized_route('privacy') }}" aria-label="Privacy policy">
                            {{ __('Privacy') }}
                        </a>

                        <div class="h-full w-[1px] bg-black/10 dark:bg-white/10"></div>

                        <a href="https://x.com/jeffreyrossum" aria-label="X profile">
                            <x-fab-x-twitter class="size-5" />
                        </a>

                        <a href="https://github.com/jeffreyvr" aria-label="GitHub profile">
                            <x-fab-github class="size-5" />
                        </a>

                        <a href="https://youtube.com/@jeffrey.rossum" aria-label="YouTube channel">
                            <x-fab-youtube class="size-5" />
                        </a>

                        <a href="https://linkedin.com/in/jeffrey-van-rossum-97b27321" aria-label="LinkedIn profile">
                            <x-fab-linkedin class="size-5" />
                        </a>

                        <a href="{{ localized_route('contact') }}" aria-label="Contact me">
                            <x-heroicon-c-at-symbol class="size-5" />
                        </a>
                    </div>
                </div>
                <div class="border-t py-6 px-6 md:px-12 lg:px-20 text-xs md:text-center leading-relaxed dark:border-zinc-800 border-zinc-100">
                    <div>
                        PHP, Tailwind CSS, Alpine.js, Laravel, Livewire, and WordPress are trademarks of their respective owners, used for identification only without endorsement.                    </div>
                </div>
            </footer>
        </div>
    </div>

    @yield('scripts')

    <script defer src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
