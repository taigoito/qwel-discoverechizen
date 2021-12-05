<?php
namespace Qwel_Theme;

/**
 * テーマの全般設定
 */
trait Base_Settings {
	/**
	 * セクション構成
	 */
	protected static $sections = [
		'hero'     => 'hero',
		'feature'  => 'category',
		'about'    => 'page',
		'service'  => 'category',
		'team'     => 'page',
		'news'     => 'category',
		'access'   => 'access',
		'contact'  => 'contact'
	];

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

			//  フォント設定
			'use_noto_sans_jp_300'   => false,
			'use_noto_sans_jp_400'   => false,
			'use_noto_sans_jp_500'   => false,
			'use_noto_sans_jp_700'   => false,
			'use_noto_serif_jp_300'  => false,
			'use_noto_serif_jp_400'  => false,
			'use_noto_serif_jp_500'  => false,
			'use_noto_serif_jp_700'  => false,
			'font_family_base'     => 'sans-serif',
			'font_weight_base'     => '400',
			'heading_font_family'  => 'sans-serif',
			'heading_font_weight'  => '400',
		],

		// Header
		'header'   => [
			'header_disable'       => false,
			'site_brand_height'    => 48,      // 単位: px
			'site_brand_filter'    => 'invert(1) grayscale(1) brightness(2)'
		],

		// 各セクション設定
		// Hero
		'hero'     => [
			'order'                => 0,       // セクション並び順 ('Hero'は必ず先頭)
			'relational_id'        => 0,       // 固定ページとの紐付け (0を指定すると非表示)
			'cover_1'              => QWEL_DEFAULT_IMAGE,
			'cover_2'              => false,   // 空の状態を取り得る
			'cover_3'              => false,
			'cover_4'              => false,
			'cover_height'         => 75,      // 単位: vh
			'cover_filter'         => 'brightness(0.85) blur(1px)',
			'preloader_background' => 'dark',  // preloader背景
			'preloader_image'      => false,   // preloader画像
			'show_content'         => 0,       // 0: excerpt, 1:content
			'more_text'            => 'more >' // more文字列
		],
		// Feature
		'feature'  => [
			'order'                => 10,
			'relational_id'        => 0,           // カテゴリーとの紐付け (0を指定すると非表示)
			'layout'               => 'md',
			'background'           => 'none',
			'more_text'            => 'more >',
			'items_count'          => 4,           // 表示アイテム数
			'item_aspect_ratio'    => '0.75',      // 画像アスペクト比
			'item_show_date'       => false,       // 日付の表示有無
			'item_show_tags'       => false,       // タグの表示有無
			'item_more_text'       => 'more >'     // more文字列
		],
		// About
		'about'    => [
			'order'                => 20,
			'relational_id'        => 0,           // 固定ページとの紐付け (0を指定すると非表示)
			'layout'               => 'default',   // レイアウト
			'background'           => 'none',
			'show_content'         => 0,
			'more_text'            => 'more >'
		],
		// Service
		'service'  => [
			'order'                => 30,
			'relational_id'        => 0,
			'layout'               => 'md',
			'background'           => 'none',
			'more_text'            => 'more >',
			'items_count'          => 4,
			'item_aspect_ratio'    => '0.75',
			'item_show_date'       => false,
			'item_show_tags'       => false,
			'item_more_text'       => 'more >'
		],
		// Team
		'team'     => [
			'order'                => 40,
			'relational_id'        => 0,
			'layout'               => 'default',
			'background'           => 'none',
			'show_content'         => 0,
			'more_text'            => 'more >'
		],
		// News
		'news'     => [
			'order'                => 50,
			'relational_id'        => 0,
			'layout'               => 'md',
			'background'           => 'none',
			'more_text'            => 'more >',
			'items_count'          => 4,
			'item_aspect_ratio'    => '0.75',
			'item_show_date'       => true,
			'item_show_tags'       => true,
			'item_more_text'       => 'more >'
		],
		// Access
		'access'   => [
			'order'                => 60,
			'relational_id'        => 0,           // 固定ページとの紐付け (0を指定すると非表示)
			'background'           => 'none',
			'map_url'              => 'https://www.google.com/maps/embed'
		],
		// Contact
		'contact'  => [
			'order'                => 70,
			'relational_id'        => 0,           // 固定ページとの紐付け (0を指定すると非表示)
			'background'           => 'none',
			'contact_form'         => ''           // Contact form 7 のショートコード
		],

		// Footer
		'footer'   => [
			'copyright'            => '2021 Qwel'
		],

		// SNS設定 (各usernameを設定するとナビに表示される)
		'social'   => [
			'twitter'              => '',
			'facebook'             => '',
			'instagram'            => ''
		]
	];
}
