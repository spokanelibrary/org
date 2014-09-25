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

<p class="hidden-md hidden-lg">
</p>

<div class="row">
  <div class="col-md-12">

    <?php echo do_shortcode('[spl_carousel auto]'); ?>

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
        <span class="text-muted">Recently posted on the <a href="/blog/">library blog</a> &rarr;</span>
      </div>
      <div class="panel-body">
        <?php echo do_shortcode('[spl_widget recent-posts]'); ?>
        <p class="text-right text-muted">
          <small>
            <a href="/blog/">Read more on the library blogho</a> &rarr;
          </small>
        </p>
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