$(function() {

      (function(d) {
        var config = {
          kitId: ‘gvh5cpv’,
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,””)+” wf-inactive”;},config.scriptTimeout),tk=d.createElement(“script”),f=false,s=d.getElementsByTagName(“script”)[0],a;h.className+=“ wf-loading”;tk.src=‘https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!=“complete”&&a!=“loaded”)return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);


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
});


// Lazyload処理
function imgLazyLoad(){
    $('img.lazy').lazyload({
        effect : "fadeIn",
        effect_speed: 300
    });
}