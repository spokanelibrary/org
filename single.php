<?php if ( 'staff.spokanelibrary.org' == $_SERVER['SERVER_NAME'] ) :; ?>
  Single post on staff site
<?PHP else: ?>
<?php get_template_part('templates/content', 'single'); ?>
<?php endif;?>
