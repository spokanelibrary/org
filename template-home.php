<?php
/*
Template Name: Home Page
*/
?>


<div class="row">
  <div class="col-md-6">
    <?php echo do_shortcode('[spl_widget search-catalog]'); ?>
  </div><!-- /.col -->
  <div class="col-md-6">
    <div class="hidden-xs">
      <?php echo do_shortcode('[spl_widget login-form]'); ?>
    </div>
  </div><!-- /.col -->
</div><!-- /.row -->

<p class="hidden-md hidden-lg">
</p>

<div class="row">
  <div class="col-md-6">

    <?php echo do_shortcode('[spl_carousel auto]'); ?>

  </div><!-- /.col -->
  <div class="col-md-3">
    <div class="panel panel-warning" style="border-left-width:5px;">
      <div class="panel-heading">
        <i class="glyphicon glyphicon-cloud-download"></i>
        At the digital branch
      </div>
      <div class="panel-body">
        <?php echo do_shortcode('[spl_widget custom-page page=download-widget]'); ?>
        <hr>
        <small>
          <a href="/digital/">More research and learning tools</a> &rarr;
        </small>
      </div>
    </div><!-- /.panel -->

    

  </div><!-- /.col -->
  <div class="col-md-3">
    <div class="panel panel-primary" style="border-left-width:5px;">
      <div class="list-group">
        <!--
        <a href="/chat/" class="list-group-item active">
          <i class="glyphicon glyphicon-comment"></i>
          Live chat
        </a>
        -->
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
        <!--
        <a href="/faq/" class="list-group-item">
          Questions &amp; Answers
        </a>
        -->
      </div>
    </div>

  </div><!-- /.col -->

</div><!-- /.row -->

<div class="row">

  <div class="col-md-6">

    <?php //get_template_part('templates/page', 'header'); ?>

    <?php get_template_part('templates/content', 'page'); ?>

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
    <div class="panel panel-default" style="border-left-width:5px;">
      <div class="panel-heading">
        <i class="glyphicon glyphicon-comment text-muted"></i>
        <span class="text-muted">Recently posted on the <a href="/blog/">library blog</a></span>
      </div>
      <div class="panel-body">
        <?php echo do_shortcode('[spl_widget recent-posts]'); ?>
      </div>
    </div>
    </div>
  </div><!-- /.col -->

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