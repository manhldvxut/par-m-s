<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/assets/inc/global-config.php';
//下記のパス「demo」を変更
include_once $_SERVER['DOCUMENT_ROOT'].'/page/oyatsu/assets/inc/config.php';

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
$pege_title = '何時でもおやつ│吉祥寺PARCO';
$pege_description = '';
$pege_keywords = '';
$page_shareurl = 'https://'.STORE_NAME.'.parco.jp/page/oyatsu/menu'; //必ずディレクトリ名を変更する

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/page/assets/inc/meta.php';?>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/inc/tagmanager1.php';?>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/assets/inc/css.php';?>
</head>

<body class="<?php echo STORE_NAME; ?> page-original" id="top">
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/inc/tagmanager2.php';?>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/page/assets/inc/svgs.php';?>

<div class="wrapper">

<?php
/**
 * Header
 */
?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/assets/inc/header.php'; ?>



<nav class="localnav" style="display:none;">
  <ul class="localnav-list">
    <li class="localnav-item localnav-item__event">
        <a href="" class="">
            <span class="localnav-item__icon"><img src="/<?php echo DIRNAME; ?>/assets/images/icon-event.svg" alt="icon event"></span>
            イベント
        </a>
    </li>
    <li class="localnav-item localnav-item__original">
        <a href="" class="">
            <span class="localnav-item__icon"><img src="/<?php echo DIRNAME; ?>/assets/images/icon-original.svg" alt="icon original"></span>
            オリジナルメニュー
        </a>
    </li>
    <li class="localnav-item localnav-item__present">
        <a href="" class="">
            <span class="localnav-item__icon"><img src="/<?php echo DIRNAME; ?>/assets/images/icon-present.svg" alt="icon present"></span>
            プレゼント
        </a>
    </li>
    <li class="localnav-item localnav-item__shopevent">
        <a href="" class="">
            <span class="localnav-item__icon"><img src="/<?php echo DIRNAME; ?>/assets/images/icon-shopevent.svg" alt="icon shopevent"></span>
            ショップイベント
        </a>
    </li>
    <li class="localnav-item localnav-item__concept">
        <a href="" class="">
            <span class="localnav-item__icon"><img src="/<?php echo DIRNAME; ?>/assets/images/icon-concept.svg" alt="icon concept"></span>
            コンセプト
        </a>
    </li>
  </ul>
<!-- /.localnav --></nav>
<?php
/**
 * Main contents
 */
