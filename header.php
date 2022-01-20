<!doctype html>
<html <?php language_attributes(); ?>>

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_id(); ?> data-scrolling-offset="-48">
  <noscript>
    <p class="no-support">このWebページはJavaScriptを有効にすることで正常に動作します。
      <br>JavaScriptを有効にして再度ご来訪ください。</p>
  </noscript>
  <script src="<?php echo get_template_directory_uri() . '/modules/preloader.js'; ?>"></script>
  <script>
    const preloader = new Preloader({
      backgroundColor: 'hsl(195, 100%, 42%)',
      img: '/discoverechizen/wp/wp-content/themes/discoverechizen/assets/svg/top_logo2.svg',
      terminateTime: 5000
    });
  </script>

  <?php
  $class = is_front_page() ? 'hero'
    : ((is_post_type_archive('umitan') || is_tax('umitan-cat') || is_singular('umitan')
      || is_singular('booking-page') || is_page('booking-form') || is_page('booking-thanks')) ? 'site-header--umitan'
    : ((is_post_type_archive('plan') || is_singular('plan')) ? 'site-header--plan'
    : 'site-header'));
  ?>
  <header id="<?php echo is_front_page() ? 'hero' : 'site-header'; ?>" class="<?php echo $class; ?>">
    <?php
    if (is_front_page()) {
      get_template_part('parts/sections/hero');
    } else {
      get_template_part('parts/layout/site-header');
    }
    ?>
  </header><!-- .<?php echo $class; ?> -->
  <div class="brand-home">
    <a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/svg/top_logo1.svg'; ?>"></a>
  </div>
  <button class="nav-toggler" type="button" data-toggle="slidebar">
    <img src="<?php echo get_template_directory_uri() . '/assets/svg/top_menu.svg'; ?>">
  </button>
  <?php if (!is_front_page()) insert_breadcrumb(); ?>
