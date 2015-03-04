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
  <div class="col-sm-4 col-sm-push-8 col-md-3 col-md-push-9">
    <div class="spl-tile spl-tile-boxed">
      <?php echo do_shortcode('[spl_widget home-page carousel pause auto shuffle slides limit=3 slug=alpha]'); ?>  
    </div>
      <?php echo do_shortcode('[spl_widget home-page facebook limit=2]'); ?>
  </div><!-- /.col --> 
  <div class="col-sm-8 col-sm-pull-4 col-md-9 col-md-pull-3">
    <div class="spl-tile spl-tile-boxed">
      <div class="spl-tile-body">
        <h4 class="text-warning">The Fiction Queen <small>and her subjects</small></h4>
        <h6 class="text-success uppercase">Reviews and recomendations from Spokane Public Library's <b>Susan Creed</b></h6>
      
        <div class="serif">
          <img style="width:120px; height:120px; margin-right:10px; margin-bottom:6px;" class="pull-left" src="/assets/img/promos/spl-fiction-queen.jpg">
          <h4>Emperors &amp; ninjas in 1920's Japan</h4>
          <p>
            Mary Russell and Sherlock Holmes meet a young ninja in their latest suspense novel set in Japan, <a href="/bib/553606"><i>Dreaming Spies</i></a> by Laurie King. 
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
      <div class="col-md-8 col-md-push-4">
        <?php echo do_shortcode('[spl_widget home-page shuffle posts limit=3]'); ?>
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
        <p>
          <a class="btn btn-link" href="/new/">
            <i class="glyphicon glyphicon-plus"></i> New arrivals</a>
          <br>
          <a class="btn btn-link"  href="/request/">
            <i class="glyphicon glyphicon-thumbs-up"></i> Suggest a new title</a>
          <br>
          <a class="btn btn-link"  href="/browse/">
            <i class="glyphicon glyphicon-star"></i> Staff picks &amp; popular</a>
        </p>
        <?php echo do_shortcode('[spl_widget home-page carousel auto pause shuffle browse limit=5]'); ?>
      </div><!-- /.col -->      
    </div><!-- /.row -->

  </div><!-- /.col -->
       
</div><!-- /.row -->
  

