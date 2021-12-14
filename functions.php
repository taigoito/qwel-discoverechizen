<?php
/*
Author: Taigo Ito
Author URI: https://qwel.design/
*/

// テーマのパス, URI
define('DE_THEME_DIR', get_template_directory());
define('DE_THEME_URI', get_template_directory_uri());

// Setup

function discoverechizen_setup()
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
    'primary' => 'Primary Menu'
  ]);

  // 固定ページの抜粋
  add_post_type_support('page', 'excerpt');

  // メディアサイズ指定
  update_option('thumbnail_size_w', 240);
  update_option('thumbnail_size_h', 240);
  update_option('medium_size_w', 360);
  update_option('medium_size_h', 360);
  update_option('medium_large_size_w', 0);
  update_option('medium_large_size_h', 0);
  update_option('large_size_w', 720);
  update_option('large_size_h', 720);
}
add_action('after_setup_theme', 'discoverechizen_setup');


// Widgets

function discoverechizen_widgets_init()
{
  register_sidebar([
    'name' => 'Blog Sidebar',
    'id' => 'blog-sidebar',
    'before_widget' => '<aside class="widget">',
    'after_widget' => '</aside>',
    'before_title' => '<h2 class="widget__title">',
    'after_title' => '</h2>'
  ]);
}
add_action('widgets_init', 'discoverechizen_widgets_init');


// Scripts

function discoverechizen_scripts()
{
  // テーマ情報を取得し、スタイルシート読み込み時にバージョン情報を付与
  $theme = wp_get_theme(get_template());
  $version = $theme->get('Version');
  wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,700&display=swap', [], null); 
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css', [], $version);

  if (is_single(2595)) {
    // Google Fonts
    $family = 'Sawarabi+Gothic';
    wp_enqueue_style('fonts-lp', 'https://fonts.googleapis.com/css?family=' . $family . '&display=swap', [], null);
    wp_enqueue_style('style-lp', get_template_directory_uri() . '/style-lp.css', [], null);
  }
}
add_action('wp_enqueue_scripts', 'discoverechizen_scripts');


// Post
// デフォルト投稿タイプ呼称・アイコン変更

$post_name = 'ブログ';
//$post_icon = 'dashicons-star-filled';

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
  //global $post_icon;
  $wp_post_types['post']->label = $post_name;
  $wp_post_types['post']->labels->name = $post_name;
  $wp_post_types['post']->labels->singular_name = $post_name;
  //$wp_post_types['post']->menu_icon = $post_icon;
}
add_action('init', 'change_objectlabel');


// Umitan

$umitan_slug = 'umitan';
$umitan_name = 'うみたん';
$umitan_icon = 'dashicons-star-filled';

$umitan_cat_slug = 'umitan-cat';
$umitan_cat_name = 'シーズン';

function register_option_umitan()
{
  global $umitan_slug;
  global $umitan_name;
  global $umitan_icon;

  global $umitan_cat_slug;
  global $umitan_cat_name;

  register_post_type($umitan_slug, [
    'labels' => [
      'name' => $umitan_name,
      'all_items' => $umitan_name . '一覧'
    ],
    'public' => true,
    'menu_position' => 6,
    'menu_icon' => $umitan_icon,
    'supports' => ['title', 'editor', 'excerpt', 'thumbnail', 'author'],
    'has_archive' => true,
    'rewrite' => [
      'slug' => $umitan_slug,
      'with_front' => false,
      'hierarchical' => true
    ],
    'query_var' => true,
    'show_in_rest' => true
  ]);

  register_taxonomy(
    $umitan_cat_slug,
    $umitan_slug,
    [
      'label' => $umitan_cat_name,
      'public' => true,
      'show_admin_column' => true,
      'hierarchical' => true,
      'rewrite' => [
        'slug' => $umitan_cat_slug,
        'with_front' => false,
        'hierarchical' => true
      ],
      'query_var' => true,
      'show_in_rest' => true
    ]
  );
}
add_action('init', 'register_option_umitan');

function add_umitan_fields()
{
  global $umitan_name;
  add_meta_box('umitan_setting', 'インフォメーション', 'insert_umitan_fields', 'umitan', 'normal');
}
add_action('admin_menu', 'add_umitan_fields');

