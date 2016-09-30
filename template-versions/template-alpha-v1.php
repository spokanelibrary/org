<?php
/*
Template Name: Alpha Home Page v1
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

  <div class="col-md-7">
    <div class="spl-hero-panel spl-hero-primary">

      <a href="/digital/" class="spl-hero-link">
        <h4 class="text-center normal">
          <i class="glyphicon glyphicon"></i>
          Visit the <b>Digital Branch</b> <span class="hidden-xs">to <b>download</b> eBooks and more</span> <small class="glyphicon glyphicon-arrow-right"></small>
        </h4>
      </a>

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
  <div class="col-md-5">
    <div class="spl-hero-panel spl-hero-success">

      <a href="/calendar/" class="spl-hero-link">
        <h4 class="text-center normal">
          <i class="glyphicon glyphicon-"></i>
          <span class="hidden-xs"><b>Coming up</b> on the</span> <b>Library Calendar</b> <small class="glyphicon glyphicon-arrow-right"></small>
        </h4>
      </a>
      
      <div class=" btn-group btn-group-justified" role="group" aria-label="...">
        <a href="/storytime/" style="height:40px; vertical-align:middle; border:none; border-radius:0;" class="btn btn-success spl-green-tint-70">
          <i class="glyphicon glyphicon-picture"></i>
          <span class="hidden-xs">&nbsp;<b>Storytimes</b></span>
        </a>
        <a href="/calendar/find/connected+learning/" style="height:40px; vertical-align:middle; border:none;" class="btn btn-success spl-green-tint-60">
          <i class="glyphicon glyphicon-facetime-video"></i>
          <span class="hidden-xs">&nbsp;<b>Classes</b></span>
        </a>
        <a href="/calendar/" style="height:40px; vertical-align:middle; border:none; border:none; border-radius:0;" class="btn btn-success spl-green-tint-50">
          <i class="glyphicon glyphicon-plus-sign"></i>
          <span class="hidden-xs">&nbsp;<b>More</b></span>
        </a>
      </div>
      
    </div>
  </div><!-- /.col -->

</div><!-- /.row -->

<div class="row">

  <div class="col-sm-6">
    <div >
      <h3 style="margin-top:0;">
        <a href="/connected-learning/">Connected Learning</a>
      </h3>
      <div class="row">
        <div class="col-sm-6">
          <img class="img-responsive" style="max-height:200px;" src="/assets/img/promos/spl-apple-devices.png">
        </div>
        <div class="col-sm-6">
          <blockquote style="margin-bottom:0;">
          <ul class="list-unstyled text-success">
            <li>Video editing</li>
            <li>Social media</li>
            <li>Online job search</li>
            <li>Much, much more&hellip;</li>  
          </ul>
          </blockquote>
        </div>
      </div>
      <h4 class="text-center">Technology training &amp; certification</h4>
      <div class="row">
        <div class="col-sm-6">
          <a href="/it-academy/"><img style="margin:auto;" class="img-responsive img-rounded" src="/assets/img/logos/itacademy.png"></a>
        </div>
        <div class="col-sm-6">
          <a href="/gale-courses/"><img style="margin:auto;" class="img-responsive img-rounded" src="/assets/img/logos/galecourses.png"></a>
        </div>
      </div>
    </div>
    <p>
      <a class="btn btn-block btn-default" 
          href="/tech/"><b>Get started or join us in the lab</b> <i class="glyphicon glyphicon-arrow-right"></i></a>
    </p>
  </div><!-- /.col -->
  <div class="col-sm-6">
    <div class="panel panel-primary">
      <img class="img-responsive" style="max-height:400px; margin:auto;" src=" http://beta.spokanelibrary.org/wordpress/wp-content/uploads/promo-storytime.jpg">
    </div>
  </div><!-- /.col -->

  <div class="col-sm-12">
    <div class="spl-hero-panel spl-hero-default">

      <a href="/calendar/" class="spl-hero-link">
        <h4 class="text-center normal">
          <i class="glyphicon glyphicon-"></i>
          <span class="hidden-xs"><b>Check it out</b>: </span> 200+ <b>yearbooks</b> now online <small class="glyphicon glyphicon-arrow-right"></small>
        </h4>
      </a>
      <img class="img-responsive" style="max-height:240px;" src="/assets/img/promos/spl-yearbooks-promo.png">
    </div>
  </div><!-- /.col -->

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
      <div style="border:1px solid #ccc; background:#fff; padding-top:16px; padding-bottom:10px;">
        <?php echo do_shortcode('[spl_widget browse-list list=star widget-alpha limit=4]'); ?>
      </div>
    </div>
  </div><!-- /.col -->

</div><!-- /.row -->

