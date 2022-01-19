      <?php
      $modifier = \DE::get_data('header', 'header_disable') ? ' --float' : '';
      $modifier .= \DE::get_data('header', 'header_disable') ? ' responsiveColor' : '';
      ?>
      <?php if (is_front_page()) { ?>
        <h1 id="siteBrand" class="siteBrand<?php echo $modifier; ?>">
      <?php } else { ?>
        <div id="siteBrand" class="siteBrand<?php echo $modifier; ?>">
      <?php } ?>
        <a href="<?php echo home_url('/'); ?>"><img src="<?php echo DE_THEME_ASSETS . 'illust_logo_wide.svg' ; ?>"></a>
      <?php if (is_front_page()) { ?>
        </h1>
      <?php } else { ?>
        </div>
      <?php } ?>
