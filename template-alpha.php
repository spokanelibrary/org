<?php
/*
Template Name: Alpha Home Page
*/
?>

<?php 
  function get_alpha_panel($h=100) {
    $html = '';
    $html .= '
              <div class="panel panel-default">
              <div class="panel-body" style="height='.$h.'px;">
                &nbsp;
              </div>
              </div>
    ';

    return $html;
  }
?>


<div class="row">

  <div class="col-sm-5">
    <?php echo get_alpha_panel(); ?>
  </div><!-- /.col -->
  <div class="col-sm-7">
      <?php echo get_alpha_panel(); ?>
  </div><!-- /.col -->

</div><!-- /.row -->
