<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/assets/inc/global-config.php';
//下記のパス「demo」を変更
include_once $_SERVER['DOCUMENT_ROOT'].'/page/023spring_newandrenewal/assets/inc/config.php';

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
$pege_title = '2023 SPRING NEW＆RENWAL名古屋PARCO';
$pege_description = '2023 SPRING NEW＆RENWAL注目のニューショップやおすすめアイテムをご紹介しています。';
$pege_keywords = '名古屋パルコ,名古屋,NEWSHOP,EVENT,イベント,';
$page_shareurl = 'https://'.STORE_NAME.'.parco.jp/page/023spring_newandrenewal/'; //必ずディレクトリ名を変更する

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/page/assets/inc/meta.php';?>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/inc/tagmanager1.php';?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Krona+One&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/assets/inc/css.php';?>
</head>

<body class="<?php echo STORE_NAME; ?> page-tag" id="top">
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/inc/tagmanager2.php';?>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/page/assets/inc/svgs.php';?>

<div class="wrapper">

<?php
/**
 * Header
 */
?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/assets/inc/header.php'; ?>


<?php
/**
 * Main contents
 */
?>
<main class="main-contents">

<?php /* ==========================================================
ヘッダー下バナー、youtubeなど
============================================================== */ ?>
<?php /* バナー */ ?>


<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/' . DIRNAME . '/assets/inc/header.php'; ?>


<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/' . DIRNAME . '/assets/inc/bnr.php'; ?>


<?php /* ==========================================================
Local navigation
============================================================== */ ?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/assets/inc/localnav.php'; ?>


