@extends('layouts.app', [
'title' => $post->title
])

@section('content')
<div class="bg-white py-12 relative">
    <div class="max-w-xl md:max-w-3xl mx-auto px-8 md:px-0">
        <div class="markup leading-normal text-md text-gray-800 mb-6 bg-yellow-200 p-4">
            <p><strong>Wouldn't you like for invoicing to be just done quick and simple?</strong> <a href="https://addrow.io">Addrow</a> does just that. You can create invoices and send them as 
                a PDF to your customers by email, send reminders automatically, include payment links and much more! And yes, there is an API too. 
                <a href="https://addrow.io/register">Try it out for free</a></p>
        </div>
        <article>
            <header class="mb-8">
                <h1 class="text-3xl md:text-5xl font-extrabold leading-tight mb-1">{{ $post->title }}</h1>
                <div class="text-sm text-gray-700">
                    <time datetime="{{ $post->publish_date }}">
                        {{ $post->localized_date }}
                    </time>
                    {{ __('by :name', ['name' => $post->author->name]) }}
                    @can('update', $post)
                    –
                    <a target="_blank" href="{{ route('posts.edit', $post) }}">{{ __('Edit') }}</a>
                    –
                    <form method="POST" action="{{ route('posts.delete', $post) }}" class="inline-block"
                        onsubmit="return confirm('{{ __('Are you sure?') }}')">
                        @method('DELETE')
                        @csrf

                        <button type="submit" class="text-red-500">{{ __('Delete') }}</button>
                    </form>
                    @endcan
                </div>
            </header>

            <div class="text-lg md:text-xl leading-relaxed markup">
                {!! $post->renderedText() !!}
            </div>

        </article>
    </div>
</div>
@endsection

@section('seo')
<meta property="og:title" content="{{ $post->title }}" />
<meta property="og:description" content="{{ $post->excerpt }}" />
<meta property="article:published_time" content="{{ Carbon::parse($post->publish_date)->toIso8601String() }}" />
<meta property="og:updated_time" content="{{ $post->updated_at->toIso8601String() }}" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="{{ $post->excerpt }}" />
<meta name="twitter:title" content="{{ $post->title }}" />
<meta name="twitter:site" content="@jeffreyrossum" />
<meta name="twitter:image" content="{{ url('images/avatar.jpg') }}" />
<meta name="twitter:creator" content="@jeffreyrossum" />
@endsection