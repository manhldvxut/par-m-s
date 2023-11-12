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
            <div class="logo">
              <a href="https://fukuoka.parco.jp/page/christmas/"><img src="assets/images/logo.png" alt="Riveting Wonder Christmas| 福岡PARCO"></a>
            </div>
            <div class="social">
                <ul>
                    <li><a href="https://twitter.com/parco_fukuoka" target="_blank"><img src="assets/images/head-1.png" alt="twitter"></a></li>
                    <li><a href="https://page.line.me/fukuokaparco" target="_blank"><img src="assets/images/head-2.png" alt="line"></a></li>
                    <li><a href="https://www.instagram.com/parco_fukuoka_official/" target="_blank"><img src="assets/images/head-3.png" alt="instagram"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="menu-fixed">
        <ul>
            <li><a href="#section-1">ABOUT</a></li>
            <li><a href="#section-2">EVENT</a></li>
            <li><a href="#section-3">CAMPAIGN</a></li>
            <li><a href="#section-4">POPUP</a></li>
            <li><a href="#section-5">BGM</a></li>
        </ul>
    </div>
</header>
<main class="main-contents">
    <div class="bg-orang"></div>
    <div class="bg-cover"></div>
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
    <section class="box-banner-mobile">
        <div class="icon-cover logo-cover"><img src="assets/images/logo.png" alt=""></div>
        <div class="icon-cover cover-1"><img src="assets/images/mobile/cover-1.png" alt=""></div>
        <div class="icon-cover cover-abs cover-2"><img src="assets/images/mobile/cover-2.png" alt=""></div>
        <div class="icon-cover cover-abs cover-3"><img src="assets/images/mobile/cover-3.png" alt=""></div>
    </section>
    <section class="box-riveting text-center" id="section-1">
        <div class="top-circle">
            <div class="rv-pc"><img src="assets/images/top-bg-circle.png" alt=""></div>
            <div class="rv-mb"><img src="assets/images/top-edit.png" alt=""></div>
        </div>
        <div class="content-box-rive">
            <div class="container">
                <div class="icon-star star-1"><img src="assets/images/star-1.png" alt=""></div>
                <div class="icon-star star-2"><img src="assets/images/star-2.png" alt=""></div>
                <div class="icon-star star-3"><img src="assets/images/star-3.png" alt=""></div>
                <div class="title-riveting wow">
                    <img src="assets/images/riveting.png" class="img-fluid" alt="">
                </div>
                <div class="content-riveting">
                    <div class="txt-riveting">
                        <p>1年の中でも最高にワクワク、ドキドキするクリスマスシーズン。<br>
                            相手を思い浮かべながら選ぶギフトには、心が躍り、驚きと喜びが広がる。<br>
                            そんなギフトたちもあなたに選ばれたくて、<br>
                            じっと待ってなんかいられないはず！</p>
                    </div>
                    <div class="user-riveting">
                        <div class="content-user">
                            <div class="avarta"><img src="assets/images/user.png" alt=""></div>
                            <div class="info-user">
                                <div class="namer">岡田将充（OMD）</div>
                                <div class="desc">
                                    グラフィックデザイナー／アーティストとして活動中。クライアントワークと並行して近年は3DCGを用いたアートワークを展開。プロダクトや日用品など、それらのオブジェクトが持つ機能性を超越しデジタル空間上で再構築することで、新しい視覚的な価値を生み出すことをテーマに日々制作している。
                                </div>
                                <ul>
                                    <li><a href="https://www.instagram.com/okada_masamitsu/" target="_blank"><img src="assets/images/sc-1.png" alt=""></a></li>
                                    <li><a href="http://om-d.jp/" target="_blank"><img src="assets/images/sc-3.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-event" id="section-2">
        <div class="top-bg"></div>
        <div class="container">
            <div class="icon-abs abs-1 srv-parlx" data-enllax-ratio=".9" data-enllax-type="foreground"><img src="assets/images/ev-abs.png" alt=""></div>
            <div class="icon-abs abs-2 srv-parlx"><img src="assets/images/ev-abs-1.png" alt=""></div>
            <div class="title text-center">
                <h2 class="wow wow-up" data-wow-duration="1000ms">
                    <span class="">EVENT <label><img src="assets/images/star-title.png" alt=""></label></span>
                </h2>
            </div>
            <div class="list-item-section">
                <div class="item-section">
                    <div class="avarta-item-left">
                        <div class="slide-avr">
                            <div class="item-slide">
                                <div class="avr"><img src="assets/images/mv2.jpg" alt="CHIRSTMAS抽選会"></div>
                            </div>
                        </div>
                    </div>
                    <div class="txt-item-right">
                        <div class="info">
                            <h3>CHIRSTMAS抽選会</h3>
                            <ul>
                                <li>2023.12.22fri~202312.25 mon</li>
                                <li>新館3F 特設会場</li>
                            </ul>
                            <p>新館3F特設会場に高さ約2メートルの巨大なガチャが出現！<br>
                                九州の有名なホテル宿泊券やディナー券など豪華景品が当たるワクワク、ドキドキな抽選会を開催！</p>
                        </div>
                        <div class="viewmore">
                            <a href="https://fukuoka.parco.jp/pnews/detail/?id=25795" target="_blank">
                                VIEW MORE
                                <span class="icon"><img src="assets/images/arrow-right.png" alt=""></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-campaign" id="section-3">
        <div class="top-bg"></div>
        <div class="container">
            <div class="icon-abs abs-1 srv-parlx"><img src="assets/images/cam-1.png" alt=""></div>
            <div class="icon-abs abs-2 srv-parlx"><img src="assets/images/cam-2.png" alt=""></div>
            <div class="icon-abs abs-3 srv-parlx"><img src="assets/images/cam-3.png" alt=""></div>
            <div class="title text-center">
                <h2 class="wow wow-up" data-wow-duration="1000ms"><span>CAMPAIGN <label><img src="assets/images/star-title.png" alt=""></label></span></h2>
            </div>
            <div class="list-item-section">
                <div class="item-section">
                    <div class="avarta-item-left">
                        <div class="slide-avr">
                            <div class="item-slide">
                                <div class="avr"><img src="assets/images/cp-2.jpg" alt="CHIRSTMASギフトキャンペーン"></div>
                            </div>
                        </div>
                    </div>
                    <div class="txt-item-right">
                        <div class="info">
                            <h3>CHIRSTMASギフトキャンペーン</h3>
                            <ul>
                                <li>2023.12.11 mon～202312.25 mon</li>
                                <li>本館2F・3F エスカレーター横</li>
                            </ul>
                            <div class="desc">
                                館内のおすすめクリスマスギフトを20名様にプレゼント！<br>
                                福岡PARCO公式Instagramをフォロー&12/11のフィード投稿に、ほしい商品をコメントしてください♩さらに、館内にはクリスマスギフトのディスプレイも登場！ほしい商品を是非チェックしに来てくださいね。<br>
                                ※応募の詳細は12/11のフィード投稿をご確認ください。
                            </div>
                        </div>
                        <div class="viewmore">
                            <a href=" https://fukuoka.parco.jp/pnews/detail/?id=25821" target="_blank">
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
                                <div class="avr"><img src="assets/images/avarta.png" alt="PARCOとちいかわのクリスマスッ!!!"></div>
                            </div>
                        </div>
                    </div>
                    <div class="txt-item-right">
                        <div class="info">
                            <h3>PARCOとちいかわのクリスマスッ!!!</h3>
                            <ul>
                                <li>2023.12.8 fri ~ 2023.12.25 mon</li>
                                <li>PARCO館 ●F ▲▲▲前</li>
                            </ul>
                            <div class="desc">
                                池袋PARCOの「ちいかわレストラン」OPENを記念して、福岡PARCO館内の対象のレストラン・カフェでのご飲食でオリジナルコースターをプレゼント！さらに、ちいかわオリジナルポストカードが当たるSNSプレゼント企画も実施します！
                            </div>
                        </div>
                        <div class="viewmore">
                            <a href="https://parco.jp/chiikawa-christmas/" target="_blank">
                                VIEW MORE
                                <span class="icon"><img src="assets/images/arrow-right.png" alt=""></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-popup" id="section-4">
        <div class="top-bg"></div>
        <div class="container">
            <div class="icon-abs abs-1 srv-parlx"><img src="assets/images/pp-1.png" alt=""></div>
            <div class="icon-abs abs-2 srv-parlx"><img src="assets/images/pp-2.png" alt=""></div>
            <div class="icon-abs abs-3 srv-parlx"><img src="assets/images/pp-3.png" alt=""></div>
            <div class="title text-center">
                <h2 class="wow wow-up" data-wow-duration="1000ms"><span>POPUP <label><img src="assets/images/star-popup.png" alt=""></label></span></h2>
            </div>
            <div class="content-popup">
                <div class="list-popup">
                    <div class="col-popup">
                        <div class="item-popup">
                            <div class="avarta"><img src="assets/images/cp-2.jpg" alt="mofusand もふもふストア出張所"></div>
                            <div class="info">
                              <h3>mofusand もふもふストア出張所</h3>
                              <ul>
                                <li>2023.11.29 wed ~ 2024.1.28 sun</li>
                                <li>本館4F 特設会場</li>
                              </ul>
                              <div class="desc">「mofusand」のオフィシャルショップ「mofusand もふもふストア」の出張所が、福岡PARCOにて期間限定OPEN！<br>
                              にゃんこがかわいい新商品や、もふもふストアのオリジナル商品をたくさん取り揃えました。<br>
                              商品をご購入いただいたお客様には、オリジナルステッカーをプレゼントいたします</div>
                                <div class="more"><a href="https://fukuoka.parco.jp/popup/detail/?id=25765" target="_blank"><img src="assets/images/arrow-right.png" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-popup">
                        <div class="item-popup">
                            <div class="avarta"><img src="assets/images/pop-2.png" alt="くるりのPop-Up Shop"></div>
                            <div class="info">
                              <h3>タイトル記載</h3>
                              <ul>
                                <li>ーーーーーーー</li>
                                <li>本館1F POP UP SPACE「GATE」</li>
                              </ul>
                              <div class="desc">
                                ダミーテストダミーテストダミーテストダミーテストダミーテストダミーテスト
                              </div>
                                <div class="more"><a href="https://fukuoka.parco.jp/popup/detail/?id=25819" target="_blank"><img src="assets/images/arrow-right.png" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-popup">
                        <div class="item-popup">
                            <div class="avarta"><img src="assets/images/QURULI_no_main.jpg" alt="くるりのPop-Up Shop"></div>
                            <div class="info">
                              <h3>くるりのPop-Up Shop</h3>
                              <ul>
                                <li>2023.11.27 mon〜2023.12.10 sun</li>
                                <li>新館3F エスカレーター横特設会場</li>
                              </ul>
                              <div class="desc">
                                くるりポップアップ企画「くるりのPop-Up Shop」が期間限定OPEN！<br>
                                初代くるりロゴデザインのTシャツ、トートバック、バスタオル、マグネット＆ステッカーセット、レザーキーカバーなどの小物に加えて、QURULIロゴのロンT、初登場のパーカーやハンガー、更に昨年に引き続きタムくんがデザインをしたキーホルダー、ポーチなど、多種多様なグッズが盛りだくさん。<br>
                                その他にも「くるりのえいが」場面写真のパネルや、ツアーで着用した衣装も展示予定となっています。
                              </div>
                                <div class="more"><a href="https://fukuoka.parco.jp/popup/detail/?id=25806" target="_blank"><img src="assets/images/arrow-right.png" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <section class="box-bgm" id="section-5">
        <div class="top-bg"></div>
        <div class="container">
            <div class="icon-abs abs-1 srv-parlx"><img src="assets/images/b-1.png" alt=""></div>
            <div class="icon-abs abs-2 srv-parlx"><img src="assets/images/b-2.png" alt=""></div>
            <div class="title text-center">
                <h2 class="wow wow-up" data-wow-duration="1000ms"><span>館内BGM <label><img src="assets/images/star-title.png" alt=""></label></span></h2>
            </div>
            <div class="content-bgm text-center">
                <div class="sort-content">
                    2023.12.22fri~202312.25<br>
                    厳選したクリスマスソングを福岡PARCO館内で4日間限定で放送します。<br>
                    ワクワクでドキドキなお買い物の合間のほっと一息に耳を傾けてみてください。<br>
                    あなたのクリスマスがもっともっと楽しくなりますように。
                </div>
                <div class="viewmore">
                    <a href="https://open.spotify.com/user/31fup4kqfw22z47jbv6v3z2zjuja?si=67db260936894a42&nd=1" target="_blank">
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
          <div class="logo">
            <a href="https://fukuoka.parco.jp/"target="_blank"><img src="assets/images/fter.png" alt=""></a>
          </div>
          <p>COPYRIGHT © PARCO CO.,LTD ALL RIGHTS RESERVED.</p>
      </div>
  </div>
</footer>
</div>
<!-- Javascript -->
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/assets/inc/js.php';?>
<!-- /Javascript -->
</body>
</html>
 