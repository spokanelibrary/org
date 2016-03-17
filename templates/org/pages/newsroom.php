<div class="row">
	<div class="col-md-8">
		<h3>Press releases</h3>
		<?php echo do_shortcode('[spl_widget list-files prefix="" icon="file"]'); ?>
	</div><!-- /.col -->
	<div class="col-md-4">
		<h3>Read our newsletter</h3>
		<div class="panel spl-hero-panel spl-hero-news">
			<h4><i class="glyphicon glyphicon-bullhorn"></i> 
				<?php echo do_shortcode('[spl_mailgun_current format=subtitle default_subtitle="In the current issue"]'); ?>
			</h4>
			<div class="panel-body">
				<?php echo do_shortcode('[spl_mailgun_current format=toc link_button=true excerpt]'); ?>
				<hr>
				<p>
					<b>We’ll keep you informed</b> of new service offerings, as well as upcoming events and activities at your local library.
					<br>
					<a href="/subscribe/"><i class="glyphicon glyphicon-envelope"></i> Subscribe to Library News →</a>
					<br>
					<a href="/newsletter/"><i class="glyphicon glyphicon-list-alt"></i> Read past issues →</a>
				</p>
			</div>
		</div>
	</div><!-- /.col -->
</div><!-- /.row -->

