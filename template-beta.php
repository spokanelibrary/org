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
      During this time a few pages, including <a href="/contact/">contact us</a>, <a href="/request/">request a title</a>, and <a href="/blog/">our blog</a>, are only available here on beta.spokanelibrary.org.
      </b>
    </p>

    <blockquote>
      <p>
        All other pages are still located on <a href="http://www.spokanelibrary.org"><b>our old website</b></a>.
        We understand this is somewhat confusing, and we really appreciate your patience during this transition period.
      </p>

    </blockquote>

    <!--
    <p>
      <a class="btn btn-block btn-primary" href="http://www.spokanelibrary.org">
        <span class="visible-xs">Take me to the old website &rarr;</span>
        <span class="hidden-xs">Please take me back to the old website &rarr;</span>
      </a>
    </p>
    -->
    
  </div><!-- /.col -->
  <div class="col-md-6">
    <p>
      <img class="img-responsive img-rounded" alt="Spokane Public Library Bookmobile" src="/assets/img/jpg/spl-bookmobile-1.jpg">
    </p>
  </div><!-- /.col -->
</div><!-- /.row -->




<div class="row" style="padding-top: 20px; border-width: 4px 0; border-style: solid; border-color: rgb(100,150,75);">
  <div class="col-md-6">
    <!--
    <h3 class="text-success">
      <i class="glyphicon glyphicon-pencil"></i> 
      Library News
    </h3>
    -->
    <img class="img-responsive img-rounded pull-right hidden-xs" src="http://news.spokanelibrary.org/wordpress/media/Create_Spokane_Logo2-158x160.jpg">
    
    <h2 class="clearfix">
      <a href="http://news.spokanelibrary.org/newsletter/createspokane-trivia-spokane-is-reading-and-a-book-sale/">#CreateSpokane, Trivia, Spokane is Reading and a Book Sale!</a>
    </h2>
    
    <p class="text-right">
      <a class="btn btn-default" href="http://news.spokanelibrary.org/">Read Library News &rarr;</a>
    </p>

  </div><!-- /.col -->
  <div class="col-md-6">

    <div class="panel panel-success" style="border-left-width:5px;">
      <div class="panel-heading" style="border-radius:0;">
        <!--<i class="glyphicon glyphicon-plus-sign"></i>-->
        <h4 class="panel-title">Also in this issue&hellip;</h4>
      </div>
      <div class="panel-body">
        <ul class="" style="padding-left:14px;">
          <li><a href="http://news.spokanelibrary.org/6-simple-and-fun-ways-to-support-the-library/">6 Simple (and Fun) Ways to Support the Library!</a></li>
          <li><a href="http://news.spokanelibrary.org/ueda-award/">Award Nomination for the Library</a></li>
          <li><a href="http://news.spokanelibrary.org/what-do-you-love-about-spokane/">What do you love about Spokane?</a></li>
          <li><a href="http://news.spokanelibrary.org/dewey-sir/">Discovering Dewey in Swamplandia!</a></li>
          <li><a href="http://news.spokanelibrary.org/5-songs-spooky/">Five Spooky Songs</a></li>
          <li><a href="http://news.spokanelibrary.org/annual_report-13/">A Look Back with 2013 Number Wrap-up</a></li>
        </ul>
      </div>
    </div><!-- /.panel -->

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


