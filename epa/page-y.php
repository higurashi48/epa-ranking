<?php get_header(); ?>

<div id="content">

  <?php bzb_breadcrumb(); ?>
  <div id="main"<?php bzb_layout_main(); ?> role="main" itemprop="mainContentOfPage">

    <div class="oyaku cf inner">
    	<p>このサイトはお役に立ちましたか？<br>「はい」と答えた人数 /  <span>10000人</span>中9999人</p>
	    <ul>
	    	<li><a href=""><img src="/wp-content/themes/xeory_base/img/button_top_yes.png"></a></li>
	    	<li><a href=""><img src="/wp-content/themes/xeory_base/img/button_top_no.png"></a></li>
	    </ul>
    </div>
	<!-- /.oyaku -->

	<div class="kanri_about">
		<div class="inner">
			<h3>健康のために摂取するなら、<br>質よく安心できるEPAサプリを選びたいですよね。<br>
			そこで、<span class="txt_point">栄養学のプロ・管理栄養士</span>5人で<br>EPAサプリを徹底的に分析しました！
			</h3>
			<div class="pc">
				<ul class="images">
					<li><img src="/wp-content/themes/xeory_base/img/img_kanri_01.png"></li>
					<li><img src="/wp-content/themes/xeory_base/img/img_kanri_02.png"></li>
					<li><img src="/wp-content/themes/xeory_base/img/img_kanri_03.png"></li>
				</ul>
			</div>
			<div class="sp">
				<ul class="images">
					<li><img src="/wp-content/themes/xeory_base/img/img_kanri_01.png"></li>
					<li><img src="/wp-content/themes/xeory_base/img/img_kanri_02.png"></li>
				</ul>
			</div>
			<p>10商品のEPAサプリメントの実物を成分、形状、EPA配合量、信頼度の観点から細かくチェックしています</p>
		</div>
	</div>

			<div class="epa_description">
				<div class="inner">
					<h2><img src="/wp-content/themes/xeory_base/img/h2_title_aboutepa.png" alt=""></h2>
					<input id="acd-check1" class="acd-check" type="checkbox">
					<label class="acd-label ac_base ac_m blue" for="acd-check1">EPAってどんな成分？</label>
					<div class="acd-content">
					    <p>EPAは血液を健康に保ち、<span class="txt_bold txt_line">血栓や高脂血症、動脈硬化や心筋梗塞、脳梗塞</span>を予防するという働きがあるということが世界中の医学者によって研究され続けています。<br>
		　しかし、近年、欧米化で肉中心の食生活になり、魚中心であった<span class="txt_bold txt_line">日本人のEPA不足が深刻化</span>。<br>よって動脈硬化などの血管リスクが上昇し、血管病といわれる病気を発症する人が年々増えています。<br>
		だからこそ、<span class="txt_bold txt_line">EPAを積極的に摂取して、日頃からリスクを予防するのが大切</span>です！</p>
					</div>
					<input id="acd-check2" class="acd-check" type="checkbox">
					<label class="acd-label ac_base ac_m blue" for="acd-check2">EPAとDHAの違いって？</label>
					<div class="acd-content">
					    <p>EPAサプリの多くは、<span class="txt_bold txt_line">EPAだけでなくDHAも一緒に配合されている</span>ことがほとんどです。<br>
					    	しかし、血液サラサラや血管病リスク予防に強い効果を発揮できると言われているのは<span class="txt_bold txt_line">EPA</span>なのです。<br>さらに、EPA・DHAサプリの多くは、DHA割合のほうが高いですが、DHAは、体内でEPAからも作られる成分なので、<span class="txt_bold txt_line">サプリを選ぶときはEPAにこだわっているものを選びましょう。</span></p>
					</div>
				</div>
			</div>
			<!-- /.epa_description -->

  <?php include_once("koumoku.php"); ?>
	<!-- /.koumoku -->

	 <?php include_once("table_y.php"); ?>
	 <?php include_once("epa_y.php"); ?>
	 <?php include_once("suntory.php"); ?>
	 <?php include_once("kinari.php"); ?>
	 <?php include_once("taisho.php"); ?>
	 <?php include_once("yamada.php"); ?>
	 <?php include_once("column.php"); ?>

	</div><!-- /content -->

	 <div id="kanri" class="kanri c_b">
	 	<h2><span>管理栄養士</span>について</h2>
	 	<ul>
	 		<li>
	 			<img src="/wp-content/themes/xeory_base/img/img_kanri_detail_umeda.png" alt="">
	 			<p>梅田いくみ</p>
	 		</li>
	 		<li>
	 			<img src="/wp-content/themes/xeory_base/img/img_kanri_detail_sasaki.png" alt="">
	 			<p>佐々木 彩乃</p>
	 		</li>
	 		<li>
	 			<img src="/wp-content/themes/xeory_base/img/img_kanri_detail_hizikata.png" alt="">
	 			<p>土方 佑美</p>
	 		</li>
	 		<li>
	 			<img src="/wp-content/themes/xeory_base/img/img_kanri_detail_takahashi.png" alt="">
	 			<p>高橋 清美</p>
	 		</li>
	 		<li>
	 			<img src="/wp-content/themes/xeory_base/img/img_kanri_detail_ohhira.png" alt="">
	 			<p>大平 千鶴</p>
	 		</li>
	 	</ul>
	 </div>
	 <!-- /#kanri -->

  </div><!-- /main -->

<?php include_once("modal-top-y.php"); ?>
<?php include_once("footer-top.php"); ?>
