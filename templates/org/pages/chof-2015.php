<?php 
	function get_chof_panel($title=null, $class='', $img=null) {
		if ( $img ) {
			$img = '<img class="img-responsive" src="'.$img.'">';

			$link = '
						<div style="background:#fff; border-left:1px solid #ccc; border-bottom:1px solid #ccc; position:absolute; top:0; right:0;">
	    			<a class="btn btn-sm btn-link" href="#"><i class="glyphicon glyphicon-share-alt text-muted"></i></a>
	    			</div>
	    			';
		}
		if ( empty($title) ) {
			$hidden = ' hidden-xs';
		} 
		$html .= '
			<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2'.$hidden.'">
				<div class="chof-panel chof-panel-sized '.$class.'" style="position:relative;">
					<div class="panel-body">	
						'.$img.'
						<div>
							<small>
							</small>
						</div>
						<h5>'.$title.'</h5>
					</div>
					'.$link.'
				</div>
			</div>
		';

		return $html;
	}
?>

<div class="row">
	<?php echo get_chof_panel('Inductee Name', 'chof-orange', 'http://lorempixel.com/g/180/140/people?1'); ?>
	<?php echo get_chof_panel('Inductee Name is fairly long', 'chof-gray', 'http://lorempixel.com/g/180/140/people?2'); ?>
	<?php echo get_chof_panel('', 'chof-green'); ?>
	<?php echo get_chof_panel('Inductee Name', 'chof-blue chof-text-light', 'http://lorempixel.com/g/180/140/people?3'); ?>
	<?php echo get_chof_panel('', 'chof-blue chof-text-light'); ?>
	<?php echo get_chof_panel('Inductee Name', 'chof-orange', 'http://lorempixel.com/g/180/140/people?4'); ?>
	<?php echo get_chof_panel('Inductee Name', 'chof-green', 'http://lorempixel.com/g/180/140/people?5'); ?>
	<?php echo get_chof_panel('Inductee Name', 'chof-red chof-text-light', 'http://lorempixel.com/g/180/140/people?6'); ?>
	<?php echo get_chof_panel('Inductee Name', 'chof-teal', 'http://lorempixel.com/g/180/140/people?7'); ?>
	<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
		<div class="chof-panel chof-panel-sized chof-teal">
			<img class="img-responsive" src="/assets/img/promos/chof-clocktower.png">
		</div>
	</div>
	<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
		<div class="chof-panel chof-panel-sized chof-yellow">
			<img class="img-responsive" src="/assets/img/promos/chof-logotype.png">
		</div>
	</div>
	<?php echo get_chof_panel('', 'chof-yellow'); ?>
	<?php echo get_chof_panel('Inductee Name', 'chof-gray', 'http://lorempixel.com/g/180/140/people?8'); ?>
	<?php echo get_chof_panel('', 'chof-orange'); ?>
	<?php echo get_chof_panel('Inductee Name', 'chof-brown chof-text-light', 'http://lorempixel.com/g/180/140/people?9'); ?>
	<?php echo get_chof_panel('', 'chof-brown chof-text-light'); ?>
	<?php echo get_chof_panel('Inductee Name', 'chof-blue chof-text-light', 'http://lorempixel.com/g/180/140/people?10'); ?>
	<?php echo get_chof_panel('', 'chof-red chof-text-light'); ?>
	<?php echo get_chof_panel('Inductee Name', 'chof-yellow', 'http://lorempixel.com/g/180/140/people?11'); ?>
	<?php echo get_chof_panel('Inductee Name', 'chof-green', 'http://lorempixel.com/g/180/140/people?12'); ?>

	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
		<div class="chof-panel" style="border:1px solid #666; height:160px;">
			<div class="panel-body">		
				<h5 style="text-center">Thanks Sponsors</h5>
				<div>
					<small>
					</small>
				</div>
			</div>
		</div>
	</div>

</div>



