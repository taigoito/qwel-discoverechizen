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
                get_template_part('parts/layout/article');
              }
            }
            ?>
          </div>
        </div>
        <ul class="main--umitan__icons">
          <li class="main--umitan__icon"><a href="<?php echo get_term_link('spring', 'umitan-cat'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/svg/umitan_icon_spring.svg'; ?>"></a></li>
          <li class="main--umitan__icon"><a href="<?php echo get_term_link('summer', 'umitan-cat'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/svg/umitan_icon_summer.svg'; ?>"></a></li>
          <li class="main--umitan__icon"><a href="<?php echo get_term_link('autumn', 'umitan-cat'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/svg/umitan_icon_autumn.svg'; ?>"></a></li>
          <li class="main--umitan__icon"><a href="<?php echo get_term_link('winter', 'umitan-cat'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/svg/umitan_icon_winter.svg'; ?>"></a></li>
          <li class="main--umitan__icon"><a href="<?php echo get_term_link('allseason', 'umitan-cat'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/svg/umitan_icon_allseason.svg'; ?>"></a></li>
          <li class="main--umitan__icon"><a href="<?php echo get_post_type_archive_link('umitan'); ?>""><img src="<?php echo get_template_directory_uri() . '/assets/svg/umitan_all.svg'; ?>"></a></li>
        </ul>
      </div>
    </div>
  </main><!-- .main--umitan -->
<?php get_footer(); ?>
