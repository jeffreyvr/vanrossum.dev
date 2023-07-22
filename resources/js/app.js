require('./bootstrap');

import "splitting/dist/splitting.css";
import "splitting/dist/splitting-cells.css";
import Splitting from "splitting";
import AOS from 'aos';
import 'aos/dist/aos.css';
import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start();

AOS.init();

Splitting();

const elements = document.querySelectorAll('.observe');

var observer = new IntersectionObserver(function handleIntersection(entries) {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible')
        } else {
            entry.target.classList.remove('visible')
        }
    });
});

elements.forEach(element => observer.observe(element));

var videoEmbeds = document.querySelectorAll('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]');

videoEmbeds.forEach((videoEmbed) => {
    let videoEmbedContainer = document.createElement('div');

    videoEmbedContainer.classList.add('aspect-h-9');
    videoEmbedContainer.classList.add('aspect-w-16');

    videoEmbed.parentNode.insertBefore(videoEmbedContainer, videoEmbed);
    videoEmbedContainer.appendChild(videoEmbed);
})