function insert_umitan_fields()
{
  global $post;
  echo '<table>';
  echo '<tr><th>開催日：</th><td><input type="text" name="eventdate" value="' . get_post_meta($post->ID, 'eventdate', true) . '" size="50"></td></tr>';
  echo '<tr><th>体験名：</th><td><input type="text" name="item" value="' . get_post_meta($post->ID, 'item', true) . '" size="50"></td></tr>';
  echo '<tr><th>事業所：</th><td><input type="text" name="pic" value="' . get_post_meta($post->ID, 'pic', true) . '" size="50"></td></tr>';
  echo '<tr><th>スラグ：</th><td><input type="text" name="picslug" value="' . get_post_meta($post->ID, 'picslug', true) . '" size="50"></td></tr>';
  echo '<tr><th>所在地：</th><td><input type="text" name="address" value="' . get_post_meta($post->ID, 'address', true) . '" size="50"></td></tr>';
  echo '<tr><th>連絡先：</th><td><input type="text" name="contact" value="' . get_post_meta($post->ID, 'contact', true) . '" size="50"></td></tr>';
  echo '<tr><th>URL：</th><td><input type="text" name="webpage" value="' . get_post_meta($post->ID, 'webpage', true) . '" size="50"></td></tr>';
  echo '<tr><th>営業期間：</th><td><input type="text" name="duration" value="' . get_post_meta($post->ID, 'duration', true) . '" size="50"></td></tr>';
  echo '<tr><th>営業時間：</th><td><input type="text" name="hours" value="' . get_post_meta($post->ID, 'hours', true) . '" size="50"></td></tr>';
  echo '<tr><th>料金：</th><td><input type="text" name="price" value="' . get_post_meta($post->ID, 'price', true) . '" size="50"></td></tr>';
  echo '</table>';
}

function save_umitan_fields($postID)
{
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return $postID;
  } else if (isset($_POST['action']) && $_POST['action'] == 'inline-save') {
    return $postID;
  } else {
    if (!empty($_POST['eventdate'])) {
      update_post_meta($postID, 'eventdate', $_POST['eventdate']);
    } else {
      delete_post_meta($postID, 'eventdate');
    }
    if (!empty($_POST['item'])) {
      update_post_meta($postID, 'item', $_POST['item']);
    } else {
      delete_post_meta($postID, 'item');
    }
    if (!empty($_POST['pic'])) {
      update_post_meta($postID, 'pic', $_POST['pic']);
    } else {
      delete_post_meta($postID, 'pic');
    }
    if (!empty($_POST['picslug'])) {
      update_post_meta($postID, 'picslug', $_POST['picslug']);
    } else {
      delete_post_meta($postID, 'picslug');
    }
    if (!empty($_POST['address'])) {
      update_post_meta($postID, 'address', $_POST['address']);
    } else {
      delete_post_meta($postID, 'address');
    }
    if (!empty($_POST['contact'])) {
      update_post_meta($postID, 'contact', $_POST['contact']);
    } else {
      delete_post_meta($postID, 'contact');
    }
    if (!empty($_POST['webpage'])) {
      update_post_meta($postID, 'webpage', $_POST['webpage']);
    } else {
      delete_post_meta($postID, 'webpage');
    }
    if (!empty($_POST['duration'])) {
      update_post_meta($postID, 'duration', $_POST['duration']);
    } else {
      delete_post_meta($postID, 'duration');
    }
    if (!empty($_POST['hours'])) {
      update_post_meta($postID, 'hours', $_POST['hours']);
    } else {
      delete_post_meta($postID, 'hours');
    }
    if (!empty($_POST['price'])) {
      update_post_meta($postID, 'price', $_POST['price']);
    } else {
      delete_post_meta($postID, 'price');
    }
  }
}
add_action('save_post', 'save_umitan_fields');

function the_umitan_title()
{
  $title = get_the_title();
  $arr = preg_split('/\s\|\s/', $title, -1, PREG_SPLIT_NO_EMPTY);
  echo $arr[0];
}

