$(function() {
    // history.scrollRestoration = "manual";
    // $(window).on('beforeunload', function(){
    //     $(window).scrollTop(0);
    // });

    setTimeout(function() {
        $('.content-banner .avarta').addClass('active');
    }, 100);
    setTimeout(function() {
        $('.icon-mv').addClass('active');
    }, 400);
    setTimeout(function() {
        $('.content-banner .icon-abs').addClass('active');
    }, 800);

    $('.btn-menu a').click(function() {
        $('.nav-menu, .menu-overlay').addClass('active');
    });
    $('.close-menu a, .menu-overlay').click(function() {
        $('.nav-menu, .menu-overlay').removeClass('active');
    });

    $('.link-nav a').click(function () {
        $('.link-nav a').removeClass('active');
        $(this).addClass('active')
        $('.nav-menu, .menu-overlay').removeClass('active');
    })

    // ページトップボタン
    $(window).scroll(function () {
         if ($(this).scrollTop() > 200) {
                $('.pft__pageTop').fadeIn();
        } else {
                $('.pft__pageTop').fadeOut();
        }

        var scroll = $(this).scrollTop();
        $('.fadein').each(function() {
            var elemPos = $(this).offset().top;
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight + 100) {
                $(this).addClass('animated');
            }
        });
    });


    // $('.js-top-imgslider').slick({
    //     infinite: true,
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     dots: true,
    //     prevArrow: '<button type="button" class="slick-custom-arrow slick-prev"><img src="/page/kitaro_parco_35th/assets/images/arrow-left.svg" class="" alt=""></button>',
    //     nextArrow: '<button type="button" class="slick-custom-arrow slick-next"><img src="/page/kitaro_parco_35th/assets/images/arrow-right.svg" class="" alt=""></button>'
    // });

    // ページスクロール
    $('a.scroll').click(function() {
        // スクロールの速度
        var speed = 400; // ミリ秒で記述
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $('body,html').animate({
            scrollTop: position
        }, speed, 'swing');
        return false;
    });


    // Lazyload実行
    imgLazyLoad();


    // moreボタン処理
    var taglist = $('.taglist');
    taglist.each(function() {
        var tagitem = $(this).find('.taglist__item');
        var tagitemMore = $(this).next('.js-tag-more');
        // console.log(tagitem.length);

        if(tagitem.length > 6) {
            tagitemMore.css('display','block')
            tagitemMore.on('click', function(e) {
                e.preventDefault();
                tagitem.css('display','block')
                tagitemMore.css('display','none')
                imgLazyLoad();
            });
            // console.log('hoge');
        } else {
            tagitemMore.css('display','none')
            // console.log('hoge2');
        }

    });

    // 値書き開閉
    $(window).on('load', function(){
        var salelistTitle = $('.salelist__title');
        var salelistTitleFlg;
        salelistTitle.on('click', function(e) {
            e.preventDefault();
            if($(this).is('.is-open')) {
                $(this).removeClass('is-open');
                $(this).next().slideUp();
            } else {
                $(this).addClass('is-open');
                $(this).next().slideDown();
            }
        });
    });


    // 値書き（値がない時消す）
    $('.salelist').each(function() {
      if ($(this).find('.salelist__shop').length) {
        $(this).css('display', 'block');
      } else {
        $(this).css('display', 'none');
      }
    });
});

// Lazyload処理
function imgLazyLoad(){
    $('img.lazy').lazyload({
        effect : "fadeIn",
        effect_speed: 300
    });
}

