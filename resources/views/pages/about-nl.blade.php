@extends('layouts.app', ['title' => 'Over mij'])

@section('content')

    <div class="bg-white py-12 relative bg-gradient-to-b from-gray-100">
        <article class="max-w-xl md:max-w-3xl mx-auto px-8 md:px-0">
            <header class="mb-8">
                <h1 class="text-5xl font-extrabold leading-tight mb-1">{{ __('About') }}</h1>
            </header>

            <div class="text-xl leading-relaxed markup">
                @markdown
                Ik ben Jeffrey van Rossum en dit is mijn website. Ik ben een freelance
                [PHP](https://www.php.net/)-developer en ik woon in [Bennekom](https://nl.wikipedia.org/wiki/Bennekom)
                in Gelderland, Nederland.

                Al op jonge leeftijd begon ik als hobby met het maken van websites. Het is sindsdien altijd een passie
                geweest en door de jaren heen heb ik mij steeds verder ontwikkeld. Zowel door studeren en alsmede door
                jaren [werkervaring](https://linkedin.com/in/jeffrey-van-rossum-97b27321).

                Sinds 2011 werk ik fulltime als webdeveloper, eerst bij een reclamebureau en later bij een uitgeverij
                als onderdeel van het online-team. Sinds eind 2019 ben ik freelancer. Daarnaast heb ik in 2019
                [Addrow](https://addrow.io) ontwikkeld, een handige facturatie-applicatie.

                Als PHP-developer ben ik gespecialiseerd in [Laravel](http://laravel.com/) en
                [WordPress](https://wordpress.org/) -development. Daarnaast, werk ik graag met de front-end tools
                [Vue](https://vuejs.org/), [TailwindCSS](https://tailwindcss.com/) en
                [Bootstrap](https://getbootstrap.com/). Een deel van mijn werk is open source en kan worden gevonden op
                [Github](https://github.com/jeffreyvr).

                Als je interesse hebt in een samenwerking, stuur dan gerust een e-mail naar
                [jeffrey@vanrossum.dev](mailto:jeffrey@vanrossum.dev).
                @endmarkdown
            </div>

        </article>
    </div>
@endsection