function the_umitan_description()
{
  $title = get_the_title();
  $arr = preg_split('/\s\|\s/', $title, -1, PREG_SPLIT_NO_EMPTY);
  echo $arr[1];
}


// Booking page

$booking_slug = 'booking-page';
$booking_name = '予約ページ';
$booking_icon = 'dashicons-book-alt';

function register_option_booking()
{
  global $booking_slug;
  global $booking_name;
  global $booking_icon;

  global $booking_cat_slug;
  global $booking_cat_name;

  register_post_type($booking_slug, [
    'labels' => [
      'name' => $booking_name,
      'all_items' => $booking_name . '一覧'
    ],
    'public' => true,
    'menu_position' => 21,
    'menu_icon' => $booking_icon,
    'supports' => ['title', 'editor', 'thumbnail'],
    'has_archive' => true,
    'rewrite' => [
      'slug' => $booking_slug,
      'with_front' => false,
      'hierarchical' => true
    ],
    'query_var' => true,
    'show_in_rest' => true
  ]);
}
add_action('init', 'register_option_booking');


// Info

$info_slug = 'info';
$info_name = '観光情報';
$info_icon = 'dashicons-heart';

$info_cat_slug = 'info-cat';
$info_cat_name = '分類';

function register_option_info()
{
  global $info_slug;
  global $info_name;
  global $info_icon;

  global $info_cat_slug;
  global $info_cat_name;

  register_post_type($info_slug, [
    'labels' => [
      'name' => $info_name,
      'all_items' => $info_name . '一覧'
    ],
    'public' => true,
    'menu_position' => 7,
    'menu_icon' => $info_icon,
    'supports' => ['title', 'editor', 'excerpt', 'thumbnail', 'author'],
    'has_archive' => true,
    'rewrite' => [
      'slug' => $info_slug,
      'with_front' => false,
      'hierarchical' => true
    ],
    'query_var' => true,
    'show_in_rest' => true
  ]);

  register_taxonomy(
    $info_cat_slug,
    $info_slug,
    [
      'label' => $info_cat_name,
      'public' => true,
      'show_admin_column' => true,
      'hierarchical' => true,
      'rewrite' => [
        'slug' => $info_cat_slug,
        'with_front' => false,
        'hierarchical' => true
      ],
      'query_var' => true,
      'show_in_rest' => true
    ]
  );
}
add_action('init', 'register_option_info');

function add_info_fields()
{
  global $info_name;
  add_meta_box('info_setting', 'インフォメーション', 'insert_info_fields', 'info', 'normal');
}
add_action('admin_menu', 'add_info_fields');

function insert_info_fields()
{
  global $post;
  echo '<table>';
  echo '<tr><th>事業所：</th><td><input type="text" name="pic" value="' . get_post_meta($post->ID, 'pic', true) . '" size="50"></td></tr>';
  echo '<tr><th>所在地：</th><td><input type="text" name="address" value="' . get_post_meta($post->ID, 'address', true) . '" size="50"></td></tr>';
  echo '<tr><th>連絡先：</th><td><input type="text" name="contact" value="' . get_post_meta($post->ID, 'contact', true) . '" size="50"></td></tr>';
  echo '<tr><th>URL：</th><td><input type="text" name="webpage" value="' . get_post_meta($post->ID, 'webpage', true) . '" size="50"></td></tr>';
  echo '<tr><th>営業期間：</th><td><input type="text" name="duration" value="' . get_post_meta($post->ID, 'duration', true) . '" size="50"></td></tr>';
  echo '<tr><th>営業時間：</th><td><input type="text" name="hours" value="' . get_post_meta($post->ID, 'hours', true) . '" size="50"></td></tr>';
  echo '<tr><th>参考料金：</th><td><input type="text" name="price" value="' . get_post_meta($post->ID, 'price', true) . '" size="50"></td></tr>';
  echo '</table>';
}

