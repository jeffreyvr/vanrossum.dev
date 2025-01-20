<div class="grid grid-cols-1 gap-y-16 lg:grid-cols-2 lg:grid-rows-[auto_1fr] lg:gap-y-12">
    <div class="lg:order-first lg:row-span-2">
        <x-heading size="2xl" level="1" period>
            Mijn naam is Jeffrey van Rossum, een freelance PHP-developer gevestigd in Nederland
        </x-heading>

        <x-content>
            <p>
                Met de fopspeen nog in de mond, begon ik als baby al met het maken van websites. Oké, dat is iets overdreven, maar met dertien jaar was ik er best vroeg bij. Ik maakte vele hobby-sites en het bouwen van websites werd al snel een passie. Door de jaren heen heb ik mij door te studeren en werkervaring op te doen steeds verder ontwikkeld.
            </p>
            <p>
                Sinds 2011 ben ik fulltime webdeveloper en sinds 2019 actief als freelancer. Mijn primaire programmeertaal is PHP en ik heb me gespecialiseerd in Laravel- en WordPress-ontwikkeling. Ik maak graag gebruik van front-end tools zoals Tailwind CSS en Alpine.js. Een deel van mijn werk is open source en kan worden gevonden op GitHub.
            </p>
            <p>
                Naast programmeren houd ik van reizen, padel spelen en probeer ik regelmatig wat op de gitaar te spelen. 🎸
            </p>
        </x-content>
    </div>

    <div class="lg:pl-20">
        <div class="max-w-xs px-2.5 lg:max-w-none">
            <img src="{{ url('images/me-corfu.png') }}" class="aspect-square rotate-3 rounded-2xl bg-zinc-100 object-cover dark:bg-zinc-800">


            <div class="space-y-6 mt-12 dark:text-zinc-300">
                <a href="https://x.com/jeffreyrossum" class="flex items-center gap-6">
                    <x-fab-x-twitter class="size-5" /> Volg me op X
                </a>

                <a href="https://github.com/jeffreyvr" class="flex items-center gap-6">
                    <x-fab-github class="size-5" /> Volg me op GitHub
                </a>

                <a href="https://youtube.com/@jeffrey.rossum" class="flex items-center gap-6">
                    <x-fab-youtube class="size-5" /> Bekijk me op YouTube
                </a>

                <a href="https://linkedin.com/in/jeffrey-van-rossum-97b27321" class="flex items-center gap-6">
                    <x-fab-linkedin class="size-5" /> Volg me op LinkedIn
                </a>

                <div class="h-[1px] bg-zinc-100 dark:bg-zinc-800"></div>

                <a href="{{ localized_route('contact') }}" class="flex items-center gap-6">
                    <x-heroicon-c-at-symbol class="size-5" /> Stuur me een e-mail
                </a>
            </div>
        </div>
    </div>
</div>

<section class="py-8">
    <x-heading level="2" size="lg">{{ __('Specialisaties') }}</x-heading>

    <div class="grid grid-cols-2 gap-12">
        @foreach(App\Service::where('lang', app()->getLocale())->get() as $service)
            <x-service :$service />
        @endforeach
    </div>
</section>
