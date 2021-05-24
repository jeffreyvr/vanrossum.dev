@extends('layouts.app', ['title' => 'Donate'])

@section('content')

    <div class="bg-white py-12 relative bg-gradient-to-b from-gray-100">
        <article class="max-w-xl md:max-w-3xl mx-auto px-8 md:px-0">
            <header class="mb-8">
                <h1 class="text-5xl font-extrabold leading-tight mb-1">{{ __('Donate') }}</h1>
            </header>

            <div class="text-xl leading-relaxed markup">

                <p>{{ __('You probably got to this page because you like one of my open source projects or maybe enjoy reading my blog.') }}</p>

                @if ($errors->any())
                    <div class="bg-red-100 text-red-700 rounded p-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('donate.submit') }}">
                    @csrf

                    <div class="w-full mb-4">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                            {{ __('Your name') }}
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            name="name" id="name" type="text" value="{{ old('name') }}">
                    </div>

                    <div class="w-full mb-4 hidden">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                               for="last_name">
                            {{ __('Last name') }}
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            name="last_name" id="last_name" type="text" value="{{ old('last_name') }}">
                    </div>

                    <div class="w-full mb-4">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                            {{ __('Your email') }}
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            name="email" id="email" type="email" value="{{ old('email') }}">
                    </div>

                    <div class="w-full mb-4">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="amount">
                            {{ __('Amount in EUR') }}
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            name="amount" id="amount" type="number" value="{{ old('amount') }}" min="1" step="0.1" placeholder="0.00">
                    </div>

                    <div class="w-full mb-4">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="message">
                            {{ __('Message') }}
                        </label>
                        <textarea rows="10" name="message" id="message"
                                  class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">{{ old('message') }}</textarea>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit"
                                class="text-white border-yellow-300 border-solid border-b-4 font-weight-bold bg-black py-2 px-4">{{ __('Make donation') }}</button>
                    </div>

                </form>
            </div>

        </article>
    </div>
@endsection
