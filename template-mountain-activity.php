<?php
/*
 * Template Name: Mountain activity template
 * Template Post Type: page
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
         * .lp.--mountainActivity を使う (sass/objects/projects/_landingPages.scss)
         */
        if (have_posts()) {
          while (have_posts()) {
            the_post();
        ?>
          <article class="lp --mountainActivity">
            <section>
              <h2>越前海岸の山遊び</h2>
              <section>
                <h3>テントサウナ・薪割り体験</h3>
                <div class="grid --mb_4 gallery">
                  <div class="grid__inner">
                    <div class="grid__11 --mt_2 --mb_2 gallery__desc">
                      <p>豊かな自然に囲まれた癒やしの空間で、テントサウナを満喫!!
                        <br>サウナで使う薪は森から伐採したものを、自分で薪割りします。</p>
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
                            <td><a href="https://koshinokuni.net/" target="_blank">こしのくに里山再生の会</a></td>
                          </tr>
                          <tr>
                            <th>開催期間</th>
                            <td>通年</td>
                          </tr>
                          <tr>
                            <th>ご料金</th>
                            <td>16歳以上 2,000円
                              <br>16歳未満 600円</td>
                          </tr>
                          <tr>
                            <th>ご予約</th>
                            <td>3日前まで</td>
                          </tr>
                          <tr>
                            <th>最低催行人数</th>
                            <td>3名</td>
                          </tr>
                          <tr>
                            <th>参加条件・準備</th>
                            <td>-</td>
                          </tr>
                          <tr>
                            <th>所在地</th>
                            <td>福井市水谷町</td>
                          </tr>
                          <tr>
                            <th>連絡先</th>
                            <td><a href="tel:080-3425-9580">080-3425-9580</a></td>
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
                <h3>自伐型林業体験</h3>
                <div class="grid --mb_4 gallery">
                  <div class="grid__inner">
                    <div class="grid__11 --mt_2 --mb_2 gallery__desc">
                      <p>立木の伐採、造材、搬出、作業道づくりを全て自前で行う「自伐型林業」を営むメンバーと、ロープけん引、チェーンソー、薪割り体験を通じて、自然相手のチームプレーという林業を体感してもらいます。</p>
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
                            <td><a href="https://koshinokuni.net/" target="_blank">こしのくに里山再生の会</a></td>
                          </tr>
                          <tr>
                            <th>開催期間</th>
                            <td>5～11月</td>
                          </tr>
                          <tr>
                            <th>ご料金</th>
                            <td>自伐型林業体験 3,000円～</td>
                          </tr>
                          <tr>
                            <th>ご予約</th>
                            <td>3日前まで</td>
                          </tr>
                          <tr>
                            <th>最低催行人数</th>
                            <td>3名</td>
                          </tr>
                          <tr>
                            <th>参加条件・準備</th>
                            <td>-</td>
                          </tr>
                          <tr>
                            <th>所在地</th>
                            <td>福井市水谷町</td>
                          </tr>
                          <tr>
                            <th>連絡先</th>
                            <td><a href="tel:080-3425-9580">080-3425-9580</a></td>
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
                <h3>里山ピラティス</h3>
                <div class="grid --mb_4 gallery">
                  <div class="grid__inner">
                    <div class="grid__11 --mt_2 --mb_2 gallery__desc">
                      <p>里山ピラティス体験！
                        <br>森の緑に囲まれながら、ゆっくりと心と身体を整えませんか。</p>
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
                            <td><a href="https://koshinokuni.net/" target="_blank">こしのくに里山再生の会</a></td>
                          </tr>
                          <tr>
                            <th>開催期間</th>
                            <td>通年</td>
                          </tr>
                          <tr>
                            <th>ご料金</th>
                            <td>大人 1,500円
                              <br>子供 無料</td>
                          </tr>
                          <tr>
                            <th>ご予約</th>
                            <td>3日前まで</td>
                          </tr>
                          <tr>
                            <th>最低催行人数</th>
                            <td>1名</td>
                          </tr>
                          <tr>
                            <th>参加条件・準備</th>
                            <td>-</td>
                          </tr>
                          <tr>
                            <th>所在地</th>
                            <td>福井市水谷町</td>
                          </tr>
                          <tr>
                            <th>連絡先</th>
                            <td><a href="tel:080-3425-9580">080-3425-9580</a></td>
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
                <h3>竹灯篭体験</h3>
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
                <h3>竹釜体験</h3>
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
                <h3>乗馬体験</h3>
                <div class="grid --mb_4 gallery">
                  <div class="grid__inner">
                    <div class="grid__11 --mt_2 --mb_2 gallery__desc">
                      <p>ほんごう馬の里は、小学校跡地を利用した本格的な乗馬クラブ。豊かな自然に囲まれ、初心者や観光客も気軽に乗馬体験ができます。
                        <br>競馬を引退したサラブレッドたちも多く飼育され、乗用馬として再調教されながら、人々の癒しとして、豊かな第二の馬生を過ごしています。
                        <br>豊かな里山の自然に囲まれた環境の中で、のんびり楽しむ乗馬体験は、非日常的な癒しの時間をもたらしてくれます。
                        <br>なお、乗馬体験には必ず事前予約が必要です。</p>
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
                            <td><a href="http://www4.fctv.ne.jp/~uma/" target="_blank">ほんごう馬の里</a></td>
                          </tr>
                          <tr>
                            <th>開催期間</th>
                            <td>通年 (火曜定休)</td>
                          </tr>
                          <tr>
                            <th>ご料金</th>
                            <td>乗馬体験 5,100円～</td>
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
                            <td>-</td>
                          </tr>
                          <tr>
                            <th>所在地</th>
                            <td>福井市西荒井町47-17</td>
                          </tr>
                          <tr>
                            <th>連絡先</th>
                            <td><a href="tel:0776-83-0405">0776-83-0405</a></td>
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
                <h3>サーキットで走行体験</h3>
                <div class="grid --mb_4 gallery">
                  <div class="grid__inner">
                    <div class="grid__11 --mt_2 --mb_2 gallery__desc">
                      <p>タカスサーキットは、全長は約1500mと、北陸地区では最大の規模の本格的なサーキット場です。
                        <br>少しでも手軽にモータースポーツの世界を体験して頂きたく、サーキットライセンスが無くても、元レーシングドライバーの助手席に乗ってスピードを味わうことが出来る同乗走行も可能です。
                        <br>また、身長が140センチ以上の方なら、年齢・性別関係なくサーキットを体験出来るレンタルカートもご用意しております。</p>
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
                            <td><a href="http://www.fnet.ac/" target="_blank">タカスサーキット</td>
                          </tr>
                          <tr>
                            <th>開催期間</th>
                            <td>通年</td>
                          </tr>
                          <tr>
                            <th>ご料金</th>
                            <td>体験走行 1,500円/5分
                              <br>同乗走行 2,000円</td>
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
                            <td>-</td>
                          </tr>
                          <tr>
                            <th>所在地</th>
                            <td>福井市西二ツ屋町2-1-35</td>
                          </tr>
                          <tr>
                            <th>連絡先</th>
                            <td><a href="tel:0776-87-2330">0776-87-2330</a></td>
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
