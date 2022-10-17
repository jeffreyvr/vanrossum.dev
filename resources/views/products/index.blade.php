<x-app-layout :title="__('Products')">

    <article class="container mx-auto max-w-screen-xl my-16">
        <header>
            <h1 class="font-semibold font-wide text-2xl lg:text-3xl mb-6 text-primary">{{ __('Products') }}</h1>
        </header>

        <div>
            @foreach($products as $product)
                <x-product :product="$product" :even="$product->even" class="border-t-0 border-b last:border-none" />
            @endforeach
        </div>

        {{ $products->links() }}

    </article>

</x-site-layout>
