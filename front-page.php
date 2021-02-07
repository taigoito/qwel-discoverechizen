<?php get_header(); ?>
  <main id="main" class="main">
    <?php
    $array = ['news', 'umitan', 'info', 'plan', 'blog', 'location', 'contact'];
    foreach ($array as $value) {
      get_template_part('parts/sections/' . $value);
    }
    ?>
  </main><!-- .main -->
<?php get_footer(); ?>
