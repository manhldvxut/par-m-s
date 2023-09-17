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
<div class="box-cover">
  <div class="container">
    <div class="avr-cover text-center"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/cover.svg" class="img-fluid" alt=""></div>
  </div>
</div>
<div class="wrapper">

<div class="header-menu">
  <div class="container">
    <div class="btn-bar"> 
      <a href="javascript:void(0)">
        <svg xmlns="http://www.w3.org/2000/svg" width="52.296" height="35" viewBox="0 0 52.296 35">
          <g id="menu" transform="translate(0.5 0.5)">
            <g id="btn-menu" transform="translate(6.989 20.004)" style="mix-blend-mode: difference;isolation: isolate">
              <line id="Line_1545" data-name="Line 1545" x2="51.296" transform="translate(-6.989 -20.004)" fill="none" stroke="#000000" stroke-linecap="round" stroke-width="1"/>
              <line id="Line_1546" data-name="Line 1546" x2="30.296" transform="translate(14.011 -3.004)" fill="none" stroke="#000000" stroke-linecap="round" stroke-width="1"/>
              <line id="Line_1547" data-name="Line 1547" x2="39.296" transform="translate(5.011 13.996)" fill="none" stroke="#000000" stroke-linecap="round" stroke-width="1"/>
            </g>
          </g>
        </svg>
      </a>
    </div>
  </div>
</div>

<div class="content-menu">
  <ul>
    <li class="close-menu">
      <a href="javascript:void(0)">
        <svg xmlns="http://www.w3.org/2000/svg" width="33.836" height="34.344" viewBox="0 0 33.836 34.344">
          <g id="close" transform="translate(-1205.867 -4041.828)">
            <path id="シェイプ_4" data-name="シェイプ 4" d="M1222.785,4059l-16.205,16.47,16.205-16.47-16.205-16.47,16.205,16.47,16.205-16.47L1222.785,4059l16.205,16.47Z" fill="#0d0b0b" stroke="#0d0b0b" stroke-width="2"/>
          </g>
        </svg>
      </a>
    </li>
    <li><a href="">CREATORS</a></li>
    <li><a href="">EVENT</a></li>
    <li><a href="">SPECIAL</a></li>
    <li><a href="">GOODS</a></li>
  </ul>
