<?php
/*
 * Template Name: Blank template
 * Template Post Type: post, page
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
            
            /**
             * Pagenation
             */
            if (is_single()) get_template_part('template-parts/pagination');
            ?><!-- #pagination-->
          </article><!-- .post -->
        <?php
          }
        }
        
        /**
         * 関連記事
         * 自身の属するカテゴリーの記事を取得
         */
        ?>
        <div class="archive">
          <div class="list --lg">
            <ul class="list__inner">
              <?php
              $wp_obj  = get_queried_object();
              $post_id = $wp_obj->ID;
              $terms   = get_the_terms($post_id, 'category');
              $term    = $terms[0]->term_id;
              $posts   = get_posts([
                'posts_per_page'  => get_option('posts_per_page'),
                'exclude'         => [$post_id],
                'category'        => $term
              ]);
              foreach ($posts as $post) {
                setup_postdata($post);
                get_template_part('template-parts/post');
              }
              ?>
            </ul>
          </div>
        </div><!-- .archive -->
      </div>
    </div>
  </main>
<?php get_footer();
