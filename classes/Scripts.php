<?php
namespace DiscoverEchizen_Theme;

trait Scripts {
  // CSS, JSファイルを読み込み
  public static function enqueue_scripts() {
    // バージョン情報を取得
		$version = wp_get_theme()->get( 'Version' );
		$version = is_string( $theme_version ) ? $theme_version : false;

		// style.css
		wp_enqueue_style(
			'style',
			get_template_directory_uri() . '/style.css',
			[],
			$version
		);

		// init.js
		wp_enqueue_script(
			'init',
			get_template_directory_uri() . '/init.js',
			[],
			$version,
			true
		);

  }

}
