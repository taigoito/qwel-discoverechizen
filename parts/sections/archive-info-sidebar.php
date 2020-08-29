          <ul class="archive-info-sidebar">
            <?php
              $terms = get_terms('info-cat', 'orderby=id');
              foreach ($terms as $term) {
                echo '<li class="archive-info-sidebar__item"><a href="' . get_term_link($term) . '">&gt; ' . $term->name . '</a></li>';
              }
            ?>
          </ul>