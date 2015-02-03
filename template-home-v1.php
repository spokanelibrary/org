<?php
/*
Template Name: Home Page v1
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
  
  <div class="col-md-6 hidden-xs">
    <?php echo do_shortcode('[spl_carousel auto random slug=carousel]'); ?>
    <hr class="visible-sm">
  </div><!-- /.col -->

  <div class="col-md-6 hidden-xs">
    <h3 class="text-primary" style="margin-top:0;">
      <i class="glyphicon glyphicon-cloud-download"></i>
      <a class="text-primary"
        href="/digital/">
        Check out the digital branch</a>
    </h3>

    <h5 class="help-block" style="margin-bottom:20px;">
      Research
      &middot;
      Entertainment
      &middot;
      Connected learning
      &middot;
      Apps &amp; more
    </h5>

    <div class="row">
      <div class="col-md-6">
        <?php echo do_shortcode('[spl_widget custom-page page=digital-widget]'); ?>
        <div class="media">
          <a class="pull-left btn btn-default" href="/subscriptions/">
            <i class="glyphicon glyphicon-sort-by-alphabet"></i>
          </a>
          <div class="media-body">
            <h5 class="media-heading">
              <a href="/subscriptions/"><em>Library subscriptions:</em> Online research</a>
            </h5>
          </div>
        </div><!-- /.media -->
        <p class="">&nbsp;</p>
      </div><!-- /.col -->
      <div class="col-md-6">  
        <?php echo do_shortcode('[spl_widget custom-page page=connected-widget]'); ?>
        <p class="">&nbsp;</p>
      </div><!-- /.col -->
    </div><!-- /.row -->
    
    <p>
      <a class="btn btn-block btn-primary"
        href="/digital/">Visit the digital branch &rarr;</a>
    </p>
    
  </div><!-- /.col -->

</div><!-- /.row -->


<div class="row" style="padding-top: 0px; border-width: 4px 0 0 0; border-style: solid; border-color: #ccc /*rgb(100,150,75)*/;">
  <div class="col-md-6">
    <h3 class="text-success">
      <i class="glyphicon glyphicon-bullhorn"></i> 
      Read the latest: Library News
    </h3>
  </div><!-- /.col -->
  <div class="col-md-6">
    <!--
    <div style="padding: 16px 0;">
      <a class="btn btn-block btn-success" 
      href="http://news.spokanelibrary.org/">
      Get the library newsletter &rarr;</a>
    </div>
    -->
  </div><!-- /.col -->
</div><!-- /.row -->

<div class="row" style="padding-top: 0px; border-width: 0 0 4px 0; border-style: solid; border-color: #ccc /*rgb(100,150,75)*/;">
 
  <div class="col-md-12">
    <h2 style="margin-top:0;" class="clearfix">
      <a href="http://news.spokanelibrary.org/newsletter/new-year-new-you-new-day-for-the-library/">New Year, New You, New Day for the Library</a>
      <small>&rarr;</small>
    </h2>
  </div><!-- /.col -->

  <div class="col-md-6">
    <p class="">
      <a href="http://news.spokanelibrary.org/newsletter/new-year-new-you-new-day-for-the-library/"
      ><img style="margin:auto;" class="img-responsive img-rounded hidden-xs" src="http://news.spokanelibrary.org/wordpress/media/Shadle_Sunday_hours2-300x282.jpg"></a>
    </p>
  </div><!-- /.col -->

  <div class="col-md-6">
    <h3 style="margin-top:0;" class="text-muted">also in this issue&hellip;</h3>
    <ul class="nav nav-pills nav-stacked">
      <li><a href="http://news.spokanelibrary.org/new-year-new-you/">What’s on your “to do” list for 2015? <small class="text-muted">&rarr;</small></a></li>
      <li><a href="http://news.spokanelibrary.org/dewey_1-15/">Dewey’s (self) helpful side <small class="text-muted">&rarr;</small></a></li>
      <li><a href="http://news.spokanelibrary.org/5_magazines_1-15/">Five Magazines instead of Five Songs This Month <small class="text-muted">&rarr;</small></a></li>
    </ul>
    <!--
    <p class="">
      <a class="btn btn-block btn-success" 
      href="http://news.spokanelibrary.org/">Get the library newsletter &rarr;</a>
    </p>
    -->
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
    <?php echo do_shortcode('[spl_widget calendar-view widget limit=12]'); ?>
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
