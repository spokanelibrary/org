<?php
/*
Template Name: Beta Home Page
*/
?>

<?php 
// conditionally display page content
$spl_home = $post->post_content;
$spl_home = trim($spl_home);
if ( !empty($spl_home) ): ;
?>
<div class="spl-hero-panel spl-hero-danger" style="margin-bottom:10px;">
  <h4 class="text-center">
    <span class=""><i class="glyphicon glyphicon-bullhorn"></i></span>
    Please read <small class="hidden-xs">this important announcement</small>
  </h4>
</div>
<div style="margin-bottom:16px;">
  <?php echo $post->post_content; ?>
</div>
<?php endif; ?>





<div class="row">

  <div class="col-sm-3">
    
    <div class="panel spl-hero-panel spl-hero-primary spl-hero-digital">
      <a class="spl-hero-link" href="/download/">
        <h4 class="text-center">
          <i class="glyphicon glyphicon-cloud hidden-sm"></i>
          Digital Branch
        </h4>
        <div class="hidden-xs" style="height: 140px; overflow:hidden;">
          <img style="margin:auto;" class="img-responsive" src="/assets/img/promos/photos/spl-handheld.jpg">
        </div>
        <div class="digital-promo">
            <h5 class="text-center uppercase">Always open, always on</h5>
        </div>
        <div class="panel-body hidden-xs hidden-sm" style="background-image:url('/assets/img/spl-touch-bg.png'); background-position:-20px -20px;">
          <h5>eBooks &amp; downloads</h5>
          <h5 class="text-right">Research databases</h5>
          <h5>Mobile apps</h5>
          <h5 class="text-right">Technology training</h5>        
          <h5>Microsoft Certification</h5>
        </div> 
      </a>
    </div>

    
  </div><!-- /.col -->
  <div class="col-sm-7">

    <div class="spl-tile">
      <?php echo do_shortcode('[spl_carousel_photo auto random slug=stage]'); ?>
    </div>

    
  </div><!-- /.col -->

  <div class="col-sm-2">
    
    <div class="panel spl-hero-panel spl-hero-calendar">
      <h4 class="text-center" style="">
        <i class="glyphicon glyphicon-pushpin"></i> 
        This Week
      </h4>
      <div class="panel-body">
        <div style="height:280px;">
          <?php echo do_shortcode('[spl_widget home-page carousel pause auto calendar embedded vertical refresh]'); ?>
        </div>
        <h5><a href="#">This week</a></h5>
        <h5><a href="#">Calendar</a></h5>
      
      </div>
    </div>

  </div>

</div><!-- /.row -->

<div class="panel spl-hero-panel spl-hero-calendar spl-hero-this-week">
  <?php echo do_shortcode('[spl_widget home-page refresh this-week limit=1]'); ?>
</div>


<div class="spl-tile">
  <?php echo do_shortcode('[spl_widget home-page news]'); ?>
</div>


