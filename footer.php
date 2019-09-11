  <?php get_template_part('template-parts/footer/slidebar'); ?>
  <?php get_template_part('template-parts/footer/footer'); ?>
  <script src="<?php echo get_template_directory_uri() . '/js/init.js'; ?>" type="module"></script>
  <script>
    // Preloader load
    window.onload = preloader.load;
  </script>
  <?php wp_footer(); ?>
</body>

</html>