?>
<main class="main-contents">
    <section class="oyatsu">
        <div class="oyatsu__body">
            <div class="oyatsu__grid">
                <img src="/<?php echo DIRNAME; ?>/assets/images/grid.png" alt="icon grid">
            </div>
            <div class="oyatsu__green-left">
                <img src="/<?php echo DIRNAME; ?>/assets/images/green-left.png" alt="icon">
            </div>
            <div class="oyatsu__green-right">
                <img src="/<?php echo DIRNAME; ?>/assets/images/green-right.png" alt="icon">
            </div>
            <div class="oyatsu__title">
                <img src="/<?php echo DIRNAME; ?>/assets/images/oyatsu-title.svg" alt="oyatsu">
            </div>

            <div class="oyatsu__box">
                <div class="oyatsu__box-bg">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/box-bg.png" alt="icon">
                </div>
                <div class="oyatsu__box-icon-left">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/box-left.png" alt="icon">
                </div>
                <div class="oyatsu__box-icon-right">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/box-right.png" alt="icon">
                </div>
                <div class="oyatsu__box-content">
                    <div class="oyatsu__box-text">
                        リード文が入ります リード文が入ります リード文が入ります リード文が入ります リード文が入ります リード文が入ります リード文が入ります リード文が入ります リード文が入ります リード文が入ります リード文が入ります リード文が入ります リード文が入ります リード文が入ります リード文が入ります リード文が入ります リード文が入ります
                    </div>
                    <div class="oyatsu__box-clock">
                        <img src="/<?php echo DIRNAME; ?>/assets/images/clock.svg" alt="icon">
                    </div>
                </div>
            </div>
            <div class="oyatsu__cookie">
                <ul class="oyatsu__cookie-list">
                    <li class="oyatsu__cookie-list-item">
                        <img src="/<?php echo DIRNAME; ?>/assets/images/cookie01.svg" alt="cookie01">
                    </li>
                    <li class="oyatsu__cookie-list-item">
                        <img src="/<?php echo DIRNAME; ?>/assets/images/cookie02.svg" alt="cookie02">
                    </li>
                    <li class="oyatsu__cookie-list-item">
                        <img src="/<?php echo DIRNAME; ?>/assets/images/cookie03.svg" alt="cookie03">
                    </li>
                </ul>
            </div>
            <div class="oyatsu__traidat">
                <img src="/<?php echo DIRNAME; ?>/assets/images/traidat.png" alt="icon">
            </div>
            <div class="oyatsu__arrow">
                <img src="/<?php echo DIRNAME; ?>/assets/images/arrow-bg.png" alt="icon">
            </div>
        </div>
    </section>

    <section class="event">
        <div class="event__body">
            <h2 class="title">
                <span><img src="/<?php echo DIRNAME; ?>/assets/images/event.svg" alt="event"></span>
            </h2>
            <div class="event__box">
                <div class="event__box-body content">
                    <div class="event__column">
                        <div class="event__column-item event__column-item-left">
                            <div class="tempo-ttl">
                                <span>出店店舗</span>
                            </div>
                            <div class="event__box-list">
                                <div class="event__box-list-item">
                                    <div class="event__box-img">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/img01.png" alt="">
                                    </div>
                                    <div class="event__box-name type01">
                                        <span>ザ シティ ベーカリー</span>
                                    </div>
                                </div>
                                <div class="event__box-list-item">
                                    <div class="event__box-name type02">
                                        <span>ザ シティ ベーカリー<br>ザ シティ ベーカリー</span>
                                    </div>
                                    <div class="event__box-img">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/img01.png" alt="">
                                    </div>
                                </div>
                                <div class="event__box-list-item">
                                    <div class="event__box-img">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/img01.png" alt="">
                                    </div>
                                    <div class="event__box-name type03">
                                        <span>ザ シティ ベーカリー<br>ザ シティ ベーカリー</span>
                                    </div>
                                </div>
                                <div class="event__box-list-item">
                                    <div class="event__box-name type04">
                                        <span>ザ シティ ベーカリー</span>
                                    </div>
                                    <div class="event__box-img">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/img01.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="endmore">
                                <span>and more</span>
                            </div>
                            <div class="btn-show">
                                <a href="" target="_blank">詳しくはこちら</a>
                            </div>
                        </div>
                        <div class="event__column-item event__column-item-right">
                            <div class="event__column-item-img">
                                <img src="/<?php echo DIRNAME; ?>/assets/images/event-right-img.png" alt="">
                            </div>
                            <div class="desc">
                                秋のキャロットケーキ大収穫まつりの概要が入ります 秋のキャロットケーキ大収穫まつりの概要が入ります秋のキャロットケーキ大収穫まつりの概要が入ります秋のキャロットケーキ大収穫まつりの概要が入ります
                            </div>
                            <div class="list-info">
                                <ul class="list-time">
                                    <li>11.16 <span class="day"> fri</span> - 11.17 <span class="day">sun</span></li>
                                    <li>10:00 - 16:00</li>
                                </ul>
                                <ul class="list-adress">
                                    <li>場所</li>
                                    <li>吉祥寺PARCO  屋上</li>
                                </ul>
                                <ul class="list-plan">
                                    <li>入場料</li>
                                    <li>300円</li>
                                </ul>
                                <ul class="list-other">
                                    <li>主催</li>
                                    <li>デイリーズ</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="shop-limit">
        <div class="content">
            <div class="shop-limit__body">
                <div class="shop-limit__box">
                    <div class="icon-title">
                        <img src="assets/images/icon-title-limit.png" alt="">
                    </div>
                    <div class="title-limit">
                        <img src="assets/images/title-limit-mb.png" alt="">
                    </div>
                    <h2>
                        <img src="/<?php echo DIRNAME; ?>/assets/images/shop-limit-ttl.svg" alt="期間限定ショップ">
                    </h2>
                    <div class="shop-limit__info">
                        <div class="shop-limit__column">
                            <div class="shop-limit__column-item left">
                                <div class="shop-limit__number">
                                    <img src="/<?php echo DIRNAME; ?>/assets/images/01.svg" alt="01">
                                </div>
                                <div class="shop-limit__ttl">
                                    <img src="/<?php echo DIRNAME; ?>/assets/images/jiichiro-ttl.svg" alt="JIICHIRO POCKET">
                                </div>
                                <div class="shop-limit__desc">
                                    期間限定ショップの概要が入ります。期間限定ショップの概要が入ります。期間限定ショップの概要が入ります。期間限定ショップの概要が入ります。期間限定ショップの概要が入ります。
                                </div>

                                <div class="shop-limit__list">
                                    <div class="list-info">
                                        <ul class="list-time-limit">
                                            <li>時間</li>
                                            <li>11.16 <span class="day"> fri</span> - 11.17 <span class="day">sun</span></li>
                                        </ul>
                                        <ul class="list-plan">
                                            <li>場所</li>
                                            <li>吉祥寺PARCO  屋上</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-limit__column-item right">
                                <div class="shop-limit__column-thumb">
                                    <img src="/<?php echo DIRNAME; ?>/assets/images/shop-limit01.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="shop-limit__column">
                            <div class="shop-limit__column-item left">
                                <div class="shop-limit__line">
                                    <img src="/<?php echo DIRNAME; ?>/assets/images/limit-line.svg" alt="icon">
                                </div>

                                <div class="shop-limit__number">
                                    <img src="/<?php echo DIRNAME; ?>/assets/images/02.svg" alt="02">
                                </div>
                                <div class="shop-limit__ttl">
                                    <img src="/<?php echo DIRNAME; ?>/assets/images/jiichiro-ttl.svg" alt="JIICHIRO POCKET">
                                </div>
                                <div class="shop-limit__desc">
                                    期間限定ショップの概要が入ります。期間限定ショップの概要が入ります。期間限定ショップの概要が入ります。期間限定ショップの概要が入ります。期間限定ショップの概要が入ります。
                                </div>

                                <div class="shop-limit__list">
                                    <div class="list-info">
                                        <ul class="list-time-limit">
                                            <li>時間</li>
                                            <li>11.16 <span class="day"> fri</span> - 11.17 <span class="day">sun</span></li>
                                            
                                        </ul>
                                        <ul class="list-plan">
                                            <li>場所</li>
                                            <li>吉祥寺PARCO  屋上</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-limit__column-item right">
                                <div class="shop-limit__column-thumb">
                                    <img src="/<?php echo DIRNAME; ?>/assets/images/shop-limit01.png" alt="">
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    <section class="camping">
        <div class="content">
            <div class="camping__body">
                <div class="camping-icon-header">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/icon-camping.svg" class="show-pc" alt="icon">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/icon-camping-mb.svg" class="show-mb" alt="icon">
                </div>
                <div class="camping__box">
                    <h2>
                        <img src="/<?php echo DIRNAME; ?>/assets/images/camping-ttl.svg" alt="キャンページ">
                    </h2>
                    <div class="camping__column">
                        <div class="camping__column-item">
                            <div class="camping__column-img">
                                <img src="/<?php echo DIRNAME; ?>/assets/images/camping-img.png" alt="">
                            </div>
                            <div class="camping__column-info">
                                <h3>クーポン企画タイトル</h3>
                                <div class="camping__column-desc">
                                    クーポン企画の概要が入ります。クーポン企画の概要が入ります。クーポン企画の概要が入ります。クーポン企画の概要が入ります。クーポン企画の概要が入ります。クーポン企画の概要が入ります。クーポン企画の概要が入ります。クーポン企画の概要が入ります。
                                </div>
                                <div class="camping-list">
                                    <div class="list-info">
                                        <ul class="list-adress">
                                            <li>日付</li>
                                            <li>11.16 <span class="day"> fri</span> - 11.17 <span class="day">sun</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="present">
                        <h3>
                           <span> <img src="/<?php echo DIRNAME; ?>/assets/images/present-ttl.svg" alt="present"></span>
                        </h3>
                        <div class="present-box">
                            <div class="present__column">
                                <div class="present__column-item">
                                    <div class="present__column-item-body">
                                        <div class="present__header">
                                            <div class="present__number">15</div>
                                            <div class="present__first-name">名様</div>
                                        </div>
                                        <div class="present__column-img">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/present-thumb.png" alt="キャンページ">
                                        </div>
                                        <div class="present__column-info">
                                            <div class="present-floor">地下1階</div>
                                            <div class="present-name">デイリーズ</div>
                                            <div class="present-desc">商品名が入ります 商品名が入ります<br>商品名が入ります 商品名が入ります</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="present__column-item">
                                    <div class="present__column-item-body">
                                        <div class="present__header">
                                            <div class="present__number">15</div>
                                            <div class="present__first-name">名様</div>
                                        </div>
                                        <div class="present__column-img">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/present-thumb.png" alt="キャンページ">
                                        </div>
                                        <div class="present__column-info">
                                            <div class="present-floor">地下1階</div>
                                            <div class="present-name">デイリーズ</div>
                                            <div class="present-desc">商品名が入ります 商品名が入ります<br>商品名が入ります 商品名が入ります</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="present__column-item">
                                    <div class="present__column-item-body">
                                        <div class="present__header">
                                            <div class="present__number">15</div>
                                            <div class="present__first-name">名様</div>
                                        </div>
                                        <div class="present__column-img">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/present-thumb.png" alt="キャンページ">
                                        </div>
                                        <div class="present__column-info">
                                            <div class="present-floor">地下1階</div>
                                            <div class="present-name">デイリーズ</div>
                                            <div class="present-desc">商品名が入ります 商品名が入ります<br>商品名が入ります 商品名が入ります</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pocket">
                        <div class="check-cic">
                            <img src="/<?php echo DIRNAME; ?>/assets/images/check-cic.svg" alt="">
                        </div>
                        <ul class="pocket__list">
                            <li class="pocket__list-item">
                                <a href="" target="_blank">
                                    <img src="/<?php echo DIRNAME; ?>/assets/images/btn-pocket.svg" class="show-pc" alt="">
                                    <img src="/<?php echo DIRNAME; ?>/assets/images/btn-pocket-mb.svg" class="show-mb" alt="">
                                </a>
                            </li>
                            <li class="pocket__list-item">
                                <a href="" target="_blank">
                                    <img src="/<?php echo DIRNAME; ?>/assets/images/btn-payment.svg" class="show-pc" alt="">
                                    <img src="/<?php echo DIRNAME; ?>/assets/images/btn-payment-mb.svg" class="show-mb" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ossume" id="shoplist" v-cloak>
        <div class="ossume-line line-left">
            <img src="/<?php echo DIRNAME; ?>/assets/images/osusume-line.png" alt="">
        </div>
        <div class="ossume-line line-right">
            <img src="/<?php echo DIRNAME; ?>/assets/images/osusume-line.png" alt="">
        </div>
        <div class="content">
            <div class="original-body">
                <h2>
                    <span>
                        <img src="/<?php echo DIRNAME; ?>/assets/images/osusume-ttl.svg" alt="おすすめ＆エベント">
                    </span>
                </h2>
                <div class="txt">
                    おすすめ商品の説明文が入ります。おすすめ商品の説明文が入ります。おすすめ商品の説明文が入ります。おすすめ商品の説明文が入ります。おすすめ商品の説明文が入ります。
                </div>

                <div class="menu-list list-product">
                    <div class="row-prd">
                        <div class="col-prd" v-for="(shopList, index) in list" v-bind:key="index">
                            <div class="item-product">
                                <div class="avarta" v-if="shopList.avarta != ''">
                                <img :src="shopList.avarta" :alt="shopList.product_name">
                            </div>
                            <div class="info">
                                <div class="desc-prd">
                                    <div class="menu-list__item-floor" v-html="brTxt(shopList.floor)">floor</div>
                                    <div class="menu-list__item-shopname" v-html="brTxt(shopList.shopname)">shopname</div>
                                    <div class="menu-list__item-name"　v-if="shopList.product_name != ''" v-html="brTxt(shopList.product_name)">Product name</div>
                                    <div class="menu-list__item-price" v-if="shopList.price != ''">
                                        <span v-html="brTxt(shopList.price)">price</span>
                                        <span class="jpy">円</span>
                                    </div>
                                </div>
                                <div class="btn-view">
                                        <span class="more-line">
                                            <img src="/<?php echo DIRNAME; ?>/assets/images/more-line.svg" alt="icon more">
                                        </span>
                                    <button :id="'btn' + index" class="js-modalopen" :data-modal="'modal-'+index">
                                        <img src="/<?php echo DIRNAME; ?>/assets/images/icon-more.svg" alt="icon more">
                                    </button>
                                </div>
                            </div>

                            <div class="popup-container">
                                    <div :id="'popup' + index" :class="'overlay js-modal modal-' + index">
                                        <div class="popup">
                                            <div class="popup-close js-modalclose">
                                                <img src="/<?php echo DIRNAME; ?>/assets/images/icon-close.svg" class="" alt="close icon">
                                            </div>
                                            <div class="popup-content">
                                                <div class="popup-body">
                                                    <div class="slick js-imgslider">
                                                        <div class="slick__item" v-if="shopList.slider_image01 != ''">
                                                            <div class="slick__item-img">
                                                                <img :src="'/<?php echo DIRNAME; ?>/assets/images/' + shopList.slider_image01" :alt="shopList.product_name">
                                                            </div>
                                                        </div>
                                                        <div class="slick__item" v-if="shopList.slider_image02 != ''">
                                                            <div class="slick__item-img">
                                                                <img :src="'/<?php echo DIRNAME; ?>/assets/images/' + shopList.slider_image02" :alt="shopList.product_name">
                                                            </div>
                                                        </div>
                                                        <div class="slick__item" v-if="shopList.slider_image03 != ''">
                                                            <div class="slick__item-img">
                                                                <img :src="'/<?php echo DIRNAME; ?>/assets/images/' + shopList.slider_image03" :alt="shopList.product_name">
                                                            </div>
                                                        </div>
                                                        <div class="slick__item" v-if="shopList.slider_image04 != ''">
                                                            <div class="slick__item-img">
                                                                <img :src="'/<?php echo DIRNAME; ?>/assets/images/' + shopList.slider_image04" :alt="shopList.product_name">
                                                            </div>
                                                        </div>
                                                        <div class="slick__item" v-if="shopList.slider_image05 != ''">
                                                            <div class="slick__item-img">
                                                                <img :src="'/<?php echo DIRNAME; ?>/assets/images/' + shopList.slider_image05" :alt="shopList.product_name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="popup-desc">
                                                        <div class="menu-list__item-floor" v-html="brTxt(shopList.floor)">floor</div>
                                                        <div class="menu-list__item-floor" v-html="brTxt(shopList.shopname)">floor</div>
                                                        <div class="menu-list__item-name" v-if="shopList.product_name != ''" v-html="brTxt(shopList.product_name)">Product name</div>
                                                        <div class="menu-list__item-price"v-if="shopList.price != ''">
                                                            <span v-html="brTxt(shopList.price)">price</span>
                                                        </div>
                                                        <div class="menu-list__item-desc"v-if="shopList.description != ''"> {{shopList.description}}
                                                        </div>

                                                    </div>
                                                    <div class="btn-shoppage" v-if="shopList.restaurant_link != ''">
                                                        <a :href="shopList.restaurant_link" target="_blank">Shop page</a>
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
            </div>
        </div>
    </section>
