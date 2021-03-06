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

  </div><!-- /.col -->

</div><!-- /.row -->

<div class="row">


  <div class="col-sm-6 col-md-3 col-md-push-9 col-lg-3 col-lg-push-9">
    <div class="panel spl-hero-intranet spl-hero-brand-blue-b hidden-xs">
      <div class="panel-heading">
        <h4>
        <i class="glyphicon glyphicon-list"></i>
        WIG</h4>
      </div><!-- /.panel-heading -->
      <div class="panel-body">
          <ul class="list-unstyled">
          <?php 
          wp_nav_menu( 
          array(
            'menu' => 'wig'
          , 'container' => false
          , 'items_wrap' => '%3$s'
          )); 
          ?>
          </ul>            
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->
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

    <div class="panel spl-hero-intranet spl-hero-brand-blue-d hidden-xs">
      <div class="panel-heading">
        <h4>
        <i class="glyphicon glyphicon-screenshot"></i>
        Solutions Teams</h4>
      </div><!-- /.panel-heading -->
      <div class="panel-body">
          <a href="/teams/">
            <small class="glyphicon glyphicon-plus-sign"></small>
            Join a team &rarr;</a>   
          <br>
          <a href="/teams-in-progress/">
            <small class="glyphicon glyphicon-plus-sign"></small>
            In-Progress Teams &rarr;</a>   
          <br>
          <a href="/teams-completed/">
            <small class="glyphicon glyphicon-plus-sign"></small>
            Completed Teams &rarr;</a>          
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->


    <div class="panel spl-hero-intranet spl-hero-brand-orange-a">
      <div class="panel-heading">
        <h4>
        <i class="glyphicon glyphicon-user"></i>
        HR Updates</h4>
      </div><!-- /.panel-heading -->
      <div class="panel-body" style="word-wrap:break-word !important;">

        <?php echo do_shortcode('[spl_widget category-posts slug=hr-updates count=2 format=excerpt size=sm]'); ?>
      </div><!-- /.panel-body -->
      <div class="panel-footer text-right">
        <a class="" href="/news/hr-updates/"><b>More</b> HR Updates</a>&nbsp;<small class="text-muted">&rarr;</small> 
      </div><!-- /.panel-footer -->
    </div><!-- /.panel -->

      
    <div class="panel spl-hero-intranet spl-hero-brand-blue-e">
      <div class="panel-heading">
        <h4>
        <i class="glyphicon glyphicon-thumbs-up"></i>
        Social Media</h4>
      </div><!-- /.panel-heading -->
      <div class="panel-body">            
        <?php //echo do_shortcode('[spl_widget home-page facebook refresh]'); ?>
        
        
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=405130432857559";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <div class="fb-page" data-href="https://www.facebook.com/spokanelibrary" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/spokanelibrary"><a href="https://www.facebook.com/spokanelibrary">Spokane Public Library</a></blockquote></div></div>

        <hr>

        <a class="twitter-timeline"  href="https://twitter.com/spokanelibrary" data-widget-id="664129522216755200">Tweets by @spokanelibrary</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      

      </div><!-- /.panel-body -->
      <div class="panel-footer text-center">
        <div class="row">
          <div class="col-sm-6">
            <a class=""
                href="http://facebook.com/spokanelibrary" 
                title=""><img class="" src="/assets/img/icons/32px/facebook.png"></a>
          </div>
          <div class="col-sm-6">
            <a class=""
              href="http://twitter.com/spokanelibrary" 
              title=""><img class="" src="/assets/img/icons/32px/twitter.png"></a>
          </div>
        </div> 
      </div><!-- /.panel-footer -->
    </div><!-- /.panel -->

  </div>

<!--   <div class="hidden-xs col-sm-6 col-md-3 col-md-pull-3 col-lg-3 col-lg-pull-3">


  </div> -->
  
  <div class="col-sm-12 col-md-9 col-md-pull-3 col-lg-9 col-lg-pull-3">
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
  </div>
  
</div>

