  <?php
  if (is_front_page()) {
  ?>
    <div class="cover">
      <div class="fader">
        <?php for ($i = 1; $i <= 6; $i++) { ?>
          <div class="cover__image --num_<?php echo $i; ?>"></div>
        <?php } ?>
      </div>
    </div>
  <?php
  }
