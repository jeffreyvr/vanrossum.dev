<div class="bg-no-repeat bg-left-top" style="background-image:url({{ url('/images/hero.png') }});">
    <div class="max-w-screen-xl container mx-auto pt-12 lg:pt-32 relative z-10">
        <div class="lg:flex lg:items-center lg:gap-32 px-8 lg:px-0">
            <div>
                <h1 class="text-[28px] lg:text-2xl font-wide font-semibold text-primary mb-8">
                    <span class="opacity-50" title="To long, didn't read">TLDR;</span> I build <span class="text-secondary underline decoration-primary">websites</span>.
                </h1>

                <div class="text-primary text-[18px] lg:text-[24px] leading-loose [&_p]:mb-4">
                    <p>That's what I love to do. Hi, my name is Jeffrey, and I'm a full stack developer. I use
                        Laravel and WordPress to create web apps and websites.</p>
                    <p>Among freelance work, I like to contribute to open source projects and to write the
                        occasional blog post.</p>
                </div>
            </div>
            <div class="shrink-0">
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
