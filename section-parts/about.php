    <?php
    $section           = 'about';
    $section_title     = \DE::get_data($section, 'title');
    ?>
    <section id="<?php echo $section; ?>" class="<?php echo 'section --' . $section; ?>">
      <div class="section__headingContainer">
        <h3 class="section__heading">
          <span class="section__headingSpan1" data-comfort="1"><?php echo my_format_slug($section); ?></span>
          <span class="section__headingSpan2" data-comfort="1"><?php echo $section_title; ?></span>
        </h3>
      </div>
      <div class="section__inner --container">
          <?php
          global $posts;
          $posts = get_posts([
            'posts_per_page' => 2,
            'post_type'      => 'page',
            'include'        => [11, 12],
            'order'          => 'asc'
          ]);
          foreach ($posts as $post) {
            setup_postdata($post);
          ?>
          <div class="post">
            <div class="post__inner">
              <?php
              /**
               * .post__image (リンク無し)
               */
              get_featured_image('large');
              ?>
              <div class="post__textContent">
                <p class="post__excerpt"><?php echo get_the_excerpt(); ?></p>
                <div class="post__moreWrap">
                  <a class="post__more" href="<?php the_permalink(); ?>"><?php the_title(); ?> &gt;</a>
                </div>
              </div>
            </div>
          </div>
          <?php
          }
          ?>
      </div>
    </section><!-- #<?php echo $section; ?> --> 
