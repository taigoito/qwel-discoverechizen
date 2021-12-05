    <?php
    $section           = 'service';
    $term_id           = \Qwel::get_data($section, 'relational_id');
    $category          = get_category($term_id);
    $section_id        = $category->slug;
    $section_name      = $category->name;
    $section_sub       = $category->description;
    $section_bg        = \Qwel::get_data($section, 'background');
    $section_class     = 'section --' . $section_id;
    $section_class     .= $section_bg !== 'none' ? ' has-' . str_to_camel($section_bg) . '-background-color' : '';
    $layout_modifier   = ' --' . \Qwel::get_data($section, 'layout');
    $posts_per_page    = \Qwel::get_data($section, 'items_count');
    $item_show_date    = \Qwel::get_data($section, 'item_show_date');
    $item_show_tags    = \Qwel::get_data($section, 'item_show_tags');
    ?>
    <section id="<?php echo $section_id; ?>" class="<?php echo $section_class; ?>">
      <h3 class="section__heading"><?php echo $section_name ?></h3>
      <div class="section__description"><?php echo $section_sub; ?></div>
      <div class="section__inner --container">
        <div class="cards<?php echo $layout_modifier; ?>">
          <ul class="cards__inner">
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
                    if ($item_show_date) get_template_part('template-parts/post/date');
                    /**
                     * .post__heading
                     */
                    get_heading();
                    /**
                     * .post__tags
                     */
                    if ($item_show_tags) get_template_part('template-parts/post/tags');
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
        </div><!-- .cards -->
      </div>
      <div class="section__moreWrap">
        <a class="section__more" href="<?php echo get_category_link($term_id); ?>"><span class="section__moreText"></span></a>
      </div>
    </section><!-- #<?php echo $section_id; ?> -->
