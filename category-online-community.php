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
         * .lp.--onlineCommunity を使う (sass/objects/projects/_landingPages.scss)
         */
        ?>
        <article class="lp --onlineCommunity">
          <section>
            <div class="grid">
              <div class="grid__inner">
                <div class="grid__12 --mb_3">
                  <p>2020年6月より、「オンライン交流会」を開催しています。<br>越前海岸盛り上げ隊の隊員たちの専門スキル、知恵、地域の資源などを、双方向でバーチャルに伝え、共感・共有(シェア)するのが目的です。</p>
                </div>
                <div class="grid__5 --mb_3">
                  <p>昔から、
                    <br>&#8220;Think globally, act locally&#8221;
                    <br>と言われてきましたが、これからはこの言葉に続いて、
                    <br>&#8220;Share locally, interregionally, and globally&#8221;
                    <br>ということになると思います。
                    <br>自分たちの知恵やスキルを、地元で、地域間(都市と福井)で、そしてどこかの国のどこかのコミュニティとシェアしよう、ということです。</p>
                  <p>2020年6月より、「オンライン交流会」を開催しています。<br>越前海岸盛り上げ隊の隊員たちの専門スキル、知恵、地域の資源などを、双方向でバーチャルに伝え、共感・共有(シェア)するのが目的です。</p>
                  <p>都市部の人たちの中にも、今回の新型コロナの問題で、食料もエネルギーも仲間もいない都市の暮らしの脆弱さ、不安を再び強く感じている方もいらっしゃることでしょう。
                    <br>2012年の東日本大震災や原子力災害の際にも、それを機に地方に移住した人が少なくありませんでした。
                    <br>このコロナ渦の最中、再びリアル行き来ができるようになる時期に向けて、越前海岸の四季と共にある手仕事や暮らし、とりわけ人、に対する興味・関心・共感を醸成するコミュニティに参加しませんか。</p>
                </div>
                <div class="grid__6 --mb_3">
                  <img src="<?php echo DE_THEME_URI . '/assets/online-community/online-community.jpg'; ?>">
                </div>
                <div class="grid__12 --mb_3">
                  <p>農林漁業・農林海産物・食やクラフトで、越前海岸の恵みの魅力を表現し、都市と地元の人がオンラインでつながり交流し、終了後は紹介した食材やクラフトを購入することもできます。</p>
                  <p>そして、秋に移動制限が解除されたら、ぜひ越前海岸に遊びに来ていただきたいです・・・!!</p>
                </div>
              </div>
            </div>
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
