$(document).ready(function() {
    $('.owl-partners').owlCarousel({
        loop: true,
        margin: 15,
        responsiveClass: true,
        nav: true,
        autoplay: true,
        dots: false,
        navText: ["<div class='nav-btn prev-slide'></div>", "<div class='nav-btn next-slide'></div>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    })


    var $target = $('.anime'),
        animationClass = 'anime-start',
        offset = $(window).height() * 3 / 4;

    function animeScroll() {
        var documentTop = $(document).scrollTop()
        $target.each(function() {
            var itemTop = $(this).offset().top
            if (documentTop > itemTop - offset) {
                $(this).addClass(animationClass)
            } else {
                $(this).removeClass(animationClass)
            }
        })
    }
    animeScroll()
    $(document).scroll(function() {
        animeScroll()
    })

    var $targetD = $('.anime-d'),
        animationClassD = 'anime-start',
        offsetD = $(window).height() * 3 / 4;

    function animeScrollD() {
        var documentTopD = $(document).scrollTop()
        $targetD.each(function() {
            var itemTopD = $(this).offset().top
            if (documentTopD > itemTopD - offsetD) {
                $(this).addClass(animationClassD)
            } else {
                $(this).removeClass(animationClassD)
            }
        })
    }
    animeScrollD()
    $(document).scroll(function() {
        animeScrollD()
    })



})