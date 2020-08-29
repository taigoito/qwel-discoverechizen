      <article class="article">
        <header class="article__header">
          <?php if (is_singular('post')) { ?>
          <div class="article__date"><?php the_time('Y.m.d'); ?></div>
          <?php } ?>
          <h2 class="article__title"><?php the_title(); ?></h2>
        </header>
        <div class="article__content">
          <?php if (has_post_thumbnail()) { ?>
          <div class="article__image">
            <?php the_post_thumbnail('large'); ?>
          </div>
          <?php } ?>
          <?php the_excerpt(); ?>
          <?php the_content(); ?>
        </div>
        <aside class="aside">
          <h2 class="aside__title screen-reader-text">投稿ナビゲーション</h2>
          <?php if (is_singular('post')) insert_pagination(); ?>
        </aside>
      </article>
