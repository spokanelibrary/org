<?php
/*
Template Name: Alpha Home Page
*/
?>


<div class="row">
  
  <div class="col-md-12">
    <div class="spl-hero-panel spl-hero-default">
      <a class="spl-hero-link" href="/browse/">
        <h4 class="text-center">
          <i class="glyphicon glyphicon-star"></i>
          <span class="hidden-xs">On our reading list:</span> <b>Staff picks &amp; popular titles</b> <small class="glyphicon glyphicon-arrow-right"></small>
        </h4>
      </a>
    </div>
    <?php echo do_shortcode('[spl_widget browse-list list=star widget-beta limit=4]'); ?>
  </div><!-- /.col -->

</div><!-- /.row -->




