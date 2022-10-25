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
         * .lp.--spa を使う (sass/objects/projects/_landingPages.scss)
         */
        ?>
        <article class="lp --spa">
          <section>
            <h2>温泉施設のご紹介</h2>
            <section>
              <h3>国民宿舎鷹巣荘</h3>
              <div class="grid --mb_4 gallery">
                <div class="grid__inner">
                  <div class="grid__11 --mt_2 --mb_2 gallery__desc">
                    <p>源泉かけ流し100%のお湯が柔らかいとリピーターの方に評判を頂いているアルカリ性単純泉宿。水素濃度も高く、保温効果も◎</p>
                  </div>
                  <div class="grid__4 gallery__main">
                    <img src="<?php echo DE_THEME_URI . '/assets/spa/spa_takasusou.jpg'; ?>">
                  </div>
                  <div class="grid__6">
                    <h4>INFORMATION</h4>
                    <table class="table">
                      <tbody>
                        <tr>
                          <th>事業所</th>
                          <td>国民宿舎鷹巣荘</td>
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
                          <td><a href="http://www.takasusou.jp/" target="_blank">http://www.takasusou.jp/</a></td>
                        </tr>
                        <tr>
                          <th>営業期間</th>
                          <td>通年</td>
                        </tr>
                        <tr>
                          <th>営業時間</th>
                          <td>6:00～9:00, 10:00～20:00 (日帰り入浴)</td>
                        </tr>
                        <tr>
                          <th>参考価格</th>
                          <td>入浴料 510円 (大人)</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="grid grid__11 --left_lg --mt_2">
                    <div class="grid__inner">
                      <div class="grid__2 --mb_2 gallery__item">
                        <a href="<?php echo DE_THEME_URI . '/assets/spa/spa_takasusou.jpg'; ?>">
                          <img src="<?php echo DE_THEME_URI . '/assets/spa/sm/spa_takasusou.jpg'; ?>">
                        </a>
                      </div>
                      <div class="grid__2 --mb_2 gallery__item">
                        <a href="<?php echo DE_THEME_URI . '/assets/spa/spa_takasusou_app.jpg'; ?>">
                          <img src="<?php echo DE_THEME_URI . '/assets/spa/sm/spa_takasusou_app.jpg'; ?>">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section>
              <h3>越前水仙の里温泉「波の華」</h3>
              <div class="grid --mb_4 gallery">
                <div class="grid__inner">
                  <div class="grid__11 --mt_2 --mb_2 gallery__desc">
                    <p>雄大な日本海を見渡せる贅沢な眺望の中で、天然温泉の優しいぬくもりが疲れたからだをゆっくりと癒してくれます。</p>
                  </div>
                  <div class="grid__4 gallery__main">
                    <img src="<?php echo DE_THEME_URI . '/assets/spa/spa_naminohana.jpg'; ?>">
                  </div>
                  <div class="grid__6">
                    <h4>INFORMATION</h4>
                    <table class="table">
                      <tbody>
                        <tr>
                          <th>事業所</th>
                          <td>越前水仙の里温泉「波の華」</td>
                        </tr>
                        <tr>
                          <th>所在地</th>
                          <td>福井市蒲生町1-94</td>
                        </tr>
                        <tr>
                          <th>連絡先</th>
                          <td><a href="tel:0776-89-7387">0776-89-7387</a></td>
                        </tr>
                        <tr>
                          <th>URL</th>
                          <td><a href="https://naminohana-onsen.jp/" target="_blank">https://naminohana-onsen.jp/</a></td>
                        </tr>
                        <tr>
                          <th>営業期間</th>
                          <td>通年 (火曜定休)</td>
                        </tr>
                        <tr>
                          <th>営業時間</th>
                          <td>10:00～21:00(最終受付20:30)</td>
                        </tr>
                        <tr>
                          <th>参考価格</th>
                          <td>入浴料 570円 (大人)</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="grid grid__11 --left_lg --mt_2">
                    <div class="grid__inner">
                      <div class="grid__2 --mb_2 gallery__item">
                        <a href="<?php echo DE_THEME_URI . '/assets/spa/spa_naminohana.jpg'; ?>">
                          <img src="<?php echo DE_THEME_URI . '/assets/spa/sm/spa_naminohana.jpg'; ?>">
                        </a>
                      </div>
                      <div class="grid__2 --mb_2 gallery__item">
                        <a href="<?php echo DE_THEME_URI . '/assets/spa/spa_naminohana_app.jpg'; ?>">
                          <img src="<?php echo DE_THEME_URI . '/assets/spa/sm/spa_naminohana_app.jpg'; ?>">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </section>
        </article>

        <div class="archive">
          <div class="list --lg">
            <ul class="list__inner">
              <?php
              /**
               * メインループ
               * 
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
        </div><!-- .archive -->
      </div>
    </div>
  </main>
<?php get_footer();
