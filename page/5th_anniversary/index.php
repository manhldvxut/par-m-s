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
            <div class="mb-140" id="shoplist" v-cloak>
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

            <section class="box-present mb-140">
                <div class="container">
                    <div class="title text-center">
                        <div class="icon-title">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="190" height="80" viewBox="0 0 190 80">
                                <defs>
                                    <clipPath id="clip-path">
                                        <rect id="Rectangle_27" data-name="Rectangle 27" width="28.604" height="28.604" fill="#a87236"/>
                                    </clipPath>
                                </defs>
                                <g id="Group_2254" data-name="Group 2254" transform="translate(-278 -875)">
                                    <path id="Path" d="M19.324-22.246v2.822h-7.67V-.1H8.666V-19.424H1v-2.822Zm11.289,5.313a8.432,8.432,0,0,1,4.482,1.2,8.572,8.572,0,0,1,3.071,3.188A8.773,8.773,0,0,1,39.279-8.2a8.681,8.681,0,0,1-1.112,4.333A8.609,8.609,0,0,1,35.1-.7,8.432,8.432,0,0,1,30.613.5,8.432,8.432,0,0,1,26.131-.7,8.609,8.609,0,0,1,23.06-3.868,8.681,8.681,0,0,1,21.947-8.2a8.773,8.773,0,0,1,1.112-4.35,8.572,8.572,0,0,1,3.071-3.187A8.432,8.432,0,0,1,30.613-16.934Zm0,2.656a5.619,5.619,0,0,0-3.088.847,5.718,5.718,0,0,0-2.042,2.225,6.435,6.435,0,0,0-.714,3,6.365,6.365,0,0,0,.714,2.972A5.718,5.718,0,0,0,27.525-3a5.619,5.619,0,0,0,3.088.847A5.6,5.6,0,0,0,33.718-3a5.76,5.76,0,0,0,2.025-2.225A6.366,6.366,0,0,0,36.457-8.2a6.435,6.435,0,0,0-.714-3,5.76,5.76,0,0,0-2.025-2.225A5.6,5.6,0,0,0,30.613-14.277ZM52.2-16.934a7.436,7.436,0,0,1,3.9,1.046,7.7,7.7,0,0,1,2.789,2.922,8.889,8.889,0,0,1,1.046,4.4A10.317,10.317,0,0,1,58.886-3.8,7.87,7.87,0,0,1,56.03-.631,7.586,7.586,0,0,1,51.93.5a6.3,6.3,0,0,1-2.905-.764,8.716,8.716,0,0,1-2.54-1.959V7.969H43.762V-16.6h2.723v2.822a7.334,7.334,0,0,1,2.341-2.241A6.279,6.279,0,0,1,52.2-16.934Zm-.432,2.656a4.971,4.971,0,0,0-2.706.764,5.22,5.22,0,0,0-1.893,2.108,6.861,6.861,0,0,0-.681,3.138l.033,3.188a11.271,11.271,0,0,0,2.225,2.108,4.572,4.572,0,0,0,2.689.813,5.007,5.007,0,0,0,3.055-.93A6.107,6.107,0,0,0,56.429-5.5a7.26,7.26,0,0,0,.681-3.071,6.209,6.209,0,0,0-.664-2.905,5.251,5.251,0,0,0-1.859-2.042A5.129,5.129,0,0,0,51.764-14.277ZM67.07-24.57a2.132,2.132,0,0,1,1.61.681,2.219,2.219,0,0,1,.647,1.577,2.238,2.238,0,0,1-.647,1.561,2.108,2.108,0,0,1-1.61.7,2.108,2.108,0,0,1-1.61-.7,2.238,2.238,0,0,1-.647-1.561,2.219,2.219,0,0,1,.647-1.577A2.132,2.132,0,0,1,67.07-24.57ZM68.764-16.6V0H66.041V-14.045H63.418V-16.6Zm13.381-.332a7.829,7.829,0,0,1,3.154.581,6.9,6.9,0,0,1,1.826,1.046v2.756A10.338,10.338,0,0,0,85-13.763a7.193,7.193,0,0,0-2.855-.515,5.619,5.619,0,0,0-3.088.847,5.718,5.718,0,0,0-2.042,2.225,6.435,6.435,0,0,0-.714,3,6.365,6.365,0,0,0,.714,2.972A5.718,5.718,0,0,0,79.057-3a5.619,5.619,0,0,0,3.088.847A7.193,7.193,0,0,0,85-2.673a10.338,10.338,0,0,0,2.125-1.212v2.756A6.051,6.051,0,0,1,85.3-.066,8.031,8.031,0,0,1,82.145.5,8.432,8.432,0,0,1,77.662-.7a8.609,8.609,0,0,1-3.071-3.171A8.681,8.681,0,0,1,73.479-8.2a8.773,8.773,0,0,1,1.112-4.35,8.572,8.572,0,0,1,3.071-3.187A8.432,8.432,0,0,1,82.145-16.934ZM104.424-2.656V0H92.371V-2.656h4.416V-17.133a5.8,5.8,0,0,1-2.059,1.2,18.633,18.633,0,0,1-2.125.531v-2.855a8.943,8.943,0,0,0,3.354-1.627,13.18,13.18,0,0,0,2.357-2.357h1.461v19.59Z" transform="translate(319 926)" fill="#a87236"/>
                                    <path id="楕円形_14" data-name="楕円形 14" d="M95,1A210.644,210.644,0,0,0,58.2,4.128a141.747,141.747,0,0,0-29.984,8.509,81.714,81.714,0,0,0-11.46,5.847,48.6,48.6,0,0,0-8.582,6.655C3.413,29.876,1,34.876,1,40S3.413,50.124,8.171,54.861a48.6,48.6,0,0,0,8.582,6.655,81.714,81.714,0,0,0,11.46,5.847A141.747,141.747,0,0,0,58.2,75.872,210.644,210.644,0,0,0,95,79a210.644,210.644,0,0,0,36.8-3.128,141.747,141.747,0,0,0,29.984-8.509,81.714,81.714,0,0,0,11.46-5.847,48.6,48.6,0,0,0,8.582-6.655C186.587,50.124,189,45.124,189,40s-2.413-10.124-7.171-14.861a48.6,48.6,0,0,0-8.582-6.655,81.714,81.714,0,0,0-11.46-5.847A141.747,141.747,0,0,0,131.8,4.128,210.644,210.644,0,0,0,95,1m0-1c52.467,0,95,17.909,95,40S147.467,80,95,80,0,62.091,0,40,42.533,0,95,0Z" transform="translate(278 875)" fill="#a87236"/>
                                    <g id="Group_2255" data-name="Group 2255" transform="translate(431.698 875)">
                                        <g id="Group_2255-2" data-name="Group 2255" clip-path="url(#clip-path)">
                                            <path id="Path_3608" data-name="Path 3608" d="M28.6,14.3c-5.568-.171-8.905-.329-10.933-1.4.679-2.188,2.927-4.659,6.744-8.718-4.058,3.817-6.529,6.064-8.718,6.744C14.631,8.9,14.473,5.568,14.3,0c-.171,5.568-.329,8.9-1.4,10.933-2.188-.679-4.659-2.927-8.718-6.744,3.817,4.058,6.064,6.529,6.744,8.718C8.9,13.973,5.568,14.131,0,14.3c5.568.171,8.9.329,10.933,1.4-.679,2.188-2.927,4.659-6.744,8.718,4.058-3.817,6.529-6.064,8.718-6.744,1.067,2.028,1.225,5.364,1.4,10.933.171-5.568.329-8.9,1.4-10.933,2.188.679,4.659,2.927,8.718,6.744-3.817-4.058-6.064-6.529-6.744-8.718,2.028-1.067,5.364-1.225,10.933-1.4" fill="#a87236"/>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h2>PRESENT</h2>
                    </div>
                </div>
                <div class="slide-present">
                    <div class="swiper-container swiper-present">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="item-present">
                                    <div class="avarta">
                                        <img src="assets/images/avr-present.png" class="img-fluid w-100" alt="">
                                    </div>
                                    <div class="info">
                                        <h3>
                                            <span>タイトルが入りますタイトルが入りますタイトルが入りま タイトルが入ります</span>
                                        </h3>
                                        <div class="desc">
                                            説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります
                                        </div>
                                        <div class="bott-present">
                                            <ul>
                                                <li>
                                                    <div class="item-bott">
                                                        <div class="icon"><img src="assets/images/icon-present.png" alt=""></div>
                                                        <div class="inf">
                                                            <h5>引き換え期間</h5>
                                                            <p>2024.03.01-03.31</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="item-bott">
                                                        <div class="icon"><img src="assets/images/icon-present.png" alt=""></div>
                                                        <div class="inf">
                                                            <h5>場所</h5>
                                                            <p>場所名が入ります場所名が入ります場所名が入ります場所名が入ります</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item-present">
                                    <div class="avarta">
                                        <img src="assets/images/avr-present.png" class="img-fluid w-100" alt="">
                                    </div>
                                    <div class="info">
                                        <h3>
                                            <span>タイトルが入りますタイトルが入りますタイトルが入りま タイトルが入ります</span>
                                        </h3>
                                        <div class="desc">
                                            説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります
                                        </div>
                                        <div class="bott-present">
                                            <ul>
                                                <li>
                                                    <div class="item-bott">
                                                        <div class="icon"><img src="assets/images/icon-present.png" alt=""></div>
                                                        <div class="inf">
                                                            <h5>引き換え期間</h5>
                                                            <p>2024.03.01-03.31</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="item-bott">
                                                        <div class="icon"><img src="assets/images/icon-present.png" alt=""></div>
                                                        <div class="inf">
                                                            <h5>場所</h5>
                                                            <p>場所名が入ります場所名が入ります場所名が入ります場所名が入ります</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item-present">
                                    <div class="avarta">
                                        <img src="assets/images/avr-present.png" class="img-fluid w-100" alt="">
                                    </div>
                                    <div class="info">
                                        <h3>
                                            <span>タイトルが入りますタイトルが入りますタイトルが入りま タイトルが入ります</span>
                                        </h3>
                                        <div class="desc">
                                            説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります
                                        </div>
                                        <div class="bott-present">
                                            <ul>
                                                <li>
                                                    <div class="item-bott">
                                                        <div class="icon"><img src="assets/images/icon-present.png" alt=""></div>
                                                        <div class="inf">
                                                            <h5>引き換え期間</h5>
                                                            <p>2024.03.01-03.31</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="item-bott">
                                                        <div class="icon"><img src="assets/images/icon-present.png" alt=""></div>
                                                        <div class="inf">
                                                            <h5>場所</h5>
                                                            <p>場所名が入ります場所名が入ります場所名が入ります場所名が入ります</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item-present">
                                    <div class="avarta">
                                        <img src="assets/images/avr-present.png" class="img-fluid w-100" alt="">
                                    </div>
                                    <div class="info">
                                        <h3>
                                            <span>タイトルが入りますタイトルが入りますタイトルが入りま タイトルが入ります</span>
                                        </h3>
                                        <div class="desc">
                                            説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります
                                        </div>
                                        <div class="bott-present">
                                            <ul>
                                                <li>
                                                    <div class="item-bott">
                                                        <div class="icon"><img src="assets/images/icon-present.png" alt=""></div>
                                                        <div class="inf">
                                                            <h5>引き換え期間</h5>
                                                            <p>2024.03.01-03.31</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="item-bott">
                                                        <div class="icon"><img src="assets/images/icon-present.png" alt=""></div>
                                                        <div class="inf">
                                                            <h5>場所</h5>
                                                            <p>場所名が入ります場所名が入ります場所名が入ります場所名が入ります</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item-present">
                                    <div class="avarta">
                                        <img src="assets/images/avr-present.png" class="img-fluid w-100" alt="">
                                    </div>
                                    <div class="info">
                                        <h3>
                                            <span>タイトルが入りますタイトルが入りますタイトルが入りま タイトルが入ります</span>
                                        </h3>
                                        <div class="desc">
                                            説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります
                                        </div>
                                        <div class="bott-present">
                                            <ul>
                                                <li>
                                                    <div class="item-bott">
                                                        <div class="icon"><img src="assets/images/icon-present.png" alt=""></div>
                                                        <div class="inf">
                                                            <h5>引き換え期間</h5>
                                                            <p>2024.03.01-03.31</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="item-bott">
                                                        <div class="icon"><img src="assets/images/icon-present.png" alt=""></div>
                                                        <div class="inf">
                                                            <h5>場所</h5>
                                                            <p>場所名が入ります場所名が入ります場所名が入ります場所名が入ります</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item-present">
                                    <div class="avarta">
                                        <img src="assets/images/avr-present.png" class="img-fluid w-100" alt="">
                                    </div>
                                    <div class="info">
                                        <h3>
                                            <span>タイトルが入りますタイトルが入りますタイトルが入りま タイトルが入ります</span>
                                        </h3>
                                        <div class="desc">
                                            説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります
                                        </div>
                                        <div class="bott-present">
                                            <ul>
                                                <li>
                                                    <div class="item-bott">
                                                        <div class="icon"><img src="assets/images/icon-present.png" alt=""></div>
                                                        <div class="inf">
                                                            <h5>引き換え期間</h5>
                                                            <p>2024.03.01-03.31</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="item-bott">
                                                        <div class="icon"><img src="assets/images/icon-present.png" alt=""></div>
                                                        <div class="inf">
                                                            <h5>場所</h5>
                                                            <p>場所名が入ります場所名が入ります場所名が入ります場所名が入ります</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="swiper-event-bott">
                        <div class="swiper-btn swiper-button-prev prev-present">
                            <img src="assets/images/arr-left.png" alt="">
                        </div>
                        <div class="swiper-pagination pagination-present"></div>
                        <div class="swiper-btn swiper-button-next next-present">
                            <img src="assets/images/arr-right.png" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section class="box-event mb-140">
                <div class="container">
                    <div class="title text-center">
                        <div class="icon-title">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="190" height="80" viewBox="0 0 190 80">
                                <defs>
                                    <clipPath id="clip-path">
                                        <rect id="Rectangle_27" data-name="Rectangle 27" width="28.604" height="28.604" fill="#a87236"/>
                                    </clipPath>
                                </defs>
                                <g id="Group_2254" data-name="Group 2254" transform="translate(-278 -875)">
                                    <path id="Path_3610" data-name="Path 3610" d="M19.324-22.246v2.822h-7.67V-.1H8.666V-19.424H1v-2.822Zm11.289,5.313a8.432,8.432,0,0,1,4.482,1.2,8.572,8.572,0,0,1,3.071,3.188A8.773,8.773,0,0,1,39.279-8.2a8.681,8.681,0,0,1-1.112,4.333A8.609,8.609,0,0,1,35.1-.7,8.432,8.432,0,0,1,30.613.5,8.432,8.432,0,0,1,26.131-.7,8.609,8.609,0,0,1,23.06-3.868,8.681,8.681,0,0,1,21.947-8.2a8.773,8.773,0,0,1,1.112-4.35,8.572,8.572,0,0,1,3.071-3.187A8.432,8.432,0,0,1,30.613-16.934Zm0,2.656a5.619,5.619,0,0,0-3.088.847,5.718,5.718,0,0,0-2.042,2.225,6.435,6.435,0,0,0-.714,3,6.365,6.365,0,0,0,.714,2.972A5.718,5.718,0,0,0,27.525-3a5.619,5.619,0,0,0,3.088.847A5.6,5.6,0,0,0,33.718-3a5.76,5.76,0,0,0,2.025-2.225A6.366,6.366,0,0,0,36.457-8.2a6.435,6.435,0,0,0-.714-3,5.76,5.76,0,0,0-2.025-2.225A5.6,5.6,0,0,0,30.613-14.277ZM52.2-16.934a7.436,7.436,0,0,1,3.9,1.046,7.7,7.7,0,0,1,2.789,2.922,8.889,8.889,0,0,1,1.046,4.4A10.317,10.317,0,0,1,58.886-3.8,7.87,7.87,0,0,1,56.03-.631,7.586,7.586,0,0,1,51.93.5a6.3,6.3,0,0,1-2.905-.764,8.716,8.716,0,0,1-2.54-1.959V7.969H43.762V-16.6h2.723v2.822a7.334,7.334,0,0,1,2.341-2.241A6.279,6.279,0,0,1,52.2-16.934Zm-.432,2.656a4.971,4.971,0,0,0-2.706.764,5.22,5.22,0,0,0-1.893,2.108,6.861,6.861,0,0,0-.681,3.138l.033,3.188a11.271,11.271,0,0,0,2.225,2.108,4.572,4.572,0,0,0,2.689.813,5.007,5.007,0,0,0,3.055-.93A6.107,6.107,0,0,0,56.429-5.5a7.26,7.26,0,0,0,.681-3.071,6.209,6.209,0,0,0-.664-2.905,5.251,5.251,0,0,0-1.859-2.042A5.129,5.129,0,0,0,51.764-14.277ZM67.07-24.57a2.132,2.132,0,0,1,1.61.681,2.219,2.219,0,0,1,.647,1.577,2.238,2.238,0,0,1-.647,1.561,2.108,2.108,0,0,1-1.61.7,2.108,2.108,0,0,1-1.61-.7,2.238,2.238,0,0,1-.647-1.561,2.219,2.219,0,0,1,.647-1.577A2.132,2.132,0,0,1,67.07-24.57ZM68.764-16.6V0H66.041V-14.045H63.418V-16.6Zm13.381-.332a7.829,7.829,0,0,1,3.154.581,6.9,6.9,0,0,1,1.826,1.046v2.756A10.338,10.338,0,0,0,85-13.763a7.193,7.193,0,0,0-2.855-.515,5.619,5.619,0,0,0-3.088.847,5.718,5.718,0,0,0-2.042,2.225,6.435,6.435,0,0,0-.714,3,6.365,6.365,0,0,0,.714,2.972A5.718,5.718,0,0,0,79.057-3a5.619,5.619,0,0,0,3.088.847A7.193,7.193,0,0,0,85-2.673a10.338,10.338,0,0,0,2.125-1.212v2.756A6.051,6.051,0,0,1,85.3-.066,8.031,8.031,0,0,1,82.145.5,8.432,8.432,0,0,1,77.662-.7a8.609,8.609,0,0,1-3.071-3.171A8.681,8.681,0,0,1,73.479-8.2a8.773,8.773,0,0,1,1.112-4.35,8.572,8.572,0,0,1,3.071-3.187A8.432,8.432,0,0,1,82.145-16.934Zm14.809-5.811a8.824,8.824,0,0,1,3.9.83,6.708,6.708,0,0,1,2.689,2.274,5.747,5.747,0,0,1,.979,3.3,4.181,4.181,0,0,1-.747,2.523A5.763,5.763,0,0,1,102-12.186a7.966,7.966,0,0,1-1.893.83,6.656,6.656,0,0,1,1.893.913,6.46,6.46,0,0,1,1.776,1.776,4.485,4.485,0,0,1,.747,2.59,6.136,6.136,0,0,1-.946,3.354,6.587,6.587,0,0,1-2.64,2.357A8.436,8.436,0,0,1,97.053.5a8.787,8.787,0,0,1-3.5-.664,8.484,8.484,0,0,1-2.407-1.461V-4.914q.764.531,1.594,1.162a9.218,9.218,0,0,0,1.893,1.1,6.172,6.172,0,0,0,2.49.465,5.012,5.012,0,0,0,3.287-1.062A3.649,3.649,0,0,0,101.7-6.242a3.08,3.08,0,0,0-.681-1.959,4.711,4.711,0,0,0-1.76-1.361,5.44,5.44,0,0,0-2.308-.5H94.961v-2.656h1.992a5.912,5.912,0,0,0,3.42-.913,2.913,2.913,0,0,0,1.328-2.54,3.227,3.227,0,0,0-.664-2.025,4.542,4.542,0,0,0-1.76-1.361,5.789,5.789,0,0,0-2.424-.5,5.323,5.323,0,0,0-2.905.747,12.418,12.418,0,0,0-2.142,1.71v-3.287a6.951,6.951,0,0,1,2.241-1.328A8.006,8.006,0,0,1,96.953-22.744Z" transform="translate(319 926)" fill="#a87236"/>
                                    <path id="楕円形_14" data-name="楕円形 14" d="M95,1A210.644,210.644,0,0,0,58.2,4.128a141.747,141.747,0,0,0-29.984,8.509,81.714,81.714,0,0,0-11.46,5.847,48.6,48.6,0,0,0-8.582,6.655C3.413,29.876,1,34.876,1,40S3.413,50.124,8.171,54.861a48.6,48.6,0,0,0,8.582,6.655,81.714,81.714,0,0,0,11.46,5.847A141.747,141.747,0,0,0,58.2,75.872,210.644,210.644,0,0,0,95,79a210.644,210.644,0,0,0,36.8-3.128,141.747,141.747,0,0,0,29.984-8.509,81.714,81.714,0,0,0,11.46-5.847,48.6,48.6,0,0,0,8.582-6.655C186.587,50.124,189,45.124,189,40s-2.413-10.124-7.171-14.861a48.6,48.6,0,0,0-8.582-6.655,81.714,81.714,0,0,0-11.46-5.847A141.747,141.747,0,0,0,131.8,4.128,210.644,210.644,0,0,0,95,1m0-1c52.467,0,95,17.909,95,40S147.467,80,95,80,0,62.091,0,40,42.533,0,95,0Z" transform="translate(278 875)" fill="#a87236"/>
                                    <path id="楕円形_14-2" data-name="楕円形 14" d="M95,1A210.644,210.644,0,0,0,58.2,4.128a141.747,141.747,0,0,0-29.984,8.509,81.714,81.714,0,0,0-11.46,5.847,48.6,48.6,0,0,0-8.582,6.655C3.413,29.876,1,34.876,1,40S3.413,50.124,8.171,54.861a48.6,48.6,0,0,0,8.582,6.655,81.714,81.714,0,0,0,11.46,5.847A141.747,141.747,0,0,0,58.2,75.872,210.644,210.644,0,0,0,95,79a210.644,210.644,0,0,0,36.8-3.128,141.747,141.747,0,0,0,29.984-8.509,81.714,81.714,0,0,0,11.46-5.847,48.6,48.6,0,0,0,8.582-6.655C186.587,50.124,189,45.124,189,40s-2.413-10.124-7.171-14.861a48.6,48.6,0,0,0-8.582-6.655,81.714,81.714,0,0,0-11.46-5.847A141.747,141.747,0,0,0,131.8,4.128,210.644,210.644,0,0,0,95,1m0-1c52.467,0,95,17.909,95,40S147.467,80,95,80,0,62.091,0,40,42.533,0,95,0Z" transform="translate(278 875)" fill="#a87236"/>
                                    <g id="Group_2255" data-name="Group 2255" transform="translate(431.698 875)">
                                        <g id="Group_2255-2" data-name="Group 2255" clip-path="url(#clip-path)">
                                            <path id="Path_3608" data-name="Path 3608" d="M28.6,14.3c-5.568-.171-8.905-.329-10.933-1.4.679-2.188,2.927-4.659,6.744-8.718-4.058,3.817-6.529,6.064-8.718,6.744C14.631,8.9,14.473,5.568,14.3,0c-.171,5.568-.329,8.9-1.4,10.933-2.188-.679-4.659-2.927-8.718-6.744,3.817,4.058,6.064,6.529,6.744,8.718C8.9,13.973,5.568,14.131,0,14.3c5.568.171,8.9.329,10.933,1.4-.679,2.188-2.927,4.659-6.744,8.718,4.058-3.817,6.529-6.064,8.718-6.744,1.067,2.028,1.225,5.364,1.4,10.933.171-5.568.329-8.9,1.4-10.933,2.188.679,4.659,2.927,8.718,6.744-3.817-4.058-6.064-6.529-6.744-8.718,2.028-1.067,5.364-1.225,10.933-1.4" fill="#a87236"/>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h2>ANNIVERSARY EVENT</h2>
                    </div>
                    <div class="list-event">
                        <div class="swiper-container swiper-event">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="item-event">
                                        <div class="avarta">
                                            <img src="assets/images/avr-present.png" class="img-fluid w-100" alt="">
                                        </div>
                                        <div class="info">
                                            <h3>
                                                <span>タイトルが入りますタイトルが入り タイトルが入ります</span>
                                            </h3>
                                            <div class="desc">
                                                説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります
                                            </div>
                                            <div class="btn-click text-center">
                                                <a href="javascript:void(0)"><img src="assets/images/click.png" alt="" style="width: auto;"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item-event">
                                        <div class="avarta">
                                            <img src="assets/images/avr-present.png" class="img-fluid w-100" alt="">
                                        </div>
                                        <div class="info">
                                            <h3>
                                                <span>タイトルが入りますタイトルが入り タイトルが入ります</span>
                                            </h3>
                                            <div class="desc">
                                                説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります
                                            </div>
                                            <div class="btn-click text-center">
                                                <a href="javascript:void(0)"><img src="assets/images/click.png" alt="" style="width: auto;"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item-event">
                                        <div class="avarta">
                                            <img src="assets/images/avr-present.png" class="img-fluid w-100" alt="">
                                        </div>
                                        <div class="info">
                                            <h3>
                                                <span>タイトルが入りますタイトルが入り タイトルが入ります</span>
                                            </h3>
                                            <div class="desc">
                                                説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります
                                            </div>
                                            <div class="btn-click text-center">
                                                <a href="javascript:void(0)"><img src="assets/images/click.png" alt="" style="width: auto;"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item-event">
                                        <div class="avarta">
                                            <img src="assets/images/avr-present.png" class="img-fluid w-100" alt="">
                                        </div>
                                        <div class="info">
                                            <h3>
                                                <span>タイトルが入りますタイトルが入り タイトルが入ります</span>
                                            </h3>
                                            <div class="desc">
                                                説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります
                                            </div>
                                            <div class="btn-click text-center">
                                                <a href="javascript:void(0)"><img src="assets/images/click.png" alt="" style="width: auto;"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item-event">
                                        <div class="avarta">
                                            <img src="assets/images/avr-present.png" class="img-fluid w-100" alt="">
                                        </div>
                                        <div class="info">
                                            <h3>
                                                <span>タイトルが入りますタイトルが入り タイトルが入ります</span>
                                            </h3>
                                            <div class="desc">
                                                説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります説明が入ります
                                            </div>
                                            <div class="btn-click text-center">
                                                <a href="javascript:void(0)"><img src="assets/images/click.png" alt="" style="width: auto;"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-event-bott">
                            <div class="swiper-btn swiper-button-prev prev-event">
                                <img src="assets/images/arr-left.png" alt="">
                            </div>
                            <div class="swiper-pagination pagination-event"></div>
                            <div class="swiper-btn swiper-button-next next-event">
                                <img src="assets/images/arr-right.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="box-sns mb-140">
                <div class="container">
                    <div class="title text-center">
                        <h2>SNS</h2>
                    </div>
                    <div class="content-sns">
                        <div class="avarta"><img src="assets/images/ownly.png" class="img-fluid w-100" alt=""></div>
                    </div>
                </div>
            </section>
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