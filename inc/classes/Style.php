<?php
namespace Qwel_Theme;

/**
 * 動的スタイルを出力
 */
trait Style {
  /**
   * 動的スタイルの配列
   */
  protected static $style = [];

  /**
   * フォント
   */
  protected static $fonts = [
    'sans-serif' => 'sans-serif',
		'serif'      => 'serif',
    'arial'      => 'Arial, Helvetica, sans-serif',
    'impact'     => 'Impact, Arial, Helvetica, sans-serif',
    'verdana'    => 'Verdana, sans-serif',
    'times'      => '"Times New Roman", Times, serif',
    'georgia'    => 'Georgia, "Times New Roman", Times, serif',
    'courier'    => '"Courier New", Courier, monospace',
    'cursive'    => 'cursive',
		'fantasy'    => 'fantasy'
  ];

  /**
   * 動的スタイルを配列化
   */
	public function make_style_array() {
    // フォント関係のテーマ設定を読み込み
    $noto_sans_jp_300    = self::get_data('style', 'use_noto_sans_jp_300');
    $noto_sans_jp_400    = self::get_data('style', 'use_noto_sans_jp_400');
    $noto_sans_jp_500    = self::get_data('style', 'use_noto_sans_jp_500');
    $noto_sans_jp_700    = self::get_data('style', 'use_noto_sans_jp_700');
    $noto_serif_jp_300   = self::get_data('style', 'use_noto_serif_jp_300');
    $noto_serif_jp_400   = self::get_data('style', 'use_noto_serif_jp_400');
    $noto_serif_jp_500   = self::get_data('style', 'use_noto_serif_jp_500');
    $noto_serif_jp_700   = self::get_data('style', 'use_noto_serif_jp_700');
    $font_family_base    = self::get_data('style', 'font_family_base');
    $font_weight_base    = self::get_data('style', 'font_weight_base');
    $heading_font_family = self::get_data('style', 'heading_font_family');
    $heading_font_weight = self::get_data('style', 'heading_font_weight');

    // $fonts を上書きするHook
		$fonts = apply_filters('qwel_theme_fonts', self::$fonts);

    // テーマ設定に保存されたキーを、実際のフォントファミリーに置き換え
    $font_family_base    = $fonts[$font_family_base];
    $heading_font_family = $fonts[$heading_font_family];

    // サンセリフ体、セリフ体それぞれのベースファミリーを設定
    $sans_serif_base = '"游ゴシック", "Yu Gothic", sans-serif';
    $serif_base      = '"游明朝", "Yu Mincho", serif';
    if ($noto_sans_jp_300 || $noto_sans_jp_400 || $noto_sans_jp_500 || $noto_sans_jp_700) {
      $sans_serif_base = '"Noto Sans JP", sans-serif';
    }
    if ($noto_serif_jp_300 || $noto_serif_jp_400 || $noto_serif_jp_500 || $noto_serif_jp_700) {
      $serif_base      = '"Noto Serif JP", serif';
    }

    // $font_family_baseにベースファミリーを追加
    if (strpos($font_family_base, 'sans-serif') !== false && strpos($font_family_base, 'sans-serif') >= 0 ||
      strpos($font_family_base, 'monospace') !== false && strpos($font_family_base, 'monospace') >= 0) {
      // $font_family_baseがサンセリフ体の場合
      $font_family_base = str_replace('sans-serif', $sans_serif_base, $font_family_base);
      $font_family_base = str_replace('monospace', $sans_serif_base, $font_family_base); 
    } else {
      // $font_family_baseがセリフ体の場合
      $font_family_base = str_replace('serif', $serif_base, $font_family_base);
    }

    // $heading_font_familyにベースファミリーを追加
    if (strpos($heading_font_family, 'sans-serif') !== false && strpos($heading_font_family, 'sans-serif') >= 0 ||
      strpos($heading_font_family, 'monospace') !== false && strpos($heading_font_family, 'monospace') >= 0) {
      // $heading_font_familyがサンセリフ体の場合
      $heading_font_family = str_replace('sans-serif', $sans_serif_base, $heading_font_family);
      $heading_font_family = str_replace('monospace', $sans_serif_base, $heading_font_family); 
    } else {
      // $heading_font_familyがセリフ体の場合
      $heading_font_family = str_replace('serif', $serif_base, $heading_font_family); 
    }

    return [
      // 配色
      '--primary-light-color'  => self::get_data('style', 'primary_light_color'),
      '--primary-color'        => self::get_data('style', 'primary_color'),
      '--primary-dark-color'   => self::get_data('style', 'primary_dark_color'),
      '--secondary-color'      => self::get_data('style', 'secondary_color'),
      // コンテナと文字サイズ
      '--container-base'       => self::get_data('style', 'container_base'),
      '--root-font-size'       => self::get_data('style', 'root_font_size'),
      '--xxl-font-size'        => self::get_data('style', 'h1_font_size'),
      '--xl-font-size'         => self::get_data('style', 'h2_font_size'),
      '--lg-font-size'         => self::get_data('style', 'h3_font_size'),
      '--md-font-size'         => self::get_data('style', 'h4_font_size'),
      // フォント設定
      '--font-family-base'     => $font_family_base,
      '--font-weight-base'     => $font_weight_base,
      '--heading-font-family'  => $heading_font_family,
      '--heading-font-weight'  => $heading_font_weight,
      // Header
      '--header-height'        => self::get_data('header', 'header_disable') ? '0px' : (self::get_data('header', 'site_brand_height') + 24) . 'px',
      '--site-brand-height'    => self::get_data('header', 'site_brand_height') . 'px',
      '--site-brand-filter'    => self::get_data('header', 'site_brand_filter'),
      // Cover
      '--cover-image-1'        => 'url("' . self::get_data('hero', 'cover_1') . '")',
      '--cover-image-2'        => 'url("' . self::get_data('hero', 'cover_2') . '")',
      '--cover-image-3'        => 'url("' . self::get_data('hero', 'cover_3') . '")',
      '--cover-image-4'        => 'url("' . self::get_data('hero', 'cover_4') . '")',
      '--cover-height'         => self::get_data('hero', 'cover_height') . 'vh',
      '--cover-filter'         => self::get_data('hero', 'cover_filter'),
      // 画像アスペクト比
      '--list-aspect-ratio'    => self::get_data('news', 'item_aspect_ratio'),
      '--card-aspect-ratio'    => self::get_data('service', 'item_aspect_ratio'),
      '--slider-aspect-ratio'  => self::get_data('feature', 'item_aspect_ratio'),
      // More文字列
      '--hero-more-text'         => '"' . self::get_data('hero', 'more_text') . '"',
      '--feature-more-text'      => '"' . self::get_data('feature', 'more_text') . '"',
      '--feature-item-more-text' => '"' . self::get_data('feature', 'item_more_text') . '"',
      '--about-more-text'        => '"' . self::get_data('about', 'more_text') . '"',
      '--service-more-text'      => '"' . self::get_data('service', 'more_text') . '"',
      '--service-item-more-text' => '"' . self::get_data('service', 'item_more_text') . '"',
      '--team-more-text'         => '"' . self::get_data('team', 'more_text') . '"',
      '--news-more-text'         => '"' . self::get_data('news', 'more_text') . '"',
      '--news-item-more-text'    => '"' . self::get_data('news', 'item_more_text') . '"',
    ];
  }
  
  /**
   * 動的スタイルを出力
   */
  public function apply_theme_settings() {
    // 動的スタイルを配列化
    self::$style = self::make_style_array();
    // $style を上書きするHook
		$style = apply_filters('qwel_theme_style', self::$style);

    ?>
    <style type="text/css">
      :root {
      <?php 
      foreach ($style as $key => $val) {
        echo $key . ': ' . $val . ';';  
      }
      ?>
      }
    </style>
    <?php
  }
}
