          <div class="umitan">
            <div class="umitan-inner">
              <div class="featured-image">
                <a href="<?php the_permalink(); ?>">
                  <?php
                    if (has_post_thumbnail()) {
                      the_post_thumbnail('medium');
                    } else {
                      no_image('lg');
                    }
                  ?>
                </a>
              </div>
              <p class="umitan-eventdate"><?php echo get_post_meta($post->ID, 'eventdate', true); ?></p>
              <h4 class="umitan-title"><?php the_umitan_description(); ?></h4>
              <p class="umitan-subtitle"><a href="<?php the_permalink(); ?>"><?php the_umitan_title(); ?></a></p>
              <div class="umitan-excerpt"><?php the_excerpt(); ?></div>
              <ul class="umitan-terms">
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