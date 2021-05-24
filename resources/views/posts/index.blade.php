@extends('layouts.app', ['title' => 'Blog archive'])

@section('content')

    <div class="bg-white py-12 relative bg-gradient-to-b from-gray-100">
        <article class="max-w-xl md:max-w-3xl mx-auto px-8 md:px-0">
            <header>
                <h1 class="font-bold text-4xl mb-6">{{ __('Posts') }}</h1>
            </header>

            <p class="mb-8">{{ __('The posts are all written in English.') }}</p>

            @foreach( $posts as $post)
                @include('posts.block', ['post' => $post])
            @endforeach

            {{ $posts->links() }}

        </article>
    </div>

@endsection
