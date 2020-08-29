    <section id="about" class="about">
      <h2 class="about__heading">about</h2>
      <div class="one-col">
        <?php
        $posts = get_posts([
          'posts_per_page' => 1,
          'include' => 11,
          'post_type' => 'page'
        ]);
        foreach ($posts as $post) {
          setup_postdata($post);
          get_template_part('parts/components/one-col');
        }
        ?>
      </div><!-- .one-col -->
    </section><!-- .about -->
