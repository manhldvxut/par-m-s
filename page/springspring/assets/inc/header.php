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
                            <source media="(max-width: 768px)" srcset="/<?php echo DIRNAME; ?>/assets/images/mv-sp.gif">
                            <img src="/<?php echo DIRNAME; ?>/assets/images/mv-pc.gif" class="img-fluid w-100" alt="<?php echo $pege_title; ?>">
                        </picture>
                    </div>
        		</div>
        	</div>
        <?php /* PCメイン画像 */ ?>
      </picture>
    </h1>
<!-- /header__in --></div>
<!-- /header --></header>