<?php get_header(); ?>
  <main class="main">
    <header class="main__header">
      <h1 class="main__title<?php if (is_single() || is_page()) echo ' screen-reader-text'?>"><?php echo get_my_title(); ?></h1>
    </header>
    <div class="main__container">
      <?php if (is_singular('works') || is_post_type_archive('works') || is_tax('product') || is_tax('motif')) { ?>
      <div class="main--works">
        <div class="main--works__primary">
          <?php if (is_single()) { ?>
          <?php 
          if (have_posts()) {
            while (have_posts()) {
              the_post();
              get_template_part('parts/layout/article-work');
            }
          }
          ?>
          <?php } else { ?>
          <div class="cards">
            <?php 
            if (have_posts()) {
              while (have_posts()) {
                the_post();
                get_template_part('parts/components/cards');
              }
            }
            ?>
          </div>
          <?php insert_pagination(); ?>
          <?php } ?>
        </div><!-- .main--works__primary -->
        <aside class="main--works__secondary aside">
          <h2 class="aside__title">カテゴリー</h2>
          <?php insert_works_cat(); ?>
        </aside><!-- .main--works__secondary.aside -->
        <aside class="main--works__tertiary aside">
          <h2 class="aside__title">モチーフで検索</h2>
          <?php insert_works_tag(); ?>
        </aside><!-- .main--works__tertiary.aside -->
      </div><!-- .main--works -->
      <?php } else { ?>
      <div class="main__inner">
        <div class="main__primary">
          <?php if (is_404()) { ?>
          <p>お探しのページは見つかりませんでした</p>
          <?php } ?>
          <?php if (is_single() || is_home() || is_page()) { ?>
          <?php 
          if (have_posts()) {
            while (have_posts()) {
              the_post();
              get_template_part('parts/layout/article');
            }
          }
          ?>
          <?php } else { ?>
          <div class="lists">
            <?php 
            if (have_posts()) {
              while (have_posts()) {
                the_post();
                get_template_part('parts/components/lists');
              }
            }
            ?>
          </div>
          <?php insert_pagination(); ?>
          <?php } ?>
        </div><!-- .main__primary -->
        <?php if (is_home() || is_singular('post') || is_post_type_archive('post') || is_category() || is_tag() || is_date() || is_author() || is_search()) { ?>
        <div class="main__secondary">
          <?php dynamic_sidebar('blog-sidebar'); ?>
        </div><!-- .main__secondary -->
        <?php } ?>
      </div><!-- .main__inner -->
      <?php } ?>
    </div><!-- .main__container -->
  </main><!-- .main -->
<?php get_footer(); ?>
