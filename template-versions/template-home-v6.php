<?php
/*
Template Name: Home Page v6
*/
?>


<div class="row">

  <div class="col-md-3 col-sm-6">
    <div class="spl-tile spl-tile-info" style="padding-left:10px;">
      <h4 class="uppercase">
        <a href="/catalog/"><span class="text-info">Library Catalog</span></a>
      </h4>
      <ul class="list-unstyled">
        <li>
          <h5>
            <a href="/catalog/"><span class="text-info">Search</span></a>
          </h5>
        </li>
        <li>
          <h5>
            <a href="/login/"><span class="text-info">My account</span></a>
          </h5>
        </li>
        <li>
          <h5>
            <a href="/new/"><span class="text-info">Browse new arrivals</span></a>
          </h5>
        </li>
      </ul>
    </div>
  </div><!-- /.col -->

  <div class="col-md-3 col-sm-6">
    <div class="spl-tile spl-tile-primary" style="padding-left:10px;">
      <h4 class="uppercase">
        <a href="/digital/"><span class="text-primary">Digital Branch</span></a>
      </h4>
      <ul class="list-unstyled">
        <li>
          <h5>
            <a href="/download/"><span class="text-primary">Download ebooks, music, magazines, &amp; more</span></a>
          </h5>
        </li>
        <li>
          <h5>
            <a href="/apps/"><span class="text-primary">Library apps</span></a>
          </h5>
        </li>
      </ul>
    </div>
  </div><!-- /.col -->

  <div class="clearfix visible-sm"></div>

  <div class="col-md-3 col-sm-6">
    <div class="spl-tile spl-tile-success" style="padding-left:10px;">
      <h4 class="uppercase">
        <a href="/calendar/"><span class="text-success">Classes &amp; Events</span></a>
      </h4>
      <ul class="list-unstyled">
        <li>
          <h5>
            <a href="/storytime/"><span class="text-success">Storytime schedules</span></a>
          </h5>
        </li>
        <li>
          <h5>
            <a href="/connected-learning/"><span class="text-success">Computers &amp; technology</span></a>
          </h5>
        </li>
        <li>
          <h5>
            <a href="/calendar/"><span class="text-success">Complete calendar of events</span></a>
          </h5>
        </li>
      </ul>
    </div>
  </div><!-- /.col -->

  <div class="col-md-3 col-sm-6">
    <div class="spl-tile spl-tile-warning" style="padding-left:10px;">
      <h4 class="uppercase">
        <a href="/faq/"><span class="text-warning">My Library</span></a>
      </h4>
      <ul class="list-unstyled">
        <li>
          <h5>
            <a href="/branches/"><span class="text-warning">Find a branch</span></a>
          </h5>
        </li>
        <li>
          <h5>
            <a href="/services"><span class="text-warning">Library services</span></a>
          </h5>
        </li>
        <li>
          <h5>
            <a href="/news/"><span class="text-warning">News &amp; updates</span></a>
          </h5>
        </li>
      </ul>
    </div>
  </div><!-- /.col -->

</div><!-- /.row -->

<p class="visible-md visible-lg">&nbsp;</p>

<div class="row">
 
  <div class="col-md-9">
    <div class="spl-tile spl-tile-default" style="padding-left:10px;">
      <?php echo do_shortcode('[spl_widget home-page news]'); ?>
    </div>
  </div><!-- /.col -->

  <div class="col-md-3">
    <div id="spl-hero">
      <?php echo do_shortcode('[spl_widget home-page carousel pause auto calendar]'); ?>
    </div>
  </div><!-- /.col -->
</div><!-- /.row -->

<p class="visible-md visible-lg">&nbsp;</p>

<div class="row">
  <div class="col-sm-4 col-sm-push-8 col-md-3 col-md-push-9">
    <div class="spl-tile spl-tile-boxed">
      <?php echo do_shortcode('[spl_widget home-page carousel pause auto shuffle slides limit=1 slug=alpha]'); ?>  
    </div>
      <?php echo do_shortcode('[spl_widget home-page facebook limit=2]'); ?>
  </div><!-- /.col --> 
  <div class="col-sm-8 col-sm-pull-4 col-md-9 col-md-pull-3">
    
    <?php echo do_shortcode('[spl_widget home-page fiction-queen]'); ?>

    <div class="row">
      <div class="col-md-8 col-md-push-4">
        <?php echo do_shortcode('[spl_widget home-page posts limit=3]'); ?>
      </div><!-- /.col --> 
      <div class="col-md-4 col-md-pull-8">
        <div class="spl-hero-panel spl-hero-success" style="margin-bottom:10px;">
          <h4>Is the library open?</h4>
        </div>
        <?php echo do_shortcode('[spl_widget branch-hours]'); ?>
        
        <p>&nbsp;</p>
        <div class="spl-hero-panel spl-hero-success" style="margin-bottom:10px;">
          <h4>What's new?</h4>
        </div>
        <div class="panel panel-default" style="border-left-width:5px;">
          <a class="btn btn-link" href="/new/">
            <i class="glyphicon glyphicon-plus text-success"></i> New arrivals <small class="text-muted">&rarr;</small></a>
          <br>
          <a class="btn btn-link"  href="/request/">
            <i class="glyphicon glyphicon-thumbs-up text-success"></i> Suggest a new title <small class="text-muted">&rarr;</small></a>
          <br>
          <a class="btn btn-link"  href="/browse/">
            <i class="glyphicon glyphicon-star text-success"></i> Staff picks &amp; popular <small class="text-muted">&rarr;</small></a>
          <div class="panel-body">
            <?php echo do_shortcode('[spl_widget home-page carousel auto pause shuffle browse limit=5]'); ?>
          </div>
        </div>
      </div><!-- /.col -->      
    </div><!-- /.row -->

  </div><!-- /.col -->
       
</div><!-- /.row -->

