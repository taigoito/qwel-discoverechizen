<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <div class="row">
        <div class="primary-col">
          <?php
          if (have_posts()) {
            while (have_posts()) {
              the_post();
              get_template_part('template-parts/contents/single');
            }
          }
          ?>
        </div><!-- .primary -->
        <div class="secondary-col">
          <?php get_template_part('template-parts/contents/info-cat'); ?>
        </div><!-- .secondary -->
      </div><!-- .row -->
    </div><!-- .container -->
  </main><!-- main -->
<?php get_footer(); ?>
