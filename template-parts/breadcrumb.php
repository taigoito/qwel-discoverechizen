        <ul id="breadcrumb" class="breadcrumb">
          <li class="breadcrumb__item"><a href="<?php echo home_url('/'); ?>">top</a></li>
          <?php
          $wp_obj = get_queried_object();
          /**
           * 投稿一覧ページ
           */
          if (is_home()) { 
          ?>
            <li class="breadcrumb__item"><?php echo get_post_type_object('post')->label; ?></li>
          <?php
          /**
           * 個別投稿ページ
           */
          } else if (is_single()) {
            $post_id     = $wp_obj->ID;
            $post_type   = $wp_obj->post_type;
            $post_title  = $wp_obj->post_title;

            // カスタム投稿タイプの場合、投稿タイプ一覧を表示
            if ($post_type !== 'post') {
          ?>
            <li class="breadcrumb__item"><a href="<?php echo get_post_type_archive_link($post_type); ?>"><?php echo get_post_type_object($post_type)->label; ?></a></li>
          <?php
            }

            // カスタム投稿タイプから、タクソノミーを取得
            if ($post_type == 'post') {
              // 「投稿」の場合、「カテゴリー」を取得
              $tax_name = 'category';

              /**
               * カスタムタクソノミーを作成した場合は、ここに処理を追加
               */

            } else {
              $tax_name = '';
            }

            // タクソノミーが紐づいていれば表示
            if ($tax_name != "") {
              $terms = get_the_terms($post_id, $tax_name); // 投稿に紐づく全タームを取得

              if (!empty($terms)) {
                $term = $terms[0];

                /* Custom */
                if ($term->slug !== 'feature') {

                  // 親タームがあれば表示
                  if ($term->parent > 0) {
                    $parent_array = array_reverse(get_ancestors($term->term_id, $tax_name));
                    foreach ($parent_array as $parent_id) {
                      $parent_term = get_term($parent_id, $tax_name);
          ?>
            <li class="breadcrumb__item"><a href="<?php echo get_term_link($parent_id, $tax_name); ?>"><?php echo $parent_term->name; ?></a></li>
          <?php
                    }
                  }
                  // 最下層タームを表示
          ?>
            <li class="breadcrumb__item"><a href="<?php echo get_term_link($term->term_id, $tax_name); ?>"><?php echo $term->name; ?></a></li>
          <?php
                }
              }
            }
            // 自身
          ?>
            <li class="breadcrumb__item"><?php echo $post_title; ?></li>
          <?php
          /**
           * 固定ページ
           */
          } else if (is_page()) {
            $page_id     = $wp_obj->ID;
            $page_title  = $wp_obj->post_title;

            // 親ページがあれば表示
            if ($wp_obj->post_parent > 0) {
              $parent_array = array_reverse(get_post_ancestors($page_id));
              foreach ($parent_array as $parent_id) {
          ?>
            <li class="breadcrumb__item"><a href="<?php echo get_permalink($parent_id); ?>"><?php echo get_the_title($parent_id); ?></a></li>
          <?php
              }
            }
            // 自身
          ?>
            <li class="breadcrumb__item"><?php echo $page_title; ?></li>
          <?php
          /**
           * カスタム投稿アーカイブ
           */
          } else if (is_post_type_archive()) {
          ?>
            <li class="breadcrumb__item"><?php echo $wp_obj->label; ?></li>
          <?php
          /**
           * 日付別
           */
          } else if (is_date()) {
            $year    = get_query_var('year');
            $month   = get_query_var('monthnum');
            $day     = get_query_var('day');

            // 日別アーカイブ
            if ($day > 0) {
          ?>
            <li class="breadcrumb__item"><a href="<?php echo get_year_link($year); ?>"><?php echo $year; ?></a></li>
            <li class="breadcrumb__item"><a href="<?php echo get_month_link($year, $month); ?>"><?php echo sprintf('%02d', $month); ?></a></li>
            <li class="breadcrumb__item"><?php echo sprintf('%02d', $day); ?></li>
          <?php
            // 月別アーカイブ
            } else if ($month > 0) {
          ?>
            <li class="breadcrumb__item"><a href="<?php echo get_year_link($year); ?>"><?php echo $year; ?></a></li>
            <li class="breadcrumb__item"><?php echo sprintf('%02d', $month); ?></li>
          <?php
            // 年別アーカイブ
            } else {
          ?>
            <li class="breadcrumb__item"><?php echo $year; ?></li>
          <?php
            }
          /**
           * 投稿者アーカイブ
           */
          } else if (is_author()) {
          ?> 
            <li class="breadcrumb__item">Author: <?php echo $wp_obj->display_name; ?></li>
          <?php
          /**
           * タームアーカイブ
           */
          } else if (is_archive()) {
            $post_type = '';
            $term      = $wp_obj;
            $term_id   = $wp_obj->term_id;
            $term_name = $wp_obj->name;
            $tax_name  = $wp_obj->taxonomy;

            // 「カテゴリー」、「タグ」の場合、「投稿」を取得
            if ($tax_name == 'category' || $tax_name == 'post_tag') {
              $post_type = 'post';
            }

            /**
             * カスタムタクソノミーを作成した場合は、ここに処理を追加
             */

            // カスタム投稿タイプの場合、投稿タイプ一覧を表示
            if ($post_type !== 'post') {
          ?>
            <li class="breadcrumb__item"><a href="<?php echo get_post_type_archive_link($post_type); ?>"><?php echo get_post_type_object($post_type)->label; ?></a>
          <?php
            }
            
            // 親タームがあれば表示
            if ($term->parent > 0) {
              $parent_array = array_reverse(get_ancestors($term->term_id, $tax_name));
              foreach ($parent_array as $parent_id) {
                $parent_term = get_term($parent_id, $tax_name);
          ?>
            <li class="breadcrumb__item"><a href="<?php echo get_term_link($parent_id, $tax_name); ?>"><?php echo $parent_term->name; ?></a></li>
          <?php
              }
            }
            // 自身
          ?>
            <li class="breadcrumb__item"><?php echo $term_name; ?></li>
          <?php
          /**
           * 検索結果ページ
           */
          } else if (is_search()) {
          ?>
            <li class="breadcrumb__item">Searching for: <?php echo get_search_query(); ?></li>
          <?php
          /**
           * 404ページ
           */
          } else if (is_404()) {
          ?>
            <li class="breadcrumb__item">404 Not Found</li>
          <?php
          }
          ?>
        </ul>
