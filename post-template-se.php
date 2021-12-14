<?php
/*
 * Template Name: 教育旅行テンプレート
 * Template Post Type: post
 */
?>

<?php get_header(); ?>
  <main id="main" class="main">
    <div class="main__container--lp">
      <article class="lp --schoolExcursion">
        <header id="lpHeader" class="lp__header">
          <h2 class="lp__title"><img src="<?php echo DE_THEME_URI . '/assets/title_studytour.svg'; ?>" alt="教育旅行ロゴ"></h2>
          <div class="grid --left_lg">
            <div class="grid__inner">
              <div class="grid__6 --order_2 --mt_2 --mb_2">
                <p class="lp__lead --w_5">越前海岸盛り上げ隊では、「越前海岸の暮らしを見つける旅」を テーマに、ここでしかできない体験をラインアップしています。</p>
              </div>
              <div class="grid__3 --order_1">
                <figure class="lp__figure --artwork">
                  <img src="<?php echo DE_THEME_URI . '/assets/studytour/artwork00.svg'; ?>" alt="挿絵1">
                </figure>
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
        <div id="lpNav">
          <ul class="lp__nav --mb_2">
            <li class="lp__navItem --local"><a href="#about"><img src="<?php echo DE_THEME_URI . '/assets/studytour/heading_studytour.svg'; ?>" alt="スタディツアー"></a></li>
            <li class="lp__navItem --local"><a href="<?php echo get_permalink(1629); ?>"><img src="<?php echo DE_THEME_URI . '/assets/studytour/heading_covid.svg'; ?>" alt="COVID-19対策"></a></li>
            <li class="lp__navItem --local"><a href="#faq"><img src="<?php echo DE_THEME_URI . '/assets/studytour/heading_faq.svg'; ?>" alt="質問"></a></li>
            <li class="lp__navItem --local"><a href="#stay"><img src="<?php echo DE_THEME_URI . '/assets/studytour/heading_stay.svg'; ?>" alt="宿泊"></a></li>
            <li class="lp__navItem --local"><a href="#reservation"><img src="<?php echo DE_THEME_URI . '/assets/studytour/heading_reservation.svg'; ?>" alt="予約"></a></li>
            <li class="lp__navItem --local"><a href="#access"><img src="<?php echo DE_THEME_URI . '/assets/studytour/heading_access.svg'; ?>" alt="アクセス"></a></li>
            <li class="lp__navItem --local"><a href="#announce"><img src="<?php echo DE_THEME_URI . '/assets/studytour/heading_announce.svg'; ?>" alt="アナウンス"></a></li>
          </ul>
          <!--<ul class="lp__nav --mb_2">
            <li class="lp__navItem --activity">
              <img class="lp__navItemIcon" src="<?php //echo DE_THEME_URI . '/assets/studytour/icon_activity.svg'; ?>" alt="アクティビティ">
              <span class="lp__navItemBtn">アクティビティ</span>
            </li>
            <li class="lp__navItem --activity">
              <img class="lp__navItemIcon" src="<?php //echo DE_THEME_URI . '/assets/studytour/icon_agri.svg'; ?>" alt="農業体験">
              <span class="lp__navItemBtn">農業体験</span>
            </li>
            <li class="lp__navItem --activity">
              <img class="lp__navItemIcon" src="<?php //echo DE_THEME_URI . '/assets/studytour/icon_nature.svg'; ?>" alt="自然体験">
              <span class="lp__navItemBtn">自然体験</span>
            </li>
            <li class="lp__navItem --activity">
              <img class="lp__navItemIcon" src="<?php //echo DE_THEME_URI . '/assets/studytour/icon_food.svg'; ?>" alt="食の体験">
              <span class="lp__navItemBtn">食の体験</span>
            </li>
            <li class="lp__navItem --activity">
              <img class="lp__navItemIcon" src="<?php //echo DE_THEME_URI . '/assets/studytour/icon_craft.svg'; ?>" alt="クラフト体験">
              <span class="lp__navItemBtn">クラフト体験</span>
            </li>
          </ul>-->
          <ul class="lp__gallery --mb_4">
            <?php for ($i = 0; $i < 12; $i++) { ?>
              <li class="lp__galleryItem --sm">
                <!--<a href="#" data-toggle="modal" data-target="<?php echo $i; ?>">--><img src="<?php echo DE_THEME_URI . '/assets/studytour/img_studytour' . sprintf('%02d', $i) . '.jpg'; ?>" alt="体験の様子"><!--</a>-->
              </li>
            <?php } ?>
          </ul>
          <!--<div class="modal">
            <div class="modal__container --collapse">
              <div class="modal__inner --hide"></div>
            </div>
            <a class="modal__close" href="#" data-toggle="modal"><span data-icon="ei-close" data-size="l"></span></a>
            <a class="modal__prev" href="#" data-slide="-1"><span data-icon="ei-chevron-left" data-size="l"></span></a>
            <a class="modal__next" href="#" data-slide="1"><span data-icon="ei-chevron-right" data-size="l"></span></a>
            <div class="modal__overlay --collapse" data-toggle="modal"></div>
            <ul class="modal__content">
              <?php for ($i = 0; $i < 12; $i++) { ?>
                <li>
                  <figure class="modal__item" data-index="<?php echo $i; ?>">
                    <img src="<?php echo DE_THEME_URI . '/assets/studytour/img_studytour' . sprintf('%02d', $i) . '.jpg'; ?>" alt="体験の様子">
                  </figure>
                </li>
              <?php } ?>
            </ul>
          </div>--><!-- #modal -->
        </div><!-- #lpNav -->
        <section id="about" class="lp__section --about">
          <h3 class="lp__heading">
            <img src="<?php echo DE_THEME_URI . '/assets/studytour/heading_studytour.svg'; ?>" alt="スタディツアー">
          </h3>
          <h4 class="lp__lead --largeText --mt_1 --mb_2">越前海岸の学習プログラムで自由に研究しよう！</h4>
          <div class="grid --right_lg --mb_3">
            <div class="grid__inner">
              <div class="grid__6 --p_0">
                <p>ここで仕事をしている人は、地域の暮らしに密着して過ごしています。彼らの仕事を知ることで社会への興味、地域の色を発見し、地域の「理解と学び」につなげます。体験を通して、越前海岸で働く人々や、作家さんによる想いにぜひ触れてみてください。メンバーの魅力にたっぷり触れていただけるよう、私たちが誠意を持ってご案内いたします。</p>
              </div>
              <div class="grid__3">
                <figure class="lp__figure --artwork">
                  <img src="<?php echo DE_THEME_URI . '/assets/studytour/artwork01.svg'; ?>" alt="挿絵2">
                </figure>
              </div>
            </div>
          </div>
          <div class="grid --mb_3">
            <div class="grid__inner">
              <section class="grid__item lp__section --feature">
                <h5>暮らしに密着する<br>生業に触れる</h5>
                <img src="<?php echo DE_THEME_URI . '/assets/studytour/artwork_aside00.svg'; ?>" alt="挿絵">
                <p>5地区の地域性が生み出すこれかの仕事のあり方や、新しいライフスタイルを知っていただくきっかけをお伝えしています。</p>
              </section>
              <section class="grid__item lp__section --feature">
                <h5>人数・予算に合わせて<br>プランをカスタマイズ</h5>
                <img src="<?php echo DE_THEME_URI . '/assets/studytour/artwork_aside01.svg'; ?>" alt="挿絵">
                <p>予算・日程・荒天時など突然の変更でも事業者間の連携で臨機応変に対応。屋内でも越前海岸の魅力をたっぷりお届けします。</p>
              </section>
              <section class="grid__item lp__section --feature">
                <h5>海・山・里を<br>一度に味わえる</h5>
                <img src="<?php echo DE_THEME_URI . '/assets/studytour/artwork_aside02.svg'; ?>" alt="挿絵">
                <p>海山里の魅力を一度に味わえる地域は日本でも有数。昔ながらの営みを受け継いできた人々の暮らしを、肌で体感できます。</p>
              </section>
            </div>
          </div>
          <div class="grid --top --mb_3">
            <div class="grid__inner">
              <div class="grid__6 --p_0">
                <h4 class="lp__lead --bold">自由研究、テーマ別の学習</h4>
                <p>各体験はSDGsの観点からも体験ができるようになっており、保育園・こども園・幼稚園・小中高学校等の自由研究、テーマ別の学習、スタディツアーといった教育旅行が可能です。</p>
                <p>＊掲載しているアクティビティは、厳重な感染対策をしたうえで実施していますが、コロナウィルス等の状況次第では実施を見送る場合があります。</p>
              </div>
              <div class="grid__item lp__figure --image_1">
                <img src="<?php echo DE_THEME_URI . '/assets/studytour/img_studytour12.jpg'; ?>" alt="体験の様子">
              </div>
              <div class="grid__item lp__figure --image_2">
                <img src="<?php echo DE_THEME_URI . '/assets/studytour/img_studytour13.jpg'; ?>" alt="体験の様子">
              </div>
              <div class="grid__item lp__content --goToPDF">
                <img src="<?php echo DE_THEME_URI . '/assets/title_studytour.svg'; ?>" alt="教育旅行ロゴ">
                <a href="<?php echo DE_THEME_URI . '/assets/school-excursion.pdf'; ?>"><img src="<?php echo DE_THEME_URI . '/assets/studytour/btn_pdf.svg'; ?>" alt="利用料金・概要についてはこちら"></a>
              </div>
            </div>
          </div>
          <div class="lp__border --mt_2 --mb_2">
            <img src="<?php echo DE_THEME_URI . '/assets/border.svg'; ?>" alt="ボーダー">
          </div>
          <div class="grid --top --expand --mb_3">
            <div class="grid__inner">
              <div class="grid__12">
                <p class="lp__lead --largeText">未来にスイッチ、私たちが観光案内人</p>
              </div>
              <div class="grid__9 --p_0">
                <table class="lp__table --activity">
                  <caption>各種体験内容</caption>
                  <thead>
                    <tr>
                      <th>主催事業者</th>
                      <th>体験内容</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>越前海岸盛り上げ隊</td>
                      <td>海釣り体験～安全な岸壁からの釣り体験</td>
                    </tr>
                    <tr>
                      <td>Attola</td>
                      <td>磯の生き物観察体験～海岸清掃を行いながら海の生き物と自然の関係を勉強</td>
                    </tr>
                    <tr>
                      <td>志野製塩所</td>
                      <td>塩づくり体験～日本海から汲み取った海水で塩を作る体験</td>
                    </tr>
                    <tr>
                      <td>志野ファーム</td>
                      <td>家畜餌やり体験～ニワトリやヤギなどの餌やり及びお世話体験</td>
                    </tr>
                    <tr>
                      <td>ワタリグラススタジオ</td>
                      <td>グラスづくり体験～海を見下ろす工房でのグラスづくり体験</td>
                    </tr>
                    <tr>
                      <td>鷹巣荘</td>
                      <td>海水浴&BBQ体験～海を見ながらBBQ / 温泉付き</td>
                    </tr>
                    <tr>
                      <td>岩尾醤油醸造元</td>
                      <td>醤油絞り体験～醤油絞りから、自分だけの醤油瓶を作って持ち帰り</td>
                    </tr>
                    <tr>
                      <td>たかすオハナ牧場</td>
                      <td>ヤギ・羊の餌やり体験～ヤギや羊の餌やり体験</td>
                    </tr>
                    <tr>
                      <td>ファームステイ殿下</td>
                      <td>ムラロゲイニング～緩い競技性を持たせた農村型アクティビティ</td>
                    </tr>
                    <tr>
                      <td>こしのくに里山再生の会</td>
                      <td>林業体験～森の環境教育を学びながら、薪割り体験等を行う</td>
                    </tr>
                    <tr>
                      <td>こしのくに里山再生の会</td>
                      <td>川遊び体験～山の中の清流で川遊びを行う</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="grid__3">
                <figure class="lp__figure --artwork">
                  <img src="<?php echo DE_THEME_URI . '/assets/studytour/artwork02.svg'; ?>" alt="挿絵3">
                </figure>
              </div>
            </div>
          </div>
          <div class="grid --top --expand --mb_2">
            <div class="grid__inner">
              <div class="grid__6">
                <div class="lp__video">
                  <video src="<?php echo DE_THEME_URI . '/assets/activity.mp4'; ?>" controls></video>
                  <p class="lp__caption">越前海岸盛り上げ隊の体験メニュー<br>「うみたん」</p>
                </div>
              </div>
              <div class="grid__6">
                <div class="lp__video">
                  <video src="<?php echo DE_THEME_URI . '/assets/facility.mp4'; ?>" controls></video>
                  <p class="lp__caption">農家民宿のご案内</p>
                </div>
              </div>
            </div>
          </div>
        </section><!-- #about -->
        <section id="stay" class="lp__section --stay">
          <h3 class="lp__heading">
            <img src="<?php echo DE_THEME_URI . '/assets/studytour/heading_stay.svg'; ?>" alt="宿泊">
          </h3>
          <div class="grid --mb_3">
            <div class="grid__inner">
              <div class="grid__4">
                <figure class="lp__figure --artwork_md">
                  <img src="<?php echo DE_THEME_URI . '/assets/map_area.svg'; ?>" alt="五地区略図">
                </figure>
                <p class="--text_center">各地区には10分単位で移動可能</p>
              </div>
              <div class="grid__6 --p_0">
                <p>多くの学びを得た1日の終わりは真っ赤に燃える夕日を見にいきませんか。毎日違う顔を見せるゆっくり沈む夕日は見ている人の心を優しく包みます。そして、夕日の色が海に馴染む頃、越前海岸でゆっくりお食事や温泉をお楽しみいただけます。</p>
                <p>＊宿泊に関しては、お客様で直接ご予約お願いします。</p>
                <p class="--text_right"><a href="<?php echo DE_THEME_URI . '/assets/map2021.pdf'; ?>">エリアマップはこちら</a></p>
              </div>
            </div>
          </div>
          <h4 class="lp__lead --bold --mt_3 --mb_3 --text_center">盛り上げ隊の宿泊施設</h4>
          <div class="grid --top --left_lg --mb_3">
            <ul id="facilityList" class="grid__inner">
              <template id="facilityTemplate">
                <li class="grid__item lp__section --facility">
                  <img src="<?php echo DE_THEME_URI . '/assets/studytour/'; ?>" alt="">
                  <h5>A／[fullname]<br><span class="lp__span --area">[[area]地区]</span></h5>
                  <p>[コメント]</p>
                  <p><span class="lp__span --tel">[tel]</span><span class="lp__span --capacity">[capacity]</span></p>
                </li>
              </template>
            </ul>
          </div>
        </section><!-- #stay -->
        <section id="faq" class="lp__section --faq">
          <h3 class="lp__heading">
            <img src="<?php echo DE_THEME_URI . '/assets/studytour/heading_faq.svg'; ?>" alt="質問">
          </h3>
          <div class="grid --top --expand --mb_3">
            <div class="grid__inner">
              <ul class="grid__7 --order_2 --p_0">
                <li><span class="lp__span --faq">Q1.</span>付き添いの料金は免除になりますか。<a class="lp__span --reply" href="#" data-toggle="panel" data-target="panel1"></a></li>
                <li id="panel1" class="panel"><span class="lp__span --faq">A1.</span>体験の付き添いの方は、料金免除になります。</li>
                <li><span class="lp__span --faq">Q2.</span>キャンセル時はどういう対応でしょうか。<a class="lp__span --reply" href="#" data-toggle="panel" data-target="panel2"></a></li>
                <li id="panel2" class="panel"><span class="lp__span --faq">A2.</span>下記<a href="#announce">アナウンス</a>のキャンセルポリシーをご確認ください。</li>
                <li><span class="lp__span --faq">Q3.</span>今までの教育旅行の実例を教えてください。<a class="lp__span --reply" href="#" data-toggle="panel" data-target="panel3"></a></li>
                <li id="panel3" class="panel"><span class="lp__span --faq">A3.</span><a href="#archive">こちら</a>を参考ください。</li>
                <li><span class="lp__span --faq">Q4.</span>お昼ご飯を食べる場所はありますか。<a class="lp__span --reply" href="#" data-toggle="panel" data-target="panel4"></a></li>
                <li id="panel4" class="panel"><span class="lp__span --faq">A4.</span>感染拡大防止のため、各事業所で見合わすことがあります。なお越前海岸では屋内で召し上がれるレストラン、悪天候でなければ周遊しながらお弁当を食べるスポットもございます。</li>
              </ul>
              <div class="grid__3 --order_1 --mt_2">
                <figure class="lp__figure --artwork">
                  <img src="<?php echo DE_THEME_URI . '/assets/studytour/artwork03.svg'; ?>" alt="挿絵4">
                </figure>
              </div>
            </div>
          </div>
        </section><!-- #faq -->
        <section id="reservation" class="lp__section --reservation">
          <h3 class="lp__heading">
            <img src="<?php echo DE_THEME_URI . '/assets/studytour/heading_reservation.svg'; ?>" alt="予約">
          </h3>
          <div class="grid --top --expand --mb_3">
            <div class="grid__inner">
              <div class="grid__6 --p_0">
                <div class="lp__section --concierge">
                  <figure class="lp__figure">
                    <img src="<?php echo DE_THEME_URI . '/assets/img_yuko.jpg'; ?>" alt="越前海岸コンシェルジュ 松平裕子さん">
                  </figure>
                  <div class="lp__content">
                    <h4 class="lp__lead --bold --mt_1 --mb_0">ごあいさつ</h4>
                    <p>こんにちは、新しく越前海岸を観光案内するコンシェルジュを努めます、松平裕子です。海の暮らしも、山の暮らしもある越前海岸。地域の資源を活かしながら、地域に根ざす事業者が様々な営みをしています。地元の方々とのふれあいを通じたり、今も息づくどこか懐かしい暮らしを通して学習しませんか。</p>
                    <p class="--text_right"><span class="lp__span">越前海岸コンシェルジュ</span> <span class="lp__span">松平裕子さん</span></p>
                  </div>
                </div>
              </div>
              <div class="grid__5 --p_0">
                <div class="lp__section --reserve">
                  <div class="lp__content">
                    <h4 class="lp__lead --bold --mt_1 --mb_0">体験の予約について</h4>
                    <p>ご予約の際、来福日程、希望体験名、希望人数、滞在時間、団体名、代表者名、代表者様のご連絡先をご記入の上お申込みください。</p>
                  </div>
                  <figure class="lp__figure --artwork">
                    <img src="<?php echo DE_THEME_URI . '/assets/studytour/artwork04.svg'; ?>" alt="挿絵5">
                  </figure>
                </div>
              </div>
              <div class="grid__12 --mt_3 --mb_3 --text_center">
                <a class="lp__btn --reservation" href="mailto:info@discoverechizen.com">コンシェルジュに問い合わせ<span data-icon="ei-chevron-right"></span></a>
              </div>
            </div>
          </div>
        </section><!-- #reservation -->
        <section id="access" class="lp__section --access">
          <h3 class="lp__heading">
            <img src="<?php echo DE_THEME_URI . '/assets/studytour/heading_access.svg'; ?>" alt="アクセス">
          </h3>
          <div class="grid --top --expand --mb_4">
            <div class="grid__inner">
              <section class="grid__6 lp__section --accessInfo --p_0">
                <h4 class="lp__lead --mb_2 --bold --text_center"><span class="lp__span --target">県外からお越しの方</span>
                  <br>交通ガイド</h4>
                <div class="lp__content --trafficInfo --mb_2">
                  <figure class="lp__figure --p_1">
                    <img src="<?php echo DE_THEME_URI . '/assets/studytour/icon_train.svg'; ?>" alt="電車">
                  </figure>
                  <div class="lp__content">
                    <p class="--m_0">東京駅から東海道新幹線利用<span class="lp__span --time">3時間30分</span></p>
                    <p class="--m_0">大阪駅から特急サンダーバード<span class="lp__span --time">2時間00分</span></p>
                    <p class="--m_0">名古屋駅から東海道・山陽新幹線しらさぎ<span class="lp__span --time">1時間50分</span></p>
                  </div>
                </div>
                <div class="lp__content --trafficInfo --mb_2">
                  <figure class="lp__figure --p_1">
                    <img src="<?php echo DE_THEME_URI . '/assets/studytour/icon_bus.svg'; ?>" alt="バス">
                  </figure>
                  <div class="lp__content">
                    <p class="--m_0">東京駅八重洲南口から<span class="lp__span --time">6時間40分</span></p>
                    <p class="--m_0">阪急高速バスターミナル(阪急三番街)から<span class="lp__span --time">2時間20分</span></p>
                    <p class="--m_0">名古屋駅名鉄バスセンターから<span class="lp__span --time">2時間10分</span></p>
                  </div>
                </div>
              </section>
              <section class="grid__6 lp__section --accessInfo --p_0">
                <h4 class="lp__lead --mb_2 --bold --text_center"><span class="lp__span --target">県内からお越しの方</span>
                  <br>各IC～越前海岸まで お車の場合</h4>
                <figure class="lp__figure --accessinfo_highway">
                  <img src="<?php echo DE_THEME_URI . '/assets/accessinfo_highway.svg'; ?>" alt="各IC～越前海岸まで">
                </figure>
                <figure class="lp__figure --accessinfo_local">
                  <img src="<?php echo DE_THEME_URI . '/assets/accessinfo_local.svg'; ?>" alt="福井駅～越前海岸まで">
                </figure>
              </section>
            </div>
          </div>
        </section>
        <section id="announce" class="lp__section --announce">
          <h3 class="lp__heading">
            <img src="<?php echo DE_THEME_URI . '/assets/studytour/heading_announce.svg'; ?>" alt="アナウンス">
          </h3>
          <div class="lp__content --announce">
            <ul class="lp__list --reply --mb_3">
              <li>屋外で実施する体験が多いため、荒天時には余儀なく予定が変更となる場合があります。あらかじめご了承ください。</li>
              <li>当団体所定の申込サイトに必要事項をご記入の上、ご案内する申込金を、当団体指定の口座へお振込みいただきます。申込金は旅行代金をお支払いいただくときに、その一部として繰り入れます。また旅行契約は、当団体が契約の締結を承諾し、申込金を受領した時点で成立します。</li>
              <li>グループが複数の場合、体験施設、または指定場所へ直接集合になります。</li>
              <li>添乗員は同行しませんが、コンシェルジュが現地でご案内いたします。</li>
              <li>契約内容の変更や取り消しについては、速やかにお申し出ください。お客様側のご都合で契約取り消しとなる場合は、下記の通りキャンセル料が発生いたしますのでご了承ください。</li>
            </ul>
            <table class="lp__table --cancellation">
              <caption>キャンセルポリシー</caption>
              <tr>
                <td>1週間前～2日前まで</td>
                <td>旅行会費の20%</td>
              </tr>
              <tr>
                <td>旅行開始の前日</td>
                <td>旅行会費の50%</td>
              </tr>
              <tr>
                <td>当日</td>
                <td>旅行会費の100%</td>
              </tr>
            </table>
          </div>
        </section><!-- #announce -->
      </article>
      <?php /*
      if (have_posts()) {
      while (have_posts()) {
          the_post();
          the_content();
        }
      }
      */ ?>
      <div id="archive" class="lists">
        <?php
        $posts = get_posts([
          'posts_per_page' => 12,
          'post_type' => 'post',
          'tag' => 'se'
        ]);
        foreach ($posts as $post) {
          setup_postdata($post);
          get_template_part('parts/components/lists');
        }
        ?>
      </div><!-- .list -->
    </div><!-- .main__container -->
  </main><!-- .main -->
<?php get_footer(); ?>
