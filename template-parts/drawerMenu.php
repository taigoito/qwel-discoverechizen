  <?php
  $modifier = \DE::get_data('header', 'header_disable') ? ' responsiveColor' : '';
  ?>
  <button id="drawer" class="drawer<?php echo $modifier; ?>" type="button" data-drawer="toggle">
    <img class="drawer__navicon icon" src="<?php echo DE_THEME_ASSETS . 'illust_navicon.svg' ?>">
    <span class="drawer__close" data-icon="ei-close" data-size="m"></span>
  </button><!-- #drawer -->
  <div id="drawerMenu" class="drawerMenu">
    <ul class="drawerMenu__inner"></ul>
  </div><!-- #drawerMenu -->
  <div id="drawerMenuOverlay" class="drawerMenuOverlay"></div><!-- #drawerMenuOverlay -->
  <template id="drawerMenuItemTemplate">
    <li class="drawerMenu__item"><a href=""></a></li>
  </template><!-- #drawerMenuItemTemplate -->