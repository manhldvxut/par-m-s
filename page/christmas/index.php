<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/assets/inc/global-config.php';
//下記のパス「demo」を変更
include_once $_SERVER['DOCUMENT_ROOT'].'/page/christmas/assets/inc/config.php';

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
$pege_title = 'Riveting Wonder Christmas| 福岡PARCO';
$pege_description = '福岡PARCOがお届けするクリスマスイベント"Riveting Wonder"ワクワクとドキドキが詰まった素敵な企画をご紹介します。';
$pege_keywords = '';
$page_shareurl = 'https://'.STORE_NAME.'.parco.jp/page/christmas/'; //必ずディレクトリ名を変更する

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
    <div class="content-header">
        <div class="h-header">
            <div class="logo"><img src="assets/images/logo.png" alt=""></div>
            <div class="social">
                <ul>
                    <li><a href=""><img src="assets/images/head-1.png" alt=""></a></li>
                    <li><a href=""><img src="assets/images/head-2.png" alt=""></a></li>
                    <li><a href=""><img src="assets/images/head-3.png" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="menu-fixed">
        <ul>
            <li><a href="">ABOUT</a></li>
            <li><a href="">EVENT</a></li>
            <li><a href="">CAMPAIGN</a></li>
            <li><a href="">POPUP</a></li>
            <li><a href="">BGM</a></li>
        </ul>
    </div>
