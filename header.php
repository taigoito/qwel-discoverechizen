<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<?php
  $adminbar_shown    = is_admin_bar_showing();
  $header_disable    = \Qwel::get_data('header', 'header_disable');
  $header_height     = \Qwel::get_data('header', 'site_brand_height') + 24;
  $scrolling_offset  = $header_disable ? 0 : $header_height;
?>
<body class="<?php echo $adminbar_shown ? 'has-adminbar' : '' ; ?>" data-scrolling-offset="<?php echo $scrolling_offset; ?>">
  <?php
  /**
   * Header (全ページ共通)
   * カスタマイザーのヘッダー設定によって分岐
   */
  if ($header_disable) {
    /**
     * Site brand
     */
    get_template_part('template-parts/siteBrand');
    /**
     * G Nav (非表示)
     */
    get_template_part('template-parts/gNav');
  } else {
    /**
     * 通常のヘッダー
     */
    get_template_part('template-parts/header');
  }