<?php /* ==========================================================
タグ集約、ownlyなど
============================================================== */ ?>
<div class="continer js-scr-target js-bg-trigger">
  
  <section class="shop-wrap yellow">
    <div class="shop-info js-scr-target fadeIn">
      <div class="shop-info__body" data-color="true" data-color-type="yellow">
        <div class="shop-info__left">
          <div class="shop-info__img">
            <img src="/<?php echo DIRNAME; ?>/assets/images/pict-abahouse.png" alt="" loading="lazy" width="420" height="420">
          </div>
        </div>
        <div class="shop-info__right">
          <div class="shop-info__right-top">
            <div class="logo"><a href=""><img src="/<?php echo DIRNAME; ?>/assets/images/logo-abahouse.png" alt="ABAHOUSE" loading="lazy" width="120" height="120"></a></div>
            <div class="detail">
              <p class="floor">西館 1F</p>
              <h2 class="name">ABAHOUSE</h2>
            </div>
          </div>
          <p class="text">
            ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップ
          </p>
        </div>
      </div>
      
    </div>
    <div class="item-list-wrap">
      <ul class="item-list js-scr-target fadeIn js-slider">
        <li class="item">
          <div class="photo"><img src="/<?php echo DIRNAME; ?>/assets/images/pict-abahouse-01.png" alt="" loading="lazy" width="400" height="400"></div>
          <div class="text-area"><div class="inner">
            <h3 class="ttl">
              <span class="bg-black">見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見</span>
            </h3>
            <p class="text">
              取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入りま
            </p>
          </div></div>
        </li>
        <li class="item">
          <div class="photo"><img src="/<?php echo DIRNAME; ?>/assets/images/pict-abahouse-02.png" alt="" loading="lazy" width="400" height="400"></div>
          <div class="text-area"><div class="inner">
            <h3 class="ttl">
              <span class="bg-black">見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見</span>
            </h3>
            <p class="text">
              取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入りま
            </p>
          </div></div>
        </li>
        <li class="item">
          <div class="photo"><img src="/<?php echo DIRNAME; ?>/assets/images/pict-abahouse-03.png" alt="" loading="lazy" width="400" height="400"></div>
          <div class="text-area"><div class="inner">
            <h3 class="ttl">
              <span class="bg-black">見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見</span>
            </h3>
            <p class="text">
              取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入りま
            </p>
          </div></div>
        </li>
      </ul>
    </div>
  </section>
  <section class="shop-wrap green">
    <div class="shop-info js-scr-target fadeIn">
      <div class="shop-info__body" data-color="true" data-color-type="green">
        <div class="shop-info__left">
          <div class="shop-info__img">
            <img src="/<?php echo DIRNAME; ?>/assets/images/pict-groundy.png" alt="" loading="lazy" width="420" height="420">
          </div>
        </div>
        <div class="shop-info__right">
          <div class="shop-info__right-top">
            <div class="logo"><a href=""><img src="/<?php echo DIRNAME; ?>/assets/images/logo-groundy.png" alt="GroundY" loading="lazy" width="120" height="120"></a></div>
            <div class="detail">
              <p class="floor">西館 1F</p>
              <h2 class="name">GroundY</h2>
            </div>
          </div>
          <p class="text">
            ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップ
          </p>
        </div>
      </div>
      
    </div>
    <div class="item-list-wrap">
      <ul class="item-list js-scr-target fadeIn js-slider">
        <li class="item">
          <div class="photo"><img src="/<?php echo DIRNAME; ?>/assets/images/pict-groundy.png" alt="" loading="lazy" width="400" height="400"></div>
          <div class="text-area"><div class="inner">
            <h3 class="ttl">
              <span class="bg-black">見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見</span>
            </h3>
            <p class="text">
              取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入りま
            </p>
          </div></div>
        </li>
        <li class="item">
          <div class="photo"><img src="/<?php echo DIRNAME; ?>/assets/images/pict-groundy-02.png" alt="" loading="lazy" width="400" height="400"></div>
          <div class="text-area"><div class="inner">
            <h3 class="ttl">
              <span class="bg-black">見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見</span>
            </h3>
            <p class="text">
              取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入りま
            </p>
          </div></div>
        </li>
        <li class="item">
          <div class="photo"><img src="/<?php echo DIRNAME; ?>/assets/images/pict-groundy-03.png" alt="" loading="lazy" width="400" height="400"></div>
          <div class="text-area"><div class="inner">
            <h3 class="ttl">
              <span class="bg-black">見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見</span>
            </h3>
            <p class="text">
              取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入りま
            </p>
          </div></div>
        </li>
      </ul>
    </div>
  </section>
  <section class="shop-wrap pink">
    <div class="shop-info js-scr-target fadeIn">
      <div class="shop-info__body" data-color="true" data-color-type="pink">
        <div class="shop-info__left">
          <div class="shop-info__img">
            <img src="/<?php echo DIRNAME; ?>/assets/images/pict-abahouse.png" alt="" loading="lazy" width="420" height="420">
          </div>
        </div>
        <div class="shop-info__right">
          <div class="shop-info__right-top">
            <div class="logo"><a href=""><img src="/<?php echo DIRNAME; ?>/assets/images/logo-abahouse.png" alt="ABAHOUSE" loading="lazy" width="120" height="120"></a></div>
            <div class="detail">
              <p class="floor">西館 1F</p>
              <h2 class="name">ABAHOUSE</h2>
            </div>
          </div>
          <p class="text">
            ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップ
          </p>
        </div>
      </div>
      
    </div>
    <div class="item-list-wrap">
      <ul class="item-list js-scr-target fadeIn js-slider">
        <li class="item">
          <div class="photo"><img src="/<?php echo DIRNAME; ?>/assets/images/pict-abahouse-01.png" alt="" loading="lazy" width="400" height="400"></div>
          <div class="text-area"><div class="inner">
            <h3 class="ttl">
              <span class="bg-black">見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見</span>
            </h3>
            <p class="text">
              取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入りま
            </p>
          </div></div>
        </li>
        <li class="item">
          <div class="photo"><img src="/<?php echo DIRNAME; ?>/assets/images/pict-abahouse-02.png" alt="" loading="lazy" width="400" height="400"></div>
          <div class="text-area"><div class="inner">
            <h3 class="ttl">
              <span class="bg-black">見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見</span>
            </h3>
            <p class="text">
              取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入りま
            </p>
          </div></div>
        </li>
        <li class="item">
          <div class="photo"><img src="/<?php echo DIRNAME; ?>/assets/images/pict-abahouse-03.png" alt="" loading="lazy" width="400" height="400"></div>
          <div class="text-area"><div class="inner">
            <h3 class="ttl">
              <span class="bg-black">見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見</span>
            </h3>
            <p class="text">
              取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入りま
            </p>
          </div></div>
        </li>
      </ul>
    </div>
  </section>
  <section class="shop-wrap blue">
    <div class="shop-info js-scr-target fadeIn">
      <div class="shop-info__body" data-color="true" data-color-type="blue">
        <div class="shop-info__left">
          <div class="shop-info__img">
            <img src="/<?php echo DIRNAME; ?>/assets/images/pict-abahouse.png" alt="" loading="lazy" width="420" height="420">
          </div>
        </div>
        <div class="shop-info__right">
          <div class="shop-info__right-top">
            <div class="logo"><a href=""><img src="/<?php echo DIRNAME; ?>/assets/images/logo-groundy.png" alt="GroundY" loading="lazy" width="120" height="120"></a></div>
            <div class="detail">
              <p class="floor">西館 1F</p>
              <h2 class="name">GroundY</h2>
            </div>
          </div>
          <p class="text">
            ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップ
          </p>
        </div>
      </div>
      
    </div>
    <div class="item-list-wrap">
      <ul class="item-list js-scr-target fadeIn js-slider">
        <li class="item">
          <div class="photo"><img src="/<?php echo DIRNAME; ?>/assets/images/pict-groundy-01.png" alt="" loading="lazy" width="400" height="400"></div>
          <div class="text-area"><div class="inner">
            <h3 class="ttl">
              <span class="bg-black">見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見</span>
            </h3>
            <p class="text">
              取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入りま
            </p>
          </div></div>
        </li>
        <li class="item">
          <div class="photo"><img src="/<?php echo DIRNAME; ?>/assets/images/pict-groundy-02.png" alt="" loading="lazy" width="400" height="400"></div>
          <div class="text-area"><div class="inner">
            <h3 class="ttl">
              <span class="bg-black">見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見</span>
            </h3>
            <p class="text">
              取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入りま
            </p>
          </div></div>
        </li>
        <li class="item">
          <div class="photo"><img src="/<?php echo DIRNAME; ?>/assets/images/pict-groundy-03.png" alt="" loading="lazy" width="400" height="400"></div>
          <div class="text-area"><div class="inner">
            <h3 class="ttl">
              <span class="bg-black">見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見</span>
            </h3>
            <p class="text">
              取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入りま
            </p>
          </div></div>
        </li>
      </ul>
    </div>
  </section>
  <section class="shop-wrap orange">
    <div class="shop-info js-scr-target fadeIn">
      <div class="shop-info__body" data-color="true" data-color-type="orange">
        <div class="shop-info__left">
          <div class="shop-info__img">
            <img src="/<?php echo DIRNAME; ?>/assets/images/pict-abahouse.png" alt="" loading="lazy" width="420" height="420">
          </div>
        </div>
        <div class="shop-info__right">
          <div class="shop-info__right-top">
            <div class="logo"><a href=""><img src="/<?php echo DIRNAME; ?>/assets/images/logo-abahouse.png" alt="ABAHOUSE" loading="lazy" width="120" height="120"></a></div>
            <div class="detail">
              <p class="floor">西館 1F</p>
              <h2 class="name">ABAHOUSE</h2>
            </div>
          </div>
          <p class="text">
            ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップの説明文が入ります。ショップ
          </p>
        </div>
      </div>
      
    </div>
    <div class="item-list-wrap">
      <ul class="item-list js-scr-target fadeIn js-slider">
        <li class="item">
          <div class="photo"><img src="/<?php echo DIRNAME; ?>/assets/images/pict-abahouse-01.png" alt="" loading="lazy" width="400" height="400"></div>
          <div class="text-area"><div class="inner">
            <h3 class="ttl">
              <span class="bg-black">見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見</span>
            </h3>
            <p class="text">
              取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入りま
            </p>
          </div></div>
        </li>
        <li class="item">
          <div class="photo"><img src="/<?php echo DIRNAME; ?>/assets/images/pict-abahouse-02.png" alt="" loading="lazy" width="400" height="400"></div>
          <div class="text-area"><div class="inner">
            <h3 class="ttl">
              <span class="bg-black">見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見</span>
            </h3>
            <p class="text">
              取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入りま
            </p>
          </div></div>
        </li>
        <li class="item">
          <div class="photo"><img src="/<?php echo DIRNAME; ?>/assets/images/pict-abahouse-03.png" alt="" loading="lazy" width="400" height="400"></div>
          <div class="text-area"><div class="inner">
            <h3 class="ttl">
              <span class="bg-black">見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見出しテキスト見</span>
            </h3>
            <p class="text">
              取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入ります。取扱いブランドの説明文が入りま
            </p>
          </div></div>
        </li>
      </ul>
    </div>
  </section>

<!-- /.wrapper --></div>

</main>


<?php
/**
 * Footer
 */
?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/page/assets/inc/footer.php'; ?>

</div>

<!-- Javascript -->
<?php
  $browser = strtolower($_SERVER['HTTP_USER_AGENT']);
  if (strstr($browser, 'trident') || strstr($browser, 'msie')) {
  ?>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=IntersectionObserver"></script>
  <?php
  }
  ?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/assets/inc/js.php';?>
<script src="/<?php echo DIRNAME; ?>/assets/js/lib/jquery.tile.min.js"></script>
<script src="/<?php echo DIRNAME; ?>/assets/js/lib/slick.min.js"></script>
<script src="/<?php echo DIRNAME; ?>/assets/js/script.js?220420"></script>
<!-- /Javascript -->
</body>
</html>
