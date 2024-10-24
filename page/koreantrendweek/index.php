<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/assets/inc/global-config.php';
//下記のパス「demo」を変更
include_once $_SERVER['DOCUMENT_ROOT'].'/page/koreantrendweek/assets/inc/config.php';

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
$pege_title = 'KOREAN POP WEEK｜福岡PARCO';
$pege_description = 'アジアの玄関口であるここ福岡で、PARCOを舞台に韓国のトレンドを体験できるKOREAN POP WEEKを初開催。日本初上陸のファッションPOPUPやコスメ体験、スペシャルゲストをお呼びしたトークイベントを是非ご堪能ください。';
$pege_keywords = '';
$page_shareurl = 'https://'.STORE_NAME.'.parco.jp/page/koreantrendweek/'; //必ずディレクトリ名を変更する

?>
<!DOCTYPE html> 
<html lang="ja">
<head>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/page/assets/inc/meta.php';?>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/inc/tagmanager1.php';?>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/assets/inc/css.php';?>
</head>

<body class="<?php echo STORE_NAME; ?> page-tag" id="top">
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/inc/tagmanager2.php';?>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/page/assets/inc/svgs.php';?>

<?php
/**
 * Header
 */
?>
<?php //include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/assets/inc/header.php'; ?><!-- -->


<?php
/**
 * Main contents
 */
?>

<div class="loading d-none">
    <div id="loading_ware"></div>
    <div class="loading__text">
        <div id="loading_text">0</div>
        <span>%</span>
    </div>
    <div class="next-sound-line hidden">
        <div class="ui-sound-toggle">
            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect class="ui-sound-toggle-static" x="0.5" y="0.5" width="27" height="27" rx="13.5" stroke="currentColor" stroke-opacity="0.5" stroke-dasharray="2 2"></rect>
                <g class="ui-sound-toggle-hover-wrap">
                  <rect class="ui-sound-toggle-hover" x="0.5" y="0.5" width="27" height="27" rx="13.5" stroke="currentColor" stroke-opacity="1"></rect>
                </g>
                <g class="ui-sound-toggle-rects">
                  <rect x="6.125" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(2.47691px);"></rect>
                  <rect x="7" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(2.01119px);"></rect>
                  <rect x="7.875" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(1.05305px);"></rect>
                  <rect x="8.75" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(-0.162906px);"></rect>
                  <rect x="9.625" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(-1.33898px);"></rect>
                  <rect x="10.5" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(-2.18723px);"></rect>
                  <rect x="11.375" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(-2.49996px);"></rect>
                  <rect x="12.25" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(-2.20062px);"></rect>
                  <rect x="13.125" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(-1.36249px);"></rect>
                  <rect x="14" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(-0.190774px);"></rect>
                  <rect x="14.875" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(1.02765px);"></rect>
                  <rect x="15.75" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(1.99447px);"></rect>
                  <rect x="16.625" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(2.47297px);"></rect>
                  <rect x="17.5" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(2.34601px);"></rect>
                  <rect x="18.375" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(1.64466px);"></rect>
                  <rect x="19.25" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(0.540636px);"></rect>
                  <rect x="20.125" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(-0.695749px);"></rect>
                </g>
            </svg>
        </div>
    </div>
    <div class="loading__body blur">
        <div class="video">
            <video id="splash_ver" muted>
              <source src="/<?php echo DIRNAME; ?>/assets/video/splash_ver.mp4" type="video/mp4">
            </video>
        </div>
    </div>

    <div class="select__sound hidden">
        <div class="select__sound-body">
            <div class="ui-sound-toggle">
                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect class="ui-sound-toggle-static" x="0.5" y="0.5" width="27" height="27" rx="13.5" stroke="currentColor" stroke-opacity="0.5" stroke-dasharray="2 2"></rect>
                    <g class="ui-sound-toggle-hover-wrap">
                      <rect class="ui-sound-toggle-hover" x="0.5" y="0.5" width="27" height="27" rx="13.5" stroke="currentColor" stroke-opacity="1"></rect>
                    </g>
                    <g class="ui-sound-toggle-rects">
                      <rect x="6.125" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(2.47691px);"></rect>
                      <rect x="7" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(2.01119px);"></rect>
                      <rect x="7.875" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(1.05305px);"></rect>
                      <rect x="8.75" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(-0.162906px);"></rect>
                      <rect x="9.625" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(-1.33898px);"></rect>
                      <rect x="10.5" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(-2.18723px);"></rect>
                      <rect x="11.375" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(-2.49996px);"></rect>
                      <rect x="12.25" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(-2.20062px);"></rect>
                      <rect x="13.125" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(-1.36249px);"></rect>
                      <rect x="14" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(-0.190774px);"></rect>
                      <rect x="14.875" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(1.02765px);"></rect>
                      <rect x="15.75" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(1.99447px);"></rect>
                      <rect x="16.625" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(2.47297px);"></rect>
                      <rect x="17.5" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(2.34601px);"></rect>
                      <rect x="18.375" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(1.64466px);"></rect>
                      <rect x="19.25" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(0.540636px);"></rect>
                      <rect x="20.125" y="14" width="1.75" height="1.75" rx="0.875" fill="currentColor" style="transform: translateY(-0.695749px);"></rect>
                    </g>
                </svg>
            </div>
            <div class="select__sound-choice">
                <div class="select__sound-choice-item select__sound-choice-item-on">ON</div>
                <div class="select__sound-choice-item select__sound-choice-item-off">OFF</div>
            </div>
            <div class="select__sound-text">Select sound</div>
        </div>
        
    </div>

    <!-- <div class="bg-cover"> </div> -->
