<?php

  // Register wp_nav_menu() menus (http://codex.wordpress.org/Function_Reference/register_nav_menus)
  register_nav_menus(array(
    'common_navigation' => __('Common Navigation', 'org'),
    'connect_navigation' => __('Connect Navigation', 'org'),
  ));

?>