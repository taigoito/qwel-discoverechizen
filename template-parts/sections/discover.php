    <section id="front-discover" class="front-sec wave">
      <h2 id="discover-title">
        <div class="row">
          <img src="<?php echo get_template_directory_uri() . '/assets/svg/title_umitan.svg'; ?>" alt="umitan">
        </div>
      </h2>
      <div class="container">
        <div class="row">
          <div class="front-discover-intro">
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
          <div class="front-discover-video">
            <video controls src="<?php echo get_template_directory_uri() . '/assets/discoverechizen.mp4'; ?>" poster="<?php echo get_template_directory_uri() . '/assets/discoverechizen_poster.jpg'; ?>"></video>
            <a href="https://youtu.be/fssr1SzO0L0" target="_blank">Youtubeチャンネルを見る &gt;&gt;&gt;</a>
          </div>
          <?php
          $posts = get_posts([
            'posts_per_page' => 3,
            'post_type' => 'umitan',
            'tax_query' => [
              [
                'taxonomy' => 'umitan-cat',
                'terms'    => '156',
                'field'    => 'pickup'
              ]
            ]
          ]);
          foreach ($posts as $post) {
            setup_postdata($post);
          ?>
          <div class="discover-pickup">
            <div class="row">
              <div class="featured-image">
                <a href="<?php the_permalink(); ?>">
                  <?php
                    if (has_post_thumbnail()) {
                      the_post_thumbnail('large');
                    } else {
                      no_image('lg');
                    }
                  ?>
                </a>
              </div>
              <div class="discover-pickup-intro">
                <img src="<?php echo get_template_directory_uri() . '/assets/svg/umitan_osusume.svg'; ?>">
                <h4 class="discover-pickup-title"><?php echo get_post_meta($post->ID, 'eventdate', true); ?>
                  <br><?php the_discover_title(); ?></h4>
                <p class="discover-pickup-subtitle"><?php the_discover_description(); ?></a></p>
                <div class="discover-pickup-excerpt"><?php the_excerpt(); ?></div>
                <a class="discover-pickup-btn" href="<?php the_permalink(); ?>">お申込み・詳細はこちら &gt;&gt;&gt;</a>
              </div>
            </div>
          </div>
          <?php } ?>
        </div><!-- .row -->
        <div class="discover-icons row">
          <div class="discover-spring"><a href="<?php echo get_term_link('spring', 'umitan-cat'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/svg/umitan_spring.svg'; ?>"></a></div>
          <div class="discover-summer"><a href="<?php echo get_term_link('summer', 'umitan-cat'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/svg/umitan_summer.svg'; ?>"></a></div>
          <div class="discover-autumn"><a href="<?php echo get_term_link('autumn', 'umitan-cat'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/svg/umitan_autumn.svg'; ?>"></a></div>
          <div class="discover-winter"><a href="<?php echo get_term_link('winter', 'umitan-cat'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/svg/umitan_winter.svg'; ?>"></a></div>
          <div class="discover-allseason"><a href="<?php echo get_term_link('allseason', 'umitan-cat'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/svg/umitan_allseason.svg'; ?>"></a></div>
          <div class="discover-all"><a href="<?php echo get_post_type_archive_link('umitan'); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/svg/umitan_all.svg'; ?>"></a></div>
        </div><!-- .row -->
      </div><!-- .container -->
    </section><!-- #discover -->
