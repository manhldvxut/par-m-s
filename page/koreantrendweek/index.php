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
    <div class="main-video">
        <video id="main_video" muted>
            <source src="/<?php echo DIRNAME; ?>/assets/video/movie-short.mp4" type="video/mp4">
        </video>
    </div>
</main>

</div>
<!-- Javascript -->
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/assets/inc/js.php';?>
<!-- /Javascript -->
</body>
</html>
 