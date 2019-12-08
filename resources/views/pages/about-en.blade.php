@extends('layouts.app')

@section('content')
<div class="bg-white py-12 relative">
    <article class="max-w-xl md:max-w-3xl mx-auto px-8 md:px-0">
        <header class="mb-8">
            <h1 class="text-5xl font-extrabold leading-tight mb-1">{{ __('About') }}</h1>
        </header>

        <div class="text-xl leading-relaxed markup">
            @markdown
            Hi, my name is Jeffrey van Rossum and this is my personal website. I am a freelance [PHP](https://www.php.net/) developer and I live in a small town called [Bennekom](https://nl.wikipedia.org/wiki/Bennekom) (thé place to be) in the Netherlands.

            As a hobby, I started creating websites back in 2006 when I was 14 years old. I’ve been passionate about it ever since, and luckily over the years I believe I’ve gotten a lot better at it.

            I have been working full time as a webdeveloper since 2011, and started freelancing at the end of 2019. If you'd like to work with me, please feel free to [contact](mailto:jeffrey@vanrossum.dev) me.

            As a PHP developer, I like working with [Laravel](http://laravel.com/) and [WordPress](https://wordpress.org/). I also like working with [Vue](https://vuejs.org/), [TailwindCSS](https://tailwindcss.com/) and [Bootstrap](https://getbootstrap.com/). On this site, I post the occasional blog post to share tips, insights and other things I like to share.
            @endmarkdown                
        </div>

    </article>
</div>
@endsection