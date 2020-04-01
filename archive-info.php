<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <div class="row">
        <div class="primary-col">
          <?php
            $term = get_queried_object();
            if (is_tax('info-cat') && $term->term_id < 50) {
          ?>
          <div id="<?php echo 'info-' . $term->slug; ?>" class="info">
            <div class="row">
              <div class="info-intro">
                <h3><img src="<?php echo get_template_directory_uri() . '/assets/svg/info_' . $term->slug . '.svg'; ?>"></h3>
                <p><?php echo $term->description; ?></p>
              </div>
              <div class="feature-image">
                <img src="<?php echo get_template_directory_uri() . '/assets/svg/info_illust_' . $term->slug . '.svg'; ?>">
              </div>
            </div>
          </div>
          <?php } ?>
          <?php
          if (have_posts()) {
            while (have_posts()) {
              the_post();
              get_template_part('template-parts/contents/archive-info');
            } 
          } else {
            echo '只今コンテンツを準備中です。';
          }
          ?>
          <?php if (!is_singular()) insert_pagination(); ?>
        </div><!-- .primary -->
        <div class="secondary-col">
          <?php get_template_part('template-parts/contents/info-cat'); ?>
        </div><!-- .secondary -->
      </div><!-- .row -->
    </div><!-- .container -->
  </main><!-- main -->
<?php get_footer(); ?>