</main>




<?php
/**
 * Footer
 */
?>
<?php //include_once $_SERVER['DOCUMENT_ROOT'].'/page/assets/inc/footer.php'; ?>
<footer class="pft">
  <div class="pft__in">
    <?php /* パルコや上野以外 */ ?>
    <div class="pft__logo">
      <a href="/">
        <svg class="pft__logo__txt">
          <title><?php echo STORE_NAME_JA; ?></title>
          <desc><?php echo STORE_NAME_JA; ?></desc>
          <use xlink:href="#parco-logo-<?php echo STORE_NAME; ?>"/>
        </svg>
        <svg class="pft__logo__img">
          <title>PARCO</title>
          <desc>PARCO</desc>
          <use xlink:href="#parco-logo"/>
        </svg>
      </a>
    </div>
    <?php /* パルコや上野 */ ?>
    <?php /* ?>
    <div class="pft__logo parcoya-ueno">
      <a href="/">
        <svg class="pft__logo__img"><title>PARCO</title><desc>PARCO</desc><use xlink:href="#parco-logo"/></svg>
      </a>
    </div>
    <?php */ ?>

    <div class="pft__pageTop">
      <a href="#top" class="scroll">ページトップ</a>
    </div>

    <div class="sns">
        <ul class="sns-list">
            <li class="sns-list__item">
                <a href="" class="sns-list__link">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/x.svg" alt="icon x">
                </a>
            </li>

            <li class="sns-list__item">
                <a href="" class="sns-list__link">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/line.svg" alt="icon line">
                </a>
            </li>

            <li class="sns-list__item">
                <a href="" class="sns-list__link">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/ins.svg" alt="icon instagram">
                </a>
            </li>
        </ul>
    </div>

    <div class="pft__copyright">
        COPYRIGHT © PARCO CO.,LTD ALL RIGHTS RESERVED.
    </div>
  </div>
<!-- /#footbg --></footer>


</div>

<!-- Javascript -->
<script>
  const list = '/<?php echo DIRNAME; ?>/assets/data/shoplist.json';
</script>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/assets/inc/js.php';?>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
<script src="https://www.promisejs.org/polyfills/promise-7.0.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.0.0/axios.min.js"></script>
<script src="/<?php echo DIRNAME; ?>/assets/js/lib/slick.min.js"></script>
<script src="/<?php echo DIRNAME; ?>/assets/js/newrenew.js"></script>
<!-- /Javascript -->
</body>
</html>
