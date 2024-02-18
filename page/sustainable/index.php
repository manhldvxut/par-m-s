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
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rokkitt:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

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
    <nav class="nav">
        <div class="nav-body">
            <ul class="nav-list">
                <li class="nav-list-item">
                    <a href="" class="nav-list-link">
                        EVENT
                    </a>
                </li>
                <li class="nav-list-item">
                    <a href="" class="nav-list-link">
                        TALK SHOW & WORK SHOP
                    </a>
                </li>
                <li class="nav-list-item">
                    <a href="" class="nav-list-link">
                        POP UP SHOP
                    </a>
                </li>
                <li class="nav-list-item">
                    <a href="" class="nav-list-link">
                        SUSTAINABLE ACTION
                    </a>
                </li>
            </ul>
        </div>
    </nav>
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
            <div class="scroll">
                <img src="assets/images/icon-scroll.svg" alt="scroll">
            </div>
        </div>
    </section>
    <section class="ribo-text">
        <div class="container">
            <div class="ribo-text-body">
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
                <hr class="ribo-hr">
                <div class="ribo-text-timeline">
                    <ul class="ribo-text-timeline-list">
                        <li class="ribo-text-timeline-item">期間　2024年3月15日（金）〜 3月31日（日）</li>
                        <li class="ribo-text-timeline-item">展示場所　1F イベントスペース　1F・2F各所</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="event block-section">
        <div class="container">
            <h2 class="icon-title">
                <img src="assets/images/event-title.svg" alt="Event">
            </h2>
            <div class="event-body">
                <div class="list-column">
                    <div class="list-column-first">
                        <div class="list-column-first-list">
                            <div class="list-column-first-left">
                                <div class="parco-tag">
                                    <img src="assets/images/parco-tag.svg" alt="PARCO初">
                                </div>
                                <div class="parco-title">
                                    <h3>吉祥寺ZINEフェスティバル</h3>
                                </div>
                                <div class="parco-desciption">
                                    ⼤⼈気のZINEフェス、今回は過去最⼤の150組が参加。
                                </div>
                                <div class="parco-time">
                                    ＊⽇時　3/23(⼟) 12:00-17:00　※⾬天順延
                                </div>
                                <div class="parco-adress">＊場所　屋上</div>
                                <div class="parco-link">
                                    <a href="" class="modal-01 js-modal">詳しくはこちら</a>
                                </div>
                            </div>
                            <div class="list-column-first-right">
                                <div class="list-column-first-img">
                                    <img src="assets/images/thumb.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-column-last">
                        <div class="list-column-last-item">
                            
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/thumb.png" alt="">
                                    <div class="parco-tag">
                                        <img src="assets/images/parco-tag.svg" alt="PARCO初">
                                    </div>
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-title">
                                        <h3>吉祥寺ZINEフェスティバル</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        ⼤⼈気のZINEフェス、今回は過去最⼤の150組が参加。
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/23(⼟) 12:00-17:00　※⾬天順延
                                    </div>
                                    <div class="parco-adress">＊場所　屋上</div>
                                    <div class="parco-link">
                                        <a href="" class="modal-01 js-modal">詳しくはこちら</a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="list-column-last-item">
                            
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/thumb.png" alt="">
                                    <div class="parco-tag">
                                        <img src="assets/images/parco-tag.svg" alt="PARCO初">
                                    </div>
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-title">
                                        <h3>吉祥寺ZINEフェスティバル</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        ⼤⼈気のZINEフェス、今回は過去最⼤の150組が参加。
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/23(⼟) 12:00-17:00　※⾬天順延
                                    </div>
                                    <div class="parco-adress">＊場所　屋上</div>
                                    <div class="parco-link">
                                        <a href="" class="modal-01 js-modal">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-column-last-item">
                            
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/thumb.png" alt="">
                                    <div class="parco-tag">
                                        <img src="assets/images/parco-tag.svg" alt="PARCO初">
                                    </div>
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-title">
                                        <h3>吉祥寺ZINEフェスティバル</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        ⼤⼈気のZINEフェス、今回は過去最⼤の150組が参加。
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/23(⼟) 12:00-17:00　※⾬天順延
                                    </div>
                                    <div class="parco-adress">＊場所　屋上</div>
                                    <div class="parco-link">
                                        <a href="" class="modal-01 js-modal">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-column-last-item">
                            
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/thumb.png" alt="">
                                    <div class="parco-tag">
                                        <img src="assets/images/parco-tag.svg" alt="PARCO初">
                                    </div>
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-title">
                                        <h3>吉祥寺ZINEフェスティバル</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        ⼤⼈気のZINEフェス、今回は過去最⼤の150組が参加。
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/23(⼟) 12:00-17:00　※⾬天順延
                                    </div>
                                    <div class="parco-adress">＊場所　屋上</div>
                                    <div class="parco-link">
                                        <a href="" class="modal-01 js-modal">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-column-last-item">
                            
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/thumb.png" alt="">
                                    <div class="parco-tag">
                                        <img src="assets/images/parco-tag.svg" alt="PARCO初">
                                    </div>
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-title">
                                        <h3>吉祥寺ZINEフェスティバル</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        ⼤⼈気のZINEフェス、今回は過去最⼤の150組が参加。
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/23(⼟) 12:00-17:00　※⾬天順延
                                    </div>
                                    <div class="parco-adress">＊場所　屋上</div>
                                    <div class="parco-link">
                                        <a href="" class="modal-01 js-modal">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-column-last-item">
                            
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/thumb.png" alt="">
                                    <div class="parco-tag">
                                        <img src="assets/images/parco-tag.svg" alt="PARCO初">
                                    </div>
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-title">
                                        <h3>吉祥寺ZINEフェスティバル</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        ⼤⼈気のZINEフェス、今回は過去最⼤の150組が参加。
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/23(⼟) 12:00-17:00　※⾬天順延
                                    </div>
                                    <div class="parco-adress">＊場所　屋上</div>
                                    <div class="parco-link">
                                        <a href="" class="modal-01 js-modal">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="talk-show block-section">
        <div class="container">
            <h2 class="icon-title">
                <img src="assets/images/title-talk.svg" alt="TALK SHOW & WORK SHOP">
            </h2>
            <div class="talk-show-body">
                <div class="list-column">
                    <div class="list-column-first">
                        <div class="list-column-first-list">
                            <div class="list-column-first-left">
                                <div class="parco-tag">
                                    <img src="assets/images/parco-tag-02.svg" alt="PARCO初">
                                </div>
                                <div class="parco-title">
                                    <h3>吉祥寺ZINEフェスティバル</h3>
                                </div>
                                <div class="parco-desciption">
                                    ⼤⼈気のZINEフェス、今回は過去最⼤の150組が参加。
                                </div>
                                <div class="parco-time">
                                    ＊⽇時　3/23(⼟) 12:00-17:00　※⾬天順延
                                </div>
                                <div class="parco-adress">＊場所　屋上</div>
                                <div class="parco-link">
                                    <a href="" class="modal-01 js-modal">詳しくはこちら</a>
                                </div>
                            </div>
                            <div class="list-column-first-right">
                                <div class="list-column-first-img">
                                    <img src="assets/images/thumb.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-column-last">
                        <div class="list-column-last-item">
                            
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/thumb.png" alt="">
                                    <div class="parco-tag">
                                        <img src="assets/images/parco-tag-02.svg" alt="PARCO初">
                                    </div>
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-title">
                                        <h3>吉祥寺ZINEフェスティバル</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        ⼤⼈気のZINEフェス、今回は過去最⼤の150組が参加。
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/23(⼟) 12:00-17:00　※⾬天順延
                                    </div>
                                    <div class="parco-adress">＊場所　屋上</div>
                                    <div class="parco-link">
                                        <a href="" class="modal-01 js-modal">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-column-last-item">
                            
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/thumb.png" alt="">
                                    <div class="parco-tag">
                                        <img src="assets/images/parco-tag-02.svg" alt="PARCO初">
                                    </div>
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-title">
                                        <h3>吉祥寺ZINEフェスティバル</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        ⼤⼈気のZINEフェス、今回は過去最⼤の150組が参加。
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/23(⼟) 12:00-17:00　※⾬天順延
                                    </div>
                                    <div class="parco-adress">＊場所　屋上</div>
                                    <div class="parco-link">
                                        <a href="" class="modal-01 js-modal">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-column-last-item">
                            
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/thumb.png" alt="">
                                    <div class="parco-tag">
                                        <img src="assets/images/parco-tag-02.svg" alt="PARCO初">
                                    </div>
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-title">
                                        <h3>吉祥寺ZINEフェスティバル</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        ⼤⼈気のZINEフェス、今回は過去最⼤の150組が参加。
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/23(⼟) 12:00-17:00　※⾬天順延
                                    </div>
                                    <div class="parco-adress">＊場所　屋上</div>
                                    <div class="parco-link">
                                        <a href="" class="modal-01 js-modal">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-column-last-item">
                            
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/thumb.png" alt="">
                                    <div class="parco-tag">
                                        <img src="assets/images/parco-tag-02.svg" alt="PARCO初">
                                    </div>
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-title">
                                        <h3>吉祥寺ZINEフェスティバル</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        ⼤⼈気のZINEフェス、今回は過去最⼤の150組が参加。
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/23(⼟) 12:00-17:00　※⾬天順延
                                    </div>
                                    <div class="parco-adress">＊場所　屋上</div>
                                    <div class="parco-link">
                                        <a href="" class="modal-01 js-modal">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-column-last-item">
                            
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/thumb.png" alt="">
                                    <div class="parco-tag">
                                        <img src="assets/images/parco-tag-02.svg" alt="PARCO初">
                                    </div>
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-title">
                                        <h3>吉祥寺ZINEフェスティバル</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        ⼤⼈気のZINEフェス、今回は過去最⼤の150組が参加。
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/23(⼟) 12:00-17:00　※⾬天順延
                                    </div>
                                    <div class="parco-adress">＊場所　屋上</div>
                                    <div class="parco-link">
                                        <a href="" class="modal-01 js-modal">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-column-last-item">
                            
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/thumb.png" alt="">
                                    <div class="parco-tag">
                                        <img src="assets/images/parco-tag-02.svg" alt="PARCO初">
                                    </div>
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-title">
                                        <h3>吉祥寺ZINEフェスティバル</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        ⼤⼈気のZINEフェス、今回は過去最⼤の150組が参加。
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/23(⼟) 12:00-17:00　※⾬天順延
                                    </div>
                                    <div class="parco-adress">＊場所　屋上</div>
                                    <div class="parco-link">
                                        <a href="" class="modal-01 js-modal">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="popup-shop block-section">
        <div class="container">
            <h2 class="icon-title">
                <img src="assets/images/title-popup-shop.svg" alt="POP UP SHOP">
            </h2>
            <div class="popup-shop-body">
                <div class="list-column">
                    <div class="list-column-first">
                        <div class="list-column-first-list">
                            <div class="list-column-first-left">
                                <div class="parco-tag">
                                    <img src="assets/images/parco-tag-03.svg" alt="PARCO初">
                                </div>
                                <div class="parco-title">
                                    <h3>吉祥寺ZINEフェスティバル</h3>
                                </div>
                                <div class="parco-desciption">
                                    ⼤⼈気のZINEフェス、今回は過去最⼤の150組が参加。
                                </div>
                                <div class="parco-time">
                                    ＊⽇時　3/23(⼟) 12:00-17:00　※⾬天順延
                                </div>
                                <div class="parco-adress">＊場所　屋上</div>
                                <div class="parco-link">
                                    <a href="" class="modal-01 js-modal">詳しくはこちら</a>
                                </div>
                            </div>
                            <div class="list-column-first-right">
                                <div class="list-column-first-img">
                                    <img src="assets/images/thumb.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-column-last">
                        <div class="list-column-last-item">
                            
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/thumb.png" alt="">
                                    <div class="parco-tag">
                                        <img src="assets/images/parco-tag.svg" alt="PARCO初">
                                    </div>
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-title">
                                        <h3>吉祥寺ZINEフェスティバル</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        ⼤⼈気のZINEフェス、今回は過去最⼤の150組が参加。
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/23(⼟) 12:00-17:00　※⾬天順延
                                    </div>
                                    <div class="parco-adress">＊場所　屋上</div>
                                    <div class="parco-link">
                                        <a href="" class="modal-01 js-modal">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-column-last-item">
                            
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/thumb.png" alt="">
                                    <div class="parco-tag">
                                        <img src="assets/images/parco-tag.svg" alt="PARCO初">
                                    </div>
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-title">
                                        <h3>吉祥寺ZINEフェスティバル</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        ⼤⼈気のZINEフェス、今回は過去最⼤の150組が参加。
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/23(⼟) 12:00-17:00　※⾬天順延
                                    </div>
                                    <div class="parco-adress">＊場所　屋上</div>
                                    <div class="parco-link">
                                        <a href="" class="modal-01 js-modal">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-column-last-item">
                            
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/thumb.png" alt="">
                                    <div class="parco-tag">
                                        <img src="assets/images/parco-tag.svg" alt="PARCO初">
                                    </div>
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-title">
                                        <h3>吉祥寺ZINEフェスティバル</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        ⼤⼈気のZINEフェス、今回は過去最⼤の150組が参加。
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/23(⼟) 12:00-17:00　※⾬天順延
                                    </div>
                                    <div class="parco-adress">＊場所　屋上</div>
                                    <div class="parco-link">
                                        <a href="" class="modal-01 js-modal">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-column-last-item">
                            
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/thumb.png" alt="">
                                    <div class="parco-tag">
                                        <img src="assets/images/parco-tag.svg" alt="PARCO初">
                                    </div>
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-title">
                                        <h3>吉祥寺ZINEフェスティバル</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        ⼤⼈気のZINEフェス、今回は過去最⼤の150組が参加。
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/23(⼟) 12:00-17:00　※⾬天順延
                                    </div>
                                    <div class="parco-adress">＊場所　屋上</div>
                                    <div class="parco-link">
                                        <a href="" class="modal-01 js-modal">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-column-last-item">
                            
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/thumb.png" alt="">
                                    <div class="parco-tag">
                                        <img src="assets/images/parco-tag.svg" alt="PARCO初">
                                    </div>
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-title">
                                        <h3>吉祥寺ZINEフェスティバル</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        ⼤⼈気のZINEフェス、今回は過去最⼤の150組が参加。
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/23(⼟) 12:00-17:00　※⾬天順延
                                    </div>
                                    <div class="parco-adress">＊場所　屋上</div>
                                    <div class="parco-link">
                                        <a href="" class="modal-01 js-modal">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-column-last-item">
                            
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/thumb.png" alt="">
                                    <div class="parco-tag">
                                        <img src="assets/images/parco-tag.svg" alt="PARCO初">
                                    </div>
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-title">
                                        <h3>吉祥寺ZINEフェスティバル</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        ⼤⼈気のZINEフェス、今回は過去最⼤の150組が参加。
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/23(⼟) 12:00-17:00　※⾬天順延
                                    </div>
                                    <div class="parco-adress">＊場所　屋上</div>
                                    <div class="parco-link">
                                        <a href="" class="modal-01 js-modal">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sustainable-action block-section">
        <div class="container">
            <h2 class="icon-title">
                <img src="assets/images/title-sus.svg" alt="SUSTAINABLE ACTION">
            </h2>
            <div class="sustainable-action-text">
                吉祥寺PARCOの館内ショップが取り組んでいるサステナブルな取り組みをご紹介します。
            </div>
            <div class="parco-link">
                <a href="">詳しくはこちら</a>
            </div>
        </div>
    </section>

    <div class="modal-block js-modal modal-1" style="display: none;">
        <div class="modal-bg js-modalclose"></div>
        <div class="modal-wrap">
            <button class="modal-close js-modalclose">
                <img src="/page/springspring/assets/images/icon-close.svg" alt="icon close">
            </button>
            <div class="modal-cont">
                <div class="img-wrap">
                    <div class="img-wrap__slider js-imgslider">
                        <div class="img"><img src="assets/images/thumb.png" alt=""></div>
                    </div>
                </div>
                <div class=" modal-detail">
                    <div class=" modal-item-info">
                        <div class="shop-event__item-time">2/16(金)～2/25(日)</div>
                        <div class="shop-event__item-title">SNEAKERS 5%OFF</div>
                        <div class="shop-event__item-desc">emmiがセレクトする人気のスニーカーが期間限定で5%OFF。emmiでしか買えない限定スニーカーや春のトレンドスニーカーが揃います。</div>
                    </div>
                    <div class=" modal-shop-info">
                        <div class="shop-event__item-footer">
                            <div class="shop-event__item-logo">
                                <img src="/page/springspring/assets/images/emmi-logo.jpg" class="" alt="emmi">
                            </div>
                            <div class="shop-event__item-front">
                                <div class="shop-event__item-floor">本館2F</div>
                                <div class="shop-event__item-name">エミ</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<footer class="footer block-section">
    <div class="footer-body">
        <div class="container">
            <div class="footer-logo">
                <a href="">
                    <img src="assets/images/logo_PARCO.svg" alt="PARCO">
                </a>
            </div>
            <div class="footer-sns">
                <ul class="sns">
                    <li class="sns-item">
                        <a href="" target="_blank">
                            <img src="assets/images/x.svg" alt="X">
                        </a>
                    </li>
                    <li class="sns-item">
                        <a href="" target="_blank">
                            <img src="assets/images/line.svg" alt="Line">
                        </a>
                    </li>
                    <li class="sns-item">
                        <a href="" target="_blank">
                            <img src="assets/images/insta.svg" alt="Instagram">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-copyright">
                COPYRIGHT ©︎ PARCO CO,.LTD ALL RIGHTS RESERVED.
            </div>
        </div>
    </div>
    <div class="back-top">
        <a href="#">
            <img class="back-top-unset" src="assets/images/back-top.svg" alt="TOP">
            <img class="back-top-hover" src="assets/images/back-top-hover.svg" alt="TOP">
        </a>
    </div>
</footer>
</div>
<!-- Javascript -->
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/assets/inc/js.php';?>
<!-- /Javascript -->
</body>
</html>
 