require('./bootstrap');

import SimpleMDE from 'simplemde';
import SimpleMDEStyles from "simplemde/dist/simplemde.min.css";

import hljs from 'highlight.js';
import 'highlight.js/styles/atelier-sulphurpool-light.css';

var simplemdeeditor = document.getElementsByClassName("markdown-editor")[0];
if ( typeof simplemdeeditor !== 'undefined' ) {
    var simplemde = new SimpleMDE({ element: document.getElementsByClassName("markdown-editor")[0] });
}

hljs.initHighlightingOnLoad();

window.onload = function () {
    var toggleNav = document.getElementById('toggleNav');
    var nav = document.getElementById('nav');
    toggleNav.onclick = function (e) {
        e.preventDefault();

        if (nav.style.display == 'none' || nav.style.display == '') {
            nav.style.display = 'block';
        } else {
            nav.style.display = 'none';
        }
    };
};