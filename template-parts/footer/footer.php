  <footer id="footer">
    <div class="container">
      <div class="row">
        <div id="footer-content-1">
          <div id="footer-brand">
            <img src="<?php echo get_template_directory_uri() . '/assets/svg/top_logo1.svg'; ?>">
          </div>
          <ul id="footer-social-btns">
            <li><a href="#"><img src="<?php echo get_template_directory_uri() . '/assets/svg/icon_instagram.svg'; ?>"></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri() . '/assets/svg/icon_facebook.svg'; ?>"></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri() . '/assets/svg/icon_youtube.svg'; ?>"></a></li>
          </ul>
        </div>
        <div id="footer-content-2">
          <div id="footer-nav">
            <?php if (has_nav_menu('primary')) wp_nav_menu(['menu' => 'primary', 'menu_class' => 'nav-menu']); ?>
          </div>
        </div>
        <div id="footer-copyright">
          <small><?php copyright(); ?></small>
        </div>
      </div><!-- .row -->
    </div><!-- .container -->
  </footer><!-- #footer -->
