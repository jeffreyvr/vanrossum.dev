@extends('layouts.app', ['title' => 'Thank you'])

@section('content')
    <div class="bg-white py-12 relative bg-gradient-to-b from-gray-100">
        <article class="max-w-xl md:max-w-3xl mx-auto px-8 md:px-0">
            <header class="mb-8">
                <h1 class="text-5xl font-extrabold leading-tight mb-1">{{ __('Thank you very much!') }}</h1>
            </header>

            <div class="text-xl leading-relaxed markup">
                <p>{{ __('It is much appreciated!') }}</p>
            </div>
        </article>
    </div>
@endsection
