<?php get_header();
  /**
   * Main
   * フロントページでは、main直下に各セクションが入る
   */
  ?>
  <main id="main" class="main">
    <?php
    /**
     * フロントページでは .section を使う (sass/objects/projects/_sections.scss)
     * 特殊な処理は .--hero, .--access などで対応
     */
    // Hero
    get_template_part('section-parts/hero');
    // セクション毎のテンプレート読み込み
    $sections = \DE::get_sections();
    foreach ($sections as $section => $type) {
      // 表示の有無をチェック
      $is_shown = true;
      if ($type === 'post' || $type === 'category' || $type === 'tag') {
        $relational_id = \DE::get_data($section, 'relational_id');
        if (!$relational_id) $is_shown = false;
      }
      if ($is_shown) get_template_part('section-parts/' . $section);
    }
    ?>
  </main><!-- #main -->
  <?php
  /**
   * Cover
   * フロントページでは、複数要素を挿入し、JSのFaderを適用
   */
  get_template_part('template-parts/cover');
  ?><!-- #cover -->
<?php get_footer();
