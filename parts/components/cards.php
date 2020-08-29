          <div class="cards__item">
            <div class="cards__contentbox">
              <div class="cards__image">
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
              <p class="cards__eventdate"><?php echo get_post_meta($post->ID, 'eventdate', true); ?></p>
              <h4 class="cards__title"><?php the_umitan_description(); ?></h4>
              <p class="cards__subtitle"><a href="<?php the_permalink(); ?>"><?php the_umitan_title(); ?></a></p>
              <div class="cards__excerpt"><?php the_excerpt(); ?></div>
              <ul class="cards__terms">
                <?php
                $terms = get_the_terms($post->ID, 'umitan-cat');
                foreach ($terms as $term) {
                  if ($term->term_id < 150) {
                    echo '<li class="cards__term"><img src="' . get_template_directory_uri() . '/assets/svg/umitan_icon_s_' . $term->slug . '.svg"></li> ';
                  }
                }
                ?>
              </ul>
            </div>
          </div>
