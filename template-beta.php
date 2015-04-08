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

  <div class="col-sm-3 col-sm-push-7">
    
    <div class="panel spl-hero-panel spl-hero-primary spl-hero-digital">
      <a class="spl-hero-link" href="/download/">
        <h4 class="text-center">
          Digital Branch
        </h4>
        <div style="height: 140px; overflow:auto;">
          <img style="margin:auto;" class="img-responsive hidden-xs" src="/assets/img/promos/photos/spl-handheld.jpg">
        </div>
        <div class="digital-promo">
            <h5 class="text-center uppercase">Always open, always on</h5>
          </div>
        <div class="panel-body">
          <h6 class="text-center">eBooks &amp; downloads</h6>
          <h6 class="text-center">Research databases</h6>
          <h6 class="text-center">Mobile apps</h6>
          <h6 class="text-center">Technology training</h6>        
        </div> 
      </a>
    </div>

    
  </div><!-- /.col -->
  <div class="col-sm-7 col-sm-pull-3">

    <div class="spl-tile">
      <?php echo do_shortcode('[spl_carousel_photo auto random slug=stage]'); ?>
    </div>

    
  </div><!-- /.col -->

  <div class="col-sm-2">
    test
  </div>

</div><!-- /.row -->


<div class="row">

  <div class="col-sm-6 col-sm-push-6">
    
    <div class="panel spl-hero-panel spl-hero-calendar spl-hero-this-week">
          
      <?php echo do_shortcode('[spl_widget home-page refresh this-week limit=1]'); ?>

    </div>

  </div><!-- /.col -->
  <div class="col-sm-6 col-sm-pull-6">

    <div class="spl-tile">
      <?php echo do_shortcode('[spl_widget home-page news]'); ?>
    </div>


  </div><!-- /.col -->

</div><!-- /.row -->




