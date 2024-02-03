/*  stack
------------------------------------------------------------------------------------------------------------------------*/
$(function () {
  modal();
  modalSlider();
  modalImgSlider();
});



/*  modal モーダル
------------------------------------------------------------------------------------------------------------------------*/
function modal() {

  const modal = '.js-modal', //モーダル
    modalOpen = '.js-modalopen', //モーダルを開く
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
    $(modal).find('.slick-initialized').slick('unslick'); //モーダル内スライダーストップ
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

$('.visual__slick').slick({
  autoplay: false,
  autoplaySpeed: 3000,
  speed: 800,
  slidesToShow: 1,
  slidesToScroll: 1,
  centerMode: true,
  focusOnSelect: true,
  centerPadding: '0',
  arrows: true,
  dots: false,
  variableWidth: true
});