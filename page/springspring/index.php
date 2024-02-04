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
        <section class="rido">
            <div class="rido__container">
                <div class="rido__column">
                    <div class="rido__text">
                        <p class="content-text">リードテキストが入ります。あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。<br> うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。</p>
                        <p class="content-text">あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。</p>
                    </div>
                    <div class="rido__img">
                        <picture>
                            <source media="(max-width: 768px)" srcset="/<?php echo DIRNAME; ?>/assets/images/mv-sp.gif">
                            <img src="/<?php echo DIRNAME; ?>/assets/images/rido-sping-logo.svg" class="" alt="spring">
                        </picture>
                    </div>
                </div>
            </div>
        </section>

        <section class="event">
            <h2 class="title">EVENT</h2>
            <div class="event__container">
                <div class="event__column box01">
                    <div class="event__item">
                        <div class="event__item-img">
                            <picture>
                                <source media="(max-width: 768px)" srcset="/<?php echo DIRNAME; ?>/assets/images/mv-sp.gif">
                                <img src="/<?php echo DIRNAME; ?>/assets/images/special-talkshow.svg" class="" alt="SPECIAL TALK SHOW">
                            </picture>
                        </div>
                    </div>
                    <div class="event__item">
                        <div class="event__item-text">
                            <h3 class="event__title">
                                <span>観覧無料！</span>
                                <span>春コスメ「SPECIAL TALKSHOW」</span>
                            </h3>
                            <div class="event__info">
                                <div class="event__info-time">期間：2/24（土）</div>
                                <div class="event__info-address">会場：新館6Fカワラカフェ＆ダイニング フォワード</div>
                            </div>
                            <div class="event__content">
                                <p class="content-text">ビジュアルのモデルも務めた美容クリエイターの「鹿の間」やメイクアップアーティスト「イガリシノブ」が来館し、スペシャルトークショーを開催。各回先着50名様をご招待し、ここでしか聞けない貴重なトークをお楽しみいただけます！<br>11：00～12：00　「鹿の間」×「コスメキッチン・スナイデルビューティ」<br>14：00～15：00　「鹿の間」×「イガリシノブ」</p>
                            </div>
                            <div class="event__btn">
                                <a href="" target="_blank" class="btn-arrow">
                                    CHECK
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="event__column box02">
                    <div class="event__item">
                        <div class="event__item-img">
                            <picture>
                                <source media="(max-width: 768px)" srcset="/<?php echo DIRNAME; ?>/assets/images/mv-sp.gif">
                                <img src="/<?php echo DIRNAME; ?>/assets/images/special-talkshow.svg" class="" alt="SPECIAL TALK SHOW">
                            </picture>
                        </div>
                    </div>
                    <div class="event__item">
                        <div class="event__item-text">
                            <h3 class="event__title">
                                <span>福岡パルコ屋上イベント開催</span>
                                <span>イベントテキスト</span>
                            </h3>
                            <div class="event__info">
                                <div class="event__info-time">会期：2024.3.14</div>
                            </div>
                            <div class="event__content">
                                <p class="content-text">イベントテキストが入ります。あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。<br>イベントテキストが入ります。あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="event__column box03">
                    <div class="event__item">
                        <div class="event__item-img">
                            <picture>
                                <source media="(max-width: 768px)" srcset="/<?php echo DIRNAME; ?>/assets/images/mv-sp.gif">
                                <img src="/<?php echo DIRNAME; ?>/assets/images/special-talkshow.svg" class="" alt="SPECIAL TALK SHOW">
                            </picture>
                        </div>
                    </div>
                    <div class="event__item">
                        <div class="event__item-text">
                            <h3 class="event__title">
                                <span>5,000円以上ご購入でペイバックキャン</span>
                                <span>ペーン</span>
                            </h3>
                            <div class="event__info">
                                <div class="event__info-time">会期：2024.3.14</div>
                            </div>
                            <div class="event__content">
                                <p class="content-text">イベントテキストが入ります。あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。<br>イベントテキストが入ります。あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="present">
            <div class="present__container container">
                <h2 class="title">PRESENT</h2>
                <div class="present__text content-text">
                    <p>福岡PARCO館内にて10,000円(税込・当日中合算可)以上お買い上げのレシートを提示いただくと、各日先着100名様に福岡をはじめとした全国の人気スイーツをプレゼント！ <br>会期：2/17（土）2/18（日）3/9（土）3/10（日）<br>引換会場：新館4F特設会場<br>※お買い上げ当日中のレシートが対象になります。</p>
                </div>
            </div>
            <div class="present__ins">
                <div class="present__ins-container">
                    <div class="present__ins-column">
                        <div class="present__ins-item">
                            <div class="present__ins-item-box">
                                <div class="present__ins-time">2/17 Sat.</div>
                                <div class="present__ins-thumb">
                                    <picture>
                                        <source media="(max-width: 768px)" srcset="/<?php echo DIRNAME; ?>/assets/images/mv-sp.gif">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/sample01.png" class="" alt="spring">
                                    </picture>
                                </div>
                                <div class="present__ins-link">
                                    <a href="" target="_blank">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/ins.svg" alt="instagram">
                                    </a>
                                </div>
                                <div class="present__ins-product">
                                    <div class="present__ins-product-title">
                                        フランス菓子１６区 ダックワーズ（3袋入り）
                                    </div>
                                    <div class="present__ins-product-desc">
                                        福岡県の薬院にある、パリで4年修業した三島隆夫シェフがオーナーを務める老舗スイーツ店「フランス菓子16区」 本店の看板商品である焼き菓子「ダックワーズ」の3袋入りセット。
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="present__ins-item">
                            <div class="present__ins-item-box">
                                <div class="present__ins-time">2/17 Sat.</div>
                                <div class="present__ins-thumb">
                                    <picture>
                                        <source media="(max-width: 768px)" srcset="/<?php echo DIRNAME; ?>/assets/images/mv-sp.gif">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/sample01.png" class="" alt="spring">
                                    </picture>
                                </div>
                                <div class="present__ins-link">
                                    <a href="" target="_blank">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/ins.svg" alt="instagram">
                                    </a>
                                </div>
                                <div class="present__ins-product">
                                    <div class="present__ins-product-title">
                                        フランス菓子１６区 ダックワーズ（3袋入り）
                                    </div>
                                    <div class="present__ins-product-desc">
                                        福岡県の薬院にある、パリで4年修業した三島隆夫シェフがオーナーを務める老舗スイーツ店「フランス菓子16区」 本店の看板商品である焼き菓子「ダックワーズ」の3袋入りセット。
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="present__ins-item">
                            <div class="present__ins-item-box">
                                <div class="present__ins-time">2/17 Sat.</div>
                                <div class="present__ins-thumb">
                                    <picture>
                                        <source media="(max-width: 768px)" srcset="/<?php echo DIRNAME; ?>/assets/images/mv-sp.gif">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/sample01.png" class="" alt="spring">
                                    </picture>
                                </div>
                                <div class="present__ins-link">
                                    <a href="" target="_blank">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/ins.svg" alt="instagram">
                                    </a>
                                </div>
                                <div class="present__ins-product">
                                    <div class="present__ins-product-title">
                                        フランス菓子１６区 ダックワーズ（3袋入り）
                                    </div>
                                    <div class="present__ins-product-desc">
                                        福岡県の薬院にある、パリで4年修業した三島隆夫シェフがオーナーを務める老舗スイーツ店「フランス菓子16区」 本店の看板商品である焼き菓子「ダックワーズ」の3袋入りセット。
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="present__ins-item">
                            <div class="present__ins-item-box">
                                <div class="present__ins-time">2/17 Sat.</div>
                                <div class="present__ins-thumb">
                                    <picture>
                                        <source media="(max-width: 768px)" srcset="/<?php echo DIRNAME; ?>/assets/images/mv-sp.gif">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/sample01.png" class="" alt="spring">
                                    </picture>
                                </div>
                                <div class="present__ins-link">
                                    <a href="" target="_blank">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/ins.svg" alt="instagram">
                                    </a>
                                </div>
                                <div class="present__ins-product">
                                    <div class="present__ins-product-title">
                                        フランス菓子１６区 ダックワーズ（3袋入り）
                                    </div>
                                    <div class="present__ins-product-desc">
                                        福岡県の薬院にある、パリで4年修業した三島隆夫シェフがオーナーを務める老舗スイーツ店「フランス菓子16区」 本店の看板商品である焼き菓子「ダックワーズ」の3袋入りセット。
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="shop-event">
            <div class="shop-event__container container">
                <h2 class="title">SHOP EVENT</h2>
                <div class="shop-event__text content-text">
                    <p>テキストが入ります。あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。</p>
                </div>
                <div class="shop-event__column">
                    <div class="shop-event__item">
                        <div class="shop-event__item-box">
                            <div class="shop-event__item-thumb">
                                <picture>
                                    <source media="(max-width: 768px)" srcset="/<?php echo DIRNAME; ?>/assets/images/mv-sp.gif">
                                    <img src="/<?php echo DIRNAME; ?>/assets/images/sample02.png" class="" alt="spring">
                                </picture>
                            </div>
                            <div class="shop-event__content">
                                <div class="shop-event__item-title">テキストが入りますテキストが入りますテキストが入ります。</div>
                                <div class="shop-event__item-time">2024.3.14〜2024.3.14</div>
                                <div class="shop-event__item-footer">
                                    <div class="shop-event__item-logo">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/sample-logo.png" class="" alt="spring">
                                    </div>
                                    <div class="shop-event__item-front">
                                        <div class="shop-event__item-floor">1F</div>
                                        <div class="shop-event__item-name">テナント名テナント名テナント名</div>
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
                                            <div class="img"><img src="/<?php echo DIRNAME; ?>/assets/images/sample02.png" alt=""></div>
                                        </div>
                                    </div>
                                    <div class=" modal-detail">
                                        <div class=" modal-item-info">
                                            <div class="shop-event__item-time">2/17 Sat. - 2/17 Sat.</div>
                                            <div class="shop-event__item-title">テナント名テナント名テナント名</div>
                                            <div class="shop-event__item-desc">テキストが入ります。あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。 テキストが入ります。</div>
                                        </div>
                                        <div class=" modal-shop-info">
                                            <div class="shop-event__item-footer">
                                                <div class="shop-event__item-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/sample-logo.png" class="" alt="spring">
                                                </div>
                                                <div class="shop-event__item-front">
                                                    <div class="shop-event__item-floor">1F</div>
                                                    <div class="shop-event__item-name">テナント名テナント名テナント名</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop-event__item">
                        <div class="shop-event__item-box">
                            <div class="shop-event__item-thumb">
                                <picture>
                                    <source media="(max-width: 768px)" srcset="/<?php echo DIRNAME; ?>/assets/images/mv-sp.gif">
                                    <img src="/<?php echo DIRNAME; ?>/assets/images/sample02.png" class="" alt="spring">
                                </picture>
                            </div>
                            <div class="shop-event__content">
                                <div class="shop-event__item-title">テキストが入りますテキストが入りますテキストが入ります。</div>
                                <div class="shop-event__item-time">2024.3.14〜2024.3.14</div>
                                <div class="shop-event__item-footer">
                                    <div class="shop-event__item-logo">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/sample-logo.png" class="" alt="spring">
                                    </div>
                                    <div class="shop-event__item-front">
                                        <div class="shop-event__item-floor">1F</div>
                                        <div class="shop-event__item-name">テナント名テナント名テナント名</div>
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
                                            <div class="img"><img src="/<?php echo DIRNAME; ?>/assets/images/sample02.png" alt=""></div>
                                        </div>
                                    </div>
                                    <div class=" modal-detail">
                                        <div class=" modal-item-info">
                                            <div class="shop-event__item-time">2/17 Sat. - 2/17 Sat.</div>
                                            <div class="shop-event__item-title">テナント名テナント名テナント名</div>
                                            <div class="shop-event__item-desc">テキストが入ります。あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。 テキストが入ります。</div>
                                        </div>
                                        <div class=" modal-shop-info">
                                            <div class="shop-event__item-footer">
                                                <div class="shop-event__item-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/sample-logo.png" class="" alt="spring">
                                                </div>
                                                <div class="shop-event__item-front">
                                                    <div class="shop-event__item-floor">1F</div>
                                                    <div class="shop-event__item-name">テナント名テナント名テナント名</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop-event__item">
                        <div class="shop-event__item-box">
                            <div class="shop-event__item-thumb">
                                <picture>
                                    <source media="(max-width: 768px)" srcset="/<?php echo DIRNAME; ?>/assets/images/mv-sp.gif">
                                    <img src="/<?php echo DIRNAME; ?>/assets/images/sample02.png" class="" alt="spring">
                                </picture>
                            </div>
                            <div class="shop-event__content">
                                <div class="shop-event__item-title">テキストが入りますテキストが入りますテキストが入ります。</div>
                                <div class="shop-event__item-time">2024.3.14〜2024.3.14</div>
                                <div class="shop-event__item-footer">
                                    <div class="shop-event__item-logo">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/sample-logo.png" class="" alt="spring">
                                    </div>
                                    <div class="shop-event__item-front">
                                        <div class="shop-event__item-floor">1F</div>
                                        <div class="shop-event__item-name">テナント名テナント名テナント名</div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-event__item-btn">
                                <button>
                                    <img src="/<?php echo DIRNAME; ?>/assets/images/plus.svg" alt="plus">
                                </button>
                            </div>
                        </div>
                        <div class="modal-block js-modal">
                            <div class="modal-bg js-modalclose"></div>
                            
                            <div class="modal-wrap">
                                <button class="modal-close js-modalclose">
                                    <img src="/<?php echo DIRNAME; ?>/assets/images/icon-close.svg" alt="icon close">
                                </button>
                                <div class="modal-cont">
                                    <div class="img-wrap">
                                        <div class="img-wrap__slider js-imgslider">
                                            <div class="img"><img src="/<?php echo DIRNAME; ?>/assets/images/sample02.png" alt=""></div>
                                        </div>
                                    </div>
                                    <div class=" modal-detail">
                                        <div class=" modal-item-info">
                                            <div class="shop-event__item-time">2/17 Sat. - 2/17 Sat.</div>
                                            <div class="shop-event__item-title">テナント名テナント名テナント名</div>
                                            <div class="shop-event__item-desc">テキストが入ります。あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。 テキストが入ります。</div>
                                        </div>
                                        <div class=" modal-shop-info">
                                            <div class="shop-event__item-footer">
                                                <div class="shop-event__item-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/sample-logo.png" class="" alt="spring">
                                                </div>
                                                <div class="shop-event__item-front">
                                                    <div class="shop-event__item-floor">1F</div>
                                                    <div class="shop-event__item-name">テナント名テナント名テナント名</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop-event__item">
                        <div class="shop-event__item-box">
                            <div class="shop-event__item-thumb">
                                <picture>
                                    <source media="(max-width: 768px)" srcset="/<?php echo DIRNAME; ?>/assets/images/mv-sp.gif">
                                    <img src="/<?php echo DIRNAME; ?>/assets/images/sample02.png" class="" alt="spring">
                                </picture>
                            </div>
                            <div class="shop-event__content">
                                <div class="shop-event__item-title">テキストが入りますテキストが入りますテキストが入ります。</div>
                                <div class="shop-event__item-time">2024.3.14〜2024.3.14</div>
                                <div class="shop-event__item-footer">
                                    <div class="shop-event__item-logo">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/sample-logo.png" class="" alt="spring">
                                    </div>
                                    <div class="shop-event__item-front">
                                        <div class="shop-event__item-floor">1F</div>
                                        <div class="shop-event__item-name">テナント名テナント名テナント名</div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-event__item-btn">
                                <button>
                                    <img src="/<?php echo DIRNAME; ?>/assets/images/plus.svg" alt="plus">
                                </button>
                            </div>
                        </div>
                        <div class="modal-block js-modal">
                            <div class="modal-bg js-modalclose"></div>
                            
                            <div class="modal-wrap">
                                <button class="modal-close js-modalclose">
                                    <img src="/<?php echo DIRNAME; ?>/assets/images/icon-close.svg" alt="icon close">
                                </button>
                                <div class="modal-cont">
                                    <div class="img-wrap">
                                        <div class="img-wrap__slider js-imgslider">
                                            <div class="img"><img src="/<?php echo DIRNAME; ?>/assets/images/sample02.png" alt=""></div>
                                        </div>
                                    </div>
                                    <div class=" modal-detail">
                                        <div class=" modal-item-info">
                                            <div class="shop-event__item-time">2/17 Sat. - 2/17 Sat.</div>
                                            <div class="shop-event__item-title">テナント名テナント名テナント名</div>
                                            <div class="shop-event__item-desc">テキストが入ります。あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。 テキストが入ります。</div>
                                        </div>
                                        <div class=" modal-shop-info">
                                            <div class="shop-event__item-footer">
                                                <div class="shop-event__item-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/sample-logo.png" class="" alt="spring">
                                                </div>
                                                <div class="shop-event__item-front">
                                                    <div class="shop-event__item-floor">1F</div>
                                                    <div class="shop-event__item-name">テナント名テナント名テナント名</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop-event__item">
                        <div class="shop-event__item-box">
                            <div class="shop-event__item-thumb">
                                <picture>
                                    <source media="(max-width: 768px)" srcset="/<?php echo DIRNAME; ?>/assets/images/mv-sp.gif">
                                    <img src="/<?php echo DIRNAME; ?>/assets/images/sample02.png" class="" alt="spring">
                                </picture>
                            </div>
                            <div class="shop-event__content">
                                <div class="shop-event__item-title">テキストが入りますテキストが入りますテキストが入ります。</div>
                                <div class="shop-event__item-time">2024.3.14〜2024.3.14</div>
                                <div class="shop-event__item-footer">
                                    <div class="shop-event__item-logo">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/sample-logo.png" class="" alt="spring">
                                    </div>
                                    <div class="shop-event__item-front">
                                        <div class="shop-event__item-floor">1F</div>
                                        <div class="shop-event__item-name">テナント名テナント名テナント名</div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-event__item-btn">
                                <button>
                                    <img src="/<?php echo DIRNAME; ?>/assets/images/plus.svg" alt="plus">
                                </button>
                            </div>
                        </div>
                        <div class="modal-block js-modal">
                            <div class="modal-bg js-modalclose"></div>
                            
                            <div class="modal-wrap">
                                <button class="modal-close js-modalclose">
                                    <img src="/<?php echo DIRNAME; ?>/assets/images/icon-close.svg" alt="icon close">
                                </button>
                                <div class="modal-cont">
                                    <div class="img-wrap">
                                        <div class="img-wrap__slider js-imgslider">
                                            <div class="img"><img src="/<?php echo DIRNAME; ?>/assets/images/sample02.png" alt=""></div>
                                        </div>
                                    </div>
                                    <div class=" modal-detail">
                                        <div class=" modal-item-info">
                                            <div class="shop-event__item-time">2/17 Sat. - 2/17 Sat.</div>
                                            <div class="shop-event__item-title">テナント名テナント名テナント名</div>
                                            <div class="shop-event__item-desc">テキストが入ります。あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。 テキストが入ります。</div>
                                        </div>
                                        <div class=" modal-shop-info">
                                            <div class="shop-event__item-footer">
                                                <div class="shop-event__item-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/sample-logo.png" class="" alt="spring">
                                                </div>
                                                <div class="shop-event__item-front">
                                                    <div class="shop-event__item-floor">1F</div>
                                                    <div class="shop-event__item-name">テナント名テナント名テナント名</div>
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
        <section class="new-open">
            <div class="new-open__container container">
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
        </section>
        <section class="visual">
            <div class="visual__content">
                <div class="visual__slick">
                    <div class="visual__slick-item">
                        <img src="/<?php echo DIRNAME; ?>/assets/images/poster_yoko_01.png" alt="">
                    </div>
                    <div class="visual__slick-item">
                        <img src="/<?php echo DIRNAME; ?>/assets/images/poster_yoko_02.png" alt="">
                    </div>
                    <div class="visual__slick-item">
                        <img src="/<?php echo DIRNAME; ?>/assets/images/poster_yoko_03.png" alt="">
                    </div>
                    <div class="visual__slick-item">
                        <img src="/<?php echo DIRNAME; ?>/assets/images/poster_yoko_04.png" alt="">
                    </div>
                    <div class="visual__slick-item">
                        <img src="/<?php echo DIRNAME; ?>/assets/images/poster_yoko_05.png" alt="">
                    </div>
                </div>
            </div>
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