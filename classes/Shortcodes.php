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

    $wp_obj  = get_queried_object();
    $title   = ''; // 小文字・h1タグ
    $slug    = ''; // 大文字

    // 固定ページ
    if (is_home() || is_page()) {
      $title = $wp_obj->post_title;
      $slug  = $wp_obj->post_name;

    // 個別投稿ページ
    } else if (is_single()) {
      $title = 'ブログ&ニュース';
      $slug  = 'blog and news';

    // 日付別
    } else if (is_date()) {
      $year  = get_query_var('year');
      $month = get_query_var('monthnum');
      $day   = get_query_var('day');
      if ($day > 0) $title = $year . ' / ' . sprintf('%02d', $month) . ' / ' . sprintf('%02d', $day);
      else if ($month > 0) $title = $year . ' / ' . sprintf('%02d', $month);
      else $title = $year;

    // 投稿者アーカイブ
    } else if (is_author()) {
      $title = '著者:' . $wp_obj->display_name;
      $slug  = 'author';
    
    // タームアーカイブ
    } else if (is_archive()) {
      $title = $wp_obj->name;
      $slug  = $wp_obj->slug;

    // 検索結果ページ
    } else if (is_search()) {
      $title = '検索:' . get_search_query();
      $slug  = 'searching';

    // 404ページ
    } else if (is_404()) {
      $title = 'Not Found';
      $slug  = '404';

    // その他
    } else {
      $title = 'ブログ&ニュース';
      $slug  = 'blog and news';
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
    $h1    = '<h1 class="main__titleText --bottom" data-comfort="1">' . $title . '</h1>';
    $p     = '<p class="main__titleText --top" data-comfort="1">' . $slug . '</p>';
    $html  = '<div class="main__titleArea"><div class="main__title">' . $h1 . $p . '</div></div>';
    return $html;
    
  }

  public function get_copyright( $atts ) {
    // デフォルト値
    $atts = shortcode_atts(
      [
        'year' => '2015',
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
