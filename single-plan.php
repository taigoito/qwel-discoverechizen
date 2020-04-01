<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <div class="row">
        <div class="primary-col">
        <?php
          if (have_posts()) {
            while (have_posts()) {
              the_post();
        ?>
          <article class="plan">
            <header class="plan-header">
              <div class="plan-title-wrap">
                <div class="plan-inner">
                  <span class="plan-author"><?php if (get_the_author_meta('person')) echo get_the_author_meta('person'); ?>
                    <br><?php if (get_the_author_meta('last_name')) echo get_the_author_meta('last_name'); ?> <?php if (get_the_author_meta('first_name')) echo get_the_author_meta('first_name'); ?> さん</span>
                  <h2 class="plan-title"><?php the_title(); ?></h2>
                </div>
              </div>
              <?php if (has_post_thumbnail()) { ?>
              <div class="featured-image">
                <?php the_post_thumbnail('full'); ?>
              </div>
              <?php } ?>
            </header>
            <div class="plan-body">
              <div class="plan-excerpt">
                <?php the_excerpt(); ?>
              </div>
              <div class="plan-content">
                <?php the_content(); ?>
              </div>
              <div class="plan-member">
                <?php get_template_part('template-parts/contents/member'); ?>
              </div>
            </div>
          </article>
        <?php } ?>
        <?php } ?>
        </div><!-- .primary -->
      </div><!-- .row -->
    </div><!-- .container -->
  </main><!-- main -->
<?php get_footer(); ?>
