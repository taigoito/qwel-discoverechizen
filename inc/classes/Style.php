<?php
namespace DE_Theme;

/**
 * 動的スタイルを出力
 */
trait Style {
  /**
   * 動的スタイルの配列
   */
  protected static $style = [];

  /**
   * 動的スタイルを配列化
   */
	public function make_style_array() {
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
      // Header
      '--header-height'        => self::get_data('header', 'header_disable') ? '0px' : (self::get_data('header', 'site_brand_height') + 24) . 'px',
      '--site-brand-height'    => self::get_data('header', 'site_brand_height') . 'px',
      '--site-brand-filter'    => self::get_data('header', 'site_brand_filter'),
      // 画像アスペクト比
      '--feature-aspect-ratio' => self::get_data('feature', 'item_aspect_ratio'),
      '--plan-aspect-ratio'    => self::get_data('plan', 'item_aspect_ratio'),
      '--news-aspect-ratio'    => self::get_data('news', 'item_aspect_ratio'),
      // More文字列
      '--about-more-text'      => '"' . self::get_data('about', 'more_text') . '"',
      '--post-more-text'      => '"' . self::get_data('pickup', 'more_text') . '"',
      '--model-plan-more-text'       => '"' . self::get_data('model-plan', 'more_text') . '"',
      '--blog-and-news-more-text'       => '"' . self::get_data('blog-and-news', 'more_text') . '"',
      '--blog-and-news-item-more-text'  => '"' . self::get_data('blog-and-news', 'item_more_text') . '"',
    ];
  }
  
  /**
   * 動的スタイルを出力
   */
  public function apply_theme_settings() {
    // 動的スタイルを配列化
    self::$style = self::make_style_array();
    // $style を上書きするHook
		$style = apply_filters('de_theme_style', self::$style);

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
