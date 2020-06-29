    <section id="front-location" class="front-sec">
      <h2 class="front-sec-heading">
        <div class="row">
          <img src="<?php echo get_template_directory_uri() . '/assets/svg/title_location.svg'; ?>" alt="location">
        </div>
      </h2>
      <div class="container">
        <div class="row">
          <?php
          $posts = get_posts([
            'posts_per_page' => 1,
            'include' => [6],
            'post_type' => 'page'
          ]);
          foreach ($posts as $post) {
            setup_postdata($post);
            the_content();
          }
          ?>
        </div>
      </div>
      <div class="iframe-full-width">
        <iframe src="https://www.google.com/maps/d/u/4/embed?mid=1k1RquskSBCxiA2iMPQNouIVLkUtwIudk" width="960" height="480" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        <div id="map-cover">
          <p id="map-info">クリックするとマップを拡大/縮小できるようになります。
            <br>その後、左上のアイコンからメニューを呼び出せます。</p>
        </div>
      </div>
    </section><!-- #location -->
