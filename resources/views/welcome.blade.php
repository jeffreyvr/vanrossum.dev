@extends('layouts.app', [
'title' => __('Jeffrey van Rossum - Freelance PHP developer specialized in Laravel and WordPress')
])

@section('content')
    @include('layouts.partials.navigation')

    <div class="relative px-8 md:px-0 bg-gray-800">
        <svg class="absolute text-white left-0 bottom-0 w-full h-8 sm:h-24" xmlns="http://www.w3.org/2000/svg"
             viewBox="0 0 100 100" preserveAspectRatio="none">
            <polygon fill="currentColor" points="0,100 100,0 100,100"></polygon>
        </svg>
        <div class="max-w-xl md:max-w-5xl mx-auto text-center md:text-left relative">
            <div class="md:flex py-6 md:py-12">
                <div class="flex-1 md:pr-12">
                    <h1 class="font-bold text-white text-2xl sm:text-4xl mb-4 leading-snug">
                        {!! __('Hi! My name is :name', ['name' => 'Jeffrey van Rossum']) !!}.</h1>
                    <p class="text-1xl sm:text-3xl leading-snug mb-8 text-gray-200">
                        {!! __("I am a freelance PHP Developer based in The Netherlands, specialized in <a href=':laravel_url' class='underline'>Laravel</a> and <a href=':wordpress_url' class='underline'>WordPress</a> development.", ['wordpress_url' => localized_route('wordpress'),
                        'laravel_url' => localized_route('laravel')]) !!}
                    </p>
                    <div class="md:flex mb-8 md:mb-0">
                        <a href="{{ localized_route('about') }}"
                           class="bg-gray-900 hover:bg-black text-white font-semibold py-3 px-4 shadow mr-4">
                            {{ __('More about me') }}
                        </a>
                        <a href="{{ localized_route('contact') }}"
                           class="bg-pink-500 hover:bg-pink-600 text-white font-semibold py-3 px-4 shadow">
                            {{ __('Hire me') }}
                        </a>
                    </div>
                </div>
                <div class="sm:max-w-xs w-full text-center">
                    <img class="max-w-xs md:mx-w-full inline-block rounded-full md:rounded shadow-lg" src="{{ url('images/avatar.png') }}">
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white relative px-8 md:px-0">
        <div class="max-w-xl md:max-w-5xl mx-auto md:px-6 py-16">
            <div class="md:flex md:-mx-12">
                <div class="md:w-1/2 md:px-6">
                    <h2 class="text-4xl font-bold mb-4 sm:mb-12 text-gray-800">{{ __('Latest posts') }}</h2>
                    @foreach ( $posts as $post )
                        @include('posts.block', ['post' => $post])
                    @endforeach
                </div>
                <div class="md:w-1/2 md:px-6">
                    @include('partials.reference')
                </div>
            </div>
        </div>
    </div>

    <div id="projects" class="bg-gray-100 px-8 md:px-0">
        <div class="max-w-xl md:max-w-5xl mx-auto py-16">
            <h2 class="text-4xl text-center sm:text-left font-bold mb-4 sm:mb-12 text-gray-800">{{ __('Projects') }}</h2>
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
