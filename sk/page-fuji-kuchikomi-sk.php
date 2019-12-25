   <?php include_once("header-sk.php"); ?>


  <div id="main"<?php bzb_layout_main(); ?> role="main" itemprop="mainContentOfPage">

  	<div class="inner">

		<div class="ippan kuchikomi_page">
			<h2>
				<i></i>
				<p>DHA・EPA&アスタキサンチンの口コミ</p>
			</h2>

			<div class="kuchikomi_base ippan_color">
<?php

$paged = get_query_var('paged', 1);
$query = new WP_Query(
    array(
        'paged' => $paged,
        'posts_per_page' => 5,
        'category_name' => 'fuji',
        'post_type' => 'post',
    )
);
?>
<?php

if ( $query->have_posts() ) : ?>
<ul>
 <?php while ( $query->have_posts() ) : $query->the_post();?>

   <li>
   		 <?php the_content(); ?>
   	</li>

<?php endwhile; ?>
</ul>
<?php else : ?>
<p>現在表示する記事はありません</p>

<?php endif; ?>
 </div>

<?php wp_pagenavi(array('query' => $query)); ?>

<?php wp_reset_postdata(); ?>



			</div>
     <?php include_once("table-sk.php"); ?>
		</div>
		<!-- /.ippan -->
  	</div>


	 <?php include_once("modal-others-sk.php"); ?>
   <?php include_once("footer_sk.php"); ?>
