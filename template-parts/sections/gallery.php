    <section id="front-gallery" class="front-sec">
      <h2 class="front-sec-heading">
        <div class="row">
          <img src="<?php echo get_template_directory_uri() . '/assets/svg/title_photo.svg'; ?>" alt="photo gallery">
        </div>
      </h2>
      <ul class="photo-gallery">
        <?php
        $posts = get_posts([
          'posts_per_page' => 24,
          'post_type' => ['photo']
        ]);
        foreach ($posts as $post) {
          setup_postdata($post);
          get_template_part('template-parts/contents/gallery');
        }
        ?>
      </ul>
    </section><!-- #gallery -->
