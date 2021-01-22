          <div class="slider__item">
            <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail('medium');
            } else {
              no_image();
            }
            ?>
            <div class="slider__caption--hidden">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
          </div>