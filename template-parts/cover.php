  <?php
  if (is_front_page()) {
  ?>
    <div class="cover preloader" data-background-color="#18aada" data-img-src="<?php echo DE_THEME_ASSETS . 'illust_logo_large.svg'; ?>">
      <div class="fader">
        <?php for ($i = 1; $i <= 6; $i++) { ?>
          <div class="cover__image --num_<?php echo $i; ?>"></div>
        <?php } ?>
      </div>
    </div>
  <?php
  }
