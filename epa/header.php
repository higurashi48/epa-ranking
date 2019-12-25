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

<script type="text/javascript" src="/wp-content/themes/xeory_base/js/jquery-3.4.1.min.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/base.css?<?php echo date('Ymd-Hi'); ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>?<?php echo date('Ymd-Hi'); ?>" type="text/css" />

<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />

<?php echo get_option('analytics_tracking_code');?>
<?php echo get_option('webmaster_tool');?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

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
  <p class="sub pc">「<span>ぐったり</span>」が続いて…、なんだか「<span>ドキドキ</span>」する…「<span>バクバク</span>」が止まらない…</p>
  <p class="sub sp">「<span>ぐったり</span>」が続いて…、なんだか「<span>ドキドキ</span>」する…<br>「<span>バクバク</span>」が止まらない…</p>
  <div class="fv pc"><img src="/wp-content/themes/xeory_base/img/fv.png"></div>
  <div class="fv sp"><img src="/wp-content/themes/xeory_base/img/fv_sp.png"></div>
</header>

<!-- start global nav  -->
<!---->
<?php if( has_nav_menu( 'global_nav' ) ){ ?>
<nav id="gnav" class="pc" role="navigation" itemscope="itemscope" itemtype="http://scheme.org/SiteNavigationElement">
  <div class="inner">
  <?php
    wp_nav_menu(
      array(
        'theme_location'  => 'global_nav',
        'menu_class'      => 'clearfix',
        'menu_id'         => 'gnav-ul',
        'container'       => 'div',
        'container_id'    => 'gnav-container',
        'container_class' => 'gnav-container'
      )
    );?>
    </div>
</nav>
<nav id="gnav" class="sp" role="navigation" itemscope="itemscope" itemtype="http://scheme.org/SiteNavigationElement">
  <div class="inner">
  <?php
    wp_nav_menu(
      array(
        'theme_location'  => 'global_nav',
        'menu_class'      => 'clearfix',
        'menu_id'         => 'gnav-ul',
        'container'       => 'div',
        'container_id'    => 'gnav-container',
        'container_class' => 'gnav-container',
				'menu'  => 'SP固定メニュー'
      )
    );?>
    </div>
</nav>
<?php } ?>

<?php } // if is_singular('lp') ?>
