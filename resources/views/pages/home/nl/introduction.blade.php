<div class="bg-no-repeat bg-left-top" style="background-image:url({{ url('/images/hero.png') }});">
    <div class="container mx-auto pt-12 lg:pt-20 xl:pt-32 relative z-10">
        <div class="md:flex lg:items-center md:gap-16 lg:gap-32">
            <div>
                <h1 class="text-[28px] lg:text-2xl font-wide font-semibold text-primary mb-8">
                    <span class="opacity-50" title="To long, didn't read">TLDR;</span> Ik maak <span class="text-secondary underline decoration-primary">websites</span>.
                </h1>

                <div class="text-primary text-[18px] lg:text-[24px] leading-loose [&_p]:mb-4">
                    <p>Dat is kortgezegd wat ik doe en wat mijn passie is. Ik ben Jeffrey en met de programmeertaal PHP en frameworks als Laravel en WordPress in mijn gereedschapskist, bouw ik web-applicaties.</p>
                    <p>Daarnaast werk ik aan diverse open source projecten. Zo nu en dan schrijf ik een blog.</p>
                </div>
            </div>
            <div class="max-w-[88%] mx-auto lg:mx-none md:max-w-xs shrink-0">
                <div class="stack relative" data-aos="fade-up" data-aos-duration="1000">
                    <img src="{{ url('images/me@macbook.jpg') }}" class="w-full lg:w-[473px]" data-aos="fade-up" data-aos-duration="1000"
                        data-delay="1000" />
                    <a href="{{ localized_route('laravel') }}"
                        class="bg-dark !absolute bottom-0 left-0 px-4 py-3 -rotate-6 ml-8 mb-28 text-white inline-flex gap-2 items-center">
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
        <x-circle class="hidden lg:block" />
    </div>
</div>
