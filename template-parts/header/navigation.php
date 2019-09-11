  <nav id="header-navigation">
    <div id="header-navigation-bar">
      <div class="navigation-brand">
        <?php
        if (has_custom_logo()) {
          the_custom_logo();
        } else {
          echo '<a href="' . home_url('/') . '">' . get_bloginfo('name') . '</a>';
        }
        ?>
      </div>
      <?php if (has_nav_menu('primary')) wp_nav_menu(['menu' => 'primary', 'menu_class' => 'navigation-menu']); ?>
      <ul class="navigation-menu">
        <li><a href="https://www.instagram.com" target="_blank"><span data-icon="ei-sc-instagram" data-size="m"></span></a></li>
      </ul>
      <button id="navigation-toggler" type="button" data-toggle="slidebar"><span data-icon="ei-navicon" data-size="m"></span></button>
    </div>
  </nav><!-- #header-navigation -->
