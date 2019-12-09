@extends('layouts.app')

@section('content')
<div class="bg-white py-12 relative">
    <article class="max-w-xl md:max-w-3xl mx-auto px-8 md:px-0">
        <header class="mb-8">
            <h1 class="text-5xl font-extrabold leading-tight mb-1">{{ __('About') }}</h1>
        </header>

        <div class="text-xl leading-relaxed markup">
            @markdown
            Ik ben Jeffrey van Rossum en dit is mijn persoonlijke website. Ik ben een freelance [PHP](https://www.php.net/)-developer en ik woon in [Bennekom](https://nl.wikipedia.org/wiki/Bennekom) (thé place to be) in Gelderland, Nederland.

            Al op jonge leeftijd begon ik als hobby met het maken van websites. Het is sindsdien altijd een passie geweest en gelukkig heb ik mij door de jaren heen steeds verder ontwikkeld.

            Sinds 2011 werk ik fulltime als webdeveloper, eerst bij een reclamebureau en later bij een uitgeverij als onderdeel van het online-team. Sinds eind 2019 ben ik freelancer. 

            Als PHP-developer ben ik gespecialiseerd in [Laravel](http://laravel.com/) en [WordPress](https://wordpress.org/) -development. Daarnaast, werk ik graag met de front-end tools [Vue](https://vuejs.org/), [TailwindCSS](https://tailwindcss.com/) en [Bootstrap](https://getbootstrap.com/). 
            
            Als je interesse hebt in een samenwerking, neem dan gerust [contact](mailto:jeffrey@vanrossum.dev) met mij op.
            @endmarkdown                
        </div>

    </article>
</div>
@endsection