<?php
/*
Template Name: Comments
*/
?>


<div class="row">

	<div class="col-sm-12">
		<?php get_template_part('templates/page', 'header'); ?>
		<?php get_template_part('templates/content', 'page'); ?>


		<?php comments_template('/templates/comments.php'); ?>
	</div>

</div>