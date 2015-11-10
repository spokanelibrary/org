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

      <!-- <div class="col-sm-5 col-md-4 col-lg-3 col-sm-push-7 col-md-push-8 col-lg-push-9"> -->
      <div class="col-sm-5 col-md-4 col-lg-3 col-sm-push-7 col-md-push-8 col-lg-push-9">

        <div class="panel spl-hero-intranet spl-hero-brand-blue-b hidden-xs">
          <div class="panel-heading">
            <h4>
            <i class="glyphicon glyphicon-list"></i>
            Help Desk</h4>
          </div><!-- /.panel-heading -->
          <div class="panel-body">
              <ul class="list-unstyled">
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
            Tech Bulletins</h4>
          </div><!-- /.panel-heading -->
          <div class="panel-body">
            <?php echo do_shortcode('[spl_widget category-posts slug=tech count=3 format=excerpt size=sm]'); ?>
          </div><!-- /.panel-body -->
          <div class="panel-footer text-right">
            <a class="" href="/news/tech/"><b>More</b> Tech Bulletins</a>&nbsp;<small class="text-muted">&rarr;</small> 
          </div><!-- /.panel-footer -->
        </div><!-- /.panel -->

        <div class="panel spl-hero-intranet spl-hero-brand-purple-a">
          <div class="panel-heading">
            <h4>
            <i class="glyphicon glyphicon-edit"></i>
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

      <!-- <div class="col-sm-7 col-md-8 col-lg-9 col-sm-pull-5 col-md-pull-4 col-lg-pull-3"> -->
      <div class="col-sm-7 col-md-6 col-lg-7 col-sm-pull-5 col-md-pull-2 col-lg-pull-1">
        
        <div class="panel spl-hero-intranet spl-hero-brand-blue-h">
          <div class="panel-heading">
            <h4>
            <i class="glyphicon glyphicon-search"></i>
            The Lens <small class="uppercase pull-right hidden-xs" style="color:#fff;">Library Employee News Service</small></h4>
          </div><!-- /.panel-heading -->
          <div class="panel-body">            
            <?php echo do_shortcode('[spl_widget category-posts slug=spl count=6 format=full author]'); ?>
          </div><!-- /.panel-body -->
          <div class="panel-footer text-right">
            <a class="" href="/news/spl/"><b>More</b> Library News &amp; Updates</a>&nbsp;<small class="text-muted">&rarr;</small> 
          </div><!-- /.panel-footer -->
        </div><!-- /.panel -->

      </div><!-- /.col -->

      <div class="col-sm-7 col-md-2 col-lg-2 col-md-pull-10 col-lg-pull-10">
        <div class="panel spl-hero-intranet spl-hero-brand-blue-e">
          <div class="panel-heading">
            <h4>
            <i class="glyphicon glyphicon-calendar"></i>
            SPL Today</h4>
          </div><!-- /.panel-heading -->
          <div class="panel-body">            
            <h4 style="margin-bottom:6px;">
              <i class="glyphicon glyphicon-star text-success"></i>
              <a href="http://www.spokanelibrary.org/">Facebook</a>
            </h4>
            <?php echo do_shortcode('[spl_widget home-page facebook refresh]'); ?>
            <h4 style="margin-bottom:6px;">
              <i class="glyphicon glyphicon-star text-success"></i>
              <a href="http://www.spokanelibrary.org/">Activities</a>
            </h4>
            <script src="https://www.trumba.com/scripts/spuds.js"></script>
            <script type="text/javascript">
            $Trumba.addSpud({
              webName: "spls-calendar",
              spudType : "upcoming",
              teaserBase : "http://www.spokanelibrary.org/calendar/",
              url: { }
            });
            </script>
          </div><!-- /.panel-body -->
          <div class="panel-footer text-right">
            <a class="" href="http://www.spokanelibrary.org/calendar"><b>More</b> Events</a>&nbsp;<small class="text-muted">&rarr;</small> 
          </div><!-- /.panel-footer -->
        </div><!-- /.panel -->
      </div><!-- /.col -->

    </div><!-- /.row -->

  </div><!-- /.col -->

</div><!-- /.row -->

<div class="row">

  <div class="col-lg-3 col-lg-push-9">
    <div style="border:1px solid black; height: 300px;">
     bulletin
   </div>
  </div>

  <div class="col-lg-2 col-lg-pull-9">
    <div style="border:1px solid black; height: 300px;">
      events
    </div>
  </div>

  <div class="col-lg-7 col-lg-pull-3">
    <div style="border:1px solid black; height: 600px;">
      posts
    </div>
  </div>
  
</div>

