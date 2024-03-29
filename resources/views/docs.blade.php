<x-app-layout>
    <x-slot:title>
        {{ $title }} - {{ $projectTitle }} - Docs
    </x-slot>

    <div class="container mx-auto my-8 md:flex md:gap-12">
        <nav x-data="{ open: false }" class="md:w-1/6">
            <button x-on:click="open = ! open" class="md:hidden mb-4 flex items-center gap-1 border rounded-md px-2 py-1 text-xs">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>

                Toggle Index
            </button>

            <div :class="open ? 'border-b pb-4' : 'hidden'" class="doc-links md:block md:sticky text-base top-4 [&_>_ul]:space-y-2 mb-6 md:mb-0">
                {!! $index !!}
            </div>
        </nav>

        <article class="prose prose-pre:shadow-2xl prose-pre:bg-white prose-pre:text-dark prose-pre:shadow-primary/25 prose-code:text-base prose-pre:rounded-xl md:prose-lg prose-headings:text-primary max-w-none prose-headings:font-display md:w-4/6">
            <div class="mb-6 text-sm">
                Documentation for
                <a href="{{ $homepage }}" class="no-underline hover:underline">
                    {{ $projectTitle }}
                </a>
            </div>

            {!! $content !!}
        </article>
    </div>

    <script>
        const navLinks = document.querySelectorAll('.doc-links a');
        const currentIndicatorIcon = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-secondary w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>`;

        navLinks.forEach(link => {
            if (link.href === window.location.href) {
                link.classList.add('flex', 'items-center', 'gap-2', 'text-primary');
                link.innerHTML = currentIndicatorIcon + link.innerHTML;
            }
        });
    </script>
</x-app-layout>
