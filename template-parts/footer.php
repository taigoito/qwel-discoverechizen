  <footer id="footer" class="footer">
    <div class="footer__container">
      <div class="footer__1">
        <?php if (is_active_sidebar('footer__1')) dynamic_sidebar('footer__1'); ?>
      </div>
      <div class="footer__2">
        <?php if (is_active_sidebar('footer__2')) dynamic_sidebar('footer__2'); ?>
      </div>
      <div class="footer__3">
        <?php if (is_active_sidebar('footer__3')) dynamic_sidebar('footer__3'); ?>
      </div>
      <div class="footer__4">
        <?php if (is_active_sidebar('footer__4')) dynamic_sidebar('footer__4'); ?>
      </div>
    </div>
    <div class="footer__copyright">
      <small>&copy; <?php echo \DE::get_data('footer', 'copyright'); ?></small>
    </div>
  </footer><!-- #footer -->