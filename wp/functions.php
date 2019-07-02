<?php
/* functions.php *
	テーマにさまざまな付加機能を設定するためのファイル。
 */

/* -------------------------------------------------------------
//読み込み
// ------------------------------------------------------------*/
function import_header_scripts() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/common.css');
}
add_action( 'wp_enqueue_scripts', 'import_header_scripts' );

/* -------------------------------------------------------------
//JSファイル追加の関数
// ------------------------------------------------------------*/
function my_load_widget_scripts() {
  wp_enqueue_script( 'jquery' );
}
// wp_footerに処理を登録
add_action('wp_footer', 'my_load_widget_scripts');

/* -------------------------------------------------------------
// タイトルタグ
// ------------------------------------------------------------*/
function nendebcom_theme_slug_setup() {
   add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'nendebcom_theme_slug_setup' );


/* -------------------------------------------------------------
//画像の設定
// ------------------------------------------------------------*/
//アイキャッチを有効にする
add_theme_support('post-thumbnails');
add_image_size('size1',830, 350, true);
