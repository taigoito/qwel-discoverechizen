    <section id="front-news" class="front-sec">
      <h2 class="front-sec-heading">
        <div class="row">
          <img src="<?php echo get_template_directory_uri() . '/assets/svg/title_news.svg'; ?>" alt="news">
        </div>
      </h2>
      <div class="container">
        <div class="row">
        <?php
        $posts = get_posts([
          'posts_per_page' => 2,
          'post_type' => 'post',
          'category' => 1
        ]);
        foreach ($posts as $post) {
          setup_postdata($post);
          get_template_part('template-parts/contents/news');
        }
        ?>
        </div><!-- .row -->
      </div><!-- .container -->
    </section><!-- #news -->