    <section id="about">
      <h2>about</h2>
      <div class="container">
        <?php
        $posts = get_posts([
          'posts_per_page' => 1,
          'order' => 'ASC',
          'exclude' => [1, 10],
          'post_type' => 'page'
        ]);
        foreach ($posts as $post) {
          setup_postdata($post);
          get_template_part('template-parts/contents/about');
        }
        ?>
      </div><!-- .container -->
    </section><!-- #about -->
