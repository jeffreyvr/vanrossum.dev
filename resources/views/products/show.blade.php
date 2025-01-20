<x-site-layout :title="$product->title">

    <article>
        <header>
            <div class="mb-6 md:flex md:mb-20">
                <div class="text-center mb-4 md:mb-0 md:w-2/5 relative shrink-0 overflow-visible">
                    <img src="{{ $product->getFirstMediaUrl('product-hero-image') }}" class="md:absolute md:min-w-[150%] md:bottom-0 md:right-0 md:-mr-[50%]">
                </div>

                <div class="md:w-3/5 relative">
                    <x-heading level="1" size="2xl" period>{{ $product->title }}</x-heading>

                    <x-content class="mb-6">{{ $product->summary }}</x-content>

                    <div class="mb-6 space-y-1 text-base" x-data>
                        @foreach($product->vendor()->variants() as $variant)
                        <div class="md:flex md:justify-between md:items-center text-zinc-800 dark:text-zinc-300">
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

                        <x-button href="{{ $product->checkout_url }}" class="lemonsqueezy-button" icon-trailing="s-arrow-up-right">
                            {{ __('Purchase') }}
                        </x-button>

                        <p class="text-xs mt-4 dark:text-zinc-400 text-zinc-500">VAT will be calculated during checkout by <a href="http://lemonsqueezy.com" target="_blank" class="underline">Lemon Squeezy</a>.</p>
                    @elseif(!empty($product->checkout_url))
                        <x-button href="{{ $product->checkout_url }}" icon-trailing="s-arrow-up-right">
                            {{ __('Purchase') }}
                        </x-button>
                    @endif
                </div>
            </div>
        </header>
        <div class="grid md:grid-cols-4 gap-12 md:gap-20 max-w-4xl mx-auto">
            <x-content class="md:col-span-3 [&_>_div_>_p:first-of-type]:mt-0">
                <x-markdown>{!! $product->text !!}</x-markdown>
            </x-content>

            <div class="hidden md:block order-first md:order-last">
                <div class="md:sticky md:top-20">
                    <x-heading size="sm" level="6">{{ __('On this page') }}</x-heading>

                    <ul class="space-y-4">
                        @foreach($product->getTextNavigation() as $item)
                            <li><a class="text-primary dark:text-zinc-400 dark:hover:text-secondary/80 transition" href="{{ $item['url'] }}">{{ $item['label'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </article>


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
</x-site-layout>
