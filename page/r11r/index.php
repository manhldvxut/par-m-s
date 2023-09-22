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
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">

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
    <li><a href="#creators">CREATORS</a></li>
    <li><a href="#event">EVENT</a></li>
    <li><a href="#special">SPECIAL</a></li>
    <li><a href="#goods">GOODS</a></li>
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
      <div class="title scroll-anime" id="creators">
        <h2><span>CREATORS</span></h2>
        <div class="icon"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/creators.svg" class="img-fluid" alt=""></div>
      </div>
      <div class="list-creator">
        <div class="row">
        </div>
        <div class="view-more">
          <a href="javascript:void(0)">
            <span class="icon">
              <img src="/<?php echo DIRNAME; ?>/assets/images/btn_more.png" class="img-fluid w-100" alt="more">
            </span>
            <span>view more</span>
          </a>
        </div>
      </div>
    </div>


  <div class="modal-creator" id="modalShow">
  </div>
  </section>
  <section class="box-calender" id="event">
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
              <div class="avr"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/calender1.png" class="img-fluid w-100" alt=""></div>
            </div>
          </div>
          <div class="col-md-6 month11">
            <div class="item-calender">
              <div class="action-cal prev-cal"><a href="javascript:void(0)"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/bnt_prev.svg" class="img-fluid" alt=""></a></div>
              <div class="avr"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/calender2.png" class="img-fluid w-100" alt=""></div>
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
                <div class="top">日時：毎週土曜日</div>
                <h3>場所：P'PARCO 店頭</h3>
                <div class="desc">
                  <!-- code here -->
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
                  <span>サイン会</span>
                </div>
              </div>
              <div class="avarta"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/avr-event.png" class="img-fluid w-100" alt=""></div>
              <div class="info">
                <div class="top">日時：毎週日曜日</div>
                <h3>場所：本館8F 特設会場</h3>
                <div class="desc">
                  <!-- code here -->
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
                  <span>トークイベント</span>
                </div>
              </div>
              <div class="avarta"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/avr-event.png" class="img-fluid w-100" alt=""></div>
              <div class="info">
                <div class="top">日時：11/4</div>
                <h3>場所：本館M2F HIS</h3>
                <div class="desc">
                  <!-- code here -->
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
                  <span>クリエイターズマーケット</span>
                </div>
              </div>
              <div class="avarta"><img src="/<?php echo DIRNAME; ?>/assets/images/banner/avr-event.png" class="img-fluid w-100" alt=""></div>
              <div class="info">
                <div class="top">日時：11/4</div>
                <h3>場所：本館RF</h3>
                <div class="desc">
                  <!-- code here -->
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
  <section class="box-special" id="special">
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
                <span>
                  <!-- code here -->
                </span>
              </li>
              <li>
                <span>開催場所</span>
                <span>
                  <!-- code here -->
                </span>
              </li>
            </ul>
            <div class="desc">
              <!-- code here -->
            </div>
          </div>
        </div>
        <div class="item-special">
          <div class="avarta"><a href=""><img src="assets/images/banner/spec.png" class="img-fluid w-100" alt=""></a></div>
          <div class="info">
            <h3>限定ガチャ</h3>
            <ul>
              <li>
                <span>開催日時</span>
                <span>
                  <!-- code here -->
                </span>
              </li>
              <li>
                <span>開催場所</span>
                <span>本館8F 特設会場</span>
              </li>
            </ul>
            <div class="desc">
              <!-- code here -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="box-goods" id="goods">
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
          <div class="col-md-4">
            <div class="item-good">
              <div class="avarta"><a href=""><img src="assets/images/banner/store.jpg" class="img-fluid w-100" alt="画集"></a></div>
              <div class="info">
                <h3>画集</h3>
                <div class="price">3,300円（税込）</div>
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
          <div class="col-md-4">
            <div class="item-good">
              <div class="avarta"><a href=""><img src="assets/images/banner/store.jpg" class="img-fluid w-100" alt="複製原画"></a></div>
              <div class="info">
                <h3>複製原画</h3>
                <div class="price">
                  <!-- code here -->
                </div>
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
          <div class="col-md-4">
            <div class="item-good">
              <div class="avarta"><a href=""><img src="assets/images/banner/store.jpg" class="img-fluid w-100" alt="サイン会チケット"></a></div>
              <div class="info">
                <h3>サイン会チケット</h3>
                <div class="price">
                  <!-- code here -->
                </div>
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
        <h4>本館8階</h4>
        <p>おにく　くいたい / アキオカ / 一条 / まるゐ / しな / とみながしんぺい / kokuno / 中村杏子 / お天気屋 / わたなべ萌 / てとら うう / ラリアット/rariatoo / 金属8g / mamep / 爆竹香織 / 晴菜 / CHO / 雪丸ぬん / 朝際イコ / ヨシサコツバサ</p>
        <h4>本館7階</h4>
        <p>HASU /暮宙シュン /fracoco /春海 にむ /フジマメグム /カンカラナシ /すり餌 /ねこぜもん /まぁ坊 /けけ /逢編いあむ /Mercure /あんのん /まつもとみなみ /岬ましろ /天川たまを〜 /やまなみ /イラカアヅコ /山北東 /櫻田 あこ /才賀サイ /めめんち /sʜɪᴍᴀᴋᴜᴍᴀ  /桜田佳代子</p>
        <h4>本館6階</h4>
        <p>山月 まり / めげ / のをか / 藻前まっく / まんぷくアートスタジオ はち / hao / YUBISAKI / あんころもちこ先生 / せの弁当屋 / Osu / alma / 田島幸枝 / roxy / taniori / しまりすゆきち / 北極まぐ / 白咲まぐる / 一色 しめ / </p>
        <h4>本館5階</h4>
        <p>nowri / 仮名井 / TSCR / タミウラ / ほたてんし / YUME / O仮名だモ / ウエダツバサ / Haる / とろろとろろ / OYK / Birne / 鴉羽凛燈 / こたろう</p>
        <h4>本館4階</h4>
        <p>N1 / 眩しい / スドウ創太 / AyaNee / REO / 丸千代 / ゆりぼう / はやぴ / まめすけ / SG / athéko / カトウトモカ / アキヤレモンサワー / おそら / びねつ</p>
        <h4>本館3階</h4>
        <p>紀 / 恢原 / unknown / まかろんK / Biss / 福宇地 / 西條ユリカ / GAS / ROROICHI / うみねこ研究所 / 蒼木こうり / イグアナ大佐 / </p>
        <h4>本館2階</h4>
        <p>8月96日 / burari / お村ヴィレッジ / Syamauchi / ななみ雪 / カノ / 大志 / こもり / 白駒マル / 亀山鶴子 / チヤキ / みつきさなぎ / 川名 すず / 前田ミック / ゆうき / ふじまる2002 </p>
        <h4>本館M2階</h4>
        <p>野渡ひい / HER / ペパーミント / 梅田 あいな / STUDY優作 / くまぞう / najuco / その / maple / しうん / いとうみゆき / 旅行 / ゆいあい</p>
        <h4>本館1階</h4>
        <p>もなか / fjsmu / Gurin. / もん / ぽんすけかいかい / 左藤うずら / さん / 神吉李花 / あさ / みりん / ドジ / KOUME / ききのき / 瓜うりた / 万年喪服 / Z-Z / tacomiya / AiLeeN / タナカミホ / シブチャ / mashu / ともわか / 水沢石鹸 / うた坊 / 桜庭すず / さわ / たる / 冨田 マリー / 芦屋マキ / 526 / OKADA / てんてこ / 冨士原良 / matumot / Kou / こまやま 明</p>
        <h4>本館B1階</h4>
        <p>はやしうき / 琥珀雨 / ナカムラユウキ / いなた / 白鹿 / 猫目トヲル / 棉きのし / 旧都なぎ / fucca / ナチコ / ROMI / 犀将 / 慧子 / オカユウリ / 前山 ちぇ～ / オツザカ / 驟々みそばた / 色田 / しんいし智歩 / hiko / an minami / 梅まろ / きくち / なつめみく / まかぎ / 白皙</p>
        <h4>本館B2階</h4>
        <p>purokiti / 兎鷺ぬい / more / Coma*85 / ますだみく / はまふぐ </p>
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
 