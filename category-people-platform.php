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
         * .lp.--peoplePlatform を使う (sass/objects/projects/_landingPages.scss)
         */
        ?>
        <article class="lp --peoplePlatform">
          <section>
            <div class="grid">
              <div class="grid__inner">
                <div class="grid__5 --mb_3">
                  <p>2020年4月より、越前海岸盛り上げ隊では、この地域に長期的な関わりを持ってくれるファンとの交流拠点を整備する『人の駅』プロジェクトの一環として、古民家「はりいしゃ」の改修を進めています。</p>
                  <p>「はりいしゃ」は、越前海岸の町の旧商店街の一角に、文字通りかつて針治療院だった古民家です。商店街復活の願いを込めて、リノベーションが始まりました。</p>
                  <p>改修後の「はりいしゃ」は、交流イベント実施用のスペースとしての利用だけでなく、越前海岸に滞在したいという方のために宿泊もできる場所として登録をしていきます。</p>
                </div>
                <div class="grid__6 --mb_3">
                  <img src="<?php echo DE_THEME_URI . '/assets/people-platform/hariisha.jpg'; ?>">
                </div>
                <div class="grid__5 --mb_3 --order_2">
                  <p>2020年7月には、クラウドファンディングを行い、当初の目標150万円を大きく上回る296万円（達成率197%！）の支援を集めることができました。</p>
                  <p>支援者のみなさん、そして応援してくださったみなさんには感謝の気持ちでいっぱいです。本当にありがとうございました！</p>
                  <p>みなさんの期待を裏切らないよう、「はりいしゃ」の整備はもちろん、盛り上げ隊としての活動をこれからも真摯に自分たちらしく頑張っていきたいと思います。</p>
                </div>
                <div class="grid__6 --mb_3 --order_1">
                  <img src="<?php echo DE_THEME_URI . '/assets/people-platform/campfire.jpg'; ?>">
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
