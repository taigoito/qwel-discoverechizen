<?php
/**
 * Discover Echizen functions
 * Author: Taigo Ito (https://qwel.design/)
 * Location: Fukui, Japan
 * @package Discover Echizen
 */

/*
 * テーマのパス, URI
 */
define( 'DiscoverEchizen_THEME_DIR', get_template_directory() );
define( 'DiscoverEchizen_THEME_URI', get_template_directory_uri() );


/*
 * classのオートロード
 */
spl_autoload_register(
	function( $classname ) {
		if ( strpos( $classname, 'DiscoverEchizen_Theme' ) === false ) return;
		$classname = str_replace( '\\', '/', $classname );
		$classname = str_replace( 'DiscoverEchizen_Theme/', '', $classname );
		$file      = DiscoverEchizen_THEME_DIR . '/classes/' . $classname . '.php';
		if ( file_exists( $file ) ) {
			require $file;
		}
	}
);

/*
 * Hookする関数群を継承して登録
 */
class DiscoverEchizen {
	use	\DiscoverEchizen_Theme\Supports,
		\DiscoverEchizen_Theme\Scripts;
		
	public function __construct() {
		// テーマサポート機能
		add_action( 'after_setup_theme', [ $this, 'setup_theme' ] );

		// CSS, JSファイルを読み込み
		add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_scripts' ] );
	}
}

/**
 * Discover Echizen start!
 */
new DiscoverEchizen();
