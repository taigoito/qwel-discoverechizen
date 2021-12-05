<?php get_header();
  /**
   * Main
   * 
   */
  ?>
  <main id="main" class="main">
    <div class="main__wrapper">
      <div class="main__container">
        <?php
        /**
         * パンくずリスト
         */
        get_template_part('template-parts/breadcrumb');
        ?><!-- #breadcrumb-->
        <div class="archive">
          <div class="list --lg">
            <ul class="list__inner">
              <?php
              /**
               * メインループ
               * アーカイブページでは .archive で括って使う (sass/objects/projects/_archive.scss)
               */
              if (have_posts()) {
                while (have_posts()) {
                  the_post();
                  get_template_part('template-parts/post');
                }
              }
              ?>
            </ul>
          </div>
          <?php get_template_part('template-parts/pagination'); ?><!-- #pagination-->
        </div><!-- .archive -->
        <?php
        /**
         * Sidebar
         * ウィジェットエリア (個別投稿、アーカイブページのみ)
         */
        get_sidebar();
         ?>
      </div>
    </div>
  </main><!-- #main -->
<?php get_footer();
