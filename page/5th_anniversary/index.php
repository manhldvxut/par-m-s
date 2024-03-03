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
                <div class="container">
                    <div class="ribo-text-body">
                        <div class="desc">
                            「変わる、はじまり。」2019年3月16日ー<br>
                            2024年3月16日。“これまで、いま、これから、人々、街。”たくさんのご縁をいただき迎えた5周年。<br>
                            あなたと錦糸町PARCO、「五縁がありまして。」
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-vue" id="shoplist" v-cloak>
                <section class="mb-140">
                    <div class="list-block limited-item">
                        <div class="container">
                            <div class="list-block-body">
                                <div class="title text-center">
                                    <div class="icon-title">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="190" height="80" viewBox="0 0 190 80">
                                            <defs>
                                                <clipPath id="clip-path">
                                                    <rect id="Rectangle_27" data-name="Rectangle 27" width="28.604" height="28.604" fill="#a87236"/>
                                                </clipPath>
                                            </defs>
                                            <g id="Group_2254" data-name="Group 2254" transform="translate(-278 -875)">
                                                <path id="Path_3611" data-name="Path 3611" d="M19.324-22.246v2.822h-7.67V-.1H8.666V-19.424H1v-2.822Zm11.289,5.313a8.432,8.432,0,0,1,4.482,1.2,8.572,8.572,0,0,1,3.071,3.188A8.773,8.773,0,0,1,39.279-8.2a8.681,8.681,0,0,1-1.112,4.333A8.609,8.609,0,0,1,35.1-.7,8.432,8.432,0,0,1,30.613.5,8.432,8.432,0,0,1,26.131-.7,8.609,8.609,0,0,1,23.06-3.868,8.681,8.681,0,0,1,21.947-8.2a8.773,8.773,0,0,1,1.112-4.35,8.572,8.572,0,0,1,3.071-3.187A8.432,8.432,0,0,1,30.613-16.934Zm0,2.656a5.619,5.619,0,0,0-3.088.847,5.718,5.718,0,0,0-2.042,2.225,6.435,6.435,0,0,0-.714,3,6.365,6.365,0,0,0,.714,2.972A5.718,5.718,0,0,0,27.525-3a5.619,5.619,0,0,0,3.088.847A5.6,5.6,0,0,0,33.718-3a5.76,5.76,0,0,0,2.025-2.225A6.366,6.366,0,0,0,36.457-8.2a6.435,6.435,0,0,0-.714-3,5.76,5.76,0,0,0-2.025-2.225A5.6,5.6,0,0,0,30.613-14.277ZM52.2-16.934a7.436,7.436,0,0,1,3.9,1.046,7.7,7.7,0,0,1,2.789,2.922,8.889,8.889,0,0,1,1.046,4.4A10.317,10.317,0,0,1,58.886-3.8,7.87,7.87,0,0,1,56.03-.631,7.586,7.586,0,0,1,51.93.5a6.3,6.3,0,0,1-2.905-.764,8.716,8.716,0,0,1-2.54-1.959V7.969H43.762V-16.6h2.723v2.822a7.334,7.334,0,0,1,2.341-2.241A6.279,6.279,0,0,1,52.2-16.934Zm-.432,2.656a4.971,4.971,0,0,0-2.706.764,5.22,5.22,0,0,0-1.893,2.108,6.861,6.861,0,0,0-.681,3.138l.033,3.188a11.271,11.271,0,0,0,2.225,2.108,4.572,4.572,0,0,0,2.689.813,5.007,5.007,0,0,0,3.055-.93A6.107,6.107,0,0,0,56.429-5.5a7.26,7.26,0,0,0,.681-3.071,6.209,6.209,0,0,0-.664-2.905,5.251,5.251,0,0,0-1.859-2.042A5.129,5.129,0,0,0,51.764-14.277ZM67.07-24.57a2.132,2.132,0,0,1,1.61.681,2.219,2.219,0,0,1,.647,1.577,2.238,2.238,0,0,1-.647,1.561,2.108,2.108,0,0,1-1.61.7,2.108,2.108,0,0,1-1.61-.7,2.238,2.238,0,0,1-.647-1.561,2.219,2.219,0,0,1,.647-1.577A2.132,2.132,0,0,1,67.07-24.57ZM68.764-16.6V0H66.041V-14.045H63.418V-16.6Zm13.381-.332a7.829,7.829,0,0,1,3.154.581,6.9,6.9,0,0,1,1.826,1.046v2.756A10.338,10.338,0,0,0,85-13.763a7.193,7.193,0,0,0-2.855-.515,5.619,5.619,0,0,0-3.088.847,5.718,5.718,0,0,0-2.042,2.225,6.435,6.435,0,0,0-.714,3,6.365,6.365,0,0,0,.714,2.972A5.718,5.718,0,0,0,79.057-3a5.619,5.619,0,0,0,3.088.847A7.193,7.193,0,0,0,85-2.673a10.338,10.338,0,0,0,2.125-1.212v2.756A6.051,6.051,0,0,1,85.3-.066,8.031,8.031,0,0,1,82.145.5,8.432,8.432,0,0,1,77.662-.7a8.609,8.609,0,0,1-3.071-3.171A8.681,8.681,0,0,1,73.479-8.2a8.773,8.773,0,0,1,1.112-4.35,8.572,8.572,0,0,1,3.071-3.187A8.432,8.432,0,0,1,82.145-16.934ZM104.424-2.656V0H92.371V-2.656h4.416V-17.133a5.8,5.8,0,0,1-2.059,1.2,18.633,18.633,0,0,1-2.125.531v-2.855a8.943,8.943,0,0,0,3.354-1.627,13.18,13.18,0,0,0,2.357-2.357h1.461v19.59Z" transform="translate(319 926)" fill="#a87236"/>
                                                <path id="楕円形_14" data-name="楕円形 14" d="M95,1A210.644,210.644,0,0,0,58.2,4.128a141.747,141.747,0,0,0-29.984,8.509,81.714,81.714,0,0,0-11.46,5.847,48.6,48.6,0,0,0-8.582,6.655C3.413,29.876,1,34.876,1,40S3.413,50.124,8.171,54.861a48.6,48.6,0,0,0,8.582,6.655,81.714,81.714,0,0,0,11.46,5.847A141.747,141.747,0,0,0,58.2,75.872,210.644,210.644,0,0,0,95,79a210.644,210.644,0,0,0,36.8-3.128,141.747,141.747,0,0,0,29.984-8.509,81.714,81.714,0,0,0,11.46-5.847,48.6,48.6,0,0,0,8.582-6.655C186.587,50.124,189,45.124,189,40s-2.413-10.124-7.171-14.861a48.6,48.6,0,0,0-8.582-6.655,81.714,81.714,0,0,0-11.46-5.847A141.747,141.747,0,0,0,131.8,4.128,210.644,210.644,0,0,0,95,1m0-1c52.467,0,95,17.909,95,40S147.467,80,95,80,0,62.091,0,40,42.533,0,95,0Z" transform="translate(278 875)" fill="#a87236"/>
                                                <g id="Group_2255" data-name="Group 2255" transform="translate(431.698 875)">
                                                    <g id="Group_2255-2" data-name="Group 2255" clip-path="url(#clip-path)">
                                                        <path id="Path_3608" data-name="Path 3608" d="M28.6,14.3c-5.568-.171-8.905-.329-10.933-1.4.679-2.188,2.927-4.659,6.744-8.718-4.058,3.817-6.529,6.064-8.718,6.744C14.631,8.9,14.473,5.568,14.3,0c-.171,5.568-.329,8.9-1.4,10.933-2.188-.679-4.659-2.927-8.718-6.744,3.817,4.058,6.064,6.529,6.744,8.718C8.9,13.973,5.568,14.131,0,14.3c5.568.171,8.9.329,10.933,1.4-.679,2.188-2.927,4.659-6.744,8.718,4.058-3.817,6.529-6.064,8.718-6.744,1.067,2.028,1.225,5.364,1.4,10.933.171-5.568.329-8.9,1.4-10.933,2.188.679,4.659,2.927,8.718,6.744-3.817-4.058-6.064-6.529-6.744-8.718,2.028-1.067,5.364-1.225,10.933-1.4" fill="#a87236"/>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <h2>
                                        <span class="wow" data-wow-offset="100">LIMITED ITEM</span>
                                    </h2>
                                </div>
                                <ul class="item-list" v-cloak>
                                    <template v-for="(shopList, index) in limitedItem">
                                        <li :class="'item ' + shopList.category" v-bind:key="index">
                                            <div class="front-wrap">
                                                <a href="javascript:void()" class="js-modalopen" :data-modal="'modal-p'+index">
                                                    <div class="front-cont">
                                                        <div class="img-wrap"> <img :src=" '/page/5th_anniversary/assets/images/limited/' + shopList.image01img + '.jpg' " :alt="shopList.productName1"> <!-- /.img-wrap -->
                                                        </div>
                                                        <div class="detail">
                                                            <div class="logo"> <img :src=" '/page/5th_anniversary/assets/images/limited/logo/' + shopList.logo + '.png' " :alt="shopList.shopName">
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </a>
                                                <div class="badge" v-if="shopList.badge != ''">
                                                    <div class="badge-text">先行販売</div>
                                                </div>
                                            </div>
                                            <div :class="'modal-block js-modal newrenew-modal modal-p' + index">
                                                <div class="modal-bg js-modalclose"></div>
                                                <div class="modal-wrap"> <button class="modal-close js-modalclose"></button>
                                                    
                                                    <div class="modal-cont">
                                                        <div class="badge" v-if="shopList.badge != ''">
                                                            <div class="badge-text">先行販売</div>
                                                        </div>
                                                        <div class="img-wrap">
                                                            <div class="img-slider js-imgslider">
                                                                <div class="img"><img :src=" '/page/5th_anniversary/assets/images/limited/' + shopList.image01img + '.jpg' " :alt="shopList.productName1"></div>
                                                                <div class="img" v-if="shopList.image02img != ''"><img :src=" '/page/5th_anniversary/assets/images/limited/' + shopList.image02img + '.jpg' " :alt="shopList.productName2"></div>
                                                                <div class="img" v-if="shopList.image03img != ''"><img :src=" '/page/5th_anniversary/assets/images/limited/' + shopList.image03img + '.jpg' " :alt="shopList.productName3"></div>
                                                                <div class="img" v-if="shopList.image04img != ''"><img :src=" '/page/5th_anniversary/assets/images/limited/' + shopList.image04img + '.jpg' " :alt="shopList.productName4"></div>
                                                                <div class="img" v-if="shopList.image05img != ''"><img :src=" '/page/5th_anniversary/assets/images/limited/' + shopList.image05img + '.jpg' " :alt="shopList.productName5"></div>
                                                            </div> <!-- /.img-wrap -->
                                                        </div>
                                                        <div class="detail">
                                                            <div class="modal-header">
                                                                <div class="logo"> <img :src=" '/page/5th_anniversary/assets/images/limited/logo/' + shopList.logo + '.png' " :alt="shopList.name"></div>
                                                                <div class="product-title">
                                                                    {{shopList.shopName}}
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="product-info info01" v-if="shopList.productName1 != ''">
                                                                    <div class="product-name">
                                                                        <span v-html="brTxt(shopList.productName1)"></span>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <span v-html="brTxt(shopList.productPrice1)"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="product-info info02" v-if="shopList.productName2 != ''">
                                                                    <div class="product-name">
                                                                        <span v-html="brTxt(shopList.productName2)"></span>
                                                                    </div>
                                                                    <div class="product-price" v-html="brTxt(shopList.productPrice2)">
                                                                    </div>
                                                                </div>
                                                                <div class="product-info info03" v-if="shopList.productName3 != ''">
                                                                    <div class="product-name">
                                                                        <span v-html="brTxt(shopList.productName3)"></span>
                                                                    </div>
                                                                    <div class="product-price" v-html="brTxt(shopList.productPrice3)">
                                                                    </div>
                                                                </div>

                                                                <div class="product-info info04" v-if="shopList.productName4 != ''">
                                                                    <div class="product-name">
                                                                        <span v-html="brTxt(shopList.productName4)"></span>
                                                                    </div>
                                                                    <div class="product-price" v-html="brTxt(shopList.productPrice4)">
                                                                    </div>
                                                                </div>
                                                                <div class="product-info info05" v-if="shopList.productName5 != ''">
                                                                    <div class="product-name">
                                                                        <span v-html="brTxt(shopList.productName5)"></span>
                                                                    </div>
                                                                    <div class="product-price" v-html="brTxt(shopList.productPrice5)">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="sell-time" v-if="shopList.sellTime != ''">
                                                                <div class="sell-time-text">販売期間</div>
                                                                <div class="sell-time-date">{{shopList.sellTime}}</div>
                                                            </div>
                                                            <div class="product-description" v-html="brTxt(shopList.productDescription)"></div>
                                                        </div>
                                                    </div> <!-- /.modal-wrap -->
                                                </div>
                                                <div class="modal-control-area">
                                                    <div class="modal-arrow prev" v-if="index>0">
                                                        <button class="js-modalopen" :data-modal="'modal-p'+ (index - 1)">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="29.687" height="30.709" viewBox="0 0 29.687 30.709">
                                                                <g id="Group_2273" data-name="Group 2273" transform="translate(0.602 0.515)">
                                                                    <path id="Path_3330" data-name="Path 3330" d="M25.667,0H0" transform="translate(2.919 14.84)" fill="none" stroke="#a87238" stroke-linecap="round" stroke-width="1"/>
                                                                    <path id="Path_3327" data-name="Path 3327" d="M0,0S12.014.369,14.839,12.258" transform="translate(12.258) rotate(90)" fill="none" stroke="#a87238" stroke-linecap="round" stroke-width="1"/>
                                                                    <path id="Path_3328" data-name="Path 3328" d="M14.839,0S2.825.369,0,12.258" transform="translate(12.258 14.84) rotate(90)" fill="none" stroke="#a87238" stroke-linecap="round" stroke-width="1"/>
                                                                </g>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="modal-arrow next" v-if="index+1<limitedItem.length">
                                                        <button class="js-modalopen" :data-modal="'modal-p'+ (index + 1)">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="29.687" height="30.709" viewBox="0 0 29.687 30.709">
                                                                <g id="Group_2273" data-name="Group 2273" transform="translate(0.5 0.515)">
                                                                    <path id="Path_3330" data-name="Path 3330" d="M0,0H25.667" transform="translate(0 14.84)" fill="none" stroke="#a87238" stroke-linecap="round" stroke-width="1"/>
                                                                    <path id="Path_3327" data-name="Path 3327" d="M0,12.258S12.014,11.889,14.839,0" transform="translate(28.585) rotate(90)" fill="none" stroke="#a87238" stroke-linecap="round" stroke-width="1"/>
                                                                    <path id="Path_3328" data-name="Path 3328" d="M14.839,12.258S2.825,11.889,0,0" transform="translate(28.585 14.84) rotate(90)" fill="none" stroke="#a87238" stroke-linecap="round" stroke-width="1"/>
                                                                </g>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="modal-arrow-close"><button class="js-modalclose">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="161" height="54" viewBox="0 0 161 54">
                                                                <g id="close" transform="translate(-318.25 -900)">
                                                                    <text id="close-2" data-name="close" transform="translate(384 935)" fill="#a87236" font-size="32" font-family="SegoeUI, Segoe UI"><tspan x="0" y="0">close</tspan></text>
                                                                    <line id="Line_8" data-name="Line 8" x2="161" transform="translate(318.25 953.5)" fill="none" stroke="#a87236" stroke-width="1"/>
                                                                    <g id="Group_2277" data-name="Group 2277" transform="translate(-147.209 113.509)">
                                                                        <path id="Path_3330" data-name="Path 3330" d="M0,0H36.768" transform="translate(485.209 824.99) rotate(-45)" fill="none" stroke="#a87238" stroke-linecap="round" stroke-width="1"/>
                                                                        <path id="Path_3609" data-name="Path 3609" d="M0,0H36.768" transform="translate(485.21 798.992) rotate(45)" fill="none" stroke="#a87238" stroke-linecap="round" stroke-width="1"/>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </button></div>
                                                </div> <!-- /.modal-block -->
                                            </div>
                                        </li>
                                    </template>
                                </ul>
                            </div>
                        </div>

                    </div>
                </section>

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
                            <h2><span>PRESENT</span></h2>
                        </div>
                    </div>
                    <div class="slide-present">
                        <div class="swiper-container swiper-present">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper" v-cloak>
                                <template v-for="(shopList, index) in present">
                                    <div :class="'swiper-slide ' + shopList.category" v-bind:key="index">
                                        <div class="item-present">
                                            <div class="avarta">
                                                <img :src=" '/page/5th_anniversary/assets/images/present/' + shopList.image + '.jpg' " :alt="shopList.title" class="img-fluid w-100">
                                            </div>
                                            <div class="info">
                                                <h3>
                                                    <span v-html="brTxt(shopList.title)"></span>
                                                </h3>
                                                <div class="desc" v-html="brTxt(shopList.description)">
                                                </div>
                                                <div class="bott-present">
                                                    <ul>
                                                        <li>
                                                            <div class="item-bott">
                                                                <div class="icon"><img src="assets/images/icon-present.png" alt=""></div>
                                                                <div class="inf">
                                                                    <h5>引き換え期間</h5>
                                                                    <p v-html="brTxt(shopList.time)"></p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="item-bott">
                                                                <div class="icon"><img src="assets/images/icon-present.png" alt=""></div>
                                                                <div class="inf">
                                                                    <h5>場所</h5>
                                                                    <p v-html="brTxt(shopList.adress)"></p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </template>
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
                            <h2><span>ANNIVERSARY EVENT</span></h2>
                        </div>
                    </div>
                    <div class="list-event" v-cloak>
                        <div class="swiper-container swiper-event">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <template v-for="(shopList, index) in anniversaryEvent">
                                    <div :class="'swiper-slide ' + shopList.category" v-bind:key="index">
                                        <div class="item-event">
                                            <div class="avarta">
                                                <img :src=" '/page/5th_anniversary/assets/images/anniversary/' + shopList.image + '.jpg' " :alt="shopList.title" class="img-fluid w-100">
                                            </div>
                                            <div class="info">
                                                <h3>
                                                    <span v-html="brTxt(shopList.title)"></span>
                                                </h3>
                                                <div class="desc" v-html="brTxt(shopList.description)"></div>
                                                <div class="btn-click text-center">
                                                    <a :href="shopList.link" target="_blank">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="126" height="33.234" viewBox="0 0 126 33.234">
                                                            <g id="Group_2269" data-name="Group 2269" transform="translate(-328.75 -914.766)">
                                                                <path id="Path_3612" data-name="Path 3612" d="M8.5-13.945a6.447,6.447,0,0,1,2.6.479,5.685,5.685,0,0,1,1.5.861v2.27a8.513,8.513,0,0,0-1.75-1A5.924,5.924,0,0,0,8.5-11.758a4.628,4.628,0,0,0-2.543.7A4.709,4.709,0,0,0,4.279-9.229a5.3,5.3,0,0,0-.588,2.475,5.242,5.242,0,0,0,.588,2.447A4.709,4.709,0,0,0,5.961-2.475a4.628,4.628,0,0,0,2.543.7A5.924,5.924,0,0,0,10.855-2.2a8.513,8.513,0,0,0,1.75-1V-.93a4.983,4.983,0,0,1-1.5.875A6.614,6.614,0,0,1,8.5.41,6.944,6.944,0,0,1,4.813-.574,7.09,7.09,0,0,1,2.283-3.186a7.149,7.149,0,0,1-.916-3.568,7.225,7.225,0,0,1,.916-3.582,7.059,7.059,0,0,1,2.529-2.625A6.944,6.944,0,0,1,8.5-13.945Zm10.035-5.742V0H16.3V-19.687Zm6.836-.547a1.756,1.756,0,0,1,1.326.561,1.827,1.827,0,0,1,.533,1.3A1.843,1.843,0,0,1,26.7-17.09a1.736,1.736,0,0,1-1.326.574,1.736,1.736,0,0,1-1.326-.574,1.843,1.843,0,0,1-.533-1.285,1.827,1.827,0,0,1,.533-1.3A1.756,1.756,0,0,1,25.375-20.234Zm1.395,6.563V0H24.527V-11.566h-2.16v-2.105Zm11.02-.273a6.447,6.447,0,0,1,2.6.479,5.685,5.685,0,0,1,1.5.861v2.27a8.513,8.513,0,0,0-1.75-1,5.924,5.924,0,0,0-2.352-.424,4.628,4.628,0,0,0-2.543.7,4.709,4.709,0,0,0-1.682,1.832,5.3,5.3,0,0,0-.588,2.475,5.242,5.242,0,0,0,.588,2.447,4.709,4.709,0,0,0,1.682,1.832,4.628,4.628,0,0,0,2.543.7A5.924,5.924,0,0,0,40.141-2.2a8.513,8.513,0,0,0,1.75-1V-.93a4.983,4.983,0,0,1-1.5.875,6.614,6.614,0,0,1-2.6.465A6.944,6.944,0,0,1,34.1-.574a7.09,7.09,0,0,1-2.529-2.611,7.149,7.149,0,0,1-.916-3.568,7.225,7.225,0,0,1,.916-3.582A7.059,7.059,0,0,1,34.1-12.961,6.944,6.944,0,0,1,37.789-13.945Zm19.879.273L51.324-7.711,58.023,0H55.18L49.766-6.234l-1.941,1.8V0H45.582V-19.687h2.242V-7l6.809-6.672Zm5.715-4.648v12.3H61.141v-12.3ZM62.262-3.336a1.844,1.844,0,0,1,1.354.561,1.844,1.844,0,0,1,.561,1.354,1.858,1.858,0,0,1-.561,1.34,1.822,1.822,0,0,1-1.354.574,1.822,1.822,0,0,1-1.354-.574,1.858,1.858,0,0,1-.561-1.34,1.844,1.844,0,0,1,.561-1.354A1.844,1.844,0,0,1,62.262-3.336Z" transform="translate(337 935)" fill="#a87236"/>
                                                                <line id="Line_8" data-name="Line 8" x2="126" transform="translate(328.75 947.5)" fill="none" stroke="#a87236" stroke-width="1"/>
                                                            </g>
                                                        </svg>
                                                        <svg class="svg-arr" xmlns="http://www.w3.org/2000/svg" width="22.438" height="23.26" viewBox="0 0 22.438 23.26">
                                                            <g id="Group_2274" data-name="Group 2274" transform="translate(-481.781 -794.432)">
                                                                <path id="Union_3" data-name="Union 3" d="M-1232.49-5581.03a.5.5,0,0,1-.484-.5v-.016a13.821,13.821,0,0,1,1.3-4.968,12.02,12.02,0,0,1,2.861-3.886,11.565,11.565,0,0,1,2.632-1.761h-18.54a.5.5,0,0,1-.5-.5.5.5,0,0,1,.5-.5h18.538a11.537,11.537,0,0,1-2.63-1.76,12.035,12.035,0,0,1-2.861-3.887,13.814,13.814,0,0,1-1.3-4.968v-.016a.5.5,0,0,1,.485-.5.5.5,0,0,1,.515.484,13.03,13.03,0,0,0,1.221,4.608,11.044,11.044,0,0,0,2.625,3.547,11.3,11.3,0,0,0,4.964,2.5l.008,0h0a.492.492,0,0,1,.211.115l.005,0,.009.009a.5.5,0,0,1,.134.239v.006l0,.008,0,.016,0,.01,0,.014v.049s0,.008,0,.012,0,.009,0,.013v.024s0,.009,0,.013v.012l0,.014,0,.01,0,.016,0,.008v.006a.5.5,0,0,1-.134.239l-.009.009-.005,0-.014.012h0a.506.506,0,0,1-.2.1h0l-.007,0a11.285,11.285,0,0,0-4.964,2.5,11.034,11.034,0,0,0-2.625,3.549,13.024,13.024,0,0,0-1.221,4.606.5.5,0,0,1-.5.484Z" transform="translate(1727 6398.722)" fill="#a87238"/>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </template>
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
                </section>
            </div>

            <section class="box-sns mb-140">
                <div class="container contents-wrap">
                    <div class="title text-center">
                        <h2><span>SNS</span></h2>
                    </div>
                    <div class="contents-block contents-blog shopblog">
                        <div id="ownlyUgcWidget_29925_1707903257845"></div><script charset="utf-8" src="https://static.ssapp.jp/story_gadget/js/ownly_story_embedded.js" id="ownly_ugc"></script>
                        <script> ownlyStoryGadget.generate({"event_id":29925,"wrapper":"ownlyUgcWidget_29925_1707903257845","sort":"new","count":8,"modal_view":"1","aspect":"default","pc_column":"4","sp_column":"2","link_keyword":"","sns_select":"all","theme":"kanban","list_author":1,"text":1,"post_date":1,"more":0,"sns_icon":1,"group":""});</script>

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