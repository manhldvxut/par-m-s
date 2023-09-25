<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/assets/inc/global-config.php';
//下記のパス「demo」を変更
include_once $_SERVER['DOCUMENT_ROOT'].'/page/artandculture/assets/inc/config.php';

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
$pege_title = 'PARCO ART&CULTURE│吉祥寺PARCO';
$pege_description = '吉祥寺パルコで開催する『PARCO ART&CULTURE』';
$pege_keywords = '';
$page_shareurl = 'https://'.STORE_NAME.'.parco.jp/page/artandculture/'; //必ずディレクトリ名を変更する

?>
<!DOCTYPE html> 
<html lang="ja">
<head>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/page/assets/inc/meta.php';?>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/inc/tagmanager1.php';?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.typekit.net/xzf0geu.css">

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
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/assets/inc/header.php'; ?>


<?php
/**
 * Main contents
 */
?>
<main class="main-contents">
	<section class="box-sapo">
		<div class="container">
			<div class="content-sapo text-center">
				<p>吉祥寺PARCOがスタジオになり、ギャラリーになる。</p>
			</div>
		</div>
	</section>
	<section class="box-event-tab">
		<div class="container">
			<ul>
				<li><a href="#tab-1">Studio</a></li>
				<li><a href="#tab-2">Event</a></li>
				<li><a href="#tab-3">Pop up shop</a></li>
			</ul>
		</div>
	</section>
	<section class="box-studio" id="tab-1">
		<div class="container">
			<div class="title text-center">Studio</div>
		</div>
		<div class="date-studio">
			<div class="container">
				<div class="icon-day"><img src="assets/images/icon-day.svg" alt=""></div>
				<ul>
					<li><img src="assets/images/date-1.svg" class="img-fluid" alt=""></li>
					<li><img src="assets/images/date-2.svg" class="img-fluid" alt=""></li>
					<li><img src="assets/images/date-3.svg" class="img-fluid" alt=""></li>
				</ul>
			</div>
		</div>
		<div class="sort-content-studio">
			<div class="container">
				<div class="txt-studio">
					館内複数拠点で、今を輝くクリエイターたちによるリアルタイム制作を実施。制作した作品は10月23日(月)以降展示販売いたします。
				</div>
				<div class="studio-top">
					<div class="head-title title-grad">
						<span>正面入口</span>
					</div>
					<div class="content-item-studio">
						<div class="avarta">
							<div class="avr"><img src="assets/images/avr-1.jpg" class="img-fluid w-100" alt="名前が入ります。名前が入ります。名前が入ります。名前が入ります。"></div>
						</div>
						<div class="info">
							<h3>名前が入ります。名前が入ります。名前が入ります。名前が入ります。</h3>
							<div class="desc">
								紹介テキストが入ります紹介テキストが入ります紹介テキストが入ります紹介テキストが入ります紹介テキストが入ります紹介テキストが入ります紹介テキストが入ります紹介テキストが入ります紹介テキストが入ります紹介テキストが入ります紹介テキストが入ります
							</div>
							<div class="social">
								<ul>
									<li><a href="" target="_blank"><img src="assets/images/sc-1.svg" alt=""></a></li>
									<li><a href="" target="_blank"><img src="assets/images/sc-2.svg" alt=""></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="other-studio">
					<div class="head-title title-grad">
						<span>OTHER FLOORS</span>
					</div>
					<div class="desc-title text-center">
						館内複数拠点で、今を輝くクリエイターたちによるリアルタイム制作を実施。制作した作品は10月23日(月)以降展示販売いたします。
					</div>
					<div class="list-studio">
						<div class="row">
							<div class="col-md-4">
								<div class="item-studio">
									<div class="avarta"><a href="" class="clc-modal"><img src="assets/images/avr-1.jpg" class="img-fluid w-100" alt="名前が入ります。名前が入ります。名前が入ります。名前が入ります。"></a></div>
									<div class="desc">
										名前が入ります。名前が入ります。名前が入ります。名前が入ります。
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="item-studio">
									<div class="avarta"><a href="" class="clc-modal"><img src="assets/images/avr-1.jpg" class="img-fluid w-100" alt="名前が入ります。名前が入ります。名前が入ります。名前が入ります。"></a></div>
									<div class="desc">
										名前が入ります。名前が入ります。名前が入ります。名前が入ります。
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="item-studio">
									<div class="avarta"><a href="" class="clc-modal"><img src="assets/images/avr-1.jpg" class="img-fluid w-100" alt="名前が入ります。名前が入ります。名前が入ります。名前が入ります。"></a></div>
									<div class="desc">
										名前が入ります。名前が入ります。名前が入ります。名前が入ります。
									</div>
								</div>
							</div>
						</div>
						<div class="btn-main text-center">
							<a href="https://kichijoji.parco.jp/pnews/detail/?id=25258" target="_blank">
								<span>詳しくはこちら</span>
								<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26">
								  <g id="Group_2197" data-name="Group 2197" transform="translate(-446 -1491)">
								    <circle id="Ellipse_2" data-name="Ellipse 2" cx="13" cy="13" r="13" transform="translate(446 1491)" fill="#fff"/>
								    <path id="Path_3173" data-name="Path 3173" d="M457.4,1500.786l3.718,3.718-3.718,3.718" transform="translate(0 -0.286)" fill="none" stroke="#7090c2" stroke-linecap="round" stroke-width="1.5"/>
								  </g>
								</svg>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="box-event" id="tab-2">
		<div class="container">
			<div class="title text-center">EVENT</div>
			<div class="list-event">
				<div class="item-evnt">
          <div class="avarta">
            <div class="avr"><img src="assets/images/event_1.jpg" class="img-fluid w-100" alt="ZINE FES TOKYO"></div>
          </div>
          <div class="info">
            <h3>
              <span>ZINE FES TOKYO</span>
            </h3>
            <ul>
              <li>
                <div class="i-note">
                  <span>会期</span>
                  <span>10.28 sat</span>
                </div>
              </li>
              <li>
                <div class="i-note">
                  <span>会場</span>
                  <span>屋上</span>
                </div>
              </li>
            </ul>
            <div class="desc">
              <p>70人以上のクリエーターや本の届け手が集まる、半年に一度のイベントです。吉祥寺PARCOの屋上でZINEと本を楽しみましょう！ZINE好きな方やこれからZINEを作りたいと思っている方や本の話がしたい方、ご来場をお待ちしております。</p>
            </div>
            <div class="btn-main">
            <a href="https://kichijoji.parco.jp/pnews/detail/?id=25259" target="_blank">
              <span>詳しくはこちら</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26">
                <g id="Group_2197" data-name="Group 2197" transform="translate(-446 -1491)">
                  <circle id="Ellipse_2" data-name="Ellipse 2" cx="13" cy="13" r="13" transform="translate(446 1491)" fill="#fff"/>
                  <path id="Path_3173" data-name="Path 3173" d="M457.4,1500.786l3.718,3.718-3.718,3.718" transform="translate(0 -0.286)" fill="none" stroke="#7090c2" stroke-linecap="round" stroke-width="1.5"/>
                </g>
              </svg>
            </a>
          </div>
          </div>
        </div>
        <div class="item-evnt">
          <div class="avarta">
            <div class="avr"><img src="assets/images/event_2.jpg" class="img-fluid w-100" alt="ミートピポピポvol.4"></div>
          </div>
          <div class="info">
            <h3>
              <span>ミートピポピポvol.4</span>
            </h3>
            <ul>
              <li>
                <div class="i-note">
                  <span>会期</span>
                  <span>11.04 sat - 11.05 sun</span>
                </div>
              </li>
              <li>
                <div class="i-note">
                  <span>会場</span>
                  <span>屋上</span>
                </div>
              </li>
            </ul>
            <div class="desc">
              <p>ミートピポピポは、 「アートを通して人と出逢う/ meet people people する場所。」 <br>若手アーティストやクリエイターが、ジャンルを問わず一堂に集うアートマーケットです。約80組が参加し、絵画、陶 芸、ZINE、服、ぬいぐるみ、ステッカーなど、それぞれのイチオシの作品たちを展示・販売します。</p>
            </div>
            <div class="btn-main">
            <a href="https://kichijoji.parco.jp/pnews/detail/?id=25260" target="_blank">
              <span>詳しくはこちら</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26">
                <g id="Group_2197" data-name="Group 2197" transform="translate(-446 -1491)">
                  <circle id="Ellipse_2" data-name="Ellipse 2" cx="13" cy="13" r="13" transform="translate(446 1491)" fill="#fff"/>
                  <path id="Path_3173" data-name="Path 3173" d="M457.4,1500.786l3.718,3.718-3.718,3.718" transform="translate(0 -0.286)" fill="none" stroke="#7090c2" stroke-linecap="round" stroke-width="1.5"/>
                </g>
              </svg>
            </a>
          </div>
          </div>
        </div>
        <div class="item-evnt">
          <div class="avarta">
            <div class="avr"><img src="assets/images/event_3.jpg" class="img-fluid w-100" alt="秋のきらめき百貨店。"></div>
          </div>
          <div class="info">
            <h3>
              <span>秋のきらめき百貨店。</span>
            </h3>
            <ul>
              <li>
                <div class="i-note">
                  <span>会期</span>
                  <span>10.21 sat - 10.22 sun</span>
                </div>
              </li>
              <li>
                <div class="i-note">
                  <span>会場</span>
                  <span>1F ホテルショコラ横</span>
                </div>
              </li>
            </ul>
            <div class="desc">
              <p>組立式の屋台をせっせと組み立てて、渾身の1冊を届ける『露店書房』、暮らしをあざやかにいろどるアートを落とし込んだホームグッズブランド『MYTONE』、高知県北川村直送、旬の甘酸っぱいゆずのジュース&ケーキの店『KURIYAMA JUICE STAND』。<br><br>秋と冬のあわいの週末に、小さな架空の百貨店があなたの日常を照らす“きらめき”をお届けします。日々の緊張感や忙しさから心ほどけて、くすっと笑える1日をお過ごしください。</p>
            </div>
            <div class="btn-main">
            <a href="https://kichijoji.parco.jp/pnews/detail/?id=25262" target="_blank">
              <span>詳しくはこちら</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26">
                <g id="Group_2197" data-name="Group 2197" transform="translate(-446 -1491)">
                  <circle id="Ellipse_2" data-name="Ellipse 2" cx="13" cy="13" r="13" transform="translate(446 1491)" fill="#fff"/>
                  <path id="Path_3173" data-name="Path 3173" d="M457.4,1500.786l3.718,3.718-3.718,3.718" transform="translate(0 -0.286)" fill="none" stroke="#7090c2" stroke-linecap="round" stroke-width="1.5"/>
                </g>
              </svg>
            </a>
          </div>
          </div>
        </div>
			</div>
		</div>
	</section>
	<section class="box-event" id="tab-3">
		<div class="title text-center">POP UP SHOP</div>
		<div class="container">
			<div class="list-event">
				<div class="item-evnt">
          <div class="avarta">
            <div class="avr"><img src="assets/images/avr-1.jpg" class="img-fluid w-100" alt="NEW ART, NEW LIFE vol.2"></div>
          </div>
          <div class="info">
            <h3 >
              <span class="c-pink">NEW ART, NEW LIFE vol.2</span>
            </h3>
            <ul>
              <li>
                <div class="i-note c-pink">
                  <span>会期</span>
                  <span>10.20 fri - 10.22 sat</span>
                </div>
              </li>
              <li>
                <div class="i-note c-pink">
                  <span>会場</span>
                  <span>1F ターンザテーブル（屋外イベントスペース）</span>
                </div>
              </li>
            </ul>
            <div class="desc">
              <p>ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</p>
            </div>
            <div class="btn-main">
            <a href="https://kichijoji.parco.jp/pnews/detail/?id=25261" target="_blank">
              <span>詳しくはこちら</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26">
                <g id="Group_2197" data-name="Group 2197" transform="translate(-446 -1491)">
                  <circle id="Ellipse_2" data-name="Ellipse 2" cx="13" cy="13" r="13" transform="translate(446 1491)" fill="#fff"/>
                  <path id="Path_3173" data-name="Path 3173" d="M457.4,1500.786l3.718,3.718-3.718,3.718" transform="translate(0 -0.286)" fill="none" stroke="#7090c2" stroke-linecap="round" stroke-width="1.5"/>
                </g>
              </svg>
            </a>
          </div>
          </div>
        </div>
        <div class="item-evnt">
          <div class="avarta">
            <div class="avr"><img src="assets/images/popup_2.jpg" class="img-fluid w-100" alt="気になってる人が男じゃなかったPOP UP SHOP"></div>
          </div>
          <div class="info">
            <h3 >
              <span class="c-pink">気になってる人が男じゃなかったPOP UP SHOP</span>
            </h3>
            <ul>
              <li>
                <div class="i-note c-pink">
                  <span>会期</span>
                  <span>10.20 fri - 10.29 sun</span>
                </div>
              </li>
              <li>
                <div class="i-note c-pink">
                  <span>会場</span>
                  <span>4F イベントスペース</span>
                </div>
              </li>
            </ul>
            <div class="desc">
              <p>新井すみこ先生のSNSフォロワー95万超の大人気SNS漫画「気になってる人が男じゃなかった」初となるPOP UP　SHOP『気になってる人が男じゃなかったPOP UP SHOP』を池袋PARCO（本館B1Fイベントスペース）と名古屋PARCO（東館1Fイベントスペース）にて開催いたします。<br><br>今回開催が初めてとなるPOP UP SHOPでは、開催を記念したオリジナルグッズの販売をいたします。また、人気の登場人物と一緒に写真が撮れるフォトスポットも展示いたします。グッズご購入特典としてスペシャルノベルティもプレゼントいたします。</p>
            </div>
            <div class="btn-main">
            <a href="https://kichijoji.parco.jp/pnews/detail/?id=25285" target="_blank">
              <span>詳しくはこちら</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26">
                <g id="Group_2197" data-name="Group 2197" transform="translate(-446 -1491)">
                  <circle id="Ellipse_2" data-name="Ellipse 2" cx="13" cy="13" r="13" transform="translate(446 1491)" fill="#fff"/>
                  <path id="Path_3173" data-name="Path 3173" d="M457.4,1500.786l3.718,3.718-3.718,3.718" transform="translate(0 -0.286)" fill="none" stroke="#7090c2" stroke-linecap="round" stroke-width="1.5"/>
                </g>
              </svg>
            </a>
          </div>
          </div>
        </div>
        <div class="item-evnt">
          <div class="avarta">
            <div class="avr"><img src="assets/images/popup_3.png" class="img-fluid w-100" alt="YES POP UP"></div>
          </div>
          <div class="info">
            <h3 >
              <span class="c-pink">YES POP UP</span>
            </h3>
            <ul>
              <li>
                <div class="i-note c-pink">
                  <span>会期</span>
                  <span>11.03 fri - 11.05 sun</span>
                </div>
              </li>
              <li>
                <div class="i-note c-pink">
                  <span>会場</span>
                  <span>2F エスカレーター横</span>
                </div>
              </li>
            </ul>
            <div class="desc">
              <p>吉祥寺中道商店街にある「街にあるサービスエリア」をコンセプトにしたギャラリー/ショップです。５人のクリエーターによるシェアスタジオ内で展開しています。オリジナルグッズ/アパレル/雑貨/ZINEなど。</p>
            </div>
            <div class="btn-main">
            <a href="https://kichijoji.parco.jp/pnews/detail/?id=25286" target="_blank">
              <span>詳しくはこちら</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26">
                <g id="Group_2197" data-name="Group 2197" transform="translate(-446 -1491)">
                  <circle id="Ellipse_2" data-name="Ellipse 2" cx="13" cy="13" r="13" transform="translate(446 1491)" fill="#fff"/>
                  <path id="Path_3173" data-name="Path 3173" d="M457.4,1500.786l3.718,3.718-3.718,3.718" transform="translate(0 -0.286)" fill="none" stroke="#7090c2" stroke-linecap="round" stroke-width="1.5"/>
                </g>
              </svg>
            </a>
          </div>
          </div>
        </div>
        <div class="item-evnt">
          <div class="avarta">
            <div class="avr"><img src="assets/images/avr-1.jpg" class="img-fluid w-100" alt="430　POPUP"></div>
          </div>
          <div class="info">
            <h3 >
              <span class="c-pink">430　POPUP</span>
            </h3>
            <ul>
              <li>
                <div class="i-note c-pink">
                  <span>会期</span>
                  <span>10.27 fri - 11.12 sun</span>
                </div>
              </li>
              <li>
                <div class="i-note c-pink">
                  <span>会場</span>
                  <span>B1F イベントスペース</span>
                </div>
              </li>
            </ul>
            <div class="desc">
              <p>ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</p>
            </div>
            <div class="btn-main">
            <a href="https://kichijoji.parco.jp/pnews/detail/?id=25287" target="_blank">
              <span>詳しくはこちら</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26">
                <g id="Group_2197" data-name="Group 2197" transform="translate(-446 -1491)">
                  <circle id="Ellipse_2" data-name="Ellipse 2" cx="13" cy="13" r="13" transform="translate(446 1491)" fill="#fff"/>
                  <path id="Path_3173" data-name="Path 3173" d="M457.4,1500.786l3.718,3.718-3.718,3.718" transform="translate(0 -0.286)" fill="none" stroke="#7090c2" stroke-linecap="round" stroke-width="1.5"/>
                </g>
              </svg>
            </a>
          </div>
          </div>
        </div>
			</div>
		</div>
	</section>
	<section class="box-credit">
		<div class="container">
			<div class="content-credit">
				<div class="icon-cred"><img src="assets/images/credit.svg" alt="ARTIST"></div>
				<div class="list-credit">
					<div class="item-credit">
						<h4>ARTIST</h4>
						<div class="desc">NAME NAME NAME <br> NAMENAME NAME NAME</div>
					</div>
					<div class="item-credit">
						<h4>ART DIRECTOR & PLANNING</h4>
						<div class="desc">NAME NAME NAME</div>
					</div>
					<div class="item-credit">
						<h4>ARTIST</h4>
						<div class="desc">NAME NAME NAMENAME NAME NAME</div>
					</div>
					<div class="item-credit">
						<h4>ARTIST</h4>
						<div class="desc">NAME NAME NAMENAME NAME NAME</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="box-popup">
		<div class="modal-artan" id="modal-1">
			<div class="content-modal">
				<div class="close">
					<img src="assets/images/b-close.svg" class="img-fluid" alt="">
					<a href="javascript:void(0)"><img src="assets/images/close.svg" class="img-fluid" alt=""></a>
				</div>
				<div class="info-modal">
					<div class="mb-head"><span>フロアが入ります</span></div>
					<div class="avarta"><img src="assets/images/avr-1.jpg" class="img-fluid w-100" alt=""></div>
					<div class="info-txt-modal">
						<div class="top">
							<span>フロアが入ります</span>
						</div>
						<h3>名前が入ります。名前が入ります。名前が入ります。名前が入ります。</h3>
						<div class="desc">
							紹介テキストが入ります紹介テキストが入ります紹介テキストが入ります紹介テキストが入ります紹介テキストが入ります紹介テキストが入ります紹介テキストが入ります紹介テキストが入ります紹介テキストが入ります紹介テキストが入ります紹介テキストが入ります
						</div>
						<div class="social">
							<ul>
								<li><a href="" target="_blank"><img src="assets/images/sc-1.svg" class="img-fluid" alt=""></a></li>
								<li><a href="" target="_blank"><img src="assets/images/sc-2.svg" class="img-fluid" alt=""></a></li>
							</ul>
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
 