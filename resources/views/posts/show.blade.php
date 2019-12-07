@extends('layouts.app')

@section('content')

<div class="bg-white py-12 relative">
    <article class="max-w-xl md:max-w-3xl mx-auto">
        <header>
            <h1 class="font-bold text-4xl mb-6">{{ $post->title }}</h1>
        </header>

        <div class="text-xl leading-relaxed">
            {!! $post->text !!}
        </div>

    </article>
</div>

@endsection