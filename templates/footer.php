<footer class="content-info container" role="contentinfo">
  <div class="row">
    <div class="col-lg-12">
      <?php dynamic_sidebar('sidebar-footer'); ?>
      <!--
      <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    	-->
    </div>
  </div>
</footer>

<?php
if ( !isset($_REQUEST['kiosk']) ) {
	include('org/footer.php');
}
?>

<!--[if (gte IE 6)&(lte IE 8)]>
  <script src="/assets/js/vendor/respond.min.js"></script>
<![endif]-->


<?php wp_footer(); ?>