<?php
/*
Template Name: Beta Home Page
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
<div class="alert alert-success">
  <?php echo $post->post_content; ?>
</div>
<?php endif; ?>

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

<div class="row visible-xs">
  <div class="col-xs-12">
    <div class="list-group">
      <a href="/open/" class="list-group-item">
        <span class="text-primary">Is the library open?</span> <small>&rarr;</small>
      </a>
      <a href="/catalog/" class="list-group-item">
        <span class="text-primary">Library catalog</span> <small>&rarr;</small>
      </a>
      <a href="/login/" class="list-group-item">
        <span class="text-primary">My account</span> <small>&rarr;</small>
      </a>
      <a href="/storytime/" class="list-group-item">
        <span class="text-primary">Storytime schedules</span> <small>&rarr;</small>
      </a>
      <a href="/calendar/" class="list-group-item">
        <span class="text-primary">Check events calendar</span> <small>&rarr;</small>
      </a>
      <a href="/digital/" class="list-group-item">
        <span class="text-primary">Digital branch</span> <small>&rarr;</small>
      </a>
      <a href="/apps/" class="list-group-item">
        <span class="text-primary">Mobile apps</span> <small>&rarr;</small>
      </a>
      <a href="/connect/" class="list-group-item">
        <span class="text-primary">Contact the library</span> <small>&rarr;</small>
      </a>
      <a href="/new/" class="list-group-item">
        <span class="text-primary">Browse new arrivals</span> <small>&rarr;</small>
      </a>
      <a href="/browse/" class="list-group-item">
        <span class="text-primary">Staff picks &amp; popular titles</span> <small>&rarr;</small>
      </a>
      <a href="/news/" class="list-group-item">
        <span class="text-primary">Read library news</span> <small>&rarr;</small>
      </a>
    </div><!-- /.list-group -->
  </div><!-- /.col -->
</div><!-- /.row -->


<div class="row">


  <div class="col-md-12">

    <div class="btn-group btn-group-justified" role="group" aria-label="...">
      <a style="border:none; border-bottom-left-radius:0; border-bottom-right-radius:0;" class="btn btn-lg btn-primary spl-blue-tint-80">
        <b>Visit the Digital Branch to download eBooks, music, &amp; more</b>
      </a>
    </div>

    <div class="btn-group btn-group-justified" role="group" aria-label="...">
      <a style="border:none; border-top-left-radius:0;" class="btn btn-primary spl-blue-tint-60">
        <i class="glyphicon glyphicon-phone"></i>
        <br>
        eBooks
      </a>
      <a style="border:none;" class="btn btn-primary spl-blue-tint-50">
        <i class="glyphicon glyphicon-music"></i>
        <br>
        Music
      </a>
      <a style="border:none;" class="btn btn-primary spl-blue-tint-40">
        <i class="glyphicon glyphicon-headphones"></i>
        <br>
        Audio Books
      </a>
      <a style="border:none; border:none; border-top-right-radius:0;" class="btn btn-primary spl-blue-tint-30">
        <i class="glyphicon glyphicon-book"></i>
        <br>
        Magazines
      </a>
    </div>
  </div><!-- /.col -->

</div><!-- /.row -->


<div class="row" style="padding: 16px 0; margin:16px 0; border-top: 4px solid rgb(0,85,135); border-bottom: 4px solid rgb(0,85,135);"> 
    
  <div class="hidden-xs col-sm-12">
    <?php echo do_shortcode('[spl_carousel_hero auto random slug=carousel]'); ?>
  </div><!-- /.col -->

</div><!-- /.row -->

<div class="row"> 

  <div class="col-md-5 hidden-xs">
    <h3 class="text-warning">
      <i class="glyphicon glyphicon-calendar"></i> 
      Coming up at your local library
    </h3>
    <p>
      <a class="btn btn-block btn-warning" href="/calendar/">
        Check the library calendar &rarr;
      </a>
    </p>
    <?php echo do_shortcode('[spl_widget calendar-view widget-beta limit=12]'); ?>
    <p class="text-right">
      <a class="btn btn-link btn-sm" href="/calendar/">Full events calendar &rarr;</a>
    </p>    
  </div><!-- /.col -->

  <div class="col-md-7 hidden-xs">
      
    Blog
  
  </div><!-- /.col -->

</div><!-- /.row -->





<div class="row" style="background: rgb(255,255,255); padding: 16px 0; margin:16px 0; border-top: 4px solid rgb(0,85,135); border-bottom: 4px solid rgb(0,85,135);">

  <div class="col-md-3">
    <h3 class="text-primary" style="margin-top:0; padding-top:0;">
      <a href="/digital/">Digital Branch:</a>
    </h3>
    <br>

  </div><!-- /.col -->

  <div class="col-md-3">
      <a href="#"><i class="glyphicon glyphicon-cloud-download"></i>
        eBooks &amp; Downloads</a>
  </div><!-- /.col -->

  <div class="col-md-6">
    <a href="#"><i class="glyphicon glyphicon-globe"></i>
        <b>Connected Learning:</b> Training, workshops &amp; certification</a>
  </div><!-- /.col -->

  <div class="col-md-12">
    <div class="btn-group btn-group-justified" role="group" aria-label="...">
      <a style="border:none;" class="btn btn-sm btn-primary spl-blue-tint-60">
        <i class="glyphicon glyphicon-phone"></i>
        <br>
        eBooks
      </a>
      <a style="border:none;" class="btn btn-sm btn-primary spl-blue-tint-50">
        <i class="glyphicon glyphicon-music"></i>
        <br>
        Music
      </a>
      <a style="border:none;" class="btn btn-sm btn-primary spl-blue-tint-40">
        <i class="glyphicon glyphicon-headphones"></i>
        <br>
        Audio Books
      </a>
      <a style="border:none;" class="btn btn-sm btn-primary spl-blue-tint-30">
        <i class="glyphicon glyphicon-book"></i>
        <br>
        Magazines
      </a>
      <a style="border:none;" class="btn btn-sm btn-primary spl-blue-tint-20">
        <i class="glyphicon glyphicon-sort-by-alphabet"></i>
        <br>
        Research Tools
      </a>
      <a style="border:none;" class="btn btn-sm btn-primary spl-blue-tint-10">
        Technology Training
        <br>
        &amp; Workshops
      </a>
    </div>
  </div><!-- /.col -->

</div><!-- /.row -->

<div class="row" style="/*background: rgb(245,245,245);*/ /*background-image:url('http://beta.spokanelibrary.org/assets/img/png/spl-devices.png'); background-repeat:no-repeat;*/ padding: 16px 0; margin:16px 0; border-top: 4px solid rgb(0,85,135); border-bottom: 4px solid rgb(0,85,135);">

  <div class="col-sm-3 col-md-2 hidden-xs">
    <h4 class="text-primary" style="margin:0; padding:0;">
      <i class="glyphicon glyphicon-cloud-download"></i>
      <a href="/digital/">Download</a>
    </h4>
  </div><!-- /.col -->

  <div class="col-sm-9 col-md-10 col-lg-9 hidden-xs">
    <div class="btn-group btn-group-justified" role="group" aria-label="...">
      <a style="border:none;" class="btn btn-sm btn-primary spl-blue-tint-60">
        <i class="glyphicon glyphicon-phone"></i>
        <br>
        eBooks
      </a>
      <a style="border:none;" class="btn btn-sm btn-primary spl-blue-tint-50">
        <i class="glyphicon glyphicon-music"></i>
        <br>
        Music
      </a>
      <a style="border:none;" class="btn btn-sm btn-primary spl-blue-tint-40">
        <i class="glyphicon glyphicon-headphones"></i>
        <br>
        Audio Books
      </a>
      <a style="border:none;" class="btn btn-sm btn-primary spl-blue-tint-30">
        <i class="glyphicon glyphicon-book"></i>
        <br>
        Magazines
      </a>
    </div>
  </div><!-- /.col -->

