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
 
  <div class="col-sm-4 col-md-3 col-md-push-9 col-lg-2 col-lg-push-10">
    
    <div class="spl-hero-panel spl-hero-primary">
      <a href="#">
        <h4 class="text-center">
          <i class="glyphicon glyphicon-cloud-download"></i>
          Digital Branch
        </h4>
        <div class="panel-body spl-blue-tint-60">
          <!-- <div class="panel-body spl-blue-tint-80" style="border:1px solid #fff;"> -->
            Download ebooks, music, magazines, &amp; more
          <!--</div>-->
        </div>
      </a>
    </div>
    

    <div class="hidden-xs">
      <div class="spl-hero-panel spl-hero-default">
        <a href="#">
          <h4 class="text-center">
            <i class="glyphicon glyphicon-thumbs-up"></i>
            Staff Picks
          </h4>
          <div class="panel-body" style="background:#eee;">
            <!-- <div class="panel-body" style="background:#ddd; border:1px solid #666;">-->
             Recomendations &amp; reviews from library staff
            <!--</div>-->
          </div>
        </a>
      </div>
    </div>
  </div><!-- /.col -->

  <div class="col-sm-8 col-md-6 col-lg-offset-1">
    <?php echo get_alpha_panel('Carousel', 240); ?>
    <?php echo get_alpha_panel('This week', 240); ?>
  </div><!-- /.col -->

  <div class="col-sm-12 col-md-3 col-md-pull-9 col-lg-2 col-lg-pull-9">
      <h4 class="text-center text-success" style="margin-top:0;">Is the library open?</h4>
    <?php echo do_shortcode('[spl_widget branch-hours]'); ?>
  </div><!-- /.col -->

</div><!-- /.row -->

