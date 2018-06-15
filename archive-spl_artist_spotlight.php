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
    <h4>May 2018</h4>
    <ul class="list-unstyled">
      <li><a href="/artist/vicki-west/">Vicki West</a></li>
      <li><a href="/artist/olivia-inaba-waterman">Olivia Inaba Waterman</a></li>
      <li><a href="/artist/jane-beaven/">Jane Beaven</a></li>
    </ul>
  </div>
  <div class="col col-md-3 col-sm-4 col-xs-6">
    <h4>April 2018</h4>
    <ul class="list-unstyled">
      <li><a href="/artist/donald-sewell/">Donald Sewell</a></li>
      <li><a href="/artist/sheila-johnston">Sheila Johnston</a></li>
      <li><a href="/artist/karen-kemp">Karen Kemp</a></li>
      <li><a href="/artist/emily-flynn/">Emily Flynn</a></li>
    </ul>
  </div>
  <div class="col col-md-3 col-sm-4 col-xs-6">
    <h4>March 2018</h4>
    <ul class="list-unstyled">
      <li><a href="/artist/alicia-lauth /">Alicia Lauth</a></li>
      <li><a href="/artist/christie-pierce">Christie Pierce</a></li>
      <li><a href="/artist/john-bettinger">John Bettinger</a></li>
      <li><a href="/artist/lr-montgomery/">LR Montgomery</a></li>
    </ul>
  </div>
  <div class="col col-md-3 col-sm-4 col-xs-6">
    <h4>February 2018</h4>
    <ul class="list-unstyled">
      <li><a href="/artist/amber-hoit/">Amber Hoit</a></li>
      <li><a href="/artist/asia-porter">Asia Porter</a></li>
      <li><a href="/artist/Jason-corcoran">Jason Corcoran</a></li>
      <li><a href="/artist/robert-lloyd">Robert Lloyd</a></li>
      <li><a href="/artist/tracy-poindexter-canton">Tracy Poindexter Canton</a></li>
      <li><a href="/artist/may-kytonen/">May Kytonen</a></li>
    </ul>
  </div>
  <div class="col col-md-3 col-sm-4 col-xs-6">
    <h4>January 2018</h4>
    <ul class="list-unstyled">
      <li><a href="/artist/amia/">Amia</a></li>
      <li><a href="/artist/candy-huddleston">Candy Huddleston</a></li>
      <li><a href="/artist/jason-corcoran">Jason Corcoran</a></li>
      <li><a href="/artist/larry-bergman">Larry Bergman</a></li>
      <li><a href="/artist/lincoln-wallbank/">Lincoln Wallbank</a></li>
      <li><a href="/artist/living-with-conviction/">Living with Conviction</a></li>
    </ul>
  </div>
</div>


<div class="container">
  <div class="col col-md-3 col-sm-4 col-xs-6">
    <h4>December 2017</h4>
    <ul class="list-unstyled">
      <li><a href="/artist/donald-sewell/">Donald Sewell</a></li>
      <li><a href="/artist/loralee-silverthorne/">Loralee Silverthorne</a></li>
    </ul>
  </div>
  <div class="col col-md-3 col-sm-4 col-xs-6">
    <h4>November 2017</h4>
    <ul class="list-unstyled">
      <li><a href="/artist/charles-gurche/">Charles Gurche</a></li>
      <li><a href="/artist/jeff-ferguson">Jeff Ferguson</a></li>
      <li><a href="/artist/stefanie-marchand-reuben">Stefanie Marchand Reuben</a></li>
      <li><a href="/artist/robert-charloe/">Robert Charloe/</a></li>
    </ul>
  </div>
  <div class="col col-md-3 col-sm-4 col-xs-6">
    <h4>October 2017</h4>
    <ul class="list-unstyled">
      <li><a href="/artist/carol-schmauder/">Carol Schmauder</a></li>
      <li><a href="/artist/bensons-mobley-and-rossi">Bensons, Mobley, and Rossi</a></li>
      <li><a href="/artist/christie-pierce">Christie Pierce</a></li>
      <li><a href="/artist/andrea-van-voorhis">Andrea Van Voorhis</a></li>
      <!-- <li><a href="/artist/miriam-wilde">Miriam Wilde</a></li> -->
      <!-- <li><a href="/artist/nancy-huck/">Nancy Huck</a></li> -->
    </ul>
  </div>
  <div class="col col-md-3 col-sm-4 col-xs-6">
    <h4>September 2017</h4>
    <ul class="list-unstyled">
      <li><a href="/artist/ellen-blaschke/">Ellen Blaschke</a></li>
      <li><a href="/artist/nancy-huck">Nancy Huck</a></li>
      <li><a href="/artist/fred-hoefler">Fred Hoefler</a></li>
      <li><a href="/artist/carol-schmauder">Carol Schmauder</a></li>
      <li><a href="/artist/tannea-zollinger/">Tannea Zollinger</a></li>
    </ul>
  </div>
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
