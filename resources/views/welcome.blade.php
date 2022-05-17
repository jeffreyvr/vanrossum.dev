@extends('layouts.app', [
'title' => __('Jeffrey van Rossum - Freelance PHP developer specialized in Laravel and WordPress')
])

@section('content')

    <div class="relative px-8 lg:px-0 bg-gradient-to-b from-gray-100">
        <div class="max-w-xl md:max-w-5xl mx-auto relative">
            <div class="md:flex py-6 md:py-16">
                <div class="hidden lg:block max-w-xs w-full">
                    <img class="max-w-xs md:mx-w-full inline-block shadow-lg" src="{{ url('images/iJeffrey.jpg') }}">
                </div>
                <div class="flex-1 md:pl-12">
                    <h1 class="font-bold text-primary text-2xl sm:text-6xl mb-4 leading-snug"> {!! __('Hi, my name is :name', ['name' => 'Jeffrey van Rossum']) !!}<span class="text-secondary">.</span></h1>
                    <p class="text-2xl font-medium sm:text-xl leading-relaxed mb-4 text-gray-700">
                        {!! __( "I'm a PHP Developer doing freelance <a href=':laravel_url' class='text-primary underline decoration-2 underline-offset-4 hover:text-secondary hover:decoration-primary'>Laravel</a> and <a href=':wordpress_url' class='text-primary underline decoration-2 underline-offset-4 hover:text-secondary hover:decoration-primary'>WordPress</a> development.", [
                            'wordpress_url' => localized_route('wordpress'),
                            'laravel_url' => localized_route('laravel'),
                        ]) !!}
                    </p>
                    <p class="text-lg leading-relaxed mb-8 text-gray-700">
                        {!! __("I also maintain a couple of <a href=':github_url' class='text-primary underline decoration-2 underline-offset-4 hover:text-secondary hover:decoration-primary'>open source projects</a> and write the occasional <a href=':blog_url' class='text-primary underline decoration-2 underline-offset-4 hover:text-secondary hover:decoration-primary'>blog article</a>.", [
                            'github_url' => 'https://github.com/jeffreyvr',
                            'blog_url' => route('posts')
                        ]) !!}
                    </p>
                    <div class="md:flex mb-8 md:mb-0">
                        <a href="{{ localized_route('about') }}"
                        class="text-center block mb-4 md:mb-0 md:inline-block shadow-3d text-white text-lg font-weight-bold bg-gray-800 hover:bg-gray-900 py-2 px-4 md:mr-6">
                            {{ __('More about me') }}
                        </a>
                        <a href="{{ localized_route('contact') }}"
                        class="text-center block md:inline-block shadow-3d text-secondary text-lg font-weight-bold bg-primary py-2 px-4">
                            {{ __('Hire me') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white relative px-8 py-12 lg:px-0">
        <div class="container mx-auto max-w-5xl">
            <h2 class="text-4xl font-bold mb-4 sm:mb-12 text-primary">{{ __('Latest posts') }}<span class="text-secondary">.</span></h2>

            @foreach ( $posts as $post )
                @include('posts.block', ['post' => $post])
            @endforeach
        </div>
    </div>

    <div id="projects" class="bg-gradient-to-b from-gray-100 to-white relative py-12 px-8 lg:px-0">
        <div class="max-w-xl md:max-w-5xl mx-auto pt-16 pb-8">
            <h2 class="text-4xl text-center sm:text-left font-bold mb-4 sm:mb-12 text-primary">{{ __('Projects') }}<span class="text-secondary">.</span></h2>
            <div class="md:px-6">
                <div class="md:flex md:-mx-12">
                    @foreach($projects as $project)
                        @include('projects.block',$project)
                    @endforeach
                </div>
            </div>
            <div class="pt-16 text-center">
                @foreach($other_projects as $project)
                    @include('projects.compact', $project)
                @endforeach
            </div>
        </div>
    </div>

@endsection
