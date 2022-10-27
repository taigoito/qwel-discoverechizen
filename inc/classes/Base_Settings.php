<?php
namespace DE_Theme;

/**
 * テーマの全般設定
 */
trait Base_Settings {
	/**
	 * セクション構成
	 */
	protected static $sections = [
		'feature'        => 'feature',
		'about'          => 'about',
		'pickup'         => 'post',
		'discover'       => 'discover', 
		'model-plan'     => 'category',
		'blog-and-news'  => 'category',
		'location'       => 'location', 
		'contact'        => 'contact'
	];

	/**
	 * カスタマイザーの設定名
	 */
	protected static $db_name = 'de_theme_settings';

	/**
	 * デフォルト設定
	 */
	protected static $data = [
		// スタイル設定
		'style' => [
			// 配色
			'primary_light_color'  => '#d1f0fc',
			'primary_color'        => '#37bef0',
			'primary_dark_color'   => '#18aada',
			'secondary_color'      => '#9bcb6b',
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
			'h4_font_size'         => '1.17rem'
		],

		// Header
		'header'   => [
			'header_disable'       => true,
			'site_brand_height'    => 72,      // 単位: px
			'site_brand_filter'    => 'invert(1) grayscale(1) brightness(2)'
		],

		// 各セクション設定
		// Feature
		'feature'  => [
			'order'                => 0,
			'title'       				 => '特集',
			'cat1_title'           => '隊員おすすめ旅プラン',
			'cat1_href'            => './feature/model-plan/',
			'cat1_image'           => '',
			'cat2_title'           => '『人の駅』プロジェクト',
			'cat2_href'            => './feature/model-plan/',
			'cat2_image'           => '',
			'cat3_title'           => 'つるつるいっぱい浜ラジオ',
			'cat3_href'            => './podcast_start/',
			'cat3_image'           => '',
			'cat4_title'           => '越前海岸の暮らしを見つける旅',
			'cat4_href'            => './feature/school-excusion/',
			'cat4_image'           => '',
			'layout'               => 'md',
			'items_count'          => -1,
			'item_aspect_ratio'    => '0.625',
		],
		// About
		'about'  => [
			'order'                => 10,
			'title'       				 => '私たちについて'
		],
		// Pickup
		'pickup' => [
			'order'                => 20,
			'relational_id'        => 0,
			'layout'               => 'left',
			'more_text'            => 'もっと詳しく'
		],
		// Discover
		'discover'  => [
			'order'                => 30,
			'title'                => '越前海岸の暮らしを見つける旅',
			'island_1_image'           => DE_THEME_ASSETS . 'illust_content_island_1.svg',
			'island_1_content_1_image' => DE_THEME_ASSETS . 'illust_content_craft.svg',
			'island_1_content_1_title' => '物作り',
			'island_1_content_1_href'  => './feature/craft/',
			'island_1_content_2_image' => DE_THEME_ASSETS . 'illust_content_mountain_activity.svg',
			'island_1_content_2_title' => '山遊び',
			'island_1_content_2_href'  => './feature/mountain-activity/',
			'island_1_content_3_image' => DE_THEME_ASSETS . 'illust_content_sea_activity.svg',
			'island_1_content_3_title' => '海遊び',
			'island_1_content_3_href'  => './feature/sea-activity/',
			'island_2_image'           => DE_THEME_ASSETS . 'illust_content_island_2.svg',
			'island_2_content_1_image' => DE_THEME_ASSETS . 'illust_content_food.svg',
			'island_2_content_1_title' => 'グルメ',
			'island_2_content_1_href'  => './feature/food/',
			'island_2_content_2_image' => '',
			'island_2_content_2_title' => '',
			'island_2_content_2_href'  => '',
			'island_2_content_3_image' => DE_THEME_ASSETS . 'illust_content_farmers_stay.svg',
			'island_2_content_3_title' => '田舎体験',
			'island_2_content_3_href'  => './feature/farmers-stay/',
			'island_2_content_4_image' => DE_THEME_ASSETS . 'illust_content_stay.svg',
			'island_2_content_4_title' => '宿泊',
			'island_2_content_4_href'  => './feature/stay/',
			'island_3_image'           => DE_THEME_ASSETS . 'illust_content_island_3.svg',
			'island_3_content_1_image' => DE_THEME_ASSETS . 'illust_content_plans.svg',
			'island_3_content_1_title' => 'おすすめ旅',
			'island_3_content_1_href'  => './feature/model-plan/',
			'island_3_content_2_image' => '',
			'island_3_content_2_title' => '',
			'island_3_content_2_href'  => '',
			'island_3_content_3_image' => DE_THEME_ASSETS . 'illust_content_work.svg',
			'island_3_content_3_title' => '仕事',
			'island_3_content_3_href'  => './feature/work/',
			'island_3_content_4_image' => DE_THEME_ASSETS . 'illust_content_spa.svg',
			'island_3_content_4_title' => '温泉',
			'island_3_content_4_href'  => './feature/spa/',
			'island_4_image'           => DE_THEME_ASSETS . 'illust_content_island_4.svg',
			'island_4_content_1_image' => DE_THEME_ASSETS . 'illust_content_landscape.svg',
			'island_4_content_1_title' => '景観',
			'island_4_content_1_href'  => './feature/landscape/',
			'island_4_content_2_image' => DE_THEME_ASSETS . 'illust_content_hariisya.svg',
			'island_4_content_2_title' => 'はりいしゃ',
			'island_4_content_2_href'  => './feature/people-platform/',
			'island_4_content_3_image' => '',
			'island_4_content_3_title' => '',
			'island_4_content_3_href'  => '',
			'island_4_content_4_image' => DE_THEME_ASSETS . 'illust_content_life.svg',
			'island_4_content_4_title' => '生活文化',
			'island_4_content_4_href'  => './echizen-coast/'
		],
		// Model-Plan
		'model-plan' => [
			'order'                => 40,
			'relational_id'        => 12,
			'layout'               => 'md',
			'more_text'            => '> 隊員おすすめ旅プラン をもっと見る',
			'items_count'          => -1,
			'item_aspect_ratio'    => '1',
		],
		// Blog-And-News
		'blog-and-news' => [
			'order'                => 50,
			'relational_id'        => 1,
			'layout'               => 'md',
			'more_text'            => '> ブログ&ニュース をもっと見る',
			'items_count'          => 5,
			'item_aspect_ratio'    => '0.75',
			'item_more_text'       => '> もっと詳しく'
		],
		// Location
		'location' => [
			'order'                => 60,
			'title'                => 'アクセス情報',
			'map_url'              => 'https://www.google.com/maps/embed'
		],
		// Contact
		'contact'  => [
			'order'                => 70,
			'title'                => 'お問い合わせ',
			'contact_form'         => ''
		],

		// Footer
		'footer' => [
			'copyright'            => '2015-2022 福井市越前海岸盛り上げ隊'
		],

		// SNS設定
		'social' => [
			'facebook'             => 'discoverechizen',
			'instagram'            => 'discoverechizen',
			'youtube'              => ''
		]
	];
}
