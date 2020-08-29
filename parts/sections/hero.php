    <div class="hero__inner" <?php if (get_header_image()) echo 'style="color: #' . get_header_textcolor() . '"'; ?>>
      <div class="hero__content">
        <h1 class="hero__title">
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
        <div class="hero__description"><?php bloginfo('description'); ?></div>
      </div>
    </div>
