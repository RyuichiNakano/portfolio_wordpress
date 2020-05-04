<?php add_theme_support( 'title-tag' );?>
<?php

/**
 * ウィジェットエリアを定義します。
 */

//関数宣言
function add_files() {
    // Swiper JS　
    wp_enqueue_script( 'swiper.min', get_template_directory_uri() . '/js/swiper.min.js', array( '' ), '5.3.8', true );
    wp_enqueue_script( 'custum_swiper', get_template_directory_uri() . '/js/custum_swiper.js', array( '' ), '5.3.8', true );

    
}

add_action('wp_enqueue_scripts', 'add_files');

//　wp_enqueue_scriptの解説
wp_enqueue_script(
  'swiper.min',// 読み込みの名前
  get_template_directory_uri() . '/js/swiper.min.js',//jsのフォルダパス
  array( '' ),// 読み込みの順番
  '5.3.8',// バージョン（任意）
  true // フッターで読み込むか（true/false）
);

add_action('wp_enqueue_scripts', 'add_files');

//　wp_enqueue_scriptの解説
wp_enqueue_script(
  'custum_swiper',// 読み込みの名前
  get_template_directory_uri() . '/js/custum_swiper.js',//jsのフォルダパス
  array( '' ),// 読み込みの順番
  '5.3.8',// バージョン（任意）
  true // フッターで読み込むか（true/false）
);