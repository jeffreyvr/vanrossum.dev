<x-product-layout :title="$product->title">
<div class="bg-no-repeat bg-left-top" style="background-image:url({{ url('/images/hero.png') }});">
    <div class="container mx-auto max-w-screen-2lg mb-8 pt-12 lg:pt-20 xl:pt-32">
        <header>

            <div class="md:flex">
                <div class="text-center mb-4 md:mb-0 md:w-2/5 relative shrink-0 overflow-visible">
                    <img src="{{ $product->getFirstMediaUrl('product-hero-image') }}" class="md:absolute md:min-w-[150%] md:bottom-0 md:right-0 md:-mr-[50%]" data-aos="fade-in" data-aos-duration="1000">
                </div>

                <div class="md:w-3/5 relative">
                    <h1 class="text-xl lg:text-2xl font-semibold font-display text-primary mb-6">{{ $product->title }}</h1>

                    <p class="text-base mb-4">{{ $product->summary }}</p>

                    <div class="mb-6 space-y-1 text-base" x-data>
                        @foreach($product->vendor()->variants() as $variant)
                        <div class="md:flex md:justify-between md:items-center">
                            <div class="flex gap-4 items-center">
                                <div class="w-3 h-3 bg-primary border-b-2 border-r-2 border-secondary"></div>

                                <div class="flex items-center gap-2">
                                    {{ $variant['name'] }}

                                    <div x-tooltip="{{ strip_tags($variant['description']) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <span class="text-lg font-semibold">{{ $variant['formatted_price'] }}</span> / {{ $variant['interval'] }}
                            </div>
                        </div>
                        @endforeach
                    </div>

                    @if($product->vendor === 'lemonsqueezy')
                        @if(strpos($product->checkout_url, '?embed') !== false)
                            <script src="https://app.lemonsqueezy.com/js/checkout.js" defer></script>
                        @endif

                        <a href="{{ $product->checkout_url }}" class="lemonsqueezy-button bg-secondary text-primary px-5 py-2 inline-flex items-baseline gap-3 text-base font-semibold">
                            {{ __('Purchase') }}.

                            <svg class="w-4 h-4"  viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1180.000000, -618.000000)" fill="currentColor" fill-rule="nonzero">
                                        <g transform="translate(1188.000000, 626.000000) rotate(-45.000000) translate(-1188.000000, -626.000000) translate(1178.000000, 618.000000)">
                                            <polygon id="Path" points="9.3143 16 15.6857 9.3487 0 9.3487 0 6.6513 15.6857 6.6513 9.3143 0 12.8857 0 20 7.6322 20 8.3678 12.8857 16"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>

                        <p class="text-xs mt-4 text-gray-500">VAT will be calculated during checkout by <a href="http://lemonsqueezy.com" target="_blank" class="underline">Lemon Squeezy</a>.</p>
                    @elseif(!empty($product->checkout_url))
                        <x-button-link :href="$product->checkout_url">{{ __('Purchase') }}</x-button-link>
                    @endif
                </div>
            </div>
        </header>
    </div>
</div>

<div class="relative">
    <div class="lg:w-[336px] lg:h-[862px] w-[155px] h-[400px] bg-right bg-cover bg-no-repeat absolute right-0 top-[-60px] lg:top-[-200px]" style="background-image: url({{ url('images/disortion-right.png') }});" class=""></div>

    <div class="mx-auto lg:pb-8 lg:pt-20 container max-w-screen-md relative">
        <article>
            <x-post-content class="order-last lg:order-first lg:col-span-3">
                <x-markdown>{!! $product->text !!}</x-markdown>
            </x-post-content>
        </article>
    </div>
</div>


    @section('scripts')
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.magic('tooltip', el => message => {
                let instance = tippy(el, { content: message, trigger: 'manual' })

                instance.show()

                setTimeout(() => {
                    instance.hide()

                    setTimeout(() => instance.destroy(), 150)
                }, 2000)
            })

            Alpine.directive('tooltip', (el, { expression }) => {
                tippy(el, { content: expression })
            })
        })
    </script>
    @endsection

    @section('seo')
        <meta property="og:title" content="{{ $product->title }}" />
        <meta property="og:description" content="{{ $product->summary }}" />
        <meta name="description" content="{{ $product->summary }}">
    @endsection

    @section('navigation-modal')
        @include('layouts.partials.navigation-modal', [
            'items' => $product->getTextNavigation(),
            'backLink' => ['url' => route('products'), 'label' => __('Back to products')],
            'showLocale' => false
        ])
    @endsection

    @section('navigation')
        @foreach($product->getTextNavigation() as $item)
            <a class="text-primary" href="{{ $item['url'] }}">{{ $item['label'] }}<span class="text-secondary">.</span></a>
        @endforeach
    @endsection
</x-product-layout>
