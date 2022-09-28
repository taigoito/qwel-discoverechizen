<?php
/*
 * Template Name: Craft template
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
         * .lp.--craft を使う (sass/objects/projects/_landingPages.scss)
         */
        if (have_posts()) {
          while (have_posts()) {
            the_post();
        ?>
          <article class="lp --craft">
            <section>
              <h2>越前海岸の物作り体験</h2>
              <section>
              <h3>ガラス制作体験</h3>
                <div class="grid --mb_4 gallery">
                  <div class="grid__inner">
                    <div class="grid__5">
                      <div class="gallery__desc --mb_3">
                        <p>海と山に囲まれた小さな町のガラス工房。
                          <br>日常の中に美しさを見つけ、それをガラスに映そうと、日々制作しています。この地域を映し出す作品にもぜひ触れてみてください。
                          <br>吹きガラス制作、スタンプ制作、フォトフレーム制作、ミニプレート制作の4種の体験がご用意されています。
                          <br>展示してあるガラス作品は海をモチーフにしたものが多く、お土産にも最適です。</p>
                      </div>
                      <div class="gallery__main">
                        <img src="<?php echo DE_THEME_URI . '/assets/craft/watariglass_shop.jpg'; ?>">
                      </div>
                    </div>
                    <div class="grid__5">
                      <h4>INFORMATION</h4>
                      <table class="table">
                        <tbody>
                          <tr>
                            <th>事業所</th>
                            <td><a href="https://watariglass.com/" target="_blank">WATARIGLASS studio (ワタリグラススタジオ)</a></td>
                          </tr>
                          <tr>
                            <th>開催期間</th>
                            <td>通年 (水曜定休、火曜ショップのみ営業) ※</td>
                          </tr>
                          <tr>
                            <th>ご料金</th>
                            <td>吹きガラス制作体験 3,850円～
                              <br>スタンプ制作体験 2,200円
                              <br>フォトフレーム制作体験 1,650円
                              <br>ミニプレート制作体験 5,500円～ (団体様向け)</td>
                          </tr>
                          <tr>
                            <th>ご予約</th>
                            <td>前日まで</td>
                          </tr>
                          <tr>
                            <th>最低催行人数</th>
                            <td>1名</td>
                          </tr>
                          <tr>
                            <th>参加条件</th>
                            <td>小学生以上
                              <br>動きやすい服装、汗拭きタオル等ご準備ください。</td>
                          </tr>
                          <tr>
                            <th>所在地</th>
                            <td>福井市鮎川町17-14</td>
                          </tr>
                          <tr>
                            <th>連絡先</th>
                            <td><a href="tel:0776-88-2025">0776-88-2025</a></td>
                          </tr>
                        </tbody>
                      </table>
                      <p><small>※ 2月は溶解炉メンテナンスのため、体験内容が限られます。</small></p>
                    </div>
                    <div class="grid grid__11 --left_lg --mt_2">
                      <div class="grid__inner">
                        <div class="grid__2 --mb_2 gallery__item">
                          <a href="<?php echo DE_THEME_URI . '/assets/craft/watariglass_shop.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/craft/watariglass_shop.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2 gallery__item">
                          <a href="<?php echo DE_THEME_URI . '/assets/craft/watariglass_app.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/craft/watariglass_app.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2 gallery__item">
                          <a href="<?php echo DE_THEME_URI . '/assets/craft/watariglass_act.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/craft/watariglass_act.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2 gallery__item">
                          <a href="<?php echo DE_THEME_URI . '/assets/craft/watariglass_act01.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/craft/watariglass_act01.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2 gallery__item">
                          <a href="<?php echo DE_THEME_URI . '/assets/craft/watariglass_act02.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/craft/watariglass_act02.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2 gallery__item">
                          <a href="<?php echo DE_THEME_URI . '/assets/craft/watariglass_act03.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/craft/watariglass_act03.jpg'; ?>">
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
                    <div class="grid__5">
                      <div class="gallery__desc --mb_3">
                        <p>(ここにテキスト作成予定)
                          <br>(ここにテキスト作成予定)
                          <br>(ここにテキスト作成予定)</p>
                      </div>
                      <div class="gallery__main">
                        <img src="<?php echo DE_THEME_URI . '/assets/no-image.jpg'; ?>">
                      </div>
                    </div>
                    <div class="grid__5">
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
                            <th>キャンセル規定</th>
                            <td>3日前 50% / 前日 100%</td>
                          </tr>
                          <tr>
                            <th>定員</th>
                            <td>10名</td>
                          </tr>
                          <tr>
                            <th>最低催行人数</th>
                            <td>5名</td>
                          </tr>
                          <tr>
                            <th>参加条件</th>
                            <td>小学生以上
                              <br>未成年の場合は保護者同伴</td>
                          </tr>
                          <tr>
                            <th>所在地</th>
                            <td>福井市XXXX-XX</td>
                          </tr>
                          <tr>
                            <th>連絡先</th>
                            <td><a href="tel:0776-xx-xxxx">0776-xx-xxxx</a></td>
                          </tr>
                          <tr>
                            <th>URL</th>
                            <td><a href="https://www.example.com/" target="_blank">https://www.example.com/</a></td>
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
