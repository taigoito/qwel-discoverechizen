    <section id="plan" class="plan wave">
      <h2 class="plan__heading">
        <div class="plan__heading-container">
          <img src="<?php echo get_template_directory_uri() . '/assets/svg/title_plan.svg'; ?>" alt="plan">
        </div>
      </h2>
      <div id="slider" class="slider--size_md">
        <div class="slider__inner">
          <?php
          for ($i = 0; $i < 2; $i++) {
            $posts = get_posts([
              'posts_per_page' => 5,
              'post_type' => 'plan'
            ]);
            foreach ($posts as $post) {
              setup_postdata($post);
              get_template_part('parts/components/slider');
            }
          }
          ?>
        </div>
        <a class="slider__prev" href="#"><span data-icon="ei-chevron-left" data-size="l"></span></a>
        <a class="slider__next" href="#"><span data-icon="ei-chevron-right" data-size="l"></span></a>
      </div><!-- #slider -->
      <div class="slider__caption"></div>
      <a href="<?php echo get_post_type_archive_link('plan'); ?>">&gt; おすすめ旅プラン をもっと見る</a>
    </section><!-- .plan -->
