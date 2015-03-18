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
 
  <div class="col-sm-4 col-md-3 col-md-push-9 col-lg-2 col-lg-push-9">
    
    <div class="panel spl-hero-panel spl-hero-primary">
      <a class="spl-hero-link" href="/download/">
        <h4 class="text-center">
          <i class="glyphicon glyphicon-cloud-download"></i>
          Digital Branch
        </h4>
          <img style="margin:auto;" class="img-responsive hidden-xs" src="/assets/img/promos/photos/spl-handheld.jpg">
        <div class="panel-body" style="padding:8px;">
          <b>Download</b> ebooks, music, magazines, and more <small>&rarr;</small>
        </div>
      </a>
    </div>
    

    <!--<div class="hidden-xs">
      <div class="spl-hero-panel spl-hero-default">
        <a href="#">
          <h4 class="text-center">
            <i class="glyphicon glyphicon-thumbs-up"></i>
            Staff Picks
          </h4>
          <div class="panel-body" style="background:#eee;">
            Recomendations &amp; reviews from library staff
          </div>
        </a>
      </div>
    </div>-->
  </div><!-- /.col -->

  <div class="col-sm-8 col-md-6 col-lg-offset-1">
    <div class="spl-tile">
      <?php echo do_shortcode('[spl_carousel_photo auto random slug=stage]'); ?>
    </div>

    <?php //echo get_alpha_panel('This week', 240); ?>
  </div><!-- /.col -->

  <div class="col-sm-12 col-md-3 col-md-pull-9 col-lg-2 col-lg-pull-8">

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

</div><!-- /.row -->

<div class="row">

  <div class="col-sm-3 col-md-3 col-lg-2 col-lg-offset-1">
    <?php echo get_alpha_panel('Image'); ?>
  </div><!-- /.col -->

  <div class="col-sm-5 col-md-6 col-lg-7">
    <?php echo get_alpha_panel('This Week'); ?>
  </div><!-- /.col -->

  <div class="col-sm-4 col-md-3 col-lg-2">
    <?php echo get_alpha_panel('Events'); ?>
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
