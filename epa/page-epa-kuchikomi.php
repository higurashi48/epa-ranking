<?php get_header(); ?>


  <div id="main"<?php bzb_layout_main(); ?> role="main" itemprop="mainContentOfPage">

  	<div class="inner">

    <div class="detaiL_deta">
      <div class="img_tsubu_detail"><img src="/wp-content/themes/xeory_base/img/img_tsubu_detail_epa.png" alt=""></div>
      <div class="flow c_b">
        <h3>実際に試してみました！</h3>
        <ol>
          <li>
            <div class="img"><img src="/wp-content/themes/xeory_base/img/img_taiken_epa_tsubu.png"></div>
            <p class="txt">少し大きい？が気になるほどでもない。においも特に気にならず</p>
          </li>
          <li>
            <div class="img"><img src="/wp-content/themes/xeory_base/img/img_taiken_epa_dokon.png"></div>
            <p class="txt">飲用している人の体験談が多く載っているので、飲み続けたときのイメージがしやすい。</p>
          </li>
        </ol>
      </div>
    <!-- /.flow -->
    </div>

		<div class="ippan kuchikomi_page">

			<h2>
				<i></i>
				<p>ラフィーネ-エパゴールドの口コミ</p>
			</h2>

			<div class="kuchikomi_base ippan_color">
<?php

$paged = get_query_var('paged', 1);
$query = new WP_Query(
    array(
        'paged' => $paged,
        'posts_per_page' => 5,
        'category_name' => 'epa',
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
     <?php include_once("table.php"); ?>

		</div>
		<!-- /.ippan -->
  	</div>

<?php include_once("modal-epa-g.php"); ?>
<?php get_footer(); ?>
