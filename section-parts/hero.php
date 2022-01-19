    <?php
    $section           = 'hero';
    $post_id           = \Qwel::get_data($section, 'relational_id');
    $post              = get_post($post_id);
    $section_id        = $post->post_name;
    $section_bg        = \Qwel::get_data($section, 'background');
    $section_class     = 'section --' . $section_id;
    $section_class     .= $section_bg !== 'none' ? ' has-' . str_to_camel($section_bg) . '-background-color' : '';
    $show_content      = \Qwel::get_data($section, 'show_full_content');
    setup_postdata($post);
    ?>
    <header id="<?php echo $section_id; ?>" class="<?php echo $section_class; ?>">
      <div class="section__content">
        <?php 
        if ($show_content) {
          /**
           * .post__content
           */
          get_template_part('template-parts/post/content');
        } else {
          /**
           * .post__heading
           */
          get_heading('h2', false);
          /**
           * .post__excerpt
           */
          get_template_part('template-parts/post/excerpt');
        }
        ?>
      </div>
    </header><!-- #<?php echo $section_id; ?> -->
