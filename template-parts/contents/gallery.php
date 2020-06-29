      <li>
        <?php if (empty(get_the_author_meta('instagrampage'))) { ?>
          <a href="https://www.instagram.com/echizen_moriagetai/">
        <?php } else { ?>
          <a href="<?php echo 'https://www.instagram.com/' . get_the_author_meta('instagrampage'); ?>">
        <?php } ?>
          <?php
          if (has_post_thumbnail()) {
            the_post_thumbnail('thumbnail');
          } else {
            no_image();
          }
          ?>
        </a>
      </li>
