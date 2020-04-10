<?php get_header(); ?>
  <main id="main">
    <header id="page-header">
      <h1 id="page-title"><?php echo get_my_title(); ?></h1>
    </header>
    <div class="container">
      <div class="row">
        <div class="primary-col">
          <div class="row">
            <?php
            if (have_posts()) {
              while (have_posts()) {
                the_post();
                get_template_part('template-parts/contents/archive-works');
              }
            }
            ?>
          </div>
          <?php insert_pagination(); ?>
        </div>
        <aside class="secondary-col">
          <h2 class="nav-title">カテゴリー</h2>
          <?php insert_works_cat(); ?>
        </aside>
        <aside class="tertiary-col">
          <h2 class="nav-title">モチーフで検索</h2>
          <?php insert_works_tag(); ?>
        </aside>
      </div>
    </div><!-- .container -->
  </main><!-- main -->
<?php get_footer(); ?>
