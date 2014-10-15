<?php
/*
Template Name: Beta Home Page
*/
?>
<div class="page-header">
  <h1>
    It's time for something new!
  </h1>
</div>

<div class="row">
  <div class="col-md-6">
  
    <p class="lead">
      <b>
      We are transitioning Spokane Public Library to a new website.
      During this time a few pages, including <a href="/contact/">contact us</a>, <a href="/request/">request a title</a>, and <a href="/connect/">other interactive forms</a>, are only available here on beta.spokanelibrary.org.
      </b>
    </p>

    <blockquote>
      <p>
        All other pages are still located on <a href="http://www.spokanelibrary.org">our old website</a>.
        We understand this may be somewhat confusing, and we really appreciate your patience during this transition period.
      </p>

    </blockquote>
    
  </div><!-- /.col -->
  <div class="col-md-6">
    <p>
      <img class="img-responsive img-rounded" alt="Spokane Public Library Bookmobile" src="/assets/img/jpg/spl-bookmobile-1.jpg">
    </p>
  </div><!-- /.col -->
</div><!-- /.row -->

<p>
  <a class="btn btn-lg btn-block btn-primary" href="http://www.spokanelibrary.org">
    <span class="visible-xs">Take me to the old website &rarr;</span>
    <span class="hidden-xs">Please take me back to the old website &rarr;</span>
  </a>
</p>

<div class="row" style="padding-top: 20px; border-width: 4px 0; border-style: solid; border-color: rgb(100,150,75);">
  <p>&nbsp;</p>
</p>

<div class="row">

  <div class="col-md-6">

    <h3 class="text-success">
      <i class="glyphicon glyphicon-calendar"></i> 
      Coming up at your local library
    </h3>

    <p class="text-right">
      <a class="btn btn-default btn-sm" href="/calendar/">Full events calendar &rarr;</a>
    </p>

    <?php echo do_shortcode('[spl_widget calendar-view widget limit=12]'); ?>

    <p class="text-right">
      <a class="btn btn-default btn-sm" href="/calendar/">Full events calendar &rarr;</a>
    </p>

  </div><!-- /.col -->
  
  <div class="col-md-6">
    <div class="hidden-xs">

        <h3 class="text-success">
          <i class="glyphicon glyphicon-comment"></i> 
          From the reference desk
        </h3> 

        <p class="text-right">
          <a class="btn btn-default btn-sm" href="/blog/">More on the library blog &rarr;</a>
        </p>

        <?php echo do_shortcode('[spl_widget recent-posts]'); ?>
        
        <p>&nbsp;</p>

        <p class="text-right">
          <a class="btn btn-default btn-sm" href="/blog/">More on the library blog &rarr;</a>
        </p>

</div><!-- /.row -->


