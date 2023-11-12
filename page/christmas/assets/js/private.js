$(document).ready(function(){
    history.scrollRestoration = "manual";
    $(window).on('beforeunload', function(){
        $(window).scrollTop(0);
    });

    if($(window).innerWidth() <= 767){
        $(window).bind('scroll', function() {
            var navHeight = $('.box-banner-mobile').height() - 100;
            if ($(window).scrollTop() > navHeight) {
                $('.menu-fixed, .content-header').addClass('active');
            }
            else {
                $('.menu-fixed, .content-header').removeClass('active');
            }
        });
    }

    $('.menu-fixed a').click(function(e){
        e.preventDefault();
        var target = $($(this).attr('href'));
        if(target.length){
            var scrollTo = target.offset().top - 45;
            $('body, html').animate({scrollTop: scrollTo+'px'}, 800);
        }
        $('.menu-fixed a').removeClass("active");
        $(this).addClass("active");
    });

    new WOW({
        offset: 160,
    }).init();

    setTimeout(function() {
        $('.bg-cover, .bg-orang').addClass('active');
    }, 600);
    setTimeout(function() {
        $('.icon-abs.icon-1, .logo-cover').addClass('active');
    }, 1800);
    setTimeout(function() {
        $('.icon-abs.icon-2, .cover-1').addClass('active');
    }, 2000);
    setTimeout(function() {
        $('.icon-abs.icon-4, .cover-2').addClass('active');
    }, 2600);
    setTimeout(function() {
        $('.icon-abs.icon-3, .cover-3').addClass('active');
    }, 3200);
    if($(window).innerWidth() >= 768){
        setTimeout(function() {
            $('.menu-fixed, .content-header').addClass('active');
        }, 4000);
    }
    setTimeout(function() {
        $('.top-circle, body, .box-riveting').addClass('active');
    }, 4200);

    $('.slide-avr').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        nextArrow: '<a href="javascript:void(0)" class="arr-right"><img src="assets/images/arrow-right.png" class="img-fluid" alt=""></a>',
        prevArrow: '<a href="javascript:void(0)" class="arr-left"><img src="assets/images/arrow-left.png" class="img-fluid" alt=""></a>',
    });

// var data = [
//     {speed:12, index: 2},
// ];
    $('.srv-parlx').each(function(i,o){
        $(this).parallax({speed:15, mobile: true,});
    });
    $('.rv-pc').each(function(i,o){
        $(this).parallax({speed:20, index: 2, mobile: true});
    });
    $('.rv-mb').each(function(i,o){
        $(this).parallax({speed:15, index: 2, mobile: true});
    });
})
