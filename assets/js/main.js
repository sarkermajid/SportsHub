$(function() {
    // Owl Carousel
    var owl = $("#banner-owl-demo");
    owl.owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000,
        smartSpeed: 1000,
        animateOut: "slideOutDown",
        animateIn: "slideInDown",
    });
});
$(document).ready(function() {
    // $(".owl-carousel").owlCarousel();
    $("#owl-demo").owlCarousel({

        autoPlay: 2000, //Set AutoPlay to 3 seconds
        // //Autoplay
        // autoPlay : true,
        // goToFirst : true,
        // goToFirstSpeed : 1000,

        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                // nav:true
            },
            600:{
                items:2,
                nav:false
            },
            1050:{
                items:3,
                // nav:true,
                loop:false
            }
        }

    });

});