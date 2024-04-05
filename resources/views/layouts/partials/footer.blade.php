
<div id="footer-placeholder"></div>

<footer class="lg:sticky lg:left-0 lg:bottom-0 bg-primary text-white lg:h-screen py-12 lg:py-0"
    style="background-image:url({{ url('/images/footer.png') }});">
    <div class="container mx-auto flex flex-col justify-between h-full px-8 lg:px-0">

        <div></div>

        <div class="lg:flex lg:gap-32 lg:items-center lg:justify-items-stretch">
            <div>
                <div class="text-[26px] lg:text-3xl font-wide font-bold" data-aos-anchor="#footer-placeholder"
                    ata-aos="fade-down" data-aos-duration="1000">{{ __('Let\'s work together') }}</div>

                <div class="flex gap-6 mt-12 mb-12 lg:mb-0" data-aos-anchor="#footer-placeholder" data-aos="fade-in"
                    data-aos-duration="1000" data-aos-delay="500">
                    <a href="{{ localized_route('contact') }}"
                        class="stack-dark px-6 py-3 font-medium bg-white text-primary text-[18px] flex gap-4">
                        {{ __('Shoot me a message') }}
                    </a>
                </div>
            </div>

            <div class="grow" data-aos-anchor="#footer-placeholder" data-aos="fade-down" data-aos-delay="500"
                data-aos-duration="1000">
                <div class="font-medium text-[28px] mb-6">{{ __('Get social') }}</div>
                <div class="grid grid-cols-2 gap-6 text-base mb-8 lg:mb-0">
                    <a href="https://x.com/jeffreyrossum" class="underline">X</a>
                    <a href="https://github.com/jeffreyvr" class="underline">GitHub</a>
                    <a href="https://youtube.com/@jeffrey.rossum" class="underline">YouTube</a>
                    <a href="https://linkedin.com/in/jeffrey-van-rossum-97b27321" class="underline">LinkedIn</a>
                </div>
            </div>

        </div>

        <div data-aos-anchor="#footer-placeholder" data-aos="fade-down" data-aos-duration="1000"
            class="border-t border-white/25 pt-12 lg:py-12 lg:flex lg:justify-between text-center lg:text-left text-base">
            <div>
                &copy; {{ date('Y') }} | <a href="{{ localized_route('privacy') }}" class="underline">Privacy</a>
            </div>
            <div>
                <a href="https://github.com/sponsors/jeffreyvr" class="underline">{{ __('Buy me a coffee ☕') }}</a>
            </div>
        </div>
    </div>
</footer>
