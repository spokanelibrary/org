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

  <div class="col-sm-5 col-sm-push-7 col-md-5 col-md-push-7 col-lg-4 col-lg-push-8">
    
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
   <div class="col-sm-7 col-sm-pull-5 col-md-7 col-md-pull-5 col-lg-8 col-lg-pull-4">

    <div class="spl-tile">
      <?php echo do_shortcode('[spl_carousel_photo auto random slug=stage]'); ?>
    </div>

  </div><!-- /.col -->

</div><!-- /.row -->




