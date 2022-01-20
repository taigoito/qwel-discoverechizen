  <?php get_template_part('parts/components/slidebar'); ?>
  <footer class="footer">
    <div class="footer__main">
      <div class="footer__container">
        <div class="footer__content--primary">
          <div class="footer-brand">
            <img src="<?php echo get_template_directory_uri() . '/assets/svg/top_logo1.svg'; ?>">
          </div>
          <ul class="social-links">
            <li class="social-links__item"><a href="https://www.instagram.com/discoverechizen/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/assets/svg/icon_instagram.svg'; ?>"></a></li>
            <li class="social-links__item"><a href="https://www.facebook.com/discoverechizen/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/assets/svg/icon_facebook.svg'; ?>"></a></li>
            <li class="social-links__item"><a href="https://youtu.be/fssr1SzO0L0" target="_blank"><img src="<?php echo get_template_directory_uri() . '/assets/svg/icon_youtube.svg'; ?>"></a></li>
          </ul>
        </div>
        <div class="footer__content--secondary">
          <div class="footer-nav">
            <?php if (has_nav_menu('primary')) wp_nav_menu(['menu' => 'primary', 'menu_class' => 'nav-menu']); ?>
          </div>
        </div>
        <div class="footer-copyright">
          <small><?php copyright(); ?></small>
        </div>
      </div>
    </div>
  </footer><!-- .footer -->
  <script src="<?php echo get_template_directory_uri() . '/modules/init.js'; ?>" type="module"></script>
  <script>
    // Preloader load
    window.onload = preloader.load;
  </script>
  <?php wp_footer(); ?>
</body>

</html>
