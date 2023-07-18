<x-app-layout :title="$product->title">

    <div class="container mx-auto mb-8 pt-12 lg:pt-20 xl:pt-32">
        <header>
            <h1 class="text-xl lg:text-3xl font-semibold font-wide text-primary mb-12">{{ $product->title }}</h1>

            <div class="grid xl:grid-cols-2 gap-20">
                <div>
                    <img src="{{ $product->getFirstMediaUrl('product-image') }}" class="shadow-xl shadow-primary/10 rounded-xl" data-aos="zoom-in" data-aos-duration="1000">
                </div>
                <div>
                    <p class="font-semibold text-base mb-4">{{ $product->summary }}</p>

                    @if($product->vendor === 'lemonsqueezy' && strpos($product->checkout_url, '?embed') == false)
                        <x-button-link :href="$product->checkout_url" class="lemonsqueezy-button">{{ __('Purchase') }}</x-button-link>

                        <script src="https://app.lemonsqueezy.com/js/checkout.js" defer></script>


                        <p class="text-xs mt-4 text-gray-500">VAT will be calculated during checkout by <a href="http://lemonsqueezy.com" target="_blank" class="underline">Lemon Squeezy</a>.</p>
                    @elseif(!empty($product->checkout_url))
                        <x-button-link :href="$product->checkout_url">{{ __('Purchase') }}</x-button-link>
                    @endif
                </div>
            </div>
        </header>
    </div>

    <div class="mx-auto py-8 lg:pt-20 container">
        <article class="grid lg:grid-cols-4 gap-20">
            <x-post-content class="order-last lg:order-first lg:col-span-3">
                @markdown($product->text)
            </x-post-content>

            <div>
                <nav class="sticky top-0">
                    <h5 class="font-medium text-lg mb-4">{{ __('Navigation') }}</h5>
                    <ul>
                        @foreach($product->getTextNavigation() as $link)
                            <li class="mb-1 flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-secondary">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>

                                {!! $link !!}
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </article>
    </div>

    @section('seo')
        <meta property="og:title" content="{{ $product->title }}" />
    @endsection
</x-app-layout>
