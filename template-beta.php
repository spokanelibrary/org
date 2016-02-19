<?php
/*
Template Name: Home Page
*/
?>


<div class="row">

  <div class="col-lg-10 col-lg-offset-1">

    <?php 
    // conditionally display page content
    $spl_home = $post->post_content;
    $spl_home = trim($spl_home);
    if ( !empty($spl_home) ): ;
    ?>
    <div class="panel spl-hero-panel spl-hero-news">
      <?php 
      if ( $post->post_excerpt): ; 
      ?>
      <h4 class="text-center hero-heading">
        <i class="glyphicon glyphicon-bullhorn"></i>
        <?php echo $post->post_excerpt; ?>
      </h4>
      <?php endif; ?>
      <div class="panel-body">
        <?php echo $post->post_content; ?>
      </div>
    </div>
    <?php endif; ?>
    
    <div class="row">

      <div class="col-sm-8 col-md-3">
        
        <div class="panel spl-hero-panel spl-hero-primary spl-hero-digital">
          <a class="spl-hero-link" href="/digital/">
            <h4 class="text-center hero-heading">
              <i class="glyphicon glyphicon-cloud"></i>
              Digital Branch
            </h4>
            <div class="hidden-xs hidden-sm" style="height: 80px; overflow:hidden;">
              <img style="margin:auto;" class="img-responsive" src="/assets/img/promos/photos/spl-handheld.jpg">
            </div>
            <div class="digital-promo">
              <h5 class="text-center uppercase">Always open, always on</h5>
            </div>
            <div class="panel-body hidden-xs hidden-sm" style="">
              <h5>eBooks &amp; downloads</h5>
              <h5 class="text-right">Research databases</h5>
              <h5>Mobile apps</h5>
              <h5 class="text-right">Technology training</h5>        
              <h5>Microsoft Certification</h5>
            </div> 
          </a>
        </div>
        
      </div><!-- /.col -->

      <div class="col-sm-4 visible-sm visible-xs">
        <div class="panel spl-hero-open">
          <a class="spl-hero-link" href="/open/">  
            <h4 class="text-center hero-heading">
              <i class="glyphicon glyphicon-time"></i>
              Open Hours
            </h4>
            <div class="panel-body">
              <div class="open-promo">
                <h5 class="text-center text-success uppercase">Check library schedule</h5>
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="clearfix visible-sm"></div>

      <div class="col-sm-4 col-sm-push-8 col-md-3 col-md-push-6">
        
        <div class="panel spl-hero-panel spl-hero-calendar">
          <h4 class="text-center hero-heading" style="">
            <i class="glyphicon glyphicon-calendar"></i> 
            Coming Up
          </h4>
          <div class="panel-body" style="padding-bottom:0;">
            <?php echo do_shortcode('[spl_widget home-page carousel pause control calendar embedded]'); ?>
            <div class="calendar-promo">
              <h5 class="text-center">
                <a href="/calendar/">Full Calendar <span class="text-muted">&rarr;</span></a>
              </h5>      
            </div>
          </div>
        </div>

      </div>

      <div class="col-sm-8 col-sm-pull-4 col-md-6 col-md-pull-3">

        <div class="panel spl-hero-panel spl-hero-muted">
          <?php echo do_shortcode('[spl_carousel_photo auto random]'); ?>
        </div>
        
      </div><!-- /.col -->

    </div><!-- /.row -->

    <div class="row">
      <div class="col-md-6">
        <div class="panel spl-hero-panel spl-hero-brand-blue-g" style="background: url('http://www.spokanelibrary.org/assets/img/promos/photos/future-study-planning.jpg') no-repeat opacity:.5;">
          <a href="/future-study/">
            <div style="background: #fff; opacity: .85;">
              <h1 style="text-transform:uppercase; color:orange;">Help us build&hellip;</h1>
              </div>
              <div style="padding:16px;">
              
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  
                
                <div class="row">
                  <div class="col-md-6">
                  </div>
                  <div class="col-md-6">
                  </div>
                </div>

            </div>
            <div style="background: #fff; opacity: .85;">
              <h2>Your 21<sup>st</sup> century library</h2>
            </div>
          </a>
        </div>
      </div><!-- /.col -->
      <div class="col-md-6">
        <div class="panel spl-hero-panel spl-hero-news">
          <div class="panel-body">
            <?php echo do_shortcode('[spl_widget home-page news-mailgun]'); ?>
          </div>
        </div>
      </div><!-- /.col -->
    </div><!-- /.row -->

    <div class="panel spl-hero-panel spl-hero-browse">
      <!--
      <h4>
        <i class="glyphicon glyphicon-star"></i>
        Read. Learn. Discover.
      </h4>
      -->
      <div class="browse-promo text-center">
          <a class="hidden-xs" href="/browse/">Browse&nbsp;popular&nbsp;titles&nbsp;<small>&rarr;</small></a>
          <a class="" href="/new/">Browse&nbsp;new&nbsp;materials&nbsp;<small>&rarr;</small></a>
          <a class="hidden-xs" href="/request/">Request&nbsp;something&nbsp;we&nbsp;don't&nbsp;have&nbsp;<small>&rarr;</small></a>
        </div>
      <div class="panel-body" style="/*padding-left: 40px; padding-right: 40px;*/">
        
        <?php echo do_shortcode('[spl_widget home-page carousel pause control browse-group]'); ?>
      </div>
    </div>

  </div><!-- /.col -->
</div><!-- /.row -->

