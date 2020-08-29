    <section id="umitan" class="umitan wave">
      <h2 class="umitan__heading">
        <div class="umitan__heading-container">
          <img src="<?php echo get_template_directory_uri() . '/assets/svg/title_umitan.svg'; ?>" alt="umitan">
        </div>
      </h2>
      <div class="umitan__main">
        <div class="umitan__container">
          <div class="umitan__intro">
          <?php
          $posts = get_posts([
            'posts_per_page' => 1,
            'include' => [4],
            'post_type' => 'page'
          ]);
          foreach ($posts as $post) {
            setup_postdata($post);
            the_content();
          }
          ?>
          </div>
          <div class="umitan__video">
            <video controls src="<?php echo get_template_directory_uri() . '/assets/discoverechizen.mp4'; ?>" poster="<?php echo get_template_directory_uri() . '/assets/discoverechizen_poster.jpg'; ?>"></video>
            <a href="https://youtu.be/XGeX86_f71s" target="_blank">Youtubeチャンネルを見る &gt;&gt;&gt;</a>
          </div>
        </div>
        <div class="umitan__icons">
          <div class="umitan__icon--spring"><a href="<?php echo get_term_link('spring', 'umitan-cat'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/svg/umitan_spring.svg'; ?>"></a></div>
          <div class="umitan__icon--summer"><a href="<?php echo get_term_link('summer', 'umitan-cat'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/svg/umitan_summer.svg'; ?>"></a></div>
          <div class="umitan__icon--autumn"><a href="<?php echo get_term_link('autumn', 'umitan-cat'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/svg/umitan_autumn.svg'; ?>"></a></div>
          <div class="umitan__icon--winter"><a href="<?php echo get_term_link('winter', 'umitan-cat'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/svg/umitan_winter.svg'; ?>"></a></div>
          <div class="umitan__icon--allseason"><a href="<?php echo get_term_link('allseason', 'umitan-cat'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/svg/umitan_allseason.svg'; ?>"></a></div>
          <div class="umitan__icon--all"><a href="<?php echo get_post_type_archive_link('umitan'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/svg/umitan_all.svg'; ?>"></a></div>
        </div>
      </div>
    </section><!-- .umitan -->
