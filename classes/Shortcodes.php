<?php
namespace DiscoverEchizen_Theme;

trait Shortcodes {
  // ショートコード登録
  public function register_shortcode() {

    // タイトルを作成
    add_shortcode( 'title', [ $this, 'get_title' ] );

    // コピーライトに現在年を添える
    add_shortcode( 'copyright', [ $this, 'get_copyright' ] );
    
  }

  public function get_title( $atts ) {
    if (is_page()) {
      // 固定ページ
      // 記事情報を取得
      global $post;
      $title = $post->post_title;
      $slug  = $post->post_name;

    } else {
      // 個別投稿
      $title = 'ブログ&ニュース';
      $slug  = 'blog &amp; news';

    }

    // デフォルト値
    $atts = shortcode_atts(
      [
        'title'  => $title,
        'slug'   => $slug
      ],
      $atts
    );

    // 成形
    $slug  = str_replace( '-', ' ', $slug ); 

    // タイトル文字列を作成
    $h3    = '<h3 class="main__titleText --bottom" data-comfort="1">' . $title . '</h3>';
    $p     = '<p class="main__titleText --top" data-comfort="1">' . $slug . '</p>';
    $html  = '<div class="main__titleArea"><div class="main__title">' . $h3 . $p . '</div></div>';

    return $html;
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
