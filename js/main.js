$(function() {

    'use strict';
       
    // Scroll lent
    $("a").on("click", function(event){

        if (this.hash !== "") {
            event.preventDefault();

            var hash = this.hash;

            $("html, body").animate({

                scrollTop: $(hash).offset().top - 50

            }, 850);

        }

    });

    // Masquer la barre de navigation sur mobile après un clic
    $('.navbar-nav a').on('click', function(){
        $('.navbar-collapse').collapse('hide');
    });

    // Carrousel CV
    $('.owl-carousel').owlCarousel({
        items: 1,
        margin: 10
    });

    // Collapse montrée sur le CV
    $('.collapse-show').collapse();

    // CV filterizr
    $('.filtr-container').imagesLoaded( function(){
        var filterizr = $('.filtr-container').filterizr();
    });

    // Filtre CV
    $('.cv-filter-menu li').on('click', function(){
        $('.cv-filter-menu li').removeClass('active');
        $(this).addClass('active');
    });

    // Navbar on scroll
    $(window).on("scroll", function(){

        var vScroll = $(this).scrollTop();

        if( vScroll > 100){
            $(".navbar").addClass("fix");
        }
        else {
            $(".navbar").removeClass("fix");
        }

    });

    // Scrollspy
    $('body').scrollspy({ target: '#navbarTogglerDemo', offset: 90 });

    // Scrollbar
    $(document).ready(function () {
        if (!$.browser.webkit) {
            $('.wrapper').html('<p>Sorry! Non webkit users. :(</p>');
        }
    });

});