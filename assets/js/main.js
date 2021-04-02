(function ($) {
	"use strict";
jQuery(document).ready(function ($) {
    //============menu=============//
    $('.menu__icon,.menu__item').click(function () {
        $('header').toggleClass('menu_shown');
    });
    
    //=======Sticky-Navbar======//
    window.addEventListener("scroll",function(){
        var navbar = document.querySelector("header");
         navbar.classList.toggle("sticky", window.scrollY > 0);

    })
       //=======Return-To-Top======//
    window.addEventListener("scroll",function(){
        var navbar = document.querySelector(".return-to-top");
         navbar.classList.toggle("show", window.scrollY >100);

    })

    //====protfolion-mansonary-layout=======//
    var $grid = $('.portfolio').isotope({
        itemSelector: '.grid-item',
        percentPosition: true,
        masonry: {
            // use outer width of grid-sizer for columnWidth
            columnWidth: 1
        }
    });

    //-filter items on button click
    $('.filters').on('click', 'a', function () {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({
            filter: filterValue
        });
    });

    //-change is-checked class on buttons
    $('.filters').each(function (i, buttonGroup) {
        var $buttonGroup = $(buttonGroup);
        $buttonGroup.on('click', 'a', function () {
            $buttonGroup.find('.is-checked').removeClass('is-checked');
            $(this).addClass('is-checked');
        });
    });
    //====magnificPopup=======//
    // $('.work-img').magnificPopup({type:'image'});
    $("body").magnificPopup({
        delegate: "a.lightbox",
        type: "image",
        removalDelay: 300,
        mainClass: "mfp-fade",
        image: { titleSrc: "title", gallery: { enabled: true } },
        iframe: {
            markup: '<div class="mfp-iframe-scaler">' + '<div class="mfp-close"></div>' + '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' + '<div class="mfp-title mfp-bottom-iframe-title"></div>' + "</div>",
            patterns: {
                youtube: { index: "youtube.com/", id: null, src: "%id%?autoplay=1" },
                vimeo: { index: "vimeo.com/", id: "/", src: "//player.vimeo.com/video/%id%?autoplay=1" },
                gmaps: { index: "//maps.google.", src: "%id%&output=embed" },
            },
            srcAction: "iframe_src",
        },
        callbacks: {
            markupParse: function (template, values, item) {
                values.title = item.el.attr("title");
            },
        },
    });
    //====magnificPopup-for-video=======//
    // $('.play-intro-btn').magnificPopup({type:'iframe'});
    
    //====SmoothScroll=======//
    var scroll = new SmoothScroll('a[href*="#"]');
});
}(jQuery));