</header>
<main class="main-contents">
    <section class="box-banner">
        <div class="container">
            <div class="content-banner">
                <div class="icon-abs icon-1"><img src="assets/images/banner-1.png" alt=""></div>
                <div class="icon-abs icon-2"><img src="assets/images/banner-2.png" alt=""></div>
                <div class="icon-abs icon-3"><img src="assets/images/banner-3.png" alt=""></div>
                <div class="icon-abs icon-4"><img src="assets/images/banner-4.png" alt=""></div>
            </div>
        </div>
    </section>
    <section class="box-riveting text-center">
        <div class="container">
            <div class="title-riveting">
                <img src="assets/images/riveting.png" class="img-fluid" alt="">
            </div>
            <div class="content-riveting">
                <div class="txt-riveting">
                    <p>1年の中でも最高にワクワクし、 <br>ドキドキするクリスマスシーズン。 <br>相手を思い浮かべながら心を込めて選ぶギフトには、 <br>心が躍り、驚きと喜びが広がります。</p>
                    <p>1年の中でも最高にワクワクし、 <br>ドキドキするクリスマスシーズン。 <br>相手を思い浮かべながら心を込めて選ぶギフトには、 <br>心が躍り、驚きと喜びが広がります。</p>
                    <p>1年の中でも最高にワクワクし、 <br>ドキドキするクリスマスシーズン。 <br>相手を思い浮かべながら心を込めて選ぶギフトには、 <br>心が躍り、驚きと喜びが広がります。</p>
                </div>
                <div class="user-riveting">
                    <div class="content-user">
                        <div class="avarta"><img src="assets/images/user.png" alt=""></div>
                        <div class="info-user">
                            <div class="namer">岡田将充（OMD）</div>
                            <div class="desc">
                                紹介テキスト紹介テキスト紹介テキスト紹介テキスト紹介テキスト紹介テキスト紹介テキスト紹介テキスト紹介テキスト紹介テキスト紹介テキスト紹介テキスト紹介テキスト
                            </div>
                            <ul>
                                <li><a href="" target="_blank"><img src="assets/images/sc-1.png" alt=""></a></li>
                                <li><a href="" target="_blank"><img src="assets/images/sc-2.png" alt=""></a></li>
                                <li><a href="" target="_blank"><img src="assets/images/sc-3.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-event">
        <div class="top-bg"></div>
        <div class="container">
            <div class="title text-center">
                <h2><span>EVENT</span></h2>
            </div>
            <div class="list-item-section">
                <div class="item-section">
                    <div class="avarta-item-left">
                        <div class="slide-avr">
                            <div class="item-slide">
                                <div class="avr"><img src="assets/images/avarta.png" alt=""></div>
                            </div>
                            <div class="item-slide">
                                <div class="avr"><img src="assets/images/avarta.png" alt=""></div>
                            </div>
                            <div class="item-slide">
                                <div class="avr"><img src="assets/images/avarta.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="txt-item-right">
                        <div class="info">
                            <h3>タイトルが入ります。タイトルが入ります。</h3>
                            <ul>
                                <li>2023.11.1 WED - 11.5 FRI</li>
                                <li>PARCO館 ●F ▲▲▲前</li>
                            </ul>
                        </div>
                        <div class="viewmore">
                            <a href="">
                                VIEW MORE
                                <span class="icon"><img src="assets/images/arrow-right.png" alt=""></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-campaign">
        <div class="top-bg"></div>
        <div class="container">
            <div class="title text-center">
                <h2><span>CAMPAIGN</span></h2>
            </div>
            <div class="list-item-section">
                <div class="item-section">
                    <div class="avarta-item-left">
                        <div class="slide-avr">
                            <div class="item-slide">
                                <div class="avr"><img src="assets/images/avarta.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="txt-item-right">
                        <div class="info">
                            <h3>タイトルが入ります。タイトルが入ります。</h3>
                            <ul>
                                <li>2023.11.1 WED - 11.5 FRI</li>
                                <li>PARCO館 ●F ▲▲▲前</li>
                            </ul>
                            <div class="desc">
                                テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                            </div>
                        </div>
                        <div class="viewmore">
                            <a href="">
                                VIEW MORE
                                <span class="icon"><img src="assets/images/arrow-right.png" alt=""></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item-section">
                    <div class="avarta-item-left">
                        <div class="slide-avr">
                            <div class="item-slide">
                                <div class="avr"><img src="assets/images/avarta.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="txt-item-right">
                        <div class="info">
                            <h3>タイトルが入ります。タイトルが入ります。</h3>
                            <ul>
                                <li>2023.11.1 WED - 11.5 FRI</li>
                                <li>PARCO館 ●F ▲▲▲前</li>
                            </ul>
                            <div class="desc">
                                テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                            </div>
                        </div>
                        <div class="viewmore">
                            <a href="">
                                VIEW MORE
                                <span class="icon"><img src="assets/images/arrow-right.png" alt=""></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item-section">
                    <div class="avarta-item-left">
                        <div class="slide-avr">
                            <div class="item-slide">
                                <div class="avr"><img src="assets/images/avarta.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="txt-item-right">
                        <div class="info">
                            <h3>タイトルが入ります。タイトルが入ります。</h3>
                            <ul>
                                <li>2023.11.1 WED - 11.5 FRI</li>
                                <li>PARCO館 ●F ▲▲▲前</li>
                            </ul>
                            <div class="desc">
                                テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                            </div>
                        </div>
                        <div class="viewmore">
                            <a href="">
                                VIEW MORE
                                <span class="icon"><img src="assets/images/arrow-right.png" alt=""></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-popup">
        <div class="top-bg"></div>
        <div class="container">
            <div class="title text-center">
                <h2><span>POPUP</span></h2>
            </div>
            <div class="content-popup">
                <div class="sort-content text-center">
                    200文字程度の概要文が入ります概要文が入ります概要文が入ります概要文が入ります概要文が入ります概要文が入ります概要文が入ります概要文が入ります概要文が入ります概要文が入ります概要文が入ります概要文が入ります概要文が入ります
                </div>
                <div class="list-popup">
                    <div class="col-popup">
                        <div class="item-popup">
                            <div class="avarta"><img src="assets/images/pop-1.png" alt=""></div>
                            <div class="info">
                                <div class="desc">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</div>
                                <div class="more"><a href=""><img src="assets/images/arrow-right.png" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-popup">
                        <div class="item-popup">
                            <div class="avarta"><img src="assets/images/pop-2.png" alt=""></div>
                            <div class="info">
                                <div class="desc">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</div>
                                <div class="more"><a href=""><img src="assets/images/arrow-right.png" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-popup">
                        <div class="item-popup">
                            <div class="avarta"><img src="assets/images/pop-2.png" alt=""></div>
                            <div class="info">
                                <div class="desc">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</div>
                                <div class="more"><a href=""><img src="assets/images/arrow-right.png" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-popup">
                        <div class="item-popup">
                            <div class="avarta"><img src="assets/images/pop-2.png" alt=""></div>
                            <div class="info">
                                <div class="desc">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</div>
                                <div class="more"><a href=""><img src="assets/images/arrow-right.png" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="box-bgm">
        <div class="top-bg"></div>
        <div class="container">
            <div class="title text-center">
                <h2><span>BGM</span></h2>
            </div>
            <div class="content-bgm text-center">
                <div class="sort-content">
                    100文字程度の館内BGMのテキストが入ります館内BGMのテキストが入ります館内BGMのテキストが入ります館内BGMのテキストが入ります
                </div>
                <div class="viewmore">
                    <a href="">
                        PLAY LIST
                        <span class="icon"><img src="assets/images/arrow-right.png" alt=""></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>


<footer class="pft">
  <div class="container">
      <div class="content-fter text-center">
          <div class="logo"><img src="assets/images/fter.png" alt=""></div>
          <p>COPYRIGHT © PARCO CO.,LTD ALL RIGHTS RESERVED.</p>
      </div>
  </div>
</footer>

</div>

<!-- Javascript -->
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/assets/inc/js.php';?>
<!-- /Javascript -->

<script>
    $('.slide-avr').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        nextArrow: '<a href="javascript:void(0)" class="arr-right"><img src="assets/images/arrow-right.png" class="img-fluid" alt=""></a>',
        prevArrow: '<a href="javascript:void(0)" class="arr-left"><img src="assets/images/arrow-left.png" class="img-fluid" alt=""></a>',
    });
</script>
</body>
</html>
 