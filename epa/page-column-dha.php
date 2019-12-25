<?php get_header(); ?>

<div id="content">


<div style="margin-bottom: 50px;" class="column_inner">

  <div id="main"<?php bzb_layout_main(); ?> role="main" itemprop="mainContentOfPage">

  	<div class="inner">


		 <?php include_once("content-column-dha.php"); ?>
		 <?php include_once("table-sk.php"); ?>

  	</div>
  	<!-- /.inner -->

  </div><!-- /main -->

</div><!-- /wrap -->

</div><!-- /content -->

<?php include_once("modal-others.php"); ?>
<?php get_footer(); ?>
