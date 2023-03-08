<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/assets/inc/global-config.php';
//下記のパス「demo」を変更
include_once $_SERVER['DOCUMENT_ROOT'].'/page/023spring_newandrenewal/assets/inc/config.php';

$nowURL = $_SERVER['HTTP_HOST'];
$pageURL = STORE_NAME.'.parco.jp';
$noCacheURL = STORE_NAME.'-parco.sc-concierge.jp';
$devURL = 'dev-'.STORE_NAME.'-parco.sc-concierge.jp';

//ドメインの判定
if ($nowURL === $pageURL || $nowURL === $noCacheURL || $devURL === $pageURL) {
  $productionFlag = true; //本番とキャッシュなしサーバとdev
} else {
  $productionFlag = false; //上記以外
}

if ($productionFlag === true) {
  //basic include
  include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/page_include.php';
}

//ページ用の変数
$pege_title = '2023 SPRING NEW＆RENWAL名古屋PARCO';
$pege_description = '2023 SPRING NEW＆RENWAL注目のニューショップやおすすめアイテムをご紹介しています。';
$pege_keywords = '名古屋パルコ,名古屋,NEWSHOP,EVENT,イベント,';
$page_shareurl = 'https://'.STORE_NAME.'.parco.jp/page/023spring_newandrenewal/'; //必ずディレクトリ名を変更する

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/page/assets/inc/meta.php';?>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/inc/tagmanager1.php';?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Krona+One&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/page/023spring_newandrenewal/assets/css/style_02.css">
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/assets/inc/css.php';?>
</head>

<body class="<?php echo STORE_NAME; ?> page-tag newrenew" id="top">
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/inc/tagmanager2.php';?>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/page/assets/inc/svgs.php';?>

<div class="wrapper">

    <?php
    /**
     * Header
     */
    ?>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/' . DIRNAME . '/assets/inc/header.php'; ?>


    <?php
    /**
     * Main contents
     */
    ?>
        <main class="main-contents">
          <?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/assets/inc/ribo.php'; ?>

          <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/' . DIRNAME . '/assets/inc/bnr.php'; ?>

<?php /* ==========================================================
Local navigation
============================================================== */ ?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/assets/inc/localnav.php'; ?>

