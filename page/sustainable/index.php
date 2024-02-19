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
                    <a href="#event" class="nav-list-link">
                        EVENT
                    </a>
                </li>
                <li class="nav-list-item">
                    <a href="#talk_show" class="nav-list-link">
                        TALK SHOW & WORK SHOP
                    </a>
                </li>
                <li class="nav-list-item">
                    <a href="#popup_show" class="nav-list-link">
                        POP UP SHOP
                    </a>
                </li>
                <li class="nav-list-item">
                    <a href="#sustainable_action" class="nav-list-link">
                        SUSTAINABLE ACTION
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <section class="mv">
        <div class="mv-body">
            <div class="mv-listitem">
                <div class="mv-listitem-01 wow rubberBand" data-wow-delay="1.4s">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_main_pc_01.png" alt="">
                </div>
                <div class="mv-listitem-02 wow rubberBand" data-wow-delay="2.12s"">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_main_pc_02.png" alt="">
                </div>
                <div class="mv-listitem-03  wow rubberBand" data-wow-delay="1.76s">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_main_pc_03.png" alt="">
                </div>
                <div class="mv-listitem-04 wow rubberBand" data-wow-delay="1.9s"">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_main_pc_04.png" alt="">
                </div>
                <div class="mv-listitem-05 wow rubberBand" data-wow-delay="1.65s">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_main_pc_05.png" alt="">
                </div>
                <div class="mv-listitem-06  wow rubberBand" data-wow-delay="0.4s">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_01.png" alt="">
                </div>
                <div class="mv-listitem-07  wow rubberBand" data-wow-delay="0.5s">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_02.png" alt="">
                </div>
                <div class="mv-listitem-08  wow rubberBand" data-wow-delay="0.36s">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_03.png" alt="">
                </div>
                <div class="mv-listitem-09  wow rubberBand" data-wow-delay="0.6s">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_04.png" alt="">
                </div>
                <div class="mv-listitem-10  wow rubberBand" data-wow-delay="0.8s">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_05.png" alt="">
                </div>
                <div class="mv-listitem-11  wow rubberBand" data-wow-delay="0.3s">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_06.png" alt="">
                </div>
                <div class="mv-listitem-12  wow rubberBand" data-wow-delay="0.46s">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_07.png" alt="">
                </div>
                <div class="mv-listitem-13  wow rubberBand" data-wow-delay="0.15s">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_08.png" alt="">
                </div>
                <div class="mv-listitem-14  wow rubberBand" data-wow-delay="0.35s">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_09.png" alt="">
                </div>
                <div class="mv-listitem-15  wow rubberBand" data-wow-delay="0.32s">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_10.png" alt="">
                </div>
                <div class="mv-listitem-16  wow rubberBand" data-wow-delay="0.6s">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_11.png" alt="">
                </div>
                <div class="mv-listitem-17  wow rubberBand" data-wow-delay="0.24s">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_12.png" alt="">
                </div>
                <div class="mv-listitem-18  wow rubberBand" data-wow-delay="0.24s">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_13.png" alt="">
                </div>
                <div class="mv-listitem-19  wow rubberBand" data-wow-delay="0.4s">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_14.png" alt="">
                </div>
                <div class="mv-listitem-20  wow rubberBand" data-wow-delay="0.75s">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_15.png" alt="">
                </div>
                <div class="mv-listitem-21  wow rubberBand" data-wow-delay="0.6s">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_16.png" alt="">
                </div>
                <div class="mv-listitem-22  wow rubberBand" data-wow-delay="0.34s">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_17.png" alt="">
                </div>
                <div class="mv-listitem-23  wow rubberBand" data-wow-delay="0.42s">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_18.png" alt="">
                </div>
                <div class="mv-listitem-24  wow rubberBand" data-wow-delay="0.8s">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_19.png" alt="">
                </div>
                <div class="mv-listitem-25  wow rubberBand" data-wow-delay="0.36s">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_20.png" alt="">
                </div>
                <div class="mv-listitem-26  wow rubberBand" data-wow-delay="0.48s">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_21.png" alt="">
                </div>
                <div class="mv-listitem-27  wow rubberBand" data-wow-delay="0.65s">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_22.png" alt="">
                </div>
                <div class="mv-listitem-28  wow rubberBand" data-wow-delay="0.5s">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/mv/fukidashi_pc_23.png" alt="">
                </div>
                <div class="mv-listitem-29  wow rubberBand" data-wow-delay="0.45s">
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

    <section class="event block-section" id="event">
        <div class="container">
            <h2 class="icon-title">
                <img src="assets/images/event-title.svg" alt="Event">
            </h2>
            <div class="event-body">
                <div class="list-column">
                    <div class="list-column-first">
                        <div class="list-column-last-item">
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/thumb.png" alt="">
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-title">
                                        <h3>屋上フリーマーケット</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        毎年、春と秋に屋上で開催する恒例のフリーマーケット。出店数は約100店！
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/20(水)　9:30-14:00
                                    </div>
                                    <div class="parco-adress">＊場所　屋上</div>
                                    <div class="parco-link openModal">
                                        <a href="" data-modal="modal-01">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-column-last">
                        <div class="list-column-last-item">
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/event_1_1.jpg" alt="屋上フリーマーケット">
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-title">
                                        <h3>屋上フリーマーケット</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        毎年、春と秋に屋上で開催する恒例のフリーマーケット。出店数は約100店！
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/20(水)　9:30-14:00
                                    </div>
                                    <div class="parco-adress">＊場所　屋上</div>
                                    <div class="parco-link openModal">
                                        <a href="" data-modal="modal-01">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-column-last-item not-big">
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/event_2.jpg" alt="吉祥寺ZINEフェスティバル">
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-title">
                                        <h3>吉祥寺ZINEフェスティバル</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        大人気のZINEフェス、今回は過去最大の150組が参加。
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/23(土)　12:00-17:00　※⾬天順延
                                    </div>
                                    <div class="parco-adress">＊場所　屋上</div>
                                    <div class="parco-link openModal">
                                        <a href=""data-modal="modal-02">詳しくはこちら</a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="list-column-last-item not-big">
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/event_3_1.jpg" alt="冷蔵文庫">
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-tag">
                                        <img src="assets/images/parco-tag.svg" alt="PARCO初">
                                    </div>
                                    <div class="parco-title">
                                        <h3>冷蔵文庫</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        見知らぬだれかと読み終わった本を交換。
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/23(土)
                                    </div>
                                    <div class="parco-adress">＊場所　1F　正面入口</div>
                                    <div class="parco-link openModal">
                                        <a href=""data-modal="modal-03">詳しくはこちら</a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="list-column-last-item not-big">
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/event_4.jpg" alt="BOOK TRUCK">
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-title">
                                        <h3>BOOK TRUCK</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        行く先々に合わせて品揃えや形態が変わるフレキシブルな移動本屋
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/23(土)・24(日)
                                    </div>
                                    <div class="parco-adress">＊場所　1F　正面入口</div>
                                    <div class="parco-link openModal">
                                        <a href="" data-modal="modal-04">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-column-last-item">
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/event_5.jpg" alt="芝生蚤の市 in吉祥寺PARCO ‘24 SPRING">
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-tag">
                                        <img src="assets/images/parco-tag.svg" alt="PARCO初">
                                    </div>
                                    <div class="parco-title">
                                        <h3>芝生蚤の市 in吉祥寺PARCO ‘24 SPRING</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        「どんなものでも役にたつ」を目指す芝生蚤の市がアート＆クラフトマーケットとして登場。30（土）はフリーマーケット、31（日）は蚤の市を開催。
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/30(土)・31(日)
                                    </div>
                                    <div class="parco-adress">＊場所　屋上</div>
                                    <div class="parco-link openModal">
                                        <a href="" data-modal="modal-05">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-column-last-item">
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/event_6_1.jpg" alt="コスメのイッポ">
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-title">
                                        <h3>コスメのイッポ</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        役目を終えたコスメを回収。エシカルなクレヨン「ハロヨン」へと生まれ変わります。
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/15(金)～31(日)
                                    </div>
                                    <div class="parco-adress">＊場所　3F　エスカレーター横</div>
                                    <div class="parco-link openModal">
                                        <a href="" data-modal="modal-06">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-column-last-item not-big">
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/event_7.jpg" alt="「気候危機打開！むさしの市民エコアクション」展示">
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-title">
                                        <h3>「気候危機打開！むさしの市民エコアクション」展示</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        気候危機に対する、暮らしの中でのエコアクションを始めませんか？
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/15(金)～31(日)
                                    </div>
                                    <div class="parco-adress">＊場所　3F　エスカレーター横</div>
                                    <div class="parco-link openModal">
                                        <a href="" data-modal="modal-07">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="talk-show block-section" id="talk_show">
        <div class="container">
            <h2 class="icon-title">
                <img src="assets/images/title-talk.svg" alt="TALK SHOW & WORK SHOP">
            </h2>
            <div class="talk-show-body">
                <div class="list-column">
                    <div class="list-column-first">
                        <div class="list-column-last-item">
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/talkshow_1_1.jpg" alt="スタイルテーブルトークショー「サスティナブル入門」">
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-tag">
                                        <img src="assets/images/parco-tag-02.svg" alt="PARCO初">
                                    </div>
                                    <div class="parco-title">
                                        <h3>スタイルテーブル<br>トークショー「サスティナブル入門」</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        1F スタイルテーブルのオーナー・土井あゆみが、今日から取り入れられるサステナブルな取り組みを紹介。
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/16(土)　12:00～13:00
                                    </div>
                                    <div class="parco-adress">＊場所　8F　スキーマ</div>
                                    <div class="parco-link openModal">
                                        <a href="">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-column-last">
                        <div class="list-column-last-item">
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/talkshow_1_1.jpg" alt="スタイルテーブルトークショー「サスティナブル入門」">
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-title">
                                        <h3>スタイルテーブル<br>トークショー「サスティナブル入門」</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        1F スタイルテーブルのオーナー・土井あゆみが、今日から取り入れられるサステナブルな取り組みを紹介。
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/16(土)　12:00～13:00
                                    </div>
                                    <div class="parco-adress">＊場所　8F　スキーマ</div>
                                    <div class="parco-link openModal">
                                        <a href="" data-modal="talk-modal-01">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list-column-last-item">
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/talkshow_2.jpg" alt="スタイルテーブル2種類から選べるワークショップ">
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-title">
                                        <h3>スタイルテーブル<br>2種類から選べるワークショップ</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        みつろうラップ作り、ペットボトルキャップを使ったアクセサリー作りの2種類からお好きなワークショップを選べます。
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/17(日)・30(土)
                                    </div>
                                    <div class="parco-adress">＊場所　2F　エスカレーター横</div>
                                    <div class="parco-link openModal">
                                        <a href="" data-modal="talk-modal-02">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-column-last-item">
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/talkshow_3_1.jpg" alt="生活の木～私にできるサステナブル～和精油×星座の練り香水＆フレグランススプレー作り">
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-title">
                                        <h3>生活の木<br>
                                            ～私にできるサステナブル～<br>
                                            和精油×星座の練り香水＆フレグランススプレー作り</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        お守りのようにつけられる練り香水とフレグランススプレーを作るワークショップ。
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/23(土)～25(月)
                                    </div>
                                    <div class="parco-adress">＊場所　2F　エスカレーター横</div>
                                    <div class="parco-link openModal">
                                        <a href="" data-modal="talk-modal-03">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-column-last-item">
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/talkshow_4.jpg" alt="スティールパンとあそぼう">
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-tag">
                                        <img src="assets/images/parco-tag-02.svg" alt="PARCO初">
                                    </div>
                                    <div class="parco-title">
                                        <h3>スティールパンとあそぼう</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        空き缶を使って楽器の「スチール缶パン」を作るワークショップ。
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/30(土)
                                    </div>
                                    <div class="parco-adress">＊場所　1F　ターンザテーブル</div>
                                    <div class="parco-link openModal">
                                        <a href="" data-modal="talk-modal-04">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-column-last-item">
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/talkshow_5.jpg" alt="バードコールをつくろう">
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-title">
                                        <h3>バードコールをつくろう</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        端材などを使って鳥の鳴き声に似た音を出す「バードコール」を作るワークショップ。
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/31(日)
                                    </div>
                                    <div class="parco-adress">＊場所　1F　ターンザテーブル</div>
                                    <div class="parco-link openModal">
                                        <a href="" data-modal="talk-modal-05">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="popup-shop block-section" id="popup_show">
        <div class="container">
            <h2 class="icon-title">
                <img src="assets/images/title-popup-shop.svg" alt="POP UP SHOP">
            </h2>
            <div class="popup-shop-body">
                <div class="list-column">
                    <div class="list-column-first">
                        <div class="list-column-last-item">
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/thumb.png" alt="">
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-tag">
                                        <img src="assets/images/parco-tag-02.svg" alt="PARCO初">
                                    </div>
                                    <div class="parco-title">
                                        <h3>TABESUS</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        ⼤⼈気のZINEフェス、今回は過去最⼤の150組が参加。
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/23(⼟) 12:00-17:00　※⾬天順延
                                    </div>
                                    <div class="parco-adress">＊場所　屋上</div>
                                    <div class="parco-link openModal">
                                        <a href="">詳しくはこちら</a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="list-column-last">
                        <div class="list-column-last-item">
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/thumb.png" alt="TABESUS">
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-tag">
                                        <img src="assets/images/parco-tag-03.svg" alt="PARCO初">
                                    </div>
                                    <div class="parco-title">
                                        <h3>TABESUS</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        回収中
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/30(土)・31(日)
                                    </div>
                                    <div class="parco-adress">＊場所　1F　正面入口</div>
                                    <div class="parco-link openModal">
                                        <a href="" data-modal="pop-modal-1">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-column-last-item">
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/popup_2.jpg" alt="ラ・グラスマチネ">
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-title">
                                        <h3>ラ・グラスマチネ</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        パリの蚤の市を再現したかのようなアンティークショップ。
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/15(金)～24(日)　11:00～19:00
                                    </div>
                                    <div class="parco-adress">＊場所　1F　ターンザテーブル</div>
                                    <div class="parco-link openModal">
                                        <a href="" data-modal="pop-modal-2">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-column-last-item">
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/popup_3.jpg" alt="植物生活">
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-title">
                                        <h3>植物生活</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        緑の魅力と自然の素材を活かしたスワッグやリースをテーマにしたポップアップショップ。
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/15(金)～24(日)
                                    </div>
                                    <div class="parco-adress">＊場所　1F　公園通り口</div>
                                    <div class="parco-link openModal">
                                        <a href="" data-modal="pop-modal-3">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-column-last-item">
                            <div class="list-column-last-item-info">
                                <div class="list-column-last-img">
                                    <img src="assets/images/popup_4.jpg" alt="The Moon">
                                </div>
                                <div class="list-column-last-item-desc">
                                    <div class="parco-tag">
                                        <img src="assets/images/parco-tag-03.svg" alt="PARCO初">
                                    </div>
                                    <div class="parco-title">
                                        <h3>The Moon</h3>
                                    </div>
                                    <div class="parco-desciption">
                                        西洋アンティーク全般の販売・買取・アンティーク照明の修理を2004年から行うショップ。
                                    </div>
                                    <div class="parco-time">
                                        ＊⽇時　3/30(土)・31(日)
                                    </div>
                                    <div class="parco-adress">＊場所　1F　公園通り口</div>
                                    <div class="parco-link openModal">
                                        <a href="" data-modal="pop-modal-4">詳しくはこちら</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sustainable-action block-section" id="sustainable_action">
        <div class="container">
            <h2 class="icon-title">
                <img src="assets/images/title-sus.svg" alt="SUSTAINABLE ACTION">
            </h2>
            <div class="sustainable-action-text">
                吉祥寺PARCO館内ショップのサステナブルな取り組みを紹介します。
            </div>
            <div class="parco-link openModal">
                <a href="https://kichijoji.parco.jp/sale/detail/?cd=001135&contents=salelist" target="_blank">詳しくはこちら</a>
            </div>
        </div>
    </section>

    <div class="modal-block js-modal modal-01">
        <div class="modal-bg js-modalclose"></div>
        <div class="modal-wrap">
            <button class="modal-close js-modalclose">
                <img src="assets/images/icon-close.svg" alt="icon close">
            </button>
            <div class="modal-cont">
                <div class="img-wrap">
                    <div class="img-wrap__slider js-modal-slider">
                        <div class="img"><img src="assets/images/event_1_1.jpg" alt="屋上フリーマーケット"></div>
                        <div class="img"><img src="assets/images/event_1_2.jpg" alt="屋上フリーマーケット"></div>
                    </div>
                </div>
                <div class=" modal-detail">
                    <div class=" modal-item-info">
                        <div class="parco-title">
                            <h3>屋上フリーマーケット</h3>
                        </div>
                        <div class="parco-desciption">
                            毎年、春と秋に屋上で開催する恒例のフリーマーケット。出店数は約100店！洋服や雑貨、古本、子供服、アクセサリーなどが出品されます。会場本部では、不要になった洋服や本の回収もおこなっています。<br><br>
                            ■開催時間<br>
                            9:30～14:00<br>
                            ※雨天中止
                        </div>
                        <div class="parco-time">
                            ＊⽇時　3/20(水)　9:30-14:00
                        </div>
                        <div class="parco-adress">＊場所　屋上</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-block js-modal modal-02">
        <div class="modal-bg js-modalclose"></div>
        <div class="modal-wrap">
            <button class="modal-close js-modalclose">
                <img src="assets/images/icon-close.svg" alt="icon close">
            </button>
            <div class="modal-cont">
                <div class="img-wrap">
                    <div class="img-wrap__slider js-modal-slider">
                        <div class="img"><img src="assets/images/event_2.jpg" alt="吉祥寺ZINEフェスティバル"></div>
                    </div>
                </div>
                <div class=" modal-detail">
                    <div class=" modal-item-info">
                        <div class="parco-title">
                            <h3>吉祥寺ZINEフェスティバル</h3>
                        </div>
                        <div class="parco-desciption">
                            吉祥寺ZINEフェスティバルを吉祥寺PARCOの屋上で開催します。<br>
                            今回は過去最大の150組の出展者が参加します。みんなの好きを形にしたZINEやTシャツ、アートグッズが並びます。<br>
                            ぜひZINEフェスでZINE好きの皆さんと交流をもって、みんなでZINEを楽しむ日にしましょう。
                        </div>
                        <div class="parco-time">
                            ＊⽇時　3/23(土)　12:00-17:00 ※雨天3/24(日)順延
                        </div>
                        <div class="parco-adress">＊場所　屋上</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-block js-modal modal-03">
        <div class="modal-bg js-modalclose"></div>
        <div class="modal-wrap">
            <button class="modal-close js-modalclose">
                <img src="assets/images/icon-close.svg" alt="icon close">
            </button>
            <div class="modal-cont">
                <div class="img-wrap">
                    <div class="img-wrap__slider js-modal-slider">
                        <div class="img"><img src="assets/images/event_3_1.jpg" alt="冷蔵文庫"></div>
                        <div class="img"><img src="assets/images/event_3_2.jpg" alt="冷蔵文庫"></div>
                        <div class="img"><img src="assets/images/event_3_3.jpg" alt="冷蔵文庫"></div>
                    </div>
                </div>
                <div class=" modal-detail">
                    <div class=" modal-item-info">
                        <div class="parco-tag">
                            <img src="assets/images/parco-tag.svg" alt="PARCO初">
                        </div>
                        <div class="parco-title">
                            <h3>冷蔵文庫</h3>
                        </div>
                        <div class="parco-desciption">
                            冷蔵文庫とは、リサイクルなどの活動をもっと楽しく・優しい気持ちで行う「やさしい循環」というテーマから生まれた物々交換の本棚です。<br>
                            冷蔵庫をリメイクしたこの本棚で、"見知らぬ誰か"と本の交換をしませんか？<br>
                            ラッピング＆本のタイトルを伏せたメッセージを添えた本を一冊ご持参ください。冷蔵庫の中に入っている本と一冊交換ができます。また古本やZINE、オリジナルグッズなども販売します。
                        </div>
                        <div class="parco-time">
                            ＊⽇時　3/23(土)
                        </div>
                        <div class="parco-adress">＊場所　1F　正面入口</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-block js-modal modal-04">
        <div class="modal-bg js-modalclose"></div>
        <div class="modal-wrap">
            <button class="modal-close js-modalclose">
                <img src="assets/images/icon-close.svg" alt="icon close">
            </button>
            <div class="modal-cont">
                <div class="img-wrap">
                    <div class="img-wrap__slider js-modal-slider">
                        <div class="img"><img src="assets/images/event_3_3.jpg" alt="BOOK TRUCK"></div>
                    </div>
                </div>
                <div class=" modal-detail">
                    <div class=" modal-item-info">
                        <div class="parco-title">
                            <h3>BOOK TRUCK</h3>
                        </div>
                        <div class="parco-desciption">
                            BOOK TRUCKは公園や駅前、野外イベントなどの行く先々に合わせて、その都度品揃えや形態が変わるフレキシブルな移動本屋です。新刊書、古書、洋書、リトルプレスなどを販売します。
                        </div>
                        <div class="parco-time">
                            ＊⽇時　3/23(土)・24(日)
                        </div>
                        <div class="parco-adress">＊場所　1F　正面入口</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-block js-modal modal-05">
        <div class="modal-bg js-modalclose"></div>
        <div class="modal-wrap">
            <button class="modal-close js-modalclose">
                <img src="assets/images/icon-close.svg" alt="icon close">
            </button>
            <div class="modal-cont">
                <div class="img-wrap">
                    <div class="img-wrap__slider js-modal-slider">
                        <div class="img"><img src="assets/images/event_5.jpg" alt="芝生蚤の市 in吉祥寺PARCO ‘24 SPRING"></div>
                    </div>
                </div>
                <div class=" modal-detail">
                    <div class=" modal-item-info">
                        <div class="parco-tag">
                            <img src="assets/images/parco-tag.svg" alt="PARCO初">
                        </div>
                        <div class="parco-title">
                            <h3>芝生蚤の市 in吉祥寺PARCO ‘24 SPRING</h3>
                        </div>
                        <div class="parco-desciption">
                            「どんなものでも役にたつ」を目指す芝生蚤の市がアート＆クラフトマーケットとしてKICHIJOJI PARCO SUSTAINABLE DAYS開催中の吉祥寺PARCO屋上で開催。<br>
                            古道具や紙、陶芸作家などによるブースとおいしいおやつやパンと音楽のマーケットに加えて、訳アリものを集めたB品、リサイクル品も織りまぜた楽しい1日です。<br>
                            また関連イベントとして前日にフリーマーケットを開催します。<br><br>

                            ■みんなのフリマ吉祥寺<br>
                            3/30（土） 10:00～15:00<br>
                            ■芝生蚤の市<br>
                            3/31（日） 10:00～16:00
                        </div>
                        <div class="parco-time">
                            ＊⽇時　3/30(土)・31(日)
                        </div>
                        <div class="parco-adress">＊場所　屋上</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-block js-modal modal-06">
        <div class="modal-bg js-modalclose"></div>
        <div class="modal-wrap">
            <button class="modal-close js-modalclose">
                <img src="assets/images/icon-close.svg" alt="icon close">
            </button>
            <div class="modal-cont">
                <div class="img-wrap">
                    <div class="img-wrap__slider js-modal-slider">
                        <div class="img"><img src="assets/images/event_6_1.jpg" alt="コスメのイッポ"></div>
                        <div class="img"><img src="assets/images/event_6_2.jpg" alt="コスメのイッポ"></div>
                        <div class="img"><img src="assets/images/event_6_3.jpg" alt="コスメのイッポ"></div>
                    </div>
                </div>
                <div class=" modal-detail">
                    <div class=" modal-item-info">
                        <div class="parco-tag">
                            <img src="assets/images/parco-tag.svg" alt="PARCO初">
                        </div>
                        <div class="parco-title">
                            <h3>コスメのイッポ</h3>
                        </div>
                        <div class="parco-desciption">
                            「COSME no IPPO（コスメノイッポ）」は、役目を終えたカラーコスメをアップサイクルして新たな価値をもたらすプロジェクト。回収したカラーコスメは、エシカルなクレヨン「ハロヨン」へと生まれ変わります。<br><br>

                            ■回収可能なコスメ<br>
                            アイシャドー（リキッドタイプ対象外）、チーク、ハイライト、リップ（リップグロス、リップクリーム対象外）、パウダータイプアイブロウ、粉白粉、フェースカラー
                            ※使いかけのコスメ、練タイプやペンシルタイプも回収可能です。<br>
                            ※ブランドは問いません。<br>
                            ※一度回収したコスメはご返却いたしかねます。
                        </div>
                        <div class="parco-time">
                            ＊⽇時　3/15(金)～31(日)
                        </div>
                        <div class="parco-adress">＊場所　3F　エスカレーター横</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-block js-modal modal-07">
        <div class="modal-bg js-modalclose"></div>
        <div class="modal-wrap">
            <button class="modal-close js-modalclose">
                <img src="assets/images/icon-close.svg" alt="icon close">
            </button>
            <div class="modal-cont">
                <div class="img-wrap">
                    <div class="img-wrap__slider js-modal-slider">
                        <div class="img"><img src="assets/images/event_7.jpg" alt="「気候危機打開！むさしの市民エコアクション」展示"></div>
                    </div>
                </div>
                <div class=" modal-detail">
                    <div class=" modal-item-info">
                        <div class="parco-tag">
                            <img src="assets/images/parco-tag.svg" alt="PARCO初">
                        </div>
                        <div class="parco-title">
                            <h3>「気候危機打開！むさしの市民エコアクション」展示</h3>
                        </div>
                        <div class="parco-desciption">
                            気候危機に対する、暮らしの中でのエコアクションを始めませんか？<br>
                            私たち一人ひとりの活動によって排出された温室効果ガスにより、すでに世界各地でさまざまな問題が起きています。市民のみなさんによって議論され出来上がった、「気候危機打開！むさしの市民エコアクション」のパネル展示を見て、暮らしに取り入れられそう・取り入れたいエコアクションを考えてみましょう！
                        </div>
                        <div class="parco-time">
                            ＊⽇時　3/15(金)～31(日)
                        </div>
                        <div class="parco-adress">＊場所　3F　エスカレーター横</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-block js-modal talk-modal-01">
        <div class="modal-bg js-modalclose"></div>
        <div class="modal-wrap">
            <button class="modal-close js-modalclose">
                <img src="assets/images/icon-close.svg" alt="icon close">
            </button>
            <div class="modal-cont">
                <div class="img-wrap">
                    <div class="img-wrap__slider js-modal-slider">
                        <div class="img"><img src="assets/images/talkshow_1_1.jpg" alt="スタイルテーブルトークショー「サスティナブル入門」"></div>
                        <div class="img"><img src="assets/images/talkshow_1_2.jpg" alt="スタイルテーブルトークショー「サスティナブル入門」"></div>
                    </div>
                </div>
                <div class=" modal-detail">
                    <div class=" modal-item-info">
                        <div class="parco-title">
                            <h3>スタイルテーブル<br>トークショー「サスティナブル入門」</h3>
                        </div>
                        <div class="parco-desciption">
                            スタイルテーブル <br>吉祥寺PARCO店オーナーであり、日本ヴィーガン協会理事、Vegan検定認定講師である土井あゆみが、今日から取り入れられるサスティナブルな取り組みを紹介します。<br>
                            期間中は1Fスタイルテーブルの店頭で「サスティナブル入門キット」を限定販売！<br><br>

                            ■参加費<br>
                            1,000円（税込）<br>
                            お土産付き<br><br>

                            お申し込みはこちら<br>
                            <a href="https://stkichijoji0316.peatix.com" target="_blank">https://stkichijoji0316.peatix.com</a>
                        </div>
                        <div class="parco-time">
                            ＊⽇時　3/16(土)　12:00～13:00
                        </div>
                        <div class="parco-adress">＊場所　8F　スキーマ</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-block js-modal talk-modal-02">
        <div class="modal-bg js-modalclose"></div>
        <div class="modal-wrap">
            <button class="modal-close js-modalclose">
                <img src="assets/images/icon-close.svg" alt="icon close">
            </button>
            <div class="modal-cont">
                <div class="img-wrap">
                    <div class="img-wrap__slider js-modal-slider">
                        <div class="img"><img src="assets/images/talkshow_2.jpg" alt="スタイルテーブル2種類から選べるワークショップ"></div>
                    </div>
                </div>
                <div class=" modal-detail">
                    <div class=" modal-item-info">
                        <div class="parco-title">
                            <h3>スタイルテーブル<br>2種類から選べるワークショップ</h3>
                        </div>
                        <div class="parco-desciption">
                            1F　スタイルテーブルによるサスティナブルワークショップを開催。<br>
                            2種類からお好きなワークショップをお選びいただけます。<br><br>

                            ■みつろうラップ作り　300円（税込）〜<br>
                            みつろうラップは、みつろうを布に染み込ませて作るラップです。水洗いして繰り返し使えます。ご自宅の布をお持ち込みいただいて作ることもできます。<br><br>

                            ■ペットボトルキャップでアクセサリー作り　1,500円（税込）<br>
                            家庭用のアイロンと簡単な道具でプラスチックごみからかわいいアクセサリーを作ります。<br><br>

                            お申し込みはこちら<br>
                            <a href="https://stkichijoji03170330.peatix.com/" target="_blank">https://stkichijoji03170330.peatix.com/</a>
                        </div>
                        <div class="parco-time">
                            ＊⽇時　3/17(日)・30(土)
                        </div>
                        <div class="parco-adress">＊場所　2F　エスカレーター横</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-block js-modal talk-modal-03">
        <div class="modal-bg js-modalclose"></div>
        <div class="modal-wrap">
            <button class="modal-close js-modalclose">
                <img src="assets/images/icon-close.svg" alt="icon close">
            </button>
            <div class="modal-cont">
                <div class="img-wrap">
                    <div class="img-wrap__slider js-modal-slider">
                        <div class="img"><img src="assets/images/talkshow_3_1.jpg" alt="生活の木～私にできるサステナブル～和精油×星座の練り香水＆フレグランススプレー作り"></div>
                        <div class="img"><img src="assets/images/talkshow_3_2.jpg" alt="生活の木～私にできるサステナブル～和精油×星座の練り香水＆フレグランススプレー作り"></div>
                        <div class="img"><img src="assets/images/talkshow_3_3.jpg" alt="生活の木～私にできるサステナブル～和精油×星座の練り香水＆フレグランススプレー作り"></div>
                    </div>
                </div>
                <div class=" modal-detail">
                    <div class=" modal-item-info">
                        <div class="parco-title">
                            <h3>生活の木<br>
                            ～私にできるサステナブル～
                            <br>和精油×星座の練り香水＆フレグランススプレー作り</h3>
                        </div>
                        <div class="parco-desciption">
                            2F　生活の木によるサステナブルワークショップ。<br>
                            和の香りは日本人に懐かしい風景を思い起こさせます。今回はそんな和精油の中でもなじみ深い「ヒノキ」をピックアップ！ヒノキにご自身の星座の香りをあわせていつでもお守りのようにつけられる練り香水とフレグランススプレーを作ります。<br>
                            日本の精油を使用することで輸送の際にでるCO2削減に貢献！自分だけの香りを楽しみながら環境にもいいことはじめませんか。<br><br>

                            ■参加費<br>
                            2,035円（税込）
                        </div>
                        <div class="parco-time">
                            ＊⽇時　3/23(土)～25(月)
                        </div>
                        <div class="parco-adress">＊場所　2F　エスカレーター横</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-block js-modal talk-modal-04">
        <div class="modal-bg js-modalclose"></div>
        <div class="modal-wrap">
            <button class="modal-close js-modalclose">
                <img src="assets/images/icon-close.svg" alt="icon close">
            </button>
            <div class="modal-cont">
                <div class="img-wrap">
                    <div class="img-wrap__slider js-modal-slider">
                        <div class="img"><img src="assets/images/talkshow_4.jpg" alt="スティールパンとあそぼう"></div>
                    </div>
                </div>
                <div class=" modal-detail">
                    <div class=" modal-item-info">
                        <div class="parco-tag">
                            <img src="assets/images/parco-tag-02.svg" alt="PARCO初">
                        </div>
                        <div class="parco-title">
                            <h3>スティールパンとあそぼう</h3>
                        </div>
                        <div class="parco-desciption">
                            「スティールパン」とはドラム缶から作られたカリブの島の楽器です。身近にある空き缶（スチール缶)をハンマーで叩き、色塗り、デコレーションをして世界にひとつの「スチール缶パン」を作って演奏しましょう！<br><br>

                            ■講師<br>
                            伊澤陽一（スティールパン奏者）<br>
                            <a href="https://www.steelpanlife.com/" target="_blank">https://www.steelpanlife.com/</a><br><br>

                            ■参加費<br>
                            1,000円（税込）<br><br>

                            ■持ち物<br>
                            スチール缶の空き缶（ツナ缶、トマト缶、ジュース缶など。アルミ缶はNG）<br>
                            消しゴム付き鉛筆<br><br>

                            ■お申し込み<br>
                            お名前、参加ご希望時間、参加人数、電話番号明記のうえ、cancanmusic2020@gmail.com　までお申込みください。
                        </div>
                        <div class="parco-time">
                            ＊⽇時　3/30(土)
                        </div>
                        <div class="parco-adress">＊場所　1F　ターンザテーブル</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-block js-modal talk-modal-05">
        <div class="modal-bg js-modalclose"></div>
        <div class="modal-wrap">
            <button class="modal-close js-modalclose">
                <img src="assets/images/icon-close.svg" alt="icon close">
            </button>
            <div class="modal-cont">
                <div class="img-wrap">
                    <div class="img-wrap__slider js-modal-slider">
                        <div class="img"><img src="assets/images/talkshow_5.jpg" alt="バードコールをつくろう"></div>
                    </div>
                </div>
                <div class=" modal-detail">
                    <div class=" modal-item-info">
                        <div class="parco-title">
                            <h3>バードコールをつくろう</h3>
                        </div>
                        <div class="parco-desciption">
                           家具の端材などの木片を鳥の体に見立て、ヴィンテージの毛糸などを使ってトサカやシッポをつけ、鳥の鳴き声を出すバードコールを作ります。大人も子どももさまざまな材料を使って、自分だけの愉快な鳥を作りましょう！<br><br>

                            ■講師<br>
                            シーナアキコ（マリンバ・ピアノ・ガラクタ奏者）<br>
                            <a href="https://c-bara.mystrikingly.com/" target="_blank">https://c-bara.mystrikingly.com/</a><br><br>

                            ■参加費<br>
                            1,500円（税込）
                        </div>
                        <div class="parco-time">
                            ＊⽇時　3/31(日)
                        </div>
                        <div class="parco-adress">＊場所　1F　ターンザテーブル</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-block js-modal pop-modal-1">
        <div class="modal-bg js-modalclose"></div>
        <div class="modal-wrap">
            <button class="modal-close js-modalclose">
                <img src="assets/images/icon-close.svg" alt="icon close">
            </button>
            <div class="modal-cont">
                <div class="img-wrap">
                    <div class="img-wrap__slider js-modal-slider">
                        <div class="img"><img src="assets/images/thumb.png" alt="TABESUS"></div>
                    </div>
                </div>
                <div class=" modal-detail">
                    <div class=" modal-item-info">
                        <div class="parco-tag">
                            <img src="assets/images/parco-tag-02.svg" alt="PARCO初">
                        </div>
                        <div class="parco-title">
                            <h3>TABESUS</h3>
                        </div>
                        <div class="parco-desciption">
                           回収中
                        </div>
                        <div class="parco-time">
                            ＊⽇時　3/30(土)・31(日)
                        </div>
                        <div class="parco-adress">＊場所　1F　正面入口</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-block js-modal pop-modal-2">
        <div class="modal-bg js-modalclose"></div>
        <div class="modal-wrap">
            <button class="modal-close js-modalclose">
                <img src="assets/images/icon-close.svg" alt="icon close">
            </button>
            <div class="modal-cont">
                <div class="img-wrap">
                    <div class="img-wrap__slider js-modal-slider">
                        <div class="img"><img src="assets/images/popup_2.jpg" alt="ラ・グラスマチネ"></div>
                    </div>
                </div>
                <div class=" modal-detail">
                    <div class=" modal-item-info">
                        <div class="parco-title">
                            <h3>ラ・グラスマチネ</h3>
                        </div>
                        <div class="parco-desciption">
                           2010年にパリで開業。2015年から実店舗を持たず日本各地でイベント出店を行なっています。<br>
                            5年間の在仏経験とフランス語を生かした独自な商品仕入れを得意としており、様々なフランスアンティーク、ブロカント（古道具）をお手頃価格で提供しています。<br>
                            ラ・グラスマチネのコンセプトは、パリの蚤の市をそのまま、商品構成や価格、ディスプレイも含めて日本で再現する事です。<br>
                            扱う商材は様々で、目玉商品でアイキャッチでもあるハンコを中心に、紙もの、雑貨、食器、アクセサリーなどがあります。ぜひ掘り出し物を探しにいらしてください。
                        </div>
                        <div class="parco-time">
                            ＊⽇時　3/15(金)～24(日)　11:00～19:00
                        </div>
                        <div class="parco-adress">＊場所　1F　ターンザテーブル</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-block js-modal pop-modal-3">
        <div class="modal-bg js-modalclose"></div>
        <div class="modal-wrap">
            <button class="modal-close js-modalclose">
                <img src="assets/images/icon-close.svg" alt="icon close">
            </button>
            <div class="modal-cont">
                <div class="img-wrap">
                    <div class="img-wrap__slider js-modal-slider">
                        <div class="img"><img src="assets/images/popup_3.jpg" alt="植物生活"></div>
                    </div>
                </div>
                <div class=" modal-detail">
                    <div class=" modal-item-info">
                        <div class="parco-title">
                            <h3>植物生活</h3>
                        </div>
                        <div class="parco-desciption">
                           植物生活の「EVER GREEN＆Swags」は、永続する緑の魅力と自然の素材を活かしたスワッグやリースをテーマにしたポップアップショップです。訪れる人々に、環境に優しい生活と花や植物の永続的な美しさを伝える空間を提供します。スタイリッシュなアレンジメントを通じて、自然の素材から生まれる芸術作品の魅力を探求し、心地良い体験を創出します。
                        </div>
                        <div class="parco-time">
                            ＊⽇時　3/15(金)～24(日)
                        </div>
                        <div class="parco-adress">＊場所　1F　公園通り口</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-block js-modal pop-modal-4">
        <div class="modal-bg js-modalclose"></div>
        <div class="modal-wrap">
            <button class="modal-close js-modalclose">
                <img src="assets/images/icon-close.svg" alt="icon close">
            </button>
            <div class="modal-cont">
                <div class="img-wrap">
                    <div class="img-wrap__slider js-modal-slider">
                        <div class="img"><img src="assets/images/popup_4.jpg" alt="The Moon"></div>
                    </div>
                </div>
                <div class=" modal-detail">
                    <div class=" modal-item-info">
                        <div class="parco-tag">
                            <img src="assets/images/parco-tag-03.svg" alt="PARCO初">
                        </div>
                        <div class="parco-title">
                            <h3>The Moon</h3>
                        </div>
                        <div class="parco-desciption">
                           アンティーク照明を中心に西洋アンティーク全般の販売・買取・アンティーク照明の修理を2004年から行っています。
                        </div>
                        <div class="parco-time">
                            ＊⽇時　3/30(土)・31(日)
                        </div>
                        <div class="parco-adress">＊場所　1F　公園通り口</div>
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
                        <a href="https://twitter.com/parco_kichi" target="_blank">
                            <img src="assets/images/x.svg" alt="X">
                        </a>
                    </li>
                    <li class="sns-item">
                        <a href="https://page.line.me/kichijojiparco" target="_blank">
                            <img src="assets/images/line.svg" alt="Line">
                        </a>
                    </li>
                    <li class="sns-item">
                        <a href="https://www.instagram.com/parco_kichijoji_official/" target="_blank">
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
 