function save_info_fields($postID)
{
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return $postID;
  } else if (isset($_POST['action']) && $_POST['action'] == 'inline-save') {
    return $postID;
  } else {
    if (!empty($_POST['pic'])) {
      update_post_meta($postID, 'pic', $_POST['pic']);
    } else {
      delete_post_meta($postID, 'pic');
    }
    if (!empty($_POST['address'])) {
      update_post_meta($postID, 'address', $_POST['address']);
    } else {
      delete_post_meta($postID, 'address');
    }
    if (!empty($_POST['contact'])) {
      update_post_meta($postID, 'contact', $_POST['contact']);
    } else {
      delete_post_meta($postID, 'contact');
    }
    if (!empty($_POST['webpage'])) {
      update_post_meta($postID, 'webpage', $_POST['webpage']);
    } else {
      delete_post_meta($postID, 'webpage');
    }
    if (!empty($_POST['duration'])) {
      update_post_meta($postID, 'duration', $_POST['duration']);
    } else {
      delete_post_meta($postID, 'duration');
    }
    if (!empty($_POST['hours'])) {
      update_post_meta($postID, 'hours', $_POST['hours']);
    } else {
      delete_post_meta($postID, 'hours');
    }
    if (!empty($_POST['price'])) {
      update_post_meta($postID, 'price', $_POST['price']);
    } else {
      delete_post_meta($postID, 'price');
    }
  }
}
add_action('save_post', 'save_info_fields');

function the_info_title()
{
  $title = get_the_title();
  $arr = preg_split('/\s\|\s/', $title, -1, PREG_SPLIT_NO_EMPTY);
  echo $arr[0];
}

function the_info_description()
{
  $title = get_the_title();
  $arr = preg_split('/\s\|\s/', $title, -1, PREG_SPLIT_NO_EMPTY);
  echo $arr[1];
}


// Plan

$plan_slug = 'plan';
$plan_name = '旅プラン';
$plan_icon = 'dashicons-universal-access';

function register_option_plan()
{
  global $plan_slug;
  global $plan_name;
  global $plan_icon;

  register_post_type($plan_slug, [
    'labels' => [
      'name' => $plan_name,
      'all_items' => $plan_name . '一覧'
    ],
    'public' => true,
    'menu_position' => 8,
    'menu_icon' => $plan_icon,
    'supports' => ['title', 'editor', 'excerpt', 'thumbnail', 'author'],
    'has_archive' => true,
    'rewrite' => [
      'slug' => $plan_slug,
      'with_front' => false,
      'hierarchical' => true
    ],
    'query_var' => true,
    'show_in_rest' => true
  ]);
}
add_action('init', 'register_option_plan');


// Column

$column_slug = 'column';
$column_name = '海辺のコラム';
$column_icon = 'dashicons-rss';

function register_option_column()
{
  global $column_slug;
  global $column_name;
  global $column_icon;

  global $column_cat_slug;
  global $column_cat_name;

  register_post_type($column_slug, [
    'labels' => [
      'name' => $column_name,
      'all_items' => $column_name . '一覧'
    ],
    'public' => true,
    'menu_position' => 9,
    'menu_icon' => $column_icon,
    'supports' => ['title', 'editor', 'excerpt', 'thumbnail', 'author'],
    'has_archive' => true,
    'rewrite' => [
      'slug' => $column_slug,
      'with_front' => false,
      'hierarchical' => true
    ],
    'query_var' => true,
    'show_in_rest' => true
  ]);
}
add_action('init', 'register_option_column');


function move_media()
{
  global $menu;
  $menu[19] = $menu[10];  //メディアの移動
  unset($menu[10]);
}
add_action('admin_menu', 'move_media');


// English

$english_slug = 'english';
$english_name = '英語ページ';
$english_icon = 'dashicons-admin-post';

function register_option_english()
{
  global $english_slug;
  global $english_name;
  global $english_icon;

  global $english_cat_slug;
  global $english_cat_name;

  register_post_type($english_slug, [
    'labels' => [
      'name' => $english_name,
      'all_items' => $english_name . '一覧'
    ],
    'public' => true,
    'menu_position' => 10,
    'menu_icon' => $english_icon,
    'supports' => ['title', 'editor', 'excerpt', 'thumbnail'],
    'has_archive' => true,
    'rewrite' => [
      'slug' => $english_slug,
      'with_front' => false,
      'hierarchical' => true
    ],
    'query_var' => true,
    'show_in_rest' => true
  ]);
}
add_action('init', 'register_option_english');


