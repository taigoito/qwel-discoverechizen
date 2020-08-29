          <article class="archive-info-item">
            <div class="archive-info-item__inner">
              <div class="archive-info-item__intro">
                <h4 class="archive-info-item__title"><?php the_info_title(); ?></h4>
                <div class="archive-info-item__textbox"><?php the_excerpt(); ?></div>
                <?php if (!empty(get_post_meta($post->ID, 'address', true))) { ?>
                  <div class="archive-info-item__textbox"><?php echo get_post_meta($post->ID, 'address', true); ?></div>
                <?php } ?>
                <?php if (!empty(get_post_meta($post->ID, 'contact', true))) { ?>
                  <div class="archive-info-item__textbox"><?php echo get_post_meta($post->ID, 'contact', true); ?></div>
                <?php } ?>
                <div class="archive-info-item__textbox"><a href="<?php the_permalink(); ?>">&gt; 詳しく見る</a></div>
              </div>
              <?php if (has_post_thumbnail()) { ?>
                <div class="archive-info-item__image">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium'); ?>
                  </a>
                </div>
              <?php } ?>
            </div>
          </article>