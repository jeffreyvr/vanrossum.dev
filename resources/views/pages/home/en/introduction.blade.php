<div class="bg-no-repeat bg-left-top" style="background-image:url({{ url('/images/hero.png') }});">
    <div class="container mx-auto pt-12 lg:pt-20 xl:pt-32 relative z-10">
        <div class="md:flex lg:items-center md:gap-16 lg:gap-32">
            <div>
                <h1 class="text-[28px] lg:text-3xl font-wide font-semibold text-primary mb-8">
                    I love to create <span class="underline decoration-primary decoration-[3px] text-secondary">digital</span> products.
                </h1>

                <div class="text-primary text-[18px] lg:text-[24px] leading-loose [&_p]:mb-4">
                    <p>I'm Jeffrey, a freelance web developer based in the Netherlands. I love building digital products.</p>
                    <p>As a freelance PHP developer, I get to work with great tools like Laravel and WordPress to do just that.</p>
                </div>
            </div>
            <div class="max-w-[88%] mx-auto lg:mx-none md:max-w-xs xl:max-w-lg shrink-0">
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
