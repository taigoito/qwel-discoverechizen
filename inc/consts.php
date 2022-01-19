<?php

/**
 * 定数定義
 */

// 子テーマのパス, URI
if (!defined('QWEL_CHILD_DIR')) {
	define('QWEL_CHILD_DIR', get_stylesheet_directory());
}
if (!defined('QWEL_CHILD_URI')) {
	define('QWEL_CHILD_URI', get_stylesheet_directory_uri());
}

// テーマディレクトリからデフォルト画像までのパス
$file = '/img_default.jpg';

if (!is_child_theme()) {
  // 子テーマを持たない場合
  if (!defined('QWEL_DEFAULT_IMAGE')) {
    define('QWEL_DEFAULT_IMAGE', QWEL_THEME_URI . $file);
  }
} else {
  // 子テーマを持つ場合
  if (file_exists(QWEL_CHILD_DIR . $file)) {
    // 画像ファイルがあれば
    if (!defined('QWEL_DEFAULT_IMAGE')) {
      define('QWEL_DEFAULT_IMAGE', QWEL_CHILD_URI . $file);
    }
  } else {
    if (!defined('QWEL_DEFAULT_IMAGE')) {
      define('QWEL_DEFAULT_IMAGE', QWEL_THEME_URI . $file);
    }
  }
}
