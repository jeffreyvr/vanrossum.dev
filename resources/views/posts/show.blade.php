<x-app-layout :title="$post->title">
    <div class="mx-auto max-w-screen-md pt-8 lg:pt-20 container">
        <article>
            <header class="mb-8">
                <h1 class="text-xl lg:text-3xl font-semibold font-wide text-primary">{{ $post->title }}</h1>
                <div class="text-sm lg:text-base text-primary">
                    <div>
                        <time datetime="{{ $post->publish_date }}">
                            {{ $post->localized_date }}
                        </time>
                        {{ __('by :name', ['name' => $post->author->name]) }}
                    </div>
                </div>
            </header>

            <x-post-content>
                {!! $post->renderedText() !!}
            </x-post-content>

            @if($post->localized_updated_at_date !== $post->localized_date)
                <div class="text-xs flex items-center gap-2 leading-none mt-6">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                    </svg>

                    {{ __('This post was last modified :date', ['date' => $post->localized_updated_at_date]) }}
                </div>
            @endif

            @if($post->tags)
            <ul class="flex gap-2 my-8 py-8 border-y border-primary/5">
                @foreach($post->tags->sortBy->name as $tag)
                <li>
                    <a href="{{ route('posts.tagged', $tag->slug) }}" class="bg-gray-200 px-2 py-1 rounded text-sm">
                        <i class="fa fa-tag text-xs text-gray-500" aria-hidden="true"></i>
                        {{ $tag->name }}
                    </a>
                </li>
                @endforeach
            </ul>
            @endif
        </article>

        @isset($post->tweet_url)
        <div class="my-4">
            <div>
                <h2 class="text-lg mb-4 text-wide font-medium" id="comments">{{ __('Comments') }}</h2>
                <div class="bg-primary/5 px-6 py-4 mb-8 text-base">
                    {!! __('Talk about this article on :x_link.', ['x_link' => "<a
                        href=\"{$post->tweet_url}\" class=\"text-secondary underline\">X</a>" ]) !!}
                </div>
            </div>

            @foreach ($post->webmentions as $mention)
            <div class="mb-6 text-sm border-b-primary/5 border-b pb-6">
                <div class="flex gap-6 items-center">
                    <div class="flex-shrink-0"><img src="{{ $mention->author_photo_url }}" class="h-12 w-12 rounded-full"></div>
                    <div>
                        <span class="text-gray-700">
                            <a class="underline" href="{{ $mention->interaction_url }}">{{
                                $mention->getTypeActionLabel() }}</a>
                        </span>
                        <a class="font-bold no-underline text-gray-900" href="{{ $mention->author_url }}">{{ __('by
                            :name', ['name' => $mention->author_name]) }}</a>

                        @if($mention->text)
                        <div class="mt-2 text-xs">
                            {{ $mention->text }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endisset

        @include('partials.newsletter')

    </div>

@section('seo')
    <meta property="og:title" content="{{ $post->title }}" />
    <meta property="og:description" content="{{ $post->excerpt }}" />
    <link rel="canonical" href="{{ route('posts.show', $post->idSlug()) }}" />
    @foreach($post->tags as $tag)
    <meta property="article:tag" content="{{ $tag->name }}" />
    @endforeach
    <meta property="article:published_time" content="{{ Carbon::parse($post->publish_date)->toIso8601String() }}" />
    <meta property="og:updated_time" content="{{ $post->updated_at->toIso8601String() }}" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="{{ $post->excerpt }}" />
    <meta name="twitter:title" content="{{ $post->title }}" />
    <meta name="twitter:site" content="@jeffreyrossum" />
    <meta name="twitter:image" content="{{ url('images/twitter-card.jpg') }}" />
    <meta name="twitter:creator" content="@jeffreyrossum" />
@endsection
</x-site-layout>
