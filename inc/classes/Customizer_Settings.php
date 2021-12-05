<?php
namespace Qwel_Theme;

/**
 * カスタマイザーの設定項目を配列化
 */
trait Customizer_Settings {
	protected static function make_settings_array($sections) {
		// 固定ページ一覧を取得
		$pages           = get_pages();
		$option_pages    = [];
		$option_pages[0] = 'Select a page';
		foreach ($pages as $page) {
			$option_pages[$page->ID] = $page->post_title;
		}

		// 個別投稿ページ一覧を取得
		$posts           = get_posts([
			'posts_per_page' => -1
		]);
		$option_posts    = [];
		$option_posts[0] = 'Select a post';
		foreach ($posts as $post) {
			$option_posts[$post->ID] = $post->post_title;
		}

		// カテゴリー一覧を取得
		$categories      = get_categories();
		$option_cats     = [];
		$option_cats[0]  = 'Select a category';
		foreach ($categories as $cat) {
			$option_cats[$cat->term_id] = $cat->name;
		}

		// タグ一覧を取得
		$tags      = get_tags();
		$option_tags     = [];
		$option_tags[0]  = 'Select a tag';
		foreach ($tags as $tag) {
			$option_tags[$tag->term_id] = $tag->name;
		}

		// $fonts を上書きするHook
		$option_fonts = apply_filters('qwel_theme_fonts', self::$fonts);

		// ユーティリティクラス
		$option_background = [
			'none'           => 'Body background',
			'primary_light'  => 'Primary light',
			'primary'        => 'Primary',
			'primary_dark'   => 'Primary dark',
			'secondary'      => 'Secondary',
			'lightest'       => 'Lightest',
			'lighter'        => 'Lighter',
			'light'          => 'Light',
			'dark'           => 'Dark',
			'darker'         => 'Darker',
			'darkest'        => 'Darkest'
		];

		// 抜粋or本文
		$option_show_content = ['excerpt', 'content'];

		// 画像アスペクト比
		$option_aspect_ratio = [
			'0.625'  => '8:5',
			'0.66'   => '3:2',
			'0.75'   => '4:3',
			'1'      => '1:1',
			'1.25'   => '4:5'
		];

		$customizer_settings = [
			// スタイル設定
			'style' => [
				// 配色
				'primary_light_color'  => ['type'  => 'color'],
				'primary_color'        => ['type'  => 'color'],
				'primary_dark_color'   => ['type'  => 'color'],
				'secondary_color'      => ['type'  => 'color'],

				// コンテナと文字サイズ
				'container_base'       => [
					'type'     => 'select',
					'choices'  => [
						'16rem'    => 'Default',
						'18rem'    => 'Wider'
					]
				],
				'root_font_size'       => [
					'type'     => 'select',
					'choices'  => [
						'16px'     => 'Default',
						'18px'     => 'Larger'
					]
				],
				'h1_font_size'         => [
					'type'     => 'select',
					'choices'  => [
						'1.5rem'   => 'Smaller',
						'2rem'     => 'Default',
						'3rem'     => 'Larger'
					]
				],
				'h2_font_size'         => [
					'type'     => 'select',
					'choices'  => [
						'1.33rem'  => 'Smaller',
						'1.5rem'   => 'Default',
						'2rem'     => 'Larger'
					]
				],
				'h3_font_size'         => [
					'type'     => 'select',
					'choices'  => [
						'1.17rem'  => 'Smaller',
						'1.33rem'  => 'Default',
						'1.5rem'   => 'Larger'
					]
				],
				'h4_font_size'         => [
					'type'     => 'select',
					'choices'  => [
						'1rem'     => 'Smaller',
						'1.17rem'  => 'Default',
						'1.33rem'  => 'Larger'
					]
				],

				//  フォント設定
				'use_noto_sans_jp_300'   => ['type'  => 'checkbox'],
				'use_noto_sans_jp_400'   => ['type'  => 'checkbox'],
				'use_noto_sans_jp_500'   => ['type'  => 'checkbox'],
				'use_noto_sans_jp_700'   => ['type'  => 'checkbox'],
				'use_noto_serif_jp_300'  => ['type'  => 'checkbox'],
				'use_noto_serif_jp_400'  => ['type'  => 'checkbox'],
				'use_noto_serif_jp_500'  => ['type'  => 'checkbox'],
				'use_noto_serif_jp_700'  => ['type'  => 'checkbox'],
				'font_family_base'       => [
					'type'     => 'select',
					'choices'  => $option_fonts
				],
				'font_weight_base'     => [
					'type'     => 'select',
					'choices'  => [
						'300'  => 'Light',
						'400'  => 'Regular',
						'500'  => 'Medium',
						'700'  => 'Bold',
					]
				],
				'heading_font_family'  => [
					'type'     => 'select',
					'choices'  => $option_fonts
				],
				'heading_font_weight'  => [
					'type'     => 'select',
					'choices'  => [
						'300'  => 'Light',
						'400'  => 'Regular',
						'500'  => 'Medium',
						'700'  => 'Bold',
					]
				]
			],

			// Header設定
			'header' => [
				'header_disable'       => ['type'  => 'checkbox'],
				'site_brand_height'    => ['type'  => 'number'],
				'site_brand_filter'    => []
			],

			// ヒーローセクション設定
			'hero' => [
				'relational_id'        => ['type'  => 'select', 'choices'  => $option_pages],
				'cover_1'              => ['type'  => 'image'],
				'cover_2'              => ['type'  => 'image'],
				'cover_3'              => ['type'  => 'image'],
				'cover_4'              => ['type'  => 'image'],
				'cover_height'         => ['type'  => 'number'],
				'cover_filter'         => [],
				'preloader_background' => ['type'  => 'select', 'choices' => $option_background],
				'preloader_image'      => ['type'  => 'image'],
				'show_full_content'    => ['type'  => 'checkbox'],
				'more_text'            => ['sanitize'  => '']
			],

			// 固定ページセクション設定
			'page' => [
				'order'              => ['type'  => 'number'],
				'relational_id'      => ['type'  => 'select', 'choices'  => $option_pages],
				'layout'             => [
					'type'   => 'select', 
					'choices'  => [
						'default'  => 'Image top, text bottom',
						'left'     => 'Image left, text right',
						'right'    => 'Image right, text left'
					]
				],
				'background'         => ['type'  => 'select', 'choices' => $option_background],
				'show_full_content'  => ['type'  => 'checkbox'],
				'more_text'          => ['sanitize'  => '']
			],

			// 個別投稿ページセクション設定
			'post' => [
				'order'              => ['type'  => 'number'],
				'relational_id'      => ['type'  => 'select', 'choices'  => $option_posts],
				'layout'             => [
					'type'   => 'select', 
					'choices'  => [
						'default'  => 'Image top, text bottom',
						'left'     => 'Image left, text right',
						'right'    => 'Image right, text left'
					]
				],
				'background'         => ['type'  => 'select', 'choices' => $option_background],
				'show_full_content'  => ['type'  => 'checkbox'],
				'more_text'          => ['sanitize'  => '']
			],

			// カテゴリーセクション設定
			'category' => [
				'order'              => ['type'  => 'number'],
				'relational_id'      => ['type'  => 'select', 'choices'  => $option_cats],
				'layout'             => [
					'type'   => 'select',
					'choices'  => [
						'sm'   => 'Small',
						'md'   => 'Medium',
						'lg'   => 'Large',
					]
				],
				'background'         => ['type'  => 'select', 'choices' => $option_background],
				'more_text'          => ['sanitize'  => ''],
				'items_count'        => ['type'  => 'number'],
				'item_aspect_ratio'  => ['type'  => 'select', 'choices'  => $option_aspect_ratio],
				'item_show_date'     => ['type'  => 'checkbox'],
				'item_show_tags'     => ['type'  => 'checkbox'],
				'item_more_text'     => ['sanitize'  => '']
			],

			// タグセクション設定
			'tag' => [
				'order'              => ['type'  => 'number'],
				'relational_id'      => ['type'  => 'select', 'choices'  => $option_tags],
				'layout'             => [
					'type'   => 'select',
					'choices'  => [
						'sm'   => 'Small',
						'md'   => 'Medium',
						'lg'   => 'Large',
					]
				],
				'background'         => ['type'  => 'select', 'choices' => $option_background],
				'more_text'          => ['sanitize'  => ''],
				'items_count'        => ['type'  => 'number'],
				'item_aspect_ratio'  => ['type'  => 'select', 'choices'  => $option_aspect_ratio],
				'item_show_date'     => ['type'  => 'checkbox'],
				'item_show_tags'     => ['type'  => 'checkbox'],
				'item_more_text'     => ['sanitize'  => '']
			],

			// アクセスセクション設定
			'access' => [
				'order'              => ['type'  => 'number'],
				'relational_id'      => ['type'  => 'select', 'choices'  => $option_pages],
				'background'         => ['type'  => 'select', 'choices' => $option_background],
				'map_url'            => []
			],

			// お問い合わせセクション設定
			'contact'  => [
				'order'              => ['type'  => 'number'],
				'relational_id'      => ['type'  => 'select', 'choices'  => $option_pages],
				'background'         => ['type'  => 'select', 'choices' => $option_background],
				'contact_form'       => []
			],

			// Footer設定
			'footer' => [
				'copyright'          => []
			],

			// SNS設定
			'social' => [
				'twitter'            => [],
				'facebook'           => [],
				'instagram'          => []
			]
		];
    
    // $customizer_settings を上書きするHook
		$customizer_settings = apply_filters('qwel_theme_customizer_settings', $customizer_settings);

		$settings_array = [
			'style'  => $customizer_settings['style'],
			'header' => $customizer_settings['header'],
		];

		foreach ($sections as $section => $type) {
			$settings_array[$section] = $customizer_settings[$type];
		}

		$settings_array['footer']  = $customizer_settings['footer'];
		$settings_array['social']  = $customizer_settings['social'];

		return $settings_array;
	}
}
