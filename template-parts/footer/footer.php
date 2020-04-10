  <footer id="footer">
    <div id="footer-nav">
      <div id="footer-nav-bar">
        <div class="nav-brand">
          <?php
          if (has_custom_logo()) {
            the_custom_logo();
          } else {
            echo '<a href="' . home_url('/') . '">' . get_bloginfo('name') . '</a>';
          }
          ?>

        </div>
        <?php if (has_nav_menu('secondary')) wp_nav_menu(['menu' => 'secondary', 'menu_class' => 'nav-menu']); ?>
        <ul class="nav-menu">
          <li><a href="https://www.instagram.com" target="_blank"><span data-icon="ei-sc-instagram" data-size="m"></span></a></li>
        </ul>
      </div>
    </div>
    <small class="d-block"><?php copyright(); ?></small>
  </footer><!-- #footer -->
