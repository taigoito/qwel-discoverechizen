<?php get_header(); ?>
  <main id="main" class="main--umitan">
    <div class="main--umitan__wrapper wave">
      <div class="main--umitan__container">
        <div class="main--umitan__article-wrap">
          <div class="main--umitan__article-container">
            <?php 
            if (have_posts()) {
              while (have_posts()) {
                the_post();
                the_content();
              }
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </main><!-- .main--umitan -->
<?php get_footer(); ?>
