<?php
namespace Qwel_Theme;

/**
 * テーマの全般設定
 */
trait Base_Settings {
	/**
	 * カスタマイザーの設定名
	 */
	protected static $db_name = 'qwel_theme_settings';

	/**
	 * デフォルト設定
	 */
	protected static $data = [
		// スタイル設定
		'style' => [
			// 配色
			'primary_light_color'  => '#99cce6',
			'primary_color'        => '#3399cc',
			'primary_dark_color'   => '#297aa3',
			'secondary_color'      => '#ccb333',
			'lightest_color'       => '#ffffff',
			'lighter_color'        => '#d9d9d9',
			'light_color'          => '#b3b3b3',
			'dark_color'           => '#808080',
			'darker_color'         => '#4d4d4d',
			'darkest_color'        => '#262626',

			// コンテナと文字サイズ
			'container_base'       => '18rem',
			'root_font_size'       => '16px',
			'h1_font_size'         => '2rem',
			'h2_font_size'         => '1.5rem',
			'h3_font_size'         => '1.33rem',
			'h4_font_size'         => '1.17rem',

			// 画像アスペクト比
			'list_aspect_ratio'    => 0.75,
			'card_aspect_ratio'    => 0.75
		],

		'footer' => [
			'copyright'            => '2021 Qwel'
		]
	];
}
