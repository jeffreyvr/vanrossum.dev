<x-site-layout :title="__('Jeffrey van Rossum - Freelance PHP developer specialized in Laravel and WordPress')">
    @include('pages.home.'.app()->getLocale().'.introduction')

    <div class="ml-[calc(50%_-_50vw)] mr-[calc(50%_-_50vw)] py-12 md:py-20 overflow-x-hidden flex justify-center gap-8">
        <!-- travel -->
        <div class="relative group hover:z-10 w-44 sm:w-72 shrink-0">
            <img src="{{ url('images/pic-5.png') }}" alt="Apple Store Singapore" class="w-full hidden md:block saturate-75 rounded-3xl h-48 object-cover rotate-3 group-hover:rotate-0 group-hover:scale-110 transition" />
            <div class="group-hover:opacity-100 transition opacity-0 absolute left-2 text-xs text-zinc-800 -bottom-8 dark:text-zinc-400">
                Visiting the Apple Store Singapore
            </div>
        </div>

        <!-- coffee -->
        <div class="relative group hover:z-10 w-44 sm:w-72 shrink-0">
            <img src="{{ url('images/pic-4.png') }}" alt="Coding and coffee is magic" class="w-full saturate-75 rounded-3xl h-48 object-cover -rotate-3 group-hover:rotate-0 group-hover:scale-110 transition" />
            <div class="group-hover:opacity-100 transition opacity-0 absolute left-2 text-xs text-zinc-800 -bottom-8 dark:text-zinc-400">
                👨‍💻 + ☕ = ✨
            </div>
        </div>

        <!-- desk -->
        <div class="relative group hover:z-10 w-44 sm:w-72 shrink-0">
            <img src="{{ url('images/me@work.jpg') }}" alt="My desk" class="w-full saturate-75 rounded-3xl h-48 object-cover rotate-3 group-hover:rotate-0 group-hover:scale-110 transition" />
            <div class="group-hover:opacity-100 transition opacity-0 absolute left-2 text-xs text-zinc-800 -bottom-8 dark:text-zinc-400">
                Where the magic happens
            </div>
        </div>

        <!-- guitar -->
        <div class="relative group hover:z-10 w-44 sm:w-72 shrink-0 ">
            <img src="{{ url('images/pic-6.png') }}" alt="My guitars" class="w-full saturate-75 rounded-3xl h-48 object-cover -rotate-3 group-hover:rotate-0 group-hover:scale-110 transition" />
            <div class="group-hover:opacity-100 transition opacity-0 absolute left-2 text-xs text-zinc-800 -bottom-8 dark:text-zinc-400">
                Now if I could only play a decent tune...
            </div>
        </div>

        <!-- laracon -->
        <div class="relative group hover:z-10 w-44 sm:w-72 shrink-0">
            <img src="{{ url('images/pic-2.png') }}" alt="Taylor Otwell at Laracon" class="hidden md:block saturate-75 rounded-3xl h-48 object-cover rotate-3 group-hover:rotate-0 group-hover:scale-110 transition" />
            <div class="group-hover:opacity-100 transition opacity-0 absolute left-2 text-xs text-zinc-800 -bottom-8 dark:text-zinc-400">
                Watching Taylor Otwell in action at Laracon
            </div>
        </div>
    </div>

    <section class="py-8">
        <x-heading level="2" size="lg">{{ __('Specializations') }}</x-heading>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-12">
            @foreach(App\Service::where('lang', app()->getLocale())->get() as $service)
                <a href="{{ $service['url'] }}" class="hover:bg-zinc-50 dark:hover:bg-black/10 p-6 border-zinc-100 dark:border-zinc-800 border rounded-xl transition">
                    @svg('si-'.strtolower($service['title']), ['class' => 'size-8 mb-4 dark:text-zinc-300'])

                    <x-heading level="3">{{ $service['title'] }}</x-heading>

                    <x-content class="[&_p]:mt-4">{!! $service['description'] !!}</x-content>

                    {{-- <x-button-link href="{{ $service['url'] }}" :arrow="true">{{ __('Read more') }}</x-button-link> --}}
                </a>
            @endforeach
        </div>
    </section>

    <section class="py-8">
        <x-heading level="2" size="lg">{{ __('The techstack') }}</x-heading>
        <div class="mb-8 text-lg max-w-2xl text-zinc-600 dark:text-zinc-400">
            <p>These are the most important tools I love and use to get things done.</p>
        </div>
        <div class="flex flex-wrap gap-3 md:gap-6">
            <a href="https://php.net" class="font-semibold px-4 py-2 rounded-full inline-flex items-center gap-2 bg-[#4F5B93] hover:text-white text-white/90"><x-si-php class="size-4" /> PHP</a>
            <a href="https://tailwindcss.com" class="font-semibold px-4 py-2 rounded-full inline-flex items-center gap-2 bg-[#0FA4E9] hover:text-white text-white/90"><x-si-tailwindcss class="size-4" /> Tailwind CSS</a>
            <a href="https://alpinejs.dev" class="font-semibold px-4 py-2 rounded-full inline-flex items-center gap-2 bg-[#77C1D2] hover:text-white text-white/90"><x-si-alpinedotjs class="size-4" /> Alpine.js</a>
            <a href="https://laravel.com" class="font-semibold px-4 py-2 rounded-full inline-flex items-center gap-2 bg-[#EC4231] hover:text-white text-white/90"><x-fab-laravel class="size-4" /> Laravel</a>
            <a href="https://livewire.laravel.com" class="font-semibold px-4 py-2 rounded-full inline-flex items-center gap-2 bg-[#D5558C] hover:text-white text-white/90"><x-si-livewire class="size-4" /> Livewire</a>
            <a href="https://wordpress.org" class="font-semibold px-4 py-2 rounded-full inline-flex items-center gap-2 bg-[#3858E8] hover:text-white text-white/90"><x-si-wordpress class="size-4" /> WordPress</a>
            {{-- <a href="https://www.postgresql.org" class="font-semibold px-4 py-2 rounded-full inline-flex items-center gap-2 bg-[#336791] hover:text-white text-white/90"><x-si-postgresql class="size-4" />Postgres</a> --}}
            {{-- <a href="https://www.mysql.com" class="font-semibold px-4 py-2 rounded-full inline-flex items-center gap-2 bg-[#02758F] hover:text-white text-white/90"><x-si-mysql class="size-4" /> MySQL</a> --}}
        </div>
    </section>

    <section class="my-12">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-12">
            <div class="md:col-span-3">
                <x-heading level="2" size="lg">{{ __('My writings') }}</x-heading>

                <div class="flex flex-col gap-16 my-8">
                    @foreach($posts as $post)
                        <x-post :$post />
                    @endforeach
                </div>
            </div>
            <sidebar class="md:col-span-2 flex flex-col gap-6">
                <div class="rounded-2xl border border-zinc-100 p-6 dark:border-zinc-700/40">
                    <x-heading size="sm" class="flex items-center gap-2">
                        <x-heroicon-o-envelope class="size-5 text-zinc-500 dark:text-zinc-400" />
                        <span>{{ __('Stay up to date') }}</span>
                    </x-heading>

                    <x-text class="text-sm mb-4 leading-relaxed" muted>{{ __("If you'd like to keep up to date, feel free to subscribe to my newsletter.") }}</x-text>

                    <form
                    action="https://doubletakepigeon.us18.list-manage.com/subscribe/post?u=ec10dbb2a4630f8513ad86a36&amp;id=56c35552e7"
                    method="post"
                    target="_blank"
                    novalidate>
                        <div class="flex flex-col md:flex-row items-start md:items-center gap-2">
                            <input type="email" name="EMAIL" placeholder="{{ __('Enter your email') }}" required class="bg-white dark:bg-zinc-800 grow px-3 py-2.5 border dark:border-zinc-700 rounded-md shadow-sm text-sm" />
                            <button type="submit" name="subscribe" class="bg-zinc-800 font-semibold px-3 py-2.5 rounded-md text-white ring ring-transparent border border-zinc-800/10">{{ __('Subscribe') }}</button>
                        </div>

                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                            <input type="text" name="b_ec10dbb2a4630f8513ad86a36_56c35552e7" tabindex="-1" value="">
                        </div>
                    </form>
                </div>

                <div class="rounded-2xl border border-zinc-100 p-6 dark:border-zinc-700/40">
                    <x-heading size="sm">{{ __('Open source') }}</x-heading>

                    <div class="flex gap-4 mb-5 relative">
                        <a href="https://pavereditor.com" class="absolute top-0 left-0 w-full h-full"></a>
                        <div>
                            <div class="bg-white p-1 h-10 w-10 rounded-full shadow-sm border">
                                <div class="bg-[#0691B1] w-full h-full rounded-full flex items-center justify-center">
                                    <x-svgs.paver-emblem class="h-4" />
                                </div>
                            </div>
                        </div>
                        <div>
                            <x-text class="font-semibold text-sm">Paver</x-text>
                            <x-text muted class="text-sm">Paver is a drag and drop editor for PHP developers.</x-text>
                        </div>
                    </div>

                    <div class="flex gap-4 mb-5 relative">
                        <a href="https://tailpress.io" class="absolute top-0 left-0 w-full h-full"></a>
                        <div>
                            <div class="bg-white p-1 h-10 w-10 rounded-full shadow-sm border">
                                <div class="bg-black/5 w-full h-full rounded-full flex items-center justify-center">
                                    <x-svgs.tailpress-emblem class="h-4" />
                                </div>
                            </div>
                        </div>
                        <div>
                            <x-text class="font-semibold text-sm">TailPress</x-text>
                            <x-text muted class="text-sm">TailPress is a minimal boilerplate theme for WordPress using Tailwind CSS.</x-text>
                        </div>
                    </div>

                    <div class="flex gap-4 mb-5 relative">
                        <a href="https://github.com/jeffreyvr/wp-settings" class="absolute top-0 left-0 w-full h-full"></a>
                        <div>
                            <div class="bg-white p-1 h-10 w-10 rounded-full shadow-sm border">
                                <div class="bg-secondary w-full h-full rounded-full flex items-center justify-center">
                                    <x-heroicon-o-wrench class="h-4 text-primary" />
                                </div>
                            </div>
                        </div>
                        <div>
                            <x-text class="font-semibold text-sm">WP Settings</x-text>
                            <x-text muted class="text-sm">A package that makes creating WordPress settings pages a breeze.</x-text>
                        </div>
                    </div>

                    <div class="flex gap-4 mb-5 relative">
                        <a href="https://wordpress.org/plugins/easy-liveblogs" class="absolute top-0 left-0 w-full h-full"></a>
                        <div>
                            <div class="bg-white p-1 h-10 w-10 rounded-full shadow-sm border">
                                <div class="bg-primary w-full h-full rounded-full flex items-center justify-center">
                                    <x-heroicon-o-arrow-path class="h-4 text-secondary" />
                                </div>
                            </div>
                        </div>
                        <div>
                            <x-text class="font-semibold text-sm">Easy Liveblogs</x-text>
                            <x-text muted class="text-sm">A WordPress plugin which aims to allow people to easily add liveblogs to their site.</x-text>
                        </div>
                    </div>

                    <div class="flex gap-4 mb-5 relative">
                        <a href="https://dropblockeditor.com" class="absolute top-0 left-0 w-full h-full"></a>
                        <div>
                            <div class="bg-white p-1 h-10 w-10 rounded-full shadow-sm border">
                                <div class="bg-black/5 w-full h-full rounded-full flex items-center justify-center">
                                    <x-svgs.dropblockeditor-emblem class="h-4" />
                                </div>
                            </div>
                        </div>
                        <div>
                            <x-text class="font-semibold text-sm">DropBlockEditor</x-text>
                            <x-text muted class="text-sm">Drag and drop editor for Livewire powered blocks.</x-text>
                        </div>
                    </div>

                    <a href="https://github.com/jeffreyvr?tab=repositories" class="bg-zinc-50 hover:bg-zinc-100 dark:hover:bg-zinc-800/90 dark:bg-zinc-800 dark:text-white py-2.5 text-sm font-semibold text-center px-4 w-full block rounded-md">{{ __('View more') }}</a>
                </div>
            </sidebar>
        </div>
    </section>
</x-site-layout>
