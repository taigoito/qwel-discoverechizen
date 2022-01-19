<?php
namespace Qwel_Theme;

/**
 * CSS, JSファイルを読み込み
 */
trait Scripts {
  public static function enqueue_scripts() {
    // Google Fonts
    // テーマ設定を読み込み
    $noto_sans_jp_300  = self::get_data('style', 'use_noto_sans_jp_300');
    $noto_sans_jp_400  = self::get_data('style', 'use_noto_sans_jp_400');
    $noto_sans_jp_500  = self::get_data('style', 'use_noto_sans_jp_500');
    $noto_sans_jp_700  = self::get_data('style', 'use_noto_sans_jp_700');
    $noto_serif_jp_300 = self::get_data('style', 'use_noto_serif_jp_300');
    $noto_serif_jp_400 = self::get_data('style', 'use_noto_serif_jp_400');
    $noto_serif_jp_500 = self::get_data('style', 'use_noto_serif_jp_500');
    $noto_serif_jp_700 = self::get_data('style', 'use_noto_serif_jp_700');

    // family文字列作成
    // Noto Sans JP
    $noto_sans_jp = '';
    if ($noto_sans_jp_300 || $noto_sans_jp_400 || $noto_sans_jp_500 || $noto_sans_jp_700) {
      $noto_sans_jp .= 'Noto+Sans+JP:';
      if ($noto_sans_jp_300) $noto_sans_jp .= '300,';
      if ($noto_sans_jp_400) $noto_sans_jp .= '400,';
      if ($noto_sans_jp_500) $noto_sans_jp .= '500,';
      if ($noto_sans_jp_700) $noto_sans_jp .= '700,';
      $noto_sans_jp = rtrim($noto_sans_jp, ',');
    }
    // Noto Serif JP
    $noto_serif_jp = '';
    if ($noto_serif_jp_300 || $noto_serif_jp_400 || $noto_serif_jp_500 || $noto_serif_jp_700) {
      $noto_serif_jp .= 'Noto+Serif+JP:';
      if ($noto_serif_jp_300) $noto_serif_jp .= '300,';
      if ($noto_serif_jp_400) $noto_serif_jp .= '400,';
      if ($noto_serif_jp_500) $noto_serif_jp .= '500,';
      if ($noto_serif_jp_700) $noto_serif_jp .= '700,';
      $noto_serif_jp = rtrim($noto_serif_jp, ',');
    }
    // 文字列結合
    $family = $noto_sans_jp;
    if ($noto_sans_jp !== '' && $noto_serif_jp !== '') $family .= '|';
    $family .= $noto_serif_jp;

    // $family を上書きするHook
		$family = apply_filters('qwel_theme_font_family', $family);

    if ($family !== '') {
      wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=' . $family . '&display=swap', [], null); 
    }

    // テーマ情報を取得
    $theme = wp_get_theme(get_template());
    $version = $theme->get('Version');
    // style.css
    wp_enqueue_style('style', QWEL_THEME_URI . '/style.css', [], $version);
    // init.js
    wp_enqueue_script('init', QWEL_THEME_URI . '/init.js', [], $version, true);

    // 子テーマを持つ場合
    if (is_child_theme()) {
      // 子テーマ情報を取得
      $child = wp_get_theme(get_stylesheet());
      $version = $child->get('Version');
      // style.css
      wp_enqueue_style('custom', QWEL_CHILD_URI . '/style.css', [], $version);
      // init.js
      if (file_exists(QWEL_CHILD_DIR . '/init.js')) {
        wp_enqueue_script('custom', QWEL_CHILD_URI . '/init.js', [], $version, true);
      }
    }
  }
}
