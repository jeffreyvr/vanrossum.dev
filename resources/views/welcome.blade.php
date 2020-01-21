@extends('layouts.app', [
'title' => __('Freelance PHP developer specialized in Laravel and WordPress')
])

@section('content')
<div class="bg-no-repeat relative pb-6 px-8 md:px-0">
    <div class="max-w-xl md:max-w-5xl mx-auto relative">
        <div class="flex flex-wrap py-6 md:py-12">
            <div class="w-full md:w-2/3 md:pr-12">
                <h1 class="font-bold text-gray-800 text-2xl sm:text-4xl mb-4 leading-snug">
                    {!! __('Hi! My name is :name', ['name' => 'Jeffrey van Rossum']) !!}.</h1>
                <p class="text-1xl sm:text-3xl leading-snug mb-8 text-gray-700">
                    {{ __('I am a freelance PHP Developer based in The Netherlands, specialized in Laravel and WordPress development.') }}
                </p>
                <p class="mb-8">
                    <a href="/about"
                        class="bg-gray-900 hover:bg-gray-800 text-white font-semibold py-3 px-4 shadow mr-4">
                        {{ __('More about me') }}
                    </a>
                    <a href="mailto:jeffrey@vanrossum.dev"
                        class="bg-pink-500 hover:bg-pink-600 text-white font-semibold py-3 px-4 shadow">
                        {{ __('Hire me') }}
                    </a>
                </p>
            </div>
            <div class="w-full md:w-1/3 md:pl-12">
                <img class="shadow-lg relative z-10 rounded" src="{{ url('images/avatar.jpg') }}">
            </div>
        </div>
    </div>
    <svg class="absolute z-0 left-0 bottom-0 block w-full h-8 sm:h-24" xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 100 100" preserveAspectRatio="none">
        <polygon fill="#ffffff" points="0,100 100,0 100,100"></polygon>
    </svg>
</div>

<div class="bg-white py-12 relative px-8 md:px-0">
    <div class="max-w-xl md:max-w-5xl mx-auto">
        <div class="px-12">
            <div class="md:flex -mx-24">
                <div class="md:w-1/2 px-8">
                    <h2 class="text-4xl font-bold mb-4 sm:mb-12 text-gray-800">{{ __('Latest posts') }}</h2>
                    @foreach ( $posts as $post )
                    @include('posts.block', ['post' => $post])
                    @endforeach
                </div>
                <div class="md:w-1/2 px-8">
                    @include('partials.reference')
                </div>
            </div>
        </div>
    </div>
</div>

<div id="projects" class="bg-gray-200 py-12 relative  px-8 md:px-0">
    <div class="max-w-xl md:max-w-5xl mx-auto">
        <h2 class="text-4xl text-center sm:text-left font-bold mb-4 sm:mb-12 text-gray-800">{{ __('Projects') }}</h2>
        <div class="flex flex-wrap md:mb-16 -mx-4">
            @foreach($projects as $project)
            @include('projects.block', ['project' => $project])
            @endforeach
        </div>
    </div>
</div>

@endsection