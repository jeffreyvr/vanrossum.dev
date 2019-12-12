@extends('layouts.app')

@section('content')

<div class="bg-white py-12 relative">
    <article class="max-w-xl md:max-w-3xl mx-auto">
        <header>
            <h1 class="font-bold text-4xl mb-6">{{ __('Create posts') }}</h1>
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


        <form method="post" action="{{ route('posts.store') }}">
            @csrf

            <div class="w-full mb-4">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="title">
                    {{ __('Title') }}
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    name="title" id="title" type="text">
            </div>

            <div class="w-full mb-4">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="title">
                    {{ __('Publish date') }}
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    name="publish_date" id="publish_date" type="datetime-local" value="{{ Carbon::now()->format('Y-m-d\TH:s') }}">
            </div>

            <div class="w-full mb-4">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="text">
                    {{ __('Text') }}
                </label>
                <textarea rows="10"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    name="text" id="text"></textarea>
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
                        <option value="publish">Publish</option>
                        <option value="draft">Draft</option>
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