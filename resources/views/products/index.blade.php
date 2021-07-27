@extends('layouts.app', ['title' => 'Products'])

@section('content')

    <div class="bg-white py-12 relative bg-gradient-to-b from-gray-100">
        <article class="max-w-xl md:max-w-3xl mx-auto px-8 md:px-0">
            <header>
                <h1 class="font-bold text-4xl mb-6">{{ __('Products') }}</h1>
            </header>

            <div class="grid grid-cols-2 gap-4">
                @foreach($products as $product)
                    <div class="shadow-3d bg-white border p-8">
                        <div>
                            <h2 class="text-3xl font-bold mb-4"><a href="{{ $product->getUrl() }}">{{ $product->name }}</a></h2>

                            @if($product->slogan)
                                <p class="italic text-lg text-gray-600 mb-4">{{ $product->slogan }}</p>
                            @endif

                            <div>
                                @if($product->getBuyUrl())
                                    <a href="{{ $product->getBuyUrl() }}" class="inline-block bg-pink-500 text-white px-4 py-2">{{ __('Buy now') }}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{ $products->links() }}

        </article>
    </div>

@endsection
