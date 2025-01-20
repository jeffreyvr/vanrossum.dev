@props([
    'product' => null,
])
<article class="relative group">
    <div class="absolute -inset-x-4 -inset-y-6 z-0 scale-95 bg-zinc-50 opacity-0 transition group-hover:scale-100 group-hover:opacity-100 sm:-inset-x-6 sm:rounded-2xl dark:bg-zinc-800/50"></div>

    {{-- <time class="mb-4 relative z-10 order-first flex items-center text-sm text-zinc-400 dark:text-zinc-500 pl-3.5" datetime="{{ $post->publish_date }}"><span class="absolute inset-y-0 left-0 flex items-center" aria-hidden="true"><span class="h-4 w-0.5 rounded-full bg-zinc-200 dark:bg-zinc-500"></span></span>September 5, 2022</time> --}}

    <div class="relative flex flex-col md:flex-row gap-12 justify-between items-start">
        <img src="{{ $product->getFirstMediaUrl('product-image') }}" class="md:order-last shrink-0 rounded-xl w-52 h-auto">

        <div>
            <a href="{{ route('products.show', $product) }}" class="mb-4 block">
                <span class="absolute -inset-x-4 -inset-y-6 z-20 sm:-inset-x-6 sm:rounded-2xl"></span>
                <span class="relative z-10 font-semibold text-zinc-800 dark:text-zinc-300 ">{{ $product->title }}</span>
            </a>
            <div class="text-zinc-800 dark:text-zinc-300 leading-relaxed text-sm">
                {!! $product->summary !!}
            </div>
            <div class="text-primary dark:text-secondary/90 font-semibold text-sm mt-4 flex items-center gap-1">
                View product <x-heroicon-s-chevron-right class="size-3" />
            </div>
        </div>
    </div>
</article>
