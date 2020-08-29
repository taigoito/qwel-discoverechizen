    <div class="footer-nav">
      <div class="footer-nav__bar">
        <div class="footer-nav-brand">
          <?php
          if (has_custom_logo()) {
            the_custom_logo();
          } else {
            echo '<a href="' . home_url('/') . '">' . get_bloginfo('name') . '</a>';
          }
          ?>

        </div>
        <?php if (has_nav_menu('secondary')) wp_nav_menu(['menu' => 'secondary', 'menu_class' => 'footer-nav-menu', 'container' => false]); ?>
        <ul class="footer-nav-menu">
          <li class="menu-item"><a href="https://www.instagram.com" target="_blank"><span data-icon="ei-sc-instagram" data-size="m"></span></a></li>
        </ul>
      </div>
    </div><!-- .footer-nav -->
