  <?php get_template_part('parts/components/slidebar'); ?>
  <footer class="footer">
    <?php get_template_part('parts/layout/footer-nav'); ?>
    <small><?php copyright(); ?></small>
  </footer><!-- .footer -->
  <script src="<?php echo get_template_directory_uri() . '/js/init.js'; ?>" type="module"></script>
  <script>
    // Preloader load
    window.onload = preloader.load;
  </script>
  <?php wp_footer(); ?>
</body>

</html>
