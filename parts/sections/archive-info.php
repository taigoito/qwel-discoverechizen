          <?php
            $term = get_queried_object();
            if (is_tax('info-cat') && $term->term_id < 100) {
          ?>
          <div class="archive-info-header">
            <div class="archive-info-header__intro">
            <?php if ($term->term_id < 50) { ?>
              <h3 class="archive-info-header__heading"><img src="<?php echo get_template_directory_uri() . '/assets/svg/info_' . $term->slug . '.svg'; ?>"></h3>
            <?php } else if ($term->term_id < 100) { ?>
              <h3 class="archive-info-header__heading"><?php echo $term->name; ?></h3>
            <?php } ?>
            <p class="archive-info-header__text"><?php echo $term->description; ?></p>
            </div>
            <div class="archive-info-header__image">
              <img src="<?php echo get_template_directory_uri() . '/assets/svg/info_illust_' . $term->slug . '.svg'; ?>">
            </div>
          </div>
          <?php } ?>
          <div class="archive-info-main">
            <?php
            if (have_posts()) {
              while (have_posts()) {
                the_post();
                get_template_part('parts/sections/archive-info-item');
              } 
            }
            ?>
            <?php insert_pagination(); ?>
          </div>
