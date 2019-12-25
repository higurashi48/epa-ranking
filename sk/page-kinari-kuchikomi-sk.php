   <?php include_once("header-sk.php"); ?>


  <div id="main"<?php bzb_layout_main(); ?> role="main" itemprop="mainContentOfPage">

  	<div class="inner">

    <div class="detaiL_deta">
      <div class="img_tsubu_detail"><img src="/wp-content/themes/xeory_base/img/img_tsubu_detail_kinari.png" alt=""></div>
      <div class="flow c_b">
        <h3>実際に試してみました！</h3>
        <ol>
          <li>
            <div class="img"><img src="/wp-content/themes/xeory_base/img/img_taiken_kinari_tsubu.png"></div>
            <p class="txt">水と一緒に粒を口にいれたら、粒の周りが早くも溶け始めて焦った。少しだが納豆の匂いが気になる。</p>
          </li>
          <li>
            <div class="img"><img src="/wp-content/themes/xeory_base/img/img_taiken_kinari_dokon.png"></div>
            <p class="txt">ライフスタイルに合わせた飲用粒数の案内が分かりやすく、1カ月の袋数の参考になった。飲んでいる人の声が分かりやすい</p>
          </li>
        </ol>
      </div>
    <!-- /.flow -->
    </div>

		<div class="ippan kuchikomi_page">
			<h2>
				<i></i>
				<p>きなりの口コミ</p>
			</h2>

			<div class="kuchikomi_base ippan_color">
<?php

$paged = get_query_var('paged', 1);
$query = new WP_Query(
    array(
        'paged' => $paged,
        'posts_per_page' => 5,
        'category_name' => 'kinari',
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
