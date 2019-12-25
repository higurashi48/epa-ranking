<?php include_once("header-repo.php"); ?>
<div id="content">


<div class="rankinglist">

  <div id="main"<?php bzb_layout_main(); ?> role="main" itemprop="mainContentOfPage">

  	<h2>
  		<img src="/wp-content/themes/xeory_base/img/banner_ranking_index.png" alt="">
  	</h2>

	 <?php include_once("epa.php"); ?>
	 <?php include_once("suntory.php"); ?>
	 <?php include_once("kinari.php"); ?>
	 <?php include_once("taisho.php"); ?>
	 <?php include_once("yamada.php"); ?>

	 <?php include_once("egao.php"); ?>
	 <?php include_once("miyabi.php"); ?>
	 <?php include_once("yazuya.php"); ?>
	 <?php include_once("fuji.php"); ?>
	 <?php include_once("azi.php"); ?>

	 <?php include_once("table.php"); ?>

  </div><!-- /main -->

</div><!-- /wrap -->

</div><!-- /content -->

<?php include_once("modal-others.php"); ?>
<?php get_footer(); ?>
