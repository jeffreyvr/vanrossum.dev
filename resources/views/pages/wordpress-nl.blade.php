@extends('layouts.app', ['title' => 'Freelance WordPress Developer'])

@section('content')
<div class="bg-white py-12 relative">
    <article class="max-w-xl md:max-w-3xl mx-auto px-8 md:px-0">

        <header class="mb-8">
            <h1 class="text-5xl font-extrabold leading-tight mb-1">{{ __('Freelance WordPress Developer') }}</h1>
        </header>

        <div class="text-xl leading-relaxed markup">
            @markdown
            <div class="md:flex md:items-start font-bold text-gray-800">
                <img class="shadow-lg relative z-10 w-full md:w-64 md:mr-8 mb-4 md:mb-0 rounded" src="{{ url('images/avatar.jpg') }}">
            Ik ben Jeffrey van Rossum, freelance PHP developer met ruim 8 jaar WordPress ervaring. Met WordPress heb ik door de jaren aan vele websites gewerkt, waaronder ook maatwerk plugins en thema's.
            </div>

            ## Waarom WordPress?
            [WordPress](https://wordpress.org) is het meest gebruikte CMS ter wereld. Met WordPress heb je binnen een mum van tijd een volledig operationele website gerealiseerd. Daarnaast is de basisfunctionaliteit van WordPress uitbreidbaar met plugins.

            Plugins en thema's zijn er in overvloed te vinden, maar soms heb je maatwerk nodig. Als WordPress developer heb onder andere aan plugins in de uitgeverij-branch om abonnementsaanvragen te koppelen aan een CRM-systeem. Daarnaast heb ik diverse [open-source](https://profiles.wordpress.org/jeffreyvr/#content-plugins) plugins ontwikkeld.

            ## Mij inhuren als WordPress developer
            Op zoek naar een ervaren WordPress developer? Mogelijk spreekt het volgende je dan aan:

            * Jaren lange ervaring met [WordPress en PHP](https://linkedin.com/in/jeffrey-van-rossum-97b27321)
            * Ervaring met front-end frameworks als VueJS, TailwindCSS, Bootstrap en jQuery
            * Werkt met versiebeheer (GIT)
            * Goede beheersing van de Nederlandse en Engelse taal
            * Zowel ervaring met werken in teamverband als zelfstandig
            * Beschikbaar op uur, project of contract -basis
            * Werkt bij voorkeur op afstand, maar (deels) op locatie werken is zeker bespreekbaar

            Als je mij wilt inhuren of aanvullende informatie wilt, stuur dan gerust een e-mail naar [jeffrey@vanrossum.dev](mailto:jeffrey@vanrossum.dev).
            @endmarkdown
        </div>

        @include('partials.reference')

    </article>
</div>
@endsection