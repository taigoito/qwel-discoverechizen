  <nav id="header-nav">
    <div id="header-nav-bar">
      <div class="nav-brand">
        <?php
        if (has_custom_logo()) {
          the_custom_logo();
        } else {
          echo '<a href="' . home_url('/') . '">' . get_bloginfo('name') . '</a>';
        }
        ?>
      </div>
      <?php if (has_nav_menu('primary')) wp_nav_menu(['menu' => 'primary', 'menu_class' => 'nav-menu']); ?>
      <ul class="nav-menu">
        <li><a href="https://www.instagram.com" target="_blank"><span data-icon="ei-sc-instagram" data-size="m"></span></a></li>
      </ul>
      <button id="nav-toggler" type="button" data-toggle="slidebar"><span data-icon="ei-navicon" data-size="m"></span></button>
    </div>
  </nav><!-- #header-nav -->
