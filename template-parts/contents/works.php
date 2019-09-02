      <div class="slider-item">
        <?php
        if (has_post_thumbnail()) {
          the_post_thumbnail('medium');
        } else {
          no_image();
        }
        ?>
        <div class="slider-item-caption">
          <?php the_title(); ?><a href="<?php the_permalink(); ?>"> [詳細]</a>
        </div>
      </div>
