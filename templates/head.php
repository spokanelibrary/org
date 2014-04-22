<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>

	<link href='http://fonts.googleapis.com/css?family=Adamina' rel='stylesheet' type='text/css'>
	
  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">

 <?php if ( isset($_REQUEST['kiosk']) ) : ?>
    <style>
    html {cursor:none;}
    </style>
<?php endif; ?>

</head>
