<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <div class="row">
        <div class="plan-intro">
        <?php
        $posts = get_posts([
          'posts_per_page' => 1,
          'include' => [5],
          'post_type' => 'page'
        ]);
        foreach ($posts as $post) {
          setup_postdata($post);
          the_content();
        }
        wp_reset_postdata();
        ?>
        </div>
        <?php
        $posts = get_posts([
          'posts_per_page' => 10,
          'post_type' => 'plan'
        ]);
        foreach ($posts as $post) {
          setup_postdata($post);
          get_template_part('template-parts/contents/archive-plan');
        }
        ?>
        <?php if (!is_singular()) insert_pagination(); ?>
      </div><!-- .row -->
    </div><!-- .container -->
  </main><!-- main -->
<?php get_footer(); ?>
