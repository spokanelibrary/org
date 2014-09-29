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
    <div class="panel panel-primary" style="border-left-width:5px;">
      <div class="list-group">

        <a href="/account/" class="list-group-item">
          <span class="text-primary">My account</span> &rarr;
        </a>
        <a href="/search/" class="list-group-item">
          <span class="text-primary">Search the catalog</span> &rarr;
        </a>
        <a href="/search/" class="list-group-item">
          <span class="text-primary">Is the library open?</span> &rarr;
        </a>
        <a href="/explore/" class="list-group-item">
          <span class="text-primary">How to find things</span> &rarr;
        </a>
        <a href="/browse/" class="list-group-item">
          <span class="text-primary">Browse popular titles</span> &rarr;
        </a>
        <a href="/apps/" class="list-group-item">
          <span class="text-primary">Mobile apps</span> &rarr;
        </a>
        <a href="http://news.spokanelibrary.org" class="list-group-item">
          <span class="text-primary">Get library news</span> &rarr;
        </a>
        <a href="/connect/" class="list-group-item">
          <span class="text-primary">Contact the library</span> &rarr;
        </a>

      </div>
    </div>

  </div><!-- /.col -->
</div><!-- /.row -->

<div class="row">
  
  <div class="col-md-6">
    <?php //echo do_shortcode('[spl_carousel auto]'); ?>
    <?php echo do_shortcode('[spl_carousel]'); ?>
  </div><!-- /.col -->

  <div class="col-md-3">
    <div class="panel panel-warning" style="border-left-width:5px;">
      <div class="panel-heading" style="border-radius:0;">
        <i class="glyphicon glyphicon-cloud-download"></i>
        At the digital branch
      </div>
      <div class="panel-body">
        <?php echo do_shortcode('[spl_widget custom-page page=download-widget]'); ?>
        <hr>
        <small>
          <a href="/digital/">Visit the digital branch</a> &rarr;
        </small>
      </div>
    </div><!-- /.panel -->
  </div><!-- /.col -->

  <div class="col-md-3">  
    <div class="panel panel-primary" style="border-left-width:5px;">
      <div class="panel-heading" style="border-radius:0;">
        <i class="glyphicon glyphicon-bullhorn"></i>
        Announcements
      </div>
      <div class="panel-body">
        <?php get_template_part('templates/content', 'page'); ?>
      </div>
    </div><!-- /.panel -->
  </div><!-- /.col -->

  <!--<div class="col-md-3">
    <div class="panel panel-primary" style="border-left-width:5px;">
      <div class="list-group">

        <a href="/account/" class="list-group-item">
          <span class="text-primary">My account</span> &rarr;
        </a>
        <a href="/search/" class="list-group-item">
          <span class="text-primary">Search the catalog</span> &rarr;
        </a>
        <a href="/search/" class="list-group-item">
          <span class="text-primary">Is the library open?</span> &rarr;
        </a>
        <a href="/explore/" class="list-group-item">
          <span class="text-primary">How to find things</span> &rarr;
        </a>
        <a href="/browse/" class="list-group-item">
          <span class="text-primary">Browse popular titles</span> &rarr;
        </a>
        <a href="/apps/" class="list-group-item">
          <span class="text-primary">Mobile apps</span> &rarr;
        </a>
        <a href="http://news.spokanelibrary.org" class="list-group-item">
          <span class="text-primary">Get library news</span> &rarr;
        </a>
        <a href="/connect/" class="list-group-item">
          <span class="text-primary">Contact the library</span> &rarr;
        </a>

      </div>
    </div>

  </div>--><!-- /.col -->

</div><!-- /.row -->

<hr>

<div class="row">

  <div class="col-md-6">
    <h3 class="text-success">
      <i class="glyphicon glyphicon-bullhorn"></i> 
      Library News
    </h3>

    <h2>
      <a href="#">September - Back to School, Digital Literacy, Trivia and Spokane is Reading!</a>
    </h2>

  </div><!-- /.col -->

  <div class="col-md-6">
    asdf
  </div><!-- /.col -->

</div><!-- /.row --> 

<hr>

<div class="row">

  <div class="col-md-6">

    <?php //get_template_part('templates/page', 'header'); ?>

    <?php //get_template_part('templates/content', 'page'); ?>

    <h3 class="text-success">
      <i class="glyphicon glyphicon-calendar"></i> 
      Coming up at your local library
    </h3>

    <p class="text-right text-muted">
      <small>
        <a href="/calendar/">Full events calendar</a> &rarr;
      </small>
    </p>

    <?php echo do_shortcode('[spl_widget calendar-view widget limit=12]'); ?>

    <p class="text-right text-muted">
      <small>
        <a href="/calendar/">Full events calendar</a> &rarr;
      </small>
    </p>

  </div><!-- /.col -->
  
  <div class="col-md-6">
    <div class="hidden-xs">
    <!--
    <div class="panel panel-default" style="border-left-width:5px;">
      <div class="panel-heading">
        <i class="glyphicon glyphicon-comment text-muted"></i>
        <span class="text-muted">Recently posted on the <a href="/blog/">library blog</a> &rarr;</span>
      </div>
      <div class="panel-body">
    -->   
        <h3 class="text-success">
          <i class="glyphicon glyphicon-comment"></i> 
          From the reference desk
        </h3> 
        <p class="text-right text-muted">
          <small>
            <a href="/blog/">Read more on the library blog</a> &rarr;
          </small>
        </p>

        <?php echo do_shortcode('[spl_widget recent-posts]'); ?>
        
        <p>&nbsp;</p>

        <p class="text-right text-muted">
          <small>
            <a href="/blog/">Read more on the library blog</a> &rarr;
          </small>
        </p>
    <!--
      </div>
    </div>
    </div>
  </div>--><!-- /.col -->

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