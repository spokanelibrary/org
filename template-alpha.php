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


      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img class="img-responsive" src="/assets/img/promos/photos/IMG_3272.jpg">
            <div class="carousel-caption">
              Some caption
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      
    </div>

    <?php echo get_alpha_panel('This week', 240); ?>
  </div><!-- /.col -->

  <div class="col-sm-6 col-md-3 col-md-pull-9 col-lg-2 col-lg-pull-9">
      <h4 class="text-center text-success" style="margin-top:0;">Is the library open?</h4>
    <?php echo do_shortcode('[spl_widget branch-hours]'); ?>
  </div><!-- /.col -->

</div><!-- /.row -->

