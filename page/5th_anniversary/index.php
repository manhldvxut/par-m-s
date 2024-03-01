<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/global-config.php';
//下記のパス「demo」を変更
include_once $_SERVER['DOCUMENT_ROOT'] . '/page/5th_anniversary/assets/inc/config.php';

$nowURL = $_SERVER['HTTP_HOST'];
$pageURL = STORE_NAME . '.parco.jp';
$noCacheURL = STORE_NAME . '-parco.sc-concierge.jp';
$devURL = 'dev-' . STORE_NAME . '-parco.sc-concierge.jp';

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
$pege_title = '錦糸町パルコ 5th Anniversary ｜錦糸町PARCO';
$pege_description = '錦糸町パルコの5周年を記念した限定アイテムや特別企画をご紹介しています。';
$pege_keywords = '';
$page_shareurl = 'https://' . STORE_NAME . '.parco.jp/page/5th_anniversary/'; //必ずディレクトリ名を変更する

?>
<!DOCTYPE html>
<html lang="ja">

<head> <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/page/assets/inc/meta.php'; ?> <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/tagmanager1.php'; ?> <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/' . DIRNAME . '/assets/inc/css.php'; ?> </head>

<body class="<?php echo STORE_NAME; ?> page-tag" id="top"> <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/tagmanager2.php'; ?> <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/page/assets/inc/svgs.php'; ?> <div class="wrapper"> <?php
    /**
     * Header
     */
    ?> <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/' . DIRNAME . '/assets/inc/header.php'; ?> <?php
    /**
     * Main contents
     */
    ?> <main class="main-contents">
        <div class="main-bacground">
            <img src="/page/5th_anniversary/assets/images/bg.png" alt="background">
        </div>
            <div class="ribo-text">
                <div class="ribo-text-body">
                    「変わる、はじまり。」2019年3月16日ー<br>
                    2024年3月16日。“これまで、いま、これから、人々、街。”たくさんのご縁をいただき迎えた5周年。<br>
                    あなたと錦糸町PARCO、「五縁がありまして。」
                </div>
            </div>
            <div class="" id="shoplist" v-cloak>
                <div class="list-block limited-item">
                    <div class="container">
                        <div class="list-block-body">
                            <div class="list-block-header">
                                <div class="list-block-header-icon">
                                    <img src="/page/5th_anniversary/assets/images/icon-topic1.svg" alt="topic 1">
                                </div>
                                <h2>LIMITED ITEM</h2>
                            </div>
                            <ul class="item-list" v-cloak>
                                <template v-for="(shopList, index) in limitedItem">
                                    <li :class="'item ' + shopList.category" v-bind:key="index">
                                        <div class="front-wrap">
                                            <a href="javascript:void()" class="js-modalopen" :data-modal="'modal-p'+index">
                                                <div class="front-cont">
                                                    <div class="img-wrap"> <img :src=" '/page/5th_anniversary/assets/images/limited/' + shopList.image01img + '.jpg' " :alt="shopList.name"> <!-- /.img-wrap -->
                                                    </div>
                                                    <div class="detail">
                                                        <div class="logo"> <img :src=" '/page/5th_anniversary/assets/images/limited/logo/' + shopList.logo + '.png' " :alt="shopList.name">
                                                        </div>
                                                    </div>
                                                </div> 
                                            </a>
                                        </div>
                                        <div :class="'modal-block js-modal newrenew-modal modal-p' + index">
                                            <div class="modal-bg js-modalclose"></div>
                                            <div class="modal-wrap"> <button class="modal-close js-modalclose"></button>
                                                
                                                <div class="modal-cont">
                                                    <div class="img-wrap">
                                                        <div class="img-slider js-imgslider">
                                                            <div class="img"><img :src=" '/page/5th_anniversary/assets/images/limited/' + shopList.image01img + '.jpg' " :alt="shopList.name"></div>
                                                            <div class="img" v-if="shopList.image02img != ''"><img :src=" '/page/5th_anniversary/assets/images/limited/' + shopList.image02img + '.jpg' " :alt="shopList.name"></div>
                                                            <div class="img" v-if="shopList.image03img != ''"><img :src=" '/page/5th_anniversary/assets/images/limited/' + shopList.image03img + '.jpg' " :alt="shopList.name"></div>
                                                            <div class="img" v-if="shopList.image04img != ''"><img :src=" '/page/5th_anniversary/assets/images/limited/' + shopList.image04img + '.jpg' " :alt="shopList.name"></div>
                                                            <div class="img" v-if="shopList.image05img != ''"><img :src=" '/page/5th_anniversary/assets/images/limited/' + shopList.image05img + '.jpg' " :alt="shopList.name"></div>
                                                        </div> <!-- /.img-wrap -->
                                                    </div>
                                                    <div class="detail">
                                                        <div class="modal-header">
                                                            <div class="logo"> <img :src=" '/page/5th_anniversary/assets/images/limited/logo/' + shopList.logo + '.png' " :alt="shopList.name"></div>
                                                            <div class="product-title">
                                                                {{shopList.shopName}}
                                                            </div>
                                                        </div>
                                                        <div class="product-name">
                                                            {{shopList.productName}}
                                                        </div>
                                                        <div class="product-price">
                                                            {{shopList.productPrice}}<span>税込</span>
                                                        </div>
                                                        <div class="sell-time" v-if="shopList.sellTime != ''">
                                                            <div class="sell-time-text">販売期間</div>
                                                            <div class="sell-time-date">{{shopList.sellTime}}</div>
                                                        </div>
                                                        <div class="product-description">
                                                            {{shopList.productDescription}}
                                                        </div>
                                                    </div>
                                                </div> <!-- /.modal-wrap -->
                                            </div>
                                            <div class="modal-control-area">
                                                <div class="modal-arrow prev" v-if="index>0"><button class="js-modalopen" :data-modal="'modal-p'+ (index - 1)">&nbsp;</button></div>
                                                <div class="modal-arrow next" v-if="index+1<limitedItem.length"><button class="js-modalopen" :data-modal="'modal-p'+ (index + 1)">&nbsp;</button></div>
                                                <div class="modal-arrow-close"><button class="js-modalclose">CLOSE ×</button></div>
                                            </div> <!-- /.modal-block -->
                                        </div>
                                    </li>
                                </template>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </main> <?php
    /**
     * Footer
     */
    ?> <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/page/assets/inc/footer.php'; ?> </div> <!-- Javascript -->
    <script>
        const list = '/<?php echo DIRNAME; ?>/assets/data/shoplist.json';
    </script> <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/' . DIRNAME . '/assets/inc/js.php'; ?> <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
    <script src="https://www.promisejs.org/polyfills/promise-7.0.4.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="/<?php echo DIRNAME; ?>/assets/js/lib/slick.min.js"></script>
    <script src="/<?php echo DIRNAME; ?>/assets/js/newrenew.js"></script> <!-- /Javascript -->
</body>

</html>