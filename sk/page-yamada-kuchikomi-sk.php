   <?php include_once("header-sk.php"); ?>


  <div id="main"<?php bzb_layout_main(); ?> role="main" itemprop="mainContentOfPage">

  	<div class="inner">

    <div class="detaiL_deta">
      <div class="img_tsubu_detail"><img src="/wp-content/themes/xeory_base/img/img_tsubu_detail_yamada.png" alt=""></div>
      <div class="flow c_b">
        <h3>実際に試してみました！</h3>
        <ol>
          <li>
            <div class="img"><img src="/wp-content/themes/xeory_base/img/img_taiken_yamada_tsubu.png"></div>
            <p class="txt">大きさはそこまで気にならなかった。可もなく不可もなく。魚とは思えない刺激臭</p>
          </li>
          <li>
            <div class="img"><img src="/wp-content/themes/xeory_base/img/img_taiken_yamada_dokon.png"></div>
            <p class="txt">手作り感あふれる「しおり」や目の不自由な方へ点字シールの用意があり、細かな気遣いを感じられる。石鹸などのお試し品が入っているのは嬉しい。飲み忘れ防止のチェックシートがあり、さらにシートを返送すると割引になるのは続けたくなる</p>
          </li>
        </ol>
      </div>
    <!-- /.flow -->
    </div>

		<div class="ippan kuchikomi_page">

			<h2>
				<i></i>
				<p>DHA+EPAの口コミ</p>
			</h2>

			<div class="kuchikomi_base ippan_color">
<?php

$paged = get_query_var('paged', 1);
$query = new WP_Query(
    array(
        'paged' => $paged,
        'posts_per_page' => 5,
        'category_name' => 'yamada',
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
