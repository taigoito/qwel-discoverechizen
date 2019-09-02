<?php get_header(); ?>
  <main id="main">
    <header id="page-header">
      <h1 id="page-title"><?php echo get_my_title(); ?></h1>
    </header>
    <div class="container">
      <div class="row">
        <div class="primary-col">
          <p>お探しのページは見つかりませんでした</p>
        </div><!-- .primary -->
        <?php if (!is_page()) { ?>
        <aside class="secondary-col">
          <?php dynamic_sidebar('blog-sidebar'); ?>
        </aside><!-- .secondary -->
        <?php } ?>
      </div>
    </div>
  </main><!-- main -->
<?php get_footer(); ?>
