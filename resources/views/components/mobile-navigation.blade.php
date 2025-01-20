<div x-data="{open: false}">
    <button type="button" aria-label="Open mobile navigation" x-on:click="open = true" class="flex md:hidden items-center text-sm gap-1 text-zinc-900 dark:text-zinc-300 group rounded-full bg-white/90 px-3 py-2 shadow-lg shadow-zinc-800/5 ring-1 ring-zinc-900/5 backdrop-blur transition dark:bg-zinc-800/90 dark:ring-white/10 dark:hover:ring-white/20">
        Menu

        <x-heroicon-m-chevron-down class="size-4" />
    </button>

    <template x-teleport="body">
        <div x-dialog x-model="open" x-cloak class="fixed inset-0 z-50 overflow-y-auto">
            <div x-dialog:overlay x-transition.opacity class="fixed inset-0 bg-black/25"></div>

            <div class="relative flex min-h-screen items-start justify-center p-4">
                <div x-dialog:panel x-transition class="relative min-w-96 max-w-xl rounded-xl bg-white p-6 shadow-lg">
                    <div class="absolute right-0 top-0 mr-4 mt-4">
                        <button type="button" @click="$dialog.close()" class="relative inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md bg-transparent p-1.5 font-medium text-gray-400 hover:bg-gray-800/10 hover:text-gray-800">
                            <span class="sr-only">Close modal</span>
                            <svg class="size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z"></path>
                            </svg>
                        </button>
                    </div>

                    <div>
                        <h2 x-dialog:title class="font-medium text-gray-800">{{ __('Navigation') }}</h2>
                        <div class="mt-4 text-gray-500 max-w-xs">
                            <div class="flex flex-col gap-4">
                                @include('layouts.partials.navigation')
                            </div>

                            @if(!request()->routeIs('posts')&&!request()->routeIs('posts.show'))
                            <div class="flex justify-end mt-4 gap-2 text-zinc-800 dark:text-zinc-300 pr-4 font-medium">
                                @foreach (config('app.locales') as $locale)
                                <a href="{{ current_route($locale) }}"
                                    class="{{ app()->getLocale() == $locale ? 'text-zinc-800 dark:text-zinc-400' : 'text-zinc-400 dark:text-zinc-600' }}">
                                    {{ $locale }}
                                </a>
                                @endforeach
                            </div>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </template>
</div>
