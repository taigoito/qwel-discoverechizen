    <?php
    $section           = 'pickup';
    $post_id           = \DE::get_data($section, 'relational_id');
    $post              = get_post($post_id);
    $section_id        = $section;
    $section_class     = 'section --' . $section_id;
    $layout            = \DE::get_data($section, 'layout');
    $layout_class      = $layout === 'right' ? ' --right' : ($layout === 'left' ? ' --left' : '');
    setup_postdata($post);
    ?>
    <section id="<?php echo $section_id; ?>" class="section --pickup">
      <div class="section__headingContainer">
        <h3 class="section__heading">
          <span class="section__headingSpan1" data-comfort="1"><?php echo \DE::get_data($section, 'slug'); ?></span>
          <span class="section__headingSpan2" data-comfort="1"><?php echo \DE::get_data($section, 'title'); ?></span>
        </h3>
      </div>
      <div class="section__inner --container">
        <div class="mediaText<?php echo $layout_class; ?>">
          <div class="post">
            <div class="post__inner">
              <?php
              /**
               * .post__image (リンク無し)
               */
              get_featured_image('large', false);
              ?>
              <div class="post__textContent">
                <?php 
                /**
                 * .post__excerpt
                 */
                get_template_part('template-parts/post/excerpt');
                ?>
              </div>
            </div>
          </div>
        </div><!-- .mediaText -->
      </div>
    </section><!-- #<?php echo $section_id; ?> --> 
