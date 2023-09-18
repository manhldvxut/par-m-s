// font
(function(d) {
    var config = {
      kitId: 'gvh5cpv',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,'')+'wf-inactive';},config.scriptTimeout),tk=d.createElement('script'),f=false,s=d.getElementsByTagName('script')[0],a;h.className+='wf-loading';tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!='complete'&&a!='loaded')return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
})(document);


$(function() {
    showItem(); // show Item Creators

    setTimeout(function() { 
       $('.avr-cover').addClass('hide_cover'); 
    }, 400);

    setTimeout(function() { 
       $('.wrapper, .box-cover').addClass('hide_cover'); 
    }, 1600);

    $('.slide-banner').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 1200,
        slidesToShow: 1,
        dots: false,
        arrows: false,
        fade: true,
        cssEase: 'linear'
    });

    $( ".action-cal" ).on( "click", function() {
        $('.month11, .month10').slideToggle();
    });

    $(document).on('click', '.close-modal', function () {
        $('body, .modal-creator').removeClass('show-modal');
    });
 
    $(document).on('click', '.close-menu a', function () {
        $('.content-menu').removeClass('active');
        $('body').removeClass('show-modal');
    });

    $( ".btn-bar a" ).on( "click", function() {
        $('.content-menu').addClass('active');
        $('body').addClass('show-modal');
    });

    $('.content-menu a').click(function() {
        $('.content-menu').removeClass('active');
        $('body').removeClass('show-modal')
    })

    // load data.json
    var dataArr = [];
    let showCurrenNumber = 16;
    let rowAppend = $('.list-creator .row');

    //view more
    $('.view-more a').click(function(e) {
        let currentItemElm = $('.list-creator .col-md-3').length;
        if(currentItemElm.length == 0) {
            console.log('アイテムがない')
        } else {
            showCurrenNumber = currentItemElm + 16;
            $('.list-creator .row').fadeOut();
            let subArray = dataArr.slice(currentItemElm, currentItemElm + 16);
            for (var i = 0; i < subArray.length; i++) {
                let subItem = subArray[i];
                let subHtml = `
                    <div class="col-md-3">
                        <div class="item-creator">
                            <a href="javascript:void(0)" class="clc-modal" data-tab="modal-${subItem.id}"></a>
                            <div class="avarta">
                                <img src="assets/images/${subItem.imageName}" class="img-fluid w-100" alt="${subItem.creatorName}">
                                <span>View</span>
                            </div>
                            <div class="info">${subItem.creatorName}</div>
                        </div>
                    </div>
                `;
                rowAppend.append(subHtml);
                $('.list-creator .row').fadeIn();
            }

            if(showCurrenNumber >= dataArr.length) {
                $('.view-more').remove();
            }
        }
    })

    function showItem () {
        $.ajax({
            url: 'assets/data/data.json',
            dataType: 'json',
            cache: false,
            success: function (data) {
                dataArr = [];
                dataArr = data;
                processData(dataArr);
            },
            complete: function () {
                // click show modal
                $(document).on('click', '.clc-modal', function () {
                    let currentId = parseInt($(this).attr('data-tab').match(/\d+/));
                    let itemModalShow = dataArr[currentId - 1];

                    let creatModal = $('.modal-creator');
                    $('.modal').remove(); // reset modal
                    
                    let modalHtml = `
                        <div class="modal">
                          <div class="close-modal">
                            <a href="javascript:void(0)">
                              <svg xmlns="http://www.w3.org/2000/svg" width="33.836" height="34.344" viewBox="0 0 33.836 34.344">
                                <g id="close" transform="translate(-1205.867 -4041.828)">
                                  <path id="シェイプ_4" data-name="シェイプ 4" d="M1222.785,4059l-16.205,16.47,16.205-16.47-16.205-16.47,16.205,16.47,16.205-16.47L1222.785,4059l16.205,16.47Z" fill="#0d0b0b" stroke="#0d0b0b" stroke-width="2"></path>
                                </g>
                              </svg>
                            </a>
                          </div>
                          <div class="content-modal">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="avarta"><img src="assets/images/${itemModalShow.imageName}" class="img-fluid w-100" alt="${itemModalShow.creatorName}"></div>
                              </div>
                              <div class="col-md-6">
                                <div class="info-profile">
                                  <div class="top-profile">
                                    <div class="avarta-user"><img src="assets/images/${itemModalShow.IconImage}" class="img-fluid w-100" alt="${itemModalShow.creatorName}"></div>
                                    <div class="info-user">
                                      <div class="name">${itemModalShow.creatorName}</div>
                                      <div class="link-profile">
                                        <a href="${itemModalShow.creatorLink}" target="_blank">
                                          <span>Profile</span>
                                          <span class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
                                              <g id="Icon_feather-external-link" data-name="Icon feather-external-link" transform="translate(-8.25 -10.75)">
                                                <path id="Path_3756" data-name="Path 3756" d="M18,15.3v5.4a1.8,1.8,0,0,1-1.8,1.8H6.3a1.8,1.8,0,0,1-1.8-1.8V10.8A1.8,1.8,0,0,1,6.3,9h5.4" transform="translate(4.5 4.5)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                                <path id="Path_3757" data-name="Path 3757" d="M22.5,4.5h5.2V9.7" transform="translate(-3.204 7)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                                <path id="Path_3758" data-name="Path 3758" d="M15,12l7.5-7.5" transform="translate(1.546 7.454)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                              </g>
                                            </svg>
                                          </span>
                                          <span class="icon-svg-bott">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="170.217" height="12.159" viewBox="0 0 170.217 12.159">
                                              <path id="Path_3532" data-name="Path 3532" d="M185.749,1776.333h169l-11.433-11.3" transform="translate(-185.749 -1764.673)" fill="none" stroke="#0d0b0b" stroke-width="1"></path>
                                            </svg>
                                          </span>
                                        </a>
                                      </div>
                                    </div> 
                                  </div>
                                  <div class="map text-center">
                                    <div class="avr"><img src="assets/images/banner/map.jpg" class="img-fluid" alt="Map"></div>
                                    <a href="">MAP画像待ち</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    `

                    creatModal.append(modalHtml);
                    $("#modalShow").addClass('show-modal');
                    $('body').addClass('show-modal');
                });
            }
        });
    }

    function processData(data) {
        if (data.length === 0) {
            console.log('データ存在していない');
        } else {
            let currentShow = data.slice(0, showCurrenNumber);
            $.each(currentShow, function (index, item) {
                const htmlShow = `
                    <div class="col-md-3">
                        <div class="item-creator">
                            <a href="javascript:void(0)" class="clc-modal" data-tab="modal-${index + 1}"></a>
                            <div class="avarta">
                                <img src="assets/images/${item.imageName}" class="img-fluid w-100" alt="${item.creatorName}">
                                <span>View</span>
                            </div>
                            <div class="info">${item.creatorName}</div>
                        </div>
                    </div>
                `;

                rowAppend.append(htmlShow);
                $('.list-creator .row').fadeIn();
            });
        }
    }
    jQuery(function($) {
        var doAnimations = function() {
            var offset = $(window).scrollTop() + $(window).height(),
                $animatables = $('.scroll-anime');
            if ($animatables.length == 0) {
                $(window).off('scroll', doAnimations);
            }

            $animatables.each(function(i) {
                var $animatable = $(this);
                if (($animatable.offset().top + $animatable.height() + 60) < offset) {
                    $animatable.addClass('animated');
                }
            });
        };
        $(window).on('scroll', doAnimations);
        $(window).trigger('scroll'); 
    }); 

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