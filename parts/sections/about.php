    <section id="about" class="about">
      <h2 class="about__heading">
        <div class="about__heading-container">
          <img src="<?php echo get_template_directory_uri() . '/assets/svg/title_about.svg'; ?>" alt="about">
        </div>
      </h2>
      <div class="about__main">
        <div class="about__container">
          <?php
          $posts = get_posts([
            'posts_per_page' => 1,
            'include' => [3],
            'post_type' => 'page'
          ]);
          foreach ($posts as $post) {
            setup_postdata($post);
            the_content();
          }
          ?>
          <a href="<?php the_permalink(3); ?>">&gt; 越前海岸と私たちについて もっと詳しく</a>
        </div>
      </div>
    </section><!-- .about -->
