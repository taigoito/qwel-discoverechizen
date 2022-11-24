<?php
namespace DiscoverEchizen_Theme;

trait Supports {
  // テーマサポート機能
  public function setup_theme() {
    // ブロックスタイルをサポート
		add_theme_support( 'wp-block-styles' );

		// エディターにstyle.cssをセット
		add_editor_style( 'style.css' );

  }

}
