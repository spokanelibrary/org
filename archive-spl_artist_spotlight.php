<?php
    error_reporting(E_ALL);
  ini_set('display_errors', 1);
?>
<header class="page-header"><h1>Artist Spotlights</h1></header>
<div class="container">
  <div class="row">
    <div class="col col-md-9">
<p>
The Spokane Public Library exhibits regional artwork
and features innovative artistic expressions unique to the Inland Northwest.
The library also features a permanent collection of artwork in the Northwest Room,
including Catholic Ladders and panoramic images of Spokane.
</p>
<p>
<!-- For information on displaying your artwork, contact 509.123.1234 --><!--  or submit this artist inquiry form -->.
</p>
    </div>
    <div class="col col-md-3">
    <a href="/northwest-room/exhibits/"><img src="/wordpress/wp-content/uploads/cal_northwest.png" /></a>
    </div>
  </div>
</div>
<h2>Current Exhibits</h2>
  <div class="container">
<?php

$today = date("Y-m-d");
//echo $today;

$query_args = array(
  'meta_query' => array(
    array(
      'key'     => 'spl_artist_spotlight_date_start',
      'value'   => $today,
      'compare' => '<=',
      'type' => 'DATE'
    ),
    array(
        'key'     => 'spl_artist_spotlight_date_end',
        'value'   => $today,
        'compare' => '>=',
        'type' => 'DATE'
      ),
  ),
  'posts_per_page' => 15,
  'post_type'      => 'spl_artist_spotlight'
);

query_posts( $query_args );
//echo $GLOBALS['wp_query']->request; 

while (have_posts()) : the_post(); ?>
<?php 
$fb = get_post_meta(get_the_ID(), 'spl_artist_spotlight_social_fb', true);
$insta = get_post_meta(get_the_ID(), 'spl_artist_spotlight_social_insta', true);
$twitter = get_post_meta(get_the_ID(), 'spl_artist_spotlight_social_twitter', true);
$date_start = get_post_meta(get_the_ID(), 'spl_artist_spotlight_date_start', true);
$date_end = get_post_meta(get_the_ID(), 'spl_artist_spotlight_date_end', true);
$feature = get_post_meta(get_the_ID(), 'spl_artist_spotlight_feature', true);

if (strtotime($date_start)) {
  $date_start = date("F j, Y", strtotime($date_start));
}
if (strtotime($date_end)) {
  $date_end = date("F j, Y", strtotime($date_end));
}

?>
   <div class="row" style="margin-bottom:20px;">
    <div class="entry-content col-md-2">
        <?php if ($feature) : ?><img src="<?php echo $feature;?>" class="img-responsive"/><?php endif; ?>
    </div>
    <div class="col-md-6">
    <article <?php post_class(); ?>>
      <header class="page-header ">
        <h4><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h4>
        <?php echo get_post_meta(get_the_ID(), 'spl_artist_spotlight_location', true);?><br/>
        <?php echo $date_start;?>
        <?php if ($date_end) : ?>&mdash; <?php echo $date_end;?><?php endif; ?>
      </header>
      <!-- <div>
        <?php //the_excerpt(); ?>
      </div> -->
    </div>
  </article>
  </div>
<?php endwhile; ?>
</div>
<br/>
<h2>Past Exhibits</h2>
<div class="container">
  <div class="col col-md-3 col-sm-4 col-xs-6">
    <h4>August 2017</h4>
    <ul class="list-unstyled">
      <li><a href="/artist/amia/">Amia</a></li>
      <li><a href="/artist/peter-foglesong">Peter Foglesong</a></li>
      <li><a href="/artist/mehki-fletcher">Mehki fletcher</a></li>
      <li><a href="/artist/same-white">Sam White</a></li>
      <li><a href="/artist/lincoln-wallbank/">Lincoln Wallbank</a></li>
      <li><a href="/artist/diane-zahner/">Diane Zahner</a></li>
    </ul>
  </div>
  <div class="col col-md-3 col-sm-4 col-xs-6">
    <h4>July 2017</h4>
    <ul class="list-unstyled">
      <li><a href="/artist/loralee-silverthorne/">Loralee Silverthorne</a></li>
      <li><a href="/artist/connie-janney">Connie Janney</a></li>
      <li><a href="/artist/conrad-bagley">Conrad Bagley</a></li>
      <li><a href="/artist/candy-huddleston">Candy Huddleston</a></li>
      <!-- <li><a href="/artist/lincoln-wallbank/">Lincoln Wallbank</a></li> -->
      <!-- <li><a href="/artist/coming-to-america-seven-inland-northwest-immigrants-share-their-stories/">Coming to America: Seven Inland Northwest Immigrants Share Their Stories.</a></li> -->
    </ul>
  </div>
</div>
