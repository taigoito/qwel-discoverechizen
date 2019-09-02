<?php
$locationHtml = get_post_meta($post->ID, 'location', true);
$materialsHtml = get_post_meta($post->ID, 'material', true);
$finishHtml = get_post_meta($post->ID, 'finish', true);
$sizesHtml = get_post_meta($post->ID, 'size', true);
$durationHtml = get_post_meta($post->ID, 'duration', true);
$price = get_post_meta($post->ID, 'price', true);
if (is_numeric($price)) {
  $priceHtml = '￥' . number_format($price) . '-';
}
?>
      <article class="work row">
        <div class="work-primary-col">
          <h2 class="work-title"><?php the_title(); ?></h2>
          <table class="work-info">
            <tbody>
              <?php if (!empty(get_post_meta($post->ID, 'location', true))) { ?>
              <tr>
                <th>所在地</th>
                <td><?php echo $locationHtml; ?></td>
              </tr>
              <?php } ?>
              <?php if (!empty(get_post_meta($post->ID, 'material', true))) { ?>
              <tr>
                <th>素材</th>
                <td><?php echo $materialsHtml; ?></td>
              </tr>
              <?php } ?>
              <?php if (!empty(get_post_meta($post->ID, 'finish', true))) { ?>
              <tr>
                <th>仕上</th>
                <td><?php echo $finishHtml; ?></td>
              </tr>
              <?php } ?>
              <?php if (!empty(get_post_meta($post->ID, 'size', true))) { ?>
              <tr>
                <th>寸法</th>
                <td><?php echo $sizesHtml; ?></td>
              </tr>
              <?php } ?>
              <tr>
                <th>参考納期</th>
                <td>
                  <?php
                  if (!empty(get_post_meta($post->ID, 'duration', true))) {
                    echo $durationHtml;
                  } else {
                    echo 'お問い合わせください';
                  }
                  ?>
                  </td>
              </tr>
              <tr>
                <th>参考価格</th>
                <td>
                  <?php
                  if (!empty($price)) {
                    echo $priceHtml;
                  } else {
                    echo 'お問い合わせください';
                  }
                  ?>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="work-content">
            <?php the_content(); ?>
          </div>
        </div>
        <div class="work-secondary-col">
          <div class="work-gallery"></div>
        </div>
      </article>
