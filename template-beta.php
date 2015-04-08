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

  <div class="col-sm-6 col-sm-push-6">
    
    <div class="panel spl-hero-panel spl-hero-primary spl-hero-digital">
      <h4 class="text-center">
        <i class="glyphicon glyphicon-cloud-download"></i>
        Digital Branch
      </h4>
      <div class="panel-body">
        <div class="digital-promo">
          <h4 class="text-center">Always open, always on</h4>
        </div>
        <ul class="nav nav-pills" style="margin-top:6px;">
          <li><a href="#">Download ebooks, music, &amp; more <small>&rarr;</small></a></li>
          <li><a href="#">Mobile Apps <small>&rarr;</small></a></li>
          <li><a href="#">Classes &amp; Certifications <small>&rarr;</small></a></li>
          <li><a href="#">Research Tools <small>&rarr;</small></a></li>
        </ul>
      </div>
    </div>

    <div class="panel spl-hero-panel spl-hero-calendar spl-hero-this-week">
          
      <?php echo do_shortcode('[spl_widget home-page refresh this-week limit=1]'); ?>

    </div>

  </div><!-- /.col -->
  <div class="col-sm-6 col-sm-pull-6">

    <div class="spl-tile">
      <?php echo do_shortcode('[spl_carousel_photo auto random slug=stage]'); ?>
    </div>

    <div class="spl-tile">
      <?php echo do_shortcode('[spl_widget home-page news]'); ?>
    </div>

  </div><!-- /.col -->

</div><!-- /.row -->


<div class="row">

  <div class="col-sm-6 col-sm-push-6">
    
    

  </div><!-- /.col -->
  <div class="col-sm-6 col-sm-pull-6">

    

  </div><!-- /.col -->

</div><!-- /.row -->




