  <footer id="footer">
    <div id="footer-navigation">
      <div id="footer-navigation-bar">
        <div class="navigation-brand">
          <?php
          if (has_custom_logo()) {
            the_custom_logo();
          } else {
            echo '<a href="' . home_url('/') . '">' . get_bloginfo('name') . '</a>';
          }
          ?>

        </div>
        <?php if (has_nav_menu('secondary')) wp_nav_menu(['menu' => 'secondary', 'menu_class' => 'navigation-menu']); ?>
        <ul class="navigation-menu">
          <li><a href="https://www.instagram.com" target="_blank"><span data-icon="ei-sc-instagram" data-size="m"></span></a></li>
        </ul>
      </div>
    </div>
    <small class="d-block"><?php copyright(); ?></small>
  </footer><!-- #footer -->
