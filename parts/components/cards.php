      <div class="cards__item">
        <a class="cards__imagebox" href="<?php the_permalink(); ?>">
          <div class="cards__image">
            <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail('medium');
            } else {
              no_image('lg');
            }
            ?>
          </div>
        </a>
        <div class="cards__title">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </div>
      </div>
