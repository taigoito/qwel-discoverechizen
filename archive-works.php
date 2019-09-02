<?php get_header(); ?>
  <main <?php main_id(); ?>>
    <header id="page-header">
      <h1><?php echo get_my_title(); ?></h1>
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
        <div class="secondary-col">
          <h2>カテゴリー</h2>
          <?php insert_works_cat(); ?>
        </div>
        <div class="tertiary-col">
          <h2>モチーフで検索</h2>
          <?php insert_works_tag(); ?>
        </div>
      </div>
    </div>
  </main><!-- main -->
<?php get_footer(); ?>
