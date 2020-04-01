              <h2 class="member-title"><span><?php if (get_the_author_meta('last_name')) echo get_the_author_meta('last_name'); ?> <?php if (get_the_author_meta('first_name')) echo get_the_author_meta('first_name'); ?> さんに聞く！</span>
                <br><span>福井市越前海岸ってどんなとこ？</span></h2>
              <dl class="member-content">
                <?php $count = 0; ?>
                <?php if (get_the_author_meta('q1')) { ?>
                  <?php $count++; ?>
                  <dt>Q<?php echo $count; ?>.あなたの住んでいる地区はどんな場所ですか？なぜここに住んでいるのですか？</dt>
                  <dd><?php echo nl2br(get_the_author_meta('q1'), false); ?></dd>
                <?php } ?>
                <?php if (get_the_author_meta('q2')) { ?>
                  <?php $count++; ?>
                  <dt>Q<?php echo $count; ?>.普段どんな仕事（活動）をしていますか？</dt>
                  <dd><?php echo nl2br(get_the_author_meta('q2'), false); ?></dd>
                <?php } ?>
                <?php if (get_the_author_meta('q3')) { ?>
                  <?php $count++; ?>
                  <dt>Q<?php echo $count; ?>.越前海岸にないものはなんですか？</dt>
                  <dd><?php echo nl2br(get_the_author_meta('q3'), false); ?></dd>
                <?php } ?>
                <?php if (get_the_author_meta('q4')) { ?>
                  <?php $count++; ?>
                  <dt>Q<?php echo $count; ?>.越前海岸にしかないものはなんですか？</dt>
                  <dd><?php echo nl2br(get_the_author_meta('q4'), false); ?></dd>
                <?php } ?>
                <?php if (get_the_author_meta('q5')) { ?>
                  <?php $count++; ?>
                  <dt>Q<?php echo $count; ?>.この地域を形容詞で表すと？理由も教えてください。</dt>
                  <dd><?php echo nl2br(get_the_author_meta('q5'), false); ?></dd>
                <?php } ?>
                <?php if (get_the_author_meta('q6')) { ?>
                  <?php $count++; ?>
                  <dt>Q<?php echo $count; ?>.この地域が、もっとこうなったら面白いということはありますか？</dt>
                  <dd><?php echo nl2br(get_the_author_meta('q6'), false); ?></dd>
                <?php } ?>
                <?php if (get_the_author_meta('q7')) { ?>
                  <?php $count++; ?>
                  <dt>Q<?php echo $count; ?>.休日の過ごし方を教えてください。</dt>
                  <dd><?php echo nl2br(get_the_author_meta('q7'), false); ?></dd>
                <?php } ?>
                <?php if (get_the_author_meta('q8')) { ?>
                  <?php $count++; ?>
                  <dt>Q<?php echo $count; ?>.趣味と特技を教えてください。</dt>
                  <dd><?php echo nl2br(get_the_author_meta('q8'), false); ?></dd>
                <?php } ?>
                <?php if (get_the_author_meta('q9')) { ?>
                  <?php $count++; ?>
                  <dt>Q<?php echo $count; ?>.座右の銘を教えてください。</dt>
                  <dd><?php echo nl2br(get_the_author_meta('q9'), false); ?></dd>
                <?php } ?>
                <?php if (get_the_author_meta('q10')) { ?>
                  <?php $count++; ?>
                  <dt>Q<?php echo $count; ?>.ズバリ、この地域（福井市越前海岸）の魅力って何ですか？</dt>
                  <dd><?php echo nl2br(get_the_author_meta('q10'), false); ?></dd>
                <?php } ?>
              </dl>
