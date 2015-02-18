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
  <div class="col-sm-4">
    <?php echo get_alpha_panel(); ?>
    <?php echo get_alpha_panel(); ?>
    <?php echo get_alpha_panel(); ?>
  </div>
  <div class="col-sm-4">
    <?php echo get_alpha_panel(); ?>
    <?php echo get_alpha_panel(); ?>
    <?php echo get_alpha_panel(); ?>
  </div>
  <div class="col-sm-4">
    <?php echo get_alpha_panel(); ?>
    <?php echo get_alpha_panel(); ?>
    <?php echo get_alpha_panel(); ?>
  </div>
</div><!-- /.row -->


