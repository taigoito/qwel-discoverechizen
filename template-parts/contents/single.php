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
          <?php if (is_singular() && !is_singular('plan') && has_post_thumbnail()) { ?>
          <div class="featured-image">
            <?php the_post_thumbnail('full'); ?>
          </div>
          <?php } else if (!is_singular('plan') && has_post_thumbnail()) { ?>
          <div class="featured-image">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('full'); ?>
            </a>
          </div>
          <?php } else if (is_singular() && !is_singular('plan')) { ?>
          <div class="featured-image">
            <?php no_image('lg'); ?>
          </div>
          <?php } else if (!is_singular('plan')) { ?>
          <div class="featured-image">
            <a href="<?php the_permalink(); ?>">
              <?php no_image('lg'); ?>
            </a>
          </div>
          <?php } ?>
          <div class="post-excerpt">
            <?php the_excerpt(); ?>
          </div>
          <?php if (is_single()) { ?>
            <?php the_content(); ?>
          <?php } ?>
          <?php if (is_singular('umitan') || is_singular('info')) { ?>
            <?php get_template_part('template-parts/contents/information'); ?>
          <?php } ?>
          <?php if (is_singular('plan')) { ?>
            <?php get_template_part('template-parts/contents/member'); ?>
          <?php } ?>
        </div>
        <?php if (is_singular('post')) { ?>
          <aside class="post-navigation">
            <h2 class="navigation-title screen-reader-text">投稿ナビゲーション</h2>
            <?php insert_pagination(); ?>
          </aside>
        <?php } ?>
      </article>
