@extends('layouts.app', ['title' => 'Contact'])

@section('content')
<div class="bg-white py-12 relative">
    <article class="max-w-xl md:max-w-3xl mx-auto px-8 md:px-0">
        <header class="mb-8">
            <h1 class="text-5xl font-extrabold leading-tight mb-1">{{ __('Contact') }}</h1>
        </header>

        <div class="text-xl leading-relaxed markup">

            @if (session('status'))
                <div class="bg-green-100 text-green-700 rounded p-4">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="bg-red-100 text-red-700 rounded p-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('contact.submit') }}">
                @csrf

                <div class="w-full mb-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                        {{ __('Your name') }}
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        name="name" id="name" type="text">
                </div>

                <div class="w-full mb-4 hidden">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="last_name">
                        {{ __('Last name') }}
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        name="last_name" id="last_name" type="text">
                </div>

                <div class="w-full mb-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                        {{ __('Your email') }}
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        name="email" id="email" type="email">
                </div>

                <div class="w-full mb-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="message">
                        {{ __('Message') }}
                    </label>
                    <textarea rows="10" name="message" id="message" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"></textarea>
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                    class="text-white border-yellow-300 border-solid border-b-4 font-weight-bold bg-black py-2 px-4">{{ __('Send') }}</button>
                </div>

            </form>
        </div>

    </article>
</div>
@endsection