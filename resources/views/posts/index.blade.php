<x-site-layout title="Blog archive">

    <article class="container mx-auto">
        <header>
            @isset($tag)
                <x-heading level="1" size="2xl" period>{{ __('Blogs tagged with :tag', ['tag' => $tag->name]) }}</x-heading>
            @else
                <x-heading level="1" size="2xl" period>{{ __('Blog') }}</x-heading>
            @endif
        </header>

        <div class="my-12 flex flex-col gap-16">
            @foreach($posts as $post)
                <x-post :$post />
            @endforeach
        </div>

        <div class="mt-6">{{ $posts->links() }}</div>

    </article>

</x-site-layout>
