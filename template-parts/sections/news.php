    <section id="news">
      <h2 class="section-heading">news</h2>
      <div class="container">
        <?php
        $posts = get_posts([
          'posts_per_page' => 5,
          'post_type' => ['post', 'works']
        ]);
        foreach ($posts as $post) {
          setup_postdata($post);
          get_template_part('template-parts/contents/news');
        }
        ?>
      </div><!-- .container -->
    </section><!-- #news -->
