@extends('layouts.app', ['title' => 'Freelance Laravel Developer'])

@section('content')

    <div class="bg-white py-12 relative bg-gradient-to-b from-gray-100">
        <article class="max-w-xl md:max-w-3xl mx-auto px-8 md:px-0">

            <header class="mb-8">
                <h1 class="text-5xl text-primary font-semibold font-wide leading-tight mb-1">{{ __('Freelance Laravel Developer') }}</h1>
            </header>

            <div class="text-xl leading-relaxed markup">
                @markdown
                <div class="md:flex md:items-start font-bold text-gray-800">
                    <img class="shadow-lg relative z-10 w-full md:w-64 md:mr-8 mb-4 md:mb-0 rounded"
                         src="{{ url('images/avatar.png') }}">
                    I am Jeffrey van Rossum, freelance PHP developer with over 5 years of Laravel experience. Over the
                    years I have worked on various applications with Laravel.
                </div>

                ## Why Laravel?
                [Laravel](https://laravel.com) is a very popular PHP framwork developed by Taylor Otwell. The framework
                allows you to work quickly and is suitable for both simple and complex applications. The framework is
                also ideal for realizing APIs.

                I have worked with various frameworks (for example Symfony and CodeIgniter), but Laravel is by far the
                most pleasant to work with. The framework also makes the application of [_Test Driven
                Development_](https://www.madetech.com/blog/9-benefits-of-test-driven-development) very accessible. I
                like to apply this method, because by thoroughly testing your code you can avoid unnecessary errors.

                ## Hire me as Freelance Laravel Developer
                Looking for an experienced Laravel developer? The following might appeal to you:

                * Years of experience of working with [Laravel and
                PHP](https://linkedin.com/in/jeffrey-van-rossum-97b27321)
                * Experience with several front-end frameworks including VueJS, TailwindCSS, Bootstrap and jQuery
                * Working with version control (GIT)
                * Fluent in Dutch and English
                * Experience with working in a team as well as independently
                * Available on an hourly, project or contract basis
                * Preferably works remotely, but working (partly) on location is certainly an option

                If you want to hire me or want additional information, feel free to send an email to
                [jeffrey@vanrossum.dev](mailto:jeffrey@vanrossum.dev).
                @endmarkdown
            </div>

            @include('partials.reference')

        </article>
    </div>
@endsection
