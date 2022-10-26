    <?php
    $section           = 'feature';
    $section_title     = \DE::get_data($section, 'title');
    $layout_modifier   = ' --' . \DE::get_data($section, 'layout');
    $posts_per_page    = \DE::get_data($section, 'items_count');
    $aspect_ratio      = \DE::get_data($section, 'item_aspect_ratio');
    ?>
    <section id="<?php echo $section; ?>" class="<?php echo 'section --' . $section; ?>">
      <div class="section__headingContainer">
        <h3 class="section__heading">
          <span class="section__headingSpan1" data-comfort="1"><?php echo my_format_slug($section); ?></span>
          <span class="section__headingSpan2" data-comfort="1"><?php echo $section_title; ?></span>
        </h3>
      </div>
      <div class="section__inner">
        <div class="slider<?php echo $layout_modifier; ?> --fit" data-aspect-ratio="<?php echo $aspect_ratio; ?>">
          <ul class="slider__inner">
            <?php
            for ($i = 1; $i <= 4; $i++) {
            ?>
              <li class="post">
                <div class="post__inner">
                  <?php
                  /**
                   * .post__image
                   */
                  ?>
                  <figure class="post__image">
                    <?php if (\DE::get_data('feature', 'cat' . $i . '_image')) { ?>
                      <img src="<?php echo \DE::get_data('feature', 'cat' . $i . '_image'); ?>">
                    <?php } else { ?>
                      <img src="<?php echo DE_DEFAULT_IMAGE; ?>">
                    <?php } ?>
                  </figure>
                  <div class="post__textContent">
                    <?php
                    /**
                     * .post__heading
                     */
                    ?>
                    <h4 class="post__heading"><a href="<?php echo get_category_link(\DE::get_data($section, 'cat' . $i .'_id')); ?>"><?php echo \DE::get_data('feature', 'cat' . $i . '_title'); ?></a></h4>
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
