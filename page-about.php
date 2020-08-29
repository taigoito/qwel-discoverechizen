<?php get_header(); ?>
  <main id="main" class="main--about">
    <article class="article--about">
      <?php 
      if (have_posts()) {
        while (have_posts()) {
          the_post();
          the_content();
        }
      }
      ?>
    </article>
    <article class="article--summary">
    <?php
    $posts = get_posts([
      'posts_per_page' => 1,
      'include' => 31,
      'post_type' => 'page'
    ]);
    foreach ($posts as $post) {
      setup_postdata($post);
      the_content();
    }
    ?>
    </article>
    <?php
    $posts = get_children([
      'post_parent' => get_the_ID(),
      'order' => 'ASC',
      'post_type'   => 'page'
    ]);
    foreach ($posts as $post) {
      setup_postdata($post);
    ?>
    <div class="article--summary-child">
      <div class="article--summary-child__image">
        <?php
          if (has_post_thumbnail()) {
            the_post_thumbnail('medium');
          } else {
            no_image('lg');
          }
        ?>
      </div>
      <div class="article--summary-child__content">
        <?php the_content(); ?>
        <a href="<?php echo get_term_link(get_term_by('slug', 'info-' . $post->post_name, 'info-cat')); ?>">&gt; <?php the_title(); ?>の観光情報</a>
      </div>
    </div>
    <?php } ?>
  </main><!-- .main--about -->
<?php get_footer(); ?>
