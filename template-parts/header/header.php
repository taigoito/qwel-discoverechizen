  <h1 id="<?php echo (!is_post_type_archive('umitan') && !is_tax('umitan-cat') && !is_singular('umitan') && !is_singular('booking-page') && !is_page('booking-form') && !is_page('booking-thanks')) ? 'page-title' : 'umitan-title'; ?>">
    <div class="row">
      <img src="<?php echo get_template_directory_uri() . '/assets/svg/title_' . get_my_title() . '.svg'; ?>" alt="<?php echo get_my_title(); ?>">
    </div>
  </h1>
