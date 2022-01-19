    <?php
    $section           = 'news';
    $term_id           = \DE::get_data($section, 'relational_id');
    $category          = get_category($term_id);
    $section_id        = $category->slug;
    $section_name      = $category->name;
    $section_sub       = $category->description;
    $section_class     = 'section --' . $section_id;
    $posts_per_page    = \DE::get_data($section, 'items_count');
    ?>
    <section id="<?php echo $section_id; ?>" class="<?php echo $section_class; ?>">
      <div class="section__headingContainer">
        <h3 class="section__heading">
          <span class="section__headingSpan1" data-comfort="1"><?php echo my_format_slug($section_id); ?></span>
          <span class="section__headingSpan2" data-comfort="1"><?php echo $section_name; ?></span>
        </h3>
      </div>
      <div class="section__description"><?php echo $section_sub; ?></div>
      <div class="section__inner --container">
        <div class="list --lg">
          <ul class="list__inner">
            <?php
            global $posts;
            $posts = get_posts([
              'posts_per_page' => $posts_per_page,
              'category'       => $term_id
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
                     * .post__date
                     */
                    get_template_part('template-parts/post/date');
                    /**
                     * .post__heading
                     */
                    get_heading();
                    /**
                     * .post__tags
                     */
                    get_template_part('template-parts/post/tags');
                    /**
                     * .post__excerpt
                     */
                    get_template_part('template-parts/post/excerpt');
                    ?>
                  </div>
                </div>
              </li>
            <?php
            }
            ?>
          </ul>
        </div><!-- .list -->
      </div>
      <div class="section__moreWrap">
        <a class="section__more" href="<?php echo get_category_link($term_id); ?>"><span class="section__moreText"></span></a>
      </div>
    </section><!-- #<?php echo $section_id; ?> -->
