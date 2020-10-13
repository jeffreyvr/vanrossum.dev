@extends('layouts.app', [
'title' => __('Jeffrey van Rossum - Freelance PHP developer specialized in Laravel and WordPress')
])

@section('content')

    <div class="relative px-8 lg:px-0 bg-gradient-to-b from-gray-300">
        <div class="max-w-xl md:max-w-5xl mx-auto text-center md:text-left relative">
            <div class="md:flex py-6 md:py-16">
                <div class="flex-1 md:pr-12">
                    <h1 class="font-bold text-gray-800 text-2xl sm:text-4xl mb-4 leading-snug">
                        {!! __('Hi! My name is :name', ['name' => 'Jeffrey van Rossum']) !!}<span class="text-pink-500">.</span></h1>
                    <p class="text-xl sm:text-3xl leading-relaxed mb-8 text-gray-900">
                        {!! __("I am a freelance PHP Developer based in The Netherlands, specialized in <a href=':laravel_url' class='underline'>Laravel</a> and <a href=':wordpress_url' class='underline'>WordPress</a> development.", ['wordpress_url' => localized_route('wordpress'),
                        'laravel_url' => localized_route('laravel')]) !!}
                    </p>
                    <div class="md:flex mb-8 md:mb-0">
                        <a href="{{ localized_route('about') }}"
                           class="bg-gray-900 text-xl hover:bg-black text-white font-semibold py-3 px-4 shadow mr-4">
                            {{ __('More about me') }}
                        </a>
                        <a href="{{ localized_route('contact') }}"
                           class="bg-pink-500 text-xl hover:bg-pink-600 text-white font-semibold py-3 px-4 shadow">
                            {{ __('Hire me') }}
                        </a>
                    </div>
                </div>
                <div class="hidden lg:block max-w-xs w-full text-center">
                    <img class="max-w-xs md:mx-w-full inline-block rounded-full md:rounded shadow-lg" src="{{ url('images/avatar.png') }}">
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white relative px-8 py-12 lg:px-0">
        <div class="container mx-auto max-w-5xl">
            <h2 class="text-4xl font-bold mb-4 sm:mb-12 text-gray-800">{{ __('Latest posts') }}<span class="text-pink-500">.</span></h2>

            @foreach ( $posts as $post )
                @include('posts.block', ['post' => $post])
            @endforeach
        </div>
    </div>

    <div class="bg-gradient-to-r from-gray-800 to-gray-600 relative py-12 px-8 lg:px-0">
        <div class="container mx-auto max-w-5xl">
            @include('partials.reference')
        </div>
    </div>

    <div id="projects" class="bg-white px-8 lg:px-0">
        <div class="max-w-xl md:max-w-5xl mx-auto py-16">
            <h2 class="text-4xl text-center sm:text-left font-bold mb-4 sm:mb-12 text-gray-800">{{ __('Projects') }}<span class="text-pink-500">.</span></h2>
            <div class="md:px-6">
                <div class="md:flex md:-mx-12">
                    @foreach($projects as $project)
                        @include('projects.block', ['project' => $project])
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
