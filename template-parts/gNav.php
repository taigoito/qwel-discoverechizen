      <?php
      $modifier = \DE::get_data('header', 'header_disable') ? ' --hidden' : '';
      ?>
      <nav id="gNav" class="gNav<?php echo $modifier; ?>">
        <ul class="gNav__primaryMenu">
          <?php
          // セクション毎の処理
          $sections = \DE::get_sections();
          foreach ($sections as $section => $type) {
            // 紐付けの有無をチェック
            $relational_id = \DE::get_data($section, 'relational_id');
            $relational_id = intval($relational_id);
            if ($relational_id) {
              $name = '';
              $slug = '';
              $href = '';
              $show_content = true;
              // 紐付けタイプに応じて表示名とスラグを取得
              if ($type === 'category') {
                $category = get_category($relational_id);
                $name = $category->name;
                $slug = $category->slug;
                //$href = get_term_link($relational_id, 'category');
              } else if ($type === 'tag') {
                $tag = get_tag($relational_id);
                $name = $tag->name;
                $slug = $tag->slug;
                //$href = get_term_link($relational_id, 'post_tag');
              } else {
                $post = get_post($relational_id);
                $name = $post->post_title;
                $slug = $post->post_name;
                //$href = get_permalink($relational_id);
              }
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
