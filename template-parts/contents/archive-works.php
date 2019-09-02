      <section class="work">
        <div class="work-image">
          <div class="img-clip">
            <div class="img-clip-inner">
              <a href="<?php the_permalink(); ?>">
                <?php
                if (has_post_thumbnail()) {
                  the_post_thumbnail('thumbnail');
                } else {
                  no_image('lg');
                }
                ?>
              </a>
            </div>
          </div>
        </div>
        <h2 class="work-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      </section>
