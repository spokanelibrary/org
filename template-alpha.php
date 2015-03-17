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
 
  <div class="col-md-3 col-md-push-9">
    <?php echo get_alpha_panel('Digital Branch'); ?>
  </div><!-- /.col -->

  <div class="col-md-6">
    <?php echo get_alpha_panel('Carousel'); ?>
    <?php echo get_alpha_panel('This week'); ?>
  </div><!-- /.col -->

  <div class="col-md-3 col-md-pull-9">
    <?php echo do_shortcode('[spl_widget branch-hours]'); ?>
  </div><!-- /.col -->

  <div class="col-md-3">
    <?php echo get_alpha_panel('Staff Picks'); ?>
  </div><!-- /.col -->

</div><!-- /.row -->

