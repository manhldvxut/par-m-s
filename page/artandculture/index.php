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
				<p>リード文が入ります。</p>
				<p>リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。リード文が入ります。</p>
			</div>
		</div>
	</section>
	<section class="box-event-tab">
		<div class="container">
			<ul>
				<li><a href="javascript:void(0)">Studio</a></li>
				<li><a href="javascript:void(0)">Event</a></li>
				<li><a href="javascript:void(0)">Pop up shop</a></li>
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
					概要テキストが入ります。概要テキストが入ります。概要テキストが入ります。概要テキストが入ります。概要テキストが入ります。概要テキストが入ります。概要テキストが入ります。概要テキストが入ります。概要テキストが入ります。概要テキストが入ります。概要テキストが入ります。概要テキストが入ります。概要テキストが入ります。概要テキストが入ります。概要テキストが入ります。
				</div>
				<div class="studio-top">
					<div class="head-title title-grad">
						<span>正面入口</span>
					</div>
					<div class="content-item-studio">
						<div class="avarta">
							<div class="avr"><img src="assets/images/avr-1.jpg" class="img-fluid w-100" alt=""></div>
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
						概要テキストが入ります。概要テキストが入ります。概要テキストが入ります。概要テキストが入ります。概要テキストが入ります。概要テキストが入ります。概要テキストが入ります。概要テキストが入ります。概要テキストが入ります。概要テキストが入ります。概要テキストが入ります。概要テキストが入ります。
					</div>
					<div class="list-studio">
						<div class="row">
							<div class="col-md-4">
								<div class="item-studio">
									<div class="avarta"><a href=""><img src="assets/images/avr-1.jpg" class="img-fluid w-100" alt=""></a></div>
									<div class="desc">
										名前が入ります。名前が入ります。名前が入ります。名前が入ります。
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="item-studio">
									<div class="avarta"><a href=""><img src="assets/images/avr-1.jpg" class="img-fluid w-100" alt=""></a></div>
									<div class="desc">
										名前が入ります。名前が入ります。名前が入ります。名前が入ります。
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="item-studio">
									<div class="avarta"><a href=""><img src="assets/images/avr-1.jpg" class="img-fluid w-100" alt=""></a></div>
									<div class="desc">
										名前が入ります。名前が入ります。名前が入ります。名前が入ります。
									</div>
								</div>
							</div>
						</div>
						<div class="btn-main text-center">
							<a href="javascript:void(0)" class="clc-modal">
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
				<?php
				for ($x = 0; $x <= 3; $x++) { ?>
					<div class="item-evnt">
						<div class="avarta">
							<div class="avr"><img src="assets/images/avr-1.jpg" class="img-fluid w-100" alt=""></div>
						</div>
						<div class="info">
							<h3>
								<span>タイトルが入りますタイト</span><br>
								<span>ルが入ります</span>
							</h3>
							<ul>
								<li>
									<div class="i-note">
										<span>会期</span>
										<span>2023.00.00〜00.00</span>
									</div>
								</li>
								<li>
									<div class="i-note">
										<span>会場</span>
										<span>会場が入ります</span>
									</div>
								</li>
							</ul>
							<div class="desc">
								<p>吉祥寺PARCO屋上での開催が恒例となったZINEイベントの第6弾を開催。美大生、イラストレーター、カメラマンなど総勢100名が大集合。ZINEやポストカード、Tシャツなどを販売！</p>
								<p>＜開催時間＞10:00～17:00（16:30最終入場）</p>
								<p>＜入場料＞100円</p>
							</div>
							<div class="btn-main">
							<a href="">
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
				<?php }
				?>
			</div>
		</div>
	</section>
	<section class="box-event" id="tab-3">
		<div class="title text-center">POP UP SHOP</div>
		<div class="container">
			<div class="list-event">
				<?php
				for ($x = 0; $x <= 3; $x++) { ?>
					<div class="item-evnt">
						<div class="avarta">
							<div class="avr"><img src="assets/images/avr-1.jpg" class="img-fluid w-100" alt=""></div>
						</div>
						<div class="info">
							<h3 >
								<span class="c-pink">タイトルが入りますタイト</span><br>
								<span class="c-pink">ルが入ります</span>
							</h3>
							<ul>
								<li>
									<div class="i-note c-pink">
										<span>会期</span>
										<span>2023.00.00〜00.00</span>
									</div>
								</li>
								<li>
									<div class="i-note c-pink">
										<span>会場</span>
										<span>会場が入ります</span>
									</div>
								</li>
							</ul>
							<div class="desc">
								<p>吉祥寺PARCO屋上での開催が恒例となったZINEイベントの第6弾を開催。美大生、イラストレーター、カメラマンなど総勢100名が大集合。ZINEやポストカード、Tシャツなどを販売！</p>
								<p>＜開催時間＞10:00～17:00（16:30最終入場）</p>
								<p>＜入場料＞100円</p>
							</div>
							<div class="btn-main">
							<a href="">
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
				<?php }
				?>
			</div>
		</div>
	</section>
	<section class="box-credit">
		<div class="container">
			<div class="content-credit">
				<div class="icon-cred"><img src="assets/images/credit.svg" alt=""></div>
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
 