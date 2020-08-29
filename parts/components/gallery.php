        <li  class="gallery__item">
          <a href="<?php the_permalink(); ?>">
            <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail('thumbnail');
            } else {
              no_image();
            }
            ?>
          </a>
        </li>