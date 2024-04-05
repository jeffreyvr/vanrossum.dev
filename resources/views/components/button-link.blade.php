@props([
    'arrow' => false
])
<a {{ $attributes->merge(['class' => 'group stack-sm px-6 py-3 font-medium bg-primary text-secondary text-[18px] items-center inline-flex gap-4 transition hover:bg-dark']) }}>
    {{ $slot }}

    @if($arrow)
    <div class="relative w-[15px]">
        <svg class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 h-[13px] transition opacity-100 group-hover:opacity-0" viewBox="0 0 9 13" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g class="transition opacity-100 group-hover:opacity-0" id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1150.000000, -2533.000000)" fill="#02FB90" fill-rule="nonzero">
                    <polygon id="Path" points="1150.59103 2545.02825 1155.05101 2539.5 1155.05101 2539.42825 1150.59103 2533.82825 1153.09101 2533.82825 1158.07102 2539.17079 1158.07102 2539.68571 1153.09101 2545.02825"></polygon>
                </g>
            </g>
        </svg>

        <svg class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 h-[13px] transition opacity-0 group-hover:opacity-100" viewBox="0 0 15 13" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1144.000000, -2533.000000)" fill="#02FB90" fill-rule="nonzero">
                    <polygon id="Path" points="1150.59103 2545.02825 1155.05101 2540.37234 1144.07102 2540.37234 1144.07102 2538.48416 1155.05101 2538.48416 1150.59103 2533.82825 1153.09101 2533.82825 1158.07102 2539.17079 1158.07102 2539.68571 1153.09101 2545.02825"></polygon>
                </g>
            </g>
        </svg>
    </div>
    @endif
</a>
