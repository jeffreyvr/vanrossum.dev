<article class="border-t py-12 flex items-center justify-between gap-12 group" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="200">
    <div>
        <a href="{{ route('posts.show', $post->idSlug()) }}"
            class="font-medium text-lg lg:text-xl font-wide text-primary mb-4 block">{{ $post->title }}</a>
        <div class="text-sm leading-loose mb-8 lg:mb-0">{{ $post->excerpt }}</div>
        <x-button-link :arrow="true" href="{{ route('posts.show', $post->idSlug()) }}" class="lg:hidden">{{ __('Read more') }}</x-button-link>
    </div>
    <a href="{{ route('posts.show', $post->idSlug()) }}" class="relative hidden lg:block">
        <svg class="w-[58px]" viewBox="0 0 59 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Homepage" transform="translate(-1531.000000, -4774.000000)" fill-rule="nonzero" stroke="#02FB90" stroke-width="2">
                    <path d="M1568.3277,4775.63403 L1588.40756,4798.17243 L1588.40756,4799.64268 L1568.3277,4822.18108 L1560.69039,4822.18108 L1579.16745,4801.99977 L1532.40756,4801.99977 L1532.40756,4795.81534 L1579.16745,4795.81534 L1560.69039,4775.63403 L1568.3277,4775.63403 Z" id="Path-Copy-3" transform="translate(1560.407555, 4798.907555) rotate(-360.000000) translate(-1560.407555, -4798.907555) "></path>
                </g>
            </g>
        </svg>

        <svg class="w-[0px] h-full absolute left-0 top-0 transition-[width] group-hover:w-full" viewBox="0 0 59 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Homepage" transform="translate(-1531.000000, -5050.000000)" fill="#02FB90" fill-rule="nonzero">
                    <polygon id="Path-Copy-4" transform="translate(1560.407555, 5074.907555) rotate(-360.000000) translate(-1560.407555, -5074.907555) " points="1558.41903 5099.18108 1576.89609 5078.99977 1531.40756 5078.99977 1531.40756 5070.81534 1576.89609 5070.81534 1558.41903 5050.63403 1568.77609 5050.63403 1589.40756 5073.79158 1589.40756 5076.02353 1568.77609 5099.18108"></polygon>
                </g>
            </g>
        </svg>

        {{-- <x-arrow class="transition hover:text-dark w-[58px] text-secondary shrink-0" data-aos="fade-right" data-aos-offset="200" data-aos-duration="1500" /> --}}
    </a>
</article>