</div>

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
        <div class="head-caption scroll-anime">タイトルが入りますタイトルが入りますタイトルが入ります</div>
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
      <div class="title scroll-anime">
        <h2><span>CREATORS</span></h2>
        <div class="icon"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/creators.svg" class="img-fluid" alt=""></div>
      </div>
      <div class="list-creator">
        <div class="row">
          <?php
            for ($x = 0; $x <= 19; $x++) { ?>
              <div class="col-md-3">
                <div class="item-creator">
                  <a href="javascript:void(0)" class="clc-modal" data-tab="modal-1"></a>
                  <div class="avarta">
                    <img src="/<?php echo DIRNAME; ?>/assets/images/banner/creator1.png" class="img-fluid w-100" alt="">
                    <span>View</span>
                  </div>
                  <div class="info">名前が入ります名前が入ります</div>
                </div>
              </div>
            <?php  }
          ?>
        </div>
        <div class="view-more">
          <a href="javascript:void(0)">
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


  <div class="modal-creator" id="modal-1">
    <div class="modal">
      <div class="close-modal">
        <a href="javascript:void(0)">
          <svg xmlns="http://www.w3.org/2000/svg" width="33.836" height="34.344" viewBox="0 0 33.836 34.344">
            <g id="close" transform="translate(-1205.867 -4041.828)">
              <path id="シェイプ_4" data-name="シェイプ 4" d="M1222.785,4059l-16.205,16.47,16.205-16.47-16.205-16.47,16.205,16.47,16.205-16.47L1222.785,4059l16.205,16.47Z" fill="#0d0b0b" stroke="#0d0b0b" stroke-width="2"/>
            </g>
          </svg>
        </a>
      </div>
      <div class="content-modal">
        <div class="row">
          <div class="col-md-6">
            <div class="avarta"><img src="assets/images/banner/modal1.jpg" class="img-fluid w-100" alt=""></div>
          </div>
          <div class="col-md-6">
            <div class="info-profile">
              <div class="top-profile">
                <div class="avarta-user"><img src="assets/images/banner/profile.jpg" class="img-fluid w-100" alt=""></div>
                <div class="info-user">
                  <div class="name">こまやま明</div>
                  <div class="link-profile">
                    <a href="">
                      <span>Profile</span>
                      <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
                          <g id="Icon_feather-external-link" data-name="Icon feather-external-link" transform="translate(-8.25 -10.75)">
                            <path id="Path_3756" data-name="Path 3756" d="M18,15.3v5.4a1.8,1.8,0,0,1-1.8,1.8H6.3a1.8,1.8,0,0,1-1.8-1.8V10.8A1.8,1.8,0,0,1,6.3,9h5.4" transform="translate(4.5 4.5)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                            <path id="Path_3757" data-name="Path 3757" d="M22.5,4.5h5.2V9.7" transform="translate(-3.204 7)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                            <path id="Path_3758" data-name="Path 3758" d="M15,12l7.5-7.5" transform="translate(1.546 7.454)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                          </g>
                        </svg>
                      </span>
                      <span class="icon-svg-bott">
                        <svg xmlns="http://www.w3.org/2000/svg" width="170.217" height="12.159" viewBox="0 0 170.217 12.159">
                          <path id="Path_3532" data-name="Path 3532" d="M185.749,1776.333h169l-11.433-11.3" transform="translate(-185.749 -1764.673)" fill="none" stroke="#0d0b0b" stroke-width="1"/>
                        </svg>
                      </span>
                    </a>
                  </div>
                </div> 
              </div>
              <div class="map text-center">
                <div class="avr"><img src="assets/images/banner/map.jpg" class="img-fluid" alt=""></div>
                <a href="">MAP画像待ち</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
  <section class="box-calender">
    <div class="container">
      <div class="icon-abs abs1"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/cap-1.svg" class="img-fluid" alt=""></div>
      <div class="icon-abs abs2"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/cap-2.svg" class="img-fluid" alt=""></div>
      <div class="icon-abs abs3"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/cap-3.svg" class="img-fluid" alt=""></div>
      <div class="icon-abs abs4"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/cap-4.svg" class="img-fluid" alt=""></div>
      <div class="title text-center scroll-anime">
        <h2><span>EVENT</span></h2>
      </div>
      <div class="list-calender">
        <div class="row">
          <div class="col-md-6 month10">
            <div class="item-calender">
              <div class="action-cal next-cal"><a href="javascript:void(0)"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/bnt_next.svg" class="img-fluid" alt=""></a></div>
              <div class="avr"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/calender1.svg" class="img-fluid w-100" alt=""></div>
            </div>
          </div>
          <div class="col-md-6 month11">
            <div class="item-calender">
              <div class="action-cal prev-cal"><a href="javascript:void(0)"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/bnt_prev.svg" class="img-fluid" alt=""></a></div>
              <div class="avr"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/calender2.svg" class="img-fluid w-100" alt=""></div>
            </div>
          </div>
        </div>
      </div>
      <div class="list-event">
        <div class="plus-abs plus-left">
          <?php
            for ($x = 0; $x <= 50; $x++) { ?>
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="15.152" height="15.142" viewBox="0 0 15.152 15.142">
                  <g id="Group_2391" data-name="Group 2391" transform="translate(-358.625 -4026.585)">
                    <line id="Line_1542" data-name="Line 1542" x2="10" y2="10" transform="translate(366.206 4027.085) rotate(45)" fill="none" stroke="#272727" stroke-width="1"/>
                    <line id="Line_1543" data-name="Line 1543" x1="10" y2="10" transform="translate(366.196 4027.085) rotate(45)" fill="none" stroke="#272727" stroke-width="1"/>
                  </g>
                </svg>
              </div>
          <?php  }
          ?>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="item-event">
              <div class="title-top">
                <div class="abs-head"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/bg-title-event.png" class="img-fluid w-100" alt=""></div>
                <div class="item-top-head">
                  <div class="icon"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/ev-1.svg" class="img-fluid" alt=""></div>
                  <span>ライブペイント</span>
                </div>
              </div>
              <div class="avarta"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/avr-event.png" class="img-fluid w-100" alt=""></div>
              <div class="info">
                <div class="top">日時：2023/10/20 MAN   |  13：00 〜</div>
                <h3>場所：本館2F</h3>
                <div class="desc">
                  テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="item-event">
              <div class="title-top">
                <div class="abs-head"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/bg-title-event.png" class="img-fluid w-100" alt=""></div>
                <div class="item-top-head">
                  <div class="icon"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/ev-2.svg" class="img-fluid" alt=""></div>
                  <span>ライブペイント</span>
                </div>
              </div>
              <div class="avarta"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/avr-event.png" class="img-fluid w-100" alt=""></div>
              <div class="info">
                <div class="top">日時：2023/10/20 MAN   |  13：00 〜</div>
                <h3>場所：本館2F</h3>
                <div class="desc">
                  テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="item-event">
              <div class="title-top">
                <div class="abs-head"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/bg-title-event.png" class="img-fluid w-100" alt=""></div>
                <div class="item-top-head">
                  <div class="icon"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/ev-3.svg" class="img-fluid" alt=""></div>
                  <span>ライブペイント</span>
                </div>
              </div>
              <div class="avarta"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/avr-event.png" class="img-fluid w-100" alt=""></div>
              <div class="info">
                <div class="top">日時：2023/10/20 MAN   |  13：00 〜</div>
                <h3>場所：本館2F</h3>
                <div class="desc">
                  テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="item-event">
              <div class="title-top">
                <div class="abs-head"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/bg-title-event.png" class="img-fluid w-100" alt=""></div>
                <div class="item-top-head">
                  <div class="icon"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/ev-4.svg" class="img-fluid" alt=""></div>
                  <span>ライブペイント</span>
                </div>
              </div>
              <div class="avarta"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/avr-event.png" class="img-fluid w-100" alt=""></div>
              <div class="info">
                <div class="top">日時：2023/10/20 MAN   |  13：00 〜</div>
                <h3>場所：本館2F</h3>
                <div class="desc">
                  テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="plus-abs plus-right">
          <?php
            for ($x = 0; $x <= 50; $x++) { ?>
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="15.152" height="15.142" viewBox="0 0 15.152 15.142">
                  <g id="Group_2391" data-name="Group 2391" transform="translate(-358.625 -4026.585)">
                    <line id="Line_1542" data-name="Line 1542" x2="10" y2="10" transform="translate(366.206 4027.085) rotate(45)" fill="none" stroke="#272727" stroke-width="1"/>
                    <line id="Line_1543" data-name="Line 1543" x1="10" y2="10" transform="translate(366.196 4027.085) rotate(45)" fill="none" stroke="#272727" stroke-width="1"/>
                  </g>
                </svg>
              </div>
          <?php  }
          ?>
        </div>
      </div>
    </div>
  </section>
  <section class="box-special">
    <div class="container">
      <div class="icon-abs abs1"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/cap-1.svg" class="img-fluid" alt=""></div>
      <div class="icon-abs abs2"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/cap-2.svg" class="img-fluid" alt=""></div>
      <div class="icon-abs abs3"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/cap-3.svg" class="img-fluid" alt=""></div>
      <div class="icon-abs abs4"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/cap-4.svg" class="img-fluid" alt=""></div>
      <div class="title text-center scroll-anime">
        <h2>SPECIAL</h2>
      </div>
      <div class="list-special">
        <div class="item-special">
          <div class="avarta"><a href=""><img src="assets/images/banner/spec.png" class="img-fluid w-100" alt=""></a></div>
          <div class="info">
            <h3>テナントコラボ</h3>
            <ul>
              <li>
                <span>開催日時</span>
                <span>2023/08/10〜2023/08/30</span>
              </li>
              <li>
                <span>開催場所</span>
                <span>—————</span>
              </li>
            </ul>
            <div class="desc">
              テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
            </div>
          </div>
        </div>
        <div class="item-special">
          <div class="avarta"><a href=""><img src="assets/images/banner/spec.png" class="img-fluid w-100" alt=""></a></div>
          <div class="info">
            <h3>テナントコラボ</h3>
            <ul>
              <li>
                <span>開催日時</span>
                <span>2023/08/10〜2023/08/30</span>
              </li>
              <li>
                <span>開催場所</span>
                <span>—————</span>
              </li>
            </ul>
            <div class="desc">
              テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="box-goods">
    <div class="container">
      <div class="icon-abs abs1"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/cap-1.svg" class="img-fluid" alt=""></div>
      <div class="icon-abs abs2"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/cap-2.svg" class="img-fluid" alt=""></div>
      <div class="icon-abs abs3"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/cap-3.svg" class="img-fluid" alt=""></div>
      <div class="icon-abs abs4"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/cap-4.svg" class="img-fluid" alt=""></div>
      <div class="title text-center scroll-anime">
        <div class="icon-title"><img src="assets/images/banner/x-title.svg" class="img-fluid" alt=""></div>
        <h2><span>Goods</span></h2>
        <div class="icon-title"><img src="assets/images/banner/x-title.svg" class="img-fluid" alt=""></div>
      </div>
      <div class="content-goods">
        <div class="circle"><img src="assets/images/banner/circle.svg" class="img-fluid w-100" alt=""></div>
        <div class="row">
          <?php
          for ($x = 0; $x <= 2; $x++) { ?>
            <div class="col-md-4">
              <div class="item-good">
                <div class="avarta"><a href=""><img src="assets/images/banner/store.jpg" class="img-fluid w-100" alt=""></a></div>
                <div class="info">
                  <h3>画集</h3>
                  <div class="price">¥0,000</div>
                  <div class="view-shop">
                    <a href="">
                      <span>ONLINE STORE</span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="170.217" height="12.159" viewBox="0 0 170.217 12.159">
                        <path id="Path_3532" data-name="Path 3532" d="M185.749,1776.333h169l-11.433-11.3" transform="translate(-185.749 -1764.673)" fill="none" stroke="#0d0b0b" stroke-width="1"/>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <?php }
          ?>
        </div>
      </div>
    </div>
  </section>
  <section class="box-quesstion">
    <div class="container">
      <div class="icon-abs abs1"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/cap-1.svg" class="img-fluid" alt=""></div>
      <div class="icon-abs abs2"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/cap-2.svg" class="img-fluid" alt=""></div>
      <div class="icon-abs abs3"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/cap-3.svg" class="img-fluid" alt=""></div>
      <div class="icon-abs abs4"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/cap-4.svg" class="img-fluid" alt=""></div>
      <div class="title scroll-anime">
        <h2>CREATORS</h2>
      </div>
      <div class="content-quesstion">
        <h4>本館1階</h4>
        <p>HER ／ 前山ちぇ〜 ／ 山吹あん ／ 犬波 ／ 526 ／ クリエイター名 ／ HER ／ 前山ちぇ〜 ／ 山吹あん ／ 犬波 ／ 526 ／ クリエイター名 ／ HER ／ 前山ちぇ〜 ／ 山吹あん ／ 犬波 ／ 526 ／ クリエイター名 ／ </p>
        <h4>本館1階</h4>
        <p>HER ／ 前山ちぇ〜 ／ 山吹あん ／ 犬波 ／ 526 ／ クリエイター名 ／ HER ／ 前山ちぇ〜 ／ 山吹あん ／ 犬波 ／ 526 ／ クリエイター名 ／ HER ／ 前山ちぇ〜 ／ 山吹あん ／ 犬波 ／ 526 ／ クリエイター名 ／ </p>
        <h4>本館1階</h4>
        <p>HER ／ 前山ちぇ〜 ／ 山吹あん ／ 犬波 ／ 526 ／ クリエイター名 ／ HER ／ 前山ちぇ〜 ／ 山吹あん ／ 犬波 ／ 526 ／ クリエイター名 ／ HER ／ 前山ちぇ〜 ／ 山吹あん ／ 犬波 ／ 526 ／ クリエイター名 ／ </p>
        <h4>本館1階</h4>
        <p>HER ／ 前山ちぇ〜 ／ 山吹あん ／ 犬波 ／ 526 ／ クリエイター名 ／ HER ／ 前山ちぇ〜 ／ 山吹あん ／ 犬波 ／ 526 ／ クリエイター名 ／ HER ／ 前山ちぇ〜 ／ 山吹あん ／ 犬波 ／ 526 ／ クリエイター名 ／ </p>
        <h4>本館1階</h4>
        <p>HER ／ 前山ちぇ〜 ／ 山吹あん ／ 犬波 ／ 526 ／ クリエイター名 ／ HER ／ 前山ちぇ〜 ／ 山吹あん ／ 犬波 ／ 526 ／ クリエイター名 ／ HER ／ 前山ちぇ〜 ／ 山吹あん ／ 犬波 ／ 526 ／ クリエイター名 ／ </p>
        <h4>本館1階</h4>
        <p>HER ／ 前山ちぇ〜 ／ 山吹あん ／ 犬波 ／ 526 ／ クリエイター名 ／ HER ／ 前山ちぇ〜 ／ 山吹あん ／ 犬波 ／ 526 ／ クリエイター名 ／ HER ／ 前山ちぇ〜 ／ 山吹あん ／ 犬波 ／ 526 ／ クリエイター名 ／ </p>
        <h4>本館1階</h4>
        <p>HER ／ 前山ちぇ〜 ／ 山吹あん ／ 犬波 ／ 526 ／ クリエイター名 ／ HER ／ 前山ちぇ〜 ／ 山吹あん ／ 犬波 ／ 526 ／ クリエイター名 ／ HER ／ 前山ちぇ〜 ／ 山吹あん ／ 犬波 ／ 526 ／ クリエイター名 ／ </p>
        <h4>本館1階</h4>
        <p>HER ／ 前山ちぇ〜 ／ 山吹あん ／ 犬波 ／ 526 ／ クリエイター名 ／ HER ／ 前山ちぇ〜 ／ 山吹あん ／ 犬波 ／ 526 ／ クリエイター名 ／ HER ／ 前山ちぇ〜 ／ 山吹あん ／ 犬波 ／ 526 ／ クリエイター名 ／ </p>
        <h4>本館1階</h4>
        <p>HER ／ 前山ちぇ〜 ／ 山吹あん ／ 犬波 ／ 526 ／ クリエイター名 ／ HER ／ 前山ちぇ〜 ／ 山吹あん ／ 犬波 ／ 526 ／ クリエイター名 ／ HER ／ 前山ちぇ〜 ／ 山吹あん ／ 犬波 ／ 526 ／ クリエイター名 ／ </p>
        <h4>本館1階</h4>
        <p>HER ／ 前山ちぇ〜 ／ 山吹あん ／ 犬波 ／ 526 ／ クリエイター名 ／ HER ／ 前山ちぇ〜 ／ 山吹あん ／ 犬波 ／ 526 ／ クリエイター名 ／ HER ／ 前山ちぇ〜 ／ 山吹あん ／ 犬波 ／ 526 ／ クリエイター名 ／ </p>
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
 