<div class="row">
	<div class="col-md-8">
		<h3>Press Releases</h3>
		<?php echo do_shortcode('[spl_widget list-files prefix="" icon="file"]'); ?>
	</div><!-- /.col -->
	<div class="col-md-4">
		<h3>Read Library News</h3>
		<div class="panel spl-hero-panel spl-hero-news">
			<h4><i class="glyphicon glyphicon-bullhorn"></i> 
				<?php echo do_shortcode('[spl_mailgun_current format=subtitle default_subtitle="In the current issue"]'); ?>
			</h4>
			<div class="panel-body">
				<?php echo do_shortcode('[spl_mailgun_current format=toc link_button=true excerpt]'); ?>
			</div>
		</div>
	</div><!-- /.col -->
</div><!-- /.row -->

