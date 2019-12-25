<!DOCTYPE HTML>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
	<meta charset="UTF-8">
	<title><?php bzb_title(); ?></title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

<!-- <?php wp_head(); ?> -->

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/base-2.css?<?php echo date('Ymd-Hi'); ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-2.css?<?php echo date('Ymd-Hi'); ?>" type="text/css" />

<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />

<?php echo get_option('analytics_tracking_code');?>
<?php echo get_option('webmaster_tool');?>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TZJR3SN');</script>
<!-- End Google Tag Manager -->

</head>

<body id="#top" <?php body_class();?> itemschope="itemscope" itemtype="http://schema.org/WebPage">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TZJR3SN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php bzb_show_facebook_block(); ?>

<?php if( is_singular('lp') ) { ?>

<div class="lp-wrap">

<header id="lp-header">
  <h1 class="lp-title"><?php wp_title(''); ?></h1>
</header>

<?php }else{ ?>

<header id="header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
  <!-- <p class="sub pc">「<span>ぐったり</span>」が続いて…、なんだか「<span>ドキドキ</span>」する…「<span>バクバク</span>」が止まらない…</p>
  <p class="sub sp">「<span>ぐったり</span>」が続いて…、なんだか「<span>ドキドキ</span>」する…<br>「<span>バクバク</span>」が止まらない…</p> -->
  <div class="fv pc sk"><img src="/wp-content/themes/xeory_base/img/fv_sk.png"></div>
  <div class="fv sp sk"><img src="/wp-content/themes/xeory_base/img/fv_sk_sp.png"></div>
</header>

<!-- start global nav  -->
<!---->
<nav id="gnav" role="navigation" itemscope="itemscope" itemtype="http://scheme.org/SiteNavigationElement">
  <div class="inner">
  <div id="gnav-container" class="gnav-container"><ul id="gnav-ul" class="clearfix"><li id="menu-item-84" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-84"><a href="https://epa-ranking.com/sk#table">ランキングを見る</a></li>
<li id="menu-item-83" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-83"><a href="https://epa-ranking.com/product-list-sk/">商品一覧</a></li>
<li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-9"><a href="https://epa-ranking.com/sk/#column">EPAコラム</a></li>
<li id="menu-item-304" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-304"><a href="https://epa-ranking.com/sk/#kanri">管理栄養士について</a></li>
</ul></div>    </div>
</nav>
<?php } // if is_singular('lp') ?>
