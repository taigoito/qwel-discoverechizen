<?php
namespace DiscoverEchizen_Theme;

trait Shortcodes {
  // ショートコード登録
  public function register_shortcode() {

    // コピーライトに現在年を添える
    add_shortcode( 'copyright', [ $this, 'get_copyright' ] );
    
  }

  public function get_copyright( $atts ) {
    // デフォルト値
    $atts = shortcode_atts(
      [
        'year' => '2022',
        'text' => '福井市越前海岸盛り上げ隊'
      ],
      $atts
    );

    // コピーライト文字列を作成
    $copyright = '&copy; ' . $atts[ 'year' ];
    $year = getdate()[ 'year' ];
    if ( $atts[ 'year' ] == $year ) {
      $copyright .= ' ' . $atts[ 'text' ];
    } else {
      $copyright .= ' - ' . $year . ' ' . $atts[ 'text' ];
    }

    return '<small class="copyright">' . $copyright . '</small>';

  }

}
