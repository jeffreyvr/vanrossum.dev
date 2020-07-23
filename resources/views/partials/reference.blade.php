<div class="mt-10 bg-white p-10 shadow rounded text-lg italic text-gray-800">
    @if(app()->getLocale() == 'nl')
    <blockquote>
        <div class="absolute pin-t pin-l -mt-4 text-gray-300 -ml-4">
            <i class="fas fa-quote-left text-3xl"></i>
        </div>
        <div class="relative leading-relaxed">
            <p>Jeffrey is een developer met oog voor detail, maar blijft de grote lijnen zien.</p>
            <p class="mt-4">Een developer met gevoel voor vormgeving en taal, uitstekende
                sociale vaardigheden maar bovenal prettig om mee samen te werken.</p>
        </div>
        <div class="mt-10 flex items-center justify-between">
            <div>
                <div class="uppercase text-gray-900 font-semibold mb-2">Jan Egbert Krikken</div>
                <div class="text-gray-700 text-base">Digital Marketing Manager bij <a href="https://geomares-marketing.com/" class="text-gray-900" target="_blank">Geomares</a></div>
            </div>
            <div>
                <a href="https://nl.linkedin.com/in/jan-egbert-krikken-0b954720" class="text-blue-500"><i class="fab fa-linkedin text-3xl"></i></a>
            </div>
        </div>
    </blockquote>
    @else
    <blockquote>
        <div class="absolute pin-t pin-l -mt-4 text-gray-300 -ml-4">
            <i class="fas fa-quote-left text-3xl"></i>
        </div>
        <div class="relative leading-relaxed">
            <p>Jeffrey is a developer with an eye for detail, while keeping notice of the big picture.</p>
            <p class="mt-4">A developer with a feeling for design and language, excellent social skills and above all very pleasant to work with.</p>
        </div>
    </blockquote>
    <div class="mt-10 flex items-center justify-between">
        <div>
            <div class="uppercase text-gray-900 font-semibold mb-2">Jan Egbert Krikken</div>
            <div class="text-gray-700 text-base">Digital Marketing Manager at <a href="https://geomares-marketing.com/" class="text-gray-900" target="_blank">Geomares</a></div>
        </div>
        <div>
            <a href="https://nl.linkedin.com/in/jan-egbert-krikken-0b954720" class="text-blue-500"><i class="fab fa-linkedin text-3xl"></i></a>
        </div>
    </div>
    @endif
</div>
