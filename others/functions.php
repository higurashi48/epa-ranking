<?php

// ファンクション
require_once('lib/admin/init.php');
require_once('lib/admin/manual.php');

require_once('lib/functions/asset.php');
require_once('lib/functions/head.php');
require_once('lib/functions/custom-post.php');
require_once('lib/functions/bzb-functions.php');
require_once('lib/functions/setting.php');
require_once('lib/functions/custom-fields.php');
require_once('lib/functions/category-custom-fields.php');
require_once('lib/functions/widget.php');
//require_once('lib/functions/lang.php');
require_once('lib/functions/postviews.php');
// require_once('lib/functions/json-ld.php');
require_once('lib/functions/social_btn.php');
require_once('lib/functions/show_avatar.php');
require_once('lib/functions/shortcode.php');
require_once('lib/functions/rss.php');


//絶対パス→相対パス
function make_href_root_relative($input) {
    return preg_replace('!http(s)?://' . $_SERVER['SERVER_NAME'] . '/!', '/', $input);
}

//パーマリンク絶対パス→相対パス
function root_relative_permalinks($input) {
    return make_href_root_relative($input);
}
add_filter( 'the_permalink', 'root_relative_permalinks' );

 
//投稿・固定ページ内にPHPファイルをインクルード(挿入/実行)させる
function Include_my_php($params = array()) {
    extract(shortcode_atts(array(
        'file' => 'default'
    ), $params));
    ob_start();
    include(get_theme_root() . '/' . get_template() . "/$file.php");
    return ob_get_clean();
}
 
add_shortcode('myphp', 'Include_my_php');
//ここまで
 

 //固定ページで「paged」を取得
function my_parse_query( $query ) {
    if(!isset($query->query_vars['paged']) && isset($query->query_vars['page']) ){
        $query->query_vars['paged'] = $query->query_vars['page'];
    }
}
add_action( 'parse_query', 'my_parse_query' );


?>




