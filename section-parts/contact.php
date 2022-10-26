    <?php
    $section           = 'contact';
    $section_title     = \DE::get_data($section, 'title');
    $shortcode         = \DE::get_data($section, 'contact_form');
    ?>
    <section id="<?php echo $section; ?>" class="<?php echo 'section --' . $section; ?>">
      <div class="section__headingContainer">
        <h3 class="section__heading">
          <span class="section__headingSpan1" data-comfort="1"><?php echo my_format_slug($section); ?></span>
          <span class="section__headingSpan2" data-comfort="1"><?php echo $section_title; ?></span>
        </h3>
      </div>
      <div class="section__inner">
        <div class="section__content">
          <?php echo do_shortcode($shortcode); ?>
        </div>
      </div>
    </section><!-- #<?php echo $section; ?> -->
