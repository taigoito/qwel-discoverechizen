<?php get_header(); ?>
  <main id="main">
    <div class="wrapper wave">
      <div class="container">
        <div class="row">
          <div class="discover-icons">
            <ul class="row">
              <li class="discover-icon"><a href="<?php echo get_term_link('spring', 'umitan-cat'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/svg/umitan_icon_spring.svg'; ?>"></a></li>
              <li class="discover-icon"><a href="<?php echo get_term_link('summer', 'umitan-cat'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/svg/umitan_icon_summer.svg'; ?>"></a></li>
              <li class="discover-icon"><a href="<?php echo get_term_link('autumn', 'umitan-cat'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/svg/umitan_icon_autumn.svg'; ?>"></a></li>
              <li class="discover-icon"><a href="<?php echo get_term_link('winter', 'umitan-cat'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/svg/umitan_icon_winter.svg'; ?>"></a></li>
              <li class="discover-icon"><a href="<?php echo get_term_link('allseason', 'umitan-cat'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/svg/umitan_icon_allseason.svg'; ?>"></a></li>
              <li class="discover-icon"><a href="<?php echo get_post_type_archive_link('umitan'); ?>""><img src="<?php echo get_template_directory_uri() . '/assets/svg/umitan_all.svg'; ?>"></a></li>
            </ul>
          </div>
          <?php
          if (have_posts()) {
            while (have_posts()) {
              the_post();
              get_template_part('template-parts/contents/archive-discover');
            }
          } else {
            echo '只今コンテンツを準備中です。';
          }
          ?>
        </div>
        <?php if (!is_singular()) insert_pagination(); ?>
      </div><!-- .container -->
    </div><!-- .wrapper -->
  </main><!-- main -->
<?php get_footer(); ?>
