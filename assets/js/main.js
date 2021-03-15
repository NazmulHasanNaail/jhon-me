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
    $('.work-img').magnificPopup({type:'image'});
    
    //====SmoothScroll=======//
    var scroll = new SmoothScroll('a[href*="#"]');
});
}(jQuery));

