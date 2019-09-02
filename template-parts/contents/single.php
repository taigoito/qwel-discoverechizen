      <div class="post">
        <?php if (is_home() || is_singular('post') || is_post_type_archive('post') || is_category() || is_tag() || is_date() || is_author() || is_search()) { ?>
        <div class="post-date"><?php the_time('Y.m.d'); ?></div>
        <?php } ?>
        <?php if (is_single()) { ?>
        <h2 class="post-title"><?php the_title(); ?></h2>
        <?php } else if (!is_page()) { ?>
        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php } ?>
        <?php if (is_singular() && has_post_thumbnail()) { ?>
        <div class="post-image">
          <?php the_post_thumbnail('large'); ?>
        </div>
        <?php } else if (has_post_thumbnail()) { ?>
        <div class="post-image">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('large'); ?>
          </a>
        </div>
        <?php } ?>
        <div class="post-content">
          <?php the_content(); ?>
        </div>
        <?php if (is_singular('post')) insert_pagination(); ?>
      </div>
