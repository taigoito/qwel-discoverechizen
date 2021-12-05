  <header id="header" class="header">
    <div class="header__container">
      <?php
      /**
       * Site Brand
       * is_frontpage() で、h1かdivか分岐
       */
      get_template_part('template-parts/siteBrand');
      ?><!-- #siteBrand-->
      <?php
      /**
       * G Nav
       * テーマ設定を読み込み、表示する項目を選択
       */
      get_template_part('template-parts/gNav');
      ?><!-- #gNav -->
    </div>
  </header><!-- #header -->
