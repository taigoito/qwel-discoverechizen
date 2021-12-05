      <?php
      if (has_nav_menu('primary')) {
        wp_nav_menu([
          'container'        => 'nav',
          'container_id'     => 'gNav',
          'container_class'  => 'gNav',
          'menu'             => 'primary',
          'menu_id'          => 'gNav__primaryMenu',
          'menu_class'       => 'gNav__primaryMenu'
        ]);
      }
      ?>
      
