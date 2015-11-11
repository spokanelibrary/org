<?php
/*
Template Name: Comments
*/
?>


<div class="row">

	<div class="col-sm-12">
		<?php get_template_part('templates/content', 'page'); ?>
		
		<div class="panel spl-hero-intranet spl-hero-brand-blue-a">
			<div class="panel-heading">
				<h4><?php the_title(); ?></h4>
			</div>
			<div class="panel-body">
				<div class="spl-staff-comments">
					<?php comments_template('/templates/comments.php'); ?>
				</div>
			</div>
		</div>

	</div>

</div>