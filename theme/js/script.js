$(document).ready(function () {

    /* Rmenu */

    var vrRMenu = $('.vr-rmenu'),
        vrRMenuWr = $('.vr-rmenu-wr'),
        vrRMenuToggle = $('.vr-rmenu-toggle');

    vrRMenuToggle.on('click', function (e) {
        e.preventDefault();
        if (vrRMenuWr.hasClass('vr-hide')) {
            vrRMenuWr.addClass('vr-show').removeClass('vr-hide');
            $('html, body').css({
                'overflow': 'hidden'
            });
        }
    });

    $('.vr-rmenu-close').on('click', vrRmenuClose);

    function vrRmenuClose() {
        vrRMenuWr.addClass('vr-hide').removeClass('vr-show');
        $('html, body').css({
            'overflow': ''
        });
    }



    $('.promo-slider').owlCarousel({
        loop: true,
        items: 1,
        animateOut: 'fadeOut',
        nav: true,
        navText: ["", ""],
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true
    })

    $('.open-img').magnificPopup({
        type: 'image',

    });

    var vrRMenu3 = $('.vr-rmenu3'),
        vrRMenuWr3 = $('.vr-rmenu3-wr'),
        vrRMenuToggle3 = $('.vr-rmenu3-toggle');

    vrRMenuToggle3.on('click', function (e) {
        e.preventDefault();
        if (vrRMenuWr3.hasClass('vr-hide')) {
            vrRMenuWr3.addClass('vr-show').removeClass('vr-hide');
            $('html, body').css({
                'overflow': 'hidden'
            });
        }
    });

    $('.vr-rmenu3-close').on('click', vrRmenuClose3);

    function vrRmenuClose3() {
        vrRMenuWr3.addClass('vr-hide').removeClass('vr-show');
        $('html, body').css({
            'overflow': ''
        });
    }

    $('.vr-rmenu-list .parent > span').click(function () {
        $(this).parent().find('ul').slideToggle();
    });

    $('.btn-nav').click(function () {
        $(this).parent().find('ul').slideToggle();
        $(this).parent().toggleClass('active');
    });


    /* Tabs When */

    $('.tabs-btns .tabs-btns-item').click(function () {
        $('.tabs-btns .tabs-btns-item').removeClass('active');
        $(this).addClass('active');
        $(this).parents('.tabs-wrapper').find('.tabs-content').removeClass('active');
        $(this).parents('.tabs-wrapper').find('.tabs-content').eq($(this).index()).addClass('active');
    });

    $('.objects-slider-bg').owlCarousel({
        loop: false,
        items: 1,
        nav: true,
        dots: false,
        lazyLoad: true,
        navText: ["", ""],
    })


    $('.objects-slider-min').owlCarousel({
        loop: false,
        margin: 6,
        nav: false,
        dots: false,
        stagePadding: 20,
        lazyLoad: true,
        responsive: {
            0: {
                items: 4
            },
            600: {
                items: 5
            },
            1000: {
                items: 6
            }
        }
    })

    $('.objects-slider-bg').on('changed.owl.carousel', function (e) {
        $(this).parents('.objects-slider-wr').find('.objects-slider-min').trigger('to.owl.carousel', e.item.index - 1)
        $(this).parents('.objects-slider-wr').find('.objects-slider-min .owl-item').removeClass('current').eq(e.item.index).addClass('current');
    });

    $('.objects-slider-min').find('.owl-item').on('click', function () {
        $(this).parents('.objects-slider-wr').find('.objects-slider-bg').trigger('to.owl.carousel', $(this).index());
    });

    $('.objects-slider-min').each(function () {
        if ($(this).find('.owl-item').length < 6) {
            $(this).find('.owl-stage-outer').addClass('owl-stageCenter')
        }
    })




});
