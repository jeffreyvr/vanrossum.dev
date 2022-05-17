<article class="">
    <div class="py-8 border-t block">
        <span class="block text-xs uppercase text-primary px-2 py-1 inline-block bg-gray-200">
            {{ $post->localized_date }}
        </span>
        <h2 class="text-2xl lg:text-4xl font-semibold mt-2">
            <a href="{{ route('posts.show', $post->idSlug()) }}"
                class="leading-relaxed text-primary">{{ $post->title }}</a>
        </h2>
        <div class="leading-relaxed mt-2">
            {{ $post->excerpt }}
        </div>
    </div>
</article>
