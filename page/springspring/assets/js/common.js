/*  stack
------------------------------------------------------------------------------------------------------------------------*/
$(function () {
  modal();
  modalSlider();
  modalImgSlider();
  scrollAddClass();

  // settimeout

  if($('.main-mv[animation="true"]').length) {
    setTimeout(function () {
      $('.main-mv').addClass('animation-active')
    }, 1000);

    setTimeout(function () {
      $('.main-mv__main').addClass('animation-active')
    }, 2000);
  }

  // hover active
  $('.shop-event__item').each(function() {
    let shopItemEventBox = $(this).find('.shop-event__item-box');
    let buttonHover = $(this).find('.shop-event__item-btn')
    if(shopItemEventBox) {
      $(buttonHover).hover(
        function() {
            $(shopItemEventBox).addClass('active');
        }, function() {
            if(!$(shopItemEventBox).hasClass('clicked') ){
                $(shopItemEventBox ).removeClass('active');
            }
        }
    );
    }
  })
  
});


$(window).on('scroll', function () {
  scrollAddClass();
})

function scrollAddClass(){
  let fixHeightScroll = 100;
  let mv_height = $(".main-mv").height();
  var scrollHeight = $(window).scrollTop();
  if(scrollHeight >= mv_height) {
    $('.header').addClass('active');
  } else {
    $('.header').removeClass('active');
  }

  $('.main-contents section, .animation-js').each(function() {
    let elemPos = $(this).offset().top;
    let scroll = $(window).scrollTop();
    let windowHeight = $(window).height();
    if (scroll > elemPos - windowHeight + fixHeightScroll) {
      $(this).attr('animation', 'true');
    }
  });
}



/*  modal モーダル
------------------------------------------------------------------------------------------------------------------------*/
function modal() {

  const modal = '.js-modal', //モーダル
    modalOpen = '.shop-event__item-btn button', //モーダルを開く
    modalClose = '.js-modalclose';  //モーダルを閉じる

  $(document).on('click', modalOpen, function () {
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
      dots: true,
      arrows: true,
      infinite: true,
      prevArrow: '<div class="slick-arrow prev"><button class="slick-prev opacity-link"></button></div>',
      nextArrow: '<div class="slick-arrow next"><button class="slick-next opacity-link"></button></div>'
    });
  }
}


function modalImgSlider() {
  const slider = $(document).find('.new-open__item-slick-item');
  console.log(slider);
  let sliderCont = slider.children('*').length;

  // スライダーの枚数が1より多い場合に発火
  if (sliderCont > 1) {
    slider.slick({
      slidesToShow: 1,
      speed: 500,
      autoplay: true,
      dots: true,
      arrows: true,
      infinite: true,
      prevArrow: '<div class="slick-arrow prev"><button class="slick-prev opacity-link"></button></div>',
      nextArrow: '<div class="slick-arrow next"><button class="slick-next opacity-link"></button></div>',
      // appendArrows: $('.modal-cont-slider'),
    });
  }
}

// $('.visual__slick').slick({
//   autoplay: true,
//   autoplaySpeed: 3000,
//   speed: 800,
//   slidesToShow: 2,
//   slidesToScroll: 1,
//   focusOnSelect: true,
//   centerPadding: '0',
//   arrows: true,
//   dots: false,
//   infinite: true,
//   variableWidth: true,
//   centerMode: true,
// });

var mySwiper = new Swiper(".swiper-visual", {
  spaceBetween: 1,
  slidesPerView: 1.5,
  centeredSlides: true,
  roundLengths: true,
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
});

$('.box-stick-menu a').click(function(e){
  e.preventDefault();
  var target = $($(this).attr('href'));
  if(target.length){
    var scrollTo = target.offset().top;
    $('body, html').animate({scrollTop: scrollTo+'px'}, 800);
  }
});

$('.src-paralax').each(function(i,o){
  $(this).parallax({speed:14});
});