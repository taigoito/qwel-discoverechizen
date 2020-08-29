<?php get_header(); ?>
  <main id="main" class="main">
    <div class="main__container">
      <div class="main__inner">
        <div class="main__primary">
          <?php 
          if (have_posts()) {
            while (have_posts()) {
              the_post();
              get_template_part('parts/layout/article');
            }
          }
          ?>
        </div><!-- .main__primary -->
        <div class="main__secondary">
          <?php get_template_part('parts/sections/archive-info-sidebar'); ?>
        </div><!-- .main__secondary -->
      </div><!-- .main__inner -->
    </div><!-- .main__container -->
  </main><!-- .main -->
<?php get_footer(); ?>
