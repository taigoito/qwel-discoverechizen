      <li>
        <a href="<?php the_permalink(); ?>">
          <?php
          if (has_post_thumbnail()) {
            the_post_thumbnail('medium');
          } else {
            no_image();
          }
          ?>
        </a>
      </li>
