<?php add_theme_support( 'title-tag' );?>
<?php

/**
 * ウィジェットエリアを定義します。
 */
register_sidebar(array(

  'name'          => 'デモサイトのサイドバー',
  'id'            => 'primary-widget-area',
  'description'   => 'サイドバーに表示されるウィジェットエリアです。',
  'before_widget' => '<section id="%1$s" class="widget %2$s">',
  'after_widget'  => '</section>',
  'before_title'  => '<h3 class="widget-title">',
  'after_title'   => '</h3>',

));
