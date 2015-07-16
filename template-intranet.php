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

    </div><!-- /.row -->

  </div><!-- /.col -->
</div><!-- /.row -->

