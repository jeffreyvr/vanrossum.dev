<div class="grid grid-cols-1 gap-y-16 lg:grid-cols-2 lg:grid-rows-[auto_1fr] lg:gap-y-12">
    <div class="lg:order-first lg:row-span-2">
        <x-heading size="2xl" level="1" period>
            My name is Jeffrey van Rossum, a freelance PHP developer based in The Netherlands
        </x-heading>

        <x-content>
            <p>
                At a very early age, while I was still in kindergarten, I started building websites. Okay, maybe that's a little exaggerated, but with thirteen years old I was still pretty young.
                I made countless hobby websites and building sites quickly became a passion. Through the years, by studying and gaining work experience, I kept on developing my skills.
            </p>
            <p>
                Since 2011, I started working as a full time webdeveloper and since 2019 as a freelancer. My primairy language is PHP and I have specialised in Laravel and WordPress- development. I like to use front-end tools like Tailwind CSS and Alpine.js. I also make contributions to open source projects which can be found on GitHub.
            </p>
            <p>
                Aside from programming I love traveling, playing padel and do regularly attempt to play guitar. 🎸
            </p>
        </x-content>
    </div>

    <div class="lg:pl-20">
        <div class="max-w-xs px-2.5 lg:max-w-none">
            <img src="{{ url('images/me-corfu.png') }}" class="aspect-square rotate-3 rounded-2xl bg-zinc-100 object-cover dark:bg-zinc-800">

            <div class="space-y-6 mt-12 dark:text-zinc-300">
                <a href="https://x.com/jeffreyrossum" class="flex items-center gap-6">
                    <x-fab-x-twitter class="size-5" /> Follow me on X
                </a>

                <a href="https://github.com/jeffreyvr" class="flex items-center gap-6">
                    <x-fab-github class="size-5" /> Follow me on GitHub
                </a>

                <a href="https://youtube.com/@jeffrey.rossum" class="flex items-center gap-6">
                    <x-fab-youtube class="size-5" /> Watch me on YouTube
                </a>

                <a href="https://linkedin.com/in/jeffrey-van-rossum-97b27321" class="flex items-center gap-6">
                    <x-fab-linkedin class="size-5" /> Follow me on LinkedIn
                </a>

                <div class="h-[1px] bg-zinc-100 dark:bg-zinc-800"></div>

                <a href="{{ localized_route('contact') }}" class="flex items-center gap-6">
                    <x-heroicon-c-at-symbol class="size-5" /> Shoot me an email
                </a>
            </div>
        </div>
    </div>
</div>

<section class="py-8">
    <x-heading level="2">{{ __('Specializations') }}</x-heading>

    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 md:gap-12">
        @foreach(App\Service::where('lang', app()->getLocale())->get() as $service)
            <x-service :$service />
        @endforeach
    </div>
</section>
