          <article class="post">
            <div class="post-inner">
              <div class="post-intro">
                <h4 class="post-title"><?php the_title(); ?></h4>
                <div class="post-excerpt"><?php the_excerpt(); ?></div>
                <?php if (!empty(get_post_meta($post->ID, 'address', true))) { ?>
                  <p><?php echo get_post_meta($post->ID, 'address', true); ?></p>
                <?php } ?>
                <?php if (!empty(get_post_meta($post->ID, 'contact', true))) { ?>
                  <p><?php echo get_post_meta($post->ID, 'contact', true); ?></p>
                <?php } ?>
                <p><a href="<?php the_permalink(); ?>">&gt; 詳しく見る</a></p>
              </div>
              <?php if (has_post_thumbnail()) { ?>
                <div class="featured-image">
                  <?php the_post_thumbnail('medium'); ?>
                </div>
              <?php } ?>
            </div>
          </article>