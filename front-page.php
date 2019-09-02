<?php get_header(); ?>
  <main id="main">
    <?php
    $array = ['works', 'about', 'news', 'gallery', 'access', 'contact'];
    foreach ($array as $value) {
      get_template_part('template-parts/sections/' . $value);
    }
    ?>
  </main><!-- #index-main -->
  <div id="cover-image" style="background-image: url(<?php header_image(); ?>);"></div>
<?php get_footer(); ?>
