      <div class="work">
        <div class="featured-image">
          <div class="img-clip">
            <div class="img-clip-inner">
              <a href="<?php the_permalink(); ?>">
                <?php
                if (has_post_thumbnail()) {
                  the_post_thumbnail('medium');
                } else {
                  no_image('lg');
                }
                ?>
              </a>
            </div>
          </div>
        </div>
        <div class="work-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
      </div>
