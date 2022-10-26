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
         * .lp.--farmers-stay を使う (sass/objects/projects/_landingPages.scss)
         */
        ?>
        <article class="lp --farmers-stay">
          <section>
            <h2>農家民宿と各種体験のご紹介</h2>
            <section>
              <h3>オーベルジュフジイフェルミエ</h3>
              <div class="grid --mb_4 gallery">
                <div class="grid__inner">
                  <div class="grid__11 --mt_2 --mb_2 gallery__desc">
                    <p>地場野菜や地魚をふんだんに用いた料理を心をこめてお出します。
                      <br>夕食は寛いだフレンチをお箸で、朝食は農家のおばんざい料理をご賞味を。</p>
                  </div>
                  <div class="grid__4 gallery__main">
                    <img src="<?php echo DE_THEME_URI . '/assets/farmers-stay/fujii-fermier_app.jpg'; ?>">
                  </div>
                  <div class="grid__6">
                    <h4>INFORMATION</h4>
                    <table class="table">
                      <tbody>
                        <tr>
                          <th>事業所</th>
                          <td>オーベルジュフジイフェルミエ</td>
                        </tr>
                        <tr>
                          <th>所在地</th>
                          <td>福井市西畑町2-17</td>
                        </tr>
                        <tr>
                          <th>連絡先</th>
                          <td><a href="tel:090-2123-3851">090-2123-3851</a></td>
                        </tr>
                        <tr>
                          <th>URL</th>
                          <td><a href="https://auberge-fujii-fermier.com/" target="_blank">https://auberge-fujii-fermier.com/</a></td>
                        </tr>
                        <tr>
                          <th>参考価格</th>
                          <td>1泊1食(朝食) 8,800円位～</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="grid grid__11 --left_lg --mt_2">
                    <div class="grid__inner">
                      <div class="grid__2 --mb_2 gallery__item">
                        <a href="<?php echo DE_THEME_URI . '/assets/farmers-stay/fujii-fermier_app.jpg'; ?>">
                          <img src="<?php echo DE_THEME_URI . '/assets/farmers-stay/sm/fujii-fermier_app.jpg'; ?>">
                        </a>
                      </div>
                      <div class="grid__2 --mb_2 gallery__item">
                        <a href="<?php echo DE_THEME_URI . '/assets/farmers-stay/fujii-fermier_interior.jpg'; ?>">
                          <img src="<?php echo DE_THEME_URI . '/assets/farmers-stay/sm/fujii-fermier_interior.jpg'; ?>">
                        </a>
                      </div>
                      <div class="grid__2 --mb_2 gallery__item">
                        <a href="<?php echo DE_THEME_URI . '/assets/farmers-stay/fujii-fermier_service.jpg'; ?>">
                          <img src="<?php echo DE_THEME_URI . '/assets/farmers-stay/sm/fujii-fermier_service.jpg'; ?>">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section>
              <h3>海辺の農園宿 つかさ丸</h3>
              <div class="grid --mb_4 gallery">
                <div class="grid__inner">
                  <div class="grid__11 --mt_2 --mb_2 gallery__desc">
                    <p>福井県の越前海岸の静かな村に、30年以上住んできた私たち夫婦が、ひとときの「田舎暮らし」のお楽しみを提供します。</p>
                  </div>
                  <div class="grid__4 gallery__main">
                    <img src="<?php echo DE_THEME_URI . '/assets/farmers-stay/farmers-stay_tsukasamaru.jpg'; ?>">
                  </div>
                  <div class="grid__6">
                    <h4>INFORMATION</h4>
                    <table class="table">
                      <tbody>
                        <tr>
                          <th>事業所</th>
                          <td>海辺の農園宿 つかさ丸</td>
                        </tr>
                        <tr>
                          <th>所在地</th>
                          <td>福井市鮎川町20-2-26</td>
                        </tr>
                        <tr>
                          <th>連絡先</th>
                          <td><a href="tel:0776-88-2962">0776-88-2962</a></td>
                        </tr>
                        <tr>
                          <th>URL</th>
                          <td><a href="https://www.tsukasamaruyado.com/" target="_blank">https://www.tsukasamaruyado.com/</a></td>
                        </tr>
                        <tr>
                          <th>参考価格</th>
                          <td>1泊1食(朝食) 5,600円位～</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </section>
            <section>
              <h3>いただき繕福井越廼</h3>
              <div class="grid --mb_4 gallery">
                <div class="grid__inner">
                  <div class="grid__11 --mt_2 --mb_2 gallery__desc">
                    <p>お寺が運営するヴィーガン宿です。古民家での暮らし、料理、自然農を体験できます。
                      <br>今日はどんな「イノチ」に出会えるでしょうか。</p>
                  </div>
                  <div class="grid__4 gallery__main">
                    <img src="<?php echo DE_THEME_URI . '/assets/farmers-stay/itadakizen_app.jpg'; ?>">
                  </div>
                  <div class="grid__6">
                    <h4>INFORMATION</h4>
                    <table class="table">
                      <tbody>
                        <tr>
                          <th>事業所</th>
                          <td>いただき繕福井越廼</td>
                        </tr>
                        <tr>
                          <th>所在地</th>
                          <td>福井市八ツ俣50-15</td>
                        </tr>
                        <tr>
                          <th>連絡先</th>
                          <td><a href="tel:0776-76-2116">0776-76-2116</a></td>
                        </tr>
                        <tr>
                          <th>URL</th>
                          <td><a href="https://itadakizen-fukui.com/" target="_blank">https://itadakizen-fukui.com/</a></td>
                        </tr>
                        <tr>
                          <th>参考価格</th>
                          <td>1泊1食(朝食) 5,800円位～
                            <br>冬季暖房費 +550円</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="grid grid__11 --left_lg --mt_2">
                    <div class="grid__inner">
                      <div class="grid__2 --mb_2 gallery__item">
                        <a href="<?php echo DE_THEME_URI . '/assets/farmers-stay/itadakizen_app.jpg'; ?>">
                          <img src="<?php echo DE_THEME_URI . '/assets/farmers-stay/sm/itadakizen_app.jpg'; ?>">
                        </a>
                      </div>
                      <div class="grid__2 --mb_2 gallery__item">
                        <a href="<?php echo DE_THEME_URI . '/assets/farmers-stay/itadakizen_service.jpg'; ?>">
                          <img src="<?php echo DE_THEME_URI . '/assets/farmers-stay/sm/itadakizen_service.jpg'; ?>">
                        </a>
                      </div>
                      <div class="grid__2 --mb_2 gallery__item">
                        <a href="<?php echo DE_THEME_URI . '/assets/farmers-stay/itadakizen_landscape.jpg'; ?>">
                          <img src="<?php echo DE_THEME_URI . '/assets/farmers-stay/sm/itadakizen_landscape.jpg'; ?>">
                        </a>
                      </div>
                      <div class="grid__2 --mb_2 gallery__item">
                        <a href="<?php echo DE_THEME_URI . '/assets/farmers-stay/itadakizen_stf.jpg'; ?>">
                          <img src="<?php echo DE_THEME_URI . '/assets/farmers-stay/sm/itadakizen_stf.jpg'; ?>">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section>
              <h3>農家民宿いちろべえ</h3>
              <div class="grid --mb_4 gallery">
                <div class="grid__inner">
                  <div class="grid__11 --mt_2 --mb_2 gallery__desc">
                    <p>(ここにテキスト作成予定)
                      <br>(ここにテキスト作成予定)
                      <br>(ここにテキスト作成予定)</p>
                  </div>
                  <div class="grid__4 gallery__main">
                    <img src="<?php echo DE_THEME_URI . '/assets/farmers-stay/farmers-stay_ichirobe.jpg'; ?>">
                  </div>
                  <div class="grid__6">
                    <h4>INFORMATION</h4>
                    <table class="table">
                      <tbody>
                        <tr>
                          <th>事業所</th>
                          <td>農家民宿いちろべえ</td>
                        </tr>
                        <tr>
                          <th>所在地</th>
                          <td>福井市畠中町28-6</td>
                        </tr>
                        <tr>
                          <th>連絡先</th>
                          <td><a href="tel:0776-97-2127">0776-97-2127</a></td>
                        </tr>
                        <tr>
                          <th>参考価格</th>
                          <td>1泊(素泊まり) 5,000円位～</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </section>
            <section>
              <h3>殿下ファーマーズステイ</h3>
              <div class="grid --mb_4 gallery">
                <div class="grid__inner">
                  <div class="grid__11 --mt_2 --mb_2 gallery__desc">
                    <p>ほっこり派も！アクティブ派も！里山の自然と幸せあふれる日常を体感しに来てください。</p>
                  </div>
                  <div class="grid__4 gallery__main">
                    <img src="<?php echo DE_THEME_URI . '/assets/farmers-stay/farmers-stay_denga.jpg'; ?>">
                  </div>
                  <div class="grid__6">
                    <h4>INFORMATION</h4>
                    <table class="table">
                      <tbody>
                        <tr>
                          <th>事業所</th>
                          <td>殿下ファーマーズステイ</td>
                        </tr>
                        <tr>
                          <th>所在地</th>
                          <td>福井市殿下地区各所</td>
                        </tr>
                        <tr>
                          <th>連絡先</th>
                          <td><a href="tel:0776-97-2127">0776-97-2127</a></td>
                        </tr>
                        <tr>
                          <th>URL</th>
                          <td><a href="http://www.fukui-ecogreen.org/" target="_blank">http://www.fukui-ecogreen.org/</a></td>
                        </tr>
                        <tr>
                          <th>参考価格</th>
                          <td>1泊(素泊まり) 5,000円位～</td>
                        </tr>
                      </tbody>
                    </table>
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
