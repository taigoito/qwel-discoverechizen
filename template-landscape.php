<?php
/*
 * Template Name: Landscape template
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
         * .lp.--landscape を使う (sass/objects/projects/_landingPages.scss)
         */
        if (have_posts()) {
          while (have_posts()) {
            the_post();
        ?>
          <article class="lp --landscape">
            <section>
              <h2>越前海岸の美しい景観のご紹介</h2>
              <section>
                <h3>亀島遊歩道（亀島園地）</h3>
                <div class="grid --mb_4">
                  <div class="grid__inner">
                    <div class="grid__6">
                      <img src="<?php echo DE_THEME_URI . '/assets/landscape/landscape_gamejima.jpg'; ?>">
                    </div>
                    <div class="grid__5 --mt_2 --mb_2">
                      <p>亀島（がめじま）は、福井市松蔭町の沖合100メートルにある小さな無人島です。
                        <br>遊歩道は鷹巣荘の横から海際に続く遊歩道で、亀島の対岸あたりまで歩くことができます。
                        <br>遊歩道は自然の岩を生かして作られている箇所もあり、越前海岸らしい風景を見ることができます。</p>
                      <h4>INFORMATION</h4>
                      <table class="table">
                        <tbody>
                          <tr>
                            <th>所在地</th>
                            <td>福井市松蔭町</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <h3>鉾島園地</h3>
                <div class="grid --mb_4">
                  <div class="grid__inner">
                    <div class="grid__6 --order_2">
                      <img src="<?php echo DE_THEME_URI . '/assets/landscape/landscape_hokojima.jpg'; ?>">
                    </div>
                    <div class="grid__5 --order_1 --mt_2 --mb_2">
                      <p>鉾島（ほこじま）は、福井市南菅生町にある、荒波に浸食された高さ50mの柱状の岩場です。
                        <br>遊歩道が整備されていて、断がいの上には松が生え、地蔵が安置されています。
                        <br>撮影・夕日スポットとして人気です。</p>
                      <h4>INFORMATION</h4>
                      <table class="table">
                        <tbody>
                          <tr>
                            <th>所在地</th>
                            <td>福井市南菅生町</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <h3>大岬園地</h3>
                <div class="grid --mb_4">
                  <div class="grid__inner">
                    <div class="grid__6">
                      <img src="<?php echo DE_THEME_URI . '/assets/landscape/landscape_ohmisaki.jpg'; ?>">
                    </div>
                    <div class="grid__5 --mt_2 --mb_2">
                      <p>福井市鮎川町にある海岸散策路です。
                        <br>波景や夕景を見るオススメスポットです。</p>
                      <h4>INFORMATION</h4>
                      <table class="table">
                        <tbody>
                          <tr>
                            <th>所在地</th>
                            <td>福井市鮎川町</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <h3>弁慶の洗濯岩</h3>
                <div class="grid --mb_4">
                  <div class="grid__inner">
                    <div class="grid__6 --order_2">
                      <img src="<?php echo DE_THEME_URI . '/assets/landscape/landscape_benkeinosentakuiwa.jpg'; ?>">
                    </div>
                    <div class="grid__5 --order_1 --mt_2 --mb_2">
                      <p>日本海の荒波に浸食されてできた様々な紋様のある奇岩です。
                        <br>その昔、源義経・弁慶主従が、兄頼朝の追討から逃れるため奥州へ向かう途中、ここで旅衣を洗ったという伝説が残っています。</p>
                      <h4>INFORMATION</h4>
                      <table class="table">
                        <tbody>
                          <tr>
                            <th>所在地</th>
                            <td>福井市小丹生町</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <h3>武周ヶ池</h3>
                <div class="grid --mb_4">
                  <div class="grid__inner">
                    <div class="grid__6">
                      <img src="<?php echo DE_THEME_URI . '/assets/landscape/landscape_bushugaike.jpg'; ?>">
                    </div>
                    <div class="grid__5 --mt_2 --mb_2">
                      <p>野見岳頂上にある、周囲約360mの池です。
                        <br>季節ごとに咲き乱れる花々が美しい、絶好のハイキングスポットとなっています。</p>
                      <h4>INFORMATION</h4>
                      <table class="table">
                        <tbody>
                          <tr>
                            <th>所在地</th>
                            <td>福井市二ツ屋町</td>
                          </tr>
                        </tbody>
                      </table>
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
