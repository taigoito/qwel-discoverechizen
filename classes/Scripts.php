<?php
namespace DiscoverEchizen_Theme;

trait Scripts {
  // CSS, JSファイルを読み込み
  public static function enqueue_scripts() {
    // バージョン情報を取得
		$version = wp_get_theme()->get( 'Version' );
		$version = is_string( $theme_version ) ? $theme_version : false;

		// Google Fonts
    $family = 'Sawarabi+Gothic';
    if ($family !== '') {
      wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=' . $family . '&display=swap', [], null); 
    }

    // Typesquare
    $url = '//typesquare.com/3/tsst/script/ja/typesquare.js?61b823f8fd9c446dacda0a37ac1e02e5&fadein=10';
    if ($url !== '') {
      wp_enqueue_script('typesquare-fonts', $url, [], null, false);
    }

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
