$(function() {

    // ページトップボタン
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
                $('.pft__pageTop').fadeIn();
        } else {
                $('.pft__pageTop').fadeOut();
        }
    });

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

    // modal
    $('.clc-modal').click(function(e) {
        e.preventDefault();
        $('.modal-artan, body').addClass('open_modal');
    });

    $('.close a').click(function() {
        $('.modal-artan, body').removeClass('open_modal');
    });

    $( '.box-event-tab a' ).on( 'click', function(e){
      var href = $(this).attr( 'href' );
      $( 'html, body' ).animate({
            scrollTop: $( href ).offset().top - 109
      }, '800' );
      e.preventDefault();
    });

    $(window).scroll(function() {
       var headerH = $('.header').outerHeight(true);
       var banner = $('.box-sapo').outerHeight(true);
       var scrollTop = $('.box-event-tab').outerHeight(true);
       // console.log(headerH); 
       var scrollVal = $(this).scrollTop();
        if ( scrollVal > (headerH + banner + scrollTop - 80) ) {
            $('.box-event-tab').addClass('fix_menu');
        } else {
            $('.box-event-tab').removeClass('fix_menu');
        }

        var windscroll = $(window).scrollTop(); 
        // console.log(windscroll) 
    });


    jQuery(function($) {
        var doAnimations = function() {
            var offset = $(window).scrollTop() + $(window).height(),
                $animatables = $('.icon-day');
            if ($animatables.length == 0) {
                $(window).off('scroll', doAnimations);
            }

            $animatables.each(function(i) {
                var $animatable = $(this);
                if (($animatable.offset().top + $animatable.height() + 60) < offset) {
                    $animatable.addClass('bounceIn');
                } else {
                    $animatable.removeClass('bounceIn');
                }
            });
        };
        $(window).on('scroll', doAnimations);
        $(window).trigger('scroll'); 
    }); 
});


// Lazyload処理
function imgLazyLoad(){
    $('img.lazy').lazyload({
        effect : "fadeIn",
        effect_speed: 300
    });
}