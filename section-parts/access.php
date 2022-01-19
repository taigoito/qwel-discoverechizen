    <?php
    $section           = 'access';
    $post_id           = \DE::get_data($section, 'relational_id');
    $post              = get_post($post_id);
    $section_id        = $post->post_name;
    $section_class     = 'section --' . $section_id;
    $url               = \DE::get_data($section, 'map_url');
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
        <div class="section__content">
          <?php the_content(); ?>
        </div>
        <div class="section__map">
          <iframe src="<?php echo $url; ?>" width="960" height="480" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>
      </div>
    </section><!-- #<?php echo $section_id; ?> -->
