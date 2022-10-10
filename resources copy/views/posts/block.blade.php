<article class="">
    <div class="py-8 border-t block">
        <h2 class="text-2xl lg:text-3xl font-wide font-medium mt-2">
            <a href="{{ route('posts.show', $post->idSlug()) }}"
                class="leading-relaxed text-primary">{{ $post->title }}</a>
        </h2>
        <div class="leading-relaxed mt-2">
            {{ $post->excerpt }}
        </div>
    </div>
</article>
