<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <?php
      if (have_posts()) {
        while (have_posts()) {
          the_post();
          the_content();
        }
      }
      ?>
    </div><!-- .container -->
  </main><!-- main -->
<?php get_footer(); ?>
