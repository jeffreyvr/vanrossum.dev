require('./bootstrap');

import hljs from 'highlight.js';
import 'highlight.js/styles/github-gist.css';
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