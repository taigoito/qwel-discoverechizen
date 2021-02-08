    <section id="blog" class="blog">
      <h2 class="blog__heading">
        <div class="blog__heading-container">
          <img src="<?php echo get_template_directory_uri() . '/assets/svg/title_blog.svg'; ?>" alt="blog">
        </div>
      </h2>
      <ul class="blog__categories">
      <?php $categories = get_categories(); ?>
      <?php foreach($categories as $category) {?>
        <li class="blog__category"><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a></li>
      <?php } ?>
      </ul>
      <div class="lists">
        <?php
        $posts = get_posts([
          'posts_per_page' => 3,
          'category' => -1,
          'post_type' => 'post'
        ]);
        foreach ($posts as $post) {
          setup_postdata($post);
          get_template_part('parts/components/lists');
        }
        ?>
      </div><!-- .list -->
      <a href="<?php the_permalink(2); ?>">&gt; ブログ をもっと見る</a>
    </section><!-- .blog -->
