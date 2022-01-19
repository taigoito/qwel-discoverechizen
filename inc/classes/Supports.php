<?php
namespace Qwel_Theme;

/**
 * テーマサポート機能
 */
trait Supports {
  public function setup_theme() {
    // アイキャッチ画像
    add_theme_support('post-thumbnails');

    // メディアサイズ指定
    update_option('thumbnail_size_w', 180);
    update_option('thumbnail_size_h', 180);
    update_option('medium_size_w', 360);
    update_option('medium_size_h', 360);
    update_option('medium_large_size_w', 0);
    update_option('medium_large_size_h', 0);
    update_option('large_size_w', 720);
    update_option('large_size_h', 720);

    // feed
    add_theme_support('automatic-feed-links');

    // HTML5
    add_theme_support('html5', [
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption'
    ]);

    // カスタムロゴ
    add_theme_support('custom-logo', [
      'width'        => 384,
      'height'       => 96,
      'flex-width'   => true,
      'flex-height'  => true,
    ]);

    // タイトルタグ
    add_theme_support('title-tag');

    // 固定ページの抜粋
    add_post_type_support('page', 'excerpt');

    //カテゴリー説明でHTMLタグを使う
    remove_filter('pre_term_description', 'wp_filter_kses');

    // Gutenberg用
    add_theme_support('responsive-embeds');
    add_theme_support('disable-custom-font-sizes'); // フォントサイズのピクセル指定を不可に

    // カラーパレット
    add_theme_support('editor-color-palette', [
      [
        'name'   => 'Primary light',
        'slug'   => 'primary-light' ,
        'color'  => self::get_data('style', 'primary_light_color')
      ],
      [
        'name'   => 'Primary',
        'slug'   => 'primary' ,
        'color'  => self::get_data('style', 'primary_color')
      ],
      [
        'name'   => 'Primary dark',
        'slug'   => 'primary-dark' ,
        'color'  => self::get_data('style', 'primary_dark_color')
      ],
      [
        'name'   => 'Secondary',
        'slug'   => 'secondary',
        'color'  => self::get_data('style', 'secondary_color') 
      ],
      [
        'name'   => 'Lightest',
        'slug'   => 'lightest' ,
        'color'  => '#ffffff'
      ],
      [
        'name'   => 'Lighter',
        'slug'   => 'lighter' ,
        'color'  => '#d9d9d9'
      ],
      [
        'name'   => 'Light',
        'slug'   => 'Light' ,
        'color'  => '#b3b3b3'
      ],
      [
        'name'   => 'Dark',
        'slug'   => 'dark' ,
        'color'  => '#808080'
      ],
      [
        'name'   => 'Darker',
        'slug'   => 'darker' ,
        'color'  => '#4d4d4d'
      ],
      [
        'name'   => 'Darkest',
        'slug'   => 'darkest' ,
        'color'  => '#262626'
      ]
    ]);

    // フォントサイズ
    add_theme_support('editor-font-sizes', [
      [
        'name' => 'Extra small',
        'slug' => 'xs',
        'size' => 12
      ],
      [
        'name' => 'Small',
        'slug' => 'sm',
        'size' => 14
      ],
      [
        'name' => 'Normal',
        'slug' => 'nr',
        'size' => 16
      ],
      [
        'name' => 'Medium',
        'slug' => 'md',
        'size' => 18
      ],
      [
        'name' => 'Large',
        'slug' => 'lg',
        'size' => 20
      ],
      [
        'name' => 'Extra Large',
        'slug' => 'xl',
        'size' => 24
      ],
      [
        'name' => 'Huge',
        'slug' => 'xxl',
        'size' => 32
      ]
    ]);

    // エディタースタイルの適用
    add_theme_support('editor-styles');
    add_editor_style('editor.css');
  }
}
