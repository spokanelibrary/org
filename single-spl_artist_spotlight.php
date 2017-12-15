<?php

while (have_posts()) : the_post();

?>
<?php 
$www = get_post_meta(get_the_ID(), 'spl_artist_spotlight_social_www', true);
$email = get_post_meta(get_the_ID(), 'spl_artist_spotlight_email', true);
$shop = get_post_meta(get_the_ID(), 'spl_artist_spotlight_social_shop', true);
$fb = get_post_meta(get_the_ID(), 'spl_artist_spotlight_social_fb', true);
$insta = get_post_meta(get_the_ID(), 'spl_artist_spotlight_social_insta', true);
$twitter = get_post_meta(get_the_ID(), 'spl_artist_spotlight_social_twitter', true);


$date_start = get_post_meta(get_the_ID(), 'spl_artist_spotlight_date_start', true);
$date_end = get_post_meta(get_the_ID(), 'spl_artist_spotlight_date_end', true);
if (strtotime($date_start)) {
  $date_start = date("F j, Y", strtotime($date_start));
}
if (strtotime($date_end)) {
  $date_end = date("F j, Y", strtotime($date_end));
}

?>
  <article <?php post_class(); ?>>
    <header class="page-header">
      <h1 class="">Artist's Spotlight: <?php the_title(); ?></h1>
        <h4><?php echo $date_start;?>
        <?php if ($date_end) : ?>to <?php echo $date_end;?><?php endif; ?>
        at the <?php echo get_post_meta(get_the_ID(), 'spl_artist_spotlight_location', true);?></h4>
    </header>
    <div class="entry-content row">
      <div class="col-md-9">
      <?php the_content(); ?>
      </div>
    </div>
    <div class="entry-content row">
      <div class="col-md-9">
      <?php if ($www) : ?><a href='<?php echo $www;?>'><img style="width:32px;" class="" src="/assets/img/icons/noun_849841_cc.svg">&nbsp;<?php echo $www;?></a><br/><?php endif; ?>
      <?php if ($email) : ?><a href='mailto:<?php echo $email;?>'><img style="width:32px;" class="" src="/assets/img/icons/noun_223455_cc.svg">&nbsp;<?php echo $email;?></a><br/><?php endif; ?>
      <?php if ($shop) : ?><a href='<?php echo $shop;?>'><img style="width:32px;" class="" src="/assets/img/icons/noun_805819_cc.svg">&nbsp;<?php echo $shop;?></a><br/><?php endif; ?>
      <?php if ($fb) : ?><a href='<?php echo $fb;?>'><img style="width:32px;" class="" src="/assets/img/icons/32px/facebook.png">&nbsp;<?php echo $fb;?></a><br/><?php endif; ?>
      <?php if ($insta) : ?><a href='<?php echo $insta;?>'><img style="width:32px;" class="" src="/assets/img/icons/32px/instagram.png">&nbsp;<?php echo $insta;?></a><br/><?php endif; ?>
      <?php if ($twitter) : ?><a href='<?php echo 'https://twitter.com/'.$twitter;?>'><img style="width:32px;" class="" src="/assets/img/icons/32px/twitter.png">&nbsp;<?php echo $twitter;?></a><?php endif; ?>
      <br/>
      <br/>
      <a href="/artist/" class=""> Back to All Current Exhibits</a>
      </div>
    </div>
  </article>
<?php endwhile; ?>
