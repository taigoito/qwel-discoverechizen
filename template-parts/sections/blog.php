    <section id="front-blog" class="front-sec">
      <h2 class="front-sec-heading">
        <div class="row">
          <img src="<?php echo get_template_directory_uri() . '/assets/svg/title_blog.svg'; ?>" alt="blog">
        </div>
      </h2>
      <div class="container">
        <div class="row">
          <?php
          $posts = get_posts([
            'posts_per_page' => 3,
            'post_type' => 'post'
          ]);
          foreach ($posts as $post) {
            setup_postdata($post);
            get_template_part('template-parts/contents/blog');
          }
          ?>
        </div><!-- .row -->
        <a href="<?php the_permalink(2); ?>">&gt; ブログを もっと見る</a>
      </div><!-- .container -->
    </section><!-- #blog -->
