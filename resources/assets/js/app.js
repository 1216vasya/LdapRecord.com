import 'prismjs';
import 'prismjs/components/prism-clike';
import 'prismjs/components/prism-markup-templating';
import 'prismjs/components/prism-php';

window.jQuery = window.$ = require('jquery');

require('bootstrap');

// Add anchors to each doc heading.
$('article h2, h3').each((index, element) => {
    var anchor = $(element).html().toLowerCase()
        .replace(/[^\w ]+/g,'')
        .replace(/ +/g,'-');

    $(element).html('<a id="'+anchor+'" href="#'+anchor+'">' +
        '<span class="anchor-tag">#</span> '+$(element).html()+'</a>'
    );
});

// Wrap blockquote content in a div for flex-box.
$('.docs blockquote').each((index, element) => {
    $(element).wrap('<div></div>');
});

$('table').each((index, element) => {
    $(element).wrap('<div class="table-responsive"></div>');
});

// Parse blockquote content for flags.
$('.docs blockquote p').each((index, element) => {
    var str = $(element).html();
    var match = str.match(/\{(.*?)\}/);

    if (match) {
        var icon = match[1] || false;
        var word = match[1] || false;
    }

    if (icon) {
        switch (icon) {
            case "note":
                icon = '<i class="fa fa-lg fa-lightbulb"></i>';
                break;
            case "tip":
                icon = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" version="1.1" x="0px" y="0px" width="56.6px" height="87.5px" viewBox="0 0 56.6 87.5" enable-background="new 0 0 56.6 87.5" xml:space="preserve"><path fill="#FFFFFF" d="M28.7 64.5c-1.4 0-2.5-1.1-2.5-2.5v-5.7 -5V41c0-1.4 1.1-2.5 2.5-2.5s2.5 1.1 2.5 2.5v10.1 5 5.8C31.2 63.4 30.1 64.5 28.7 64.5zM26.4 0.1C11.9 1 0.3 13.1 0 27.7c-0.1 7.9 3 15.2 8.2 20.4 0.5 0.5 0.8 1 1 1.7l3.1 13.1c0.3 1.1 1.3 1.9 2.4 1.9 0.3 0 0.7-0.1 1.1-0.2 1.1-0.5 1.6-1.8 1.4-3l-2-8.4 -0.4-1.8c-0.7-2.9-2-5.7-4-8 -1-1.2-2-2.5-2.7-3.9C5.8 35.3 4.7 30.3 5.4 25 6.7 14.5 15.2 6.3 25.6 5.1c13.9-1.5 25.8 9.4 25.8 23 0 4.1-1.1 7.9-2.9 11.2 -0.8 1.4-1.7 2.7-2.7 3.9 -2 2.3-3.3 5-4 8L41.4 53l-2 8.4c-0.3 1.2 0.3 2.5 1.4 3 0.3 0.2 0.7 0.2 1.1 0.2 1.1 0 2.2-0.8 2.4-1.9l3.1-13.1c0.2-0.6 0.5-1.2 1-1.7 5-5.1 8.2-12.1 8.2-19.8C56.4 12 42.8-1 26.4 0.1zM43.7 69.6c0 0.5-0.1 0.9-0.3 1.3 -0.4 0.8-0.7 1.6-0.9 2.5 -0.7 3-2 8.6-2 8.6 -1.3 3.2-4.4 5.5-7.9 5.5h-4.1H28h-0.5 -3.6c-3.5 0-6.7-2.4-7.9-5.7l-0.1-0.4 -1.8-7.8c-0.4-1.1-0.8-2.1-1.2-3.1 -0.1-0.3-0.2-0.5-0.2-0.9 0.1-1.3 1.3-2.1 2.6-2.1H41C42.4 67.5 43.6 68.2 43.7 69.6zM37.7 72.5H26.9c-4.2 0-7.2 3.9-6.3 7.9 0.6 1.3 1.8 2.1 3.2 2.1h4.1 0.5 0.5 3.6c1.4 0 2.7-0.8 3.2-2.1L37.7 72.5z"/></svg>'
                break;
        }

        $(element).html(str.replace(/\{(.*?)\}/, ''));
        $(element).parent().before('<div class="flag">'+ icon +'</div>');
    }
});

// Set active classes in the side navigation links.
$(".side-nav").find("a[href='"+window.location.pathname+"']").each((index, element) => {
    $(element).addClass("active");
});
