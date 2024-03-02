/*  stack
------------------------------------------------------------------------------------------------------------------------*/
$(function() {
    modal();
    tabSwitch();

});
/*  shoplist
------------------------------------------------------------------------------------------------------------------------*/
// JSON読み込み
axios
    .get(list)
    .then(function(res) {
        shop(res.data);
    })
    .catch(function(err) {
        console.log(err);
    })

function shop(shopList) {
    var app = new Vue({
        el: '#shoplist',
        data: {
            list: shopList, //type01で使用
            limitedItem: [],
            present: [],
            anniversaryEvent: []
        },
        mounted: function() {
            for (var i = 0; i < shopList.length; i++) {
                if (shopList[i].category == "limitedItem") {
                    this.limitedItem.push(shopList[i]);
                } else if (shopList[i].category == "present") {
                    this.present.push(shopList[i]);
                } else {
                    this.anniversaryEvent.push(shopList[i]);
                }
            }
            return;
        },
        updated () {
            sliderPresent();
            sliderEvent();
        },
        methods: {
            // <br>タグ対応
            brTxt: function(txt) {
                return txt.replace(/\r?\n/g, ' <br>');
            }
        }
    })
}
/*  modal モーダル
------------------------------------------------------------------------------------------------------------------------*/
function modal() {
    const modal = '.js-modal', //モーダル
        modalOpen = '.js-modalopen', //モーダルを開く
        modalClose = '.js-modalclose'; //モーダルを閉じる
    $(document).on('click', modalOpen, function() {
        $(document).find(modal).hide(); //モーダルリセット
        let target = $(this).attr('data-modal');
        $('.' + target).fadeIn(400);
        imgSlider('.' + target); //モーダル内スライダー発火
        $('body').css('overflow', 'hidden'); //スクロール止め（※iphoneでは効かない）
    });
    $(document).on('click', modalClose, function() {
        $('body').removeAttr('style');
        $(document).find('.slick-initialized').slick('unslick'); //モーダル内スライダーストップ
        $(document).find(modal).hide();
    });
};
/*  imgSlider スライダー（主にモーダル内の画像用）
------------------------------------------------------------------------------------------------------------------------*/
function imgSlider(target) {
    const slider = $(document).find(target + ' .js-imgslider');
    let sliderCont = slider.children('*').length;
    // スライダーの枚数が1より多い場合に発火
    if (sliderCont > 1) {
        slider.slick({
            slidesToShow: 1,
            speed: 500,
            dots: true,
            infinite: true,
            prevArrow: '<div class="slick-arrow prev"><button class="slick-prev opacity-link"></button></div>',
            nextArrow: '<div class="slick-arrow next"><button class="slick-next opacity-link"></button></div>'
        });
    }
}
/*  tabSwitch //タブ切り替え（type01で使用）
------------------------------------------------------------------------------------------------------------------------*/
function tabSwitch() {
    const btn = $('.js-tabbtn'), //タブボタン
        tabItem = $(document).find('.js-tabarea > *'); //タブ切り替えエリア
    btn.on('click', function() {
        let target = $(this).attr('data-target');
        $('.localnav-item').removeClass("current");
        $(this).parent('.localnav-item').addClass("current");
        $(document).find('.list-block').hide();
        $(document).find(target).fadeIn();
    });
}

/*  slider
------------------------------------------------------------------------------------------------------------------------*/

function sliderPresent() {
    new Swiper('.swiper-present', {
        loop: true,
        centeredSlides: true,
        navigation: {
            nextEl: '.next-present',
            prevEl: '.prev-present',
        },
        pagination: {
            el: '.pagination-present',
            clickable: true
        },
        slidesPerView: 3,
        paginationClickable: true,
        spaceBetween: 20,
        breakpoints: {
            1920: {
                slidesPerView: 1.25,
                spaceBetween: 120
            },
            1200: {
                slidesPerView: 1.25,
                spaceBetween: 40
            },
            1023: {
                slidesPerView: 1.5,
                spaceBetween: 40
            },
            767: {
                slidesPerView: 1.45,
                spaceBetween: 20
            }
        }
    });
}

function sliderEvent() {
    new Swiper('.swiper-event', {
        loop: true,
        navigation: {
            nextEl: '.next-event',
            prevEl: '.prev-event',
        },
        pagination: {
            el: '.pagination-event',
            clickable: true
        },
        slidesPerView: 3.135,
        paginationClickable: true,
        spaceBetween: 60,

        breakpoints: {
            1920: {
                slidesPerView: 3.135,
                spaceBetween: 60,
            },
            1200: {
                slidesPerView: 3,
                spaceBetween: 40
            },
            1023: {
                slidesPerView: 1.5,
                spaceBetween: 40,
                centeredSlides: true,
            },
            767: {
                slidesPerView: 1.45,
                spaceBetween: 20,
                centeredSlides: true,
            }
        }
    });
}