<?php
/*
Template Name: Beta Home Page
*/
?>

<div class="row">
  <div class="col-md-6">
    <?php //echo do_shortcode('[spl_widget search-catalog]'); ?>
  </div><!-- /.col -->
  <div class="col-md-6">
    <div class="hidden-xs">
      <?php //echo do_shortcode('[spl_widget login-form]'); ?>
    </div>
  </div><!-- /.col -->
</div><!-- /.row -->

<!--
<p class="hidden-md hidden-lg">
</p>
-->

<div class="visible-sm">
  <div class="navbar navbar-inverse" style="margin-top: 0px; margin-bottom: 0px; background:transparent; border:none;">
      
    <span class="text-muted">
      <b>Tip: use the toggle (upper right) to browse this website.</b>
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

    </div>

  </div><!-- /.col -->
</div><!-- /.row -->

<div class="row">
  
  <div class="col-md-6 hidden-xs">
    <?php echo do_shortcode('[spl_carousel auto random slug=carousel]'); ?>
  </div><!-- /.col -->

  <div class="col-md-6">
    
    <div class="panel panel-warning">
    <div class="panel-heading">
      <h4 class="panel-title">
          <a href="/digital/"><i class="glyphicon glyphicon-cloud-download"></i>
            Digital branch</a>
        </h4>
    </div>
    <div class="panel-body">
    
    <div class="row">
     
      <div class="col-md-6">
        <h4>
          <a href="/digital/"><i class="glyphicon glyphicon-phone"></i>
            Library apps</a>
        </h4>
        <?php echo do_shortcode('[spl_widget custom-page page=digital-widget]'); ?>    
      </div><!-- /.col -->

      <div class="col-md-6">  
        <h4>
          <a href="/connected-learning/"><i class="glyphicon glyphicon-cloud-download"></i>
            Connected learning</a>
        </h4>
        <?php echo do_shortcode('[spl_widget custom-page page=connected-widget]'); ?>
        <?php //get_template_part('templates/content', 'page'); ?>
      </div><!-- /.col -->

    </div><!-- /.row -->
    <h5 class="text-muted" style="margin-top:0;">
      <a href="/subscriptions/">Research</a>.
      <a href="/apps/">Entertainment</a>.
      <a href="/connected-learning/">Technology training</a>.
      <a href="/digital/">So much more</a>.
    </h5>
    </div>
    </div>
  </div><!-- /.col -->

</div><!-- /.row -->

<div class="row" style="padding-top: 0px; border-width: 4px 0; border-style: solid; border-color: rgb(100,150,75);">
  <div class="col-md-12">
    <h3 class="text-success">
      <i class="glyphicon glyphicon-bullhorn"></i> 
      Read the latest: Library News
    </h3>
    <h2 style="margin-top:0;" class="clearfix">
      <a href="http://news.spokanelibrary.org/newsletter/more-library-time-a-gift-for-you/">More Library Time For Busy People</a>
    </h2>
  </div>

  <div class="col-md-6">
    <p class="">
      <a href="http://news.spokanelibrary.org/newsletter/more-library-time-a-gift-for-you/"
      ><img style="margin:auto;" class="img-responsive img-rounded hidden-xs" src="http://news.spokanelibrary.org/wordpress/media/Shadle_Sunday_hours2-300x282.jpg"></a>
    </p>
    
    <p class="">
      <a class="btn btn-block btn-success" href="http://news.spokanelibrary.org/">Read the library newsletter &rarr;</a>
    </p>
  </div><!-- /.col -->
  <div class="col-md-6">

    <!--<div class="panel panel-success" style="border-left-width:5px;">-->
      <!--<div class="panel-heading" style="border-radius:0;">-->
        <!--<i class="glyphicon glyphicon-plus-sign"></i>-->
        <h3 style="margin-top:0;" class="text-muted">also in this issue&hellip;</h3>
      <!--</div>-->
      <!--<div class="panel-body">-->
        <ul class="nav nav-pills nav-stacked">
          <li><a href="http://news.spokanelibrary.org/nw_exhibit_12-14/">Spokane in 1889 Exhibit <small class="text-muted">&rarr;</small></a></li>
          <li><a href="http://news.spokanelibrary.org/hour-of-code/">Hour of Code! <small class="text-muted">&rarr;</small></a></li>
          <li><a href="http://news.spokanelibrary.org/knits-purls-and-dewey/">Knits, Purls and Dewey <small class="text-muted">&rarr;</small></a></li>
          <li><a href="http://news.spokanelibrary.org/holiday-giving-ideas-from-the-library/">Holiday Giving Ideas from the Library <small class="text-muted">&rarr;</small></a></li>
          <li><a href="http://news.spokanelibrary.org/five-artists-one-song-for-the-season/">Five Artists – One Song for the Season <small class="text-muted">&rarr;</small></a></li>
        </ul>
      <!--</div>-->
    <!--</div>--><!-- /.panel -->

  </div><!-- /.col -->
</div><!-- /.row -->


<div class="row">

  <div class="col-md-6">

    <h3 class="text-muted">
      <i class="glyphicon glyphicon-calendar"></i> 
      Coming up at your local library
    </h3>

    <p>
      <a class="btn btn-block btn-warning" href="/calendar/">
        Check the library calendar &rarr;
      </a>
    </p>
    <!--
    <p class="text-right">
      <a class="btn btn-link btn-sm" href="/calendar/">Full events calendar &rarr;</a>
    </p>
    -->
    <?php echo do_shortcode('[spl_widget calendar-view widget limit=12]'); ?>

    <p class="text-right">
      <a class="btn btn-link btn-sm" href="/calendar/">Full events calendar &rarr;</a>
    </p>
    
  </div><!-- /.col -->
  
  <div class="col-md-6">
    <div class="hidden-xs">

      <h3 class="text-muted">
        <i class="glyphicon glyphicon-comment"></i> 
        From the reference desk
      </h3> 
      <!--
      <p class="text-right">
        <a class="btn btn-link btn-sm" href="/blog/">More on the library blog &rarr;</a>
      </p>
      -->
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


