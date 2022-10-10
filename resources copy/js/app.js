require('./bootstrap');

import hljs from 'highlight.js';
import 'highlight.js/styles/github.css';
import "splitting/dist/splitting.css";
import "splitting/dist/splitting-cells.css";
import Splitting from "splitting";
import AOS from 'aos';
import 'aos/dist/aos.css';
import Alpine from 'alpinejs'
import SimpleMDE from 'simplemde';
import SimpleMDEStyles from "simplemde/dist/simplemde.min.css";

var simplemdeeditor = document.getElementsByClassName("markdown-editor")[0];
if ( typeof simplemdeeditor !== 'undefined' ) {
    var simplemde = new SimpleMDE({ element: document.getElementsByClassName("markdown-editor")[0] });
}

window.Alpine = Alpine

Alpine.start();

AOS.init();

hljs.highlightAll();

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
