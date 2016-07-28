<div class="row">
	<div class="col-md-7 col-lg-8">
		<!--
		<img class="img-responsive img-rounded pull-right" style="width:140px;" src="/assets/img/jpg/Teen_card-300x228.jpg">
		-->
		<p class="lead">
			Stay current with library news and events. 
		</p>
		<h2 class="text-center">Follow us!</h2>
		<p class="text-center">
			<a class="btn btn-lg btn-default"
		      href="https://facebook.com/spokanelibrary" 
		      title=""><img style="width:16px;" class="" src="/assets/img/icons/32px/facebook.png"></a>
    		&nbsp;
    		<a class="btn btn-lg btn-default"
		      href="https://twitter.com/spokanelibrary" 
		      title=""><img style="width:16px;" class="" src="/assets/img/icons/32px/twitter.png"></a>
		    &nbsp;
		    <a class="btn btn-lg btn-default"
		      href="https://instagram.com/spokanepubliclibrary" 
		      title=""><img style="width:16px;" class="" src="/assets/img/icons/32px/instagram.png"></a>
		</p>
		<!--
		<hr>
		<p>
			For the very latest, please follow us on <a href="https://facebook.com/spokanelibrary">facebook</a>, <a href="https://twitter.com/spokanelibrary">twitter</a>, and <a href="https://instagram.com/spokanepubliclibrary">instagram</a>!
			You can also <a href="/blog/">read our blog</a>.
		</p>
		-->
		
	</div><!-- /.col -->
	<div class="col-md-5 col-lg-4">
		<h2 style="margin-top:0;">In the media</h2>
		<p>
			Stories and videos featuring the library.
		</p>
		<p>
			<a class="btn btn-primary btn-block" 
				href="/press/"><i class="glyphicon glyphicon-film"></i> See videos & media mentions &rarr;</a>
		</p>
	</div><!-- /.col -->
</div><!-- /.row -->


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

