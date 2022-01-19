  <?php
  $modifier = \Qwel::get_data('header', 'header_disable') ? ' responsiveColor' : '';
  ?>
  <button id="drawer" class="drawer<?php echo $modifier; ?>" type="button" data-drawer="toggle">
    <span class="drawer__navicon" data-icon="ei-navicon" data-size="m"></span>
    <span class="drawer__close" data-icon="ei-close" data-size="m"></span>
  </button><!-- #drawer -->
  <div id="drawerMenu" class="drawerMenu">
    <ul class="drawerMenu__inner"></ul>
  </div><!-- #drawerMenu -->
  <div id="drawerMenuOverlay" class="drawerMenuOverlay"></div><!-- #drawerMenuOverlay -->
  <template id="drawerMenuItemTemplate">
    <li class="drawerMenu__item"><a href=""></a></li>
  </template><!-- #drawerMenuItemTemplate -->