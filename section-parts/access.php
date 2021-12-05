    <?php
    $section           = 'access';
    $post_id           = \Qwel::get_data($section, 'relational_id');
    $post              = get_post($post_id);
    $section_id        = $post->post_name;
    $section_bg        = \Qwel::get_data($section, 'background');
    $section_class     = 'section --' . $section_id;
    $section_class     .= $section_bg !== 'none' ? ' has-' . str_to_camel($section_bg) . '-background-color' : '';
    $url               = \Qwel::get_data($section, 'map_url');
    setup_postdata($post);
    ?>
    <section id="<?php echo $section_id; ?>" class="<?php echo $section_class; ?>">
      <h3 class="section__heading"><?php the_title(); ?></h3>
      <div class="section__inner">
        <div class="section__content">
          <?php the_content(); ?>
        </div>
        <div class="section__map">
          <iframe src="<?php echo $url; ?>" width="960" height="480" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>
      </div>
    </section><!-- #<?php echo $section_id; ?> -->
