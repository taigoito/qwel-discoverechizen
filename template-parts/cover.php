  <?php
  if (is_front_page()) {
    $preloader_bg  = \Qwel::get_data('hero', 'preloader_background');
    $preloader_bg  = \Qwel::get_data('style', $preloader_bg . '_color');
    $preloader_img = \Qwel::get_data('hero', 'preloader_image');
  ?>
  <div class="cover preloader" data-background-color="<?php echo $preloader_bg; ?>" data-img-src="<?php echo $preloader_img; ?>">
    <div class="fader">
      <?php for ($i = 1; $i <= 4; $i++) { ?>
        <?php if (\Qwel::get_data('hero', 'cover_' . $i)) { ?>
          <div class="cover__image --num_<?php echo $i; ?>"></div>
        <?php } ?>
      <?php } ?>
    </div>
  </div>
  <?php
  } else {
    $start = is_page() ? 2 : 3; 
  ?>
  <div class="cover fader">
    <?php for ($i = $start; $i > 0; $i--) { ?>
      <?php if (\Qwel::get_data('hero', 'cover_' . $i)) { ?>
        <div class="cover__image --num_<?php echo $i; ?>"></div>
        <?php break; ?>
      <?php } ?>
    <?php } ?>
  </div>
  <?php
  }