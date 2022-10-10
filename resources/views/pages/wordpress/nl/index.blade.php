<x-site-layout title="Freelance WordPress Developer">
    <div class="mx-auto max-w-screen-md lg:pt-20 pt-8 px-8 lg:px-0">
        <article>
            <header class="mb-8">
                <h1 class="text-xl lg:text-3xl font-bold font-wide text-primary">
                    <x-text-reveal>{{ __('Freelance WordPress Developer') }}</x-text-reveal>
                </h1>
            </header>

            <img src="{{ url('images/me@work2.jpg') }}" data-aos="fade-up" data-aos-duration="1000" class="rounded-xl shadow-2xl shadow-primary/25 mb-12"  />

            <x-post-content>
                <div class="md:flex md:items-start font-medium text-gray-800">
                    Ik ben Jeffrey van Rossum, freelance PHP developer met ruim 8 jaar WordPress ervaring. Met WordPress
                    heb ik door de jaren aan vele websites gewerkt, waaronder ook maatwerk plugins en thema's.
                </div>

                @markdown
                ## Waarom WordPress?
                [WordPress](https://wordpress.org) is het meest gebruikte CMS ter wereld. Met WordPress heb je binnen
                een mum van tijd een volledig operationele website gerealiseerd. Daarnaast is de basisfunctionaliteit
                van WordPress uitbreidbaar met plugins.

                Plugins en thema's zijn er in overvloed te vinden, maar soms heb je maatwerk nodig. Als WordPress
                developer heb onder andere aan plugins in de uitgeverij-branch om abonnementsaanvragen te koppelen aan
                een CRM-systeem. Daarnaast heb ik diverse
                [open-source](https://profiles.wordpress.org/jeffreyvr/#content-plugins) plugins ontwikkeld.

                ## Mij inhuren als WordPress developer
                Op zoek naar een ervaren WordPress developer? Mogelijk spreekt het volgende je dan aan:

                * Jaren lange ervaring met [WordPress en PHP](https://linkedin.com/in/jeffrey-van-rossum-97b27321)
                * Ervaring met front-end frameworks Tailwind CSS, Alpine.js en Vue.js
                * Werkt met versiebeheer (GIT)
                * Goede beheersing van de Nederlandse en Engelse taal
                * Zowel ervaring met werken in teamverband als zelfstandig
                * Beschikbaar op uur, project of contract -basis
                * Werkt bij voorkeur op afstand, maar (deels) op locatie werken is zeker bespreekbaar

                Als je mij wilt inhuren of aanvullende informatie wilt, stuur dan gerust een e-mail naar
                [jeffrey@vanrossum.dev](mailto:jeffrey@vanrossum.dev).
                @endmarkdown
            </x-post-content>

            <x-code-snippet title="TailPress" url="https://github.com/jeffreyvr/tailpress">
                @markdown(Storage::get('code-snippets/wordpress.md'))
            </x-code-snippet>
        </article>
    </div>
</x-site-layout>
