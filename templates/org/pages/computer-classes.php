<p>
	<a class="btn btn-block btn-warning" href="#upcoming">
		<i class="glyphicon glyphicon-calendar"></i> 
		Schedule of <b>all upcoming workshops</b> <span class="caret"></span></a>
</p>

<div class="row">
	<div class="col-md-6">
		<div class="alert alert-success">
			<h4>Technology resources at the library</h4>
			<p>
				These workshops are part of our <b>Connected Learning</b> initiative.
			</p>
			<p>
				<a class="btn btn-block btn-success" href="/connected-learning/">More about <b>Connected Learning</b> &rarr;</a>
			</p>
		</div>
	</div><!-- /.col -->
	<div class="col-md-6">
		<div class="alert alert-info">
			<h4>Prefer to learn at your own pace?</h4>
			<p>
				We also offer access to high-quality online technology training courses. 
			</p>
			<p>
				<a class="btn btn-block btn-info" 
						href="/tech/">More about <b>online technology courses</b> &rarr;</a>
			</p>
		</div>
	</div><!-- /.col -->
</div><!-- /.row -->


<?php echo do_shortcode('[spl_subpages_links titlebar="Find a workshop at your library" btnclass=success btnicon=time btntext="Find dates & times"]'); ?>

<p id="upcoming">&nbsp;</p>

<div class="panel panel-warning">
	<div class="panel-heading">
		<h3 class="panel-title">
			<i class="glyphicon glyphicon-calendar"></i>
			All upcoming computer &amp; technology workshops
		</h3>
	</div><!-- /.panel-heading -->
	<div class="panel-body">
		<?php echo do_shortcode('[spl_widget calendar-view computer condensed]'); ?>
	</div><!-- /.panel-body -->
</div><!-- /.panel -->
