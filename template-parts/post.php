                  <li class="post">
                    <div class="post__inner">
                      <?php
                      /**
                       * .post__image
                       */
                      get_featured_image();

                      /**
                       * .post__textContent
                       */
                      ?>
                      <div class="post__textContent">
                        <?php
                        /**
                         * .post__date
                         */
                        get_template_part('template-parts/post/date');

                        /**
                         * .post__heading
                         */
                        get_heading('h3');

                        /**
                         * .post__tags
                         */
                        get_template_part('template-parts/post/tags');
                        
                        /**
                         * .post__excerpt
                         */
                        get_template_part('template-parts/post/excerpt');
                        ?>
                      </div>
                    </div>
                  </li><!-- .post -->
