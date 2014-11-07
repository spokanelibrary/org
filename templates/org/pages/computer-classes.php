<div class="alert alert-info">
	Our classes and learning labs are free and open to the public. 
	You do not need a library card, however we do recommend signing up in advance. 
	Registration is required when noted.
</div>

<h4>Please call 444-5336 or the hosting <a href="/branches">library branch</a> with questions.</h4>

<a class="btn btn-block btn-warning" href="#upcoming">
	<i class="glyphicon glyphicon-calendar"></i> 
	Schedule of all upcoming classes</a>

<?php echo do_shortcode('[spl_subpages_links btnclass=success btnicon=time btntext="Find dates & times"]'; ?>

<p id="upcoming">&nbsp;</p>

<div class="panel panel-warning">
	<div class="panel-heading">
		<h3 class="panel-title">
			<i class="glyphicon glyphicon-calendar"></i>
			All upcoming computer &amp; technology classes
		</h3>
	</div><!-- /.panel-heading -->
	<div class="panel-body">
		<?php echo do_shortcode('[spl_widget calendar-view computer condensed]'); ?>
	</div><!-- /.panel-body -->
</div><!-- /.panel -->
