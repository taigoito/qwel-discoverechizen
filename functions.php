<?php
/*
Author: Taigo Ito
Author URI: https://qwel.design/
*/

// Setup

function qwel_setup()
{
  // アイキャッチ画像をサポート
  add_theme_support('post-thumbnails');

  // HTML5マークアップの使用
  add_theme_support('html5', [
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ]);

  // タイトルタグ出力
  add_theme_support('title-tag');

  // カスタムヘッダー
  add_theme_support('custom-header');

  // カスタムロゴ
  add_theme_support('custom-logo');
  
  // カスタムメニュー
  register_nav_menus([
    'primary' => 'Primary Menu',
    'secondary' => 'Secondary Menu'
  ]);

  // 固定ページの抜粋
  add_post_type_support('page', 'excerpt');

  // メディアサイズ指定
  update_option('thumbnail_size_w', 216);
  update_option('thumbnail_size_h', 216);
  update_option('medium_size_w', 432);
  update_option('medium_size_h', 432);
  update_option('medium_large_size_w', 0);
  update_option('medium_large_size_h', 0);
  update_option('large_size_w', 648);
  update_option('large_size_h', 648);
}
add_action('after_setup_theme', 'qwel_setup');


// Widgets

function qwel_widgets_init()
{
  register_sidebar([
    'name' => 'Blog Sidebar',
    'id' => 'blog-sidebar',
    'before_widget' => '<aside class="widget">',
    'after_widget' => '</aside>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>'
  ]);
}
add_action('widgets_init', 'qwel_widgets_init');


// Scripts

function qwel_scripts()
{
  wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Noto+Sans+JP:300|Noto+Serif+JP:300&display=swap', [], null); 
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css', [], null);
}
add_action('wp_enqueue_scripts', 'qwel_scripts');


// Post
// デフォルト投稿タイプ呼称・アイコン変更

$post_name = '記事';
$post_icon = 'dashicons-star-filled';

function change_menulabel()
{
  global $menu;
  global $submenu;
  global $post_name;
  $menu[5][0] = $post_name;
  $submenu['edit.php'][5][0] = $post_name . '一覧';
}
add_action('admin_menu', 'change_menulabel');

function change_objectlabel()
{
  global $wp_post_types;
  global $post_name;
  global $post_icon;
  $wp_post_types['post']->label = $post_name;
  $wp_post_types['post']->labels->name = $post_name;
  $wp_post_types['post']->labels->singular_name = $post_name;
  $wp_post_types['post']->menu_icon = $post_icon;
}
add_action('init', 'change_objectlabel');


// Works

$works_slug = 'works';
$works_name = '作品';
$works_icon = 'dashicons-hammer';

$works_cat_slug = 'product';
$works_cat_name = '品名';
$works_tag_slug = 'motif';
$works_tag_name = 'モチーフ';

function register_option_works()
{
  global $works_slug;
  global $works_name;
  global $works_icon;

  global $works_cat_slug;
  global $works_cat_name;
  global $works_tag_slug;
  global $works_tag_name;

  register_post_type($works_slug, [
    'labels' => [
      'name' => $works_name,
      'all_items' => $works_name . '一覧'
    ],
    'public' => true,
    'menu_position' => 6,
    'menu_icon' => $works_icon,
    'supports' => ['title', 'editor', 'excerpt', 'thumbnail'],
    'has_archive' => true,
    'rewrite' => [
      'slug' => $works_slug,
      'with_front' => false,
      'hierarchical' => true
    ],
    'query_var' => true,
    'show_in_rest' => true
  ]);

  register_taxonomy(
    $works_cat_slug,
    $works_slug,
    [
      'label' => $works_cat_name,
      'public' => true,
      'show_admin_column' => true,
      'hierarchical' => true,
      'rewrite' => [
        'slug' => $works_cat_slug,
        'with_front' => false,
        'hierarchical' => true
      ],
      'query_var' => true,
      'show_in_rest' => true
    ]
  );

  register_taxonomy(
    $works_tag_slug,
    $works_slug,
    [
      'label' => $works_tag_name,
      'public' => true,
      'show_admin_column' => true,
      'hierarchical' => false,
      'rewrite' => [
        'slug' => $works_tag_slug,
        'with_front' => false,
        'hierarchical' => true
      ],
      'query_var' => true,
      'show_in_rest' => true
    ]
  );
}
add_action('init', 'register_option_works');

