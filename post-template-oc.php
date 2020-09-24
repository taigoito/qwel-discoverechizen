<?php
/*
 * Template Name: オンラインショップ交流会テンプレート
 * Template Post Type: post
 */
?>

<?php get_header(); ?>
  <main id="main" class="main">
    <div class="main__container">
      <?php 
      if (have_posts()) {
      while (have_posts()) {
          the_post();
          the_content();
        }
      }
      ?>
      <div class="lists">
        <?php
        $posts = get_posts([
          'posts_per_page' => 12,
          'post_type' => 'post',
          'tag' => 'oc'
        ]);
        foreach ($posts as $post) {
          setup_postdata($post);
          get_template_part('parts/components/lists');
        }
        ?>
      </div><!-- .list -->
    </div><!-- .main__container -->
  </main><!-- .main -->
<?php get_footer(); ?>
