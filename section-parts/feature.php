    <?php
    $section           = 'feature';
    $post_id           = \DE::get_data($section, 'relational_id');
    $post          = get_post($post_id);
    $section_id        = $post->post_name;
    $section_class     = 'section --' . $section_id;
    $layout_modifier   = ' --' . \DE::get_data($section, 'layout');
    $posts_per_page    = \DE::get_data($section, 'items_count');
    $aspect_ratio      = \DE::get_data($section, 'item_aspect_ratio');
    setup_postdata($post);
    ?>
    <section id="<?php echo $section_id; ?>" class="<?php echo $section_class; ?>">
      <div class="section__headingContainer">
        <h3 class="section__heading">
          <span class="section__headingSpan1" data-comfort="1"><?php echo my_format_slug($section_id); ?></span>
          <span class="section__headingSpan2" data-comfort="1"><?php the_title(); ?></span>
        </h3>
      </div>
      <div class="section__inner">
        <div class="slider<?php echo $layout_modifier; ?> --fit" data-aspect-ratio="<?php echo $aspect_ratio; ?>">
          <ul class="slider__inner">
            <?php
            global $posts;
            $posts = get_posts([
              'posts_per_page' => $posts_per_page,
              'post_type'      => 'page',
              'post_parent'    => $post_id,
              'exclude'        => [101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111]
            ]);
            foreach ($posts as $post) {
              setup_postdata($post);
            ?>
              <li class="post">
                <div class="post__inner">
                  <?php
                  /**
                   * .post__image
                   */
                  get_featured_image();
                  ?>
                  <div class="post__textContent">
                    <?php
                    /**
                     * .post__heading
                     */
                    get_heading();
                    ?>
                  </div>
                </div>
              </li>
            <?php
            }
            ?>
          </ul>
          <a class="slider__prev" href="#"><span data-icon="ei-chevron-left" data-size="l"></span></a>
          <a class="slider__next" href="#"><span data-icon="ei-chevron-right" data-size="l"></span></a>
        </div><!-- .slider -->
      </div>
      <div class="section__moreWrap">
        <a class="section__more" href="<?php echo get_category_link($term_id); ?>"><span class="section__moreText"></span></a>
      </div>
    </section><!-- #<?php echo $section_id; ?> -->
