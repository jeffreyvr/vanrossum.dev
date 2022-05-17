@extends('layouts.app')

@section('content')

<div class="bg-white py-12 relative">
    <article class="max-w-xl md:max-w-3xl mx-auto">
        <header>
            <h1 class="font-bold text-4xl mb-6">{{ __('Edit product') }}</h1>
        </header>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


        <form method="post" action="{{ route('products.update', $product) }}">
            @csrf
            @method('PATCH')

            <div class="w-full mb-4">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                    {{ __('Name') }}
                </label>
                <input
                    class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    name="name" id="name" type="text" value="{{ $product->name }}">
            </div>

            <div class="w-full mb-4">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="price">
                    {{ __('Price') }}
                </label>
                <input
                    class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    name="price" id="price" type="text" value="{{ $product->price }}">
            </div>

            <x-form.input />

            <div class="w-full mb-4">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="price">
                    {{ __('Currency') }}
                </label>
                <input
                    class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    name="currency" id="price" type="text" value="{{ $product->price }}">
            </div>

            <div class="w-full mb-4">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="short-description">
                    {{ __('Short description') }}
                </label>
                <textarea class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="short_description" id="short-description">{{ $product->short_description }}</textarea>
            </div>

            <div class="w-full mb-4">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="long-description">
                    {{ __('Long description') }}
                </label>
                <textarea rows="10" class="markdown-editor" name="long_description" id="long-description">{{ $product->long_description }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    {{ __('Status') }}
                </label>
                <div class="relative">
                    <select
                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="status"
                        name="status">
                        <option value="publish" {{ $product->status == 'publish' ? 'selected' : null }}>Publish</option>
                        <option value="draft" {{ $product->status == 'draft' ? 'selected' : null }}>Draft</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                    </div>
                </div>
            </div>

            <button type="submit"
                class="text-white border-yellow-300 border-solid border-b-4 font-weight-bold bg-black py-2 px-4">{{ __('Save') }}</button>

        </form>

    </article>
</div>

@endsection