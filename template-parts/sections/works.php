    <section id="works">
    <h2>works</h2>
      <div class="slider slider-sm">
        <div class="slider-inner">
          <?php
          $posts = get_posts([
            'posts_per_page' => 10,
            'post_type' => 'works'
          ]);
          foreach ($posts as $post) {
            setup_postdata($post);
            get_template_part('template-parts/contents/works');
          }
          ?>
        </div><!-- .slider-inner -->
        <a class="slider-prev" href="#"><span data-icon="ei-chevron-left" data-size="l"></span></a>
        <a class="slider-next" href="#"><span data-icon="ei-chevron-right" data-size="l"></span></a>
      </div><!-- .slider -->
      <div class="slider-caption"></div>
    </section><!-- #works -->
