<?php
/*
 * Template Name: Sea activity template
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
         * 固定コンテンツ
         * .lp.--seaActivity を使う (sass/objects/projects/_landingPages.scss)
         */
        if (have_posts()) {
          while (have_posts()) {
            the_post();
        ?>
          <article class="lp --seaActivity">
            <section>
              <h2>越前海岸の海遊び</h2>
              <section>
                <h3>(見出し)</h3>
                <div class="grid --mb_4 gallery">
                  <div class="grid__inner">
                    <div class="grid__11 --mt_2 --mb_2 gallery__desc">
                      <p>(ここにテキスト作成予定)
                        <br>(ここにテキスト作成予定)
                        <br>(ここにテキスト作成予定)</p>
                    </div>
                    <div class="grid__4 gallery__main">
                      <img src="<?php echo DE_THEME_URI . '/assets/no-image.jpg'; ?>">
                    </div>
                    <div class="grid__6">
                      <h4>INFORMATION</h4>
                      <table class="table">
                        <tbody>
                          <tr>
                            <th>事業所</th>
                            <td>(事業所名)</td>
                          </tr>
                          <tr>
                            <th>開催期間</th>
                            <td>通年</td>
                          </tr>
                          <tr>
                            <th>ご料金</th>
                            <td>(代表的なサービス) 3,300円～</td>
                          </tr>
                          <tr>
                            <th>ご予約</th>
                            <td>3日前まで</td>
                          </tr>
                          <tr>
                            <th>最低催行人数</th>
                            <td>5名</td>
                          </tr>
                          <tr>
                            <th>参加条件・準備</th>
                            <td>未成年の場合は保護者同伴</td>
                          </tr>
                          <tr>
                            <th>所在地</th>
                            <td>福井市XXXX-XX</td>
                          </tr>
                          <tr>
                            <th>連絡先</th>
                            <td><a href="tel:0776-xx-xxxx">0776-xx-xxxx</a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="grid grid__11 --left_lg --mt_2">
                      <div class="grid__inner">
                        <div class="grid__2 --mb_2 gallery__item">
                          <a href="<?php echo DE_THEME_URI . '/assets/no-image.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/no-image.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2 gallery__item">
                          <a href="<?php echo DE_THEME_URI . '/assets/no-image.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/no-image.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2 gallery__item">
                          <a href="<?php echo DE_THEME_URI . '/assets/no-image.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/no-image.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2 gallery__item">
                          <a href="<?php echo DE_THEME_URI . '/assets/no-image.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/no-image.jpg'; ?>">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <h3>(見出し)</h3>
                <div class="grid --mb_4 gallery">
                  <div class="grid__inner">
                    <div class="grid__11 --mt_2 --mb_2 gallery__desc">
                      <p>(ここにテキスト作成予定)
                        <br>(ここにテキスト作成予定)
                        <br>(ここにテキスト作成予定)</p>
                    </div>
                    <div class="grid__4 gallery__main">
                      <img src="<?php echo DE_THEME_URI . '/assets/no-image.jpg'; ?>">
                    </div>
                    <div class="grid__6">
                      <h4>INFORMATION</h4>
                      <table class="table">
                        <tbody>
                          <tr>
                            <th>事業所</th>
                            <td>(事業所名)</td>
                          </tr>
                          <tr>
                            <th>開催期間</th>
                            <td>通年</td>
                          </tr>
                          <tr>
                            <th>ご料金</th>
                            <td>(代表的なサービス) 3,300円～</td>
                          </tr>
                          <tr>
                            <th>ご予約</th>
                            <td>3日前まで</td>
                          </tr>
                          <tr>
                            <th>最低催行人数</th>
                            <td>5名</td>
                          </tr>
                          <tr>
                            <th>参加条件・準備</th>
                            <td>未成年の場合は保護者同伴</td>
                          </tr>
                          <tr>
                            <th>所在地</th>
                            <td>福井市XXXX-XX</td>
                          </tr>
                          <tr>
                            <th>連絡先</th>
                            <td><a href="tel:0776-xx-xxxx">0776-xx-xxxx</a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="grid grid__11 --left_lg --mt_2">
                      <div class="grid__inner">
                        <div class="grid__2 --mb_2 gallery__item">
                          <a href="<?php echo DE_THEME_URI . '/assets/no-image.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/no-image.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2 gallery__item">
                          <a href="<?php echo DE_THEME_URI . '/assets/no-image.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/no-image.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2 gallery__item">
                          <a href="<?php echo DE_THEME_URI . '/assets/no-image.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/no-image.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2 gallery__item">
                          <a href="<?php echo DE_THEME_URI . '/assets/no-image.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/no-image.jpg'; ?>">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </section>
          </article>
        <?php
          }
        }
        
        /**
         * 関連記事
         * 自身のスラグと同名のカテゴリーの記事を取得
         */
        ?>
        <div class="archive">
          <div class="list --lg">
            <ul class="list__inner">
              <?php
              $wp_obj  = get_queried_object();
              $post_id = $wp_obj->ID;
              $term    = get_term_by('slug', $wp_obj->post_name, 'category');
              $posts   = get_posts([
                'posts_per_page'  => get_option('posts_per_page'),
                'exclude'         => [$post_id],
                'category'        => $term->term_id
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
