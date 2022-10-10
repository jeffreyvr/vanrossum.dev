<div class="bg-no-repeat bg-left-top" style="background-image:url({{ url('/images/hero.png') }});">
    <div class="max-w-screen-xl container mx-auto pt-12 lg:pt-32">
        <div class="lg:flex lg:items-center lg:gap-32 px-8 lg:px-0">
            <div>
                <h1 class="text-[28px] lg:text-3xl font-wide font-semibold text-primary mb-4">
                    My name is Jeffrey van Rossum.
                </h1>

                <div class="text-primary text-[18px] lg:text-[24px] leading-loose mb-24 [&_p]:mt-4">
                    <p>I'm a freelance PHP developer from Bennekom, The Netherlands.</p>
                </div>
            </div>
            <div class="shrink-0">
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

<div class="max-w-screen-xl container mx-auto my-20 px-8 lg:px-0">
    <h2 class="text-lg lg:text-2xl text-primary font-wide font-semibold pb-0 mb-4 lg:pb-6 lg:mb-6 border-b">{{ __('More about me') }}</h2>

    <div class="grid lg:grid-cols-2 text-sm lg:text-base leading-loose text-dark gap-8 mb-12">
        <div>
            At a very early age, while I was still in kindergarten, I started building websites. Okay, maybe that's a little exaggerated, but with thirteen years old I was still pretty young.
            I made countless hobby websites and building sites quickly became a passion. Through the years, by studying and gaining work experience, I kept on developing my skills.
        </div>
        <div>
            Since 2011, I started working as a full time webdeveloper and since 2019 as a freelancer. My primairy language is PHP and I have specialised in Laravel and WordPress- development. I like to use front-end tools like Tailwind CSS, Alpine.js and Vue.js. I also make contributions to open source projects which can be found on GitHub.
        </div>
    </div>
</div>
