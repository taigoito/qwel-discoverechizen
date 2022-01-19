<?php
namespace DE_Theme;

/**
 * CSS, JSファイルを読み込み
 */
trait Scripts {
  public static function enqueue_scripts() {
    // Google Fonts
    $family = 'Sawarabi+Gothic';
    
    if ($family !== '') {
      wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=' . $family . '&display=swap', [], null); 
    }

    // テーマ情報を取得
    $theme = wp_get_theme(get_template());
    $version = $theme->get('Version');
    // style.css
    wp_enqueue_style('style', DE_THEME_URI . '/style.css', [], $version);
    // init.js
    wp_enqueue_script('init', DE_THEME_URI . '/init.js', [], $version, true);

    // 子テーマを持つ場合
    if (is_child_theme()) {
      // 子テーマ情報を取得
      $child = wp_get_theme(get_stylesheet());
      $version = $child->get('Version');
      // style.css
      wp_enqueue_style('custom', DE_CHILD_URI . '/style.css', [], $version);
      // init.js
      if (file_exists(DE_CHILD_DIR . '/init.js')) {
        wp_enqueue_script('custom', DE_CHILD_URI . '/init.js', [], $version, true);
      }
    }
  }
}
