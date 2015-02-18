<?php
/*
Template Name: Alpha Home Page
*/
?>

<?php 
  function get_alpha_panel($filler='&nbsp;', $h=100) {
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

  <div class="col-sm-5">
    <?php echo get_alpha_panel('Calendar'); ?>
  </div><!-- /.col -->
  <div class="col-sm-7">
    <div class="spl-hero-panel spl-hero-primary">

      <a href="/digital/" class="spl-hero-link">
        <h4 class="text-center normal">
          <i class="glyphicon glyphicon-cloud-download"></i>
          Visit the <b>Digital Branch</b> <span class="hidden-xs">to <b>download</b> eBooks, music, &amp; more</span> <small class="glyphicon glyphicon-arrow-right"></small>
        </h4>
      </a>

</div><!-- /.row -->

<div class="row">

      <div class="spl-hero-digital btn-group btn-group-justified" role="group" aria-label="...">
        <a href="/ebooks/" style="height:40px; vertical-align:middle; border:none; border-radius:0;" class="btn btn-primary spl-blue-tint-60">
          <i class="glyphicon glyphicon-phone"></i>
          <span class="hidden-xs">&nbsp;<b>eBooks</b></span>
        </a>
        <a href="/emusic/" style="height:40px; vertical-align:middle; border:none;" class="btn btn-primary spl-blue-tint-50">
          <i class="glyphicon glyphicon-music"></i>
          <span class="hidden-xs">&nbsp;<b>Music</b></span>
        </a>
        <a href="/eaudio/" style="height:40px; vertical-align:middle; border:none;" class="btn btn-primary spl-blue-tint-40">
          <i class="glyphicon glyphicon-headphones"></i></span>
          <span class="hidden-xs">&nbsp;<b>Audio Books</b></span>
        </a>
        <a href="/emagazines/" style="height:40px; vertical-align:middle; border:none; border:none; border-radius:0;" class="btn btn-primary spl-blue-tint-30">
          <i class="glyphicon glyphicon-book"></i>
          <span class="hidden-xs">&nbsp;<b>Magazines</b></span>
        </a>
      </div>

    </div>
  </div><!-- /.col -->

  <div class="col-sm-6">
    <div style="margin-bottom: 20px;">
      <h5>
        Join Us: Connected Learning
      </h5>
      <img class="img-responsive img-rounded" style="max-height:200px;" src="/assets/img/promos/spl-apple-devices.png">
    </div>
  </div><!-- /.col -->
  <div class="col-sm-6">
    <?php echo get_alpha_panel(); ?>
  </div><!-- /.col -->

  <div class="col-sm-12">
    <div style="margin-bottom: 20px;">
      <img class="img-responsive img-rounded" style="max-height:240px;" src="/assets/img/promos/spl-yearbooks-promo.png">
    </div>
  </div><!-- /.col -->


  <div class="col-sm-12">
    <?php echo get_alpha_panel('&nbsp;', 50); ?>
  </div><!-- /.col -->

  <div class="col-sm-3">
    <?php echo get_alpha_panel(); ?>
  </div><!-- /.col -->
  <div class="col-sm-3">
    <?php echo get_alpha_panel(); ?>
  </div><!-- /.col -->
  <div class="col-sm-3">
    <?php echo get_alpha_panel(); ?>
  </div><!-- /.col -->
  <div class="col-sm-3">
    <?php echo get_alpha_panel('Yearbooks'); ?>
  </div><!-- /.col -->

</div><!-- /.row -->