<div class="newrenew-block" id="shoplist" v-cloak>


  <div class="list-block" id="all-list-block">
    <ul class="item-list-pickup js-tabarea" v-cloak>
      <template v-for="(shopList, index) in pickupList">
        <li :class="'item ' + shopList.category" v-bind:key="index">
          <div class="front-wrap">
            <div class="catch catchfirst" v-if="shopList.first != ''">
              <div class="sido-ico">
                <span>{{shopList.first}}</span>
              </div>
            </div>

            <div class="front-cont">
              <div class="img-wrap">
                <img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image01img + '.jpg' " :alt="shopList.name">
                <!-- /.img-wrap -->
              </div>
              <div class="detail">
                <div class="side-wrap">
                  <p class="date"><template v-if="shopList.date != ''">{{shopList.date}}</template><template v-if="shopList.weeks != ''"><b>{{shopList.weeks}}</b></template></p>
                  <p class="new-renew">{{shopList.new_renew}}</p>
                </div>
                <div class="logo" v-if="shopList.logoimg != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/logo/' + shopList.logoimg + '.jpg' " :alt="shopList.name"></div>
                <div class="miniwrap">
                  <p class="shop" v-html="brTxt(shopList.name)">ショップ名</p>
                  <!-- <p class="shop">{{shopList.name}}</p> -->
                  <p class="floor">{{shopList.yakata}} {{shopList.floor}}</p>
                  <p class="ctg">{{shopList.category_name}}</p>
                </div>
                <!-- /.detail -->
              </div>
            </div>
            <div class="more"><button class="js-modalopen" :data-modal="'modal-p'+index">+ MORE</button></div>
            <!-- /.modal-wrap -->
          </div>
          <!-- /.modal-block -->
          
          <div :class="'modal-block js-modal newrenew-modal modal-p' + index">
            <div class="modal-bg js-modalclose"></div>
            <div class="modal-wrap">
              <button class="modal-close js-modalclose"></button>
              <div class="catchfirst" v-if="shopList.first != ''">
                <span>{{shopList.first}}</span>
              </div>
              <div class="side-wrap">
                <p class="date"><template v-if="shopList.date != ''">{{shopList.date}}</template><template v-if="shopList.weeks != ''"><b>{{shopList.weeks}}</b></template></p>
                <p class="new-renew">{{shopList.new_renew}}</p>
                <p class="first" v-if="shopList.badge != ''">{{shopList.badge}}</p>
              </div>

              <div class="modal-cont">
                <div class="img-wrap">
                  <div class="img-slider js-imgslider">
                    <div class="img"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image01img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image02img != ''"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image02img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image03img != ''"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image03img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image04img != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image04img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image05img != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image05img + '.jpg' " :alt="shopList.name"></div>
                  </div>
                  <!-- /.img-wrap -->
                </div>
                <div class="detail">
                  <div class="logo" v-if="shopList.logoimg != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/logo/' + shopList.logoimg + '.jpg' " :alt="shopList.name"></div>
                  <div class="miniwrap">
                    <p class="shop" v-html="brTxt(shopList.name)">ショップ名</p>
                    <p class="floor">{{shopList.yakata}} {{shopList.floor}}</p>
                    <p class="ctg">{{shopList.category_name}}</p>
                  </div>
                  <p class="introduction" v-html="brTxt(shopList.text)"></p>
                  <div v-if="shopList.textlink != ''">
                    <p class="introduction link"><a :href="shopList.textlink" target="_blank">詳しくはこちら</a></p>
                  </div>
                  <div class="open-event" v-if="shopList.opening != ''">
                    <p class="ttl">オープニング企画</p>
                    <p class="txt" v-html="brTxt(shopList.opening)">企画内容</p>
                  </div>
                  <!-- /.detail -->
                </div>

                <ul class="link-list">
                  <li v-if="shopList.link_home != ''" class="link-item shop"><a :href="shopList.link_home" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_shop.png" alt="shop"></a></li>
                  <li v-if="shopList.link_instagram != ''" class="link-item ig"><a :href="shopList.link_instagram" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_ig.png" alt="Instagram"></a></li>
                  <li v-if="shopList.link_facebook != ''" class="link-item fb"><a :href="shopList.link_facebook" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_fb.png" alt="Facebook"></a></li>
                  <li v-if="shopList.link_twitter != ''" class="link-item tw"><a :href="shopList.link_twitter" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_tw.png" alt="Twitter"></a></li>
                  <li v-if="shopList.link_site != ''" class="link-item home"><a :href="shopList.link_site" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_home.png" alt="home"></a></li>
                  <!-- /.link-list -->
                </ul>
              </div>
              <!-- /.modal-wrap -->
            </div>
            <div class="modal-control-area">
              <div class="modal-arrow prev" v-if="index>0"><button class="js-modalopen" :data-modal="'modal-p'+ (index - 1)">&nbsp;</button></div>
              <div class="modal-arrow next" v-if="index+1<pickupList.length"><button class="js-modalopen" :data-modal="'modal-p'+ (index + 1)">&nbsp;</button></div>
              <div class="modal-arrow-close"><button class="js-modalclose">× CLOSE</button></div>
            </div>
            <!-- /.modal-block -->
          </div>
        </li>
      </template>
    </ul>
    <ul class="item-list item-list-all js-tabarea" v-cloak>
      <template v-for="(shopList, index) in nonpickupList">
        <li :class="'item ' + shopList.category" v-bind:key="index">
          <div class="front-cont">
            <div class="img-wrap">
              <div class="badge-l">
                <p class="date"><template v-if="shopList.date != ''">{{shopList.date}}<br></template><template v-if="shopList.weeks != ''"><b>{{shopList.weeks}}</b></template></p>
                <p class="new-renew">{{shopList.new_renew}}</p>
              </div>
              <!-- /.img-wrap -->
            </div>
            <div class="detail">
            <div class="catch catchfirst" v-if="shopList.first != ''">
              <div class="sido-ico">
                <span>{{shopList.first}}</span>
              </div>
            </div>
              <div class="logo" v-if="shopList.logoimg != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/logo/' + shopList.logoimg + '.jpg' " :alt="shopList.name"></div>
              <div class="img"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image01img + '.jpg' " :alt="shopList.name"></div>
              <div class="miniwrap">
                <p class="shop" v-html="brTxt(shopList.name)">ショップ名</p>
                <p class="floor">{{shopList.yakata}} {{shopList.floor}}</p>
                <p class="ctg">{{shopList.category_name}}</p>
                <div class="more"><button class="js-modalopen" :data-modal="'modal-n'+index">+ MORE</button></div>
              </div>
              <!-- /.detail -->
            </div>
            <!-- /.front-cont -->
          </div>

          <div :class="'modal-block js-modal newrenew-modal modal-n' + index">
            <div class="modal-bg js-modalclose"></div>
            <div class="modal-wrap">
              <button class="modal-close js-modalclose"></button>
              <div class="catchfirst" v-if="shopList.first != ''">
                <span>{{shopList.first}}</span>
              </div>
              <div class="side-wrap">
                <p class="date"><template v-if="shopList.date != ''">{{shopList.date}}</template><template v-if="shopList.weeks != ''"><b>{{shopList.weeks}}</b></template></p>
                <p class="new-renew">{{shopList.new_renew}}</p>
                <p class="first" v-if="shopList.badge != ''">{{shopList.badge}}</p>
              </div>

              <div class="modal-cont">
                <div class="img-wrap">
                  <div class="img-slider js-imgslider">
                    <div class="img"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image01img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image02img != ''"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image02img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image03img != ''"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image03img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image04img != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image04img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image05img != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image05img + '.jpg' " :alt="shopList.name"></div>
                  </div>
                  <!-- /.img-wrap -->
                </div>
                <div class="detail">
                  <div class="logo" v-if="shopList.logoimg != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/logo/' + shopList.logoimg + '.jpg' " :alt="shopList.name"></div>
                  <div class="miniwrap">
                    <p class="shop" v-html="brTxt(shopList.name)">ショップ名</p>
                    <p class="floor">{{shopList.yakata}} {{shopList.floor}}</p>
                    <p class="ctg">{{shopList.category_name}}</p>
                  </div>
                  <p class="introduction" v-html="brTxt(shopList.text)"></p>
                  <div v-if="shopList.textlink != ''">
                    <p class="introduction link"><a :href="shopList.textlink" target="_blank">詳しくはこちら</a></p>
                  </div>
                  <div class="open-event" v-if="shopList.opening != ''">
                    <p class="ttl">オープニング企画</p>
                    <p class="txt" v-html="brTxt(shopList.opening)">企画内容</p>
                  </div>
                  <!-- /.detail -->
                </div>

                <ul class="link-list">
                  <li v-if="shopList.link_home != ''" class="link-item shop"><a :href="shopList.link_home" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_shop.png" alt="shop"></a></li>
                  <li v-if="shopList.link_instagram != ''" class="link-item ig"><a :href="shopList.link_instagram" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_ig.png" alt="Instagram"></a></li>
                  <li v-if="shopList.link_facebook != ''" class="link-item fb"><a :href="shopList.link_facebook" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_fb.png" alt="Facebook"></a></li>
                  <li v-if="shopList.link_twitter != ''" class="link-item tw"><a :href="shopList.link_twitter" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_tw.png" alt="Twitter"></a></li>
                  <li v-if="shopList.link_site != ''" class="link-item home"><a :href="shopList.link_site" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_home.png" alt="home"></a></li>
                  <!-- /.link-list -->
                </ul>
              </div>

              <!-- /.modal-wrap -->
            </div>
            <div class="modal-control-area">
              <div class="modal-arrow prev" v-if="index>0"><button class="js-modalopen" :data-modal="'modal-n'+ (index - 1)">&nbsp;</button></div>
              <div class="modal-arrow next" v-if="index+1<nonpickupList.length"><button class="js-modalopen" :data-modal="'modal-n'+ (index + 1)">&nbsp;</button></div>
              <div class="modal-arrow-close"><button class="js-modalclose">× CLOSE</button></div>
            </div>
            <!-- /.modal-block -->
          </div>
        </li>
      </template>
    </ul>
  </div>

  <div class="list-block" id="clothes-list-block">
    <ul class="item-list-pickup js-tabarea" v-cloak>
      <template v-for="(shopList, index) in clothesList_pickup">
        <li :class="'item ' + shopList.category" v-bind:key="index">
          <div class="front-wrap">
            <div class="catch catchfirst" v-if="shopList.first != ''">
              <div class="sido-ico">
                <span>{{shopList.first}}</span>
              </div>
            </div>

            <div class="front-cont">
              <div class="img-wrap">
                <img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image01img + '.jpg' " :alt="shopList.name">
                <!-- /.img-wrap -->
              </div>
              <div class="detail">
                <div class="side-wrap">
                  <p class="date"><template v-if="shopList.date != ''">{{shopList.date}}</template><template v-if="shopList.weeks != ''"><b>{{shopList.weeks}}</b></template></p>
                  <p class="new-renew">{{shopList.new_renew}}</p>
                </div>
                <div class="logo" v-if="shopList.logoimg != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/logo/' + shopList.logoimg + '.jpg' " :alt="shopList.name"></div>
                <div class="miniwrap">
                  <p class="shop" v-html="brTxt(shopList.name)">ショップ名</p>
                  <p class="floor">{{shopList.yakata}} {{shopList.floor}}</p>
                  <p class="ctg">{{shopList.category_name}}</p>
                </div>
                <!-- /.detail -->
              </div>
            </div>
            <div class="more"><button class="js-modalopen" :data-modal="'modal-cp'+index">+ MORE</button></div>
            <!-- /.modal-wrap -->
          </div>
          <!-- /.modal-block -->
          
          <div :class="'modal-block js-modal newrenew-modal modal-cp' + index">
            <div class="modal-bg js-modalclose"></div>
            <div class="modal-wrap">
              <button class="modal-close js-modalclose"></button>
              <div class="catchfirst" v-if="shopList.first != ''">
                <span>{{shopList.first}}</span>
              </div>
              <div class="side-wrap">
                <p class="date"><template v-if="shopList.date != ''">{{shopList.date}}</template><template v-if="shopList.weeks != ''"><b>{{shopList.weeks}}</b></template></p>
                <p class="new-renew">{{shopList.new_renew}}</p>
                <p class="first" v-if="shopList.badge != ''">{{shopList.badge}}</p>
              </div>

              <div class="modal-cont">
                <div class="img-wrap">
                  <div class="img-slider js-imgslider">
                    <div class="img"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image01img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image02img != ''"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image02img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image03img != ''"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image03img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image04img != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image04img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image05img != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image05img + '.jpg' " :alt="shopList.name"></div>
                  </div>
                  <!-- /.img-wrap -->
                </div>
                <div class="detail">
                  <div class="logo" v-if="shopList.logoimg != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/logo/' + shopList.logoimg + '.jpg' " :alt="shopList.name"></div>
                  <div class="miniwrap">
                    <p class="shop" v-html="brTxt(shopList.name)">ショップ名</p>
                    <p class="floor">{{shopList.yakata}} {{shopList.floor}}</p>
                    <p class="ctg">{{shopList.category_name}}</p>
                  </div>
                  <p class="introduction" v-html="brTxt(shopList.text)"></p>
                  <div v-if="shopList.textlink != ''">
                    <p class="introduction link"><a :href="shopList.textlink" target="_blank">詳しくはこちら</a></p>
                  </div>
                  <div class="open-event" v-if="shopList.opening != ''">
                    <p class="ttl">オープニング企画</p>
                    <p class="txt" v-html="brTxt(shopList.opening)">企画内容</p>
                  </div>
                  <!-- /.detail -->
                </div>

                <ul class="link-list">
                  <li v-if="shopList.link_home != ''" class="link-item shop"><a :href="shopList.link_home" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_shop.png" alt="shop"></a></li>
                  <li v-if="shopList.link_instagram != ''" class="link-item ig"><a :href="shopList.link_instagram" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_ig.png" alt="Instagram"></a></li>
                  <li v-if="shopList.link_facebook != ''" class="link-item fb"><a :href="shopList.link_facebook" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_fb.png" alt="Facebook"></a></li>
                  <li v-if="shopList.link_twitter != ''" class="link-item tw"><a :href="shopList.link_twitter" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_tw.png" alt="Twitter"></a></li>
                  <li v-if="shopList.link_site != ''" class="link-item home"><a :href="shopList.link_site" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_home.png" alt="home"></a></li>
                  <!-- /.link-list -->
                </ul>
              </div>

              <!-- /.modal-wrap -->
            </div>
            <div class="modal-control-area">
              <div class="modal-arrow prev" v-if="index>0"><button class="js-modalopen" :data-modal="'modal-cp'+ (index - 1)">&nbsp;</button></div>
              <div class="modal-arrow next" v-if="index+1<clothesList_pickup.length"><button class="js-modalopen" :data-modal="'modal-cp'+ (index + 1)">&nbsp;</button></div>
              <div class="modal-arrow-close"><button class="js-modalclose">× CLOSE</button></div>
            </div>
            <!-- /.modal-block -->
          </div>
        </li>
      </template>
    </ul>
    <ul class="item-list item-list-all js-tabarea" v-cloak>
      <template v-for="(shopList, index) in clothesList">
        <li :class="'item ' + shopList.category" v-bind:key="index">
          <div class="front-cont">
            <div class="img-wrap">
              <div class="badge-l">
                <p class="date"><template v-if="shopList.date != ''">{{shopList.date}}<br></template><template v-if="shopList.weeks != ''"><b>{{shopList.weeks}}</b></template></p>
                <p class="new-renew">{{shopList.new_renew}}</p>
              </div>
              <!-- /.img-wrap -->
            </div>
            <div class="detail">
            <div class="catch catchfirst" v-if="shopList.first != ''">
              <div class="sido-ico">
                <span>{{shopList.first}}</span>
              </div>
            </div>
              <div class="logo" v-if="shopList.logoimg != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/logo/' + shopList.logoimg + '.jpg' " :alt="shopList.name"></div>
              <div class="img"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image01img + '.jpg' " :alt="shopList.name"></div>
              <div class="miniwrap">
                <p class="shop" v-html="brTxt(shopList.name)">ショップ名</p>
                <p class="floor">{{shopList.yakata}} {{shopList.floor}}</p>
                <p class="ctg">{{shopList.category_name}}</p>
                <div class="more"><button class="js-modalopen" :data-modal="'modal-c'+index">+ MORE</button></div>
              </div>
              <!-- /.detail -->
            </div>
            <!-- /.front-cont -->
          </div>

          <div :class="'modal-block js-modal newrenew-modal modal-c' + index">
            <div class="modal-bg js-modalclose"></div>
            <div class="modal-wrap">
              <button class="modal-close js-modalclose"></button>
              <div class="catchfirst" v-if="shopList.first != ''">
                <span>{{shopList.first}}</span>
              </div>
              <div class="side-wrap">
                <p class="date"><template v-if="shopList.date != ''">{{shopList.date}}</template><template v-if="shopList.weeks != ''"><b>{{shopList.weeks}}</b></template></p>
                <p class="new-renew">{{shopList.new_renew}}</p>
                <p class="first" v-if="shopList.badge != ''">{{shopList.badge}}</p>
              </div>

              <div class="modal-cont">
                <div class="img-wrap">
                  <div class="img-slider js-imgslider">
                    <div class="img"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image01img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image02img != ''"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image02img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image03img != ''"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image03img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image04img != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image04img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image05img != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image05img + '.jpg' " :alt="shopList.name"></div>
                  </div>
                  <!-- /.img-wrap -->
                </div>
                <div class="detail">
                  <div class="logo" v-if="shopList.logoimg != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/logo/' + shopList.logoimg + '.jpg' " :alt="shopList.name"></div>
                  <div class="miniwrap">
                    <p class="shop" v-html="brTxt(shopList.name)">ショップ名</p>
                    <p class="floor">{{shopList.yakata}} {{shopList.floor}}</p>
                    <p class="ctg">{{shopList.category_name}}</p>
                  </div>
                  <p class="introduction" v-html="brTxt(shopList.text)"></p>
                  <div v-if="shopList.textlink != ''">
                    <p class="introduction link"><a :href="shopList.textlink" target="_blank">詳しくはこちら</a></p>
                  </div>
                  <div class="open-event" v-if="shopList.opening != ''">
                    <p class="ttl">オープニング企画</p>
                    <p class="txt" v-html="brTxt(shopList.opening)">企画内容</p>
                  </div>
                  <!-- /.detail -->
                </div>

                <ul class="link-list">
                  <li v-if="shopList.link_home != ''" class="link-item shop"><a :href="shopList.link_home" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_shop.png" alt="shop"></a></li>
                  <li v-if="shopList.link_instagram != ''" class="link-item ig"><a :href="shopList.link_instagram" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_ig.png" alt="Instagram"></a></li>
                  <li v-if="shopList.link_facebook != ''" class="link-item fb"><a :href="shopList.link_facebook" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_fb.png" alt="Facebook"></a></li>
                  <li v-if="shopList.link_twitter != ''" class="link-item tw"><a :href="shopList.link_twitter" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_tw.png" alt="Twitter"></a></li>
                  <li v-if="shopList.link_site != ''" class="link-item home"><a :href="shopList.link_site" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_home.png" alt="home"></a></li>
                  <!-- /.link-list -->
                </ul>
              </div>

              <!-- /.modal-wrap -->
            </div>
            <div class="modal-control-area">
              <div class="modal-arrow prev" v-if="index>0"><button class="js-modalopen" :data-modal="'modal-c'+ (index - 1)">&nbsp;</button></div>
              <div class="modal-arrow next" v-if="index+1<clothesList.length"><button class="js-modalopen" :data-modal="'modal-c'+ (index + 1)">&nbsp;</button></div>
              <div class="modal-arrow-close"><button class="js-modalclose">× CLOSE</button></div>
            </div>
            <!-- /.modal-block -->
          </div>
        </li>
      </template>
    </ul>
  </div>

  <div class="list-block" id="goods-list-block">
    <ul class="item-list-pickup js-tabarea" v-cloak>
      <template v-for="(shopList, index) in goodsList_pickup">
        <li :class="'item ' + shopList.category" v-bind:key="index">
          <div class="front-wrap">
            <div class="catch catchfirst" v-if="shopList.first != ''">
              <div class="sido-ico">
                <span>{{shopList.first}}</span>
              </div>
            </div>

            <div class="front-cont">
              <div class="img-wrap">
                <img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image01img + '.jpg' " :alt="shopList.name">
                <!-- /.img-wrap -->
              </div>
              <div class="detail">
                <div class="side-wrap">
                  <p class="date"><template v-if="shopList.date != ''">{{shopList.date}}</template><template v-if="shopList.weeks != ''"><b>{{shopList.weeks}}</b></template></p>
                  <p class="new-renew">{{shopList.new_renew}}</p>
                </div>
                <div class="logo" v-if="shopList.logoimg != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/logo/' + shopList.logoimg + '.jpg' " :alt="shopList.name"></div>
                <div class="miniwrap">
                  <p class="shop" v-html="brTxt(shopList.name)">ショップ名</p>
                  <p class="floor">{{shopList.yakata}} {{shopList.floor}}</p>
                  <p class="ctg">{{shopList.category_name}}</p>
                </div>
                <!-- /.detail -->
              </div>

            </div>
            
            <div class="more"><button class="js-modalopen" :data-modal="'modal-gp'+index">+ MORE</button></div>
            <!-- /.modal-wrap -->
          </div>
          <!-- /.modal-block -->
          
          <div :class="'modal-block js-modal newrenew-modal modal-gp' + index">
            <div class="modal-bg js-modalclose"></div>
            <div class="modal-wrap">
              <button class="modal-close js-modalclose"></button>
              <div class="catchfirst" v-if="shopList.first != ''">
                <span>{{shopList.first}}</span>
              </div>
              <div class="side-wrap">
                <p class="date"><template v-if="shopList.date != ''">{{shopList.date}}</template><template v-if="shopList.weeks != ''"><b>{{shopList.weeks}}</b></template></p>
                <p class="new-renew">{{shopList.new_renew}}</p>
                <p class="first" v-if="shopList.badge != ''">{{shopList.badge}}</p>
              </div>

              <div class="modal-cont">
                <div class="img-wrap">
                  <div class="img-slider js-imgslider">
                    <div class="img"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image01img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image02img != ''"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image02img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image03img != ''"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image03img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image04img != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image04img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image05img != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image05img + '.jpg' " :alt="shopList.name"></div>
                  </div>
                  <!-- /.img-wrap -->
                </div>
                <div class="detail">
                  <div class="logo" v-if="shopList.logoimg != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/logo/' + shopList.logoimg + '.jpg' " :alt="shopList.name"></div>
                  <div class="miniwrap">
                    <p class="shop" v-html="brTxt(shopList.name)">ショップ名</p>
                    <p class="floor">{{shopList.yakata}} {{shopList.floor}}</p>
                    <p class="ctg">{{shopList.category_name}}</p>
                  </div>
                  <p class="introduction" v-html="brTxt(shopList.text)"></p>
                  <div v-if="shopList.textlink != ''">
                    <p class="introduction link"><a :href="shopList.textlink" target="_blank">詳しくはこちら</a></p>
                  </div>
                  <div class="open-event" v-if="shopList.opening != ''">
                    <p class="ttl">オープニング企画</p>
                    <p class="txt" v-html="brTxt(shopList.opening)">企画内容</p>
                  </div>
                  <!-- /.detail -->
                </div>

                <ul class="link-list">
                  <li v-if="shopList.link_home != ''" class="link-item shop"><a :href="shopList.link_home" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_shop.png" alt="shop"></a></li>
                  <li v-if="shopList.link_instagram != ''" class="link-item ig"><a :href="shopList.link_instagram" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_ig.png" alt="Instagram"></a></li>
                  <li v-if="shopList.link_facebook != ''" class="link-item fb"><a :href="shopList.link_facebook" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_fb.png" alt="Facebook"></a></li>
                  <li v-if="shopList.link_twitter != ''" class="link-item tw"><a :href="shopList.link_twitter" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_tw.png" alt="Twitter"></a></li>
                  <li v-if="shopList.link_site != ''" class="link-item home"><a :href="shopList.link_site" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_home.png" alt="home"></a></li>
                  <!-- /.link-list -->
                </ul>
              </div>

              <!-- /.modal-wrap -->
            </div>
            <div class="modal-control-area">
              <div class="modal-arrow prev" v-if="index>0"><button class="js-modalopen" :data-modal="'modal-gp'+ (index - 1)">&nbsp;</button></div>
              <div class="modal-arrow next" v-if="index+1<goodsList_pickup.length"><button class="js-modalopen" :data-modal="'modal-gp'+ (index + 1)">&nbsp;</button></div>
              <div class="modal-arrow-close"><button class="js-modalclose">× CLOSE</button></div>
            </div>
            <!-- /.modal-block -->
          </div>
        </li>
      </template>
    </ul>
    <ul class="item-list item-list-all js-tabarea" v-cloak>
      <template v-for="(shopList, index) in goodsList">
        <li :class="'item ' + shopList.category" v-bind:key="index">
          <div class="front-cont">
            <div class="img-wrap">
              <div class="badge-l">
                <p class="date"><template v-if="shopList.date != ''">{{shopList.date}}<br></template><template v-if="shopList.weeks != ''"><b>{{shopList.weeks}}</b></template></p>
                <p class="new-renew">{{shopList.new_renew}}</p>
              </div>
              <!-- /.img-wrap -->
            </div>
            <div class="detail">
            <div class="catch catchfirst" v-if="shopList.first != ''">
              <div class="sido-ico">
                <span>{{shopList.first}}</span>
              </div>
            </div>
              <div class="logo" v-if="shopList.logoimg != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/logo/' + shopList.logoimg + '.jpg' " :alt="shopList.name"></div>
              <div class="img"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image01img + '.jpg' " :alt="shopList.name"></div>
              <div class="miniwrap">
                <p class="shop" v-html="brTxt(shopList.name)">ショップ名</p>
                <p class="floor">{{shopList.yakata}} {{shopList.floor}}</p>
                <p class="ctg">{{shopList.category_name}}</p>
                <div class="more"><button class="js-modalopen" :data-modal="'modal-g'+index">+ MORE</button></div>
              </div>
              <!-- /.detail -->
            </div>
            <!-- /.front-cont -->
          </div>

          <div :class="'modal-block js-modal newrenew-modal modal-g' + index">
            <div class="modal-bg js-modalclose"></div>
            <div class="modal-wrap">
              <button class="modal-close js-modalclose"></button>
              <div class="catchfirst" v-if="shopList.first != ''">
                <span>{{shopList.first}}</span>
              </div>
              <div class="side-wrap">
                <p class="date"><template v-if="shopList.date != ''">{{shopList.date}}</template><template v-if="shopList.weeks != ''"><b>{{shopList.weeks}}</b></template></p>
                <p class="new-renew">{{shopList.new_renew}}</p>
                <p class="first" v-if="shopList.badge != ''">{{shopList.badge}}</p>
              </div>

              <div class="modal-cont">
                <div class="img-wrap">
                  <div class="img-slider js-imgslider">
                    <div class="img"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image01img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image02img != ''"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image02img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image03img != ''"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image03img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image04img != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image04img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image05img != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image05img + '.jpg' " :alt="shopList.name"></div>
                  </div>
                  <!-- /.img-wrap -->
                </div>
                <div class="detail">
                  <div class="logo" v-if="shopList.logoimg != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/logo/' + shopList.logoimg + '.jpg' " :alt="shopList.name"></div>
                  <div class="miniwrap">
                    <p class="shop" v-html="brTxt(shopList.name)">ショップ名</p>
                    <p class="floor">{{shopList.yakata}} {{shopList.floor}}</p>
                    <p class="ctg">{{shopList.category_name}}</p>
                  </div>
                  <p class="introduction" v-html="brTxt(shopList.text)"></p>
                <div v-if="shopList.textlink != ''">
                    <p class="introduction link"><a :href="shopList.textlink" target="_blank">詳しくはこちら</a></p>
                  </div>
                  <div class="open-event" v-if="shopList.opening != ''">
                    <p class="ttl">オープニング企画</p>
                    <p class="txt" v-html="brTxt(shopList.opening)">企画内容</p>
                  </div>
                  <!-- /.detail -->
                </div>

                <ul class="link-list">
                  <li v-if="shopList.link_home != ''" class="link-item shop"><a :href="shopList.link_home" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_shop.png" alt="shop"></a></li>
                  <li v-if="shopList.link_instagram != ''" class="link-item ig"><a :href="shopList.link_instagram" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_ig.png" alt="Instagram"></a></li>
                  <li v-if="shopList.link_facebook != ''" class="link-item fb"><a :href="shopList.link_facebook" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_fb.png" alt="Facebook"></a></li>
                  <li v-if="shopList.link_twitter != ''" class="link-item tw"><a :href="shopList.link_twitter" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_tw.png" alt="Twitter"></a></li>
                  <li v-if="shopList.link_site != ''" class="link-item home"><a :href="shopList.link_site" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_home.png" alt="home"></a></li>
                  <!-- /.link-list -->
                </ul>
              </div>

              <!-- /.modal-wrap -->
            </div>
            <div class="modal-control-area">
              <div class="modal-arrow prev" v-if="index>0"><button class="js-modalopen" :data-modal="'modal-g'+ (index - 1)">&nbsp;</button></div>
              <div class="modal-arrow next" v-if="index+1<goodsList.length"><button class="js-modalopen" :data-modal="'modal-g'+ (index + 1)">&nbsp;</button></div>
              <div class="modal-arrow-close"><button class="js-modalclose">× CLOSE</button></div>
            </div>
            <!-- /.modal-block -->
          </div>
        </li>
      </template>
    </ul>
  </div>
  
  <div class="list-block" id="fashion-list-block">
    <ul class="item-list-pickup js-tabarea" v-cloak>
      <template v-for="(shopList, index) in fashionList_pickup">
        <li :class="'item ' + shopList.category" v-bind:key="index">
          <div class="front-wrap">
            <div class="catch catchfirst" v-if="shopList.first != ''">
              <div class="sido-ico">
                <span>{{shopList.first}}</span>
              </div>
            </div>

            <div class="front-cont">
              <div class="img-wrap">
                <img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image01img + '.jpg' " :alt="shopList.name">
                <!-- /.img-wrap -->
              </div>
              <div class="detail">
                <div class="side-wrap">
                  <p class="date"><template v-if="shopList.date != ''">{{shopList.date}}</template><template v-if="shopList.weeks != ''"><b>{{shopList.weeks}}</b></template></p>
                  <p class="new-renew">{{shopList.new_renew}}</p>
                </div>
                <div class="logo" v-if="shopList.logoimg != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/logo/' + shopList.logoimg + '.jpg' " :alt="shopList.name"></div>
                <div class="miniwrap">
                  <p class="shop" v-html="brTxt(shopList.name)">ショップ名</p>
                  <p class="floor">{{shopList.yakata}} {{shopList.floor}}</p>
                  <p class="ctg">{{shopList.category_name}}</p>
                </div>
                <!-- /.detail -->
              </div>
            </div>
            <div class="more"><button class="js-modalopen" :data-modal="'modal-mp'+index">+ MORE</button></div>
            <!-- /.modal-wrap -->
          </div>
          <!-- /.modal-block -->
          
          <div :class="'modal-block js-modal newrenew-modal modal-mp' + index">
            <div class="modal-bg js-modalclose"></div>
            <div class="modal-wrap">
              <button class="modal-close js-modalclose"></button>
              <div class="catchfirst" v-if="shopList.first != ''">
                <span>{{shopList.first}}</span>
              </div>
              <div class="side-wrap">
                <p class="date"><template v-if="shopList.date != ''">{{shopList.date}}</template><template v-if="shopList.weeks != ''"><b>{{shopList.weeks}}</b></template></p>
                <p class="new-renew">{{shopList.new_renew}}</p>
                <p class="first" v-if="shopList.badge != ''">{{shopList.badge}}</p>
              </div>

              <div class="modal-cont">
                <div class="img-wrap">
                  <div class="img-slider js-imgslider">
                    <div class="img"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image01img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image02img != ''"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image02img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image03img != ''"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image03img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image04img != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image04img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image05img != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image05img + '.jpg' " :alt="shopList.name"></div>
                  </div>
                  <!-- /.img-wrap -->
                </div>
                <div class="detail">
                  <div class="logo" v-if="shopList.logoimg != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/logo/' + shopList.logoimg + '.jpg' " :alt="shopList.name"></div>
                  <div class="miniwrap">
                    <p class="shop" v-html="brTxt(shopList.name)">ショップ名</p>
                    <p class="floor">{{shopList.yakata}} {{shopList.floor}}</p>
                    <p class="ctg">{{shopList.category_name}}</p>
                  </div>
                  <p class="introduction" v-html="brTxt(shopList.text)"></p>
                <div v-if="shopList.textlink != ''">
                    <p class="introduction link"><a :href="shopList.textlink" target="_blank">詳しくはこちら</a></p>
                  </div>
                  <div class="open-event" v-if="shopList.opening != ''">
                    <p class="ttl">オープニング企画</p>
                    <p class="txt" v-html="brTxt(shopList.opening)">企画内容</p>
                  </div>
                  <!-- /.detail -->
                </div>

                <ul class="link-list">
                  <li v-if="shopList.link_home != ''" class="link-item shop"><a :href="shopList.link_home" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_shop.png" alt="shop"></a></li>
                  <li v-if="shopList.link_instagram != ''" class="link-item ig"><a :href="shopList.link_instagram" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_ig.png" alt="Instagram"></a></li>
                  <li v-if="shopList.link_facebook != ''" class="link-item fb"><a :href="shopList.link_facebook" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_fb.png" alt="Facebook"></a></li>
                  <li v-if="shopList.link_twitter != ''" class="link-item tw"><a :href="shopList.link_twitter" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_tw.png" alt="Twitter"></a></li>
                  <li v-if="shopList.link_site != ''" class="link-item home"><a :href="shopList.link_site" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_home.png" alt="home"></a></li>
                  <!-- /.link-list -->
                </ul>
              </div>

              <!-- /.modal-wrap -->
            </div>
            <div class="modal-control-area">
              <div class="modal-arrow prev" v-if="index>0"><button class="js-modalopen" :data-modal="'modal-mp'+ (index - 1)">&nbsp;</button></div>
              <div class="modal-arrow next" v-if="index+1<fashionList_pickup.length"><button class="js-modalopen" :data-modal="'modal-mp'+ (index + 1)">&nbsp;</button></div>
              <div class="modal-arrow-close"><button class="js-modalclose">× CLOSE</button></div>
            </div>
            <!-- /.modal-block -->
          </div>
        </li>
      </template>
    </ul>
    <ul class="item-list item-list-all js-tabarea" v-cloak>
      <template v-for="(shopList, index) in fashionList">
        <li :class="'item ' + shopList.category" v-bind:key="index">
          <div class="front-cont">
            <div class="img-wrap">
              <div class="badge-l">
                <p class="date"><template v-if="shopList.date != ''">{{shopList.date}}<br></template><template v-if="shopList.weeks != ''"><b>{{shopList.weeks}}</b></template></p>
                <p class="new-renew">{{shopList.new_renew}}</p>
              </div>
              <!-- /.img-wrap -->
            </div>
            <div class="detail">
            <div class="catch catchfirst" v-if="shopList.first != ''">
              <div class="sido-ico">
                <span>{{shopList.first}}</span>
              </div>
            </div>
              <div class="logo" v-if="shopList.logoimg != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/logo/' + shopList.logoimg + '.jpg' " :alt="shopList.name"></div>
              <div class="img"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image01img + '.jpg' " :alt="shopList.name"></div>
              <div class="miniwrap">
                <p class="shop" v-html="brTxt(shopList.name)">ショップ名</p>
                <p class="floor">{{shopList.yakata}} {{shopList.floor}}</p>
                <p class="ctg">{{shopList.category_name}}</p>
                <div class="more"><button class="js-modalopen" :data-modal="'modal-m'+index">+ MORE</button></div>
              </div>
              <!-- /.detail -->
            </div>
            <!-- /.front-cont -->
          </div>

          <div :class="'modal-block js-modal newrenew-modal modal-m' + index">
            <div class="modal-bg js-modalclose"></div>
            <div class="modal-wrap">
              <button class="modal-close js-modalclose"></button>
              <div class="catchfirst" v-if="shopList.first != ''">
                <span>{{shopList.first}}</span>
              </div>
              <div class="side-wrap">
                <p class="date"><template v-if="shopList.date != ''">{{shopList.date}}</template><template v-if="shopList.weeks != ''"><b>{{shopList.weeks}}</b></template></p>
                <p class="new-renew">{{shopList.new_renew}}</p>
                <p class="first" v-if="shopList.badge != ''">{{shopList.badge}}</p>
              </div>

              <div class="modal-cont">
                <div class="img-wrap">
                  <div class="img-slider js-imgslider">
                    <div class="img"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image01img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image02img != ''"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image02img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image03img != ''"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image03img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image04img != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image04img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image05img != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image05img + '.jpg' " :alt="shopList.name"></div>
                  </div>
                  <!-- /.img-wrap -->
                </div>
                <div class="detail">
                  <div class="logo" v-if="shopList.logoimg != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/logo/' + shopList.logoimg + '.jpg' " :alt="shopList.name"></div>
                  <div class="miniwrap">
                    <p class="shop" v-html="brTxt(shopList.name)">ショップ名</p>
                    <p class="floor">{{shopList.yakata}} {{shopList.floor}}</p>
                    <p class="ctg">{{shopList.category_name}}</p>
                  </div>
                  <p class="introduction" v-html="brTxt(shopList.text)"></p>
                  <div v-if="shopList.textlink != ''">
                    <p class="introduction link"><a :href="shopList.textlink" target="_blank">詳しくはこちら</a></p>
                  </div>
                  <div class="open-event" v-if="shopList.opening != ''">
                    <p class="ttl">オープニング企画</p>
                    <p class="txt" v-html="brTxt(shopList.opening)">企画内容</p>
                  </div>
                  <!-- /.detail -->
                </div>

                <ul class="link-list">
                  <li v-if="shopList.link_home != ''" class="link-item shop"><a :href="shopList.link_home" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_shop.png" alt="shop"></a></li>
                  <li v-if="shopList.link_instagram != ''" class="link-item ig"><a :href="shopList.link_instagram" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_ig.png" alt="Instagram"></a></li>
                  <li v-if="shopList.link_facebook != ''" class="link-item fb"><a :href="shopList.link_facebook" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_fb.png" alt="Facebook"></a></li>
                  <li v-if="shopList.link_twitter != ''" class="link-item tw"><a :href="shopList.link_twitter" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_tw.png" alt="Twitter"></a></li>
                  <li v-if="shopList.link_site != ''" class="link-item home"><a :href="shopList.link_site" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_home.png" alt="home"></a></li>
                  <!-- /.link-list -->
                </ul>
              </div>

              <!-- /.modal-wrap -->
            </div>
            <div class="modal-control-area">
              <div class="modal-arrow prev" v-if="index>0"><button class="js-modalopen" :data-modal="'modal-m'+ (index - 1)">&nbsp;</button></div>
              <div class="modal-arrow next" v-if="index+1<fashionList.length"><button class="js-modalopen" :data-modal="'modal-m'+ (index + 1)">&nbsp;</button></div>
              <div class="modal-arrow-close"><button class="js-modalclose">× CLOSE</button></div>
            </div>
            <!-- /.modal-block -->
          </div>
        </li>
      </template>
    </ul>
  </div>

  <div class="list-block" id="sweets-list-block">
    <ul class="item-list-pickup js-tabarea" v-cloak>
      <template v-for="(shopList, index) in sweetsList_pickup">
        <li :class="'item ' + shopList.category" v-bind:key="index">
          <div class="front-wrap">
            <div class="catch catchfirst" v-if="shopList.first != ''">
              <div class="sido-ico">
                <span>{{shopList.first}}</span>
              </div>
            </div>

            <div class="front-cont">
              <div class="img-wrap">
                <img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image01img + '.jpg' " :alt="shopList.name">
                <!-- /.img-wrap -->
              </div>
              <div class="detail">
                <div class="side-wrap">
                  <p class="date"><template v-if="shopList.date != ''">{{shopList.date}}</template><template v-if="shopList.weeks != ''"><b>{{shopList.weeks}}</b></template></p>
                  <p class="new-renew">{{shopList.new_renew}}</p>
                </div>
                <div class="logo" v-if="shopList.logoimg != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/logo/' + shopList.logoimg + '.jpg' " :alt="shopList.name"></div>
                <div class="miniwrap">
                  <p class="shop" v-html="brTxt(shopList.name)">ショップ名</p>
                  <p class="floor">{{shopList.yakata}} {{shopList.floor}}</p>
                  <p class="ctg">{{shopList.category_name}}</p>
                </div>
                <!-- /.detail -->
              </div>
            </div>
            <div class="more"><button class="js-modalopen" :data-modal="'modal-lp'+index">+ MORE</button></div>
            <!-- /.modal-wrap -->
          </div>
          <!-- /.modal-block -->
          
          <div :class="'modal-block js-modal newrenew-modal modal-lp' + index">
            <div class="modal-bg js-modalclose"></div>
            <div class="modal-wrap">
              <button class="modal-close js-modalclose"></button>
              <div class="catchfirst" v-if="shopList.first != ''">
                <span>{{shopList.first}}</span>
              </div>
              <div class="side-wrap">
                <p class="date"><template v-if="shopList.date != ''">{{shopList.date}}</template><template v-if="shopList.weeks != ''"><b>{{shopList.weeks}}</b></template></p>
                <p class="new-renew">{{shopList.new_renew}}</p>
                <p class="first" v-if="shopList.badge != ''">{{shopList.badge}}</p>
              </div>

              <div class="modal-cont">
                <div class="img-wrap">
                  <div class="img-slider js-imgslider">
                    <div class="img"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image01img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image02img != ''"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image02img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image03img != ''"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image03img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image04img != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image04img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image05img != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image05img + '.jpg' " :alt="shopList.name"></div>
                  </div>
                  <!-- /.img-wrap -->
                </div>
                <div class="detail">
                  <div class="logo" v-if="shopList.logoimg != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/logo/' + shopList.logoimg + '.jpg' " :alt="shopList.name"></div>
                  <div class="miniwrap">
                    <p class="shop" v-html="brTxt(shopList.name)">ショップ名</p>
                    <p class="floor">{{shopList.yakata}} {{shopList.floor}}</p>
                    <p class="ctg">{{shopList.category_name}}</p>
                  </div>
                  <p class="introduction" v-html="brTxt(shopList.text)"></p>
                <div v-if="shopList.textlink != ''">
                    <p class="introduction link"><a :href="shopList.textlink" target="_blank">詳しくはこちら</a></p>
                  </div>
                  <div class="open-event" v-if="shopList.opening != ''">
                    <p class="ttl">オープニング企画</p>
                    <p class="txt" v-html="brTxt(shopList.opening)">企画内容</p>
                  </div>
                  <!-- /.detail -->
                </div>

                <ul class="link-list">
                  <li v-if="shopList.link_home != ''" class="link-item shop"><a :href="shopList.link_home" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_shop.png" alt="shop"></a></li>
                  <li v-if="shopList.link_instagram != ''" class="link-item ig"><a :href="shopList.link_instagram" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_ig.png" alt="Instagram"></a></li>
                  <li v-if="shopList.link_facebook != ''" class="link-item fb"><a :href="shopList.link_facebook" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_fb.png" alt="Facebook"></a></li>
                  <li v-if="shopList.link_twitter != ''" class="link-item tw"><a :href="shopList.link_twitter" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_tw.png" alt="Twitter"></a></li>
                  <li v-if="shopList.link_site != ''" class="link-item home"><a :href="shopList.link_site" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_home.png" alt="home"></a></li>
                  <!-- /.link-list -->
                </ul>
              </div>

              <!-- /.modal-wrap -->
            </div>
            <div class="modal-control-area">
              <div class="modal-arrow prev" v-if="index>0"><button class="js-modalopen" :data-modal="'modal-lp'+ (index - 1)">&nbsp;</button></div>
              <div class="modal-arrow next" v-if="index+1<sweetsList_pickup.length"><button class="js-modalopen" :data-modal="'modal-lp'+ (index + 1)">&nbsp;</button></div>
              <div class="modal-arrow-close"><button class="js-modalclose">× CLOSE</button></div>
            </div>
            <!-- /.modal-block -->
          </div>
        </li>
      </template>
    </ul>
    <ul class="item-list item-list-all js-tabarea" v-cloak>
      <template v-for="(shopList, index) in sweetsList">
        <li :class="'item ' + shopList.category" v-bind:key="index">
          <div class="front-cont">
            <div class="img-wrap">
              <div class="badge-l">
                <p class="date"><template v-if="shopList.date != ''">{{shopList.date}}<br></template><template v-if="shopList.weeks != ''"><b>{{shopList.weeks}}</b></template></p>
                <p class="new-renew">{{shopList.new_renew}}</p>
              </div>
              <!-- /.img-wrap -->
            </div>
            <div class="detail">
            <div class="catch catchfirst" v-if="shopList.first != ''">
              <div class="sido-ico">
                <span>{{shopList.first}}</span>
              </div>
            </div>
              <div class="logo" v-if="shopList.logoimg != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/logo/' + shopList.logoimg + '.jpg' " :alt="shopList.name"></div>
              <div class="img"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image01img + '.jpg' " :alt="shopList.name"></div>
              <div class="miniwrap">
                <p class="shop" v-html="brTxt(shopList.name)">ショップ名</p>
                <p class="floor">{{shopList.yakata}} {{shopList.floor}}</p>
                <p class="ctg">{{shopList.category_name}}</p>
                <div class="more"><button class="js-modalopen" :data-modal="'modal-l'+index">+ MORE</button></div>
              </div>
              <!-- /.detail -->
            </div>
            <!-- /.front-cont -->
          </div>

          <div :class="'modal-block js-modal newrenew-modal modal-l' + index">
            <div class="modal-bg js-modalclose"></div>
            <div class="modal-wrap">
              <button class="modal-close js-modalclose"></button>
              <div class="catchfirst" v-if="shopList.first != ''">
                <span>{{shopList.first}}</span>
              </div>
              <div class="side-wrap">
                <p class="date"><template v-if="shopList.date != ''">{{shopList.date}}</template><template v-if="shopList.weeks != ''"><b>{{shopList.weeks}}</b></template></p>
                <p class="new-renew">{{shopList.new_renew}}</p>
                <p class="first" v-if="shopList.badge != ''">{{shopList.badge}}</p>
              </div>

              <div class="modal-cont">
                <div class="img-wrap">
                  <div class="img-slider js-imgslider">
                    <div class="img"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image01img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image02img != ''"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image02img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image03img != ''"><img :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image03img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image04img != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image04img + '.jpg' " :alt="shopList.name"></div>
                    <div class="img" v-if="shopList.image05img != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/shop/' + shopList.image05img + '.jpg' " :alt="shopList.name"></div>
                  </div>
                  <!-- /.img-wrap -->
                </div>
                <div class="detail">
                  <div class="logo" v-if="shopList.logoimg != ''"><img  :src=" '/page/023spring_newandrenewal/assets/images/logo/' + shopList.logoimg + '.jpg' " :alt="shopList.name"></div>
                  <div class="miniwrap">
                    <p class="shop" v-html="brTxt(shopList.name)">ショップ名</p>
                    <p class="floor">{{shopList.yakata}} {{shopList.floor}}</p>
                    <p class="ctg">{{shopList.category_name}}</p>
                  </div>
                  <p class="introduction" v-html="brTxt(shopList.text)"></p>
                  <div v-if="shopList.textlink != ''">
                    <p class="introduction link"><a :href="shopList.textlink" target="_blank">詳しくはこちら</a></p>
                  </div>
                  <div class="open-event" v-if="shopList.opening != ''">
                    <p class="ttl">オープニング企画</p>
                    <p class="txt" v-html="brTxt(shopList.opening)">企画内容</p>
                  </div>
                  <!-- /.detail -->
                </div>

                <ul class="link-list">
                  <li v-if="shopList.link_home != ''" class="link-item shop"><a :href="shopList.link_home" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_shop.png" alt="shop"></a></li>
                  <li v-if="shopList.link_instagram != ''" class="link-item ig"><a :href="shopList.link_instagram" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_ig.png" alt="Instagram"></a></li>
                  <li v-if="shopList.link_facebook != ''" class="link-item fb"><a :href="shopList.link_facebook" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_fb.png" alt="Facebook"></a></li>
                  <li v-if="shopList.link_twitter != ''" class="link-item tw"><a :href="shopList.link_twitter" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_tw.png" alt="Twitter"></a></li>
                  <li v-if="shopList.link_site != ''" class="link-item home"><a :href="shopList.link_site" target="_blank"><img src="/page/023spring_newandrenewal/assets/images/ico_home.png" alt="home"></a></li>
                  <!-- /.link-list -->
                </ul>
              </div>

              <!-- /.modal-wrap -->
            </div>
            <div class="modal-control-area">
              <div class="modal-arrow prev" v-if="index>0"><button class="js-modalopen" :data-modal="'modal-l'+ (index - 1)">&nbsp;</button></div>
              <div class="modal-arrow next" v-if="index+1<sweetsList.length"><button class="js-modalopen" :data-modal="'modal-l'+ (index + 1)">&nbsp;</button></div>
              <div class="modal-arrow-close"><button class="js-modalclose">× CLOSE</button></div>
            </div>
            <!-- /.modal-block -->
          </div>
        </li>
      </template>
    </ul>
  </div>
</div>
</main>


    <?php
    /**
     * Footer
     */
    ?>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/page/assets/inc/footer.php'; ?>

  </div>

  <!-- Javascript -->
  <script>
    const list = '/<?php echo DIRNAME; ?>/assets/data/shoplist.json';
  </script>
  <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/' . DIRNAME . '/assets/inc/js.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
  <script src="https://www.promisejs.org/polyfills/promise-7.0.4.min.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="/<?php echo DIRNAME; ?>/assets/js/lib/slick.min.js"></script>
  <script src="/<?php echo DIRNAME; ?>/assets/js/newrenew.js"></script>
  <!-- /Javascript -->
</body>

</html>