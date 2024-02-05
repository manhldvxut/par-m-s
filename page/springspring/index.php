<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/assets/inc/global-config.php';
//下記のパス「demo」を変更
include_once $_SERVER['DOCUMENT_ROOT'] . '/page/springspring/assets/inc/config.php';

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
$pege_title = 'spring spring FUKUOKA PARCO 2024| 福岡PARCO';
$pege_description = '福岡パルコがお届けする春のファッション・コスメイベント"spring spring FUKUOKA PARCO 2024"素敵な企画をご紹介します。';
$pege_keywords = '';
$page_shareurl = 'https://' . STORE_NAME . '.parco.jp/page/springspring/'; //必ずディレクトリ名を変更する


?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/page/assets/inc/meta.php'; ?>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/tagmanager1.php'; ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Condensed:wght@300;400;500&display=swap" rel="stylesheet">

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/' . DIRNAME . '/assets/inc/css.php'; ?>

</head>

<body class="<?php echo STORE_NAME; ?> top-page page-tag" id="top">
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/inc/tagmanager2.php'; ?>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/page/assets/inc/svgs.php'; ?>
    <div class="wrapper" id="wrapper">
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
        <section class="main-mv">
            <div class="main-mv__content">
                <div class="main-mv__spring-img">
                    <picture>
                        <source media="(max-width: 768px)" srcset="/<?php echo DIRNAME; ?>/assets/images/mv-sp.gif">
                        <img src="/<?php echo DIRNAME; ?>/assets/images/spring-logo-pc.png" class="" alt="spring">
                    </picture>
                </div>
                <div class="main-mv__fukuoka-parco">
                    <picture>
                        <source media="(max-width: 768px)" srcset="/<?php echo DIRNAME; ?>/assets/images/mv-sp.gif">
                        <img src="/<?php echo DIRNAME; ?>/assets/images/fukuoka2024.svg" class="" alt="FUKUOKA PARCO 2024">
                    </picture>
                </div>
            </div>

            <div class="main-mv__main">
                <picture>
                    <source media="(max-width: 768px)" srcset="/<?php echo DIRNAME; ?>/assets/images/mv-sp.gif">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/main-mv-pc.png" class="" alt="SPRING FUKUOKA PARCO 2024">
                </picture>
            </div>
        </section>
        <section class="box-mv-mobile">
            <div class="avarta"><img src="/<?php echo DIRNAME; ?>/assets/images/mv-mb.jpg" class="w-100" alt="FUKUOKA PARCO 2024"></div>
        </section>
        <section class="box-stick-menu">
            <div class="container">
                <ul>
                    <li><a href="#event" style="color:#F28B9C;">EVENT</a></li>
                    <li><a href="#present" style="color:#E46B70;">PRESENT</a></li>
                    <li><a href="#shop-event" style="color:#FEAB8F;">SHOP EVENT</a></li>
                    <li><a href="#new-open" style="color:#ACD6C5;">NEW＆RENEWAL</a></li>
                    <li><a href="#visual" style="color:#6E92C6;">VISUAL</a></li>
                </ul>
            </div>
        </section>
        <section class="box-hidd-main">
            <section class="rido">
                <div class="container">
                    <div class="rido__column pl-1 pr-1">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="rido__text">
                                    <p class="content-text">リードテキストが入ります。あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。 うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。</p>
                                    <p class="content-text">あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。</p>
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="rido__img src-paralax">
                                    <picture>
                                        <!--                                    <source media="(max-width: 768px)" srcset="/--><?php //echo DIRNAME; ?><!--/assets/images/mv-sp.gif">-->
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/rido-sping-logo.svg" class="" alt="spring">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="event" class="event">
                <div class="icon-abs abs-1 src-paralax"><img src="/<?php echo DIRNAME; ?>/assets/images/bg_parts_01.png" alt=""></div>
                <div class="icon-abs abs-2 src-paralax"><img src="/<?php echo DIRNAME; ?>/assets/images/bg_parts_06.png" alt=""></div>
                <div class="event__header">
                    <h2 class="title">
                        <span>EVENT</span>
                    </h2>
                </div>
                <div class="container">
                    <div class="event__column box01 animation-js">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="event__item">
                                    <div class="even__item-top d-none">
                                        <h3 class="event__title">
                                            <span>観覧無料！</span>
                                            <span>春コスメ「SPECIAL TALKSHOW」</span>
                                        </h3>
                                        <div class="event__info">
                                            <div class="event__info-time">期間：2/24（土）</div>
                                            <div class="event__info-address">会場：新館6Fカワラカフェ＆ダイニング フォワード</div>
                                        </div>
                                    </div>
                                    <div class="event__item-img">
                                        <picture>
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/special-talkshow.jpg" alt="SPECIAL TALK SHOW">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="event__item">
                                    <div class="event__item-text">
                                        <div class="even__item-top">
                                            <h3 class="event__title">
                                                <span>観覧無料！</span>
                                                <span>春コスメ「SPECIAL TALKSHOW」</span>
                                            </h3>
                                            <div class="event__info">
                                                <div class="event__info-time">期間：2/24（土）</div>
                                                <div class="event__info-address">会場：新館6Fカワラカフェ＆ダイニング フォワード</div>
                                            </div>
                                        </div>
                                        <div class="event__content">
                                            <p class="content-text">ビジュアルのモデルも務めた美容クリエイターの「鹿の間」やメイクアップアーティスト「イガリシノブ」が来館し、スペシャルトークショーを開催。各回先着50名様をご招待し、ここでしか聞けない貴重なトークをお楽しみいただけます！<br>11：00～12：00　「鹿の間」×「コスメキッチン・スナイデルビューティ」<br>14：00～15：00　「鹿の間」×「イガリシノブ」</p>
                                        </div>
                                        <div class="event__btn">
                                            <a href="https://fukuoka.parco.jp/pnews/detail/?id=26890" target="_blank" class="btn-arrow">
                                                CHECK
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="event__column box02 animation-js">
                        <div class="icon-abs abs-3 src-paralax"><img src="/<?php echo DIRNAME; ?>/assets/images/bg_parts_02.png" class="" alt="アーネ×パルコ"></div>
                        <div class="icon-abs abs-4 src-paralax"><img src="/<?php echo DIRNAME; ?>/assets/images/bg_parts_08.png" class="" alt="アーネ×パルコ"></div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="event__item">
                                    <div class="even__item-top d-none">
                                        <h3 class="event__title">
                                            <span>アーネ×パルコ</span>
                                        </h3>
                                        <div class="event__info">
                                            <div class="event__info-time">会期：3/1（金）－3/3（日）</div>
                                            <div class="event__info-address">会場：本館1F POPUPSPACE GATE</div>
                                        </div>
                                    </div>
                                    <div class="event__item-img">
                                        <picture>
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="アーネ×パルコ">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="event__item">
                                    <div class="event__item-text">
                                        <div class="even__item-top">
                                            <h3 class="event__title">
                                                <span>アーネ×パルコ</span>
                                            </h3>
                                            <div class="event__info">
                                                <div class="event__info-time">会期：3/1（金）－3/3（日）</div>
                                                <div class="event__info-address">会場：本館1F POPUPSPACE GATE</div>
                                            </div>
                                        </div>
                                        <div class="event__content">
                                            <p class="content-text">イベントテキストが入ります。イベントテキストが入りますイベントテキストが入りますイベントテキストが入りますイベントテキストが入りますイベントテキストが入りますイベントテキストが入りますイベントテキストが入りますイベントテキストが入りますイベントテキストが入りますイベントテキストが入ります</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="event__column box03 animation-js">
                        <div class="icon-abs abs-5 src-paralax"><img src="/<?php echo DIRNAME; ?>/assets/images/bg_parts_05.png" class="" alt="アーネ×パルコ"></div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="event__item">
                                    <div class="even__item-top d-none">
                                        <h3 class="event__title">
                                            <span>ペイバック</span>
                                        </h3>
                                        <div class="event__info">
                                            <div class="event__info-time">会期：ダミーテキスト</div>
                                            <div class="event__info-address">会場：ダミーテキスト</div>
                                        </div>
                                    </div>
                                    <div class="event__item-img">
                                        <picture>
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="ペイバック">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="event__item">
                                    <div class="event__item-text">
                                        <div class="even__item-top">
                                            <h3 class="event__title">
                                                <span>ペイバック</span>
                                            </h3>
                                            <div class="event__info">
                                                <div class="event__info-time">会期：ダミーテキスト</div>
                                                <div class="event__info-address">会場：ダミーテキスト</div>
                                            </div>
                                        </div>
                                        <div class="event__content">
                                            <p class="content-text">イベントテキストが入ります。イベントテキストが入りますイベントテキストが入りますイベントテキストが入りますイベントテキストが入りますイベントテキストが入りますイベントテキストが入りますイベントテキストが入りますイベントテキストが入りますイベントテキストが入りますイベントテキストが入ります</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="present" class="present">
                <div class="icon-abs abs-1 src-paralax"><img src="/<?php echo DIRNAME; ?>/assets/images/bg_parts_03.png" class="" alt="アーネ×パルコ"></div>
                <div class="present__container container">
                    <div class="content-resent pl-1 pr-1">
                        <h2 class="title">PRESENT</h2>
                        <div class="present__text content-text">
                            <p>福岡PARCO館内にて10,000円(税込・当日中合算可)<br>以上お買い上げのレシートを提示いただくと、各日先着100名様に福岡をはじめとした全国の人気スイーツをプレゼント！<br>
                                会期：2/17（土）2/18（日）3/9（土）3/10（日）<br>
                                引換会場：新館4F特設会場<br>
                                ※お買い上げ当日中のレシートが対象になります。</p>
                        </div>
                    </div>
                </div>
                <div class="present__ins">
                    <div class="present__ins-container">
                        <div class="present__ins-column">
                            <div class="present__ins-item animation-js">
                                <div class="present__ins-item-box">
                                    <div class="present__ins-time">2/17（土）</div>
                                    <div class="present__ins-thumb">
                                        <picture>
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/present01.png" class="" alt="フランス菓子１６区 ダックワーズ（3袋入り）">
                                        </picture>
                                    </div>
                                    <div class="present__ins-link">
                                        <a href="https://www.instagram.com/16ku_fukuoka.official/" target="_blank">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/ins.svg" alt="instagram">
                                        </a>
                                    </div>
                                    <div class="present__ins-product">
                                        <div class="present__ins-product-title">
                                            フランス菓子１６区 ダックワーズ（3袋入り）
                                        </div>
                                        <div class="present__ins-product-desc">
                                            福岡県の薬院にある、パリで4年修業した三島隆夫シェフがオーナーを務める老舗スイーツ店「フランス菓子16区」<br>本店の看板商品である焼き菓子「ダックワーズ」の3袋入りセット。
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="present__ins-item animation-js">
                                <div class="present__ins-item-box">
                                    <div class="present__ins-time">2/18（日）</div>
                                    <div class="present__ins-thumb">
                                        <picture>
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/present02.jpg" class="" alt="OYATUYA.U ディアサククッキー（３種アソート缶）">
                                        </picture>
                                    </div>
                                    <div class="present__ins-link">
                                        <a href="https://www.instagram.com/p/Cmd26BhPtn4/?img_index=1" target="_blank">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/ins.svg" alt="instagram">
                                        </a>
                                    </div>
                                    <div class="present__ins-product">
                                        <div class="present__ins-product-title">
                                            OYATUYA.U<br>ディアサククッキー（３種アソート缶）
                                        </div>
                                        <div class="present__ins-product-desc">
                                            福岡県の薬院にある、隠れ家のような人気の喫茶店「OYATUYA.U」が作る3種のクッキーが入ったアソート缶。<br>バターの芳醇な味にバニラやココアを組み合わせ、そこに少しゲランドの塩の効いた「OYATUYA.U」らしいクッキー。
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="present__ins-item animation-js">
                                <div class="present__ins-item-box">
                                    <div class="present__ins-time">3/9（土）</div>
                                    <div class="present__ins-thumb">
                                        <picture>
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="spring">
                                        </picture>
                                    </div>
                                    <div class="present__ins-link">
                                        <a href="" target="_blank">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/ins.svg" alt="instagram">
                                        </a>
                                    </div>
                                    <div class="present__ins-product">
                                        <div class="present__ins-product-title">
                                            ダミーテキスト。
                                        </div>
                                        <div class="present__ins-product-desc">
                                            ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="present__ins-item animation-js">
                                <div class="present__ins-item-box">
                                    <div class="present__ins-time">3/10（日</div>
                                    <div class="present__ins-thumb">
                                        <picture>
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="spring">
                                        </picture>
                                    </div>
                                    <div class="present__ins-link">
                                        <a href="" target="_blank">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/ins.svg" alt="instagram">
                                        </a>
                                    </div>
                                    <div class="present__ins-product">
                                        <div class="present__ins-product-title">
                                            ダミーテキスト。
                                        </div>
                                        <div class="present__ins-product-desc">
                                            ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="shop-event" class="shop-event">
                <div class="icon-abs abs-1 src-paralax"><img src="/<?php echo DIRNAME; ?>/assets/images/bg_parts_09.png" class="" alt="アーネ×パルコ"></div>
                <div class="icon-abs abs-2 src-paralax"><img src="/<?php echo DIRNAME; ?>/assets/images/bg_parts_04.png" class="" alt="アーネ×パルコ"></div>
                <div class="shop-event__container container">
                    <div class="row">
                        <div class="col-md-14">
                            <h2 class="title">SHOP EVENT</h2>
                            <div class="shop-event__text content-text">
                                <p>各ショップにて春の特別イベントを開催！</p>
                            </div>
                        </div>
                    </div>
                    <div class="shop-event__column">
                        <div class="shop-event__item animation-js">
                            <div class="shop-event__item-body">
                                <div class="shop-event__item-box">
                                    <div class="shop-event__item-front-hover hover-3D">
                                        <div class="shop-event__item-thumb">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="「mintdesigns」POPUP EVENT">
                                        </div>
                                        <div class="shop-event__content">
                                            <div class="shop-event__item-title">「mintdesigns」POPUP EVENT</div>
                                            <div class="shop-event__item-time">ダミー期間〜ダミー期間</div>
                                            <div class="shop-event__item-footer">
                                                <div class="shop-event__item-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="トリップ">
                                                </div>
                                                <div class="shop-event__item-front">
                                                    <div class="shop-event__item-floor">ダミーFloor</div>
                                                    <div class="shop-event__item-name">トリップ</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-event__item-back-hover hover-3D">
                                        <div class="shop-event__item-thumb">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="トリップ">
                                        </div>
                                        <div class="shop-event__content">
                                            <div class="shop-event__item-title">「mintdesigns」POPUP EVENT</div>
                                            <div class="shop-event__item-time">ダミー期間〜ダミー期間</div>
                                            <div class="shop-event__item-footer">
                                                <div class="shop-event__item-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="トリップ">
                                                </div>
                                                <div class="shop-event__item-front">
                                                    <div class="shop-event__item-floor">ダミーFloor</div>
                                                    <div class="shop-event__item-name">トリップ</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-event__item-btn">
                                    <button data-modal="modal-1">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/plus.svg" alt="plus">
                                    </button>
                                </div>
                            </div>
                            <div class="modal-block js-modal modal-1">
                                <div class="modal-bg js-modalclose"></div>

                                <div class="modal-wrap">
                                    <button class="modal-close js-modalclose">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/icon-close.svg" alt="icon close">
                                    </button>
                                    <div class="modal-cont">
                                        <div class="img-wrap">
                                            <div class="img-wrap__slider js-imgslider">
                                                <div class="img"><img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" alt=""></div>
                                            </div>
                                        </div>
                                        <div class=" modal-detail">
                                            <div class=" modal-item-info">
                                                <div class="shop-event__item-time">ダミー期間〜ダミー期間</div>
                                                <div class="shop-event__item-title">テナント名テナント名テナント名</div>
                                                <div class="shop-event__item-desc">ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。</div>
                                            </div>
                                            <div class=" modal-shop-info">
                                                <div class="shop-event__item-footer">
                                                    <div class="shop-event__item-logo">
                                                        <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="トリップ">
                                                    </div>
                                                    <div class="shop-event__item-front">
                                                        <div class="shop-event__item-floor">ダミーFloor</div>
                                                        <div class="shop-event__item-name">トリップ</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-event__item animation-js">
                            <div class="shop-event__item-body">
                                <div class="shop-event__item-box">
                                    <div class="shop-event__item-front-hover hover-3D">
                                        <div class="shop-event__item-thumb">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="デニム素材の「AZUMABAG」数量限定販売">
                                        </div>
                                        <div class="shop-event__content">
                                            <div class="shop-event__item-title">デニム素材の「AZUMABAG」数量限定販売</div>
                                            <div class="shop-event__item-time">ダミー期間〜ダミー期間</div>
                                            <div class="shop-event__item-footer">
                                                <div class="shop-event__item-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="アンショップ">
                                                </div>
                                                <div class="shop-event__item-front">
                                                    <div class="shop-event__item-floor">ダミーFloor</div>
                                                    <div class="shop-event__item-name">アンショップ</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-event__item-back-hover hover-3D">
                                        <div class="shop-event__item-thumb">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="デニム素材の「AZUMABAG」数量限定販売">
                                        </div>
                                        <div class="shop-event__content">
                                            <div class="shop-event__item-title">デニム素材の「AZUMABAG」数量限定販売</div>
                                            <div class="shop-event__item-time">ダミー期間〜ダミー期間</div>
                                            <div class="shop-event__item-footer">
                                                <div class="shop-event__item-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="アンショップ">
                                                </div>
                                                <div class="shop-event__item-front">
                                                    <div class="shop-event__item-floor">ダミーFloor</div>
                                                    <div class="shop-event__item-name">アンショップ</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-event__item-btn">
                                    <button data-modal="modal-2">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/plus.svg" alt="plus">
                                    </button>
                                </div>
                            </div>
                            <div class="modal-block js-modal modal-2">
                                <div class="modal-bg js-modalclose"></div>
                                <div class="modal-wrap">
                                    <button class="modal-close js-modalclose">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/icon-close.svg" alt="icon close">
                                    </button>
                                    <div class="modal-cont">
                                        <div class="img-wrap">
                                            <div class="img-wrap__slider js-imgslider">
                                                <div class="img"><img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" alt=""></div>
                                            </div>
                                        </div>
                                        <div class=" modal-detail">
                                            <div class=" modal-item-info">
                                                <div class="shop-event__item-time">ダミー期間〜ダミー期間</div>
                                                <div class="shop-event__item-title">デニム素材の「AZUMABAG」数量限定販売</div>
                                                <div class="shop-event__item-desc">ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。</div>
                                            </div>
                                            <div class=" modal-shop-info">
                                                <div class="shop-event__item-footer">
                                                    <div class="shop-event__item-logo">
                                                        <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="アンショップ">
                                                    </div>
                                                    <div class="shop-event__item-front">
                                                        <div class="shop-event__item-floor">ダミーFloor</div>
                                                        <div class="shop-event__item-name">アンショップ</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-event__item animation-js">
                            <div class="shop-event__item-body">
                                <div class="shop-event__item-box">
                                    <div class="shop-event__item-front-hover hover-3D">
                                        <div class="shop-event__item-thumb">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="ストリートブランド Sourcream/サワークリーム コラボアイテム発売">
                                        </div>
                                        <div class="shop-event__content">
                                            <div class="shop-event__item-title">ストリートブランド Sourcream/サワークリーム コラボアイテム発売</div>
                                            <div class="shop-event__item-time">ダミー期間〜ダミー期間</div>
                                            <div class="shop-event__item-footer">
                                                <div class="shop-event__item-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="フーズフーギャラリー">
                                                </div>
                                                <div class="shop-event__item-front">
                                                    <div class="shop-event__item-floor">ダミーFloor</div>
                                                    <div class="shop-event__item-name">フーズフーギャラリー</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-event__item-back-hover hover-3D">
                                        <div class="shop-event__item-thumb">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="ストリートブランド Sourcream/サワークリーム コラボアイテム発売">
                                        </div>
                                        <div class="shop-event__content">
                                            <div class="shop-event__item-title">ストリートブランド Sourcream/サワークリーム コラボアイテム発売</div>
                                            <div class="shop-event__item-time">ダミー期間〜ダミー期間</div>
                                            <div class="shop-event__item-footer">
                                                <div class="shop-event__item-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="フーズフーギャラリー">
                                                </div>
                                                <div class="shop-event__item-front">
                                                    <div class="shop-event__item-floor">ダミーFloor</div>
                                                    <div class="shop-event__item-name">フーズフーギャラリー</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-event__item-btn">
                                    <button data-modal="modal-3">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/plus.svg" alt="plus">
                                    </button>
                                </div>
                            </div>
                            <div class="modal-block js-modal modal-3">
                                <div class="modal-bg js-modalclose"></div>
                                <div class="modal-wrap">
                                    <button class="modal-close js-modalclose">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/icon-close.svg" alt="icon close">
                                    </button>
                                    <div class="modal-cont">
                                        <div class="img-wrap">
                                            <div class="img-wrap__slider js-imgslider">
                                                <div class="img"><img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" alt=""></div>
                                            </div>
                                        </div>
                                        <div class=" modal-detail">
                                            <div class=" modal-item-info">
                                                <div class="shop-event__item-time">ダミー期間〜ダミー期間</div>
                                                <div class="shop-event__item-title">ストリートブランド Sourcream/サワークリーム コラボアイテム発売</div>
                                                <div class="shop-event__item-desc">ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。</div>
                                            </div>
                                            <div class=" modal-shop-info">
                                                <div class="shop-event__item-footer">
                                                    <div class="shop-event__item-logo">
                                                        <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="フーズフーギャラリー">
                                                    </div>
                                                    <div class="shop-event__item-front">
                                                        <div class="shop-event__item-floor">ダミーFloor</div>
                                                        <div class="shop-event__item-name">フーズフーギャラリー</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-event__item animation-js">
                            <div class="shop-event__item-body">
                                <div class="shop-event__item-box">
                                    <div class="shop-event__item-front-hover hover-3D">
                                        <div class="shop-event__item-thumb">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="【LeSportsac ×Adam et Rope'】 別注アイテム発売">
                                        </div>
                                        <div class="shop-event__content">
                                            <div class="shop-event__item-title">【LeSportsac ×Adam et Rope'】 別注アイテム発売</div>
                                            <div class="shop-event__item-time">ダミー期間〜ダミー期間</div>
                                            <div class="shop-event__item-footer">
                                                <div class="shop-event__item-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="アダムエロペ">
                                                </div>
                                                <div class="shop-event__item-front">
                                                    <div class="shop-event__item-floor">ダミーFloor</div>
                                                    <div class="shop-event__item-name">アダムエロペ</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-event__item-back-hover hover-3D">
                                        <div class="shop-event__item-thumb">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="【LeSportsac ×Adam et Rope'】 別注アイテム発売">
                                        </div>
                                        <div class="shop-event__content">
                                            <div class="shop-event__item-title">【LeSportsac ×Adam et Rope'】 別注アイテム発売</div>
                                            <div class="shop-event__item-time">ダミー期間〜ダミー期間</div>
                                            <div class="shop-event__item-footer">
                                                <div class="shop-event__item-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="アダムエロペ">
                                                </div>
                                                <div class="shop-event__item-front">
                                                    <div class="shop-event__item-floor">ダミーFloor</div>
                                                    <div class="shop-event__item-name">アダムエロペ</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-event__item-btn">
                                    <button data-modal="modal-4">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/plus.svg" alt="plus">
                                    </button>
                                </div>
                            </div>
                            <div class="modal-block js-modal modal-4">
                                <div class="modal-bg js-modalclose"></div>
                                <div class="modal-wrap">
                                    <button class="modal-close js-modalclose">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/icon-close.svg" alt="icon close">
                                    </button>
                                    <div class="modal-cont">
                                        <div class="img-wrap">
                                            <div class="img-wrap__slider js-imgslider">
                                                <div class="img"><img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" alt=""></div>
                                            </div>
                                        </div>
                                        <div class=" modal-detail">
                                            <div class=" modal-item-info">
                                                <div class="shop-event__item-time">ダミー期間〜ダミー期間</div>
                                                <div class="shop-event__item-title">【LeSportsac ×Adam et Rope'】 別注アイテム発売</div>
                                                <div class="shop-event__item-desc">ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。</div>
                                            </div>
                                            <div class=" modal-shop-info">
                                                <div class="shop-event__item-footer">
                                                    <div class="shop-event__item-logo">
                                                        <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="アダムエロペ">
                                                    </div>
                                                    <div class="shop-event__item-front">
                                                        <div class="shop-event__item-floor">ダミーFloor</div>
                                                        <div class="shop-event__item-name">アダムエロペ</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-event__item animation-js">
                            <div class="shop-event__item-body">
                                <div class="shop-event__item-box">
                                    <div class="shop-event__item-front-hover hover-3D">
                                        <div class="shop-event__item-thumb">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="ホリスティックスキンケア「Soel」 POPUP EVENT">
                                        </div>
                                        <div class="shop-event__content">
                                            <div class="shop-event__item-title">ホリスティックスキンケア「Soel」 POPUP EVENT</div>
                                            <div class="shop-event__item-time">ダミー期間〜ダミー期間</div>
                                            <div class="shop-event__item-footer">
                                                <div class="shop-event__item-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="アダムエロペ">
                                                </div>
                                                <div class="shop-event__item-front">
                                                    <div class="shop-event__item-floor">ダミーFloor</div>
                                                    <div class="shop-event__item-name">コスメキッチン</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-event__item-back-hover hover-3D">
                                        <div class="shop-event__item-thumb">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="ホリスティックスキンケア「Soel」 POPUP EVENT">
                                        </div>
                                        <div class="shop-event__content">
                                            <div class="shop-event__item-title">ホリスティックスキンケア「Soel」 POPUP EVENT</div>
                                            <div class="shop-event__item-time">ダミー期間〜ダミー期間</div>
                                            <div class="shop-event__item-footer">
                                                <div class="shop-event__item-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="コスメキッチン">
                                                </div>
                                                <div class="shop-event__item-front">
                                                    <div class="shop-event__item-floor">ダミーFloor</div>
                                                    <div class="shop-event__item-name">コスメキッチン</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-event__item-btn">
                                    <button data-modal="modal-5">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/plus.svg" alt="plus">
                                    </button>
                                </div>
                            </div>
                            <div class="modal-block js-modal modal-5">
                                <div class="modal-bg js-modalclose"></div>
                                <div class="modal-wrap">
                                    <button class="modal-close js-modalclose">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/icon-close.svg" alt="icon close">
                                    </button>
                                    <div class="modal-cont">
                                        <div class="img-wrap">
                                            <div class="img-wrap__slider js-imgslider">
                                                <div class="img"><img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" alt=""></div>
                                            </div>
                                        </div>
                                        <div class=" modal-detail">
                                            <div class=" modal-item-info">
                                                <div class="shop-event__item-time">ダミー期間〜ダミー期間</div>
                                                <div class="shop-event__item-title">ホリスティックスキンケア「Soel」 POPUP EVENT</div>
                                                <div class="shop-event__item-desc">ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。</div>
                                            </div>
                                            <div class=" modal-shop-info">
                                                <div class="shop-event__item-footer">
                                                    <div class="shop-event__item-logo">
                                                        <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="コスメキッチン">
                                                    </div>
                                                    <div class="shop-event__item-front">
                                                        <div class="shop-event__item-floor">ダミーFloor</div>
                                                        <div class="shop-event__item-name">コスメキッチン</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-event__item animation-js">
                            <div class="shop-event__item-body">
                                <div class="shop-event__item-box">
                                    <div class="shop-event__item-front-hover hover-3D">
                                        <div class="shop-event__item-thumb">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="クリエイター16名によるオリジナルアイテム発売">
                                        </div>
                                        <div class="shop-event__content">
                                            <div class="shop-event__item-title">クリエイター16名によるオリジナルアイテム発売</div>
                                            <div class="shop-event__item-time">ダミー期間〜ダミー期間</div>
                                            <div class="shop-event__item-footer">
                                                <div class="shop-event__item-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="アダムエロペ">
                                                </div>
                                                <div class="shop-event__item-front">
                                                    <div class="shop-event__item-floor">ダミーFloor</div>
                                                    <div class="shop-event__item-name">サイド</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-event__item-back-hover hover-3D">
                                        <div class="shop-event__item-thumb">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="クリエイター16名によるオリジナルアイテム発売">
                                        </div>
                                        <div class="shop-event__content">
                                            <div class="shop-event__item-title">クリエイター16名によるオリジナルアイテム発売</div>
                                            <div class="shop-event__item-time">ダミー期間〜ダミー期間</div>
                                            <div class="shop-event__item-footer">
                                                <div class="shop-event__item-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="サイド">
                                                </div>
                                                <div class="shop-event__item-front">
                                                    <div class="shop-event__item-floor">ダミーFloor</div>
                                                    <div class="shop-event__item-name">サイド</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-event__item-btn">
                                    <button data-modal="modal-5">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/plus.svg" alt="plus">
                                    </button>
                                </div>
                            </div>
                            <div class="modal-block js-modal modal-5">
                                <div class="modal-bg js-modalclose"></div>
                                <div class="modal-wrap">
                                    <button class="modal-close js-modalclose">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/icon-close.svg" alt="icon close">
                                    </button>
                                    <div class="modal-cont">
                                        <div class="img-wrap">
                                            <div class="img-wrap__slider js-imgslider">
                                                <div class="img"><img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" alt=""></div>
                                            </div>
                                        </div>
                                        <div class=" modal-detail">
                                            <div class=" modal-item-info">
                                                <div class="shop-event__item-time">ダミー期間〜ダミー期間</div>
                                                <div class="shop-event__item-title">クリエイター16名によるオリジナルアイテム発売</div>
                                                <div class="shop-event__item-desc">ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。</div>
                                            </div>
                                            <div class=" modal-shop-info">
                                                <div class="shop-event__item-footer">
                                                    <div class="shop-event__item-logo">
                                                        <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="サイド">
                                                    </div>
                                                    <div class="shop-event__item-front">
                                                        <div class="shop-event__item-floor">ダミーFloor</div>
                                                        <div class="shop-event__item-name">サイド</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="new-open" class="new-open">
                <div class="icon-abs src-paralax"><img src="/<?php echo DIRNAME; ?>/assets/images/abs-open.png" class="" alt="spring"></div>
                <div class="new-open__container container">
                    <div class="row justify-center">
                        <div class="col-md-14">
                            <h2 class="title">NEW OPEN</h2>
                            <div class="new-open__text content-text">
                                <p>イベントテキストが入ります。あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。</p>
                            </div>
                            <div class="new-open__content">
                                <div class="new-open__column">
                                    <div class="new-open__item-left">
                                        <div class="new-open__item-slick">
                                            <div class="new-open__item-slick-item">
                                                <div class="new-open__item-thumb">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/sample02.png" class="" alt="spring">
                                                </div>
