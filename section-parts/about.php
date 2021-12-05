    <?php
    $section           = 'about';
    $post_id           = \Qwel::get_data($section, 'relational_id');
    $post              = get_post($post_id);
    $section_id        = $post->post_name;
    $section_bg        = \Qwel::get_data($section, 'background');
    $section_class     = 'section --' . $section_id;
    $section_class     .= $section_bg !== 'none' ? ' has-' . str_to_camel($section_bg) . '-background-color' : '';
    $show_content      = \Qwel::get_data($section, 'show_full_content');
    $layout            = \Qwel::get_data($section, 'layout');
    $layout_class      = $layout === 'right' ? ' --right' : ($layout === 'left' ? ' --left' : '');
    setup_postdata($post);
    ?>
    <section id="<?php echo $section_id; ?>" class="<?php echo $section_class; ?>">
      <h3 class="section__heading"><?php the_title(); ?></h3>
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
                if ($show_content) {
                  /**
                   * .post__content
                   */
                  get_template_part('template-parts/post/content');
                } else { 
                  /**
                   * .post__excerpt
                   */
                  get_template_part('template-parts/post/excerpt');
                }
                ?>
              </div>
            </div>
          </div>
        </div><!-- .mediaText -->
      </div>
    </section><!-- #<?php echo $section_id; ?> --> 
