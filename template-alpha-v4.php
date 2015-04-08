<?php
/*
Template Name: Alpha Home Page v4
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









<div class="spl-hero-wrapper">

  <div class="row">
      
    <div class="col-md-9 col-md-push-3 col-lg-8">
      
      <div class="row">

        <div class="col-sm-4 col-sm-push-8 col-md-4 col-md-push-8 col-lg-3 col-lg-push-9">
          
          <div class="panel spl-hero-panel spl-hero-primary spl-hero-digital">
            <a class="spl-hero-link" href="/download/">
              <h4 class="text-center">
                <i class="glyphicon glyphicon-cloud-download"></i>
                Digital Branch
              </h4>
                <img style="margin:auto;" class="img-responsive hidden-xs" src="/assets/img/promos/photos/spl-handheld.jpg">
              <div class="panel-body">
                <div class="digital-promo">
                  <b>Download</b> ebooks, music, magazines, and more&hellip;
                </div>
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
          <div class="panel spl-hero-panel spl-hero-calendar spl-hero-this-week">
            
            <?php echo do_shortcode('[spl_widget home-page refresh this-week limit=1]'); ?>
 
          </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-3">
          <div class="panel spl-hero-panel spl-hero-calendar">
            <h4 class="text-center" style="">
              <i class="glyphicon glyphicon-pushpin"></i> 
              You're Invited
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
          <div class="panel spl-hero-panel spl-hero-muted spl-hero-staff-picks">
            <h4 class="text-center" style="">
              <i class="glyphicon glyphicon-star"></i> 
              Staff Picks
            </h4>
            <img class="img-responsive hidden-xs" style="margin:auto;" src="/assets/img/promos/photos/IMG_3430_crop.jpg">
            <div class="panel-body">
              <h5>Reviews &amp; Recommendations:</h5>
              <h4 class="serif">Emperors & ninjas in 1920’s Japan</h4>
              <h5 class="text-right">
                <a href="#">Read More</a> <span class="text-muted">&rarr;</span>
              </h5>
            </div>
          </div>
        </div><!-- /.col -->

      </div><!-- /.row -->

    </div><!-- /.col -->

  </div><!-- /.row -->

</div><!-- /.spl-hero-wrapper -->


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
