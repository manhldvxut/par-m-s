<?php // include_once $_SERVER['DOCUMENT_ROOT'].'/page/assets/inc/page-hd.php'; ?>

<?php /* ===========================================================
ページヘッダー
============================================================== */ ?>
<header class="header">
<div class="header__in">
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
<!-- /header__in --></div>
<!-- /header --></header>