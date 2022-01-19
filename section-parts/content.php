    <?php
    $section_id        = 'content';
    $section_class     = 'section --' . $section_id;
    ?>
    <section id="<?php echo $section_id; ?>" class="<?php echo $section_class; ?> wave" data-hue="195" data-lightness="42%">
      <div class="section__headingContainer --discover">
        <h3 class="section__heading">越前海岸の暮らしを
          <br>見つける旅に出かけよう</h3>
      </div>
      <div class="section__inner">
        <div id="contentMap" class="contentMap">
          <?php for ($i = 1; $i <= 4; $i++) { ?>
          <div class="contentMap__island">
            <img class="contentMap__islandImage" src="<?php echo DE::get_data('content', 'island_' . $i . '_image'); ?>">
            <div class="contentMap__islandInner">
            <?php for ($j = 1; $j <= 4; $j++) { ?>
              <?php if (DE::get_data('content', 'island_' . $i . '_content_' . $j . '_image')) { ?>
                <a class="contentMap__content" href="<?php echo DE::get_data('content', 'island_' . $i . '_content_' . $j . '_href'); ?>">
                  <img class="contentMap__image" src="<?php echo DE::get_data('content', 'island_' . $i . '_content_' . $j . '_image'); ?>">
                  <span class="contentMap__text"><?php echo DE::get_data('content', 'island_' . $i . '_content_' . $j . '_title'); ?></span>
                </a>
              <?php } else { ?>
                <span class="contentMap__blankcontent"></span>
              <?php } ?>
            <?php } ?>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section><!-- #<?php echo $section_id; ?> --> 
