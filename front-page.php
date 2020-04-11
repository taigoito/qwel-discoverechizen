<?php get_header(); ?>
  <main id="main">
    <?php
    //$array = ['news', 'about', 'discover', 'info', 'plan', 'blog', 'gallery', 'movie', 'access', 'contact'];
    $array = ['news', 'about', 'discover', 'info', 'plan', 'movie', 'access', 'contact'];
    foreach ($array as $value) {
      get_template_part('template-parts/sections/' . $value);
    }
    ?>
  </main><!-- #index-main -->
<?php get_footer(); ?>
