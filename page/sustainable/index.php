<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/assets/inc/global-config.php';
//下記のパス「demo」を変更
include_once $_SERVER['DOCUMENT_ROOT'].'/page/sustainable/assets/inc/config.php';

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
$pege_title = 'みんなのサステナ宣言展│吉祥寺PARCO';
$pege_description = '吉祥寺パルコで開催する『みんなのサステナ宣言展』サステナブルな企画イベントのご紹介です。';
$pege_keywords = '';
$page_shareurl = 'https://'.STORE_NAME.'.parco.jp/page/sustainable/'; //必ずディレクトリ名を変更する

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
<header>

</header>
<main class="main-contents">
    <section class="mv">
        <div class="mv-body">
            <div class="mv-listitem">
                <div class="mv-listitem-01">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_main_pc_01.png" alt="">
                </div>
                <div class="mv-listitem-02">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_main_pc_02.png" alt="">
                </div>
                <div class="mv-listitem-03">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_main_pc_03.png" alt="">
                </div>
                <div class="mv-listitem-04">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_main_pc_04.png" alt="">
                </div>
                <div class="mv-listitem-05">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_main_pc_05.png" alt="">
                </div>
                <div class="mv-listitem-06">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_01.png" alt="">
                </div>
                <div class="mv-listitem-07">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_02.png" alt="">
                </div>
                <div class="mv-listitem-08">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_03.png" alt="">
                </div>
                <div class="mv-listitem-09">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_04.png" alt="">
                </div>
                <div class="mv-listitem-10">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_05.png" alt="">
                </div>
                <div class="mv-listitem-11">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_06.png" alt="">
                </div>
                <div class="mv-listitem-12">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_07.png" alt="">
                </div>
                <div class="mv-listitem-13">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_08.png" alt="">
                </div>
                <div class="mv-listitem-14">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_09.png" alt="">
                </div>
                <div class="mv-listitem-15">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_10.png" alt="">
                </div>
                <div class="mv-listitem-16">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_11.png" alt="">
                </div>
                <div class="mv-listitem-17">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_12.png" alt="">
                </div>
                <div class="mv-listitem-18">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_13.png" alt="">
                </div>
                <div class="mv-listitem-19">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_14.png" alt="">
                </div>
                <div class="mv-listitem-20">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_15.png" alt="">
                </div>
                <div class="mv-listitem-21">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_16.png" alt="">
                </div>
                <div class="mv-listitem-22">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_17.png" alt="">
                </div>
                <div class="mv-listitem-23">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_18.png" alt="">
                </div>
                <div class="mv-listitem-24">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_19.png" alt="">
                </div>
                <div class="mv-listitem-25">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_20.png" alt="">
                </div>
                <div class="mv-listitem-26">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_21.png" alt="">
                </div>
                <div class="mv-listitem-27">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_22.png" alt="">
                </div>
                <div class="mv-listitem-28">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_23.png" alt="">
                </div>
                <div class="mv-listitem-29">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_24.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="ribo-text">
        <div class="container">
            <div class="ribo-text-english">
                KICHIJOJI PARCO SUSTAINABLE DAYS
            </div>
            <h2>
                みんなのサステナ宣言展
            </h2>
            <div class="ribo-text-info">
                <p>サステナブルな社会の実現に向け、皆さまから募集した「宣言」を、できるだけたくさん、館内のさまざまな場所で展示する企画です。<br>
                そのほかにも、ワークショップやポップアップショップなど、さまざまな学びを得られるイベントが盛りだくさん。</p>  
                <p class="ribo-text-buttom-line">さあ、未来をより良く生きるためのヒントを見つけにいこう。</p>
                
            </div>
            <div class="ribo-text-timeline">
                <ul class="ribo-text-timeline-list">
                    <li class="ribo-text-timeline-item">期間　2024年3月15日（金）〜 3月31日（日）</li>
                    <li class="ribo-text-timeline-item">展示場所　1F イベントスペース　1F・2F各所</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="event">
        <div class="container">
            <h2 class="icon-title">
                <img src="assets/images/event-title.svg" alt="Event">
            </h2>
        </div>
    </section>
</main>


<footer>

</footer>
</div>
<!-- Javascript -->
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/assets/inc/js.php';?>
<!-- /Javascript -->
</body>
</html>
 