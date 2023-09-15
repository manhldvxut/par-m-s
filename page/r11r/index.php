<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/assets/inc/global-config.php';
//下記のパス「demo」を変更
include_once $_SERVER['DOCUMENT_ROOT'].'/page/r11r/assets/inc/config.php';

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
$pege_title = 'タイトル';
$pege_description = 'ディスクリプションが入ります';
$pege_keywords = 'キーワード';
$page_shareurl = 'https://'.STORE_NAME.'.parco.jp/page/r11r/'; //必ずディレクトリ名を変更する

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
  <section class="box-caption-banner text-center">
  	<div class="container">
      <div class="icon-abs abs1"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/cap-1.svg" class="img-fluid" alt=""></div>
      <div class="icon-abs abs2"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/cap-2.svg" class="img-fluid" alt=""></div>
      <div class="icon-abs abs3"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/cap-3.svg" class="img-fluid" alt=""></div>
      <div class="icon-abs abs4"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/cap-4.svg" class="img-fluid" alt=""></div>
  		<div class="content-caption">
        <div class="head-caption">タイトルが入りますタイトルが入りますタイトルが入ります</div>
        <div class="desc">
          <p>各クリエイターが「Emotion」をテーマに様々な感情を表現した描き下ろしのアートを制作。</p>
          <p>池袋パルコ全館が183名のクリエイターたちのギャラリースペースとなり、館内のメディアスペース、</p>
          <p>各種共用部にて展示するとともに、パルコオンラインストアにて、同作品の複製原画を販売致します。</p>
          <p>リアル×オンライン×双方のメディアをフル活用した、今までにないプロモーション展開となります。</p>
        </div>  
      </div>
  	</div>
  </section>
  <section class="box-creators">
    <div class="container">
      <div class="title">
        <h2><span>CREATORS</span></h2>
        <div class="icon"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/creators.svg" class="img-fluid" alt=""></div>
      </div>
      <div class="list-creator">
        <div class="row">
          <div class="col-md-3">
            <?php
              for ($x = 0; $x <= 3; $x++) { ?>
                  <div class="item-creator">
                    <a href="javascript:void(0)"></a>
                    <div class="avarta">
                      <img src="/<?php echo DIRNAME; ?>/assets/images/banner/creator1.png" class="img-fluid w-100" alt="">
                      <span>View</span>
                    </div>
                    <div class="info">名前が入ります名前が入ります</div>
                  </div>
            <?php  }
            ?>
          </div>
          <div class="col-md-3">
            <?php
              for ($x = 0; $x <= 3; $x++) { ?>
                  <div class="item-creator">
                    <a href="javascript:void(0)"></a>
                    <div class="avarta">
                      <img src="/<?php echo DIRNAME; ?>/assets/images/banner/creator1.png" class="img-fluid w-100" alt="">
                      <span>View</span>
                    </div>
                    <div class="info">名前が入ります名前が入ります</div>
                  </div>
            <?php  }
            ?>
          </div>
          <div class="col-md-3">
            <?php
              for ($x = 0; $x <= 3; $x++) { ?>
                  <div class="item-creator">
                    <a href="javascript:void(0)"></a>
                    <div class="avarta">
                      <img src="/<?php echo DIRNAME; ?>/assets/images/banner/creator1.png" class="img-fluid w-100" alt="">
                      <span>View</span>
                    </div>
                    <div class="info">名前が入ります名前が入ります</div>
                  </div>
            <?php  }
            ?>
          </div>
          <div class="col-md-3">
            <?php
              for ($x = 0; $x <= 3; $x++) { ?>
                  <div class="item-creator">
                    <a href="javascript:void(0)"></a>
                    <div class="avarta">
                      <img src="/<?php echo DIRNAME; ?>/assets/images/banner/creator1.png" class="img-fluid w-100" alt="">
                      <span>View</span>
                    </div>
                    <div class="info">名前が入ります名前が入ります</div>
                  </div>
            <?php  }
            ?>
          </div>
        </div>
        <div class="view-more">
          <a href="">
            <span class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="95.976" height="101" viewBox="0 0 95.976 101">
                <g id="Group_2391" data-name="Group 2391" transform="translate(-570.5 -2818.5)">
                  <g id="Group_2233" data-name="Group 2233" transform="translate(-215 5)">
                    <path id="Subtraction_1" data-name="Subtraction 1" d="M-242-667a49.685,49.685,0,0,1-19.462-3.929,49.832,49.832,0,0,1-15.893-10.715,49.833,49.833,0,0,1-10.715-15.893A49.688,49.688,0,0,1-292-717a49.686,49.686,0,0,1,3.929-19.462,49.833,49.833,0,0,1,10.715-15.893,49.833,49.833,0,0,1,15.893-10.715A49.685,49.685,0,0,1-242-767a49.861,49.861,0,0,1,26.564,7.633,50.171,50.171,0,0,1,18.1,19.867h-1.121a48.967,48.967,0,0,0-8.894-12.148,48.836,48.836,0,0,0-15.575-10.5A48.685,48.685,0,0,0-242-766a48.691,48.691,0,0,0-19.073,3.85,48.849,48.849,0,0,0-15.575,10.5,48.847,48.847,0,0,0-10.5,15.575A48.691,48.691,0,0,0-291-717a48.684,48.684,0,0,0,3.85,19.073,48.836,48.836,0,0,0,10.5,15.575,48.838,48.838,0,0,0,15.575,10.5A48.707,48.707,0,0,0-242-668a48.7,48.7,0,0,0,19.073-3.85,48.822,48.822,0,0,0,15.575-10.5,49.24,49.24,0,0,0,6.58-8.148h1.18a50.347,50.347,0,0,1-17.813,17.043,49.737,49.737,0,0,1-11.668,4.77A50.151,50.151,0,0,1-242-667Z" transform="translate(1078 3581)" fill="none" stroke="#000" stroke-width="1"/>
                  </g>
                  <g id="Icon_feather-arrow-down" data-name="Icon feather-arrow-down" transform="translate(597.93 2845.626)">
                    <path id="Path_3690" data-name="Path 3690" d="M18,7.5V39.491" transform="translate(5.495 0)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    <path id="Path_3691" data-name="Path 3691" d="M39.491,18l-16,16L7.5,18" transform="translate(0 5.495)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                  </g>
                </g>
              </svg>
            </span>
            <span>view more</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="box-calender">
    <div class="container">
      <div class="title text-center">
        <h2><span>EVENT</span></h2>
      </div>
      <div class="list-calender">
        <div class="row">
          <div class="col-md-6">
            <div class="item-calender">
              <div class="avr"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/calender1.svg" class="img-fluid w-100" alt=""></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="item-calender">
              <div class="avr"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/calender2.svg" class="img-fluid w-100" alt=""></div>
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
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/page/assets/inc/footer.php'; ?>

</div>

<!-- Javascript -->
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/assets/inc/js.php';?>
<!-- /Javascript -->
</body>
</html>
 