        <div class="one-col__container">
          <div class="one-col__image">
            <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail('full');
            } else {
              no_image('lg');
            }
            ?>
          </div>
          <div class="one-col__textbox">
            <div class="one-col__intro">
              <?php the_excerpt(); ?>
            </div>
            <a href="<?php the_permalink(); ?>">&gt; 私たちと越前海岸について もっと詳しく</a>
          </div>
        </div>