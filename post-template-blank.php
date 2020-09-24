<?php
/*
 * Template Name: 空白のテンプレート
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
    </div><!-- .main__container -->
  </main><!-- .main -->
<?php get_footer(); ?>
