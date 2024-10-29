<?php // include_once $_SERVER['DOCUMENT_ROOT'].'/page/assets/inc/page-hd.php'; ?>

<?php /* ===========================================================
ページヘッダー
============================================================== */ ?>
<header class="header">
    <div class="header__in" style="display: none">
        <h1 class="header__title">
          <div class="mv">
            <picture>
              <?php /* SPメイン画像 */ ?>
              <source media="(max-width: 768px)" srcset="/<?php echo DIRNAME; ?>/assets/images/splash-sp.png" />
              <?php /* PCメイン画像 */ ?>
              <img src="/<?php echo DIRNAME; ?>/assets/images/pc_mv.png" alt="<?php echo $pege_title; ?>">
            </picture>
          </div>
        </h1>
    </div>
    <div class="btn-menu">
        <a href="javascript:void(0)">
            <img src="assets/images/btn-menu.svg" alt="">
        </a>
    </div>
    <div class="nav-menu">
        <div class="close-menu">
            <a href="javascript:void(0)">
                <img src="assets/images/btn-close-menu.svg" alt="">
            </a>
        </div>
        <div class="content-menu">
            <div class="icon-menu">
                <ul>
                    <li><a href=""><img src="assets/images/menu-1.svg" alt=""></a></li>
                    <li><a href=""><img src="assets/images/menu-2.svg" alt=""></a></li>
                    <li><a href=""><img src="assets/images/menu-3.svg" alt=""></a></li>
                    <li><a href=""><img src="assets/images/menu-1.svg" alt=""></a></li>
                    <li><a href=""><img src="assets/images/menu-2.svg" alt=""></a></li>
                    <li><a href=""><img src="assets/images/menu-3.svg" alt=""></a></li>
                    <li><a href=""><img src="assets/images/menu-1.svg" alt=""></a></li>
                    <li><a href=""><img src="assets/images/menu-2.svg" alt=""></a></li>
                    <li><a href=""><img src="assets/images/menu-3.svg" alt=""></a></li>
                </ul>
            </div>
            <div class="link-nav">
                <ul>
                    <li>
                        <a href="#event" class="">イベント</a>
                        <div class="line"><img src="assets/images/line-menu.svg" alt=""></div>
                    </li>
                    <li>
                        <a href="#limit" class="">期間限定ショップ</a>
                        <div class="line"><img src="assets/images/line-menu.svg" alt=""></div>
                    </li>
                    <li>
                        <a href="#camping" class="">キャンペーン</a>
                        <div class="line"><img src="assets/images/line-menu.svg" alt=""></div>
                    </li>
                    <li>
                        <a href="#shoplist" class="">おすすめ商品</a>
                        <div class="line"><img src="assets/images/line-menu.svg" alt=""></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="menu-overlay"></div>
</header>

<section class="box-banner">
    <div class="content-banner">
        <div class="avarta avr-pc"><img src="assets/images/bg-mv.svg" class="w-100" alt=""></div>
        <div class="avarta avr-mb"><img src="assets/images/bg-mv-mb.webp" class="w-100" alt=""></div>
        <div class="icon-mv"><img src="assets/images/mv.svg" alt=""></div>
        <div class="icon-abs abs-1"><img src="assets/images/mv-01.svg" alt=""></div>
        <div class="icon-abs abs-2"><img src="assets/images/mv-02.svg" alt=""></div>
        <div class="icon-abs abs-3"><img src="assets/images/mv-03.svg" alt=""></div>
        <div class="icon-abs abs-4"><img src="assets/images/mv-04.svg" alt=""></div>
        <div class="icon-abs abs-5"><img src="assets/images/mv-05.svg" alt=""></div>
        <div class="icon-abs abs-6"><img src="assets/images/mv-06.svg" alt=""></div>
        <div class="icon-abs abs-7"><img src="assets/images/mv-07.svg" alt=""></div>
        <div class="icon-abs abs-8"><img src="assets/images/mv-08.svg" alt=""></div>
        <div class="icon-abs abs-9"><img src="assets/images/mv-09.svg" alt=""></div>
        <div class="icon-abs abs-10"><img src="assets/images/mv-10.svg" alt=""></div>
    </div>
</section>