@extends('layouts.app', ['title' => 'Freelance WordPress Developer'])

@section('content')

    <div class="bg-white py-12 relative bg-gradient-to-b from-gray-100">
        <article class="max-w-xl md:max-w-3xl mx-auto px-8 md:px-0">

            <header class="mb-8">
                <h1 class="text-5xl text-primary font-extrabold leading-tight mb-1">{{ __('Freelance WordPress Developer') }}</h1>
            </header>

            <div class="text-xl leading-relaxed markup">
                @markdown
                <div class="md:flex md:items-start font-bold text-gray-800">
                    <img class="shadow-lg relative z-10 w-full md:w-64 md:mr-8 mb-4 md:mb-0 rounded"
                         src="{{ url('images/avatar.jpg') }}">
                    I am Jeffrey van Rossum, freelance PHP developer with over 8 years of WordPress experience. Over the
                    years I have worked on many websites with WordPress, including custom plugins and themes.
                </div>

                ## Why WordPress?
                [WordPress](https://wordpress.org) is the most widely used CMS in the world. With WordPress you can
                realize a fully operational website in no time. In addition, the basic functionality of WordPress is
                extensible with plugins.

                There are plenty of plugins and themes, but sometimes you need customization. As a WordPress developer I
                have developed several custom plugins. For example, for a company in the publishing industry, I worked
                on a subscription plugin that synchronizes subscriptions to a CRM system. I have developed several
                [open-source](https://profiles.wordpress.org/jeffreyvr/#content-plugins) plugins for WordPress.

                ## Hire me as Freelance WordPress Developer
                Looking for an experienced WordPress developer? The following might appeal to you:

                * Years of experience working with [WordPress and
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
