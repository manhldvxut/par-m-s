/*===========================================================*/
/* MV読み込み後 */
/*===========================================================*/
let $img = $('.js-mv');
let $img_src = $img.attr('src');
$img.attr('src', '');
$img.on('load', function() {
  $('.header').addClass('show');
//  console.log('画像の読み込みが完了しました');
});
// パスを再設定
$img.attr('src', $img_src);

/*===========================================================*/
/* スライダー slick.js （SP表示のみスライドさせる） */
/*===========================================================*/
function checkBreakPoint() {
	w = $(window).width();
	if($('.js-slider').length) {
    if (w <= 768) {
      $('.js-slider').not('.slick-initialized').slick({
        initialSlide: 1,
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode:true,
        centerPadding:"7%",
        arrows: false,
        dots: true,
        dotsClass: 'pager-dot',
        swipe: true,
        autoplay: false,
        // autoplaySpeed: 1000,
      });
      // }).slick('slickPause');
      //     $('.slider-active').slick('slickPlay');
      //     $('.js-slider.is-active').slick('slickPlay');
    } else {
      // PC向け
      $('.js-slider.slick-initialized').slick('unslick');
    }
  }
}
// ウインドウがリサイズする度にチェック
$(window).resize(function(){
	checkBreakPoint();
});
// 初回チェック
checkBreakPoint();


/*===========================================================*/
/* スクロールアニメーション */
/*===========================================================*/
window.addEventListener("load", function () {
    var target = document.querySelectorAll(".js-scr-target");
    var targetArray = Array.prototype.slice.call(target);
    targetArray.forEach(function (tgt) {
      // documentのTopから対象までの距離を取得
      var rect = tgt.getBoundingClientRect();
      var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      var elmPos = rect.top + scrollTop + "px"; // rootmarginの設定で要素が画面表示領域より上にあるか下にあるかを取得

      var observer = new IntersectionObserver(callback, {
        root: null,
        rootMargin: elmPos + " 0px 0px 0px",
        threshold: 0
      });
      observer.observe(tgt);
    });

    function callback(entries) {
      entries.forEach(function (entry) {
        var target = entry.target;

        if (entry.isIntersecting && target.classList.contains("slick-initialized") && !target.classList.contains("is-active")) {
          target.classList.add("slider-active");
            // $('.slider-active').slick('slickPlay');
        }
        if (entry.isIntersecting && !target.classList.contains("is-active")) {
          target.classList.add("is-active");
        }
        if (!entry.isIntersecting && target.classList.contains("js-bg-trigger")) {
          target.classList.remove("is-active");
        }

    });
    }
});

new IntersectionObserver(function (entries) {
    if (entries[0].isIntersecting) {
      document.querySelector(".js-bg-trigger").classList.add("is-in");
      document.querySelector(".js-bg-trigger").classList.remove("is-out");
    } else {
      document.querySelector(".js-bg-trigger").classList.add("is-out");
      document.querySelector(".js-bg-trigger").classList.remove("is-in");
    }
  }, {
	rootMargin: "-10% 0px -20% 0px",
}).observe(document.querySelector(".js-nav"));

/*===========================================================*/
/* tile.js */
/*===========================================================*/
$(window).on('load resize', function() {
  tile();
});
function tile() {
  $('.shop-wrap').each(function() {
      $(this).find('.item-list-wrap .text-area .inner').tile(3);
  });
}
