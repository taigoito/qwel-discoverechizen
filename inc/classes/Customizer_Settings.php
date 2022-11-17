<?php
namespace DE_Theme;

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
				]
			],

			// ヒーローセクション設定
			'hero' => [],

			// 投稿ページセクション設定
			'post' => [
				'order'              => ['type'  => 'number'],
				'relational_id'      => ['type'  => 'select', 'choices'  => $option_posts],
				'title'              => ['sanitize'  => ''],
				'slug'               => ['sanitize'  => ''],
				'layout'             => [
					'type'     => 'select', 
					'choices'  => [
						'default'  => 'Image top, text bottom',
						'left'     => 'Image left, text right',
						'right'    => 'Image right, text left'
					]
				],
				'more_text'          => ['sanitize'  => '']
			],

			// カテゴリーセクション設定
			'category' => [
				'order'              => ['type'  => 'number'],
				'relational_id'      => ['type'  => 'select', 'choices'  => $option_cats],
				'layout'             => [
					'type'     => 'select',
					'choices'  => [
						'sm'   => 'Small',
						'md'   => 'Medium',
						'lg'   => 'Large',
					]
				],
				'more_text'          => ['sanitize'  => ''],
				'items_count'        => ['type'  => 'number'],
				'item_aspect_ratio'  => ['type'  => 'select', 'choices'  => $option_aspect_ratio],
				'item_more_text'     => ['sanitize'  => '']
			],

			// タグセクション設定
			'tag' => [
				'order'              => ['type'  => 'number'],
				'relational_id'      => ['type'  => 'select', 'choices'  => $option_tags],
				'layout'             => [
					'type'     => 'select',
					'choices'  => [
						'sm'   => 'Small',
						'md'   => 'Medium',
						'lg'   => 'Large',
					]
				],
				'more_text'          => ['sanitize'  => ''],
				'items_count'        => ['type'  => 'number'],
				'item_aspect_ratio'  => ['type'  => 'select', 'choices'  => $option_aspect_ratio],
				'item_more_text'     => ['sanitize'  => '']
			],

			// 特集セクション設定
			'feature'  => [
				'order'              => ['type'  => 'number'],
				'title'              => ['sanitize'  => ''],
				'cat1_title'         => ['sanitize'  => ''],
				'cat1_href'          => ['sanitize'  => ''],
				'cat1_image'         => ['type'  => 'image'],
				'cat2_title'         => ['sanitize'  => ''],
				'cat2_href'          => ['sanitize'  => ''],
				'cat2_image'         => ['type'  => 'image'],
				'cat3_title'         => ['sanitize'  => ''],
				'cat3_href'          => ['sanitize'  => ''],
				'cat3_image'         => ['type'  => 'image'],
				'cat4_title'         => ['sanitize'  => ''],
				'cat4_href'          => ['sanitize'  => ''],
				'cat4_image'         => ['type'  => 'image'],
				'layout'             => [
					'type'   => 'select',
					'choices'  => [
						'sm'   => 'Small',
						'md'   => 'Medium',
						'lg'   => 'Large',
					]
				],
				'items_count'        => ['type'  => 'number'],
				'item_aspect_ratio'  => ['type'  => 'select', 'choices'  => $option_aspect_ratio],
			],

			// アバウトセクション設定
			'about'  => [
				'order'              => ['type'  => 'number'],
				'title'              => ['sanitize'  => '']
			],

			// ディスカバーセクション設定
			'discover' => [
				'order'                    => ['type'  => 'number'],
				'title'                    => ['sanitize'  => ''],
				'island_1_image'           => ['type'  => 'image'],
				'island_1_content_1_image' => ['type'  => 'image'],
				'island_1_content_1_title' => [],
				'island_1_content_1_href'  => [],
				'island_1_content_2_image' => ['type'  => 'image'],
				'island_1_content_2_title' => [],
				'island_1_content_2_href'  => [],
				'island_1_content_3_image' => ['type'  => 'image'],
				'island_1_content_3_title' => [],
				'island_1_content_3_href'  => [],
				'island_1_content_4_image' => ['type'  => 'image'],
				'island_1_content_4_title' => [],
				'island_1_content_4_href'  => [],
				'island_2_image'           => ['type'  => 'image'],
				'island_2_content_1_image' => ['type'  => 'image'],
				'island_2_content_1_title' => [],
				'island_2_content_1_href'  => [],
				'island_2_content_2_image' => ['type'  => 'image'],
				'island_2_content_2_title' => [],
				'island_2_content_2_href'  => [],
				'island_2_content_3_image' => ['type'  => 'image'],
				'island_2_content_3_title' => [],
				'island_2_content_3_href'  => [],
				'island_2_content_4_image' => ['type'  => 'image'],
				'island_2_content_4_title' => [],
				'island_2_content_4_href'  => [],
				'island_3_image'           => ['type'  => 'image'],
				'island_3_content_1_image' => ['type'  => 'image'],
				'island_3_content_1_title' => [],
				'island_3_content_1_href'  => [],
				'island_3_content_2_image' => ['type'  => 'image'],
				'island_3_content_2_title' => [],
				'island_3_content_2_href'  => [],
				'island_3_content_3_image' => ['type'  => 'image'],
				'island_3_content_3_title' => [],
				'island_3_content_3_href'  => [],
				'island_3_content_4_image' => ['type'  => 'image'],
				'island_3_content_4_title' => [],
				'island_3_content_4_href'  => [],
				'island_4_image'           => ['type'  => 'image'],
				'island_4_content_1_image' => ['type'  => 'image'],
				'island_4_content_1_title' => [],
				'island_4_content_1_href'  => [],
				'island_4_content_2_image' => ['type'  => 'image'],
				'island_4_content_2_title' => [],
				'island_4_content_2_href'  => [],
				'island_4_content_3_image' => ['type'  => 'image'],
				'island_4_content_3_title' => [],
				'island_4_content_3_href'  => [],
				'island_4_content_4_image' => ['type'  => 'image'],
				'island_4_content_4_title' => [],
				'island_4_content_4_href'  => [],
				'island_5_image'           => ['type'  => 'image'],
				'island_5_content_1_image' => ['type'  => 'image'],
				'island_5_content_1_title' => [],
				'island_5_content_1_href'  => [],
				'island_5_content_2_image' => ['type'  => 'image'],
				'island_5_content_2_title' => [],
				'island_5_content_2_href'  => [],
				'island_5_content_3_image' => ['type'  => 'image'],
				'island_5_content_3_title' => [],
				'island_5_content_3_href'  => [],
				'island_5_content_4_image' => ['type'  => 'image'],
				'island_5_content_4_title' => [],
				'island_5_content_4_href'  => []
			],

			// アクセスセクション設定
			'location' => [
				'order'              => ['type'  => 'number'],
				'title'              => ['sanitize'  => ''],
				'map_url'            => []
			],

			// お問い合わせセクション設定
			'contact'  => [
				'order'              => ['type'  => 'number'],
				'title'              => ['sanitize'  => ''],
				'contact_form'       => []
			],

			// Footer設定
			'footer' => [
				'copyright'          => []
			],

			// SNS設定
			'social' => [
				'facebook'           => [],
				'instagram'          => [],
				'youtube'            => []
			]
		];
    
    // $customizer_settings を上書きするHook
		$customizer_settings = apply_filters('de_theme_customizer_settings', $customizer_settings);

		$settings_array = [
			'style'  => $customizer_settings['style']
		];

		foreach ($sections as $section => $type) {
			$settings_array[$section] = $customizer_settings[$type];
		}

		$settings_array['footer']  = $customizer_settings['footer'];
		$settings_array['social']  = $customizer_settings['social'];

		return $settings_array;
	}
}
