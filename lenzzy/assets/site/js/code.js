/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//preload
$(window).on("load", function () {
    $(".preloader").delay(1000).fadeOut(1000);
});
//preload
$(document).ready(function () {
    //search form
    $(".search").click(function () {
        $(".search-form").addClass("search-expand");
    });
    $(".close-form").click(function () {
        $(".search-form").removeClass("search-expand");
    });
    //search form
    //slider
    $(".slider").owlCarousel({
        items: 1,
        margin: 0,
        smartSpeed: 1500,
        rtl: true,
        nav: true,
        dots: true,
        loop: true,
        autoplay: true,
        mouseDrag: true,
        touchDrag: true,
        autoplayTimeout: 3000,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut'
    });
    $("#owl-demo").owlCarousel({
        items: 5,
        margin: 0,
        smartSpeed: 1500,
        rtl: true,
        nav: false,
        dots: false,
        loop: true,
        autoplay: true,
        mouseDrag: true,
        touchDrag: true,
        autoplayTimeout: 3000,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut'
    });
    $("#owl-demo2").owlCarousel({
        items: 5,
        margin: 0,
        smartSpeed: 1500,
        rtl: true,
        nav: false,
        dots: false,
        loop: true,
        autoplay: true,
        mouseDrag: true,
        touchDrag: true,
        autoplayTimeout: 3000,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut'
    });
    $("#owl-demo3").owlCarousel({
        items: 5,
        margin: 0,
        smartSpeed: 1500,
        rtl: true,
        nav: false,
        dots: false,
        loop: true,
        autoplay: true,
        mouseDrag: true,
        touchDrag: true,
        autoplayTimeout: 3000,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut'
    });
    $("#owl-demo4").owlCarousel({
        items: 5,
        margin: 0,
        smartSpeed: 1500,
        rtl: true,
        nav: false,
        dots: false,
        loop: true,
        autoplay: true,
        mouseDrag: true,
        touchDrag: true,
        autoplayTimeout: 3000,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut'
    });
    $("#owl-demo5").owlCarousel({
        items: 5,
        margin: 0,
        smartSpeed: 1500,
        rtl: true,
        nav: false,
        dots: false,
        loop: true,
        autoplay: true,
        mouseDrag: true,
        touchDrag: true,
        autoplayTimeout: 3000,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut'
    });
//slider
//taps
    $(function () {
        $('#taps a:first').tab('show');
    });
//taps
//carousel
    $(function () {
        $('.album').owlCarousel({
            loop: true,
			items: 5,
            autoplay: true,
            margin: 35,
            responsiveClass: true,
            rtl: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: true
                },
                1000: {
                    items: 3,
                    nav: true,
                    loop: true
                },
                1600: {
                    items: 4,
                    nav: true,
                    loop: true
                }
            }
        });
    });
//carousel
//popup
 $(".album-box").click(function(){
     $(".popup").addClass("pop-active");
     $(".popup-container").fadeIn('fast').addClass("pop-show");
 });
 $(".popup").click(function(){
    $(".popup").removeClass("pop-active");
    $(".popup-container").fadeOut('fast').removeClass("pop-show");
 });
//popup
});
