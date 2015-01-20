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
  
  <div class="hidden-xs col-sm-12">
    <?php echo do_shortcode('[spl_carousel_hero auto random slug=carousel]'); ?>
  </div><!-- /.col -->

</div><!-- /.row -->


<div class="" style="padding: 0px 0; margin: 20px 0; border-top: 5px solid rgb(0,85,135); border-bottom: 5px solid rgb(0,85,135);">


  <div class="">

    <a class="btn btn-lg btn-block btn-link">
      <i class="glyphicon glyphicon-cloud-download"></i>
      Visit the <b>Digital Branch</b> to download eBooks, music, &amp; more
    </a>

    <div class="btn-group btn-group-justified" role="group" aria-label="...">
      <a style="border:none; border-radius:0;" class="btn btn-primary spl-blue-tint-60">
        <i class="glyphicon glyphicon-phone"></i>
        <br>
        <b>eBooks</b>
      </a>
      <a style="border:none;" class="btn btn-primary spl-blue-tint-50">
        <i class="glyphicon glyphicon-music"></i>
        <br>
        <b>Music</b>
      </a>
      <a style="border:none;" class="btn btn-primary spl-blue-tint-40">
        <i class="glyphicon glyphicon-headphones"></i>
        <br>
        <b>Audio Books</b>
      </a>
      <a style="border:none; border:none; border-radius:0;" class="btn btn-primary spl-blue-tint-30">
        <i class="glyphicon glyphicon-book"></i>
        <br>
        <b>Magazines</b>
      </a>
    </div>
  </div><!-- /.col -->

</div><!-- /.row -->



<div class="row">

  <div class="col-md-5">
    <h3 class="text-warning">
      <i class="glyphicon glyphicon-calendar"></i>
      On our calendar
    </h3>
    <?php echo do_shortcode('[spl_widget calendar-view widget-beta limit=5]'); ?>
    <!--
    <p class="text-right">
      <a class="btn btn-link btn-sm" href="/calendar/">Full events calendar &rarr;</a>
    </p>
    -->    
    <p>
      <a class="btn btn-block btn-warning" href="/calendar/">
        <i class="glyphicon glyphicon-calendar"></i>
        <b>Coming up soon</b> <small>&rarr;</small>
      </a>
    </p>

    <hr>
    
    <h3 class="text-muted">
      <i class="glyphicon glyphicon-comment"></i> 
      From the reference desk
    </h3>
    <?php echo do_shortcode('[spl_widget recent-posts count=3]'); ?>
    <p>&nbsp;</p>
    <!--
    <p class="text-right">
      <a class="btn btn-link btn-sm" href="/blog/">More on the library blog &rarr;</a>
    </p>
    -->
    <p>
      <a class="btn btn-block btn-info" href="/blog/">
      <i class="glyphicon glyphicon-comment"></i> 
      <b>Read the library blog</b> <small>&rarr;</small>
      </a>
    </p>

    <hr>
    
  </div><!-- /.col -->
  
  <div class="col-md-7">
    <div class="hidden-xs">
      <h3 class="text-success">
        <i class="glyphicon glyphicon-book"></i>
        What we're reading
      </h3>
      <!--
      <p>
        <a class="btn btn-block btn-success" href="/browse/">
        <i class="glyphicon glyphicon-book"></i> 
        <b>What we're reading</b> <small>&rarr;</small>
        </a>
      </p>
      -->
      <?php echo do_shortcode('[spl_widget browse-list list=star widget limit=4]'); ?>
      <p>&nbsp;</p>
      <p class="text-right">
        <a class="btn btn-link btn-sm" href="/blog/">More staff picks &rarr;</a>
      </p>
    </div>
  </div><!-- /.col -->

</div><!-- /.row -->







