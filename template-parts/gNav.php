      <?php
      $modifier = \DE::get_data('header', 'header_disable') ? ' --hidden' : '';
      ?>
      <nav id="gNav" class="gNav<?php echo $modifier; ?>">
        <ul class="gNav__primaryMenu">
          <?php
          // セクション毎の処理
          $sections = \DE::get_sections();
          foreach ($sections as $section => $type) {
            if ($type === 'post' || $type === 'category') {
              $relational_id = \DE::get_data($section, 'relational_id');
              $relational_id = intval($relational_id);
              if ($relational_id) {
                if ($type === 'post') {
                  $post = get_post($relational_id);
                  $name = \DE::get_data($section, 'title');
                  $slug = 'pickup';
                  $href = home_url('/#' . $slug);
                } else if ($type === 'category') {
                  $category = get_category($relational_id);
                  $name = $category->name;
                  $slug = $category->slug;
                  $href = home_url('/#' . $slug);
                }
          ?>
            <li class="gNav__item"><a href="<?php echo $href; ?>"><?php echo $name; ?></a></li>
          <?php
              }
            } else {
              $name = \DE::get_data($section, 'title');;
              $slug = $section;
              $href = home_url('/#' . $slug);
          ?>
            <li class="gNav__item"><a href="<?php echo $href; ?>"><?php echo $name; ?></a></li>
          <?php
            }
          }
          ?>
        </ul>
        <ul class="gNav__socialMenu">
          <?php
          $social = \DE::get_data('social');
          foreach ($social as $sns => $username) {
            if ($username) {
          ?>
            <li class="gNav__item"><a href="https://<?php echo $sns . '.com/' . $username . '/'; ?>"><span data-icon="ei-sc-<?php echo $sns; ?>" data-size="m"></span></a></li>
          <?php
            }
          }
          ?>
        </ul>
      </nav>
