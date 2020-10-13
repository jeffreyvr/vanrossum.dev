<div class="p-12 lg:p-16 mx-auto text-lg italic text-gray-200">
    @if(app()->getLocale() == 'nl')
    <blockquote>
        <div class="absolute pin-t pin-l -mt-4 text-gray-600 -ml-4">
            <i class="fas fa-quote-left text-3xl"></i>
        </div>
        <div class="relative text-xl leading-relaxed text-center">
            <p>Jeffrey is een developer met oog voor detail, maar blijft de grote lijnen zien.</p>
            <p>Een developer met gevoel voor vormgeving en taal, uitstekende
                sociale vaardigheden maar bovenal prettig om mee samen te werken.</p>
        </div>
        <div class="mt-10 flex justify-end">
            <div class="flex">
                <div>
                    <div class="uppercase text-white font-semibold mb-2">Jan Egbert Krikken</div>
                    <div class="text-gray-200 text-base">Digital Marketing Manager bij <a href="https://geomares-marketing.com/" class="text-gray-200 underline" target="_blank">Geomares</a></div>
                </div>
                <div class="flex items-center ml-4">
                    <a href="https://nl.linkedin.com/in/jan-egbert-krikken-0b954720" class="text-white"><i class="fab fa-linkedin text-3xl"></i></a>
                </div>
            </div>
        </div>
    </blockquote>
    @else
    <blockquote>
        <div class="absolute pin-t pin-l -mt-4 text-gray-600 -ml-4">
            <i class="fas fa-quote-left text-3xl"></i>
        </div>
        <div class="relative text-xl leading-relaxed text-center">
            <p>Jeffrey is a developer with an eye for detail, while keeping notice of the big picture.</p>
            <p>A developer with a feeling for design and language, excellent social skills and above all very pleasant to work with.</p>
        </div>
        <div class="mt-10 flex justify-end">
            <div class="flex items-center">
                <div>
                    <div class="uppercase text-white font-semibold mb-2">Jan Egbert Krikken</div>
                    <div class="text-gray-200 text-base">Digital Marketing Manager at <a href="https://geomares-marketing.com/" class="text-gray-200 underline" target="_blank">Geomares</a></div>
                </div>
                <div class="flex items-center ml-4">
                    <a href="https://nl.linkedin.com/in/jan-egbert-krikken-0b954720" class="text-white"><i class="fab fa-linkedin text-3xl"></i></a>
                </div>
            </div>
        </div>
    </blockquote>
    @endif
</div>
