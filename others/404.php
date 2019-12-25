<?php get_header(); ?>

<div id="content">


<div class="wrap clearfix">

  <?php bzb_breadcrumb(); ?>
  
  <div id="main"<?php bzb_layout_main(); ?> role="main" itemprop="mainContentOfPage">

    <p style="font-weight: bold; margin-bottom: 20px;">ページは見つかりませんでした。</p>

    <?php include_once("table.php"); ?>

  </div><!-- /main -->

</div><!-- /wrap -->

</div><!-- /content -->

<?php get_footer(); ?>
