  <nav class="header-nav">
    <div class="header-nav__bar">
      <div class="header-nav-brand">
        <?php
        if (has_custom_logo()) {
          the_custom_logo();
        } else {
          echo '<a href="' . home_url('/') . '">' . get_bloginfo('name') . '</a>';
        }
        ?>
      </div>
      <?php if (has_nav_menu('primary')) wp_nav_menu(['menu' => 'primary', 'menu_class' => 'header-nav-menu', 'container' => false]); ?>
      <ul class="header-nav-menu">
        <li class="menu-item"><a href="https://www.instagram.com" target="_blank"><span data-icon="ei-sc-instagram" data-size="m"></span></a></li>
      </ul>
      <button class="header-nav-toggler" type="button" data-toggle="slclassebar"><span data-icon="ei-navicon" data-size="m"></span></button>
    </div>
  </nav><!-- .header-nav -->
