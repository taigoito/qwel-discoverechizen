    <section id="news" class="news">
      <h2 class="news__heading">news</h2>
      <div class="lists">
        <?php
        $posts = get_posts([
          'posts_per_page' => 5,
          'post_type' => ['post']
        ]);
        foreach ($posts as $post) {
          setup_postdata($post);
          get_template_part('parts/components/lists');
        }
        ?>
      </div><!-- .lists -->
    </section><!-- .news -->
