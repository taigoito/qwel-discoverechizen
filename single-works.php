<?php get_header(); ?>
  <main id="main">
    <header id="page-header">
      <h1 id="page-title" class="screen-reader-text"><?php echo get_my_title(); ?></h1>
    </header>
    <div class="container">
      <div class="row">
        <div class="primary-col">
          <?php
          if (have_posts()) {
            while (have_posts()) {
              the_post();
              get_template_part('template-parts/contents/single-works');
            }
          }
          ?>
        </div>
        <aside class="secondary-col">
          <h2 class="navigation-title">カテゴリー</h2>
          <?php insert_works_cat(); ?>
        </aside>
        <aside class="tertiary-col">
          <h2 class="navigation-title">モチーフで検索</h2>
          <?php insert_works_tag(); ?>
        </aside>
      </div>
    </div><!-- .container -->
  </main><!-- main -->
<?php get_footer(); ?>
