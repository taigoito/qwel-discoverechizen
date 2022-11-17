    <?php
    $section        = 'discover';
    ?>
    <section id="<?php echo $section; ?>" class="<?php echo 'section --' . $section; ?> wave" data-hue="195" data-lightness="42%">
      <div class="section__headingContainer --discover">
        <h3 class="section__heading --discover">
          <img class="section__headingImage --left" src="<?php echo DE_THEME_ASSETS . 'title_tour_left.svg'; ?>">
          <img class="section__headingImage --main" src="<?php echo DE_THEME_ASSETS . 'title_tour.svg'; ?>">
          <img class="section__headingImage --right" src="<?php echo DE_THEME_ASSETS . 'title_tour_right.svg'; ?>">
        </h3>
      </div>
      <div class="section__inner">
        <div id="contentMap" class="contentMap">
          <?php for ($i = 1; $i <= 4; $i++) { ?>
            <?php if ($i !== 3) { //tmp ?>
            <div class="contentMap__island">
              <img class="contentMap__islandImage" src="<?php echo DE::get_data('discover', 'island_' . $i . '_image'); ?>">
              <div class="contentMap__islandInner">
              <?php for ($j = 1; $j <= 4; $j++) { ?>
                <?php if (DE::get_data('discover', 'island_' . $i . '_content_' . $j . '_image')) { ?>
                  <a class="contentMap__content" href="<?php echo DE::get_data('discover', 'island_' . $i . '_content_' . $j . '_href'); ?>">
                    <img class="contentMap__image" src="<?php echo DE::get_data('discover', 'island_' . $i . '_content_' . $j . '_image'); ?>">
                    <span class="contentMap__text"><?php echo DE::get_data('discover', 'island_' . $i . '_content_' . $j . '_title'); ?></span>
                  </a>
                <?php } else { ?>
                  <span class="contentMap__blankcontent"></span>
                <?php } ?>
              <?php } ?>
              </div>
            </div>
            <?php } //tmp ?>
          <?php } ?>
        </div>
      </div>
    </section><!-- #<?php echo $section; ?> --> 
