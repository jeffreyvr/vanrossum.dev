@extends('layouts.app', ['title' => 'Freelance Laravel Developer'])

@section('content')
    @include('layouts.partials.navigation', ['shape' => true])
    <div class="bg-white py-12 relative">
        <article class="max-w-xl md:max-w-3xl mx-auto px-8 md:px-0">

            <header class="mb-8">
                <h1 class="text-5xl font-extrabold leading-tight mb-1">{{ __('Freelance Laravel Developer') }}</h1>
            </header>

            <div class="text-xl leading-relaxed markup">
                @markdown
                <div class="md:flex md:items-start font-bold text-gray-800">
                    <img class="shadow-lg relative z-10 w-full md:w-64 md:mr-8 mb-4 md:mb-0 rounded"
                         src="{{ url('images/avatar.jpg') }}">
                    Ik ben Jeffrey van Rossum, freelance PHP developer met ruim 5 jaar Laravel ervaring. Met Laravel heb
                    ik door de jaren aan diverse applicaties gewerkt.
                </div>

                ## Waarom Laravel?
                [Laravel](https://laravel.com) is een zeer populair PHP framwork ontwikkeld door Taylor Otwell. Het
                framework stelt je in staat om snel te kunnen werken en is geschikt voor zowel simpele als complexe
                applicaties. Het framework is ook uitermate geschikt om API's mee te realiseren.

                Ik heb met diverse frameworks gewerkt (bijvoorbeeld Symfony en CodeIgniter), maar Laravel is verreweg
                het prettigst om mee te werken. Het framework maakt ook het toepassen [_Test Driven
                Development_](https://www.madetech.com/blog/9-benefits-of-test-driven-development) erg toegankelijk.
                Deze methodiek pas ik graag toe, omdat door je code grondig te testen je onnodige fouten kan voorkomen.

                ## Mij inhuren als Laravel developer
                Op zoek naar een ervaren Laravel developer? Mogelijk spreekt het volgende je dan aan:

                * Jaren lange ervaring met [Laravel en PHP](https://linkedin.com/in/jeffrey-van-rossum-97b27321)
                * Ervaring met front-end frameworks als VueJS, TailwindCSS, Bootstrap en jQuery
                * Werkt met versiebeheer (GIT)
                * Goede beheersing van de Nederlandse en Engelse taal
                * Zowel ervaring met werken in teamverband als zelfstandig
                * Beschikbaar op uur, project of contract -basis
                * Werkt bij voorkeur op afstand, maar (deels) op locatie werken is zeker bespreekbaar

                Als je mij wilt inhuren of aanvullende informatie wilt, stuur dan gerust een e-mail naar
                [jeffrey@vanrossum.dev](mailto:jeffrey@vanrossum.dev).
                @endmarkdown
            </div>

            @include('partials.reference')

        </article>
    </div>
@endsection
