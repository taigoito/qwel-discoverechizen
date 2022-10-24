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
                            <th>所在地</th>
                            <td>福井市鮎川町17-14</td>
                          </tr>
                          <tr>
                            <th>連絡先</th>
                            <td><a href="tel:0776-88-2025">0776-88-2025</a></td>
                          </tr>
                          <tr>
                            <th>営業期間</th>
                            <td>通年 (水曜定休、火曜ショップのみ営業) ※</td>
                          </tr>
                          <tr>
                            <th>営業時間</th>
                            <td>9:00 ～ 17:00</td>
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
                            <th>参加条件・準備</th>
                            <td>小学生以上
                              <br>動きやすい服装、汗拭きタオル等ご用意ください。</td>
                          </tr>
                        </tbody>
                      </table>
                      <p><small>※ 2月は溶解炉メンテナンスのため、体験内容が限られます。</small></p>
                    </div>
                    <div class="grid grid__11 --left_lg --mt_2">
                      <div class="grid__inner">
                        <div class="grid__2 --mb_2 gallery__item">
                          <a href="<?php echo DE_THEME_URI . '/assets/craft/watariglass_shop.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/craft/sm/watariglass_shop.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2 gallery__item">
                          <a href="<?php echo DE_THEME_URI . '/assets/craft/watariglass_app.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/craft/sm/watariglass_app.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2 gallery__item">
                          <a href="<?php echo DE_THEME_URI . '/assets/craft/watariglass_act.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/craft/sm/watariglass_act.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2 gallery__item">
                          <a href="<?php echo DE_THEME_URI . '/assets/craft/watariglass_act01.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/craft/sm/watariglass_act01.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2 gallery__item">
                          <a href="<?php echo DE_THEME_URI . '/assets/craft/watariglass_act02.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/craft/sm/watariglass_act02.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2 gallery__item">
                          <a href="<?php echo DE_THEME_URI . '/assets/craft/watariglass_act03.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/craft/sm/watariglass_act03.jpg'; ?>">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <h3>醤油絞り体験</h3>
                <div class="grid --mb_4 gallery">
                  <div class="grid__inner">
                    <div class="grid__11 --mt_2 --mb_2 gallery__desc">
                      <p>『ジガミ岩しょうゆ』の桜醤油は、魚料理を知り尽くした初代・岩尾孫次郎が、魚の旨味をより引き出せるように造り上げたこだわりの醤油。
                        <br>海の幸蔵の中の届く、磯の香りをたっぷり含んだ潮風に包まれ、冬には怒涛の日本海の荒波を聞きながら熟成した醤油は、海の幸を調理するのに最適のお醤油として、魚料理のプロの方たちからも多くのご好評をいただいております。
                        <br>その醤油のできる工程を聞き、オリジナル醤油ラベルを書いてボトルに詰める体験です。
                        <br>醤油絞りや醤油樽の見学は、福井県でも数カ所でしか体験できません。</p>
                    </div>
                    <div class="grid__5 gallery__main">
                      <img src="<?php echo DE_THEME_URI . '/assets/craft/iwaoshoyu_img.jpg'; ?>">
                    </div>
                    <div class="grid__5">
                      <h4>INFORMATION</h4>
                      <table class="table">
                        <tbody>
                          <tr>
                            <th>事業所</th>
                            <td><a href="https://www.iwao-shoyu.com/" target="_blank">岩尾醤油醸造元</a></td>
                          </tr>
                          <tr>
                            <th>所在地</th>
                            <td>福井市糸崎町1-3</td>
                          </tr>
                          <tr>
                            <th>連絡先</th>
                            <td><a href="tel:0776-86-1721">0776-86-1721</a></td>
                          </tr>
                          <tr>
                            <th>営業期間</th>
                            <td>通年 (月曜定休)</td>
                          </tr>
                          <tr>
                            <th>営業時間</th>
                            <td>18:00まで</td>
                          </tr>
                          <tr>
                            <th>ご料金</th>
                            <td>醤油絞り体験 2,200円</td>
                          </tr>
                          <tr>
                            <th>ご予約</th>
                            <td>前日まで</td>
                          </tr>
                          <tr>
                            <th>最低催行人数</th>
                            <td>2名</td>
                          </tr>
                          <tr>
                            <th>参加条件・準備</th>
                            <td>エプロンをご用意ください。</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="grid grid__11 --left_lg --mt_2">
                      <div class="grid__inner">
                        <div class="grid__2 --mb_2 gallery__item">
                          <a href="<?php echo DE_THEME_URI . '/assets/craft/iwaoshoyu_img.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/craft/sm/iwaoshoyu_img.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2 gallery__item">
                          <a href="<?php echo DE_THEME_URI . '/assets/craft/iwaoshoyu_img01.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/craft/sm/iwaoshoyu_img01.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2 gallery__item">
                          <a href="<?php echo DE_THEME_URI . '/assets/craft/iwaoshoyu_app.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/craft/sm/iwaoshoyu_app.jpg'; ?>">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <h3>塩づくり体験</h3>
                <div class="grid --mb_4 gallery">
                  <div class="grid__inner">
                    <div class="grid__11 --mt_2 --mb_2 gallery__desc">
                      <p>越前海岸のミネラル豊富な海水でお塩を作ります。
                        <br>お塩の話を聞いた後、自分だけのお塩を作ります。
                        <br>お塩の知ってそうで知らなかったお話、塩が結晶化する瞬間は歓声があがります！
                        <br>越前和紙のパッケージを作ってお持ち帰りできます。お土産、旅の記念に！</p>
                    </div>
                    <div class="grid__5 gallery__main">
                      <img src="<?php echo DE_THEME_URI . '/assets/craft/shinoya_craft.jpg'; ?>">
                    </div>
                    <div class="grid__5">
                      <h4>INFORMATION</h4>
                      <table class="table">
                        <tbody>
                          <tr>
                            <th>事業所</th>
                            <td><a href="https://shinoya004.stores.jp/" target="_blank">志野製塩所</a></td>
                          </tr>
                          <tr>
                            <th>所在地</th>
                            <td>福井市鮎川町133-1</td>
                          </tr>
                          <tr>
                            <th>連絡先</th>
                            <td><a href="tel:070-3630-1920">070-3630-1920</a></td>
                          </tr>
                          <tr>
                            <th>営業期間</th>
                            <td>通年 (土日祝日)</td>
                          </tr>
                          <tr>
                            <th>営業時間</th>
                            <td>-</td>
                          </tr>
                          <tr>
                            <th>ご料金</th>
                            <td>塩づくり体験 2,200円</td>
                          </tr>
                          <tr>
                            <th>ご予約</th>
                            <td>1週間前まで</td>
                          </tr>
                          <tr>
                            <th>最低催行人数</th>
                            <td>2名</td>
                          </tr>
                          <tr>
                            <th>参加条件・準備</th>
                            <td>-</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="grid grid__11 --left_lg --mt_2">
                      <div class="grid__inner">
                        <div class="grid__2 --mb_2 gallery__item">
                          <a href="<?php echo DE_THEME_URI . '/assets/craft/shinoya_craft.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/craft/sm/shinoya_craft.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2 gallery__item">
                          <a href="<?php echo DE_THEME_URI . '/assets/craft/shinoya_app.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/craft/sm/shinoya_app.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2 gallery__item">
                          <a href="<?php echo DE_THEME_URI . '/assets/craft/shinoya_vst.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/craft/sm/shinoya_vst.jpg'; ?>">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <h3>アワビデコレーション体験</h3>
                <div class="grid --mb_4 gallery">
                  <div class="grid__inner">
                    <div class="grid__11 --mt_2 --mb_2 gallery__desc">
                      <p>(ここにテキスト作成予定)
                        <br>(ここにテキスト作成予定)
                        <br>(ここにテキスト作成予定)</p>
                    </div>
                    <div class="grid__5 gallery__main">
                      <img src="<?php echo DE_THEME_URI . '/assets/craft/ishimaru_craft.jpg'; ?>">
                    </div>
                    <div class="grid__5">
                      <h4>INFORMATION</h4>
                      <table class="table">
                        <tbody>
                          <tr>
                            <th>事業所</th>
                            <td><a href="http://www.ishimaru.biz/" target="_blank">ホテル割烹石丸</td>
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
                            <th>営業期間</th>
                            <td>通年 (不定休)</td>
                          </tr>
                          <tr>
                            <th>営業時間</th>
                            <td>11:00 ～ 14:00, 17:00 ～ 20:00</td>
                          </tr>
                          <tr>
                            <th>ご料金</th>
                            <td>アワビデコレーション体験 0,000円</td>
                          </tr>
                          <tr>
                            <th>ご予約</th>
                            <td>2日前まで</td>
                          </tr>
                          <tr>
                            <th>最低催行人数</th>
                            <td>2名</td>
                          </tr>
                          <tr>
                            <th>参加条件・準備</th>
                            <td>-</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="grid grid__11 --left_lg --mt_2">
                      <div class="grid__inner">
                        <div class="grid__2 --mb_2 gallery__item">
                          <a href="<?php echo DE_THEME_URI . '/assets/craft/ishimaru_craft.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/craft/sm/ishimaru_craft.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2 gallery__item">
                          <a href="<?php echo DE_THEME_URI . '/assets/craft/ishimaru_craft01.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/craft/sm/ishimaru_craft01.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2 gallery__item">
                          <a href="<?php echo DE_THEME_URI . '/assets/craft/ishimaru_craft02.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/craft/sm/ishimaru_craft02.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2 gallery__item">
                          <a href="<?php echo DE_THEME_URI . '/assets/food/ishimaru_app.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/food/sm/ishimaru_app.jpg'; ?>">
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
