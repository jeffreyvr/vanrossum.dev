<x-site-layout :title="__('Products')">

        <x-heading size="2xl" level="1" period>{{ __('Products') }}</x-heading>

        <div class="flex flex-col gap-16 my-8">
            @foreach($products as $product)
                <x-product :product="$product" />
            @endforeach
        </div>

        {{ $products->links() }}

    </article>

</x-site-layout>
