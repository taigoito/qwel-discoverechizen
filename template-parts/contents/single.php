      <article class="post">
        <header class="post-header">
          <?php if (is_home() || is_singular('post') || is_post_type_archive('post') || is_category() || is_tag() || is_date() || is_author() || is_search()) { ?>
          <div class="post-date"><?php the_time('Y.m.d'); ?></div>
          <?php } ?>
          <?php if (is_single()) { ?>
          <h2 class="post-title"><?php the_title(); ?></h2>
          <?php } else { ?>
          <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <?php } ?>
        </header>
        <div class="post-content">
          <?php if (is_singular() && has_post_thumbnail()) { ?>
          <div class="featured-image">
            <?php the_post_thumbnail('large'); ?>
          </div>
          <?php } else if (has_post_thumbnail()) { ?>
          <div class="featured-image">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('large'); ?>
            </a>
          </div>
          <?php } ?>
          <?php the_excerpt(); ?>
          <?php if (is_single()) the_content(); ?>
        </div>
        <aside class="post-nav">
          <h2 class="nav-title screen-reader-text">投稿ナビゲーション</h2>
          <?php if (is_singular('post')) insert_pagination(); ?>
        </aside>
      </article>
