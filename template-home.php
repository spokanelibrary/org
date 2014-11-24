<?php
/*
Template Name: Home Page
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
      <a href="/connect/" class="list-group-item">
        <span class="text-primary">Contact the library</span> &rarr;
      </a>
      <a href="/account/" class="list-group-item">
        <span class="text-primary">My account</span> &rarr;
      </a>
      <a href="/search/" class="list-group-item">
        <span class="text-primary">Search the catalog</span> &rarr;
      </a>
      <a href="/search/" class="list-group-item">
        <span class="text-primary">Is the library open?</span> &rarr;
      </a>
      <a href="/apps/" class="list-group-item">
        <span class="text-primary">Mobile apps</span> &rarr;
      </a>
      <a href="/browse/" class="list-group-item">
        <span class="text-primary">Browse popular titles</span> &rarr;
      </a>
      <a href="http://news.spokanelibrary.org" class="list-group-item">
        <span class="text-primary">Get library news</span> &rarr;
      </a>
      <a href="/explore/" class="list-group-item">
        <span class="text-primary">How to find things</span> &rarr;
      </a>

    </div>

  </div><!-- /.col -->
</div><!-- /.row -->

<div class="row">
  
  <div class="col-md-6 hidden-xs">
    <?php echo do_shortcode('[spl_carousel auto]'); ?>
  </div><!-- /.col -->

  <div class="col-md-3">
    <div class="panel panel-primary" style="border-left-width:5px;">
      <div class="panel-heading" style="border-radius:0;">
        <i class="glyphicon glyphicon-cloud-download"></i>
        Digital branch
      </div>
      <div class="panel-body">
        <?php echo do_shortcode('[spl_widget custom-page page=digital-widget]'); ?>
      </div>
    </div><!-- /.panel -->
  </div><!-- /.col -->

  <div class="col-md-3">  
    <div class="panel panel-primary" style="border-left-width:5px;">
      <div class="panel-heading" style="border-radius:0;">
        <i class="glyphicon glyphicon-pushpin"></i>
        Announcements
      </div>
      <div class="panel-body">
        <?php get_template_part('templates/content', 'page'); ?>
      </div>
    </div><!-- /.panel -->
  </div><!-- /.col -->

</div><!-- /.row -->

<div class="row" style="padding-top: 0px; border-width: 4px 0; border-style: solid; border-color: rgb(100,150,75);">
  <div class="col-md-12">
    <h3 class="text-success">
      <i class="glyphicon glyphicon-bullhorn"></i> 
      Read the latest: Library News
    </h3>
    <h2 style="margin-top:0;" class="clearfix">
      <a href="http://news.spokanelibrary.org/newsletter/november-reading-writing-and-electricity/">November: Reading, Writing and Electricity</a>
    </h2>
  </div>

  <div class="col-md-6">
    <!--
    <h3 class="text-success">
      <i class="glyphicon glyphicon-pencil"></i> 
      Library News
    </h3>
    -->
    

    <p>
      <img class="img-responsive img-rounded hidden-xs" src="http://news.spokanelibrary.org/wordpress/media/whiteboard.jpg">
    </p>
    
    
    <p class="">
      <a class="btn btn-block btn-success" href="http://news.spokanelibrary.org/">Read Library News &rarr;</a>
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
          <li><a href="http://news.spokanelibrary.org/connected-learning-for-connected-holidays/">Connected Learning for Connected Holidays <span class="text-muted">&rarr;</span></a></li>
          <li><a href="http://news.spokanelibrary.org/dewey-for-writers-808-02/">Dewey for Writers - 808.02 <span class="text-muted">&rarr;</span></a></li>
          <li><a href="http://news.spokanelibrary.org/5-songs-11-14/">5 Songs - Music for Concentration <span class="text-muted">&rarr;</span></a></li>
          <li><a href="http://news.spokanelibrary.org/events_wrap-up-10-14/">Bang-Up Month for Events <span class="text-muted">&rarr;</span></a></li>
          <li><a href="http://news.spokanelibrary.org/kilowatt_monitor/">How Many Kilowatts Does it Take to Read a Book? <span class="text-muted">&rarr;</span></a></li>
          <li><a href="http://news.spokanelibrary.org/sunday-hours-the-shadle-library/">Sunday Hours @ the Shadle Library <span class="text-muted">&rarr;</span></a></li>
        </ul>
      <!--</div>-->
    <!--</div>--><!-- /.panel -->

  </div><!-- /.col -->
</div><!-- /.row -->


<div class="row">

  <div class="col-md-6">

    <h3 class="text-success">
      <i class="glyphicon glyphicon-calendar"></i> 
      Coming up at your local library
    </h3>
    
    <p class="text-right">
      <a class="btn btn-link btn-sm" href="/calendar/">Full events calendar &rarr;</a>
    </p>
    
    <?php echo do_shortcode('[spl_widget calendar-view widget limit=12]'); ?>

    <p class="text-right">
      <a class="btn btn-link btn-sm" href="/calendar/">Full events calendar &rarr;</a>
    </p>

  </div><!-- /.col -->
  
  <div class="col-md-6">
    <div class="hidden-xs">

        <h3 class="text-success">
          <i class="glyphicon glyphicon-comment"></i> 
          From the reference desk
        </h3> 
        
        <p class="text-right">
          <a class="btn btn-link btn-sm" href="/blog/">More on the library blog &rarr;</a>
        </p>
        
        <?php echo do_shortcode('[spl_widget recent-posts]'); ?>
        
        <p>&nbsp;</p>

        <p class="text-right">
          <a class="btn btn-link btn-sm" href="/blog/">More on the library blog &rarr;</a>
        </p>

</div><!-- /.row -->

<?php
/*
<div class="panel panel-default" style="margin-top:10px; margin-bottom:6px;">
  <div class="panel-heading">
    <span class="text-muted">
    <i class="glyphicon glyphicon-calendar"></i>
    Is the library open now?
    </span>
  </div>
</div><!-- /.panel -->
*/
?>
<?php //echo do_shortcode('[spl_widget branch-hours]'); ?>