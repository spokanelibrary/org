<?php
/*
Template Name: Scrollspy (Child Pages)
*/
?>


<div class="row">

	<div class="col-sm-8">
		<?php get_template_part('templates/page', 'header'); ?>
		<?php get_template_part('templates/content', 'page'); ?>

		<div class="row visible-xs">
			<div class="col-xs-12">
				<div class="panel">
					<?php echo do_shortcode('[spl_tutorial dropdown]'); ?>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12">
				<?php echo do_shortcode('[spl_tutorial content]'); ?>
			</div>
		</div>
	</div>

	<div class="col-sm-4">
		<div class="scrollspy-nav" data-spy="affix" style="z-index:1">
			<div class="panel panel-warning panel-callout panel-callout-warning">
					<h4 class="text-warning">Choose a Topic <small>&rarr;</small></h4>
					<?php echo do_shortcode('[spl_tutorial nav]'); ?>
					<hr />
					<div class="text-right">
						<p>
							<a class="btn btn-sm btn-warning" href="#top">Top <small class="glyphicon glyphicon-arrow-up"></small></a>
						</p>
					</div>
			</div>
		</div>
	</div>

</div>
