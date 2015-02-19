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
  <div class="col-md-8">
    <?php echo get_alpha_panel('&nbsp;', 200); ?>
    <div class="row">
      <div class="col-sm-6">
        <?php echo get_alpha_panel('&nbsp;', 200); ?>
      </div>
      <div class="col-sm-6">
        <?php echo get_alpha_panel('&nbsp;', 200); ?>
      </div>
    </div><!-- /.row -->
  </div>
  <div class="col-md-4">
    <?php echo get_alpha_panel(); ?>
  </div>
</div><!-- /.row -->


<div class="row">
  <div class="col-sm-4">
    <?php echo do_shortcode('[spl_widget home-page slides slug=carousel]'); ?>

    <?php echo get_alpha_panel('&nbsp;', 300); ?>
    <?php echo get_alpha_panel('&nbsp;', 200); ?>
  </div>
  <div class="col-sm-4">
    <?php echo do_shortcode('[spl_widget home-page news]'); ?>
    
    <?php echo get_alpha_panel('&nbsp;', 400); ?>
    <?php echo get_alpha_panel(); ?>
  </div>
  <div class="col-sm-4">
    <?php echo do_shortcode('[spl_widget home-page calendar]'); ?>
    <?php echo get_alpha_panel('&nbsp;', 200); ?>
    <?php echo get_alpha_panel(); ?>
  </div>
</div><!-- /.row -->


