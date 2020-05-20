window.docsearch = require('docsearch.js');

import Prism from 'prismjs'

import 'prismjs/components/prism-markup';
import 'prismjs/components/prism-markup-templating';
import 'prismjs/components/prism-clike';
import 'prismjs/components/prism-php';
import 'prismjs/plugins/line-highlight/prism-line-highlight';

Prism.highlightAll();

window.$ = window.jQuery = require('jquery');

$(document).ready(() => {
    // Wrap tables in content responsive container.
    $('.content > table').wrap($("<div />").addClass('block shadow overflow-auto rounded-lg'));

    $('.content > pre[class*="language-"').each((index, el) => {
        let language = el.classList[0].split('-')[1];

        if (['php', 'bash', 'html'].includes(language)) {
            $(
                `<div class="prism-show-language"><div class="prism-show-language-label" data-language="${language}">${language}</div></div>`
            ).insertBefore(el);
        }
    });
    
});
