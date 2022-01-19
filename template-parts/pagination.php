          <ul id="pagination" class="pagination">
            <?php
            /**
             * 個別投稿ページの場合、前後の記事へ移動できる
             */
            if (is_single()) {
              // 前の記事があれば、前の記事へを表示
              $prev_post = get_previous_post();
              if (!empty($prev_post)) {
            ?>
              <li class="pagination__item --prev"><a href="<?php echo get_permalink($prev_post->ID); ?>"><span data-icon="ei-chevron-left"></span></a></li>
            <?php
              }
              // 次の記事があれば、次の記事へを表示
              $next_post = get_next_post();
              if (!empty($next_post)) {
            ?>
              <li class="pagination__item --next"><a href="<?php echo get_permalink($next_post->ID); ?>"><span data-icon="ei-chevron-right"></span></a></li>
            <?php
              }
            /**
             * アーカイブページの場合、最初と最後、および2つ隣のページまで切り替えができる
             */
            } else if (is_home() || is_archive() || is_search()) {
              global $wp_query;
              $pages = $wp_query->max_num_pages;
              $paged = get_query_var('paged') ?: 1;
          
              // ページ数が2ページ以上の場合から表示
              if ($pages > 1) {

                // 最初へ
                if ($paged > 3) {
            ?>
              <li class="pagination__item"><a href="<?php echo get_pagenum_link(1); ?>">1</a></li>
            <?php
                  if ($paged == 5) {
            ?>
              <li class="pagination__item"><a href="<?php echo get_pagenum_link(2); ?>">2</a></li>
            <?php
                  } else if ($paged > 5) {
            ?>
              <li class="pagination__item --joint"><span>…</span></li>
            <?php
                  }
                }
                // 前後へ
                for ($i = 1; $i <= $pages; $i++) {
                  if ($i <= $paged + 2 && $i >= $paged - 2) {
                    if ($paged === $i) {
            ?>
              <li class="pagination__item --current"><span><?php echo $i; ?></span></li>
            <?php
                    } else {
            ?>
              <li class="pagination__item"><a href="<?php echo get_pagenum_link($i); ?>"><?php echo $i; ?></a></li>
            <?php
                    }
                  }
                }
                // 最後へ
                if ($paged + 2 < $pages) {
                  if ($paged  + 4 == $pages) {
            ?>
              <li class="pagination__item"><a href="<?php echo get_pagenum_link($pages - 1); ?>"><?php echo ($pages - 1); ?></a></li>
            <?php
                  } else if ($paged  + 4 < $pages) {
            ?>
              <li class="pagination__item --joint"><span>…</span></li>
            <?php
                  }
            ?>
              <li class="pagination__item"><a href="<?php echo get_pagenum_link($pages); ?>"><?php echo $pages; ?></a></li>
            <?php
                }
              }
            }
            ?>
          </ul>
