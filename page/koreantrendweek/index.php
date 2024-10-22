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

<div class="loading">
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
    <section class="fukuoka-parco">
        <div class="fukuoka-parco__img">
            <img src="/<?php echo DIRNAME; ?>/assets/images/fukuoka-parco.svg" class="" alt="fukuoka parco">
        </div>
        <div class="fukuoka-parco__body">
            <div class="fukuoka-parco__box">
                <div class="fukuoka-parco__text">
                    KOREAN POP WEEKが福岡PARCOで開催！<br>
                    企画の概要が入ります 企画の概要が入ります 企画の概要が入ります 企画の概要が入ります 企画の概要が入ります 企画の概要が入ります 企画の概要が入ります 企画の概要が入ります 企画の概要が入ります 企画の概要が入ります 企画の概要が入ります企画の概要が入ります 企画の概要が入ります企画の概要が入ります 企画の概要が入ります企画の概要が入ります 企画の概要が入ります
                </div>
            </div>
        </div>
        <div class="fukuoka-parco__inv">
            <img src="/<?php echo DIRNAME; ?>/assets/images/inv.svg" class="" alt="INVITSTION KOREAN POP WEEK">
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
 