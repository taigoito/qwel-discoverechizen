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
      // フォント設定
      '--font-family-base'     => '"游ゴシック", "Yu Gothic", sans-serif',
      '--font-weight-base'     => 500,
      '--heading-font-family'  => '"游明朝", "Yu Mincho", serif',
      '--heading-font-weight'  => 400,
      // 画像アスペクト比
      '--list-aspect-ratio'    => self::get_data('style', 'list_aspect_ratio'),
      '--card-aspect-ratio'    => self::get_data('style', 'card_aspect_ratio'),
      '--slider-aspect-ratio'  => self::get_data('style', 'slider_aspect_ratio')
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
