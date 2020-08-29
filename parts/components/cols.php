        <div class="cols__col--size_5">
          <div class="cols__image">
            <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail('large');
            } else {
              no_image('lg');
            }
            ?>
          </div>
          <div class="cols__textbox">
            <h3 class="cols__heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="cols__intro">
              <?php the_excerpt(); ?>
            </div>
          </div>
        </div>
        