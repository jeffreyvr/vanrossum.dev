@extends('layouts.app', [
    'title' => $post->title
])

@section('content')
<div class="bg-white py-12 relative">
    <article class="max-w-xl md:max-w-3xl mx-auto px-8 md:px-0">
        <header class="mb-8">
            <h1 class="text-5xl font-extrabold leading-tight mb-1">{{ $post->title }}</h1>
            <p class="text-sm text-gray-700">
                <time datetime="{{ $post->publish_date }}">
                    {{ $post->localized_date }}
                </time>
                {{ __('by :name', ['name' => $post->author->name]) }}
                @auth
                    –
                    <a target="_blank" href="{{ route('posts.edit', $post) }}">{{ __('Edit') }}</a>
                @endauth
            </p>
        </header>

        <div class="text-xl leading-relaxed markup">
            {!! $post->renderedText() !!}
        </div>

    </article>
</div>
@endsection

@section('seo')
    <meta property="og:title" content="{{ $post->title }}"/>
    <meta property="og:description" content="{{ $post->excerpt }}"/>
    <meta property="article:published_time" content="{{ Carbon::parse($post->publish_date)->toIso8601String() }}"/>
    <meta property="og:updated_time" content="{{ $post->updated_at->toIso8601String() }}"/>
@endsection