<?php if ( 'staff.spokanelibrary.org' == $_SERVER['SERVER_NAME'] ) :; ?>
  <?php get_template_part('templates/content-staff', 'single'); ?>
<?PHP else: ?>
	<?php get_template_part('templates/content', 'single'); ?>
<?php endif;?>
