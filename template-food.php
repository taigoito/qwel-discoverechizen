<?php
/*
 * Template Name: Food template
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
          <article class="lp --food">
            <section>
              <h2>レストランのご紹介</h2>
              <section>
                <h3>レストラン波乃華</h3>
                <p>レストラン波乃華が提供するサービスのテーマは、目前に広がる「海」そのもの。
                  <br>夏は若大将が自ら素潜りで獲ったアワビやサザエをお手頃価格で味わったり、冬は越前カニと四季折々の日本海の恵みを堪能することができます。
                  <br>上質な素材を活かした料理は絶品。</p>
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
                            <td>レストラン波乃華（ホテル割烹石丸）</td>
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
                            <td><a href="http://www.ishimaru.biz/" target="_blank">http://www.ishimaru.biz/</a></td>
                          </tr>
                          <tr>
                            <th>営業期間</th>
                            <td>通年（不定休）</td>
                          </tr>
                          <tr>
                            <th>営業時間</th>
                            <td>11:00 ～ 14:00, 17:00 ～ 20:00</td>
                          </tr>
                          <tr>
                            <th>参考価格</th>
                            <td>ランチ 1,300円位～</td>
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
                <h3>魚屋の喰い処まつ田</h3>
                <p>漁、魚、海を知り尽くした名物兄弟が目利きした魚は、新鮮そのもの！
                  <br>地元の越前で捕れた魚にこだわり抜いた魚屋直営のレストランです。
                  <br>ご当地でしか味わえない、四季折々の本物の鮮度と味覚をご堪能ください。</p>
                <div class="grid --mb_4">
                  <div class="grid__inner">
                    <div class="grid__4">
                      <img src="<?php echo DE_THEME_URI . '/assets/food/matta_app.jpg'; ?>">
                    </div>
                    <div class="grid__6">
                      <h4>INFORMATION</h4>
                      <table class="table">
                        <tbody>
                          <tr>
                            <th>事業所</th>
                            <td>魚屋の喰い処まつ田</td>
                          </tr>
                          <tr>
                            <th>所在地</th>
                            <td>福井市蒲生町16-7-1</td>
                          </tr>
                          <tr>
                            <th>連絡先</th>
                            <td><a href="tel:0776-89-2740">0776-89-2740</a></td>
                          </tr>
                          <tr>
                            <th>URL</th>
                            <td><a href="https://etizenkani.jp/" target="_blank">https://etizenkani.jp/</a></td>
                          </tr>
                          <tr>
                            <th>営業期間</th>
                            <td>通年 (木曜定休/11月7日〜3月末迄無休)</td>
                          </tr>
                          <tr>
                            <th>営業時間</th>
                            <td>-</td>
                          </tr>
                          <tr>
                            <th>参考価格</th>
                            <td>食事 1,600円位～</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="grid grid__11 --left_lg --mt_2">
                      <div class="grid__inner">
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/food/matta_app.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/food/matta_app.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/food/matta_interior.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/food/matta_interior.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/food/matta_service.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/food/matta_service.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/food/matta_service01.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/food/matta_service01.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/food/matta_stf.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/food/matta_stf.jpg'; ?>">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <h3>樽海（たるみ）</h3>
                <p>創業40年の越前蟹と地魚専門店です。
                  <br>冬の越前蟹シーズンには、全て黄色いタグの付いた越前蟹のみを使用。
                  <br>その他にも、活イカのお刺身や海鮮丼も樽海自慢の一品。</p>
                <div class="grid --mb_4">
                  <div class="grid__inner">
                    <div class="grid__4">
                      <img src="<?php echo DE_THEME_URI . '/assets/food/tarumi_app.jpg'; ?>">
                    </div>
                    <div class="grid__6">
                      <h4>INFORMATION</h4>
                      <table class="table">
                        <tbody>
                          <tr>
                            <th>事業所</th>
                            <td>樽海（たるみ）</td>
                          </tr>
                          <tr>
                            <th>所在地</th>
                            <td>福井市浜北山町1-2</td>
                          </tr>
                          <tr>
                            <th>連絡先</th>
                            <td><a href="tel:0776-89-2311">0776-89-2311</a></td>
                          </tr>
                          <tr>
                            <th>営業期間</th>
                            <td>通年</td>
                          </tr>
                          <tr>
                            <th>営業時間</th>
                            <td>10:00 ～ 18:00</td>
                          </tr>
                          <tr>
                            <th>参考価格</th>
                            <td>-</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="grid grid__11 --left_lg --mt_2">
                      <div class="grid__inner">
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/food/tarumi_app.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/food/tarumi_app.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/food/tarumi_service.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/food/tarumi_service.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/food/tarumi_service01.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/food/tarumi_service01.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/food/tarumi_service02.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/food/tarumi_service02.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/food/tarumi_stf.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/food/tarumi_stf.jpg'; ?>">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </section>
            <section>
              <h2>カフェのご紹介</h2>
              <section>
                <h3>志野屋</h3>
                <p>(ここにテキスト作成予定)
                  <br>(ここにテキスト作成予定)
                  <br>(ここにテキスト作成予定)</p>
                <div class="grid --mb_4">
                  <div class="grid__inner">
                    <div class="grid__4">
                      <img src="<?php echo DE_THEME_URI . '/assets/food/shinoya_app.jpg'; ?>">
                    </div>
                    <div class="grid__6">
                      <h4>INFORMATION</h4>
                      <table class="table">
                        <tbody>
                          <tr>
                            <th>事業所</th>
                            <td>志野屋</td>
                          </tr>
                          <tr>
                            <th>所在地</th>
                            <td>福井市鮎川町133-1-6</td>
                          </tr>
                          <tr>
                            <th>連絡先</th>
                            <td><a href="tel:070-3630-1920">070-3630-1920</a></td>
                          </tr>
                          <tr>
                            <th>URL</th>
                            <td><a href="https://shinoya004.stores.jp/" target="_blank">https://shinoya004.stores.jp/</a></td>
                          </tr>
                          <tr>
                            <th>営業期間</th>
                            <td>通年（土日のみ営業）</td>
                          </tr>
                          <tr>
                            <th>営業時間</th>
                            <td>11:00 ～ 17:00</td>
                          </tr>
                          <tr>
                            <th>参考価格</th>
                            <td>ランチ 1,000円位～</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <h3>CAFÉ MARE (カフェマーレ)</h3>
                <p>海のそばに建つ、恋愛、友愛、家族愛を育む愛の聖地。
                  <br>日本海を一望できるテラスは、カフェというより、リゾートのような非日常を味わうことができる明るい空間です。
                  <br>スタッフ達の誠意が、訪ねたその一日を忘れがたい「記念日」にしてくれます。</p>
                <div class="grid --mb_4">
                  <div class="grid__inner">
                    <div class="grid__4">
                      <img src="<?php echo DE_THEME_URI . '/assets/food/cafemare_interior.jpg'; ?>">
                    </div>
                    <div class="grid__6">
                      <h4>INFORMATION</h4>
                      <table class="table">
                        <tbody>
                          <tr>
                            <th>事業所</th>
                            <td>CAFÉ MARE</td>
                          </tr>
                          <tr>
                            <th>所在地</th>
                            <td>福井市大丹生町70-3</td>
                          </tr>
                          <tr>
                            <th>連絡先</th>
                            <td><a href="tel:0776-88-2323">0776-88-2323</a></td>
                          </tr>
                          <tr>
                            <th>URL</th>
                            <td><a href="https://cafemare.jp/" target="_blank">https://cafemare.jp/</a></td>
                          </tr>
                          <tr>
                            <th>営業期間</th>
                            <td>通年</td>
                          </tr>
                          <tr>
                            <th>営業時間</th>
                            <td>10:00 ～ 日没
                              <br>ラストオーダー: 日没30分前</td>
                          </tr>
                          <tr>
                            <th>参考価格</th>
                            <td>フード 800円 ～ 1,200円位
                              <br>デザート 600円位 (税抜)</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="grid grid__11 --left_lg --mt_2">
                      <div class="grid__inner">
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/food/cafemare_interior.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/food/cafemare_interior.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/food/cafemare_app.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/food/cafemare_app.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/food/cafemare_app01.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/food/cafemare_app01.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/food/cafemare_interior01.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/food/cafemare_interior01.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/food/cafemare_service03.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/food/cafemare_service03.jpg'; ?>">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <h3>喫茶 波の音</h3>
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
                          <tr>
                            <th>参考価格</th>
                            <td>ドリンク・ソフトクリーム 400円位～</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <h3>Cafe Earth (カフェアース)</h3>
                <p>コーヒー豆やお料理、フードも体に優しいオーガニック料理をご用意。
                  <br>美しい自然に囲まれた場所で本当の贅沢と豊かさを感じて。</p>
                <div class="grid --mb_4">
                  <div class="grid__inner">
                    <div class="grid__4">
                      <img src="<?php echo DE_THEME_URI . '/assets/food/cafeearth_interior01.jpg'; ?>">
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
                            <th>営業期間</th>
                            <td>通年 (金曜定休,祝日の場合は営業)</td>
                          </tr>
                          <tr>
                            <th>営業時間</th>
                            <td>10:00 ～ 18:00 (夏季)
                              <br>10:30 ～ 17:30 (冬季)</td>
                          </tr>
                          <tr>
                            <th>参考価格</th>
                            <td>フード 1,400円位～
                              <br>デザート 600円位～ (税込)</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="grid grid__11 --left_lg --mt_2">
                      <div class="grid__inner">
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/food/cafeearth_interior01.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/food/cafeearth_interior01.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/food/cafeearth_app.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/food/cafeearth_app.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/food/cafeearth_app01.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/food/cafeearth_app01.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/food/cafeearth_app05.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/food/cafeearth_app05.jpg'; ?>">
                          </a>
                        </div>
                        <div class="grid__2 --mb_2">
                          <a href="<?php echo DE_THEME_URI . '/assets/food/cafeearth_service.jpg'; ?>">
                            <img src="<?php echo DE_THEME_URI . '/assets/food/cafeearth_service.jpg'; ?>">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </section>
            <section>
              <h2>テイクアウト施設のご紹介</h2>
              <section>
                <h3>サメワワワ</h3>
                <p>(ここにテキスト作成予定)
                  <br>(ここにテキスト作成予定)
                  <br>(ここにテキスト作成予定)</p>
                <div class="grid --mb_4">
                  <div class="grid__inner">
                    <div class="grid__4">
                      <img src="<?php echo DE_THEME_URI . '/assets/no-image.jpg'; ?>">
                    </div>
                    <div class="grid__6">
                      <h4>INFORMATION</h4>
                      <table class="table">
                        <tbody>
                          <tr>
                            <th>事業所</th>
                            <td>サメワワワ</td>
                          </tr>
                          <tr>
                            <th>所在地</th>
                            <td>福井市大丹生町70-1-6</td>
                          </tr>
                          <tr>
                            <th>連絡先</th>
                            <td><a href="tel:0776-65-3157">0776-65-3157</a></td>
                          </tr>
                          <tr>
                            <th>URL</th>
                            <td><a href="	https://etizenkaigan.com/" target="_blank">https://etizenkaigan.com/</a></td>
                          </tr>
                          <tr>
                            <th>営業期間</th>
                            <td>通年</td>
                          </tr>
                          <tr>
                            <th>営業時間</th>
                            <td>11:00 ～ 日没</td>
                          </tr>
                          <tr>
                            <th>参考価格</th>
                            <td>フード 900円位～
                              <br>ドリンク 600円位～</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <h3>バナナボーイ</h3>
                <p>一度飲んだら虜に♡
                  <br>越前海岸のバナナジュースのテイクアウト専門店。
                  <br>エンターテイナーのマサ越前がお出迎え。</p>
                <div class="grid --mb_4">
                  <div class="grid__inner">
                    <div class="grid__4">
                      <img src="<?php echo DE_THEME_URI . '/assets/no-image.jpg'; ?>">
                    </div>
                    <div class="grid__6">
                      <h4>INFORMATION</h4>
                      <table class="table">
                        <tbody>
                          <tr>
                            <th>事業所</th>
                            <td>バナナボーイ</td>
                          </tr>
                          <tr>
                            <th>所在地</th>
                            <td>福井市蒲生町16-7-1</td>
                          </tr>
                          <tr>
                            <th>URL</th>
                            <td><a href="http://www.instagram.com/877boy/" target="_blank">http://www.instagram.com/877boy/</a></td>
                          </tr>
                          <tr>
                            <th>営業期間</th>
                            <td>通年 (木曜定休)</td>
                          </tr>
                          <tr>
                            <th>営業時間</th>
                            <td>10:00 ～ 17:00</td>
                          </tr>
                          <tr>
                            <th>参考価格</th>
                            <td>ドリンク 400円位～</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </section>
              <section>
                <h3>ごーる堂</h3>
                <p>材料は、福井県産のきな粉と国産豆乳。
                  <br>100%植物性の体に優しいソフトクリーム屋さん。</p>
                <div class="grid --mb_4">
                  <div class="grid__inner">
                    <div class="grid__4">
                      <img src="<?php echo DE_THEME_URI . '/assets/food/goledoh_app.jpg'; ?>">
                    </div>
                    <div class="grid__6">
                      <h4>INFORMATION</h4>
                      <table class="table">
                        <tbody>
                          <tr>
                            <th>事業所</th>
                            <td>ごーる堂</td>
                          </tr>
                          <tr>
                            <th>所在地</th>
                            <td>福井市畠中町28-6</td>
                          </tr>
                          <tr>
                            <th>連絡先</th>
                            <td><a href="tel:0776-97-2125">0776-97-2125</a></td>
                          </tr>
                          <tr>
                            <th>営業期間</th>
                            <td>通年 (水曜定休)</td>
                          </tr>
                          <tr>
                            <th>営業時間</th>
                            <td>10:00 ～ 18:00 (夏季)</td>
                          </tr>
                          <tr>
                            <th>参考価格</th>
                            <td>ソフトクリーム 350円位～ (税込)</td>
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
