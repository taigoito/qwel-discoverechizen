<?php
/*
 * Template Name: Stay template
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
         * .lp.--food を使う (sass/objects/projects/_landingPages.scss)
         */
        if (have_posts()) {
          while (have_posts()) {
            the_post();
        ?>
          <article class="lp --stay">
            <section>
              <h2>宿泊施設のご紹介</h2>
              <section>
                <h3>割烹旅館 越前満月</h3>
                <p>露天風呂付き和モダン客室プランが人気。
                  <br>和の趣とモダンの調和で特別なひとときを。
                  <br>露天風呂付きでゆっくりお寛ぎ下さい。</p>
                <div class="grid --mb_4">
                  <div class="grid__inner">
                    <div class="grid__4">
                      <img src="<?php echo DE_THEME_URI . '/assets/stay/mangetsu_service.jpg'; ?>">
                    </div>
                    <div class="grid__6">
                      <h4>INFORMATION</h4>
                      <table class="table">
                        <tbody>
                          <tr>
                            <th>事業所</th>
                            <td>割烹旅館 越前満月</td>
                          </tr>
                          <tr>
                            <th>所在地</th>
                            <td>福井市川尻町41-45-1</td>
                          </tr>
                          <tr>
                            <th>連絡先</th>
                            <td><a href="tel:0776-85-1333">0776-85-1333</a></td>
                          </tr>
                          <tr>
                            <th>URL</th>
                            <td><a href="http://www.mangetu.net/" target="_blank">http://www.mangetu.net/</a></td>
                          </tr>
                          <tr>
                            <th>参考価格</th>
                            <td>1名様 26,000円位～</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="grid grid__11 --left_lg --mt_2">
                      <div class="grid__inner">
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/stay/mangetsu_service.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/stay/mangetsu_service.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/stay/mangetsu_app.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/stay/mangetsu_app.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/stay/mangetsu_interior.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/stay/mangetsu_interior.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/stay/mangetsu_kani.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/stay/mangetsu_kani.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/stay/mangetsu_service01.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/stay/mangetsu_service01.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/stay/mangetsu_stf.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/stay/mangetsu_stf.jpg'; ?>">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <h3>白浜荘</h3>
                <p>地元特産もみわかめやオリジナルわかめ塩の商品も要チェック！
                  <br>かに剥きが得意な社長はバイリンガルなので英語の案内もお任せあれ。</p>
                <div class="grid --mb_4">
                  <div class="grid__inner">
                    <div class="grid__4">
                      <img src="<?php echo DE_THEME_URI . '/assets/stay/shirahamaso_app.jpg'; ?>">
                    </div>
                    <div class="grid__6">
                      <h4>INFORMATION</h4>
                      <table class="table">
                        <tbody>
                          <tr>
                            <th>事業所</th>
                            <td>白浜荘</td>
                          </tr>
                          <tr>
                            <th>所在地</th>
                            <td>福井市西二ツ屋2-1</td>
                          </tr>
                          <tr>
                            <th>連絡先</th>
                            <td><a href="tel:0776-86-1316">0776-86-1316</a></td>
                          </tr>
                          <tr>
                            <th>URL</th>
                            <td><a href="http://shirahamaso.jp/" target="_blank">http://shirahamaso.jp/</a></td>
                          </tr>
                          <tr>
                            <th>参考価格</th>
                            <td>1泊2食付 20,000円位～</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <h3>国民宿舎 鷹巣荘</h3>
                <p>源泉かけ流し100%のお湯が柔らかいとリピーターの方に評判を頂いているアルカリ性単純泉宿。
                  <br>水素濃度も高く、保温効果も◎！</p>
                <div class="grid --mb_4">
                  <div class="grid__inner">
                    <div class="grid__4">
                      <img src="<?php echo DE_THEME_URI . '/assets/stay/takasusou_service.jpg'; ?>">
                    </div>
                    <div class="grid__6">
                      <h4>INFORMATION</h4>
                      <table class="table">
                        <tbody>
                          <tr>
                            <th>事業所</th>
                            <td>国民宿舎 鷹巣荘</td>
                          </tr>
                          <tr>
                            <th>所在地</th>
                            <td>福井市蓑町3-11-1</td>
                          </tr>
                          <tr>
                            <th>連絡先</th>
                            <td><a href="tel:0776-86-1111">0776-86-1111</a></td>
                          </tr>
                          <tr>
                            <th>URL</th>
                            <td><a href="http://takasusou.jp/" target="_blank">http://takasusou.jp/</a></td>
                          </tr>
                          <tr>
                            <th>参考価格</th>
                            <td>1泊2食付 12,000円位～</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="grid grid__11 --left_lg --mt_2">
                      <div class="grid__inner">
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/stay/takasusou_service.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/stay/takasusou_service.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/stay/takasusou_app.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/stay/takasusou_app.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/stay/takasusou_service01.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/stay/takasusou_service01.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/stay/takasusou_service02.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/stay/takasusou_service02.jpg'; ?>">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <h3>ホテル割烹石丸</h3>
                <p>目前に広がる「海」を眺めながら、新鮮な素材を活かした季節の味を堪能できます。
                  <br>海の幸のお土産品も販売しています。</p>
                <div class="grid --mb_4">
                  <div class="grid__inner">
                    <div class="grid__4">
                      <img src="<?php echo DE_THEME_URI . '/assets/food/ishimaru_app.jpg'; ?>">
                    </div>
                    <div class="grid__6">
                      <h4>INFORMATION</h4>
                      <table class="table">
                        <tbody>
                          <tr>
                            <th>事業所</th>
                            <td>ホテル割烹石丸</td>
                          </tr>
                          <tr>
                            <th>所在地</th>
                            <td>福井市鮎川町94-8-1</td>
                          </tr>
                          <tr>
                            <th>連絡先</th>
                            <td><a href="tel:0776-88-2225">0776-88-2225</a></td>
                          </tr>
                          <tr>
                            <th>URL</th>
                            <td><a href="http://ishimaru.biz/" target="_blank">http://ishimaru.biz/</a></td>
                          </tr>
                          <tr>
                            <th>参考価格</th>
                            <td>1泊2食付 15,000円位～</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="grid grid__11 --left_lg --mt_2">
                      <div class="grid__inner">
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/food/ishimaru_app.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/food/ishimaru_app.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/food/ishimaru_interior.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/food/ishimaru_interior.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/food/ishimaru_service.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/food/ishimaru_service.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/food/ishimaru_stf.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/food/ishimaru_stf.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/food/ishimaru_vst.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/food/ishimaru_vst.jpg'; ?>">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <h3>兼八旅館</h3>
                <p>越前海岸を眼前に春夏秋冬それぞれに美味しく豊かな日本海の幸。
                  <br>海山に囲まれた素晴らしい景観に癒されるひととき。</p>
                <div class="grid --mb_4">
                  <div class="grid__inner">
                    <div class="grid__4">
                      <img src="<?php echo DE_THEME_URI . '/assets/stay/kane8_interior.jpg'; ?>">
                    </div>
                    <div class="grid__6">
                      <h4>INFORMATION</h4>
                      <table class="table">
                        <tbody>
                          <tr>
                            <th>事業所</th>
                            <td>兼八旅館</td>
                          </tr>
                          <tr>
                            <th>所在地</th>
                            <td>福井市鮎川町98-9</td>
                          </tr>
                          <tr>
                            <th>連絡先</th>
                            <td><a href="tel:0766-88-2005">0766-88-2005</a></td>
                          </tr>
                          <tr>
                            <th>URL</th>
                            <td><a href="https://kane8.info/" target="_blank">https://kane8.info/</a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <h3>民宿 よねや</h3>
                <p>築140年の老舗民宿。
                  <br>日本海の夕日を眺めながら食事が楽しめるほか、海辺で海水浴やワーケーションも。</p>
                <div class="grid --mb_4">
                  <div class="grid__inner">
                    <div class="grid__4">
                      <img src="<?php echo DE_THEME_URI . '/assets/stay/yoneya_app.jpg'; ?>">
                    </div>
                    <div class="grid__6">
                      <h4>INFORMATION</h4>
                      <table class="table">
                        <tbody>
                          <tr>
                            <th>事業所</th>
                            <td>民宿 よねや</td>
                          </tr>
                          <tr>
                            <th>所在地</th>
                            <td>福井市蒲生町11-6</td>
                          </tr>
                          <tr>
                            <th>連絡先</th>
                            <td><a href="tel:0776-89-2266">0776-89-2266</a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <h3>無限庵 Stay-Earth (むげんあんステイアース)</h3>
                <p>コーヒー豆やお料理、フードも体に優しいオーガニック料理をご用意。
                  <br>美しい自然に囲まれた場所で本当の贅沢と豊かさを感じて。</p>
                <div class="grid --mb_4">
                  <div class="grid__inner">
                    <div class="grid__4">
                      <img src="<?php echo DE_THEME_URI . '/assets/stay/cafeearth_app02.jpg'; ?>">
                    </div>
                    <div class="grid__6">
                      <h4>INFORMATION</h4>
                      <table class="table">
                        <tbody>
                          <tr>
                            <th>事業所</th>
                            <td>Cafe Earth</td>
                          </tr>
                          <tr>
                            <th>所在地</th>
                            <td>福井市浜北山町18-8</td>
                          </tr>
                          <tr>
                            <th>連絡先</th>
                            <td><a href="tel:0776-89-7080">0776-89-7080</a></td>
                          </tr>
                          <tr>
                            <th>URL</th>
                            <td><a href="https://earth-cafe-live-stay.com/" target="_blank">https://earth-cafe-live-stay.com/</a></td>
                          </tr>
                          <tr>
                            <th>参考価格</th>
                            <td>2名様(素泊まり) 38,000円位～</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="grid grid__11 --left_lg --mt_2">
                      <div class="grid__inner">
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/stay/cafeearth_app02.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/stay/cafeearth_app02.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/stay/cafeearth_app03.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/stay/cafeearth_app03.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/stay/cafeearth_app04.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/stay/cafeearth_app04.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/stay/cafeearth_app05.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/stay/cafeearth_app05.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/stay/cafeearth_interior02.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/stay/cafeearth_interior02.jpg'; ?>">
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
  <?php
  /**
   * Cover
   * 個別投稿ページと同じく、カスタマイザーで設定した3番目の画像から優先して表示
   */
  get_template_part('template-parts/cover');
  ?><!-- #cover -->
<?php get_footer();
