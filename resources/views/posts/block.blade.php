<article class="mb-8 block">
    <span class="block text-xs uppercase text-pink-500">
        {{ $post->localized_date }}
    </span>
    <h2 class="text-2xl font-bold mt-2">
        <a href="{{ route('posts.show', $post->idSlug()) }}"
            class="border-yellow-300 border-solid border-b-2 leading-relaxed">{{ $post->title }}</a>
    </h2>
    <div class="leading-relaxed">
        {{ $post->excerpt }}
    </div>
</article>