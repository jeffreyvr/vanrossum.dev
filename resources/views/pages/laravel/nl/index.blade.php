<x-site-layout title="Freelance Laravel Developer">
    <div class="container max-w-screen-md lg:pt-20 pt-8">
        <article>
            <header class="mb-8">
                <h1 class="text-xl lg:text-3xl font-bold font-wide text-primary">
                    <x-text-reveal>{{ __('Freelance Laravel Developer') }}</x-text-reveal>
                </h1>
            </header>

            <img src="{{ url('images/me@work.jpg') }}" class="rounded-lg shadow-xl shadow-primary/10 mb-12" data-aos="zoom-in" data-aos-delay="800" data-aos-duration="1000" />

            <x-post-content>
                @markdown

                <div class="font-medium text-gray-800">
                    Ik ben Jeffrey van Rossum, freelance PHP developer met ruim 5 jaar ervaring met <a href="https://laravel.com">Laravel</a>. Laravel is een zeer populair PHP framework ontwikkeld door Taylor Otwell.
                </div>

                ## Waarom Laravel?
                Laravel is een solide fundament om een simpele of juist complexe web-applicatie te bouwen.
                Daarnaast is het framework ook uitermate geschikt om API's mee te realiseren.

                Eerder werkte ik al met frameworks als Symfony en CodeIgniter, maar Laravel vind ik verreweg
                het prettigst om mee te werken. Het framework maakt het toepassen [_Test Driven
                Development_](https://www.madetech.com/blog/9-benefits-of-test-driven-development) erg toegankelijk.
                Deze methodiek pas ik graag toe, omdat door code grondig (automatisch) te testen je onnodige fouten kan
                voorkomen.

                ## Mij inhuren als Laravel developer
                Op zoek naar een ervaren Laravel developer? Mogelijk spreekt het volgende je dan aan:

                * Jaren lange ervaring met [Laravel en PHP](https://linkedin.com/in/jeffrey-van-rossum-97b27321)
                * Ervaring met front-end frameworks als Tailwind CSS, Alpine.js en Vue.js
                * Versiebeheer (GIT)
                * Goede beheersing van de Nederlandse en Engelse taal
                * Zowel ervaring met werken in teamverband als zelfstandig
                * Beschikbaar op uur, project of contract -basis
                * Werk bij voorkeur op afstand, maar (deels) op locatie werken is bespreekbaar

                Als je mij wilt inhuren of aanvullende informatie wilt, stuur dan gerust een e-mail naar
                [jeffrey@vanrossum.dev](mailto:jeffrey@vanrossum.dev).
                @endmarkdown
            </x-post-content>

            <x-code-snippet title="Laravel Simple Media" url="https://github.com/jeffreyvr/laravel-simple-media">
                @markdown(Storage::get('code-snippets/laravel.md'))
            </x-code-snippet>
        </div>
    </div>
</x-site-layout>
