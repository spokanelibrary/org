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
    <div class="spl-hero-panel spl-hero-primary">
      <a href="/digital/" class="spl-hero-link">
        <h4 class="text-center normal">
          <i class="glyphicon glyphicon-cloud-download text-primary"></i>
          Visit the <b>Digital Branch</b> <span class="hidden-xs">to download eBooks and more</span> <small class="glyphicon glyphicon-arrow-right"></small>
        </h4>
      </a>
    </div>

    <div class="spl-hero-panel spl-hero-success">
      <a href="/calendar/" class="spl-hero-link">
        <h4 class="text-center normal">
          <i class="glyphicon glyphicon-calendar text-success"></i>
          <span class="hidden-xs">Coming up soon on the</span> <b>Library Calendar</b> <small class="glyphicon glyphicon-arrow-right"></small>
        </h4>
      </a>
    </div>

  </div>
  <div class="col-md-9 col-md-pull-3">

    <?php echo do_shortcode('[spl_widget home-page news]'); ?>

  </div>
</div><!-- /.row -->

<div class="row">
  <div class="col-md-9">
    <?php echo do_shortcode('[spl_widget home-page promo=yearbooks]'); ?>
    <div class="row">
      <div class="col-sm-4">
        <?php echo do_shortcode('[spl_widget home-page calendar]'); ?>
      </div>
      <div class="col-sm-8">
        <?php echo do_shortcode('[spl_widget home-page shuffle slides slug=carousel]'); ?>
      </div>
    </div><!-- /.row -->
  </div>
  <div class="col-md-3">
    <?php echo do_shortcode('[spl_widget home-page posts]'); ?>
  </div>
</div><!-- /.row -->

<div class="row">
  <div class="col-md-12">

    <div class="spl-hero-panel spl-hero-default">
      <a class="spl-hero-link" href="/browse/">
        <h4 class="text-center">
          <i class="glyphicon glyphicon-"></i>
          <span class="hidden-xs">On our reading list:</span> <b>Staff picks &amp; popular titles</b> <small class="glyphicon glyphicon-arrow-right"></small>
        </h4>
      </a>
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


