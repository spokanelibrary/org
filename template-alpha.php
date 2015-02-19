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
  <div class="col-md-12">
    <?php echo do_shortcode('[spl_widget home-page news]'); ?>
  </div>
</div><!-- /.row -->

<div class="row">
  <div class="col-md-8">
    <?php echo do_shortcode('[spl_widget home-page promo=tech]'); ?>
    <div class="row">
      <div class="col-sm-4">
        <?php echo do_shortcode('[spl_widget home-page calendar]'); ?>
      </div>
      <div class="col-sm-8">
        <?php echo do_shortcode('[spl_widget home-page shuffle slides slug=carousel]'); ?>
      </div>
    </div><!-- /.row -->
  </div>
  <div class="col-md-4">
    <?php echo do_shortcode('[spl_widget home-page posts]'); ?>
  </div>
</div><!-- /.row -->

<div class="row">
  <div class="col-md-8">
    <?php echo do_shortcode('[spl_widget home-page browse]'); ?>
  </div>
</div><!-- /.row -->

<div class="row">
  <div class="col-sm-4">
    <?php //echo get_alpha_panel('&nbsp;', 300); ?>
    <?php //echo get_alpha_panel('&nbsp;', 200); ?>
  </div>
  <div class="col-sm-4">
    <?php //echo get_alpha_panel('&nbsp;', 400); ?>
    <?php //echo get_alpha_panel(); ?>
  </div>
  <div class="col-sm-4">
    <?php //echo get_alpha_panel('&nbsp;', 200); ?>
    <?php //echo get_alpha_panel(); ?>
  </div>
</div><!-- /.row -->


