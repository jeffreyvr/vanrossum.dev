<div>
    <img src="{{ url('images/me-corfu-small.png') }}" alt="Me in Corfu" class="rounded-full w-16 scale-x-[-1] mb-8">

    <x-heading level="1" size="2xl" period>I love to create digital products</x-heading>

    <div class="mt-8 text-lg max-w-2xl text-zinc-600 dark:text-zinc-400">
        <p>I'm Jeffrey, a freelance web developer from the Netherlands with a passion for creating digital products. I specialize in PHP development, working with powerful tools like <a class="underline" href="{{ localized_route('laravel') }}">Laravel</a> and <a class="underline" href="{{ localized_route('wordpress') }}">WordPress</a> to bring ideas to life.</p>
    </div>

    <div class="flex items-center gap-4 mt-8 text-zinc-800 dark:text-zinc-200">
        <a href="https://x.com/jeffreyrossum" aria-label="X profile">
            <x-fab-x-twitter class="size-5" />
        </a>

        <a href="https://github.com/jeffreyvr" aria-label="GitHub profile">
            <x-fab-github class="size-5" />
        </a>

        <a href="https://youtube.com/@jeffrey.rossum" aria-label="YouTube channel">
            <x-fab-youtube class="size-5" />
        </a>

        <a href="https://linkedin.com/in/jeffrey-van-rossum-97b27321" aria-label="LinkedIn profile">
            <x-fab-linkedin class="size-5" />
        </a>
    </div>
</div>

@section('seo')
    <meta name="description" content="I'm Jeffrey, a freelance web developer from the Netherlands with a passion for creating digital products.">
@endsection
