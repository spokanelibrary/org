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
    <!-- digital -->
    <div class="spl-hero-panel spl-hero-primary">
      <a href="/digital/" class="spl-hero-link">
        <h4 class="text-center normal">
          <i class="glyphicon glyphicon-cloud-download text-primary"></i>
          Visit the <b>Digital Branch</b> <span class="hidden-xs">to download eBooks and more</span> <small class="glyphicon glyphicon-arrow-right"></small>
        </h4>
      </a>
    </div>
    <!-- calendar -->
    <div class="spl-hero-panel spl-hero-success">
      <a href="/calendar/" class="spl-hero-link">
        <h4 class="text-center normal">
          <i class="glyphicon glyphicon-calendar text-success"></i>
          <span class="hidden-xs">Coming up soon on the</span> <b>Library Calendar</b> <small class="glyphicon glyphicon-arrow-right"></small>
        </h4>
      </a>
    </div>
  </div><!-- /.col -->
  <div class="col-md-9 col-md-pull-3">
    <?php echo do_shortcode('[spl_widget home-page news]'); ?>
  </div><!-- /.col -->
</div><!-- /.row -->

<div class="row">
  <div class="col-md-7">
    <?php echo do_shortcode('[spl_widget home-page promo=tech]'); ?>
  </div><!-- /.col -->  
  <div class="col-md-5">
    <?php echo do_shortcode('[spl_widget home-page promo=yearbooks]'); ?>
  </div><!-- /.col -->        
</div><!-- /.row -->

<div class="row">
  <div class="col-md-3 col-md-push-9">
    <?php echo do_shortcode('[spl_widget home-page calendar]'); ?>
  </div><!-- /.col -->

  <div class="col-md-9 col-md-pull-3">    

    <div class="row">
      <div class="col-sm-9 col-sm-push-3">
        <?php echo do_shortcode('[spl_widget home-page shuffle posts pages slides slug=carousel]'); ?>
      </div><!-- /.col -->
      <div class="col-sm-3 col-sm-pull-9">
        <?php echo do_shortcode('[spl_widget home-page browse]'); ?>
      </div><!-- /.col -->      
    </div><!-- /.row -->

  </div><!-- /.col -->
</div><!-- /.row -->


