<?php get_header(); ?>
  <main id="main" class="main">
    <?php
    $array = ['about', 'news', 'umitan', 'info', 'plan', 'photos', 'location', 'contact'];
    foreach ($array as $value) {
      get_template_part('parts/sections/' . $value);
    }
    ?>
  </main><!-- .main -->
<?php get_footer(); ?>