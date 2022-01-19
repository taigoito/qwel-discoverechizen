<?php
/**
 * Qwel functions
 * Author: Taigo Ito (https://qwel.design/)
 * Location: Fukui, Japan
 * @package Qwel
 */

// テーマのパス, URI
define('QWEL_THEME_DIR', get_template_directory());
define('QWEL_THEME_URI', get_template_directory_uri());

/**
 * 定数定義
 */
require_once QWEL_THEME_DIR . '/inc/consts.php';

/**
 * ヘルパー関数群
 */
require_once QWEL_THEME_DIR . '/inc/helpers.php';

/**
 * パーツ生成関数群
 */
require_once QWEL_THEME_DIR . '/inc/parts.php';

/**
 * classのオートロード
 */
spl_autoload_register(
	function($classname) {
		if (strpos($classname, 'Qwel_Theme') === false) return;
		$classname = str_replace('\\', '/', $classname);
		$classname = str_replace('Qwel_Theme/', '', $classname);
		$file      = QWEL_THEME_DIR . '/inc/classes/' . $classname . '.php';
		if (file_exists($file)) {
			require $file;
		}
	}
);

/**
 * Hookする関数群を継承して登録
 */
class Qwel {
	use	\Qwel_Theme\Supports,
		\Qwel_Theme\Scripts,
		\Qwel_Theme\Customizer,
		\Qwel_Theme\Style,
		\Qwel_Theme\Widgets;
		
	public function __construct() {
		// テーマサポート機能
		add_action('after_setup_theme', [$this, 'setup_theme']);

		// CSS, JSファイルをファイルを読み込み
		add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']);

    // カスタマイザーの設定項目を登録
		add_action('customize_register', [$this, 'setup_customizer']);

		// 動的スタイルを出力
		add_action('wp_head', [$this, 'apply_theme_settings']);
		add_action('admin_print_styles', [$this, 'apply_theme_settings']);

		// ウィジェットを登録
		add_action('widgets_init', [$this, 'setup_widgets']);
	}
}

/**
 * Qwel start!
 */
new Qwel();