<!--                                                <div class="new-open__item-thumb">-->
<!--                                                    <img src="/--><?php //echo DIRNAME; ?><!--/assets/images/sample02.png" class="" alt="spring">-->
<!--                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="new-open__item-right">
                                        <div class="new-open__item-header">
                                            <div class="new-open__item-header-left">
                                                <div class="new-open__item-header-time">
                                                    2/17 Sat.
                                                </div>
                                                <div class="new-open__item-header-floor">
                                                    1F
                                                </div>
                                                <div class="new-open__item-header-name">
                                                    カレンド
                                                </div>
                                            </div>
                                            <div class="new-open__item-header-right">
                                                <div class="new-open__item-header-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/sample-logo.png" class="" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="new-open__item-desc content-text">
                                            <p>ショップテキストが入ります。あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。 ショップテキストが入ります。</p>
                                        </div>
                                        <div class="new-open__link">
                                            <a href="" target="_blank" class="btn-arrow">
                                                CHECK
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="new-open__column">
                                    <div class="new-open__item-left">
                                        <div class="new-open__item-slick">
                                            <div class="new-open__item-slick-item">
                                                <div class="new-open__item-thumb">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/sample02.png" class="" alt="spring">
                                                </div>
                                                <div class="new-open__item-thumb">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/sample02.png" class="" alt="spring">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="new-open__item-right">
                                        <div class="new-open__item-header">
                                            <div class="new-open__item-header-left">
                                                <div class="new-open__item-header-time">
                                                    2/17 Sat.
                                                </div>
                                                <div class="new-open__item-header-floor">
                                                    1F
                                                </div>
                                                <div class="new-open__item-header-name">
                                                    カレンド
                                                </div>
                                            </div>
                                            <div class="new-open__item-header-right">
                                                <div class="new-open__item-header-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/sample-logo.png" class="" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="new-open__item-desc content-text">
                                            <p>ショップテキストが入ります。あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。 ショップテキストが入ります。</p>
                                        </div>
                                        <div class="new-open__link">
                                            <a href="" target="_blank" class="btn-arrow">
                                                CHECK
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="new-open__column">
                                    <div class="new-open__item-left">
                                        <div class="new-open__item-slick">
                                            <div class="new-open__item-slick-item">
                                                <div class="new-open__item-thumb">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/sample02.png" class="" alt="spring">
                                                </div>
                                                <div class="new-open__item-thumb">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/sample02.png" class="" alt="spring">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="new-open__item-right">
                                        <div class="new-open__item-header">
                                            <div class="new-open__item-header-left">
                                                <div class="new-open__item-header-time">
                                                    2/17 Sat.
                                                </div>
                                                <div class="new-open__item-header-floor">
                                                    1F
                                                </div>
                                                <div class="new-open__item-header-name">
                                                    カレンド
                                                </div>
                                            </div>
                                            <div class="new-open__item-header-right">
                                                <div class="new-open__item-header-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/sample-logo.png" class="" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="new-open__item-desc content-text">
                                            <p>ショップテキストが入ります。あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。 ショップテキストが入ります。</p>
                                        </div>
                                        <div class="new-open__link">
                                            <a href="" target="_blank" class="btn-arrow">
                                                CHECK
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="visual" class="visual">
                <div class="container">
                    <div class="row justify-center">
                        <div class="col-md-14">
                            <h2 class="title">VISUAL</h2>
                        </div>
                    </div>
                </div>
                <div class="visual__content">
                    <div class="swiper-container swiper-visual">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="item-avr-visual">
                                    <div class="avarta">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/poster_yoko_01.png" alt="" class="show-pc">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/ps1.jpg" alt="" class="show-mb">
                                    </div>
                                    <div class="caption">hat brand,outer ブランド名,bag brandname,shoes ブランド名,skirt brand,topshat brand,outer ブランド名</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item-avr-visual">
                                    <div class="avarta">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/poster_yoko_02.png" alt="" class="show-pc">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/ps2.jpg" alt="" class="show-mb">
                                    </div>
                                    <div class="caption">hat brand,outer ブランド名,bag brandname,shoes ブランド名,skirt brand,topshat brand,outer ブランド名</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item-avr-visual">
                                    <div class="avarta">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/poster_yoko_03.png" alt="" class="show-pc">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/ps3.jpg" alt="" class="show-mb">
                                    </div>
                                    <div class="caption">hat brand,outer ブランド名,bag brandname,shoes ブランド名,skirt brand,topshat brand,outer ブランド名</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item-avr-visual">
                                    <div class="avarta">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/poster_yoko_04.png" alt="" class="show-pc">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/ps4.jpg" alt="" class="show-mb">
                                    </div>
                                    <div class="caption">hat brand,outer ブランド名,bag brandname,shoes ブランド名,skirt brand,topshat brand,outer ブランド名</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item-avr-visual">
                                    <div class="avarta">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/poster_yoko_05.png" alt="" class="show-pc">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/ps5.jpg" alt="" class="show-mb">
                                    </div>
                                    <div class="caption">hat brand,outer ブランド名,bag brandname,shoes ブランド名,skirt brand,topshat brand,outer ブランド名</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="box-video">
                <div class="container">
                    <div class="row justify-center">
                        <div class="col-md-14">
                            <div class="avr-iframe">
                                <iframe width="1280" height="975" src="https://www.youtube.com/embed/vPcKN4HjoiI" title="Driftveil City - Pokémon / Toothless (Marimba Ringtone)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                            <div class="desc-video">
                                <p>テキストが入りますあのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。</p>
                                <p>テキストが入りますあのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波テキストが入りますあのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。</p>
                            </div>
                            <div class="txt-video-bott">
                                <ul>
                                    <li>クレジットテキストが入りますクレジットテキストが入りますクレジットテキストが入りますクレジットテキストが入りますクレジットテキストが入ります</li>
                                </ul>
                                <ul>
                                    <li>クレジットテキストが入りますクレジットテキストが入りますクレジットテキストが入ります</li>
                                    <li>クレジットテキストが入りますクレジットテキストが入ります</li>
                                    <li>クレジットテキストが入りますクレジットテキストが入りますクレジットテキストが入りますクレジットテキストが入ります</li>
                                </ul>
                                <ul>
                                    <li>クレジットテキストが入りますクレジットテキストが入ります</li>
                                    <li>クレジットテキストが入ります</li>
                                    <li>クレジットテキストが入ります</li>
                                    <li>クレジットテキストが入ります</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </main>
    
    
    
    
</div><!-- /.wrapper -->

    <?php
    /**
    * Footer
    */
    ?>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/page/assets/inc/footer.php'; ?>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/' . DIRNAME . '/assets/inc/js.php'; ?>
    <!-- /Javascript -->
</body>

</html>