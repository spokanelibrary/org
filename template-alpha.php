<?php
/*
Template Name: Alpha Home Page
*/
?>

<?php 
  function get_alpha_panel($filler='&nbsp;', $h=100) {
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

  <div class="col-sm-5">
    <?php echo get_alpha_panel('Calendar'); ?>
  </div><!-- /.col -->
  <div class="col-sm-7">
    <?php echo get_alpha_panel('Digital Branch'); ?>
  </div><!-- /.col -->

  <div class="col-sm-6">
    <div class="panel panel-default">
      <img class="img-responsive img-rounded" style="max-height:200px;" src="/assets/img/promos/spl-apple-devices.png">
    </div>
  </div><!-- /.col -->
  <div class="col-sm-6">
    <?php echo get_alpha_panel(); ?>
  </div><!-- /.col -->

  <div class="col-sm-12">
    <img class="img-responsive img-rounded" style="max-height:240px;" src="/assets/img/promos/spl-yearbooks-promo.png">
  </div><!-- /.col -->


  <div class="col-sm-12">
    <?php echo get_alpha_panel('&nbsp;', 50); ?>
  </div><!-- /.col -->

  <div class="col-sm-3">
    <?php echo get_alpha_panel(); ?>
  </div><!-- /.col -->
  <div class="col-sm-3">
    <?php echo get_alpha_panel(); ?>
  </div><!-- /.col -->
  <div class="col-sm-3">
    <?php echo get_alpha_panel(); ?>
  </div><!-- /.col -->
  <div class="col-sm-3">
    <?php echo get_alpha_panel('Yearbooks'); ?>
  </div><!-- /.col -->

</div><!-- /.row -->
