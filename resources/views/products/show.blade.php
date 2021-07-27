@extends('layouts.app', ['title' => $product->name])

@section('content')

    <div class="bg-white py-12 relative bg-gradient-to-b from-gray-100">
        <article class="max-w-xl md:max-w-3xl mx-auto px-8 md:px-0">
            <header>
                <h1 class="font-bold text-4xl mb-6">{{ $product->name }}</h1>
            </header>

            <div>
                @if($product->slogan)
                    <p class="italic text-lg text-gray-600 mb-4">{{ $product->slogan }}</p>
                @endif

                {{ $product->getFormattedPrice() }}

                @if($product->getBuyUrl())
                <div>
                    @if($product->vendor === 'lemonsqueezy')
                        <a href="{{ $product->getBuyUrl() }}" class="inline-block bg-pink-500 text-white px-4 py-2 lemonsqueezy-button">{{ __('Buy now') }}</a>
                        <script src="https://app.lemonsqueezy.com/js/checkout.js" defer></script>
                    @else
                        <a href="{{ $product->getBuyUrl() }}" class="inline-block bg-pink-500 text-white px-4 py-2">{{ __('Buy now') }}</a>
                    @endif
                    </div>
                @endif

                <div class="text-lg md:text-xl leading-relaxed markup">
                    @if($product->long_description)
                        {!! $product->getLongDescription() !!}
                    @endif
                </div>

            </div>

        </article>
    </div>

@endsection