function insert_works_cat()
{
  global $works_slug;
  global $works_name;
  global $works_cat_slug;
  echo '<ul class="list-' . $works_cat_slug . '">';
  echo '<li>' .
    '<a href="' . get_post_type_archive_link($works_slug) . '">' .
    $works_name . '一覧' . '<span>-all-</span>' .
    '</a>' .
    '</li>';
  $terms = get_terms($works_cat_slug, ['orderby' => 'id']);
  foreach ($terms as $term) {
    echo '<li>' .
      '<a href="' . get_term_link($term->term_id, $works_cat_slug) . '">' .
      $term->name . '<span>-' . $term->slug . '-</span>' .
      '</a>' .
      '</li>';
  }
  echo '</ul>';
}

function insert_works_tag()
{
  global $works_tag_slug;
  echo '<ul class="list-' . $works_tag_slug . '">';
  $terms = get_terms($works_tag_slug, ['orderby' => 'name']);
  foreach ($terms as $term) {
    echo '<li>' .
      '<a href="' . get_term_link($term->term_id, $works_tag_slug) . '">' .
      $term->name .
      '</a>' .
      '</li>';
  }
  echo '</ul>';
}

function add_works_fields()
{
  global $works_name;
  add_meta_box('works_setting', $works_name . '詳細', 'insert_works_fields', 'works', 'normal');
}
add_action('admin_menu', 'add_works_fields');

function insert_works_fields()
{
  global $post;
  echo '素材：<input type="text" name="material" value="' . get_post_meta($post->ID, 'material', true) . '" size="50"><br>';
  echo '仕上：<input type="text" name="finish" value="' . get_post_meta($post->ID, 'finish', true) . '" size="50"><br>';
  echo '寸法：<input type="text" name="size" value="' . get_post_meta($post->ID, 'size', true) . '" size="50"><br>';
  echo '所在地：<input type="text" name="location" value="' . get_post_meta($post->ID, 'location', true) . '" size="50"><br>';
  echo '参考納期：<input type="text" name="duration" value="' . get_post_meta($post->ID, 'duration', true) . '" size="50"><br>';
  echo '参考価格：<input type="text" name="price" value="' . get_post_meta($post->ID, 'price', true) . '" size="50"><br>';
}

function save_works_fields($postID)
{
  if (!empty($_POST['material'])) {
    update_post_meta($postID, 'material', $_POST['material']);
  } else {
    delete_post_meta($postID, 'material');
  }
  if (!empty($_POST['finish'])) {
    update_post_meta($postID, 'finish', $_POST['finish']);
  } else {
    delete_post_meta($postID, 'finish');
  }
  if (!empty($_POST['size'])) {
    update_post_meta($postID, 'size', $_POST['size']);
  } else {
    delete_post_meta($postID, 'size');
  }
  if (!empty($_POST['location'])) {
    update_post_meta($postID, 'location', $_POST['location']);
  } else {
    delete_post_meta($postID, 'location');
  }
  if (!empty($_POST['duration'])) {
    update_post_meta($postID, 'duration', $_POST['duration']);
  } else {
    delete_post_meta($postID, 'duration');
  }
  if (!empty($_POST['price'])) {
    update_post_meta($postID, 'price', $_POST['price']);
  } else {
    delete_post_meta($postID, 'price');
  }
}
add_action('save_post', 'save_works_fields');


// Breadcrumb

