@extends('layouts.app', ['title' => 'Freelance Laravel Developer'])

@section('content')

    <div class="bg-white py-12 relative bg-gradient-to-b from-gray-100">
        <article class="max-w-xl md:max-w-3xl mx-auto px-8 md:px-0">

            <header class="mb-8">
                <h1 class="text-5xl text-primary font-semibold font-wide leading-tight mb-1">{{ __('Freelance Laravel Developer') }}</h1>
            </header>

            <div class="text-xl leading-relaxed markup">
                @markdown
                <div class="md:flex md:items-start font-medium text-gray-800">
                    <div class="text-xl">Ik ben Jeffrey van Rossum, freelance PHP developer met ruim 5 jaar ervaring met
                        Laravel. <a href="https://laravel.com">Laravel</a> is een zeer populair PHP framework ontwikkeld door
                        Taylor Otwell.
                    </div>
                    <img class="shadow-lg relative z-10 w-full md:w-32 md:mr-8 mb-4 md:mb-0 rounded"
                         src="{{ url('images/avatar.png') }}">
                </div>

                ## Waarom Laravel?
                Laravel biedt een solide fundament om een flitsende start te geven bij het bouwen van web-applicaties.
                Daarnaast is het framework ook uitermate geschikt om API's mee te realiseren.

                De afgelopen jaren heb ik naast Laravel ook gewerkt met andere frameworks, waaronder Symfony en
                CodeIgniter. Laravel vind ik verreweg
                het prettigst om mee te werken. Het framework maakt het toepassen [_Test Driven
                Development_](https://www.madetech.com/blog/9-benefits-of-test-driven-development) erg toegankelijk.
                Deze methodiek pas ik graag toe, omdat door code grondig (automatisch) te testen je onnodige fouten kan
                voorkomen.

                ## Mij inhuren als Laravel developer
                Op zoek naar een ervaren Laravel developer? Mogelijk spreekt het volgende je dan aan:

                * Jaren lange ervaring met [Laravel en PHP](https://linkedin.com/in/jeffrey-van-rossum-97b27321)
                * Ervaring met front-end frameworks als VueJS, TailwindCSS, Bootstrap en jQuery
                * Versiebeheer (GIT)
                * Goede beheersing van de Nederlandse en Engelse taal
                * Zowel ervaring met werken in teamverband als zelfstandig
                * Beschikbaar op uur, project of contract -basis
                * Werk bij voorkeur op afstand, maar (deels) op locatie werken is zeker bespreekbaar

                Als je mij wilt inhuren of aanvullende informatie wilt, stuur dan gerust een e-mail naar
                [jeffrey@vanrossum.dev](mailto:jeffrey@vanrossum.dev).
                @endmarkdown
            </div>

            @include('partials.reference')

        </article>
    </div>
@endsection
