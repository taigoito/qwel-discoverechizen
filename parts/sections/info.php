    <section id="info" class="info">
      <h2 class="info__heading">
        <div class="info__heading-container">
          <img src="<?php echo get_template_directory_uri() . '/assets/svg/title_info.svg'; ?>" alt="info">
        </div>
      </h2>
      <div class="info__main">
        <div class="info__container">
        <?php
          $terms = get_terms('info-cat', [
            'orderby' => 'id',
            'include' => [4, 5, 6, 7, 8, 9],
            'number' => 6
          ]);
          foreach ($terms as $term) {
        ?>
          <div class="info-item <?php echo $term->slug; ?>">
            <div class="info-item__inner">
              <div class="info-item__intro">
                <h3 class="info-item__heading"><img src="<?php echo get_template_directory_uri() . '/assets/svg/info_' . $term->slug . '.svg'; ?>"></h3>
                <p class="info-item__text"><?php echo $term->description; ?></p>
                <a class="info-item__more" href="<?php echo get_term_link($term->term_id, 'info-cat'); ?>">&gt; <?php echo $term->name; ?> 一覧を見る</a>
              </div>
              <div class="info-item__image">
                <a href="<?php echo get_term_link($term->term_id, 'info-cat'); ?>">
                  <img src="<?php echo get_template_directory_uri() . '/assets/svg/info_illust_' . $term->slug . '.svg'; ?>">
                </a>
              </div>
            </div>
          </div>
        <?php } ?>
          <div class="info-item">
            <div class="info-item__inner">
              <div class="info-item__intro">
                  <h3 class="info-item__heading"><img src="<?php echo get_template_directory_uri() . '/assets/svg/info_map.svg'; ?>"></h3>
                  <p class="info-item__text">盛り上げ隊が発行している地域の魅力が詰まった地図。</p>
                  <a class="info-item__more" href="./treasuremap/" target="_blank">&gt; マップを見る</a>
                    <br><a class="info-item__more" href="<?php echo get_template_directory_uri() . '/assets/map2021.pdf'; ?>" target="_blank">&gt; マップのダウンロード</a>
                </div>
                <div class="info-item__image">
                  <img src="<?php echo get_template_directory_uri() . '/assets/svg/info_illust_map.svg'; ?>">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- .info -->
