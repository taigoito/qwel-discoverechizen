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
          } else {
            echo '只今コンテンツを準備中です。';
          }
          ?>
          <?php if (!is_singular()) insert_pagination(); ?>
        </div><!-- .primary -->
        <?php if (is_archive() || is_single()) { ?>
        <div class="secondary-col">
          <?php dynamic_sidebar('blog-sidebar'); ?>
        </div><!-- .secondary -->
        <?php } ?>
      </div><!-- .row -->
    </div><!-- .container -->
  </main><!-- main -->
<?php get_footer(); ?>
