<article class="mb-8 shadow-3d">
    <div class="p-8 bg-white border border-gray-600 block">
        <span class="block text-xs uppercase text-pink-500 px-2 py-1 inline-block bg-pink-100">
            {{ $post->localized_date }}
        </span>
        <h2 class="text-2xl lg:text-4xl font-bold mt-2">
            <a href="{{ route('posts.show', $post->idSlug()) }}"
                class="leading-relaxed">{{ $post->title }}</a>
        </h2>
        <div class="leading-relaxed my-4">
            {{ $post->excerpt }}
        </div>
    </div>
</article>
