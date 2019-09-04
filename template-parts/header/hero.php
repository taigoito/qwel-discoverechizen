    <div id="hero" <?php if (get_header_image()) echo 'style="color: #' . header_textcolor(); '"'; ?>;">
      <div id="hero-content">
        <h1 id="site-title">
          <?php
          if (has_custom_logo()) {
            $custom_logo_id = get_theme_mod('custom_logo');
            $image = wp_get_attachment_image_src($custom_logo_id, 'full');
            echo '<img src="' . $image[0] . '">';
          } else {
            bloginfo('name');
          }
          ?>
        </h1>
        <div id="site-description"><?php bloginfo('description'); ?></div>
      </div>
    </div><!-- #hero -->
