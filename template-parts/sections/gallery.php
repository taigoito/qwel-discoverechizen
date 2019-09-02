    <section id="gallery">
      <h2 class="section-heading">gallery</h2>
      <ul class="photo-gallery">
        <?php
        $posts = get_posts([
          'posts_per_page' => 12,
          'post_type' => 'photo'
        ]);
        foreach ($posts as $post) {
          setup_postdata($post);
          get_template_part('template-parts/contents/gallery');
        }
        ?>
      </ul>
    </section><!-- #gallery -->
