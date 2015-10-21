<?php
/*
Template Name: Intranet Home Page
*/
?>


<div class="row">

  <!--<div class="col-lg-10 col-lg-offset-1">-->
  <div class="col-sm-12">
        
    <nav class="navbar-common panel panel-primary hidden-xs" style="margin-bottom:16px; background:rgb(170,215,240);">
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
      
      <div class="col-sm-7 col-md-8 col-lg-9">
        
        <div class="panel spl-hero-intranet spl-hero-brand-blue-h">
          <div class="panel-heading">
            <h4>
            <i class="glyphicon glyphicon-bullhorn"></i>
            The Lens <small class="uppercase hidden-xs" style="color:#fff;">Library Employee News Service</small></h4>
          </div><!-- /.panel-heading -->
          <div class="panel-body">            
            <?php echo do_shortcode('[spl_widget category-posts slug=spl count=6 format=full]'); ?>
          </div><!-- /.panel-body -->
          <div class="panel-footer text-right">
            <a class="" href="/news/spl/"><b>More</b> Library News</a>&nbsp;<small class="text-muted">&rarr;</small> 
          </div><!-- /.panel-footer -->
        </div><!-- /.panel -->

      </div><!-- /.col -->

      <div class="col-sm-5 col-md-4 col-lg-3">

        <div class="panel spl-hero-intranet spl-hero-brand-blue-b hidden-xs">
          <div class="panel-heading">
            <h4>
            <i class="glyphicon glyphicon-list"></i>
            Help Desk</h4>
          </div><!-- /.panel-heading -->
          <div class="panel-body">
              <ul class="">
              <?php 
              wp_nav_menu( 
              array(
                'menu' => 'Help Desk'
              , 'container' => false
              , 'items_wrap' => '%3$s'
              )); 
              ?>
              </ul>            
          </div><!-- /.panel-body -->
        </div><!-- /.panel -->

        <div class="panel spl-hero-intranet spl-hero-brand-gray-a">
          <div class="panel-heading">
            <h4>
            <i class="glyphicon glyphicon-cog"></i>
            Tech Alerts</h4>
          </div><!-- /.panel-heading -->
          <div class="panel-body">
            <?php echo do_shortcode('[spl_widget category-posts slug=tech count=3 format=excerpt size=sm]'); ?>
          </div><!-- /.panel-body -->
          <div class="panel-footer text-right">
            <a class="" href="/news/tech/"><b>More</b> Tech Alerts</a>&nbsp;<small class="text-muted">&rarr;</small> 
          </div><!-- /.panel-footer -->
        </div><!-- /.panel -->

        <div class="panel spl-hero-intranet spl-hero-brand-purple-a">
          <div class="panel-heading">
            <h4>
            <i class="glyphicon glyphicon-barcode"></i>
            Customer Service Tips</h4>
          </div><!-- /.panel-heading -->
          <div class="panel-body">
            <?php echo do_shortcode('[spl_widget category-posts slug=cs count=3 format=excerpt size=sm]'); ?>
          </div><!-- /.panel-body -->
          <div class="panel-footer text-right">
            <a class="" href="/news/cs/"><b>More</b> Customer Service Tips</a>&nbsp;<small class="text-muted">&rarr;</small> 
          </div><!-- /.panel-footer -->
        </div><!-- /.panel -->

      </div><!-- /.col -->

    </div><!-- /.row -->



