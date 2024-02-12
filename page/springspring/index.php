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
$pege_description = '福岡パルコがお届けする春のファッション・コスメイベント“spring spring FUKUOKA PARCO 2024”素敵な企画をご紹介します。';
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
                        <img src="/<?php echo DIRNAME; ?>/assets/images/spring-logo-pc.png" class="" alt="spring">
                    </picture>
                </div>
                <div class="main-mv__fukuoka-parco">
                    <picture>
                        <img src="/<?php echo DIRNAME; ?>/assets/images/fukuoka2024.svg" class="" alt="FUKUOKA PARCO 2024">
                    </picture>
                </div>
            </div>
            <div class="main-mv__main">
                <div class="main-mv__main-list">
                    <div class="main-mv__main-list-item">
                        <picture>
                            <source media="(max-width: 768px)" srcset="/<?php echo DIRNAME; ?>/assets/images/poster_tate_03.jpg">
                            <img src="/<?php echo DIRNAME; ?>/assets/images/poster_yoko_03.jpg" class="" alt="SPRING FUKUOKA PARCO 2024">
                        </picture>
                    </div>
                    <div class="main-mv__main-list-item">
                        <picture>
                            <source media="(max-width: 768px)" srcset="/<?php echo DIRNAME; ?>/assets/images/poster_tate_02.jpg">
                            <img src="/<?php echo DIRNAME; ?>/assets/images/poster_yoko_02.jpg" class="" alt="SPRING FUKUOKA PARCO 2024">
                        </picture>
                    </div>
                    <div class="main-mv__main-list-item">
                        <picture>
                            <source media="(max-width: 768px)" srcset="/<?php echo DIRNAME; ?>/assets/images/poster_tate_01.jpg">
                            <img src="/<?php echo DIRNAME; ?>/assets/images/poster_yoko_01.jpg" class="" alt="SPRING FUKUOKA PARCO 2024">
                        </picture>
                    </div>
                    <div class="main-mv__main-list-item">
                        <picture>
                            <source media="(max-width: 768px)" srcset="/<?php echo DIRNAME; ?>/assets/images/poster_tate_04.jpg">
                            <img src="/<?php echo DIRNAME; ?>/assets/images/poster_yoko_04.jpg" class="" alt="SPRING FUKUOKA PARCO 2024">
                        </picture>
                    </div>
                    <div class="main-mv__main-list-item">
                        <picture>
                            <source media="(max-width: 768px)" srcset="/<?php echo DIRNAME; ?>/assets/images/poster_tate_05.jpg">
                            <img src="/<?php echo DIRNAME; ?>/assets/images/poster_yoko_05.jpg" class="" alt="SPRING FUKUOKA PARCO 2024">
                        </picture>
                    </div>
                </div>
                
            </div>
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
                    <h2 class="title animation-js">
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
                                            <p class="content-text">
                                                ビジュアルのモデルをつとめた美容クリエイターの「鹿の間」さんやメイクアップアーティスト「イガリシノブ」さんが来館し、スペシャルトークショーを開催。各回先着50名様をご招待し、ここでしか聞けない貴重なトークをお楽しみいただけます！<br>
                                                11：00～12：00　「鹿の間」 ×「コスメキッチン」<br>
                                                14：00～15：00　「鹿の間」×「イガリシノブ」<br>
                                                ※ご好評につき受付は終了しました。<br>
                                                さらに、2/23（金）～2/25（日）の期間、対象SHOPにてコスメスタンプカードプレゼント！<br>※無くなり次第終了
                                            </p>
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
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/ane.jpg" class="" alt="アーネ×パルコ">
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
                        <div class="row" style="display: none;">
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
                        <h2 class="title animation-js">PRESENT</h2>
                        <div class="present__text content-text">
                            <p>福岡PARCO館内にて10,000円(税込・当日中合算可)<br>以上お買い上げのレシートを提示いただくと、各日先着100名様に福岡をはじめとした全国の人気スイーツをプレゼント！<br>
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
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/present01.jpg" class="" alt="フランス菓子１６区 ダックワーズ（3袋入り）">
                                        </picture>
                                    </div>
                                    <div class="present__ins-link">
                                        <a href="https://www.instagram.com/16ku_fukuoka.official/" target="_blank">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/ins.svg" alt="instagram">
                                        </a>
                                    </div>
                                    <div class="present__ins-product">
                                        <div class="present__ins-product-title">
                                            フランス菓子１６区<br>ダックワーズ（3袋入り）
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
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/OYATUYA.U.jpg" class="" alt="OYATUYA.U ディアサククッキー（３種アソート缶）">
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
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/nennrinnya.jpg" class="" alt="ねんりん家マウントバーム　しっかり芽 1山">
                                        </picture>
                                    </div>
                                    <div class="present__ins-link">
                                        <a href="https://www.instagram.com/nenrinya_ginza/" target="_blank">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/ins.svg" alt="instagram">
                                        </a>
                                    </div>
                                    <div class="present__ins-product">
                                        <div class="present__ins-product-title">
                                            ねんりん家<br>マウントバーム　しっかり芽 1山
                                        </div>
                                        <div class="present__ins-product-desc">
                                            銀座に本店を構える、真っ白なのれんが印象的な日本うまれのバームクーヘン専門店。<br>ねんりん家の代表作といえる「マウントバーム」。たっぷりのバター風味に、皮はカリッと香ばしく中はしっとり熟成。独自の窯で長時間じっくり焼きあげておいしさを引き出した、こだわりのバームクーヘン。
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="present__ins-item animation-js">
                                <div class="present__ins-item-box">
                                    <div class="present__ins-time">3/10（日）</div>
                                    <div class="present__ins-thumb">
                                        <picture>
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/aroha.jpg" class="" alt="ホノルルクッキーハート・オブ・アロハ・ギフト缶7枚">
                                        </picture>
                                    </div>
                                    <div class="present__ins-link">
                                        <a href="https://www.instagram.com/honolulucookiejp/" target="_blank">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/ins.svg" alt="instagram">
                                        </a>
                                    </div>
                                    <div class="present__ins-product">
                                        <div class="present__ins-product-title">
                                            ホノルルクッキー<br>ハート・オブ・アロハ・ギフト缶7枚
                                        </div>
                                        <div class="present__ins-product-desc">
                                            １９９８年以来、ホノルルクッキーカンパニーはユニークなパッケージかつ、世界の皆様に喜んでいただける、ハワイのおもてなし精神を表すパイナップル形クッキーをお届けしています。<br>ギフト缶には、４種類のシグネチャー・フレーバーのプレミアム・ショートブレッド・クッキーが７枚入っています。パイナップル形のクッキーは、個別包装されています。
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
                            <h2 class="title animation-js">SHOP EVENT</h2>
                            <div class="shop-event__text content-text">
                                <p>館内の各ショップにて春のEVENTを開催！<br>
                                    ※詳細・在庫状況は各ショップに直接お問い合わせください。</p>
                            </div>
                        </div>
                    </div>
                    <div class="shop-event__column">
                        <div class="shop-event__item animation-js">
                            <div class="shop-event__item-body">
                                <div class="shop-event__item-box">
                                    <div class="shop-event__item-front-hover hover-3D">
                                        <div class="shop-event__item-thumb">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="ヘアケアブランド【wicot（ウィコット）】頭皮カウンセリングイベント開催">
                                        </div>
                                        <div class="shop-event__content">
                                            <div class="shop-event__item-title">2/25（日）1日限定！<br>ヘアケアブランド【wicot（ウィコット）】頭皮カウンセリングイベント開催</div>
                                            <div class="shop-event__item-time">2/25（日）</div>
                                            <div class="shop-event__item-footer">
                                                <div class="shop-event__item-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/cosme-logo.jpg" class="" alt="コスメキッチン">
                                                </div>
                                                <div class="shop-event__item-front">
                                                    <div class="shop-event__item-floor">本館1F</div>
                                                    <div class="shop-event__item-name">コスメキッチン</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-event__item-back-hover hover-3D">
                                        <div class="shop-event__item-thumb">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="ヘアケアブランド【wicot（ウィコット）】頭皮カウンセリングイベント開催">
                                        </div>
                                        <div class="shop-event__content">
                                            <div class="shop-event__item-title">2/25（日）1日限定！<br>ヘアケアブランド【wicot（ウィコット）】頭皮カウンセリングイベント開催</div>
                                            <div class="shop-event__item-time">2/25（日）</div>
                                            <div class="shop-event__item-footer">
                                                <div class="shop-event__item-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/cosme-logo.jpg" class="" alt="コスメキッチン">
                                                </div>
                                                <div class="shop-event__item-front">
                                                    <div class="shop-event__item-floor">本館1F</div>
                                                    <div class="shop-event__item-name">コスメキッチン</div>
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
                                                <div class="shop-event__item-time">2/25（日）</div>
                                                <div class="shop-event__item-title">2/25（日）1日限定！<br>ヘアケアブランド【wicot（ウィコット）】頭皮カウンセリングイベント開催</div>
                                                <div class="shop-event__item-desc">
                                                    会期：2/25（日）<br>
                                                    イベント時間：11:00～17:00<br>
                                                    カウンセリング時間：お1人様15分<br><br>
                                                    事前にイベント参加のご予約にて、wicot製品の人気アイテムミニサイズをプレゼント！<br><br>
                                                    【wicot（ウィコット）】とは？<br>
                                                    福岡県糸島市の自然豊かな場所に自社工場を持ち、国際オーガニック認定基準COSMOS認証を取得。大人女性に寄り添うスカルプケアブランドです。<br>
                                                <a href="https://wicot.com/">https://wicot.com/</a>
                                                </div>
                                            </div>
                                            <div class=" modal-shop-info">
                                                <div class="shop-event__item-footer">
                                                    <div class="shop-event__item-logo">
                                                        <img src="/<?php echo DIRNAME; ?>/assets/images/cosme-logo.jpg" class="" alt="コスメキッチン">
                                                    </div>
                                                    <div class="shop-event__item-front">
                                                        <div class="shop-event__item-floor">本館1F</div>
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
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="ダミーテキスト">
                                        </div>
                                        <div class="shop-event__content">
                                            <div class="shop-event__item-title">ダミーテキスト</div>
                                            <div class="shop-event__item-time">ダミーテキスト</div>
                                            <div class="shop-event__item-footer">
                                                <div class="shop-event__item-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/emmi-logo.jpg" class="" alt="emmi">
                                                </div>
                                                <div class="shop-event__item-front">
                                                    <div class="shop-event__item-floor">本館2F</div>
                                                    <div class="shop-event__item-name">emmi</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-event__item-back-hover hover-3D">
                                        <div class="shop-event__item-thumb">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/sample.jpg" class="" alt="ダミーテキスト">
                                        </div>
                                        <div class="shop-event__content">
                                            <div class="shop-event__item-title">ダミーテキスト</div>
                                            <div class="shop-event__item-time">ダミーテキスト</div>
                                            <div class="shop-event__item-footer">
                                                <div class="shop-event__item-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/emmi-logo.jpg" class="" alt="emmi">
                                                </div>
                                                <div class="shop-event__item-front">
                                                    <div class="shop-event__item-floor">本館2F</div>
                                                    <div class="shop-event__item-name">emmi</div>
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
                                                <div class="shop-event__item-title">ダミーテキスト</div>
                                                <div class="shop-event__item-desc">ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。ダミーテキスト。</div>
                                            </div>
                                            <div class=" modal-shop-info">
                                                <div class="shop-event__item-footer">
                                                    <div class="shop-event__item-logo">
                                                        <img src="/<?php echo DIRNAME; ?>/assets/images/emmi-logo.jpg" class="" alt="emmi">
                                                    </div>
                                                    <div class="shop-event__item-front">
                                                        <div class="shop-event__item-floor">本館2F</div>
                                                        <div class="shop-event__item-name">emmi</div>
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
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/SIDe.jpg" class="クリエイターによるワークショップやオリジナルアイテム発売" alt="クリエイターによるワークショップやオリジナルアイテム発売">
                                        </div>
                                        <div class="shop-event__content">
                                            <div class="shop-event__item-title">クリエイターによるワークショップやオリジナルアイテム発売</div>
                                            <div class="shop-event__item-footer">
                                                <div class="shop-event__item-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/side-logo.jpg" class="" alt="SIDe">
                                                </div>
                                                <div class="shop-event__item-front">
                                                    <div class="shop-event__item-floor">本館3F</div>
                                                    <div class="shop-event__item-name">SIDe</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-event__item-back-hover hover-3D">
                                        <div class="shop-event__item-thumb">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/SIDe.jpg" class="" alt="クリエイターによるワークショップやオリジナルアイテム発売">
                                        </div>
                                        <div class="shop-event__content">
                                            <div class="shop-event__item-title">クリエイターによるワークショップやオリジナルアイテム発売</div>
                                            <div class="shop-event__item-footer">
                                                <div class="shop-event__item-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/side-logo.jpg" class="" alt="SIDe">
                                                </div>
                                                <div class="shop-event__item-front">
                                                    <div class="shop-event__item-floor">本館3F</div>
                                                    <div class="shop-event__item-name">SIDe</div>
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
                                                <div class="img"><img src="/<?php echo DIRNAME; ?>/assets/images/SIDe.jpg" alt="クリエイターによるワークショップやオリジナルアイテム発売"></div>
                                            </div>
                                        </div>
                                        <div class=" modal-detail">
                                            <div class=" modal-item-info">
                                                <div class="shop-event__item-title">クリエイターによるワークショップやオリジナルアイテム発売</div>
                                                <div class="shop-event__item-desc">
                                                    ▼本館3F・SIDe<br>
                                                    「Aquvii's spread charm」<br>
                                                    会期：3/2（土）3/3（日）<br>
                                                    アクセサリーブランド【Aquvii(アクビ)】によるワークショップ開催。<br>
                                                    フランス、イギリス、アメリカなど、世界中からAquviiに集まってきたvintageのチャームやパーツを使って、世界で一つだけのあなただけのオリジナルアクセサリーを作ります。<br>
                                                    所要時間：5~10分／参加費：2,200円〜<br><br>

                                                    ▼本館4F・ATM by SIDe<br>
                                                     「pomemoon(ポメムーン）POPUP」<br>
                                                    会期：2/9（金）～<br>
                                                    「生活に寄り添う音楽とアート」をテーマにYOASOBIバンドサポートなどで活躍する（ミソハギザクロ）と、楽曲のアートワーク・デザインなどで活躍する（モリタユガみ）の二人によるユニットpomemoonのアパレル・グッズを期間限定販売。<br><br>

                                                    「プクプクPOPUP」<br>
                                                    会期：3/1（金）～4/14（日）<br>
                                                    東京在住の漫画家・イラストレーターとして活躍するプクプクのPOPUP。<br>
                                                    3/1（金）～3/3（日）はプクプクの似顔絵屋さんを店内で開催します。
                                                </div>
                                            </div>
                                            <div class=" modal-shop-info">
                                                <div class="shop-event__item-footer">
                                                    <div class="shop-event__item-logo">
                                                        <img src="/<?php echo DIRNAME; ?>/assets/images/side-logo.jpg" class="" alt="SIDe">
                                                    </div>
                                                    <div class="shop-event__item-front">
                                                        <div class="shop-event__item-floor">本館3F</div>
                                                        <div class="shop-event__item-name">SIDe</div>
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
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/MAIN_1080_1080.jpg" class="" alt="フットボールブランド「UMBRO」とADAM ET ROPÉのコラボレーション">
                                        </div>
                                        <div class="shop-event__content">
                                            <div class="shop-event__item-title">フットボールブランド「UMBRO」とADAM ET ROPÉのコラボレーション</div>
                                            <div class="shop-event__item-time">2/2(金)～</div>
                                            <div class="shop-event__item-footer">
                                                <div class="shop-event__item-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/adam.jpg" class="" alt="アダムエロペ">
                                                </div>
                                                <div class="shop-event__item-front">
                                                    <div class="shop-event__item-floor">新館2F</div>
                                                    <div class="shop-event__item-name">アダムエロペ</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-event__item-back-hover hover-3D">
                                        <div class="shop-event__item-thumb">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/MAIN_1080_1080.jpg" class="" alt="【LeSportsac ×Adam et Rope'】 別注アイテム発売">
                                        </div>
                                        <div class="shop-event__content">
                                            <div class="shop-event__item-title">フットボールブランド「UMBRO」とADAM ET ROPÉのコラボレーション</div>
                                            <div class="shop-event__item-time">2/2(金)～</div>
                                            <div class="shop-event__item-footer">
                                                <div class="shop-event__item-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/adam.jpg" class="" alt="アダムエロペ">
                                                </div>
                                                <div class="shop-event__item-front">
                                                    <div class="shop-event__item-floor">新館2F</div>
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
                                                <div class="img"><img src="/<?php echo DIRNAME; ?>/assets/images/MAIN_1080_1080.jpg" alt="フットボールブランド「UMBRO」とADAM ET ROPÉのコラボレーション"></div>
                                            </div>
                                        </div>
                                        <div class=" modal-detail">
                                            <div class=" modal-item-info">
                                                <div class="shop-event__item-time">2/2(金)～</div>
                                                <div class="shop-event__item-title">フットボールブランド「UMBRO」とADAM ET ROPÉのコラボレーション</div>
                                                <div class="shop-event__item-desc">
                                                    英国で愛されるフットボールブランド「UMBRO」とADAM ET ROPÉのコラボレーション。90年代のアイテムをイメージソースにトラックジャケットなど全3型をリリースします。<br><br>
                                                    【UMBRO for ADAM ET ROPÉ】TRACK JK　¥25,300(税込)<br>
                                                    90年代のプロトレーニングのカテゴリーアイテムをもとに制作したトラックジャケット。23AWシーズンに大人気だった別注アイテムを、今シーズンは春らしいアイボリーとネイビーのバイカラーで制作しました。<br><br>
                                                    【UMBRO for ADAM ET ROPÉ】TRACK PT　¥19,800（税込）<br>
                                                    90年代のプロトレーニングのカテゴリーアイテムをもとに制作したトラックパンツ。裾にはZIPがついており、スリットの入ったフレアパンツとしても着用可能。<br><br>
                                                    【UMBRO for ADAM ET ROPÉ】COLLARED SWEAT PO　¥18,700(税込)<br>
                                                    柔らかな着心地と襟のデザインにこだわったスウェットプルオーバー。
                                                </div>
                                            </div>
                                            <div class=" modal-shop-info">
                                                <div class="shop-event__item-footer">
                                                    <div class="shop-event__item-logo">
                                                        <img src="/<?php echo DIRNAME; ?>/assets/images/adam.jpg" class="" alt="アダムエロペ">
                                                    </div>
                                                    <div class="shop-event__item-front">
                                                        <div class="shop-event__item-floor">新館2F</div>
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
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/trip.jpg" class="" alt="「mintdesigns」POPUP EVENT">
                                        </div>
                                        <div class="shop-event__content">
                                            <div class="shop-event__item-title">「mintdesigns」POPUP EVENT</div>
                                            <div class="shop-event__item-time">2/7(水)～</div>
                                            <div class="shop-event__item-footer">
                                                <div class="shop-event__item-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/trip-logo.jpg" class="" alt="トリップ">
                                                </div>
                                                <div class="shop-event__item-front">
                                                    <div class="shop-event__item-floor">新館3F</div>
                                                    <div class="shop-event__item-name">トリップ</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-event__item-back-hover hover-3D">
                                        <div class="shop-event__item-thumb">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/trip.jpg" class="" alt="「mintdesigns」POPUP EVENT">
                                        </div>
                                        <div class="shop-event__content">
                                            <div class="shop-event__item-title">「mintdesigns」POPUP EVENT</div>
                                            <div class="shop-event__item-time">2/7(水)～</div>
                                            <div class="shop-event__item-footer">
                                                <div class="shop-event__item-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/trip-logo.jpg" class="" alt="トリップ">
                                                </div>
                                                <div class="shop-event__item-front">
                                                    <div class="shop-event__item-floor">新館3F</div>
                                                    <div class="shop-event__item-name">トリップ</div>
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
                                                <div class="img"><img src="/<?php echo DIRNAME; ?>/assets/images/trip.jpg" alt="「mintdesigns」POPUP EVENT"></div>
                                            </div>
                                        </div>
                                        <div class=" modal-detail">
                                            <div class=" modal-item-info">
                                                <div class="shop-event__item-time">2/7(水)～</div>
                                                <div class="shop-event__item-title">「mintdesigns」POPUP EVENT</div>
                                                <div class="shop-event__item-desc">
                                                    日常生活の時間を豊かにするデザインをブランドコンセプトに掲げる「mintdesigns」の2024春夏コレクションのPOP UP EVENTを開催します。
                                                </div>
                                            </div>
                                            <div class=" modal-shop-info">
                                                <div class="shop-event__item-footer">
                                                    <div class="shop-event__item-logo">
                                                        <img src="/<?php echo DIRNAME; ?>/assets/images/trip-logo.jpg" class="" alt="トリップ">
                                                    </div>
                                                    <div class="shop-event__item-front">
                                                        <div class="shop-event__item-floor">新館3F</div>
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
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/unshop.jpg" class="" alt="デニム素材の「AZUMABAG」数量限定販売">
                                        </div>
                                        <div class="shop-event__content">
                                            <div class="shop-event__item-title">デニム素材の「AZUMABAG」数量限定販売</div>
                                            <div class="shop-event__item-time">2/16(金)～</div>
                                            <div class="shop-event__item-footer">
                                                <div class="shop-event__item-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/unshop-logo.jpg" class="" alt="アンショップ">
                                                </div>
                                                <div class="shop-event__item-front">
                                                    <div class="shop-event__item-floor">新館3F</div>
                                                    <div class="shop-event__item-name">アンショップ</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-event__item-back-hover hover-3D">
                                        <div class="shop-event__item-thumb">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/unshop.jpg" class="" alt="デニム素材の「AZUMABAG」数量限定販売">
                                        </div>
                                        <div class="shop-event__content">
                                            <div class="shop-event__item-title">デニム素材の「AZUMABAG」数量限定販売</div>
                                            <div class="shop-event__item-time">2/16(金)～</div>
                                            <div class="shop-event__item-footer">
                                                <div class="shop-event__item-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/unshop-logo.jpg" class="" alt="アンショップ">
                                                </div>
                                                <div class="shop-event__item-front">
                                                    <div class="shop-event__item-floor">新館3F</div>
                                                    <div class="shop-event__item-name">アンショップ</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-event__item-btn">
                                    <button data-modal="modal-6">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/plus.svg" alt="plus">
                                    </button>
                                </div>
                            </div>
                            <div class="modal-block js-modal modal-6">
                                <div class="modal-bg js-modalclose"></div>
                                <div class="modal-wrap">
                                    <button class="modal-close js-modalclose">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/icon-close.svg" alt="icon close">
                                    </button>
                                    <div class="modal-cont">
                                        <div class="img-wrap">
                                            <div class="img-wrap__slider js-imgslider">
                                                <div class="img"><img src="/<?php echo DIRNAME; ?>/assets/images/unshop.jpg" alt="デニム素材の「AZUMABAG」数量限定販売"></div>
                                            </div>
                                        </div>
                                        <div class=" modal-detail">
                                            <div class=" modal-item-info">
                                                <div class="shop-event__item-time">2/16(金)～</div>
                                                <div class="shop-event__item-title">デニム素材の「AZUMABAG」数量限定販売</div>
                                                <div class="shop-event__item-desc">
                                                    昨年即完売した、AZUMA®BAGのDENIMシリーズが数量限定にてリリースされます。国産ジーンズ発祥の地である岡山県児島のデニムで制作された特別仕様のAZUMA® BAGです。
                                                </div>
                                            </div>
                                            <div class=" modal-shop-info">
                                                <div class="shop-event__item-footer">
                                                    <div class="shop-event__item-logo">
                                                        <img src="/<?php echo DIRNAME; ?>/assets/images/unshop-logo.jpg" class="" alt="アンショップ">
                                                    </div>
                                                    <div class="shop-event__item-front">
                                                        <div class="shop-event__item-floor">新館3F</div>
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
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/whos.jpg" class="" alt="ストリートブランド Sourcream/サワークリーム コラボアイテム発売">
                                        </div>
                                        <div class="shop-event__content">
                                            <div class="shop-event__item-title">ストリートブランド Sourcream/サワークリーム コラボアイテム発売</div>
                                            <div class="shop-event__item-time">2/16(金)～</div>
                                            <div class="shop-event__item-footer">
                                                <div class="shop-event__item-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/whos-logo.jpg" class="" alt="フーズフーギャラリー">
                                                </div>
                                                <div class="shop-event__item-front">
                                                    <div class="shop-event__item-floor">新館4F</div>
                                                    <div class="shop-event__item-name">フーズフーギャラリー</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-event__item-back-hover hover-3D">
                                        <div class="shop-event__item-thumb">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/whos.jpg" class="" alt="ストリートブランド Sourcream/サワークリーム コラボアイテム発売">
                                        </div>
                                        <div class="shop-event__content">
                                            <div class="shop-event__item-title">ストリートブランド Sourcream/サワークリーム コラボアイテム発売</div>
                                            <div class="shop-event__item-time">2/16(金)～</div>
                                            <div class="shop-event__item-footer">
                                                <div class="shop-event__item-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/whos-logo.jpg" class="" alt="フーズフーギャラリー">
                                                </div>
                                                <div class="shop-event__item-front">
                                                    <div class="shop-event__item-floor">新館4F</div>
                                                    <div class="shop-event__item-name">フーズフーギャラリー</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-event__item-btn">
                                    <button data-modal="modal-7">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/plus.svg" alt="plus">
                                    </button>
                                </div>
                            </div>
                            <div class="modal-block js-modal modal-7">
                                <div class="modal-bg js-modalclose"></div>
                                <div class="modal-wrap">
                                    <button class="modal-close js-modalclose">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/icon-close.svg" alt="icon close">
                                    </button>
                                    <div class="modal-cont">
                                        <div class="img-wrap">
                                            <div class="img-wrap__slider js-imgslider">
                                                <div class="img"><img src="/<?php echo DIRNAME; ?>/assets/images/whos.jpg" alt="ストリートブランド Sourcream/サワークリーム コラボアイテム発売"></div>
                                            </div>
                                        </div>
                                        <div class=" modal-detail">
                                            <div class=" modal-item-info">
                                                <div class="shop-event__item-time">2/16(金)～</div>
                                                <div class="shop-event__item-title">ストリートブランド Sourcream/サワークリーム コラボアイテム発売</div>
                                                <div class="shop-event__item-desc">
                                                    老舗釣鈎メーカー“がまかつ”とSourcreamとの《GS ULTIMASHILED 100 JKT》コラボ第３弾。本作はがまかつ社の撥水素材アルテマシールド100を使用したマウンテンパーカーをリリースします。
                                                </div>
                                            </div>
                                            <div class=" modal-shop-info">
                                                <div class="shop-event__item-footer">
                                                    <div class="shop-event__item-logo">
                                                        <img src="/<?php echo DIRNAME; ?>/assets/images/whos-logo.jpg" class="" alt="フーズフーギャラリー">
                                                    </div>
                                                    <div class="shop-event__item-front">
                                                        <div class="shop-event__item-floor">新館4F</div>
                                                        <div class="shop-event__item-name">フーズフーギャラリー</div>
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
                            <h2 class="title animation-js">NEW OPEN</h2>
                            <div class="new-open__text content-text">
                                <p>春を彩るNEW SHOPが続々オープン！</p>
                            </div>
                            <div class="new-open__content">
                                <div class="new-open__column animation-js">
                                    <div class="new-open__item-left">
                                        <div class="new-open__item-slick">
                                            <div class="new-open__item-slick-item">
                                                <div class="new-open__item-thumb">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/karendo_image.jpg" class="" alt="Karend">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="new-open__item-right">
                                        <div class="new-open__item-header">
                                            <div class="new-open__item-header-left">
                                                <div class="new-open__item-header-time">
                                                    2/26/2024
                                                </div>
                                                <div class="new-open__item-header-floor">
                                                    本館B1F
                                                </div>
                                                <div class="new-open__item-header-name">
                                                    Karend
                                                </div>
                                            </div>
                                            <div class="new-open__item-header-right">
                                                <div class="new-open__item-header-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/karendo_logo.jpg" class="" alt="Karend">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="new-open__item-desc content-text">
                                            <p>花と緑を通じてドキドキワクワクを届けるフラワーショップ。カラフルな生花や石けんのお花、チョコレートのお花など様々なアイテムを取り扱っています。 </p>
                                        </div>
                                        <div class="new-open__link">
                                            <a href="https://fukuoka.parco.jp/pnews/detail/?id=26432" target="_blank" class="btn-arrow">
                                                CHECK
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="new-open__column animation-js">
                                    <div class="new-open__item-left">
                                        <div class="new-open__item-slick">
                                            <div class="new-open__item-slick-item">
                                                <div class="new-open__item-thumb">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/cara_white.jpg" class="" alt="CARA FUKUOKA">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="new-open__item-right">
                                        <div class="new-open__item-header">
                                            <div class="new-open__item-header-left">
                                                <div class="new-open__item-header-time">
                                                    2/9/2024
                                                </div>
                                                <div class="new-open__item-header-floor">
                                                    本館2F
                                                </div>
                                                <div class="new-open__item-header-name">
                                                    CARA FUKUOKA
                                                </div>
                                            </div>
                                            <div class="new-open__item-header-right">
                                                <div class="new-open__item-header-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/cara_white.jpg" class="" alt="CARA FUKUOKA">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="new-open__item-desc content-text">
                                            <p>知識豊富なバイヤーが厳選して買い付けたヴィンテージのバッグや財布、アクセサリーなどの1点物アイテムをお手頃価格でお買い求めいただけます。</p>
                                        </div>
                                        <div class="new-open__link">
                                            <a href=" https://fukuoka.parco.jp/pnews/detail/?id=26716" target="_blank" class="btn-arrow">
                                                CHECK
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="new-open__column animation-js">
                                    <div class="new-open__item-left">
                                        <div class="new-open__item-slick">
                                            <div class="new-open__item-slick-item">
                                                <div class="new-open__item-thumb">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/kobez.jpg" class="" alt="KEBOZ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="new-open__item-right">
                                        <div class="new-open__item-header">
                                            <div class="new-open__item-header-left">
                                                <div class="new-open__item-header-time">
                                                    3/17/2024
                                                </div>
                                                <div class="new-open__item-header-floor">
                                                    本館3F
                                                </div>
                                                <div class="new-open__item-header-name">
                                                    KEBOZ
                                                </div>
                                            </div>
                                            <div class="new-open__item-header-right">
                                                <div class="new-open__item-header-logo">
                                                    <img src="/<?php echo DIRNAME; ?>/assets/images/kobez.jpg" class="" alt="KEBOZ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="new-open__item-desc content-text">
                                            <p>「着たい服を作る」をコンセプトに、ストリート・ファッション好き、野球好きに絶大な支持を集めるブランド。プロ野球球団とのコラボレーションなど野球を軸に様々なプロダクトを展開。</p>
                                        </div>
                                        <div class="new-open__link">
                                            <a href="https://fukuoka.parco.jp/pnews/detail/?id=26887" target="_blank" class="btn-arrow">
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
                            <h2 class="title animation-js">VISUAL</h2>
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
                                    <a href="https://fukuoka.parco.jp/shop/detail/?cd=010192" target="_blank">
                                        <div class="avarta">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/poster_yoko_01.jpg" alt="poster_yoko_01" class="show-pc">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/poster_tate_01.jpg" alt="poster_tate_01" class="show-mb">
                                        </div>
                                    </a>
                                    <div class="caption">本館2F・emmi<br>ストレッチミニワンピース19,800円（税込）/マルチベルトバッグ13,200円（税込）/ecoニットロングブーツ24,200円（税込） </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item-avr-visual">
                                    <a href="https://fukuoka.parco.jp/shop/detail/?cd=008815" target="_blank">
                                        <div class="avarta">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/poster_yoko_03.jpg" alt="poster_yoko_03" class="show-pc">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/poster_tate_03.jpg" alt="poster_tate_03" class="show-mb">
                                        </div>
                                    </a>
                                    <div class="caption">本館4F・LAGNAMOON<br>シャツカラーカフスニットワンピース15,400円（税込）/シアーダンボールスカート16,500円/アシンメトリースリットパンプス14,300円/ネオプレンコンビハンドバック11,000円（税込）/【NEW ERAコラボ】ハートキャップ5,280円（税込）</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item-avr-visual">
                                    <a href="https://fukuoka.parco.jp/shop/detail/?cd=006142" target="_blank">
                                        <div class="avarta">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/poster_yoko_02.jpg" alt="poster_yoko_02" class="show-pc">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/poster_tate_02.jpg" alt="poster_tate_02" class="show-mb">
                                        </div>
                                    </a>
                                    <div class="caption">本館4F・MURUA<br>ラウンドヘムBIGポケットGジャン15,950円（税込）/ランダムパターンシアーニット5,500円（税込）/ベルテットベアワンピース12,980円（税込）/リブソックスブーツ14,960円（税込）/2WAYベルトショルダーバッグ7,920円/ドライニットバケットハット5,500円（税込）</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item-avr-visual">
                                    <a href="https://fukuoka.parco.jp/shop/detail/?cd=026194" target="_blank">
                                        <div class="avarta">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/poster_yoko_04.jpg" alt="poster_yoko_04" class="show-pc">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/poster_tate_04.jpg" alt="poster_tate_04" class="show-mb">
                                        </div>
                                    </a>
                                    <div class="caption">新館1F・IÈNA<br>シャツウィズブラ42,900円（税込）/コットンライトツイルタックパンツ18,700円（税込）/リボンストラップサンダル59,400円（税込）/別注ビニールバック37,400円（税込）</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item-avr-visual">
                                    <a href="https://fukuoka.parco.jp/shop/detail/?cd=006127" target="_blank">
                                        <div class="avarta">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/poster_yoko_05.jpg" alt="poster_yoko_05" class="show-pc">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/poster_tate_05.jpg" alt="poster_tate_05" class="show-mb">
                                        </div>
                                    </a>
                                    <div class="caption">新館2F・ADAM ET ROPÈ<br>ワイドスリーブクロップドTee11,550円（税込）/ラメパターンニットスカート15,950円（税込）/メリージェーンフラットミュール15,950円（税込）/ムスビショルダーバッグ9,900円（税込）</div>
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
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/EwvABzbNca4?si=vz7Jpag7NZ2vDBBF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                            <div class="desc-video">
                                <p>福岡PARCO 「SPRING SPRING」撮影の様子をメイキングムービーにて公開。春のLOOKに身を包んだ鹿の間さんをぜひご覧ください。トランポリンを使用した鹿の間さんの華麗なジャンプも必見！</p>
                            </div>
                            <div class="txt-video-bott">
                                <ul>
                                    <li>Model：鹿の間</li>
                                    <li>Art Director：金澤繭子(KOKON Inc.)</li>
                                    <li>Photographer：小暮和音(CONTRAST Inc.)</li>
                                    <li>Assistant Photographer：村上貴滉(CONTRAST Inc.)</li>
                                    <li>Retoucher：小柴託夢(CONTRAST Inc.)</li>
                                    <li>Stylist：沓澤りさ</li>
                                    <li>Hair&Make Up Artist：水野花菜</li>
                                    <li>Producer：J.K.Wang(guilloche inc.)</li>
                                    <li>Production：guilloche inc.</li>
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