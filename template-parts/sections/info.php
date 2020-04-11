    <section id="front-info" class="front-sec">
      <h2 class="front-sec-heading">
        <div class="row">
          <img src="<?php echo get_template_directory_uri() . '/assets/svg/title_info.svg'; ?>" alt="info">
        </div>
      </h2>
      <div class="container">
        <div class="row">
        <?php
          $terms = get_terms('info-cat', [
            'orderby' => 'id',
            'include' => [4, 5, 6, 7, 8, 9],
            'number' => 6
          ]);
          foreach ($terms as $term) {
        ?>
          <div id="<?php echo 'info-' . $term->slug; ?>" class="info">
            <div class="row">
              <div class="info-intro">
                <h3><img src="<?php echo get_template_directory_uri() . '/assets/svg/info_' . $term->slug . '.svg'; ?>"></h3>
                <p><?php echo $term->description; ?></p>
                <a href="<?php echo get_term_link($term->term_id, 'info-cat'); ?>">&gt; <?php echo $term->name; ?> 一覧を見る</a>
              </div>
              <div class="feature-image">
                <img src="<?php echo get_template_directory_uri() . '/assets/svg/info_illust_' . $term->slug . '.svg'; ?>">
              </div>
            </div>
          </div>
        <?php } ?>
          <div class="info">
            <div class="row">
            <div class="info-intro">
                <h3><img src="<?php echo get_template_directory_uri() . '/assets/svg/info_map.svg'; ?>"></h3>
                <p>盛り上げ隊が発行している地域の魅力が詰まった地図。</p>
                <a href="#">&gt; マップを見る</a>
                  <br><a href="<?php echo get_template_directory_uri() . '/assets/map2020.pdf'; ?>" target="_blank">&gt; マップのダウンロード</a>
              </div>
              <div class="feature-image">
                <img src="<?php echo get_template_directory_uri() . '/assets/svg/info_illust_map.svg'; ?>">
              </div>
            </div>
            </div>
          </div>
        </div>
      </div><!-- .container -->
    </section><!-- #info -->