      <div class="page-sec row">
        <div class="primary-col">
          <?php the_content(); ?>
        </div>
        <?php if (has_post_thumbnail()) { ?>
        <div class="secondary-col">
          <div class="featured-image">
            <?php the_post_thumbnail('large'); ?>
          </div>
        </div>
        <?php } ?>
      </div>