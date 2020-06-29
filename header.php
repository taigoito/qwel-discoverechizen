<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_id(); ?>>
  <noscript>
    <p class="no-support">このWebページはJavaScriptを有効にすることで正常に動作します。
      <br>JavaScriptを有効にして再度ご来訪ください。</p>
  </noscript>
  <script src="<?php echo get_template_directory_uri() . '/js/preloader.js'; ?>"></script>
  <script>
    const preloader = new Preloader({
      backgroundColor: 'hsl(195, 100%, 42%)',
      img: '/discoverechizen/wp/wp-content/themes/discoverechizen/assets/svg/top_logo2.svg',
      terminateTime: 5000
    });
  </script>

  <header id="<?php echo is_front_page() ? 'hero' : 'header'; ?>">
    <?php
    if (is_front_page()) {
      get_template_part('template-parts/header/hero');
    } else {
      get_template_part('template-parts/header/header');
    }
    ?>
  </header><!-- #<?php echo is_front_page() ? 'hero' : 'header'; ?> -->
  <?php get_template_part('template-parts/header/nav'); ?>
  <?php if (!is_front_page()) get_template_part('template-parts/header/breadcrumb'); ?>