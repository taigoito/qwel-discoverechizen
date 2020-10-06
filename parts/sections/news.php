    <section id="news" class="news">
      <h2 class="news__heading">
        <div class="news__heading-container">
          <img src="<?php echo get_template_directory_uri() . '/assets/svg/title_news.svg'; ?>" alt="news">
        </div>
      </h2>
      <ul class="news__categories">
      <?php $categories = get_categories(); ?>
      <?php foreach($categories as $category) {?>
        <li class="news__category"><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a></li>
      <?php } ?>
      </ul>
      <div class="cols">
        <div class="cols__container">
          <?php
          $posts = get_posts([
            'posts_per_page' => 4,
            'post_type' => 'post'
          ]);
          foreach ($posts as $post) {
            setup_postdata($post);
            get_template_part('parts/components/cols');
          }
          ?>
        </div>
      </div><!-- .cols -->
      <a class="news__more" href="<?php the_permalink(2); ?>">>&gt; お知らせ をもっと見る</a>
    </section><!-- .news -->
    