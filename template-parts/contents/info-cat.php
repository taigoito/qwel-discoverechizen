          <ul class="info-cats">
            <?php
              $terms = get_terms('info-cat', 'orderby=id');
              foreach ($terms as $term) {
                echo '<li><a href="' . get_term_link($term) . '">&gt; ' . $term->name . '</a></li>';
              }
            ?>
          </ul>