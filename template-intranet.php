<?php
/*
Template Name: Intranet Home Page
*/
?>


<div class="row">

  <!--<div class="col-lg-10 col-lg-offset-1">-->
  <div class="col-sm-12">
        
    <nav class="navbar navbar-default">
      <ul class="nav nav-justified">
      <?php 
      wp_nav_menu( 
      array(
        'menu' => 'Quick Links'
      , 'container' => false
      , 'items_wrap' => '%3$s'
      )); 
      ?>
      </ul>
    </nav>

    <?php 
    // conditionally display page content
    $spl_home = $post->post_content;
    $spl_home = trim($spl_home);
    if ( !empty($spl_home) ): ;
    ?>
    <div class="panel spl-hero-panel spl-hero-announce">
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
      
      <div class="col-md-6">
        <div class="panel spl-hero-panel spl-hero-intranet">
          <h4>Director's Notes</h4>
          <div class="panel-body">
            hlhklhk
          </div><!-- /.panel-body -->
        </div><!-- /.panel -->
      </div><!-- /.col -->

      <div class="col-md-6">
        <div class="panel spl-hero-panel spl-hero-intranet">
          <h4>Tech Notes</h4>
          <div class="panel-body">
            hlhklhk
          </div><!-- /.panel-body -->
        </div><!-- /.panel -->
      </div><!-- /.col -->

      <div class="clearfix"></div>

      <div class="col-md-6">
        <div class="panel spl-hero-panel spl-hero-intranet">
          <h4>Public Services Desk</h4>
          <div class="panel-body">
            hlhklhk
          </div><!-- /.panel-body -->
        </div><!-- /.panel -->
      </div><!-- /.col -->

      <div class="col-md-6">
        <div class="panel spl-hero-panel spl-hero-intranet">
          <h4>Support Services Desk</h4>
          <div class="panel-body">
            hlhklhk
          </div><!-- /.panel-body -->
        </div><!-- /.panel -->
      </div><!-- /.col -->

      <div class="clearfix"></div>

      <div class="col-md-6">
        <div class="panel spl-hero-panel spl-hero-intranet">
          <h4>Other Library News</h4>
          <div class="panel-body">
            hlhklhk
          </div><!-- /.panel-body -->
        </div><!-- /.panel -->
      </div><!-- /.col -->

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

      <div class="clearfix"></div>

    </div><!-- /.row -->

  </div><!-- /.col -->
</div><!-- /.row -->

