<?php
/*
Template Name: Home Page v2
*/
?>



<!--
<div class="row">
  <div class="col-md-6">
    <?php //echo do_shortcode('[spl_widget search-catalog]'); ?>
  </div>
  <div class="col-md-6">
    <div class="hidden-xs">
      <?php //echo do_shortcode('[spl_widget login-form]'); ?>
    </div>
  </div>
</div>
-->

<?php //get_template_part('templates/content', 'page'); ?>

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

<!--
<div class="visible-sm">
  <div class="navbar navbar-inverse" style="margin-top: 0px; margin-bottom: 0px; background:transparent; border:none;">
    <span class="text-muted">
      <b>Tip:</b> use the toggle (upper right) to browse our website.
    </span>
    <button type="button" style="float:none; margin-top:0; margin-right:0;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>     
  </div>
</div>
-->

<div class="visible-xs visible-sm text-center" style="margin-top:-10px; margin-bottom: 10px;">
  <div class="btn-group" role="group" aria-label="Social Library Links">
    <a class="btn btn-link hidden-sm"
        href="http://facebook.com/spokanelibrary" 
        title=""><b><img style="width:24px;" class="" src="/assets/img/icons/32px/facebook.png"></b></a>
    <a class="btn btn-link hidden-sm"
        href="http://twitter.com/spokanelibrary" 
        title=""><b><img style="width:24px;" class="" src="/assets/img/icons/32px/twitter.png"></b></a>
    <a class="btn btn-link hidden-xs" 
        href="/news/"
        title=""><b>News</b></a>
    <a class="btn btn-link hidden-xs" 
        href="/blog/"
        title=""><b>Blog</b></a>
    <a class="btn btn-link hidden-xs" 
        href="/about/"
        title=""><b>About Us</b></a>
    <a class="btn btn-link" 
        href="/card/"
        title=""><b>Get a Library Card</b></a>
    <a class="btn btn-link hidden-xs" 
        href="/support/"
        title=""><b class="text-danger">Support Your Library!</b></a>
  </div>
</div>

<div class="visible-xs visible-sm">
  <div class="row">
    <div class="col-xs-12">
      <div class="list-group">
        <a href="/branches/" class="list-group-item">
          <span class="text-primary">Find us: Branches &amp; open hours <small>&rarr;</small></span>
        </a>
        <a href="/storytime/" class="list-group-item">
          <span class="text-primary">Join us: Storytime schedules <small>&rarr;</small></span>
        </a>
      </div><!-- /.list-group -->
    </div><!-- /.col -->
  </div><!-- /.row -->

  <div class="row">
    <div class="col-sm-12">

      <div class="spl-hero-panel spl-hero-primary">

        <h4 class="text-center">
        <i class="glyphicon glyphicon-hand-down"></i>
        For mobile devices
      </h4>

        <div class="spl-hero-digital btn-group btn-group-justified" role="group" aria-label="...">
          <a href="/search/" style="height:40px; vertical-align:middle; border:none; border-radius:0;" class="btn btn-primary spl-blue-tint-60">
            <span class="hidden-xs">&nbsp;Catalog</span> Search &rarr;
          </a>
          <a href="/account/" style="height:40px; vertical-align:middle; border:none;" class="btn btn-primary spl-blue-tint-50">
            <span class="hidden-xs">&nbsp;My</span> Account &rarr;
          </a>
          <a href="/apps/" style="height:40px; vertical-align:middle; border:none;" class="btn btn-primary spl-blue-tint-40">
            <span class="hidden-xs">&nbsp;Native</span> Apps &rarr;</span>
          </a>
        </div>

      </div>
    </div><!-- /.col -->


  </div><!-- /.row -->
</div>


<div class="row" id="spl-hero"> 
  
  <div class="col-sm-12">
    <?php echo do_shortcode('[spl_carousel_beta auto random shuffle news posts promo=tech slug=carousel title="" ]'); ?>
  </div><!-- /.col -->

  <div class="col-sm-12">

    <div class="spl-hero-panel spl-hero-primary">

      <a href="/digital/" class="spl-hero-link">
        <h4 class="text-center normal">
          <i class="glyphicon glyphicon-cloud-download"></i>
          Visit the <b>Digital Branch</b> <span class="hidden-xs">to <b>download</b> eBooks, music, &amp; more</span>
        </h4>
      </a>

      <div class="spl-hero-digital btn-group btn-group-justified" role="group" aria-label="...">
        <a href="/ebooks/" style="height:40px; vertical-align:middle; border:none; border-radius:0;" class="btn btn-primary spl-blue-tint-60">
          <i class="glyphicon glyphicon-phone"></i>
          
          <span class="hidden-xs">&nbsp;<b>eBooks</b> &rarr;</span>
        </a>
        <a href="/emusic/" style="height:40px; vertical-align:middle; border:none;" class="btn btn-primary spl-blue-tint-50">
          <i class="glyphicon glyphicon-music"></i>
          
          <span class="hidden-xs">&nbsp;<b>Music</b> &rarr;</span>
        </a>
        <a href="/eaudio/" style="height:40px; vertical-align:middle; border:none;" class="btn btn-primary spl-blue-tint-40">
          <i class="glyphicon glyphicon-headphones"></i></span>
          
          <span class="hidden-xs">&nbsp;<b>Audio Books</b> &rarr;</span>
        </a>
        <a href="/emagazines/" style="height:40px; vertical-align:middle; border:none; border:none; border-radius:0;" class="btn btn-primary spl-blue-tint-30">
          <i class="glyphicon glyphicon-book"></i>
          
          <span class="hidden-xs">&nbsp;<b>Magazines</b> &rarr;</span>
        </a>
      </div>

    </div>
  </div><!-- /.col -->

</div><!-- /.row -->


<div class="row">

  <div class="col-md-5">
    <div class="spl-hero-panel spl-hero-warning">
      <a class="spl-hero-link" href="/calendar/">
        <h4 class="text-center">
          <i class="glyphicon glyphicon-calendar"></i>
          On our calendar &rarr;
        </h4>
      </a>
    </div>
    <?php echo do_shortcode('[spl_widget calendar-view widget-beta limit=6]'); ?>
    <p class="text-right">
      <a href="/calendar/"><b>Full events calendar</b> <small>&rarr;</small></a>
    </p>
    <p>&nbsp;</p>
  </div><!-- /.col -->
  
  <div class="col-md-7">
    <div class="spl-hero-panel spl-hero-default">
      <a class="spl-hero-link" href="/browse/">
        <h4 class="text-center">
          <i class="glyphicon glyphicon-star"></i>
          What we're reading &rarr;
        </h4>
      </a>
    </div>
    <?php echo do_shortcode('[spl_widget browse-list list=star widget limit=7]'); ?>
    <p class="text-right">
      <a href="/browse/"><b>More staff picks</b> <small>&rarr;</small></a>
    </p>
    <p>&nbsp;</p>
  </div><!-- /.col -->

</div><!-- /.row -->




