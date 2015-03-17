<?php
/*
Template Name: Home Page v4
*/
?>

<div class="row">
  <!--
  <div class="col-md-3 col-md-push-9">
  -->
    <?php //echo do_shortcode('[spl_widget home-page facebook]'); ?>
    <!-- digital -->
    <!--
    <div class="spl-tile">
      <div class="spl-hero-panel spl-hero-primary" style="margin-bottom:6px;">
        <a href="/digital/" class="spl-hero-link">
          <h4 class="text-center normal">
            <i class="glyphicon glyphicon-cloud-download"></i>
            Digital Branch
          </h4>        
        </a>
      </div>
      <h6 class="text-center normal uppercase text-primary"><span class="hidden-md">Download </span>eBooks, music &amp; more</h6>
    </div>
    -->

    <!-- calendar -->
    <!--
    <div class="spl-tile">
      <div class="spl-hero-panel spl-hero-success"  style="margin-bottom:6px;">
        <a href="/calendar/" class="spl-hero-link">
          <h4 class="text-center normal">
            <i class="glyphicon glyphicon-calendar"></i>
            Library Calendar
          </h4>        
        </a>
      </div>
      <h6 class="text-center normal uppercase text-success">Classes, events &amp; storytimes</h6>
    </div>
    -->

  <!--</div>--><!-- /.col -->
  <div class="col-md-12">
    <div class="spl-tile spl-tile-default">
      <?php echo do_shortcode('[spl_widget home-page news]'); ?>
    </div>
  </div><!-- /.col -->
</div><!-- /.row -->

<div class="row">
  <div class="col-sm-7">
    <?php echo do_shortcode('[spl_widget home-page promo=tech]'); ?>
  </div><!-- /.col -->  
  <div class="col-sm-5">
    <?php echo do_shortcode('[spl_widget home-page promo=yearbooks]'); ?>
  </div><!-- /.col -->        
</div><!-- /.row -->

<div class="row">
  <div class="col-md-3 col-md-push-9">
    <?php //echo do_shortcode('[spl_widget home-page calendar]'); ?>
  </div><!-- /.col -->

  <div class="col-md-9 col-md-pull-3">    
    
    <div class="row">
    <?php echo do_shortcode('[spl_widget home-page shuffle slides limit=3 slug=alpha]'); ?>
    </div><!-- /.row -->    

    <?php echo do_shortcode('[spl_widget home-page shuffle posts limit=1]'); ?>
    
    <!--
    <div class="spl-tile spl-tile-boxed">
      <div class="spl-tile-body">
        <div class="row">
          <div class="col-sm-6">
            <h5 class="uppercase">Reading list</h5>
          </div>
          <div class="col-sm-6">
            <p class="text-right">
              <a class="btn btn-link" href="/new/">Newest titles <small>&rarr;</small></a> 
              <a class="btn btn-link" href="/browse/">Popular titles <small>&rarr;</small></a>
            </p>
          </div> 
        </div>
        <div class="row">
          <?php //echo do_shortcode('[spl_widget home-page browse]'); ?>
        </div>
      </div>
    </div>
    -->

    <?php //echo do_shortcode('[spl_widget home-page shuffle pages limit=1]'); ?>
    
    <div class="row">
      <div class="col-sm-9 col-sm-push-3">
        <?php //echo do_shortcode('[spl_widget home-page shuffle posts pages]'); ?>
      </div><!-- /.col -->
      <div class="col-sm-3 col-sm-pull-9">
        <?php //echo do_shortcode('[spl_widget home-page browse]'); ?>
      </div><!-- /.col -->      
    </div><!-- /.row -->

  </div><!-- /.col -->
</div><!-- /.row -->


