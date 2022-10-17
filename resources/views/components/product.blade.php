@props([
'even' => false,
'product' => null,
'rotate' => false
])
<div {{ $attributes->merge(['class' => 'border-t py-12 grid lg:grid-cols-2 gap-8']) }}>
    @if($rotate)
        <div class="bg-[#f7f7fa] p-12 {{ $even ? 'rotate-1 lg:order-last' : '-rotate-1' }}">
            <img src="{{ Storage::url($product->image) }}" class="shadow-xl" data-aos="zoom-in" data-aos-duration="1000">
        </div>
    @else
        <div class="bg-[#f7f7fa] p-12 {{ $even ? 'lg:order-last' : '' }}">
            <img src="{{ $product->getFirstMediaUrl('product-image') }}" class="shadow-xl" data-aos="zoom-in" data-aos-duration="1000">
        </div>
    @endif
    <div>
        <h2>
            <a href="{{ route('products.show', $product) }}" class="font-medium text-xl lg:text-2xl font-wide text-primary mb-2 block">{{ $product->title }}</a>
        </h2>

        <div class="text-base leading-loose mb-8">{!! $product->summary !!}</div>

        <x-button-link :arrow="true" href="{{ route('products.show', $product) }}">{{ __('View product') }}</x-button-link>
    </div>
</div>
