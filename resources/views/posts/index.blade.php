<x-site-layout title="Blog archive">

    <article class="container mx-auto max-w-screen-xl px-8 lg:px-0 my-16">
        <header>
            @isset($tag)
                <h1 class="font-semibold font-wide text-2xl lg:text-3xl mb-6 text-primary">{{ __('Blogs tagged with :tag', ['tag' => $tag->name]) }}</h1>
            @else
                <h1 class="font-semibold font-wide text-2xl lg:text-3xl mb-6 text-primary">{{ __('Blog') }}</h1>
                <p class="mb-8 text-base">{{ __('The posts are all written in English.') }}</p>
            @endif
        </header>

        @foreach($posts as $post)
            @include('posts.block', ['post' => $post])
        @endforeach

        {{ $posts->links() }}

    </article>

</x-site-layout>
