      <div class="news">
        <?php if (has_post_thumbnail()) { ?>
        <div class="featured-image">
          <a href="<?php the_permalink(); ?>">
            <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail('large');
            } else {
              no_image('lg');
            }
            ?>
          </a>
        </div>
        <?php } ?>
        <div class="news-intro">
          <h3 class="news-intro-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <div class="news-intro-description">
            <?php the_excerpt(); ?>
          </div>
        </div>
      </div><!-- .news -->
