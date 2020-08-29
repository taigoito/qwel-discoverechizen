    <section id="photos" class="photos">
      <h2 class="photos__heading">
        <div class="photos__heading-container">
          <img src="<?php echo get_template_directory_uri() . '/assets/svg/title_photo.svg'; ?>" alt="photo gallery">
        </div>
      </h2>
      <ul class="gallery">
        <?php
        $posts = get_posts([
          'posts_per_page' => 12,
          'post_type' => 'photo'
        ]);
        foreach ($posts as $post) {
          setup_postdata($post);
          get_template_part('parts/components/gallery');
        }
        ?>
      </ul><!-- .gallery -->
    </section><!-- .photos -->