// User

function insert_user_profile($bool) {
  global $profileuser;
  echo '<tr><th><label for="person">肩書き</label></th><td><input type="text" name="person" value="' . $profileuser->person . '" size="20"></td></tr>';
  echo '<tr><th><label for="area">地区</label></th><td><input type="text" name="area" value="' . $profileuser->area . '" size="20"></td></tr>';
  echo '<tr><th>質問</th><td>';
  echo '<label for="q1">あなたの住んでいる地区はどんな場所ですか？なぜここに住んでいるのですか？</label><br><textarea name="q1" rows="2" cols="20">' . $profileuser->q1 . '</textarea><br>';
  echo '<label for="q2">普段どんな仕事（活動）をしていますか？</label><br><textarea name="q2" rows="2" cols="20">' . $profileuser->q2 . '</textarea><br>';
  echo '<label for="q3">越前海岸にないものはなんですか？</label><br><textarea name="q3" rows="2" cols="20">' . $profileuser->q3 . '</textarea><br>';
  echo '<label for="q4">越前海岸にしかないものはなんですか？</label><br><textarea name="q4" rows="2" cols="20">' . $profileuser->q4 . '</textarea><br>';
  echo '<label for="q5">この地域を形容詞で表すと？理由も教えてください。</label><br><textarea name="q5" rows="2" cols="20">' . $profileuser->q5 . '</textarea><br>';
  echo '<label for="q6">この地域が、もっとこうなったら面白いということはありますか？</label><br><textarea name="q6" rows="2" cols="20">' . $profileuser->q6 . '</textarea><br>';
  echo '<label for="q7">休日の過ごし方を教えてください。</label><br><textarea name="q7" rows="2" cols="20">' . $profileuser->q7 . '</textarea><br>';
  echo '<label for="q8">趣味と特技を教えてください。</label><br><textarea name="q8" rows="2" cols="20">' . $profileuser->q8 . '</textarea><br>';
  echo '<label for="q9">座右の銘を教えてください。</label><br><textarea name="q9" rows="2" cols="20">' . $profileuser->q9 . '</textarea><br>';
  echo '<label for="q10">ズバリ、この地域（福井市越前海岸）の魅力って何ですか？</label><br><textarea name="q10" rows="2" cols="20">' . $profileuser->q10 . '</textarea></td></tr>';
  echo '<tr><th><label for="instagrampage">インスタグラムページ</label></th><td><input type="text" name="instagrampage" value="' . $profileuser->instagrampage . '" size="20"></td></tr>';
  echo '<tr><th><label for="instagrambusinessid">インスタグラムID</label></th><td><input type="text" name="instagrambusinessid" value="' . $profileuser->instagrambusinessid . '" size="20"></td></tr>';
  echo '<tr><th><label for="accesstoken">アクセストークン</label></th><td><input type="text" name="accesstoken" value="' . $profileuser->accesstoken . '" size="80"></td></tr>';
  return $bool;
}
add_action('show_password_fields', 'insert_user_profile');

function save_user_profile($user_id, $prev_user_data) {
  update_user_meta($user_id, 'person', $_POST['person'], $prev_user_data->person);
  update_user_meta($user_id, 'area', $_POST['area'], $prev_user_data->area);
  update_user_meta($user_id, 'q1', $_POST['q1'], $prev_user_data->q1);
  update_user_meta($user_id, 'q2', $_POST['q2'], $prev_user_data->q2);
  update_user_meta($user_id, 'q3', $_POST['q3'], $prev_user_data->q3);
  update_user_meta($user_id, 'q4', $_POST['q4'], $prev_user_data->q4);
  update_user_meta($user_id, 'q5', $_POST['q5'], $prev_user_data->q5);
  update_user_meta($user_id, 'q6', $_POST['q6'], $prev_user_data->q6);
  update_user_meta($user_id, 'q7', $_POST['q7'], $prev_user_data->q7);
  update_user_meta($user_id, 'q8', $_POST['q8'], $prev_user_data->q8);
  update_user_meta($user_id, 'q9', $_POST['q9'], $prev_user_data->q9);
  update_user_meta($user_id, 'q10', $_POST['q10'], $prev_user_data->q10);
  update_user_meta($user_id, 'instagrampage', $_POST['instagrampage'], $prev_user_data->instagrampage);
  update_user_meta($user_id, 'instagrambusinessid', $_POST['instagrambusinessid'], $prev_user_data->instagrambusinessid);
  update_user_meta($user_id, 'accesstoken', $_POST['accesstoken'], $prev_user_data->accesstoken);
}
add_action('profile_update', 'save_user_profile', 10, 2);


