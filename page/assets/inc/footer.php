<footer class="pft">
  <div class="pft__in">
    <?php /* パルコや上野以外 */ ?>
    <div class="pft__logo">
      <a href="/">
        <svg class="pft__logo__txt">
          <title><?php echo STORE_NAME_JA; ?></title>
          <desc><?php echo STORE_NAME_JA; ?></desc>
          <use xlink:href="#parco-logo-<?php echo STORE_NAME; ?>"/>
        </svg>
        <svg class="pft__logo__img">
          <title>PARCO</title>
          <desc>PARCO</desc>
          <use xlink:href="#parco-logo"/>
        </svg>
      </a>
    </div>
    <?php /* パルコや上野 */ ?>
    <?php /* ?>
    <div class="pft__logo parcoya-ueno">
      <a href="/">
        <svg class="pft__logo__img"><title>PARCO</title><desc>PARCO</desc><use xlink:href="#parco-logo"/></svg>
      </a>
    </div>
    <?php */ ?>

    <div class="pft__pageTop">
      <a href="#top" class="scroll">ページトップ</a>
    </div>

    <div class="pft__copyright">
    <svg class="pft__copyright__img">
        <title>COPYRIGHT &copy; PARCO CO.,LTD ALL RIGHTS RESERVED.</title>
        <desc>COPYRIGHT &copy; PARCO CO.,LTD ALL RIGHTS RESERVED.</desc>
        <use xlink:href="#copyright"/>
    </svg>
    </div>
  </div>
<!-- /#footbg --></footer>
