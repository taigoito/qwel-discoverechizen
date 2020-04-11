    <section id="front-plan" class="front-sec wave">
      <h2 class="front-sec-heading">
        <div class="row">
          <img src="<?php echo get_template_directory_uri() . '/assets/svg/title_plan.svg'; ?>" alt="plan">
        </div>
      </h2>
      <!--<div class="slider slider-sm">
        <div class="slider-inner">-->
      <div class="container">
        <div class="row">
          <?php
          $posts = get_posts([
            'posts_per_page' => 10,
            'post_type' => ['plan']
          ]);
          foreach ($posts as $post) {
            setup_postdata($post);
            get_template_part('template-parts/contents/archive-plan');
          }
          ?>
          </div>
        </div>
        <!--</div>
        <a class="slider-prev" href="#"><span data-icon="ei-chevron-left" data-size="l"></span></a>
        <a class="slider-next" href="#"><span data-icon="ei-chevron-right" data-size="l"></span></a>
      </div>
      <div class="slider-caption"></div>-->
      <a class="plan-all" href="<?php echo get_post_type_archive_link('plan'); ?>">&gt; 全てのおすすめ旅プランを見る</a>
    </section><!-- #plan -->