function insert_breadcrumb()
{
  echo '<ul class="breadcrumb">';
  echo '<li>' .
    '<a href="' . home_url('/') . '">top</a>' .
    '</li>';

  if (is_home()) {
    // メインページ
    echo '<li>' . get_post_type_object('post')->label . '一覧' . '</li>';
  } else {
    // WPオブジェクト取得
    $wp_obj = get_queried_object();

    if (is_single()) {
      // 個別投稿ページ
      $post_id = $wp_obj->ID;
      $post_type = $wp_obj->post_type;
      $post_title = $wp_obj->post_title;

      // カスタム投稿タイプを判定
      global $works_slug;
      global $works_cat_slug;
      if ($post_type == 'post') {
        // 「記事」の場合、「カテゴリー」を取得
        $the_tax = 'category';
      } else if ($post_type == $works_slug) {
        // 「作品」の場合、「品名」を取得
        $the_tax = $works_cat_slug;
      } else {
        $the_tax = '';
      }

      // 投稿タイプ一覧を表示
      echo '<li>' .
      '<a href="' . get_post_type_archive_link($post_type) . '">' .
      get_post_type_object($post_type)->label . '一覧' .
      '</a>' .
      '</li>';

    // タクソノミーが紐づいていれば表示
    if ($the_tax != "") {
      $terms = get_the_terms($post_id, $the_tax); // 投稿に紐づく全タームを取得

      if (!empty($terms)) {
        $term = $terms[0];

        // 親タームがあれば表示
        if ($term->parent > 0) {
          // 親タームのIDリストを取得
          $parent_array = array_reverse(get_ancestors($term->term_id, $the_tax));
          foreach ($parent_array as $parent_id) {
            $parent_term = get_term($parent_id, $the_tax);
            echo '<li>' .
                '<a href="' . get_term_link($parent_id, $the_tax) . '">' .
                $parent_term->name .
                '</a>' .
                '</li>';
            }
          }

          // 最下層タームを表示
          echo '<li>' .
            '<a href="' . get_term_link($term->term_id, $the_tax) . '">' .
            $term->name .
            '</a>' .
            '</li>';
        }
      }

      // 自身
      echo '<li>' . $post_title . '</li>';
    } else if (is_page()) {
      // 固定ページ
      $page_id = $wp_obj->ID;
      $page_title = $wp_obj->post_title;

      if ($wp_obj->post_parent > 0) {
        // 親ページ
        $parent_array = array_reverse(get_post_ancestors($page_id));
        foreach ($parent_array as $parent_id) {
          echo '<li>' .
            '<a href="' . get_permalink($parent_id) . '">' .
            get_the_title($parent_id) .
            '</a>' .
            '</li>';
        }
      }
      // 自身
      echo '<li>' . $page_title . '</li>';
    } else if (is_post_type_archive()) {
      // カスタム投稿アーカイブ
      echo '<li>' . $wp_obj->label . '一覧</li>';
    } else if (is_date()) {
      // 日付別
      $year = get_query_var('year');
      $month = get_query_var('monthnum');
      $day = get_query_var('day');

      if ($day > 0) {
        // 日別アーカイブ
        echo '<li><a href="' . get_year_link($year) . '">' . $year . '年</a></li>' .
          '<li><a href="' . get_month_link($year, $month) . '">' . $month . '月</a></li>' .
          '<li>' . $day . '日</li>';
      } else if ($month > 0) {
        // 月別アーカイブ
        echo '<li><a href="' . get_year_link($year) . '">' . $year . '年</a></li>' .
          '<li>' . $month . '月</li>';
      } else {
        // 年別アーカイブ
        echo '<li>' . $year . '年</li>';
      }
    } else if (is_author()) {
      // 投稿者アーカイブ
      echo '<li>' . $wp_obj->display_name . ' の記事</li>';
    } else if (is_archive()) {
      // タームアーカイブ
      $term_id = $wp_obj->term_id;
      $term_name = $wp_obj->name;
      $tax_name = $wp_obj->taxonomy;

      // 「カテゴリー」、「タグ」の場合、「記事一覧」を表示
      if ($tax_name == 'category' || $tax_name == 'tag') {
        $post_type = 'post';
      }

      // 「品名」、「モチーフ」の場合、「作品一覧」を表示
      global $works_slug;
      global $works_cat_slug;
      global $works_tag_slug;
      if ($tax_name == $works_cat_slug || $tax_name == $works_tag_slug) {
        $post_type = $works_slug;
      }

      // 投稿タイプ一覧を表示
      echo '<li>' .
        '<a href="' . get_post_type_archive_link($post_type) . '">' .
        get_post_type_object($post_type)->label . '一覧' .
        '</a>';

      // 親ページがあれば順番に表示
      if ($wp_obj->parent > 0) {
        $parent_array = array_reverse(get_ancestors($term_id, $tax_name));
        foreach ($parent_array as $parent_id) {
          $parent_term = get_term($parent_id, $tax_name);
          echo '<li>' .
            '<a href="' . get_term_link($parent_id, $tax_name) . '">' .
            $parent_term->name .
            '</a>' .
            '</li>';
        }
      }
      // ターム自身の表示
      echo '<li>' . $term_name . '</li>';
    } else if (is_search()) {
      // 検索結果ページ
      echo '<li>「' . get_search_query() . '」で検索した結果</li>';
    } else if (is_404()) {
      // 404ページ
      echo '<li>404 Not Found</li>';
    }
  }
}


// Pagination

