    <section id="blog" class="blog">
      <h2 class="blog__heading">
        <div class="blog__heading-container">
          <img src="<?php echo get_template_directory_uri() . '/assets/svg/title_blog.svg'; ?>" alt="blog">
        </div>
      </h2>
      <div class="lists">
        <?php
        $posts = get_posts([
          'posts_per_page' => 3,
          'post_type' => 'post'
        ]);
        foreach ($posts as $post) {
          setup_postdata($post);
          get_template_part('parts/components/lists');
        }
        ?>
      </div><!-- .list -->
      <a href="<?php the_permalink(2); ?>">&gt; ブログ をもっと見る</a>
    </section><!-- .blog -->
