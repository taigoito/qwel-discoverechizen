<?php

/**
 * 定数定義
 */

// 子テーマのパス, URI
if (!defined('DE_CHILD_DIR')) {
	define('DE_CHILD_DIR', get_stylesheet_directory());
}
if (!defined('DE_CHILD_URI')) {
	define('DE_CHILD_URI', get_stylesheet_directory_uri());
}

// テーマディレクトリからデフォルト画像までのパス
$file = '/img_default.jpg';

if (!is_child_theme()) {
  // 子テーマを持たない場合
  if (!defined('DE_DEFAULT_IMAGE')) {
    define('DE_DEFAULT_IMAGE', DE_THEME_URI . $file);
  }
} else {
  // 子テーマを持つ場合
  if (file_exists(DE_CHILD_DIR . $file)) {
    // 画像ファイルがあれば
    if (!defined('DE_DEFAULT_IMAGE')) {
      define('DE_DEFAULT_IMAGE', DE_CHILD_URI . $file);
    }
  } else {
    if (!defined('DE_DEFAULT_IMAGE')) {
      define('DE_DEFAULT_IMAGE', DE_THEME_URI . $file);
    }
  }
}
