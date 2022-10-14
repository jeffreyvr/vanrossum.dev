<x-app-layout :title="$product->title">
    <div class="mx-auto max-w-screen-md pt-8 lg:pt-20 container">
        <article>
            <header class="mb-8">
                <h1 class="text-xl lg:text-3xl font-semibold font-wide text-primary">{{ $product->title }}</h1>
            </header>

            <p class="font-semibold text-base mb-4">{{ $product->summary }}</p>

            {{ $product->getFirstMedia('product-image') }}

            <x-post-content>
                @if($product->vendor === 'lemonsqueezy' && strpos($product->checkout_url, '?embed') !== false)
                    <x-button-link :href="$product->checkout_url" class="lemonsqueezy-button">{{ __('Purchase') }}</x-button-link>

                    <script src="https://app.lemonsqueezy.com/js/checkout.js" defer></script>
                @elseif(!epmty($product->checkout_url))
                    <x-button-link :href="$product->checkout_url">{{ __('Purchase') }}</x-button-link>
                @endif

                @markdown($product->text)

            </x-post-content>
        </article>
    </div>

    @section('seo')
        <meta property="og:title" content="{{ $product->title }}" />
    @endsection
</x-app-layout>
