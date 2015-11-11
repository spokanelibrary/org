<?php
/*
Template Name: Comments
*/
?>


<div class="row">

	<div class="col-sm-12">

		<div class="panel spl-hero-intranet spl-hero-brand-blue-f">
			<div class="panel-heading">
				<h4><?php the_title(); ?></h4>
			</div>
			<div class="panel-body">
				<?php get_template_part('templates/content', 'page'); ?>

				<div class="spl-staff-comments">
					<?php comments_template('/templates/comments.php'); ?>
				</div>
			</div>
		</div>

	</div>

</div>