<?php

/* jQuery の読み込み */
function add_my_scripts() {
    if(is_admin()) return; //管理画面ではスクリプトは読み込まない
    wp_deregister_script( 'jquery'); //デフォルトの jQuery は読み込まない
    //CDN から読み込む
    wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', array(), '1.11.1', false);
    wp_enqueue_script( 'jquery-mig', '//cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.2.1/jquery-migrate.min.js', array(), '1.2.1', false);
    }
    add_action('wp_enqueue_scripts', 'add_my_scripts');

// ウィジェットエリア
register_sidebar(array(
'name' => 'サイドバー',
'before_widget' => '<div class="widget">',
'after_widget' => '</div>',
'before_title' => '<p class="sidebar-title">',
'after_title' => '</p>',
));
// カスタムメニュー
register_nav_menus(array(
'mainmenu' => 'メインメニュー',
));
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');
// style.css のバージョンを自動で設定
function my_update_styles( $styles ) {
    $mtime = filemtime( get_stylesheet_directory() . '/style.css' );
    $styles->default_version = $mtime;
}
add_action( 'wp_default_styles', 'my_update_styles' );