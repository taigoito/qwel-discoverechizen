      <div class="blog">
        <div class="row">
          <div class="featured-image">
            <a href="<?php the_permalink(); ?>">
              <?php
              if (has_post_thumbnail()) {
                the_post_thumbnail('thumbnail');
              } else {
                no_image();
              }
              ?>
            </a>
          </div>
          <div class="blog-intro">
            <div class="blog-intro-container">
              <div class="blog-intro-inner">
                <div class="blog-intro-date"><?php the_time('Y.m.d'); ?></div>
                <div class="blog-intro-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                <ul class="blog-intro-terms">
                  <?php
                  $terms = get_the_category($post->ID);
                  foreach ($terms as $term) {
                    echo '<li><a href="' . get_term_link($term->slug, 'category') . '">' . $term->name . '</a></li> ';
                  }
                  ?>
                </ul>
                <div class="blog-intro-text">
                  <p>
                    <?php echo mb_substr(get_the_excerpt(), 0, 80); ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- .row -->
      </div><!-- .blog -->