</div><!-- /.row -->


<div class="row"> 
  
  <div class="col-sm-3 col-md-2 hidden-xs">
    <h4 class="text-primary" style="margin-top:0;">
      <i class="glyphicon glyphicon-cloud-download"></i>
      <a href="/digital/">Download</a>
    </h4>
    <div class="btn-group-vertical center-block" role="group" aria-label="...">
      <a style="border:none;" class="btn btn-sm btn-primary spl-blue-tint-60">
        <i class="glyphicon glyphicon-phone"></i>
        <br>
        eBooks
      </a>
      <a style="border:none;" class="btn btn-sm btn-primary spl-blue-tint-50">
        <i class="glyphicon glyphicon-music"></i>
        <br>
        Music
      </a>
      <a style="border:none;" class="btn btn-sm btn-primary spl-blue-tint-40">
        <i class="glyphicon glyphicon-headphones"></i>
        <br>
        Audio Books
      </a>
      <a style="border:none;" class="btn btn-sm btn-primary spl-blue-tint-30">
        <i class="glyphicon glyphicon-book"></i>
        <br>
        Magazines
      </a>
    </div>
    <!--
    <p>
      <a class="btn btn-block btn-default panel-transparent" href="/login/">
          <i class="glyphicon glyphicon-user"></i>
          <br>
          <b>My Account</b>
      </a>
    </p>
    <p>
      <a class="btn btn-block btn-default panel-transparent" href="/login/">
          <i class="glyphicon glyphicon-barcode"></i>
          <br>
          <b>Get a Library Card</b>
      </a>
    </p>
    <p>
      <a class="btn btn-block btn-default panel-transparent" href="/login/">
          <i class="glyphicon glyphicon-envelope"></i>
          <br>
          <b>Contact Us</b>
      </a>
    </p>
    -->
  </div><!-- /.col -->
  
  <div class="col-sm-9 col-md-10 col-lg-9 hidden-xs">
    <?php echo do_shortcode('[spl_carousel_hero auto random slug=carousel]'); ?>
  </div><!-- /.col -->

</div><!-- /.row -->


<div class="row">

  <div class="col-md-6">
    <h3 class="text-warning">
      <i class="glyphicon glyphicon-calendar"></i> 
      Coming up at your local library
    </h3>
    <p>
      <a class="btn btn-block btn-warning" href="/calendar/">
        Check the library calendar &rarr;
      </a>
    </p>
    <?php echo do_shortcode('[spl_widget calendar-view widget-beta limit=12]'); ?>
    <p class="text-right">
      <a class="btn btn-link btn-sm" href="/calendar/">Full events calendar &rarr;</a>
    </p>    
  </div><!-- /.col -->
  
  <div class="col-md-6">
    <div class="hidden-xs">
      <h3 class="text-info">
        <i class="glyphicon glyphicon-comment"></i> 
        From the reference desk
      </h3> 
      <p>
        <a class="btn btn-block btn-info" href="/blog/">
        Read the library blog &rarr;
        </a>
      </p>
      <?php echo do_shortcode('[spl_widget recent-posts]'); ?>
      <p>&nbsp;</p>
      <p class="text-right">
        <a class="btn btn-link btn-sm" href="/blog/">More on the library blog &rarr;</a>
      </p>
    </div>
  </div><!-- /.col -->

</div><!-- /.row -->

