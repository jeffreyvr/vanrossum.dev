@extends('layouts.app', ['title' => $product->name])

@section('content')

    <div class="bg-white py-12 relative bg-gradient-to-b from-gray-100">
        <article class="max-w-xl md:max-w-3xl mx-auto px-8 md:px-0">
            <header class="bg-white p-8 shadow-3d border mb-8">
                <h1 class="font-bold text-4xl mb-6">{{ $product->name }}</h1>

                @if($product->slogan)
                    <p class="italic text-lg text-gray-600 mb-4">{{ $product->slogan }}</p>
                @endif
            </header>

            <div>
                <p>{{ __('Thank you for purchasing :name!', ['name' => $product->name]) }}<p>
            </div>
        </article>
    </div>

@endsection
