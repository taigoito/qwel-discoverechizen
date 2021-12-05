      <?php
      $modifier = \Qwel::get_data('header', 'header_disable') ? ' --float' : '';
      $modifier .= \Qwel::get_data('header', 'header_disable') ? ' responsiveColor' : '';
      ?>
      <?php if (is_front_page()) { ?>
        <h1 id="siteBrand" class="siteBrand<?php echo $modifier; ?>">
      <?php } else { ?>
        <div id="siteBrand" class="siteBrand<?php echo $modifier; ?>">
      <?php } ?>
      <?php if (has_custom_logo()) { ?>
        <?php the_custom_logo(); ?>
      <?php } else { ?> 
        <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
      <?php } ?>
      <?php if (is_front_page()) { ?>
        </h1>
      <?php } else { ?>
        </div>
      <?php } ?>
