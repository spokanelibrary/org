
<p>
	<a class="btn btn-block btn-warning" href="#upcoming">
		<i class="glyphicon glyphicon-calendar"></i> 
		Schedule of all upcoming workshops <span class="caret"></span></a>
</p>

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

<?php echo do_shortcode('[spl_subpages_links titlebar="Connected Learning" btnclass=success btnicon=time btntext="Find dates & times"]'); ?>

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
