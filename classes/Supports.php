<?php
namespace DiscoverEchizen_Theme;

trait Supports {
  // テーマサポート機能
  public function setup_theme() {
    // ブロックスタイルをサポート
		add_theme_support( 'wp-block-styles' );

		// エディターにstyle.cssをセット
		add_editor_style( 'style.css' );

    // メディアサイズ指定
    // large-sizeが個別投稿の幅一杯
    update_option('thumbnail_size_w', 192);
    update_option('thumbnail_size_h', 192);
    update_option('medium_size_w', 384);
    update_option('medium_size_h', 384);
    update_option('medium_large_size_w', 0);
    update_option('medium_large_size_h', 0);
    update_option('large_size_w', 768);
    update_option('large_size_h', 768);
    
  }

}
