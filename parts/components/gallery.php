        <li  class="gallery__item">
          <a href="https://www.instagram.com/discoverechizen/" target="_blank">
            <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail('thumbnail');
            } else {
              no_image();
            }
            ?>
          </a>
        </li>