<?php
namespace DiscoverEchizen_Theme;

trait Shortcodes {
  // ショートコード登録
  public function register_shortcode() {

    // タイトルを作成
    add_shortcode( 'title', [ $this, 'get_title' ] );

    // パンくずリストを作成
    add_shortcode( 'breadcrumb', [ $this, 'get_breadcrumb' ] );

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

  public function get_breadcrumb( $atts ) {
    $html = '<ul id="breadcrumb" class="breadcrumb">';
    $html .= '<li class="breadcrumb__item"><a href="' . home_url('/') . '">top</a></li>';

    $wp_obj = get_queried_object();
    /**
     * 投稿一覧ページ
     */
    if (is_home()) {

      $html .= '<li class="breadcrumb__item">' . get_post_type_object('post')->label . '</li>';

    /**
     * 個別投稿ページ
     */
    } else if (is_single()) {
      $post_id     = $wp_obj->ID;
      $post_type   = $wp_obj->post_type;
      $post_title  = $wp_obj->post_title;

      // カスタム投稿タイプの場合、投稿タイプ一覧を表示
      if ($post_type !== 'post') {

        $html .= '<li class="breadcrumb__item"><a href="' . get_post_type_archive_link($post_type) . '">' . get_post_type_object($post_type)->label . '</a></li>';

      }

      // カスタム投稿タイプから、タクソノミーを取得
      if ($post_type == 'post') {
        // 「投稿」の場合、「カテゴリー」を取得
        $tax_name = 'category';

        /**
         * カスタムタクソノミーを作成した場合は、ここに処理を追加
         */

      } else {
        $tax_name = '';
      }

      // タクソノミーが紐づいていれば表示
      if ($tax_name != "") {
        $terms = get_the_terms($post_id, $tax_name); // 投稿に紐づく全タームを取得

        if (!empty($terms)) {
          $term = $terms[0];

          /* Custom */
          if ($term->slug !== 'feature') {

            // 親タームがあれば表示
            if ($term->parent > 0) {
              $parent_array = array_reverse(get_ancestors($term->term_id, $tax_name));
              foreach ($parent_array as $parent_id) {
                $parent_term = get_term($parent_id, $tax_name);

                $html .= '<li class="breadcrumb__item"><a href="' . get_term_link($parent_id, $tax_name) . '">' . $parent_term->name . '</a></li>';

              }
            }

            // 最下層タームを表示

            $html .= '<li class="breadcrumb__item"><a href="' . get_term_link($term->term_id, $tax_name) . '">' . $term->name . '</a></li>';

          }
        }
      }

      // 自身

      $html .= '<li class="breadcrumb__item">' . $post_title . '</li>';
    
    /**
     * 固定ページ
     */
    } else if (is_page()) {
      $page_id     = $wp_obj->ID;
      $page_title  = $wp_obj->post_title;

      // 親ページがあれば表示
      if ($wp_obj->post_parent > 0) {
        $parent_array = array_reverse(get_post_ancestors($page_id));
        foreach ($parent_array as $parent_id) {

          $html .= '<li class="breadcrumb__item"><a href="' . get_permalink($parent_id) . '">' . get_the_title($parent_id) . '</a></li>';

        }
      }

      // 自身

      $html .= '<li class="breadcrumb__item">' . $page_title . '</li>';

    /**
     * カスタム投稿アーカイブ
     */
    } else if (is_post_type_archive()) {

      $html .= '<li class="breadcrumb__item">' . $wp_obj->label . '</li>';

    /**
     * 日付別
     */
    } else if (is_date()) {
      $year    = get_query_var('year');
      $month   = get_query_var('monthnum');
      $day     = get_query_var('day');

      // 日別アーカイブ
      if ($day > 0) {

        $html .= '<li class="breadcrumb__item"><a href="' . get_year_link($year) . '">' . $year . '</a></li>';
        $html .= '<li class="breadcrumb__item"><a href="' . get_month_link($year, $month) . '">' . sprintf('%02d', $month) . '</a></li>';
        $html .= '<li class="breadcrumb__item">' . sprintf('%02d', $day) . '</li>';

      // 月別アーカイブ
      } else if ($month > 0) {

        $html .= '<li class="breadcrumb__item"><a href="' . get_year_link($year) . '">' . $year . '</a></li>';
        $html .= '<li class="breadcrumb__item">' . sprintf('%02d', $month) . '</li>';

      // 年別アーカイブ
      } else {

        $html .= '<li class="breadcrumb__item">' . $year . '</li>';

      }
    /**
     * 投稿者アーカイブ
     */
    } else if (is_author()) {

      $html .= '<li class="breadcrumb__item">著者: ' . $wp_obj->display_name . '</li>';

    /**
     * タームアーカイブ
     */
    } else if (is_archive()) {
      $post_type = '';
      $term      = $wp_obj;
      $term_id   = $wp_obj->term_id;
      $term_name = $wp_obj->name;
      $tax_name  = $wp_obj->taxonomy;

      // 「カテゴリー」、「タグ」の場合、「投稿」を取得
      if ($tax_name == 'category' || $tax_name == 'post_tag') {
        $post_type = 'post';
      }

      /**
       * カスタムタクソノミーを作成した場合は、ここに処理を追加
       */

      // カスタム投稿タイプの場合、投稿タイプ一覧を表示
      if ($post_type !== 'post') {

        $html .= '<li class="breadcrumb__item"><a href="' . get_post_type_archive_link($post_type) . '">' . get_post_type_object($post_type)->label . '</a></li>';

      }
      
      // 親タームがあれば表示
      if ($term->parent > 0) {
        $parent_array = array_reverse(get_ancestors($term->term_id, $tax_name));
        foreach ($parent_array as $parent_id) {
          $parent_term = get_term($parent_id, $tax_name);

          $html .= '<li class="breadcrumb__item"><a href="' . get_term_link($parent_id, $tax_name) . '">' . $parent_term->name . '</a></li>';

        }
      }

      // 自身
      $html .= '<li class="breadcrumb__item">' . $term_name . '</li>';

    /**
     * 検索結果ページ
     */
    } else if (is_search()) {

      $html .= '<li class="breadcrumb__item">検索: ' . get_search_query() . '</li>';

    /**
     * 404ページ
     */
    } else if (is_404()) {

      $html .= '<li class="breadcrumb__item">404 記事が見つかりませんでした</li>';
    
    }
    
    return $html . '</ul>';

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
