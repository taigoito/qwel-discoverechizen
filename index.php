<?php get_header(); ?>
  <main id="main">
    <header id="page-header">
      <h1 id="page-title" class="screen-reader-text"><?php echo get_my_title(); ?></h1>
    </header>
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
          <?php if (!is_singular()) insert_pagination(); ?>
        </div><!-- .primary -->
        <?php if (!is_page()) { ?>
        <div class="secondary-col">
          <?php dynamic_sidebar('blog-sidebar'); ?>
        </div><!-- .secondary -->
        <?php } ?>
      </div>
    </div>
  </main><!-- main -->
<?php get_footer(); ?>
