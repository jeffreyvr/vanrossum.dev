@extends('layouts.app')

@section('content')
<div class="bg-no-repeat relative pb-12">
    <div class="max-w-xl md:max-w-5xl mx-auto relative">
        <div class="flex py-12">
            <div class="w-2/3 pr-12">
                <h1 class="font-bold text-gray-800 text-4xl mb-4 leading-snug">
                    {{ __('Hi there, my name is') }}
                    <span class="line-through">Bond, James Bond</span> Jeffrey.</h1>
                <p class="text-3xl leading-snug mb-8 text-gray-800">
                    {{ __('I am a PHP Developer based in The Netherlands, specialized in Laravel and WordPress development.') }}
                </p>
                <p class="mb-8">
                    <a href="/about" class="text-white border-yellow-300 border-solid border-b-4 mr-2 font-weight-bold bg-black py-2 px-4">
                        {{ __('More about me →') }}
                    </a>
                    <a href="/contact" class="text-white border-yellow-300 border-solid border-b-4 font-weight-bold bg-black py-2 px-4">
                        {{ __('Work with me →') }}
                    </a>
                </p>
            </div>
            <div class="w-1/3 pl-12">
                <img class="shadow-lg rounded"
                    src="https://pbs.twimg.com/profile_images/953023393091211274/a4yKMdGz_400x400.jpg">
            </div>
        </div>
    </div>
    <svg class="absolute z-0 left-0 bottom-0 block w-full h-8 sm:h-24" xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 100 100" preserveAspectRatio="none">
        <polygon fill="#ffffff" points="0,100 100,0 100,100"></polygon>
    </svg>
</div>

<div class="bg-white py-12 relative">
    <div class="max-w-xl md:max-w-5xl mx-auto">
        <h2 class="text-4xl text-center sm:text-left font-bold mb-4 sm:mb-12 text-gray-800">{{ __('Latest posts') }}</h2>
        @foreach ( $posts as $post )
        <article class="mb-8">
            <span class="block text-xs uppercase text-pink-500">
                {{ date('d-m-y', strtotime($post->publish_date)) }}
            </span>
            <h3 class="text-2xl mt-2">
                <a href="{{ route('posts.show', $post->idSlug()) }}" class="border-yellow-300 border-solid border-b-2">{{ $post->title }}</a>
            </h3>
            <article>
            @endforeach
    </div>
</div>

<div class="bg-gray-200 py-12 relative">
    <div class="max-w-xl md:max-w-5xl mx-auto">
        <h2 class="text-4xl text-center sm:text-left font-bold mb-4 sm:mb-12 text-gray-800">{{ __('Projects') }}</h2>
        <div class="flex mb-16 -mx-4">
            @foreach($projects as $project)
                @include('projects.block', ['project' => $project])
            @endforeach
        </div>
    </div>
</div>

@endsection