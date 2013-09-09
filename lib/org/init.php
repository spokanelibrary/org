<?php
	add_action( 'wp_head', create_function( '',  
	   'echo \'<!--[if lt IE 9]><script src="'.get_template_directory_uri() . '/assets/js/vendor/respond.min.js"></script><![endif]-->\';'
	) );

  // Register wp_nav_menu() menus (http://codex.wordpress.org/Function_Reference/register_nav_menus)
  /*
  register_nav_menus(array(
    'common_navigation' => __('Common Navigation', 'org'),
    'connect_navigation' => __('Connect Navigation', 'org'),
  ));
  */
?>