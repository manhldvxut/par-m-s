<?php include_once $_SERVER['DOCUMENT_ROOT'].'/page/assets/inc/page-hd.php'; ?>

<?php /* ===========================================================
ページヘッダー
============================================================== */ ?>
<header class="header">
<div class="header__in">
<h1 class="header__title">
  <picture>
    <?php /* SPメイン画像 */ ?>
    	<div class="slide-banner">
    		<div class="item-slide">
    			<div class="item-banner">
            <picture>
                <source media="(max-width: 768px)" srcset="/<?php echo DIRNAME; ?>/assets/images/banner/banner-sp-1.png">
                <img src="/<?php echo DIRNAME; ?>/assets/images/banner/banner-1.jpg" class="img-fluid w-100" alt="<?php echo $pege_title; ?>">
            </picture>
          </div>
    		</div>
    		<div class="item-slide">
    			<div class="item-banner">
            <picture>
                <source media="(max-width: 768px)" srcset="/<?php echo DIRNAME; ?>/assets/images/banner/banner-sp-1.png">
                <img src="/<?php echo DIRNAME; ?>/assets/images/banner/banner-2.jpg" class="img-fluid w-100" alt="<?php echo $pege_title; ?>">
            </picture>
          </div>
    		</div>
    		<div class="item-slide">
    			<div class="item-banner">
            <picture>
                <source media="(max-width: 768px)" srcset="/<?php echo DIRNAME; ?>/assets/images/banner/banner-sp-1.png">
                <img src="/<?php echo DIRNAME; ?>/assets/images/banner/banner-3.jpg" class="img-fluid w-100" alt="<?php echo $pege_title; ?>">
            </picture>
          </div>
    		</div>
    	</div>
    <?php /* PCメイン画像 */ ?>
  </picture>
</h1>
<!-- /header__in --></div>
<!-- /header --></header>