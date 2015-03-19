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
    
  <div class="col-md-9 col-md-push-3 col-lg-8">
    
    <div class="row">

      <div class="col-sm-4 col-sm-push-8 col-md-4 col-md-push-8 col-lg-3 col-lg-push-9">
        
        <div class="panel spl-hero-panel spl-hero-primary">
          <a class="spl-hero-link" href="/download/">
            <h4 class="text-center">
              <i class="glyphicon glyphicon-cloud-download"></i>
              Digital Branch
            </h4>
              <img style="margin:auto;" class="img-responsive hidden-xs" src="/assets/img/promos/photos/spl-handheld.jpg">
            <div class="panel-body" style="padding:8px;">
              <b>Download</b> ebooks, music, magazines, and more <small class="text-primary">&rarr;</small>
            </div>
          </a>
        </div>

      </div><!-- /.col -->
       <div class="col-sm-8 col-sm-pull-4 col-md-8 col-md-pull-4 col-lg-9 col-lg-pull-3">

        <div class="spl-tile">
          <?php echo do_shortcode('[spl_carousel_photo auto random slug=stage]'); ?>
        </div>

      </div><!-- /.col -->

    </div><!-- /.row -->

    <?php //echo do_shortcode('[spl_widget home-page refresh this-week limit=1]'); ?>

    
    <div class="row">
      <div class="col-sm-8 col-md-8 col-lg-9">
        <?php echo do_shortcode('[spl_widget home-page refresh this-week limit=1]'); ?>
      </div>
      <div class="col-sm-4 col-md-4 col-lg-3">
        <div class="panel spl-hero-panel spl-hero-callout">
          <h4 class="text-center" style="">
            <i class="glyphicon glyphicon-calendar"></i> 
            Join Us
          </h4>
          <div class="panel-body">
            <?php echo do_shortcode('[spl_widget home-page carousel pause auto calendar embedded refresh]'); ?>
          </div>
        </div>
      </div>
    </div>
    
  </div><!-- /.col -->

  <div class="col-md-3 col-md-pull-9 col-lg-2 col-lg-pull-8 col-lg-offset-1">
    
    <div class="row">
      <div class="col-sm-8 col-md-12">
    
        <div class="panel spl-hero-open">
          <h4 class="text-center">
            <i class="glyphicon glyphicon-time"></i>
            Open Hours
          </h4>
          <div class="panel-body">
            <?php echo do_shortcode('[spl_widget branch-hours]'); ?>
          </div>
        </div>

      </div><!-- /.col -->

      <div class="col-sm-4 col-md-12">
        <?php //echo get_alpha_panel('Staff picks'); ?>
      </div><!-- /.col -->

    </div><!-- /.row -->

  </div><!-- /.col -->

</div><!-- /.row -->





<?php 
/*
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<hr>

<div class="row">
    
  <div class="col-sm-8 col-md-9 col-md-push-3 col-lg-8">
    <div class="row">
      <div class="col-md-8 col-lg-9">
        <?php echo get_alpha_panel('Carousel'); ?>
      </div><!-- /.col -->
      <div class="col-md-4 col-lg-3">
        <?php echo get_alpha_panel('Digital Branch'); ?>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.col -->

  <div class="col-sm-4 col-md-3 col-md-pull-9 col-lg-2 col-lg-pull-8 col-lg-offset-1">
    <?php echo get_alpha_panel('Open Hours'); ?>
  </div><!-- /.col -->

</div><!-- /.row -->

<hr>


<div class="row">
    
  <div class="col-sm-4 col-md-3 col-md-push-9 col-lg-2 col-lg-push-9">
    <?php echo get_alpha_panel('Digital Branch'); ?>
  </div><!-- /.col -->

  <div class="col-sm-8 col-md-6 col-lg-offset-1">
    <?php echo get_alpha_panel('Carousel'); ?>
    <?php echo get_alpha_panel('This Week'); ?>
  </div><!-- /.col -->

  <div class="col-sm-12 col-md-3 col-md-pull-9 col-lg-2 col-lg-pull-8">
    <?php echo get_alpha_panel('Open Hours'); ?>
  </div><!-- /.col -->

</div><!-- /.row -->

<hr>

<div class="row">
    
  <div class="col-sm-4 col-md-3 col-md-push-9 col-lg-2 col-lg-push-10">
    <?php echo get_alpha_panel('Digital Branch'); ?>
  </div><!-- /.col -->

  <div class="col-sm-8 col-md-6 col-lg-offset-1">
    <?php echo get_alpha_panel('Carousel'); ?>
    <?php echo get_alpha_panel('This Week'); ?>
  </div><!-- /.col -->

  <div class="col-sm-12 col-md-3 col-md-pull-9 col-lg-2 col-lg-pull-9">
    <?php echo get_alpha_panel('Open Hours'); ?>
  </div><!-- /.col -->

</div><!-- /.row -->

*/

?>