// Breadcrumb

function insert_breadcrumb()
{
  echo '<div class="breadcrumb"><ul class="breadcrumb__items">';
  echo '<li class="breadcrumb__item">' .
    '<a href="' . home_url('/') . '">top</a>' .
    '</li>';

  if (is_home()) {
    // メインページ
    echo '<li class="breadcrumb__item">' . get_post_type_object('post')->label . '一覧' . '</li>';
  } else {
    // WPオブジェクト取得
    $wp_obj = get_queried_object();

    if (is_single()) {
      // 個別投稿ページ
      $postID = $wp_obj->ID;
      $post_type = $wp_obj->post_type;
      $post_title = $wp_obj->post_title;

      // カスタム投稿タイプを判定
      global $umitan_slug;
      global $umitan_cat_slug;
      global $info_slug;
      global $info_cat_slug;
      if ($post_type == 'post') {
        // 「記事」の場合、「カテゴリー」を取得
        $the_tax = 'category';
      } else if ($post_type == $umitan_slug) {
        // 「うみたん」の場合、「シーズン」を取得
        $the_tax = $umitan_cat_slug;
      } else if ($post_type == $info_slug) {
        // 「観光情報」の場合、「分類」を取得
        $the_tax = $info_cat_slug;
      } else {
        $the_tax = '';
      }

      // 投稿タイプ一覧を表示
      echo '<li class="breadcrumb__item">' .
      '<a href="' . get_post_type_archive_link($post_type) . '">' .
      get_post_type_object($post_type)->label . '一覧' .
      '</a>' .
      '</li>';

    // タクソノミーが紐づいていれば表示
    if ($the_tax != "") {
      $terms = get_the_terms($postID, $the_tax); // 投稿に紐づく全タームを取得

      if (!empty($terms)) {
        $term = $terms[count($terms) - 1];

        // 親タームがあれば表示
        if ($term->parent > 0) {
          // 親タームのIDリストを取得
          $parent_array = array_reverse(get_ancestors($term->term_id, $the_tax));
          foreach ($parent_array as $parent_id) {
            $parent_term = get_term($parent_id, $the_tax);
            echo '<li class="breadcrumb__item">' .
                '<a href="' . get_term_link($parent_id, $the_tax) . '">' .
                $parent_term->name .
                '</a>' .
                '</li>';
            }
          }

          // 最下層タームを表示
          echo '<li class="breadcrumb__item">' .
            '<a href="' . get_term_link($term->term_id, $the_tax) . '">' .
            $term->name .
            '</a>' .
            '</li>';
        }
      }

      // 自身
      if ($post_type == 'umitan' || $post_type == 'info') {
        $arr = preg_split('/\s\|\s/', $post_title, -1, PREG_SPLIT_NO_EMPTY);
        echo '<li class="breadcrumb__item">' . $arr[0] . '</li>';
      } else {
        echo '<li class="breadcrumb__item">' . $post_title . '</li>';
      }
    } else if (is_page()) {
      // 固定ページ
      $page_id = $wp_obj->ID;
      $page_title = $wp_obj->post_title;

      if ($wp_obj->post_parent > 0) {
        // 親ページ
        $parent_array = array_reverse(get_post_ancestors($page_id));
        foreach ($parent_array as $parent_id) {
          echo '<li class="breadcrumb__item">' .
            '<a href="' . get_permalink($parent_id) . '">' .
            get_the_title($parent_id) .
            '</a>' .
            '</li>';
        }
      }
      // 自身
      echo '<li class="breadcrumb__item">' . $page_title . '</li>';
    } else if (is_post_type_archive()) {
      // カスタム投稿アーカイブ
      echo '<li class="breadcrumb__item">' . $wp_obj->label . '一覧</li>';
    } else if (is_date()) {
      // 日付別
      $year = get_query_var('year');
      $month = get_query_var('monthnum');
      $day = get_query_var('day');

      if ($day > 0) {
        // 日別アーカイブ
        echo '<li class="breadcrumb__item"><a href="' . get_year_link($year) . '">' . $year . '年</a></li>' .
          '<li class="breadcrumb__item"><a href="' . get_month_link($year, $month) . '">' . $month . '月</a></li>' .
          '<li class="breadcrumb__item">' . $day . '日</li>';
      } else if ($month > 0) {
        // 月別アーカイブ
        echo '<li class="breadcrumb__item"><a href="' . get_year_link($year) . '">' . $year . '年</a></li>' .
          '<li class="breadcrumb__item">' . $month . '月</li>';
      } else {
        // 年別アーカイブ
        echo '<li class="breadcrumb__item">' . $year . '年</li>';
      }
    } else if (is_author()) {
      // 投稿者アーカイブ
      echo '<li class="breadcrumb__item">' . $wp_obj->display_name . ' の記事</li>';
    } else if (is_archive()) {
      // タームアーカイブ
      $term_id = $wp_obj->term_id;
      $term_name = $wp_obj->name;
      $tax_name = $wp_obj->taxonomy;

      // 「カテゴリー」、「タグ」の場合、「記事一覧」を表示
      if ($tax_name == 'category' || $tax_name == 'tag') {
        $post_type = 'post';
      }

      // 「シーズン」の場合、「うみたん」を表示
      global $umitan_slug;
      global $umitan_cat_slug;
      if ($tax_name == $umitan_cat_slug) {
        $post_type = $umitan_slug;
      }

      // 「分類」の場合、「観光情報」を表示
      global $info_slug;
      global $info_cat_slug;
      if ($tax_name == $info_cat_slug) {
        $post_type = $info_slug;
      }

      // 投稿タイプ一覧を表示
      echo '<li class="breadcrumb__item">' .
        '<a href="' . get_post_type_archive_link($post_type) . '">' .
        get_post_type_object($post_type)->label . '一覧' .
        '</a>';

      // 親ページがあれば順番に表示
      if ($wp_obj->parent > 0) {
        $parent_array = array_reverse(get_ancestors($term_id, $tax_name));
        foreach ($parent_array as $parent_id) {
          $parent_term = get_term($parent_id, $tax_name);
          echo '<li class="breadcrumb__item">' .
            '<a href="' . get_term_link($parent_id, $tax_name) . '">' .
            $parent_term->name .
            '</a>' .
            '</li>';
        }
      }
      // ターム自身の表示
      echo '<li class="breadcrumb__item">' . $term_name . '</li>';
    } else if (is_search()) {
      // 検索結果ページ
      echo '<li class="breadcrumb__item">「' . get_search_query() . '」で検索した結果</li>';
    } else if (is_404()) {
      // 404ページ
      echo '<li class="breadcrumb__item">404 Not Found</li>';
    }
  }

  echo '</ul></div>';
}