</div>
<main class="main">
    <div class="nav hidden">
        <div class="nav-logo">
            <a href="" class="nav-logo__link">
                <img src="/<?php echo DIRNAME; ?>/assets/images/pc_logo.png" class="" alt="<?php echo $pege_title; ?>">
            </a>
        </div>
        <ul class="nav-list">
            <li class="nav-list__item">
                <a href="" class="nav-list__link">FASHION</a>
            </li>
            <li class="nav-list__item">
                <a href="" class="nav-list__link">COSME</a>
            </li>
            <li class="nav-list__item">
                <a href="" class="nav-list__link">TALK EVENT</a>
            </li>
            <li class="nav-list__item">
                <a href="" class="nav-list__link">K-POP</a>
            </li>
            <li class="nav-list__item">
                <a href="" class="nav-list__link">NOVELTY</a>
            </li>
        </ul>
    </div>
    <div class="main-video">
        <video id="main_video" muted>
            <source src="/<?php echo DIRNAME; ?>/assets/video/movie-short.mp4" type="video/mp4">
        </video>
    </div>
    <div class="padding-main"></div>
    <section class="fukuoka-parco" style="display: block">
        <div class="fukuoka-parco__img">
            <img src="/<?php echo DIRNAME; ?>/assets/images/fukuoka-parco.svg" class="" alt="fukuoka parco">
        </div>
        <div class="fukuoka-parco__body">
            <div class="fukuoka-parco__box">
                <div class="fukuoka-parco__text">

                    <div class="desc">
                        <div class="icon-starfu starfu-1"><img src="assets/images/icon-star.png" alt=""></div>
                        <div class="icon-starfu starfu-2"><img src="assets/images/icon-star.png" alt=""></div>
                        <div class="icon-letter d-none">
                            <img src="assets/images/letter.png" alt="">
                        </div>
                        KOREAN POP WEEKが福岡PARCOで開催！<br>
                        企画の概要が入ります 企画の概要が入ります 企画の概要が入ります 企画の概要が入ります 企画の概要が入ります 企画の概要が入ります 企画の概要が入ります 企画の概要が入ります 企画の概要が入ります 企画の概要が入ります 企画の概要が入ります企画の概要が入ります 企画の概要が入ります企画の概要が入ります 企画の概要が入ります企画の概要が入ります 企画の概要が入ります
                    </div>
                </div>
            </div>
        </div>
        <div class="fukuoka-parco__inv">
            <img src="/<?php echo DIRNAME; ?>/assets/images/inv.svg" class="" alt="INVITSTION KOREAN POP WEEK">
        </div>
    </section>

    <div class="head-main text-center">
        <img src="assets/images/title-studio.png" alt="">
    </div>
    <div class="head-main-mb d-none text-center">
        <img src="assets/images/title-studio-mb.png" alt="">
    </div>
    <section class="box-studio">
        <div class="content-txt text-center">
            <div class="container">
                <p>福岡発のトレンドメディアARNEがプロデュースする、韓国の「今」を体感できるPOP UP STUDIO。
                    日本初上陸のファッションブランドや最新コスメが登場。</p>
            </div>
        </div>
        <div class="fashion-popup">
            <div class="container">
                <div class="title-box text-center">
                    <h3>FASHION POP UP</h3>
                    <p>多数のK-POPアイドルが愛用する２つのファッションブランドが日本初上陸！王道Y2KブランドMSKN2ND（ムンスコンセカンド）、</p>
                    <p>そして大流行バレエコアスタイルのpainorpleasure（ペインオアプレジャー）</p>
                    <p>さらに、サンリオ「クロミ」ちゃんとのコラボアイテムも限定発売！</p>
                </div>
            </div>
        </div>
        <div class="list-fashion">
            <div class="container">
                <div class="item-fashion">
                    <div class="brand">
                        <div class="avr-brand"><img src="assets/images/brand-1.png" alt=""></div>
                    </div>
                    <div class="content-item-fashion">
                        <div class="left-txt">
                            <div class="info-brand">
                                <h3>MSKN2ND</h3>
                                <div class="insta">
                                    <a href=""><img src="assets/images/pc_btn_insta.png" alt=""></a>
                                </div>
                                <div class="date-place">
                                    <div class="date">11/21-11/25</div>
                                    <div class="place">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18.364" height="22" viewBox="0 0 18.364 22">
                                                <g id="Icon_feather-map-pin" data-name="Icon feather-map-pin" transform="translate(-3.5 -0.5)">
                                                    <path id="Path_83" data-name="Path 83" d="M20.864,9.682c0,6.364-8.182,11.818-8.182,11.818S4.5,16.045,4.5,9.682a8.182,8.182,0,1,1,16.364,0Z" transform="translate(0 0)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                    <path id="Path_84" data-name="Path 84" d="M18.955,13.227A2.727,2.727,0,1,1,16.227,10.5,2.727,2.727,0,0,1,18.955,13.227Z" transform="translate(-3.545 -3.545)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                </g>
                                            </svg>
                                        </div>
                                        <span>本館1F GATE</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-product">
                            <div class="slide-product">
                                <div class="item-slide">
                                    <div class="avarta"><img src="assets/images/fs-1-1.png" alt=""></div>
                                </div>
                                <div class="item-slide">
                                    <div class="avarta"><img src="assets/images/fs-1-2.png" alt=""></div>
                                </div>
                                <div class="item-slide">
                                    <div class="avarta"><img src="assets/images/fs-1-3.png" alt=""></div>
                                </div>
                            </div>

                            <div class="view-more text-center">
                                <a href="">
                                    <span>VIEW MORE</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20.653" height="5.918" viewBox="0 0 20.653 5.918">
                                        <g id="Group_23" data-name="Group 23" transform="translate(-17.698 0.7)">
                                            <line id="Line_7" data-name="Line 7" x1="19.453" transform="translate(18.198 4.519)" fill="none" stroke="#141419" stroke-linecap="round" stroke-width="1"/>
                                            <line id="Line_8" data-name="Line 8" x1="6.024" y1="4.518" transform="translate(31.628 0)" fill="none" stroke="#141419" stroke-linecap="round" stroke-width="1"/>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-fashion">
                    <div class="brand">
                        <div class="avr-brand"><img src="assets/images/brand-2.svg" alt=""></div>
                    </div>
                    <div class="content-item-fashion">
                        <div class="left-txt">
                            <div class="info-brand">
                                <h3>painorpleasure</h3>
                                <div class="insta">
                                    <a href=""><img src="assets/images/pc_btn_insta.png" alt=""></a>
                                </div>
                                <div class="date-place">
                                    <div class="date">11/27-12/1</div>
                                    <div class="place">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18.364" height="22" viewBox="0 0 18.364 22">
                                                <g id="Icon_feather-map-pin" data-name="Icon feather-map-pin" transform="translate(-3.5 -0.5)">
                                                    <path id="Path_83" data-name="Path 83" d="M20.864,9.682c0,6.364-8.182,11.818-8.182,11.818S4.5,16.045,4.5,9.682a8.182,8.182,0,1,1,16.364,0Z" transform="translate(0 0)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                    <path id="Path_84" data-name="Path 84" d="M18.955,13.227A2.727,2.727,0,1,1,16.227,10.5,2.727,2.727,0,0,1,18.955,13.227Z" transform="translate(-3.545 -3.545)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                </g>
                                            </svg>
                                        </div>
                                        <span>本館1F GATE</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-product">
                            <div class="slide-product">
                                <div class="item-slide">
                                    <div class="avarta"><img src="assets/images/fs-2-1.png" alt=""></div>
                                </div>
                                <div class="item-slide">
                                    <div class="avarta"><img src="assets/images/fs-2-2.png" alt=""></div>
                                </div>
                                <div class="item-slide">
                                    <div class="avarta"><img src="assets/images/fs-2-3.png" alt=""></div>
                                </div>
                            </div>
                            <div class="view-more text-center">
                                <a href="">
                                    <span>VIEW MORE</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20.653" height="5.918" viewBox="0 0 20.653 5.918">
                                        <g id="Group_23" data-name="Group 23" transform="translate(-17.698 0.7)">
                                            <line id="Line_7" data-name="Line 7" x1="19.453" transform="translate(18.198 4.519)" fill="none" stroke="#141419" stroke-linecap="round" stroke-width="1"/>
                                            <line id="Line_8" data-name="Line 8" x1="6.024" y1="4.518" transform="translate(31.628 0)" fill="none" stroke="#141419" stroke-linecap="round" stroke-width="1"/>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="box-cosme">
        <div class="container">
            <div class="title-box text-center">
                <h3 class="mb-0">COSME POP UP</h3>
            </div>
            
            <div class="beauty-minute">
                <div class="date-place">
                    <div class="date">11/21-12/1</div>
                    <div class="place">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18.364" height="22" viewBox="0 0 18.364 22">
                                <g id="Icon_feather-map-pin" data-name="Icon feather-map-pin" transform="translate(-3.5 -0.5)">
                                    <path id="Path_83" data-name="Path 83" d="M20.864,9.682c0,6.364-8.182,11.818-8.182,11.818S4.5,16.045,4.5,9.682a8.182,8.182,0,1,1,16.364,0Z" transform="translate(0 0)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    <path id="Path_84" data-name="Path 84" d="M18.955,13.227A2.727,2.727,0,1,1,16.227,10.5,2.727,2.727,0,0,1,18.955,13.227Z" transform="translate(-3.545 -3.545)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                </g>
                            </svg>
                        </div>
                        <span>本館2F EVENT SPACE</span>
                    </div>
                </div>

                <div class="beauty-mb d-none">
                    <div class="avarta"><img src="assets/images/beauty-mb.png" class="w-100" alt=""></div>
                </div>

                <div class="bg-avarta text-center"><img src="assets/images/beauty-minutes.png" alt=""></div>
                <div class="item-abs abs-1"><img src="assets/images/beauty-1.png" alt=""></div>
                <div class="item-abs abs-2"><img src="assets/images/beauty-2.png" alt=""></div>
                <div class="item-abs abs-3"><img src="assets/images/beauty-3.png" alt=""></div>
                <div class="item-abs abs-4"><img src="assets/images/beauty-4.png" alt=""></div>
                <div class="item-abs abs-5"><img src="assets/images/beauty-5.png" alt=""></div>

                <div class="view-more text-center">
                    <a href="">
                        <span>VIEW MORE</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20.653" height="5.918" viewBox="0 0 20.653 5.918">
                            <g id="Group_23" data-name="Group 23" transform="translate(-17.698 0.7)">
                                <line id="Line_7" data-name="Line 7" x1="19.453" transform="translate(18.198 4.519)" fill="none" stroke="#141419" stroke-linecap="round" stroke-width="1"/>
                                <line id="Line_8" data-name="Line 8" x1="6.024" y1="4.518" transform="translate(31.628 0)" fill="none" stroke="#141419" stroke-linecap="round" stroke-width="1"/>
                            </g>
                        </svg>
                    </a>
                </div>

            </div>

            <div class="choi-mison">
                <div class="choice-mb d-none">
                    <img src="assets/images/choice-mb.png" class="w-100" alt="">
                </div>
                <div class="bg-avarta">
                    <img src="assets/images/choi.png" alt="">
                </div>
                <div class="item-abs abs-1"><img src="assets/images/choi-1.png" alt=""></div>
                <div class="item-abs abs-2"><img src="assets/images/choi-2.png" alt=""></div>
                <div class="item-abs abs-3"><img src="assets/images/choi-3.png" alt=""></div>
                <div class="item-abs abs-4"><img src="assets/images/choi-4.png" alt=""></div>
                <div class="txt-mison">
                    <h3>チェミソン＆プロデュース <br>
                        101トークイベント</h3>
                    <div class="date-place">
                        <div class="date">
                            2024.11/21
                            <span>THU</span>
                            12:00〜14:30
                        </div>
                        <div class="place">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18.364" height="22" viewBox="0 0 18.364 22">
                                    <g id="Icon_feather-map-pin" data-name="Icon feather-map-pin" transform="translate(-3.5 -0.5)">
                                        <path id="Path_83" data-name="Path 83" d="M20.864,9.682c0,6.364-8.182,11.818-8.182,11.818S4.5,16.045,4.5,9.682a8.182,8.182,0,1,1,16.364,0Z" transform="translate(0 0)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                        <path id="Path_84" data-name="Path 84" d="M18.955,13.227A2.727,2.727,0,1,1,16.227,10.5,2.727,2.727,0,0,1,18.955,13.227Z" transform="translate(-3.545 -3.545)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                    </g>
                                </svg>
                            </div>
                            <span>PARCO●F</span>
                        </div>
                    </div>
                    <div class="desc">
                        <p>
                            説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。
                        </p>
                        <p>
                            説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。
                        </p>
                    </div>
                    <div class="bott">
                        <ul>
                            <li>
                                <a href="">
                                    <svg id="pc_btn_insta" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                        <g id="Ellipse_7" data-name="Ellipse 7" fill="#fff" stroke="#fff" stroke-width="1">
                                            <circle cx="25" cy="25" r="25" stroke="none"/>
                                            <circle cx="25" cy="25" r="24.5" fill="none"/>
                                        </g>
                                        <path id="Icon_akar-instagram-fill" data-name="Icon akar-instagram-fill" d="M7.11,1.557C8.128,1.51,8.452,1.5,11.045,1.5s2.917.011,3.934.057A7.025,7.025,0,0,1,17.3,2a4.886,4.886,0,0,1,2.791,2.792,7.02,7.02,0,0,1,.444,2.317c.047,1.02.057,1.344.057,3.936s-.011,2.917-.057,3.935a7,7,0,0,1-.444,2.317A4.873,4.873,0,0,1,17.3,20.089a7.02,7.02,0,0,1-2.317.444c-1.019.047-1.343.057-3.936.057s-2.917-.011-3.935-.057a7,7,0,0,1-2.317-.444A4.878,4.878,0,0,1,2,17.3a7.045,7.045,0,0,1-.443-2.317c-.047-1.02-.057-1.344-.057-3.936s.011-2.917.057-3.934A7.025,7.025,0,0,1,2,4.792,4.682,4.682,0,0,1,3.1,3.1,4.679,4.679,0,0,1,4.792,2a7.045,7.045,0,0,1,2.317-.443ZM14.9,3.275c-1.007-.046-1.309-.056-3.857-.056s-2.851.01-3.857.056A5.276,5.276,0,0,0,5.415,3.6,3.152,3.152,0,0,0,3.6,5.415a5.276,5.276,0,0,0-.329,1.773C3.229,8.195,3.22,8.5,3.22,11.045s.01,2.851.056,3.857A5.276,5.276,0,0,0,3.6,16.675a3.152,3.152,0,0,0,1.811,1.811,5.276,5.276,0,0,0,1.773.329c1.007.046,1.308.056,3.857.056s2.851-.01,3.857-.056a5.276,5.276,0,0,0,1.773-.329,3.152,3.152,0,0,0,1.811-1.811,5.276,5.276,0,0,0,.329-1.773c.046-1.007.056-1.309.056-3.857s-.01-2.851-.056-3.857a5.276,5.276,0,0,0-.329-1.773A3.152,3.152,0,0,0,16.675,3.6,5.276,5.276,0,0,0,14.9,3.275ZM9.826,13.988a3.185,3.185,0,1,0-1.965-2.942,3.184,3.184,0,0,0,1.965,2.942ZM7.576,7.576a4.906,4.906,0,1,1,0,6.939,4.906,4.906,0,0,1,0-6.939ZM17.04,6.87a1.16,1.16,0,1,0-1.616-.024,1.16,1.16,0,0,0,1.616.024Z" transform="translate(15 13.719)" fill="#141419"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <div class="view-more">
                                    <a href="">
                                        <span>VIEW MORE</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20.653" height="5.918" viewBox="0 0 20.653 5.918">
                                            <g id="Group_23" data-name="Group 23" transform="translate(-17.698 0.7)">
                                                <line id="Line_7" data-name="Line 7" x1="19.453" transform="translate(18.198 4.519)" fill="none" stroke="#141419" stroke-linecap="round" stroke-width="1"></line>
                                                <line id="Line_8" data-name="Line 8" x1="6.024" y1="4.518" transform="translate(31.628 0)" fill="none" stroke="#141419" stroke-linecap="round" stroke-width="1"></line>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="box-dj">
        <div class="container">
            <div class="title-box text-center">
                <h3 class="mb-0">DJ</h3>
            </div>
            <div class="wrap-dj">
                <div class="content-dj">
                    <div class="avarta">
                        <img src="assets/images/avr-dj.png" alt="">
                    </div>
                    <div class="info">
                        <div class="txt-mison">
                            <h3>TAG LIVE LABEL</h3>
                            <div class="date-place">
                                <div class="date">
                                    2024.11/21
                                    <span>THU</span>
                                    12:00〜14:30
                                </div>
                                <div class="place">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18.364" height="22" viewBox="0 0 18.364 22">
                                            <g id="Icon_feather-map-pin" data-name="Icon feather-map-pin" transform="translate(-3.5 -0.5)">
                                                <path id="Path_83" data-name="Path 83" d="M20.864,9.682c0,6.364-8.182,11.818-8.182,11.818S4.5,16.045,4.5,9.682a8.182,8.182,0,1,1,16.364,0Z" transform="translate(0 0)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                                <path id="Path_84" data-name="Path 84" d="M18.955,13.227A2.727,2.727,0,1,1,16.227,10.5,2.727,2.727,0,0,1,18.955,13.227Z" transform="translate(-3.545 -3.545)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <span>新館2F</span>
                                </div>
                            </div>
                            <div class="desc">
                                <p>
                                    説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。
                                </p>
                                <p>
                                    説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。
                                </p>
                            </div>
                            <div class="bott">
                                <ul>
                                    <li>
                                        <div class="view-more">
                                            <a href="">
                                                <span>VIEW MORE</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20.653" height="5.918" viewBox="0 0 20.653 5.918">
                                                    <g id="Group_23" data-name="Group 23" transform="translate(-17.698 0.7)">
                                                        <line id="Line_7" data-name="Line 7" x1="19.453" transform="translate(18.198 4.519)" fill="none" stroke="#141419" stroke-linecap="round" stroke-width="1"></line>
                                                        <line id="Line_8" data-name="Line 8" x1="6.024" y1="4.518" transform="translate(31.628 0)" fill="none" stroke="#141419" stroke-linecap="round" stroke-width="1"></line>
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="box-novelty">
        <div class="container">
            <div class="content-novelty">
                <div class="line text-center"><img src="assets/images/txt-novelty.png" alt=""></div>
                <div class="txt-novelty">
                    <div class="avarta text-center">
                        <img src="assets/images/novelty.png" alt="">
                    </div>
                    <div class="desc-novelty">
                        <h3>ノベルティキャンペーン</h3>
                        <div class="date-place">
                            <div class="date">
                                2024.11/21 <span>THU</span> - 2024.12/21 <span>THU</span>
                            </div>
                            <div class="place">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18.364" height="22" viewBox="0 0 18.364 22">
                                        <g id="Icon_feather-map-pin" data-name="Icon feather-map-pin" transform="translate(-3.5 -0.5)">
                                            <path id="Path_83" data-name="Path 83" d="M20.864,9.682c0,6.364-8.182,11.818-8.182,11.818S4.5,16.045,4.5,9.682a8.182,8.182,0,1,1,16.364,0Z" transform="translate(0 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            <path id="Path_84" data-name="Path 84" d="M18.955,13.227A2.727,2.727,0,1,1,16.227,10.5,2.727,2.727,0,0,1,18.955,13.227Z" transform="translate(-3.545 -3.545)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                        </g>
                                    </svg>
                                </div>
                                <span>新館2F</span>
                            </div>
                        </div>
                        <div class="desc">
                            ノベルティなどの説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。
                        </div>
                        <div class="view-more text-center">
                            <a href="">
                                <span>VIEW MORE</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.653" height="5.918" viewBox="0 0 20.653 5.918">
                                    <g id="Group_23" data-name="Group 23" transform="translate(-17.698 0.7)">
                                        <line id="Line_7" data-name="Line 7" x1="19.453" transform="translate(18.198 4.519)" fill="none" stroke="#141419" stroke-linecap="round" stroke-width="1"></line>
                                        <line id="Line_8" data-name="Line 8" x1="6.024" y1="4.518" transform="translate(31.628 0)" fill="none" stroke="#141419" stroke-linecap="round" stroke-width="1"></line>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="box-video">
        <div class="container">
            <div class="content-video">
                <div class="icon-video">
                    <img src="assets/images/icon-video-1.png" alt="">
                </div>
                <div style="padding:56.25% 0 0 0;position:relative;z-index: 2;">
                    <iframe src="https://player.vimeo.com/video/1022038916?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="fukuoka_korean_pop_week"></iframe>
                    <div class="icon-play">
                        <a href="javascript:void(0)">
                            <img src="assets/images/btn_play.png" alt="">
                        </a>
                    </div>
                </div>
                <script src="https://player.vimeo.com/api/player.js"></script>
            </div>

            <div class="content-profile">
                <div class="logo-profile">
                    <img src="assets/images/profile.png" alt="">
                </div>
                <div class="desc-profile">
                    <div class="desc">
                        <p>CGクリエイター、アートディレクター。</p>
                        <p>NIKEやaddidasなどのファッションブランドのスチール広告、動画制作。</p>
                        <p>西武百貨店の空間のディレクション、などを様々な分野で活動。</p>
                        <p>パーソナルワークでは、女の子をターゲットにした作品でありながら、</p>
                        <p>社会への違和感や自分自身が感じた事を、</p>
                        <p>言葉遊びやだじゃれを用いて、アートに落とし込んでいる。</p>
                    </div>
                    <ul>
                        <li><a href="">WEB</a></li>
                        <li><a href="">Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>













    <div class="art-director" style="display:none;">
        <div class="art-director__body">
            <div class="art-director__video">
                <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/1022038916?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="fukuoka_korean_pop_week"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
            </div>
        </div>
    </div>
    <div class="sns">
        <ul class="sns-list">
            <li class="sns-list__item">
                <a href="" target="_blank">
                     <img src="/<?php echo DIRNAME; ?>/assets/images/x.svg" class="" alt="x">
                </a>
            </li>
            <li class="sns-list__item">
                <a href="" target="_blank">
                     <img src="/<?php echo DIRNAME; ?>/assets/images/ins.svg" class="" alt="instagram">
                </a>
            </li>
            <li class="sns-list__item">
                <a href="" target="_blank">
                     <img src="/<?php echo DIRNAME; ?>/assets/images/tictok.svg" class="" alt="tictok">
                </a>
            </li>
        </ul>
    </div>
    <div class="other-text">
        <div class="other-text__body">
            <ul class="other-text__list">
                <li class="other-text__list-item other-text__list-item-left">
                    共催：
                </li>
                <li class="other-text__list-item other-text__list-item-right">
                    福岡放送ARNE
                </li>
            </ul>
            <ul class="other-text__list">
                <li class="other-text__list-item other-text__list-item-left">
                    協力：
                </li>
                <li class="other-text__list-item other-text__list-item-right">
                    テキストが入ります
                </li>
            </ul>
        </div>
    </div>
</main>

<footer class="footer">
    <div class="footer__backtop">
        <a href="" class="scroll">
            <img src="/<?php echo DIRNAME; ?>/assets/images/pagetop.png"  alt="scroll to top">
        </a>
    </div>
    <div class="footer__body">
        <div class="logo">
            <img src="/<?php echo DIRNAME; ?>/assets/images/fukuoka-logo.svg"  alt="<?php echo $pege_title; ?>">
        </div>
        <div class="copy-right">COPYRIGHT©PARCO CO., LTD. ALL RIGHT RESERVED.</div>
    </div>
</footer>

</div>
<!-- Javascript -->
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/assets/inc/js.php';?>
<!-- /Javascript -->
</body>
</html>
 