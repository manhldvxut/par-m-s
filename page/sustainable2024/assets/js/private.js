$(document).ready(function(){

	new WOW().init();

	modal();
	modalSlider();

    // ページトップボタン
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
                $('.back-top').fadeIn();
        } else {
                $('.back-top').fadeOut();
        }

        if ($(this).scrollTop() > 400) {
                $('.nav').fadeIn();
        } else {
                $('.nav').fadeOut();
        }

        $('section').each(function() {
        	let fixHeightScroll = 100;
		    let elemPos = $(this).offset().top;
		    let scroll = $(window).scrollTop();
		    let windowHeight = $(window).height();
		    if (scroll > elemPos - windowHeight + fixHeightScroll) {
		      $(this).addClass('aminated');
		    }
		});
    });

    // ページスクロール
    $('.back-top a, .nav a, .nav-mb ul li a').click(function() {
        // スクロールの速度
        let speed = 400; // ミリ秒で記述
        let href = $(this).attr("href");
        let target = $(href == "#" || href == "" ? 'html' : href);
        let position = target.offset().top - 70;

        $('.nav-mb').css({
        	'display': 'none'
        })
        $('.nav-mb').removeClass('wow fadeMenu animated active');
        $('body,html').animate({
            scrollTop: position
        }, speed, 'swing');
        return false;
    });

    $('.nav a, .nav-mb ul li a').click(function() {
    	$($('*[id]')).removeClass('wow fadeMenu animated active');
        let targetID = $(this).attr("href").replace("#", "");
        $('#' + targetID).addClass('wow fadeMenu animated active');
        

        return false;
    });

    $('.btn-bar-menu a').click(function() {
    	$('.nav-mb').addClass('wow fadeMenu animated active');
    	$('.nav-mb').css({
        	'display': 'flex'
        })
    });

    $('.close-menu a').click(function() {
    	$('.nav-mb').addClass('wow hideMenu animated').removeClass('fadeMenu');
		setTimeout(function() {
			$('.nav-mb').removeClass('wow fadeMenu hideMenu animated active');
		}, 900);
    });

    
	setTimeout(() => {
		$('.btn-bar-menu').addClass('active');
	}, 1000);
	// ランダム
	setInterval(function () {
		$('.block-section').each(function() {
			let checkActive = $(this).find('.active');
			if(checkActive.length == 0) {
				let items = $(this).find('.list-column .list-column-last-item').not(".not-big");
		    	let appendItem = $(this).find('.list-column-first');

		    	let randomIndex = Math.floor(Math.random() * items.length);
			    items.eq(randomIndex).addClass("active");
			    let clonedHTML = items.eq(randomIndex).clone().html();

			    $(appendItem).html(clonedHTML);
			    $('.list-column').css({
			    	'opacity' : 1
			    })
			}
	    })
	}, 1000);

    
    
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
	    $('body').css('overflow', 'hidden'); //スクロール止め（※iphoneでは効かない）
	});

	$(document).on('click', modalClose, function () {
		$('body').removeAttr('style');
		$(document).find(modal).hide();
	});
};

/*  js-modal-Slider スライダー（モーダルで複数アイテムを表示する際に使用）
------------------------------------------------------------------------------------------------------------------------*/
function modalSlider(target) {
	const slider = $(document).find(target + ' .js-modal-slider');
	let sliderCont = slider.children('*').length;


	// スライダーの枚数が1より多い場合に発火
	if (sliderCont > 1) {
	    slider.slick({
		    slidesToShow: 1,
		    speed: 500,
		    dots: false,
		    arrows: true,
		    infinite: true,
		    prevArrow: '<div class="slick-arrow prev"><button class="slick-prev"><img src="assets/images/prev.svg" alt="">PREV</button></div>',
		    nextArrow: '<div class="slick-arrow next"><button class="slick-next">NEXT<img src="assets/images/next.svg" alt=""></button></div>'
	    });
	}
}