// Pagination

function insert_pagination()
{
  if (is_single()) {
    // 個別投稿ページの場合、前後の記事へ移動できる
    echo '<div class="pagination"><ul class="pagination__items">';

    // 前の記事があれば、前の記事へを表示
    $prev_post = get_previous_post();
    if (!empty($prev_post)) {
      echo '<li class="pagination__item--prev"><a href="' . get_permalink($prev_post->ID) . '"><span data-icon="ei-chevron-left"></span></a></li>';
    }

    // 次の記事があれば、次の記事へを表示
    $next_post = get_next_post();
    if (!empty($next_post)) {
      echo '<li class="pagination__item--next"><a href="' . get_permalink($next_post->ID) . '"><span data-icon="ei-chevron-right"></span></a></li>';
    }

    echo '</ul></div>';
  } else if (is_home() || is_archive() || is_search()) {
    // アーカイブページの場合、ページの切り替えができる
    global $wp_query;
    $pages = $wp_query->max_num_pages;
    $paged = get_query_var('paged') ?: 1;

    // ページ数が2ページ以上の場合から表示
    if ($pages > 1) {
      echo '<div class="pagination"><ul class="pagination__items">';

      // 最初へ
      if ($paged > 3) {
        echo '<li class="pagination__item"><a href="', get_pagenum_link(1), '">1</a></li>';
        if ($paged > 4) {
          echo '<li class="pagination__item--joint"><span>…</span></li>';
        }
      }
      // 前後へ
      for ($i = 1; $i <= $pages; $i++) {
        if ($i <= $paged + 2 && $i >= $paged - 2) {
          if ($paged === $i) {
            echo '<li class="pagination__item--active"><span>' . $i . '</span></li>';
          } else {
            echo '<li class="pagination__item"><a href="', get_pagenum_link($i), '">' . $i . '</a></li>';
          }
        }
      }
      // 最後へ
      if ($paged + 2 < $pages) {
        if ($paged  + 3 < $pages) {
          echo '<li class="pagination__item--joint"><span>…</span></li>';
        }
        echo '<li class="pagination__item"><a href="', get_pagenum_link($pages), '">' . $pages . '</a></li>';
      }

      echo '</ul></div>';
    }
  }
}


