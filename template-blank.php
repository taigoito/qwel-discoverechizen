<?php
/*
 * Template Name: Blank template
 * Template Post Type: post
 */
?>

<?php get_header();
  /**
   * Main
   * 
   */
  ?>
  <main id="main" class="main">
  <?php
    /**
     * Title Area
     * H1タグで、個別ページのタイトルを表示
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
        <?php
        /**
         * メインループ
         * 固定ページと同じく .post.--page を使う (sass/objects/projects/_pages.scss)
         */
        if (have_posts()) {
          while (have_posts()) {
            the_post();
        ?>
          <article class="post --page">
            <?php
            /**
             * .post__content
             */
            get_template_part('template-parts/post/content');
            ?>
          </article><!-- .post -->
        <?php
          }
        }
        ?>
      </div>
    </div>
  </main>
  <?php
  /**
   * Cover
   * 個別投稿ページと同じく、カスタマイザーで設定した3番目の画像から優先して表示
   */
  get_template_part('template-parts/cover');
  ?><!-- #cover -->
<?php get_footer();
