    <section id="news" class="news">
      <h2 class="news__heading">
        <div class="news__heading-container">
          <img src="<?php echo get_template_directory_uri() . '/assets/svg/title_news.svg'; ?>" alt="news">
        </div>
      </h2>
      <div class="cols">
        <div class="cols__container">
          <?php
          $posts = get_posts([
            'posts_per_page' => 3,
            'category' => 1,
            'post_type' => 'post'
          ]);
          foreach ($posts as $post) {
            setup_postdata($post);
            get_template_part('parts/components/cols');
          }
          ?>
          <?php
          $posts = get_posts([
            'posts_per_page' => 1,
            'post_type' => 'post',
            'include' => [2080]
          ]);
          foreach ($posts as $post) {
            setup_postdata($post);
            get_template_part('parts/components/cols');
          }
          ?>
        </div>
      </div><!-- .cols -->
      <a class="news__more" href="<?php echo get_category_link(1); ?>">&gt; 最新情報 をもっと見る</a>
    </section><!-- .news -->
    