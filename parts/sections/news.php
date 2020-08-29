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
            'posts_per_page' => 2,
            'post_type' => 'post',
            'category' => 1
          ]);
          foreach ($posts as $post) {
            setup_postdata($post);
            get_template_part('parts/components/cols');
          }
          ?>
        </div>
      </div><!-- .cols -->
      <a class="news__more" href="<?php echo get_term_link('news', 'category'); ?>">&gt; お知らせ をもっと見る</a>
    </section><!-- .news -->
    