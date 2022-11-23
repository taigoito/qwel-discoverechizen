    <?php
    $section           = 'location';
    $section_title     = \DE::get_data($section, 'title');
    $url               = \DE::get_data($section, 'map_url');
    setup_postdata($post);
    ?>
    <section id="<?php echo $section; ?>" class="<?php echo 'section --' . $section; ?>">
      <div class="section__headingContainer">
        <h3 class="section__heading">
          <span class="section__headingSpan1" data-comfort="1"><?php echo my_format_slug($section); ?></span>
          <span class="section__headingSpan2" data-comfort="1"><?php echo $section_title; ?></span>
        </h3>
      </div>
      <div class="section__inner">
        <div class="section__content">
          <div class="grid --top">
            <div class="grid__inner">
              <div class="grid__6">
                <h4><strong>お車をご利用の場合（時間は鷹巣海水浴場までの所要時間）</strong></h4>
                <p>■JR福井駅より 約40分</p>
                <p>■福井北I.C.より 約45分</p>
                <p>■東京より 約7時間<br>（新東名高速道路・名神高速道路 〜 米原 JCT<br>〜 北陸自動車道 福井北I.C. 経由）</p>
                <p>■名古屋より 約3時間<br>（名神高速道路 〜 米原 JCT〜北陸自動車道 福井I.C. 経由）</p>
                <p>■大阪より 約3時間30分<br>（名神高速道路 〜 米原 JCT 〜 北陸自動車道 福井I.C. 経由）</p>
              </div>
              <div class="grid__5">
                <h4><strong>路線バス（京福バス）ご利用のご案内</strong></h4>
                <p>■鷹巣・国見方面へお越しの場合<br>10, 15, 17系統 越前海岸ブルーライン<br>（福井駅〜波の華温泉）</p>
                <p>■殿下・越廼方面へお越しの場合<br>78系統 茱崎線<br>（福井駅〜水仙ランド入口）</p>
              </div>
            </div>
          </div>
        </div>
        <div class="section__map">
          <iframe src="<?php echo $url; ?>" width="960" height="480" frameborder="0" style="border:0" allowfullscreen=""></iframe>
          <div class="section__mapCover">
            <p class="section__mapInfo">クリックするとマップを拡大/縮小できるようになります。
              <br>その後、左上のアイコンからメニューを呼び出せます。</p>
          </div>
        </div>
        <div class="section__moreWrap">
        <a class="section__more" href="<?php echo DE::get_data('location', 'pdf_url'); ?>">&gt; 最新のトレジャーマップをPDFで見る</a>
      </div>
      </div>

    </section><!-- #<?php echo $section_id; ?> -->
