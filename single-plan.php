<?php get_header(); ?>
  <main id="main" class="main--plan">
    <div class="main--plan__container">
      <?php
      if (have_posts()) {
        while (have_posts()) {
          the_post();
      ?>
      <article class="article--plan">
        <header class="article--plan__header">
          <div class="article--plan__title-wrap">
            <div class="article--plan__title-inner">
              <span class="article--plan__person"><?php if (get_the_author_meta('person')) echo get_the_author_meta('person'); ?>
                <br><?php if (get_the_author_meta('last_name')) echo get_the_author_meta('last_name'); ?> <?php if (get_the_author_meta('first_name')) echo get_the_author_meta('first_name'); ?> さん</span>
              <h2 class="article--plan__title"><?php the_title(); ?></h2>
            </div>
          </div>
          <?php if (has_post_thumbnail()) { ?>
          <div class="article--plan__image">
            <?php the_post_thumbnail('full'); ?>
          </div>
          <?php } ?>
        </header>
        <div class="article--plan__main">
          <div class="article--plan__excerpt">
            <?php the_excerpt(); ?>
          </div>
          <div class="article--plan__content">
            <?php the_content(); ?>
          </div>
          <div class="article--plan__member">
            <?php get_template_part('parts/sections/member'); ?>
          </div>
        </div>
      </article>
      <?php } ?>
      <?php } ?>
    </div><!-- .main--plan__container -->
  </main><!-- .main--plan -->
<?php get_footer(); ?>
