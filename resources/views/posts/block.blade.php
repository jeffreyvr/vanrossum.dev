<article class="mb-8 shadow-3d">
    <div class="p-8 border border-gray-600 block">
        <span class="block text-xs uppercase text-white px-2 py-1 inline-block bg-pink-500">
            {{ $post->localized_date }}
        </span>
        <h2 class="text-4xl font-bold mt-2">
            <a href="{{ route('posts.show', $post->idSlug()) }}"
                class="border-yellow-300 border-solid border-b-4 leading-relaxed">{{ $post->title }}</a>
        </h2>
        <div class="leading-relaxed my-4">
            {{ $post->excerpt }}
        </div>
    </div>
</article>
