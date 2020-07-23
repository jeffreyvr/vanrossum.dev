@extends('layouts.app', ['title' => 'About Me'])

@section('content')
    @include('layouts.partials.navigation', ['shape' => true])
    <div class="bg-white py-12 relative">
        <article class="max-w-xl md:max-w-3xl mx-auto px-8 md:px-0">
            <header class="mb-8">
                <h1 class="text-5xl font-extrabold leading-tight mb-1">{{ __('About') }}</h1>
            </header>

            <div class="text-xl leading-relaxed markup">
                @markdown
                Hi, my name is Jeffrey van Rossum and this is my website. I am a freelance [PHP](https://www.php.net/)
                developer and I live in a small town called [Bennekom](https://nl.wikipedia.org/wiki/Bennekom) (thé
                place to be) in the Netherlands.

                I started creating websites back in 2006 when I was 14 years old. I’ve been passionate about it ever
                since, and luckily over the years I’ve gotten a lot better at it through study and [work
                experience](https://linkedin.com/in/jeffrey-van-rossum-97b27321).

                I have been working full time as a webdeveloper since 2011, first at a small advertising agency and
                later at a medium sized company in the publishing industry. I started freelancing at the end of 2019.
                During this time, I also launched an invoice application called [Addrow](https://addrow.io).

                I am fluent in PHP and work extensively with the [Laravel](http://laravel.com/) framework and
                [WordPress](https://wordpress.org/). For front-end development I often work with
                [VueJS](https://vuejs.org/), [TailwindCSS](https://tailwindcss.com/) and
                [Bootstrap](https://getbootstrap.com/). Some of my work is open source and can be found on
                [Github](https://github.com/jeffreyvr).

                If you'd like to work with me, please feel free to reach out at
                [jeffrey@vanrossum.dev](mailto:jeffrey@vanrossum.dev)</a>.
                @endmarkdown
            </div>

        </article>
    </div>
@endsection
