<?php
/*
Template Name: Alpha Home Page
*/
?>

<?php 
  function get_alpha_panel($filler='&nbsp;', $h=140) {
    $html = '';
    $html .= '
              <div class="panel panel-default">
              <div class="panel-body">
                <div style="height:'.$h.'px;">
                '.$filler.'
                </div>
              </div>
              </div>
    ';

    return $html;
  }
?>

<div class="row">
  <!--
  <div class="col-md-3 col-md-push-9">
  -->
    <?php //echo do_shortcode('[spl_widget home-page facebook]'); ?>
    <!-- digital -->
    <!--
    <div class="spl-tile">
      <div class="spl-hero-panel spl-hero-primary" style="margin-bottom:6px;">
        <a href="/digital/" class="spl-hero-link">
          <h4 class="text-center normal">
            <i class="glyphicon glyphicon-cloud-download"></i>
            Digital Branch
          </h4>        
        </a>
      </div>
      <h6 class="text-center normal uppercase text-primary"><span class="hidden-md">Download </span>eBooks, music &amp; more</h6>
    </div>
    -->

    <!-- calendar -->
    <!--
    <div class="spl-tile">
      <div class="spl-hero-panel spl-hero-success"  style="margin-bottom:6px;">
        <a href="/calendar/" class="spl-hero-link">
          <h4 class="text-center normal">
            <i class="glyphicon glyphicon-calendar"></i>
            Library Calendar
          </h4>        
        </a>
      </div>
      <h6 class="text-center normal uppercase text-success">Classes, events &amp; storytimes</h6>
    </div>
    -->

  <!--</div>--><!-- /.col -->
  <div class="col-md-9">
    
      <div class="spl-hero-panel spl-hero-default">
      <?php echo do_shortcode('[spl_widget home-page news]'); ?>
      </div>
  </div><!-- /.col -->

  <div class="col-md-3">
    <?php echo do_shortcode('[spl_widget home-page carousel pause auto calendar]'); ?>
  </div><!-- /.col -->
</div><!-- /.row -->

<div class="row">
  <div class="col-sm-7">
    <?php echo do_shortcode('[spl_widget home-page promo=tech]'); ?>
  </div><!-- /.col -->  
  <div class="col-sm-5">
    <?php echo do_shortcode('[spl_widget home-page promo=yearbooks]'); ?>
  </div><!-- /.col -->        
</div><!-- /.row -->

<div class="row">
  <div class="col-sm-9">
    <div class="spl-tile">
      <div class="spl-tile-boxed spl-tile-body">
        <h4 class="text-warning">The Fiction Queen <small>and her subjects</small></h4>
        <h6 class="text-success uppercase">Reviews and recomendations from Spokane Public Library's <b>Susan Creed</b></h6>
      
        <div class="serif">
          <img style="width:120px; height:120px; margin-right:10px; margin-bottom:6px;" class="pull-left" src="/assets/img/promos/spl-fiction-queen.jpg">
          <h4>Emperors &amp; ninjas in 1920's Japan</h4>
          <p>
            I’m thoroughly enjoying the latest Mary Russell and Sherlock Holmes suspense novel, <a href="#"><i>Dreaming Spies</i></a> by Laurie King. 
            If you’re not familiar with this series you’ll want to start with <a href="#"><i>The Beekeeper’s Apprentice</i></a>, in which the young Miss Russell meets the retired Mr. Holmes. 
          </p>
          <p>
            Reading this book has reminded me of one of my favorite fantasy series set in Japan and also involving a young ninja:
            Author Lian Hearn begins his trilogy with <a href="#"><i>Across the Nightingale Floor</i></a>.
          </p>
        </div>
      </div>
    </div>
    <?php echo do_shortcode('[spl_widget home-page posts limit=3]'); ?>
  </div><!-- /.col -->
  <div class="col-sm-3">
    <div class="spl-tile spl-tile-boxed">
      <?php echo do_shortcode('[spl_widget home-page carousel pause auto shuffle slides limit=3]'); ?>  
    </div>
    <div class="spl-tile" style="background:#f5f5f5; color:#555;">
      <div class="spl-tile-body">
        <?php echo do_shortcode('[spl_widget home-page facebook]'); ?>
      </div>
    </div>
  </div><!-- /.col -->      
</div><!-- /.row -->
  

