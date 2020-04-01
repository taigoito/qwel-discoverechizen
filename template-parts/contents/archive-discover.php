          <div class="discover">
            <div class="discover-inner">
              <div class="featured-image">
                <?php
                  if (has_post_thumbnail()) {
                    the_post_thumbnail('medium');
                  } else {
                    no_image('lg');
                  }
                ?>
              </div>
              <p class="discover-eventdate">[<?php echo get_post_meta($post->ID, 'eventdate', true); ?>]</p>
              <h4 class="discover-title"><?php echo get_post_meta($post->ID, 'item', true); ?></h4>
              <p class="discover-subtitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
              <div class="discover-excerpt"><?php the_excerpt(); ?></div>
              <ul class="discover-terms">
                <?php
                $terms = get_the_terms($post->ID, 'umitan-cat');
                foreach ($terms as $term) {
                  if ($term->term_id < 150) {
                    echo '<li><a href="' . get_term_link($term->slug, 'umitan-cat') . '"><img src="' . get_template_directory_uri() . '/assets/svg/umitan_icon_s_' . $term->slug . '.svg"></a></li> ';
                  }
                }
                ?>
              </ul>
            </div>
          </div>