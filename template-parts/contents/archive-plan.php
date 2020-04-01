        <article class="post">
          <div class="featured-image">
            <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail('medium');
            } else {
              no_image('sm');
            }
          ?>
          <h2 class="post-title"><?php if (get_the_author_meta('person')) echo get_the_author_meta('person'); ?>
            <?php if (get_the_author_meta('last_name')) echo get_the_author_meta('last_name'); ?> <?php if (get_the_author_meta('first_name')) echo get_the_author_meta('first_name'); ?> さんのおすすめ
            <br><?php the_title(); ?></h2>
            <a href="<?php the_permalink(); ?>">&gt; もっと詳しく</a>
        </article>