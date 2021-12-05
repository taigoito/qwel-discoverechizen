<?php
namespace Qwel_Theme;

/**
 * ウィジェットを登録
 */
trait Widgets {
  public static function setup_widgets() {
    // グローバルメニュー
    //register_nav_menu('primary', 'Primary Menu');

    // サイドバー
    register_sidebar([
      'name'           => 'Sidebar',
      'id'             => 'sidebar',
      'before_widget'  => '<aside class="widget %2$s">',
      'after_widget'   => '</aside>',
      'before_title'   => '<h4 class="widget__heading">',
      'after_title'    => '</h4>',
    ]);
  
    // フッター
    for ($i = 1; $i <= 4; $i++) {
      register_sidebar([
        'name'           => 'Footer ' . $i,
        'id'             => 'footer__' . $i,
        'before_widget'  => '<aside class="widget">',
        'after_widget'   => '</aside>',
        'before_title'   => '<h4 class="widget__heading">',
        'after_title'    => '</h4>',
      ]);
    }
  }
}
