<?php
/*
Template Name: Alpha Home Page
*/
?>

<?php 
  function get_alpha_panel($filler='&nbsp;', $h=140) {
    $html = '';
    $html .= '
              <div class="panel panel-default">
              <div class="panel-body">
                <div style="height:'.$h.'px;">
                '.$filler.'
                </div>
              </div>
              </div>
    ';

    return $html;
  }
?>


<div class="row">
 
  <div class="col-sm-4 col-md-3 col-md-push-9 col-lg-2 col-lg-push-10">
    <div class="spl-hero-panel spl-hero-primary">
      <h5 class="text-center">
        <i class="glyphicon glyphicon-cloud-download"></i>
        Digital Branch
      </h5>
      <div class="panel-body spl-blue-tint-60">
        Download ebooks, music, movies, &amp; more
      </div>
    </div>
    
    <div class="hidden-xs">
      <?php echo get_alpha_panel('Staff Picks'); ?>
    </div>
  </div><!-- /.col -->

  <div class="col-sm-8 col-md-6 col-lg-offset-1">
    <?php echo get_alpha_panel('Carousel'); ?>
    <?php echo get_alpha_panel('This week'); ?>
  </div><!-- /.col -->

  <div class="col-sm-12 col-md-3 col-md-pull-9 col-lg-2 col-lg-pull-9">
    <div class="spl-hero-panel spl-hero-success" style="margin-bottom:10px;">
      <h5 class="text-center">Is the library open?</h5>
    </div>
  </div><!-- /.col -->

</div><!-- /.row -->

