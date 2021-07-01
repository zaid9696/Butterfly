$(document).ready(function(){

    $(".owl-carousel").owlCarousel({
       
        autoplay:false,
        autoplayTimeout:6500,
        autoplayHoverPause:true,
        loop:true,
        margin: 20,
        items:4,
        nav:true,
		navText: [`<img class="left" src='${butterflyUri.theme_uri}/img/left.svg'>` , `<img class="right" src='${butterflyUri.theme_uri}/img/right.svg'>`],
        responsiveClass:true,
        responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:4,
            nav:true,
            loop:true
        }
    }
    });

  });
