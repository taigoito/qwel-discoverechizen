<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <?php
      $posts = get_posts([
        'posts_per_page' => 2,
        'include' => [3, 31],
        'orderby' => 'ID',
        'order' => 'ASC',
        'post_type' => 'page'
      ]);
      foreach ($posts as $post) {
        setup_postdata($post);
        the_content();

        $posts = get_children([
          'post_parent' => get_the_ID(),
          'order' => 'ASC',
          'post_type'   => 'page'
        ]);
        foreach ($posts as $post) {
          setup_postdata($post);
      ?>
        <div class="summary-child">
          <div class="featured-image">
            <?php
              if (has_post_thumbnail()) {
                the_post_thumbnail('medium');
              } else {
                no_image('lg');
              }
            ?>
          </div>
          <div class="summary-child-content">
            <?php the_content(); ?>
            <a href="<?php echo get_term_link(get_term_by('slug', 'info-' . $post->post_name, 'info-cat')); ?>">&gt; <?php the_title(); ?>の観光情報</a>
          </div>
        </div>
      <?php
        }
      }
      ?>
    </div><!-- .container -->
  </main><!-- main -->
<?php get_footer(); ?>
