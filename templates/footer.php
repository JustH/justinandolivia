<footer class="content-info" role="contentinfo">
  <div class="container">
    <div class="row">
    <div class="col-md-3 col-sm-6">
      <?php dynamic_sidebar('sidebar-footer-left');?>
    </div>
    <div class="col-md-3 col-sm-6">
      <?php dynamic_sidebar('sidebar-footer-center');?>
    </div>
    <div class="col-md-3 col-sm-6">
      <?php dynamic_sidebar('sidebar-footer-center-right');?>
    </div>
    <div class="col-md-3 col-sm-6">
      <?php dynamic_sidebar('sidebar-footer');?>
    </div>
    </div>
    <p id="copy-notice">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Website by <a href="http://www.justin-hill.com">Justin Hill</a></p>
  </div>
</footer>

<?php wp_footer(); ?>