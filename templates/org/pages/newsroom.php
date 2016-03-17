<div class="row">
	<div class="col-md-7 col-lg-8">
		<h2>Press releases</h2>
		<?php echo do_shortcode('[spl_widget list-files prefix="" icon="file"]'); ?>
	</div><!-- /.col -->
	<div class="col-md-5 col-lg-4">
		<h2>Read our newsletter</h2>
		<div class="panel spl-hero-panel spl-hero-news">
			<h4><i class="glyphicon glyphicon-bullhorn"></i> 
				<?php echo do_shortcode('[spl_mailgun_current format=subtitle default_subtitle="In the current issue"]'); ?>
			</h4>
			<div class="panel-body">
				<?php echo do_shortcode('[spl_mailgun_current format=toc link_button=true excerpt]'); ?>
				<hr>
				<p>
					<b>We’ll keep you informed</b> of new service offerings, as well as upcoming events and activities at your local library.
				</p>
				<p>
					<i class="glyphicon glyphicon-envelope text-muted"></i> <a href="/subscribe/"><b>Subscribe to Library News</b></a> <small class="text-muted">&rarr;</small>
				</p>
				<p>
					<i class="glyphicon glyphicon-list-alt text-muted"></i> <a href="/newsletter/"><b>Read past issues</b></a> <small class="text-muted">&rarr;</small>
				</p>
			</div>
		</div>
	</div><!-- /.col -->
</div><!-- /.row -->