function insert_pagination()
{
  if (is_single()) {
    // 個別投稿ページの場合、前後の記事へ移動できる
    echo '<ul class="pagination">';

    // 前の記事があれば、前の記事へを表示
    $prev_post = get_previous_post();
    if (!empty($prev_post)) {
      echo '<li class="page-prev"><a href="' . get_permalink($prev_post->ID) . '"><span data-icon="ei-chevron-left"></span></a></li>';
    }

    // 次の記事があれば、次の記事へを表示
    $next_post = get_next_post();
    if (!empty($next_post)) {
      echo '<li class="page-next"><a href="' . get_permalink($next_post->ID) . '"><span data-icon="ei-chevron-right"></span></a></li>';
    }

    echo '</ul>';
  } else if (is_home() || is_archive() || is_search()) {
    // アーカイブページの場合、ページの切り替えができる
    global $wp_query;
    $pages = $wp_query->max_num_pages;
    $paged = get_query_var('paged') ?: 1;

    // ページ数が2ページ以上の場合から表示
    if ($pages > 1) {
      echo '<ul class="pagination">';

      // 最初へ
      if ($paged > 3) {
        echo '<li><a href="', get_pagenum_link(1), '">1</a></li>';
        if ($paged > 4) {
          echo '<li class="page-joint"><span>…</span></li>';
        }
      }
      // 前後へ
      for ($i = 1; $i <= $pages; $i++) {
        if ($i <= $paged + 2 && $i >= $paged - 2) {
          if ($paged === $i) {
            echo '<li class="page-active"><span>' . $i . '</span></li>';
          } else {
            echo '<li><a href="', get_pagenum_link($i), '">' . $i . '</a></li>';
          }
        }
      }
      // 最後へ
      if ($paged + 2 < $pages) {
        if ($paged  + 3 < $pages) {
          echo '<li class="page-joint"><span>…</span></li>';
        }
        echo '<li><a href="', get_pagenum_link($pages), '">' . $pages . '</a></li>';
      }

      echo '</ul>';
    }
  }
}


// Get my title

function get_my_title()
{
  // WPオブジェクト取得
  $wp_obj = get_queried_object();

  if (is_single() || is_home() || is_page()) {
    // 個別投稿ページ・固定ページ
    return $wp_obj->post_title;
  } else if (is_post_type_archive()) {
    // カスタム投稿アーカイブ
    return $wp_obj->label . '一覧';
  } else if (is_date()) {
    // 日付別
    $year = get_query_var('year');
    $month = get_query_var('monthnum');
    $day = get_query_var('day');
    if ($day > 0) return $year . '年' . $month . '月' . $day . '日の記事';
    else if ($month > 0) return $year . '年' . $month . '月の記事';
    else return $year . '年の記事';
  } else if (is_author()) {
    // 投稿者アーカイブ
    return $wp_obj->display_name . ' の記事';
  } else if (is_archive()) {
    // タームアーカイブ
    $term_name = $wp_obj->name;
    return $term_name;
  } else if (is_search()) {
    // 検索結果ページ
    return '「' . get_search_query() . '」で検索した結果';
  } else if (is_404()) {
    // 404ページ
    return '404 Not Found';
  }
}


// Get my slug

function get_my_slug()
{
  // WPオブジェクト取得
  $wp_obj = get_queried_object();

  if (is_single()) {
    // 個別投稿ページ
    return $wp_obj->post_type;
  } else if (!is_home() && is_page()) {
    // 固定ページ
    return $wp_obj->post_name;
  } else if (is_post_type_archive()) {
    // カスタム投稿アーカイブ
    return 'archive-' . $wp_obj->name;
  } else if (is_home() || is_date() || is_author() || is_search() || is_404()) {
    // 投稿アーカイブ
    return 'archive';
  } else if (is_archive()) {
    // タームアーカイブ
    $tax_name = $wp_obj->taxonomy;
    // 「カテゴリー」、「タグ」の場合
    if ($tax_name == 'category' || $tax_name == 'tag') {
      return 'archive';
    }
    // 「品名」、「モチーフ」の場合
    global $works_slug;
    global $works_cat_slug;
    global $works_tag_slug;
    if ($tax_name == $works_cat_slug || $tax_name == $works_tag_slug) {
      return 'archive-' . $works_slug;
    }
  }
}

// Body ID, Main ID
// body要素, main要素にIDを指定し、スタイル・スクリプトを適宜対応させる
// フロントページのスラグは "index" を指定すること

function body_id()
{
  echo 'id="' . get_my_slug() . '"';
}


// No image
// アイキャッチ画像の代替

function no_image($size = 'sm')
{
  echo '<img src="' . get_template_directory_uri() . '/images/no-image' . ($size === 'sm' ? '-sm' : '') . '.gif">';
}


// Excerpt
// 抜粋文字数指定

function register_excerpt_length()
{
  return 100;
}
add_filter('excerpt_length', 'register_excerpt_length', 999);


// Copyright

$copyright = date('Y') . ' QWEL';

function copyright()
{
  global $copyright;
  echo '&copy; ' . $copyright;
}
