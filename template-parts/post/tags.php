                    <?php $tags = get_the_tags($post->ID); ?>
                    <?php if ($tags) { ?>
                      <ul class="post__tags">
                        <?php foreach ($tags as $tag) { ?>
                          <li class="post__tag"><a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a></li> 
                        <?php } ?>
                      </ul>
                    <?php } ?>
