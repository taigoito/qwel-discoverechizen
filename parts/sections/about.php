    <section id="about" class="about">
      <h2 class="about__heading">
        <div class="about__heading-container">
          <img src="<?php echo get_template_directory_uri() . '/assets/svg/title_about.svg'; ?>" alt="about">
        </div>
      </h2>
      <div class="one-col">
        <?php
        $posts = get_posts([
          'posts_per_page' => 1,
          'include' => 3,
          'post_type' => 'page'
        ]);
        foreach ($posts as $post) {
          setup_postdata($post);
          get_template_part('parts/components/one-col');
        }
        ?>
      </div>
    </section><!-- .about -->
