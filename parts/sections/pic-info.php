<?php
$picHtml = get_post_meta($post->ID, 'pic', true);
$picslugHtml = get_post_meta($post->ID, 'picslug', true);
$addresssHtml = get_post_meta($post->ID, 'address', true);
$contactHtml = get_post_meta($post->ID, 'contact', true);
$urlHtml = '<a href="' . get_post_meta($post->ID, 'webpage', true) . '" target="_blank">' . get_post_meta($post->ID, 'webpage', true) . '</a>';
$durationHtml = get_post_meta($post->ID, 'duration', true);
$hoursHtml = get_post_meta($post->ID, 'hours', true);
$priceHtml = get_post_meta($post->ID, 'price', true);
?>
          <div class="pic-info">
            <h3 class="pic-info__heading">INFORMATION</h3>
            <table class="pic-info__table">
              <tbody>
                <?php if (!empty(get_post_meta($post->ID, 'pic', true)) && !empty(get_post_meta($post->ID, 'picslug', true))) { ?>
                <tr>
                  <th>事業所</th>
                  <td><?php echo '<a href="' . get_home_url('/') . '/info/' . $picslugHtml . '">' . $picHtml . '</a>'; ?></td>
                </tr>
                <?php } else if (!empty(get_post_meta($post->ID, 'pic', true))) { ?>
                <tr>
                  <th>事業所</th>
                  <td><?php echo $picHtml; ?></td>
                </tr>
                <?php } else { ?>
                  <tr>
                  <th>事業所</th>
                  <td><?php the_title(); ?></td>
                </tr>
                <?php } ?>
                <?php if (!empty(get_post_meta($post->ID, 'address', true))) { ?>
                <tr>
                  <th>所在地</th>
                  <td><?php echo $addresssHtml; ?></td>
                </tr>
                <?php } ?>
                <?php if (!empty(get_post_meta($post->ID, 'contact', true))) { ?>
                <tr>
                  <th>連絡先</th>
                  <td><?php echo '<a href="tel:' . $contactHtml . '">' . $contactHtml . '</a>'; ?></td>
                </tr>
                <?php } else { ?>
                <tr>
                  <th>連絡先</th>
                  <td>フォームよりお問い合わせください</td>
                </tr>
                <?php } ?>
                <?php if (!empty(get_post_meta($post->ID, 'webpage', true))) { ?>
                <tr>
                  <th>URL</th>
                  <td><?php echo $urlHtml; ?></td>
                </tr>
                <?php } ?>
                <?php if (!empty(get_post_meta($post->ID, 'duration', true))) { ?>
                <tr>
                  <th>営業期間</th>
                  <td><?php echo $durationHtml; ?></td>
                </tr>
                <?php } ?>
                <?php if (!empty(get_post_meta($post->ID, 'hours', true))) { ?>
                <tr>
                  <th>営業時間</th>
                  <td><?php echo $hoursHtml; ?></td>
                </tr>
                <?php } ?>
                <?php if (!empty(get_post_meta($post->ID, 'price', true))) { ?>
                <tr>
                  <th>ご料金</th>
                  <td><?php echo $priceHtml; ?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
