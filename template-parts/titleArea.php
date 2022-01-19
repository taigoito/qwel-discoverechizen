    <?php
    $wp_obj  = get_queried_object();
    $title   = '';
    $slug    = '';

    // 固定ページ
    if (is_home() || is_page()) {
      $title = $wp_obj->post_title;
      $slug  = $wp_obj->post_name;

    // 個別投稿ページ
    } else if (is_single()) {
      $post_id = $wp_obj->ID;
      $terms   = get_the_terms($post_id, 'category');
      $title   = $terms[0]->name;
      $slug    = $terms[0]->slug;
      if ($slug === 'feature') {
        $title = $wp_obj->post_title;
        $slug  = $wp_obj->post_name;
      }

    // カスタム投稿アーカイブ
    } else if (is_post_type_archive()) {
      $title = $wp_obj->label;
      $slug  = $wp_obj->name;

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
      $title = 'Author: ' . $wp_obj->display_name;
    
    // タームアーカイブ
    } else if (is_archive()) {
      $title = $wp_obj->name;
      $slug  = $wp_obj->slug;

    // 検索結果ページ
    } else if (is_search()) {
      $title = 'Searching for:' . get_search_query();

    // 404ページ
    } else if (is_404()) {
      $title = 'Not Found';
      $slug  = '404';

    // その他
    } else {
      $title = $wp_obj->label;
      $slug  = $wp_obj->name;
    }
    ?>
    <header id="titleArea" class="titleArea">
      <div class="page__headingContainer">
        <h1 class="page__heading">
          <span class="page__headingSpan1" data-comfort="1"><?php echo my_format_slug($slug); ?></span>
          <span class="page__headingSpan2" data-comfort="1"><?php echo $title; ?></span>
        </h1>
      </div>
    </header>
