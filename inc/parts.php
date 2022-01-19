<?php

/**
 * テンプレートパーツを生成する関数群
 */

// .post__heading生成
if (!function_exists('get_heading')) {
  function get_heading($level = 'h4', $link = true) {
    if ($link) {
    ?>
    <<?php echo $level; ?> class="post__heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></<?php echo $level; ?>>
    <?php
    } else {
    ?>
    <<?php echo $level; ?> class="post__heading"><?php the_title(); ?></<?php echo $level; ?>>
    <?php
    }
  }
}

// .post__image生成
if (!function_exists('get_featured_image')) {
  function get_featured_image($size = 'medium', $link = true) {
    if ($link) {
    ?>
    <figure class="post__image">
      <a href="<?php the_permalink(); ?>">
        <?php if (has_post_thumbnail()) { ?>
          <?php the_post_thumbnail($size); ?>
        <?php } else { ?>
          <img src="<?php echo QWEL_DEFAULT_IMAGE; ?>">
        <?php } ?>
      </a>
    </figure>
    <?php
    } else {
    ?>
    <figure class="post__image">
      <?php if (has_post_thumbnail()) { ?>
        <?php the_post_thumbnail($size); ?>
      <?php } else { ?>
        <img src="<?php echo QWEL_DEFAULT_IMAGE; ?>">
      <?php } ?>
    </figure>
    <?php
    }
  }
}
