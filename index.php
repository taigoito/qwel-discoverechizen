<?php get_header(); ?>
  <main id="main" class="main">
    <div class="main__container">
      <div class="main__inner">
        <div class="main__primary">
          <?php if (is_404()) { ?>
          <p>お探しのページは見つかりませんでした</p>
          <?php } ?>
          <?php 
          if (have_posts()) {
            while (have_posts()) {
              the_post();
              get_template_part('parts/layout/article');
            }
          }
          ?>
          <?php if (is_archive()) insert_pagination(); ?>
        </div><!-- .main__primary -->
        <?php if (is_home() || is_singular('post') || is_post_type_archive('post') || is_category() || is_tag() || is_date() || is_author() || is_search()) { ?>
        <div class="main__secondary">
          <?php dynamic_sidebar('blog-sidebar'); ?>
        </div><!-- .main__secondary -->
        <?php } ?>
      </div><!-- .main__inner -->
    </div><!-- .main__container -->
  </main><!-- .main -->
<?php get_footer(); ?>
