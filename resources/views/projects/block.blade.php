<div class="md:w-1/3 md:px-6 mb-6 md:mb-0">
    <a href="{{ $project['url'] }}" target="_blank">
        <div
            class="bg-white enlarge rounded text-center text-base rounded-lg border-t-6 border-primary shadow-lg h-full px-8 md:px-12 py-8">
            <div class="h-24 pt-5 mb-6">
                {!! $project['logo'] !!}
            </div>
            <div class="py-8 px-4">
                <p class="mb-6 leading-snug">{!! $project['description'] !!}</p>
                <p class="text-sm text-gray-600">{{ $project['domain'] }} <i class="fas fa-external-link-alt"
                        aria-hidden="true"></i></p>
            </div>
        </div>
    </a>
</div>