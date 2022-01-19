<?php
/*
 * Template Name: Work template
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
         * .lp.--work を使う (sass/objects/projects/_landingPages.scss)
         */
        ?>
        <article class="lp --work">
          <header id="lpHeader" class="lp__header">
            <h2 class="lp__title"><img src="<?php echo DE_THEME_URI . '/assets/title_work.svg'; ?>" alt="ワーケーションロゴ"></h2>
            <div class="grid">
              <div class="grid__inner">
                <div class="grid__6 --mt_2 --mb_2 --text_center">
                  <p>「うみたん」は、海と山の探検博覧会の略で、越前海岸周辺の体験プログラムを言います。越前海岸盛り上げ隊では、「越前海岸の暮らしを見つける旅」をテーマに、ここでしかできない体験をラインアップしています。</p>
                </div>
              </div>
            </div>
            <section class="lp__section --intro">
              <h3 class="lp__lead --exlargeText --mt_3 --mb_3">越前海岸 暮らしを見つける旅</h3>
              <div class="grid --mb_4">
                <div class="grid__inner">
                  <div class="grid__6 --order_2">
                    <figure class="lp__figure --artwork_lg --mb_2">
                      <img src="<?php echo DE_THEME_URI . '/assets/map_coast.svg'; ?>" alt="越前海岸略図">
                    </figure>
                  </div>
                  <div class="grid__5 --order_1 --p_0">
                    <p>越前海岸盛り上げ隊と言えば、海に面する棗、鷹巣、国見、越廼地区と、里山に囲まれた殿下地区から、30ほどの事業者が集まり、「越前海岸」というベルトを盛り上げています。
                      <br>多くの自然や個性あふれる事業者達と触れ合えることが魅力で、その業種は様々。
                      <br>海鮮料理屋、旅館や民宿、クラゲ販売店、製粉屋、製塩所、林業家、ガラス作家、お坊さん、デザイナーやプログラマー、地域おこし協力隊など、個性豊かなメンバーがそれぞれ生計を立てています。</p>
                  </div>
                </div>
              </div>
            </section>
          </header><!-- #lpHeader -->
          <ul id="lpNav" class="lp__nav --mb_3">
            <li class="lp__navItem --local"><a href="#about"><img src="<?php echo DE_THEME_URI . '/assets/work/heading_workation.svg'; ?>" alt="ワーケーション"></a></li>
            <li class="lp__navItem --local"><a href="#"><img src="<?php echo DE_THEME_URI . '/assets/work/heading_covid.svg'; ?>" alt="COVID-19対策"></a></li>
            <li class="lp__navItem --local"><a href="#report"><img src="<?php echo DE_THEME_URI . '/assets/work/heading_report.svg'; ?>" alt="リポート"></a></li>
            <li class="lp__navItem --local"><a href="#workspot"><img src="<?php echo DE_THEME_URI . '/assets/work/heading_workspot.svg'; ?>" alt="ワークスポット"></a></li>
            <li class="lp__navItem --local"><a href="#customize"><img src="<?php echo DE_THEME_URI . '/assets/work/heading_customize.svg'; ?>" alt="カスタマイズ"></a></li>
            <li class="lp__navItem --local"><a href="#faq"><img src="<?php echo DE_THEME_URI . '/assets/work/heading_faq.svg'; ?>" alt="質問"></a></li>
            <li class="lp__navItem --local"><a href="#reservation"><img src="<?php echo DE_THEME_URI . '/assets/work/heading_reservation.svg'; ?>" alt="予約"></a></li>
          </ul><!-- #lpNav -->
          <section id="about" class="lp__section --about">
            <h3 class="lp__heading">
              <img src="<?php echo DE_THEME_URI . '/assets/work/heading_workation.svg'; ?>" alt="ワーケーション">
                <br><span class="lp__lead --translation">ワーケーションとは</span>
            </h3>
            <div class="grid">
              <div class="grid__inner">
                <div class="grid__6 --mt_2 --mb_2 --text_justify">
                  <p>地元の事業者による、仕事や暮らし、自然の中での体験が多いのが特徴です。事前の予約が必要ですが、地域の人たちとより深く交流することができます。テレワークと組み合わせることで、充実した旅の時間を過ごすことができます。</p>
                </div>
              </div>
            </div>
            <section class="grid --center --expand --mb_4">
              <div class="grid__inner">
                <div class="grid__12">
                  <h4 class="lp__lead --copy">
                    <img src="<?php echo DE_THEME_URI . '/assets/work/copy_work.svg'; ?>" alt="ワーケーションのススメ">
                  </h4>
                </div>
                <figure class="grid__item lp__figure --fig_1">
                  <img src="<?php echo DE_THEME_URI . '/assets/work/artwork10.svg'; ?>" alt="挿絵1">
                </figure>
                <figure class="grid__item lp__figure --fig_2">
                  <img src="<?php echo DE_THEME_URI . '/assets/work/artwork11.svg'; ?>" alt="挿絵2">
                </figure>
                <figure class="grid__item lp__figure --fig_3">
                  <img src="<?php echo DE_THEME_URI . '/assets/work/artwork12.svg'; ?>" alt="挿絵3">
                </figure>
                <figure class="grid__item lp__figure --fig_4">
                  <img src="<?php echo DE_THEME_URI . '/assets/work/artwork13.svg'; ?>" alt="挿絵4">
                </figure>
                <figure class="grid__item lp__figure --fig_5">
                  <img src="<?php echo DE_THEME_URI . '/assets/work/artwork14.svg'; ?>" alt="挿絵5">
                </figure>
                <figure class="grid__item lp__figure --fig_6">
                  <img src="<?php echo DE_THEME_URI . '/assets/work/artwork15.svg'; ?>" alt="挿絵6">
                </figure>
                <figure class="grid__item lp__figure --fig_7">
                  <img src="<?php echo DE_THEME_URI . '/assets/work/artwork16.svg'; ?>" alt="挿絵7">
                </figure>
              </div>
            </section>
            <section class="--mb_4 --p_2 --pt_1 has-primary-light-background-color">
              <h4 class="lp__lead --mb_2 --largeText has-primary-color">こんなことを思っている方</h4>
              <ul class="lp__content">
                <li class="lp__listItem --targetuser">自然豊かな環境で、思考をクリエイティブに走らせたい</li>
                <li class="lp__listItem --targetuser">仕事が終わっても遊び時間を確保したい</li>
                <li class="lp__listItem --targetuser">隙間時間を有効にし、仕事と遊びを両立したい</li>
                <li class="lp__listItem --targetuser">喧騒から離れ、ひとつの事に集中したい</li>
                <li class="lp__listItem --targetuser">ウィズコロナの時代の新しい働き方を求めている</li>
                <li class="lp__listItem --targetuser">地域ならではの体験プログラムに興味がある</li>
              </ul>
            </section>
          </section><!-- #about -->
          <section id="report" class="lp__section --report">
            <h3 class="lp__heading --mb_2">
              <img src="<?php echo DE_THEME_URI . '/assets/work/heading_report.svg'; ?>" alt="リポート">
                <br><span class="lp__lead --translation">ワーケーション体験者レポート</span>
            </h3>
            <section class="lp__section --wrSection --mb_3">
              <header class="grid --left_lg --top_lg">
                <div class="grid__inner">
                  <h4 class="grid__10 lp__lead --mt_0 --mb_2 --text_left --largeText">目の前は海！仕事と遊びのメリハリで心も体もリフレッシュ</h4>
                  <figure class="grid__item lp__figure --wrHeading">
                    <img src="<?php echo DE_THEME_URI . '/assets/work/subheading_01.svg'; ?>" alt="リポート01">
                  </figure>
                  <div class="grid__item lp__content --wrHead">
                    <table class="lp__table --wrTable">
                      <caption>お迎えしたワーケーション体験者様</caption>
                      <tr>
                        <td>お客様のご職業</td>
                        <td>外資系メーカーマーケティング部社員（27歳・女性）</td>
                      </tr>
                      <tr>
                        <td>参加形態</td>
                        <td>お一人</td>
                      </tr>
                      <tr>
                        <td>ワーケーションの目的</td>
                        <td>テレワークを自宅以外でしたい
                          <br>今の組織に属したまま新しい働き方、生き方を探したい</td>
                      </tr>
                      <tr>
                        <td>お客様のリクエスト</td>
                        <td>長期滞在できる場所、現地での交流</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </header>
              <div class="grid">
                <div class="grid__inner">
                  <div class="grid__6 --order_1 --pt_3 --pb_3">
                    <h5 class="lp__lead --bold">農家民宿でもワーケーションできる？</h5>
                    <p>田んぼはお米を作るためだけの場所じゃなって、自分にとって遊び場でもあるし、季節を感じる場所でもあるし、地域とのつながりや伝統文化も生まれる場所だと思っています。
                      <br>ここに吹く風、草の匂い。遠くの山々の風景や満点の星空。鏡のように輝く田植え前。実ほど頭を垂れる稲穂。ゆっくりゆっくりと土の力を蓄える厳しい冬。
                      <br>ここでは365日24時間の全部に意味があります。</p>
                  </div>
                  <figure class="grid__5 --order_2 lp__figure --wrFig">
                    <img src="<?php echo DE_THEME_URI . '/assets/studytour/img_studytour01.jpg'; ?>" alt="ワーケーションの様子">
                  </figure>
                  <div class="grid__6 --order_4 --pt_3 --pb_3">
                    <p>今回うちにやってきたのは、東京の一人暮らしの自宅で、もう4か月も在宅勤務を続けてきたという女性。会社も今後はテレワークが基本になったので、東京から少し離れてみたかったって。
                      <br>口には出さないけど、きっと孤独だったでしょう。
                      <br>うちでよければ1週間でも1か月でもいていいからね、って言いました。</p>
                  </div>
                  <figure class="grid__5 --order_3 lp__figure --wrFig">
                    <img src="<?php echo DE_THEME_URI . '/assets/studytour/img_studytour04.jpg'; ?>" alt="ワーケーションの様子">
                  </figure>
                  <div class="grid__6 --order_5 --pt_3 --pb_3">
                    <p>うちは農家民宿だからコワーキングスペースみたいな施設はないけど、部屋はゆったり使ってもらえるし、天気が良ければ野外からオンライン会議に参加もしてたみたい。
                      <br>東京のオフィスや自宅に比較しても遜色はないですって、むしろ東京より効率も創造性も上がって言うことなしだって言ってくれました。
                      <br>ワーケーションは仕事そのものだけでなく生き方まで変えるって言ってたのが印象的でした。</p>
                  </div>
                  <figure class="grid__5 --order_6 lp__figure --wrFig">
                    <img src="<?php echo DE_THEME_URI . '/assets/studytour/img_studytour07.jpg'; ?>" alt="ワーケーションの様子">
                  </figure>
                </div>
              </div>
            </section>
            <section class="lp__section --wrSection --mb_3">
              <header class="grid --right_lg --top_lg">
                <div class="grid__inner">
                  <h4 class="grid__10 lp__lead --mt_0 --mb_2 --text_left --largeText">サードプレイスから好きな時に来られる地域のファンへ</h4>
                  <figure class="grid__item lp__figure --wrHeading">
                    <img src="<?php echo DE_THEME_URI . '/assets/work/subheading_02.svg'; ?>" alt="リポート02">
                  </figure>
                  <div class="grid__item lp__content --wrHead">
                    <table class="lp__table --wrTable">
                      <caption>お迎えしたワーケーション体験者様</caption>
                      <tr>
                        <td>お客様のご職業</td>
                        <td>外資系メーカーマーケティング部社員（27歳・女性）</td>
                      </tr>
                      <tr>
                        <td>参加形態</td>
                        <td>お一人</td>
                      </tr>
                      <tr>
                        <td>ワーケーションの目的</td>
                        <td>テレワークを自宅以外でしたい
                          <br>今の組織に属したまま新しい働き方、生き方を探したい</td>
                      </tr>
                      <tr>
                        <td>お客様のリクエスト</td>
                        <td>長期滞在できる場所、現地での交流</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </header>
              <div class="grid">
                <div class="grid__inner">
                  <div class="grid__6 --order_1 --pt_3 --pb_3">
                    <h5 class="lp__lead --bold">農家民宿でもワーケーションできる？</h5>
                    <p>田んぼはお米を作るためだけの場所じゃなって、自分にとって遊び場でもあるし、季節を感じる場所でもあるし、地域とのつながりや伝統文化も生まれる場所だと思っています。
                      <br>ここに吹く風、草の匂い。遠くの山々の風景や満点の星空。鏡のように輝く田植え前。実ほど頭を垂れる稲穂。ゆっくりゆっくりと土の力を蓄える厳しい冬。
                      <br>ここでは365日24時間の全部に意味があります。</p>
                  </div>
                  <figure class="grid__5 --order_2 lp__figure --wrFig">
                    <img src="<?php echo DE_THEME_URI . '/assets/studytour/img_studytour01.jpg'; ?>" alt="ワーケーションの様子">
                  </figure>
                  <div class="grid__6 --order_4 --pt_3 --pb_3">
                    <p>今回うちにやってきたのは、東京の一人暮らしの自宅で、もう4か月も在宅勤務を続けてきたという女性。会社も今後はテレワークが基本になったので、東京から少し離れてみたかったって。
                      <br>口には出さないけど、きっと孤独だったでしょう。
                      <br>うちでよければ1週間でも1か月でもいていいからね、って言いました。</p>
                  </div>
                  <figure class="grid__5 --order_3 lp__figure --wrFig">
                    <img src="<?php echo DE_THEME_URI . '/assets/studytour/img_studytour04.jpg'; ?>" alt="ワーケーションの様子">
                  </figure>
                  <div class="grid__6 --order_5 --pt_3 --pb_3">
                    <p>うちは農家民宿だからコワーキングスペースみたいな施設はないけど、部屋はゆったり使ってもらえるし、天気が良ければ野外からオンライン会議に参加もしてたみたい。
                      <br>東京のオフィスや自宅に比較しても遜色はないですって、むしろ東京より効率も創造性も上がって言うことなしだって言ってくれました。
                      <br>ワーケーションは仕事そのものだけでなく生き方まで変えるって言ってたのが印象的でした。</p>
                  </div>
                  <figure class="grid__5 --order_6 lp__figure --wrFig">
                    <img src="<?php echo DE_THEME_URI . '/assets/studytour/img_studytour07.jpg'; ?>" alt="ワーケーションの様子">
                  </figure>
                </div>
              </div>
            </section>
          </section><!-- #report -->
          <section id="workspot" class="lp__section --workspot">
            <h3 class="lp__heading">
              <img src="<?php echo DE_THEME_URI . '/assets/work/heading_workspot.svg'; ?>" alt="ワークスポット">
            </h3>
          </section><!-- #workspot -->
          <section id="customize" class="lp__section --customize">
            <h3 class="lp__heading">
              <img src="<?php echo DE_THEME_URI . '/assets/work/heading_customize.svg'; ?>" alt="カスタマイズ">
            </h3>
          </section><!-- #customize -->
          <section id="faq" class="lp__section --faq">
            <h3 class="lp__heading">
              <img src="<?php echo DE_THEME_URI . '/assets/work/heading_faq.svg'; ?>" alt="質問">
            </h3>
          </section><!-- #faq -->
          <section id="reservation" class="lp__section --reservation">
            <h3 class="lp__heading">
              <img src="<?php echo DE_THEME_URI . '/assets/work/heading_reservation.svg'; ?>" alt="予約">
            </h3>
          </section><!-- #reservation -->
        </article>
        <?php
        /**
         * 関連記事
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
