<?php get_header();
  /**
   * Main
   * アーカイブページでは、main__container に .--xl を付与
   */
  ?>
  <main id="main" class="main">
    <?php
    /**
     * Title Area
     * H1タグで、クエリに応じたタイトルを表示
     */
    get_template_part('template-parts/titleArea');
    ?><!-- #titleArea -->
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
      </div>
    </div>
  </main><!-- #main -->
<?php get_footer();
