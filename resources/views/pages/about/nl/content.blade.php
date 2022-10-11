<div class="bg-no-repeat bg-left-top" style="background-image:url({{ url('/images/hero.png') }});">
    <div class="container pt-12 lg:pt-32">
        <div class="lg:flex lg:items-center lg:gap-32">
            <div>
                <h1 class="text-[28px] lg:text-2xl font-wide font-semibold text-primary mb-8">
                    Ik ben Jeffrey van Rossum.
                </h1>

                <div class="text-primary text-[18px] lg:text-[24px] leading-loose mb-24 [&_p]:mt-4">
                    <p>Ik ben een freelance PHP-developer en ik woon in Bennekom, Nederland.</p>
                </div>
            </div>
            <div class="max-w-[88%] mx-auto lg:mx-none md:max-w-xs xl:max-w-lg shrink-0">
                <div class="stack relative" data-aos="fade-up" data-aos-duration="1000">
                    <img src="{{ url('images/jeffrey.jpg') }}" class="w-full lg:w-[473px]" data-aos="fade-up"
                        data-aos-duration="1000" data-delay="1000" />
                    <a href="{{ localized_route('laravel') }}"
                        class="bg-primary !absolute bottom-0 left-0 px-4 py-3 -rotate-6 ml-8 mb-28 text-white inline-flex gap-2 items-center">
                        <x-laravel-logo />
                        Laravel developer
                    </a>
                    <a href="{{ localized_route('wordpress') }}"
                        class="bg-primary !absolute bottom-0 right-0 px-4 py-3 rotate-3 m-8 text-white inline-flex gap-2 items-center">
                        <x-wordpress-logo />
                        WordPress developer
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-20">
    <h2 class="text-lg lg:text-2xl text-primary font-wide font-semibold pb-0 mb-4 lg:pb-6 lg:mb-6 border-b">{{ __('More about me') }}</h2>

    <div class="grid lg:grid-cols-2 text-sm lg:text-base leading-loose text-dark gap-8 mb-12">
        <div>
            Met de fopspeen nog in de mond, begon ik als baby al met het maken van websites. Oké, dat is iets overdreven, maar met dertien jaar was ik er best vroeg bij.
            Ik maakte vele hobby-sites en het bouwen van websites werd al snel een passie. Door de jaren heen heb ik mij door te studeren en werkervaring op te doen steeds verder ontwikkeld.
        </div>
        <div>
            Sinds 2011 werk ik fulltime als webdeveloper en sinds eind 2019 als freelancer. Mijn primaire programmeertaal is PHP en ik heb mij gespecialiseerd in Laravel en WordPress- development. Daarnaast, werk ik graag met de front-end tools Tailwind CSS, Alpine.js en Vue.js. Een deel van mijn werk is open source en kan worden gevonden op GitHub.
        </div>
    </div>
</div>
