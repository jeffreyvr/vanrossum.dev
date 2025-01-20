<x-site-layout :title="__('Projects')">

    <article class="container mx-auto">
        <header>
            <x-heading period size="2xl" level="1">{{ __('Projects') }}</x-heading>
        </header>

        <div>
            @foreach($projects as $project)
                <x-project :project="$project" :even="$loop->even" class="border-t-0 border-b last:border-none" />
            @endforeach
        </div>

        {{ $projects->links() }}

    </article>

</x-site-layout>
