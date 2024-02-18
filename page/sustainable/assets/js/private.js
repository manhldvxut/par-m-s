$(document).ready(function(){

	modal();

    // ページトップボタン
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
                $('.back-top').fadeIn();
        } else {
                $('.back-top').fadeOut();
        }
    });

    // ページスクロール
    $('.back-top a').click(function() {
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

    // ランダム
    let items = $(".event-body .list-column-last-item").not(".not-big");
    let randomIndex = Math.floor(Math.random() * items.length);
    items.eq(randomIndex).addClass("active");
    let clonedHTML = items.eq(randomIndex).clone().html();
    console.log(clonedHTML)
})

    /*  modal モーダル
------------------------------------------------------------------------------------------------------------------------*/
function modal() {
	const modal = '.js-modal', //モーダル
	    modalOpen = '.openModal a', //モーダルを開く
	    modalClose = '.js-modalclose';  //モーダルを閉じる

	$(document).on('click', modalOpen, function (e) {
		e.preventDefault();
	    $(document).find(modal).hide(); //モーダルリセット

	    let target = $(this).attr('data-modal');
	    $('.' + target).fadeIn(400);
	    modalSlider('.' + target); //モーダル内スライダー発火
	    console.log("モーダル内スライダー発火");
	    modalImgSlider(); //モーダル内スライダー発火
	    console.log("モーダル内画像用スライダー発火");
	    $('body').css('overflow', 'hidden'); //スクロール止め（※iphoneでは効かない）
	});

	$(document).on('click', modalClose, function () {
		$('body').removeAttr('style');
		$(document).find(modal).hide();
	});
};
