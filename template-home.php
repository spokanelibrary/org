<?php
/*
Template Name: Home Page
*/
?>


<div class="row">
 
  <div class="col-md-9">
    <div class="spl-tile spl-tile-primary" style="padding-left:10px;">
      <?php echo do_shortcode('[spl_widget home-page news]'); ?>
    </div>
  </div><!-- /.col -->

  <div class="col-md-3">
    <div id="spl-hero">
      <?php echo do_shortcode('[spl_widget home-page carousel pause auto calendar]'); ?>
    </div>
  </div><!-- /.col -->
</div><!-- /.row -->

<div class="row">
  <div class="col-sm-6 col-md-7">
    <?php echo do_shortcode('[spl_widget home-page promo=tech]'); ?>
  </div><!-- /.col -->  
  <div class="col-sm-6 col-md-5">
    <?php echo do_shortcode('[spl_widget home-page promo=yearbooks]'); ?>
  </div><!-- /.col -->        
</div><!-- /.row -->

<div class="row">
  <div class="col-sm-6 col-sm-push-6 col-md-3 col-md-push-9">
    <div class="spl-hero-panel spl-hero-success" style="color:#fff;">
      <?php echo do_shortcode('[spl_widget home-page carousel pause auto shuffle slides limit=3]'); ?>  
    </div>
      <?php echo do_shortcode('[spl_widget home-page facebook limit=2]'); ?>
  </div><!-- /.col --> 
  <div class="col-sm-6 col-sm-pull-6 col-md-9 col-md-pull-3">
    <div class="spl-tile spl-tile-boxed">
      <div class="spl-tile-body">
        <h4 class="text-warning">The Fiction Queen <small>and her subjects</small></h4>
        <h6 class="text-success uppercase">Reviews and recomendations from Spokane Public Library's <b>Susan Creed</b></h6>
      
        <div class="serif">
          <img style="width:120px; height:120px; margin-right:10px; margin-bottom:6px;" class="pull-left" src="/assets/img/promos/spl-fiction-queen.jpg">
          <h4>Emperors &amp; ninjas in 1920's Japan</h4>
          <p>
            I’m thoroughly enjoying the latest Mary Russell and Sherlock Holmes suspense novel, <a href="/bib/553606"><i>Dreaming Spies</i></a> by Laurie King. 
            If you’re not familiar with this series you’ll want to start with <a href="/bib/65255"><i>The Beekeeper’s Apprentice</i></a>, in which the young Miss Russell meets the retired Mr. Holmes. 
          </p>
          <p>
            Reading this book has reminded me of one of my favorite fantasy series set in Japan and also involving a young ninja:
            Author Lian Hearn begins his trilogy with <a href="/bib/537347"><i>Across the Nightingale Floor</i></a>.
          </p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <?php echo do_shortcode('[spl_widget home-page auto pause posts limit=3]'); ?>
      </div><!-- /.col -->      
    </div><!-- /.row -->

  </div><!-- /.col -->
       
</div><!-- /.row -->

