  <?php
  /**
   * Drawer Menu (全ページ共通)
   */
  get_template_part('template-parts/drawerMenu');

  /**
   * Footer (全ページ共通)
   * ウィジェットエリア * 4カラム構成
   */
  get_template_part('template-parts/footer');
  ?>
  <script src="<?php echo DE_THEME_URI . '/modules/renderItems.js'; ?>" type="module"></script>
  <?php wp_footer(); ?>
</body>

</html>