// Get my title

function get_my_title()
{
  // WPオブジェクト取得
  $wp_obj = get_queried_object();

  if (!is_home() && is_page()) {
    // 予約ページ
    if (is_page('booking-form') || is_page('booking-thanks')) return 'umitan';
    // 固定ページ
    return $wp_obj->post_name;
  } else if (is_post_type_archive()) {
    // カスタム投稿アーカイブ
    return $wp_obj->name;
  } else if ((is_single() && !is_singular('post'))) {
    // 予約ページ
    if (is_singular('booking-page')) return 'umitan';
    // カスタム投稿個別ページ
    return $wp_obj->post_type;;
  } else if (is_home() || is_date() || is_author() || is_search() || is_404() || is_single()) {
    // 投稿アーカイブ, 投稿個別ページ
    return 'blog';
  } else if (is_archive()) {
    // タームアーカイブ
    $tax_name = $wp_obj->taxonomy;
    // 「カテゴリー」、「タグ」の場合
    if ($tax_name == 'category' || $tax_name == 'tag') {
      return 'blog';
    }
    // 「シーズン」の場合
    global $umitan_slug;
    global $umitan_cat_slug;
    if ($tax_name == $umitan_cat_slug) {
      return $umitan_slug;
    }
    // 「分類」の場合
    global $info_slug;
    global $info_cat_slug;
    if ($tax_name == $info_cat_slug) {
      return $info_slug;
    }
  }
}


// Get my slug

function get_my_slug()
{
  // WPオブジェクト取得
  $wp_obj = get_queried_object();

  if (is_single()) {
    // 予約ページ
    if (is_singular('booking-page')) return 'umitan';
    // 個別投稿ページ
    return $wp_obj->post_type;
  } else if (!is_home() && is_page()) {
    // 予約ページ
    if (is_page('booking-form') || is_page('booking-thanks')) return 'umitan';
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
    // 「シーズン」の場合
    global $umitan_slug;
    global $umitan_cat_slug;
    if ($tax_name == $umitan_cat_slug) {
      return 'archive-' . $umitan_slug;
    }
    // 「分類」の場合
    global $info_slug;
    global $info_cat_slug;
    if ($tax_name == $info_cat_slug) {
      return 'archive-' . $info_slug;
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
  echo '<img src="' . get_template_directory_uri() . '/assets/no-image' . ($size === 'sm' ? '-sm' : '') . '.jpg">';
}


// Excerpt
// 抜粋文字数指定

function register_excerpt_length()
{
  return 64;
}
add_filter('excerpt_length', 'register_excerpt_length', 999);


// Copyright

$copyright = date('Y') . ' 福井市越前海岸盛り上げ隊';

function copyright()
{
  global $copyright;
  echo '&copy; ' . $copyright;
}
