<x-site-layout title="Project">

    <article class="container mx-auto max-w-screen-xl my-16">
        <header>
            <h1 class="font-semibold font-wide text-2xl lg:text-3xl mb-6 text-primary">{{ __('Projects') }}</h1>
        </header>

        @foreach($projects as $project)
            <x-project :project="$project" :even="$loop->even" class="border-t-0 border-b" />
        @endforeach

        {{ $projects->links() }}

    </article>

</x-site-layout>
