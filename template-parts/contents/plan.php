      <div class="slider-item">
        <?php
        if (has_post_thumbnail()) {
          the_post_thumbnail('medium');
        } else {
          no_image();
        }
        ?>
        <div class="slider-item-caption">
          <p class="plan-person"><?php if (get_the_author_meta('person')) echo get_the_author_meta('person'); ?> <?php if (get_the_author_meta('last_name')) echo get_the_author_meta('last_name'); ?> <?php if (get_the_author_meta('last_name')) echo get_the_author_meta('first_name'); ?> さんのおすすめ</p>
          <p class="plan-title"><?php the_title(); ?></p>
          <p><a href="<?php the_permalink(); ?>">&gt; もっと詳しく</a></p>
        </div>
      </div>
