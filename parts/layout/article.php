      <article class="article">
        <?php if (!is_page()) { ?>
        <header class="article__header">
          <?php if (is_home() || is_singular('post') || is_post_type_archive('post') || is_category() || is_tag() || is_date() || is_author() || is_search()) { ?>
          <div class="article__date"><?php the_time('Y.m.d'); ?></div>
          <?php } ?>
          <?php if (is_single()) { ?>
            <?php if (is_singular('umitan')) { ?>
            <h2 class="article__title--umitan"><span><?php the_umitan_description(); ?></span>
              <br><?php the_umitan_title(); ?></h2>
            <?php } else { ?>
            <h2 class="article__title"><?php the_title(); ?></h2>
            <?php } ?>
          <?php } else { ?>
            <h2 class="article__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <?php } ?>
        </header>
        <?php } ?>
        <div class="article__content">
          <?php if (is_single() && !is_singular('plan')) { ?>
            <?php if (has_post_thumbnail()) { ?>
            <div class="article__image">
              <?php the_post_thumbnail('large'); ?>
            </div>
            <?php } else { ?>
            <div class="article__image">
              <?php no_image('lg'); ?>
            </div>
            <?php } ?>
          <?php } else if (!is_singular('plan')) { ?>
            <?php if (has_post_thumbnail()) { ?>
            <div class="article__image"><a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('large'); ?>
            </a></div>
            <?php } else { ?>
            <div class="article__image"><a href="<?php the_permalink(); ?>">
              <?php no_image('lg'); ?>
            </a></div>
            <?php } ?>
          <?php } ?>
          <?php the_excerpt(); ?>
          <img class="article__border" src="<?php echo get_template_directory_uri() . '/assets/svg/border.svg'; ?>">
          <?php if (is_single() || is_page()) the_content(); ?>
        </div>
        <?php if (is_singular('post')) { ?>
        <aside class="aside">
          <h2 class="aside__title screen-reader-text">投稿ナビゲーション</h2>
          <?php insert_pagination(); ?>
        </aside>
        <?php } ?>
      </article>
