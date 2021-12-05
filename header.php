<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<?php
$adminbar_shown = is_admin_bar_showing();
?>
<body class="<?php echo $adminbar_shown ? 'has-adminbar' : '' ; ?>" data-scrolling-offset="0">
  <?php
  /**
   * Header (全ページ共通)
   * 
   */
  get_template_part('template-parts/header');
