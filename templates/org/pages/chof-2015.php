<?php 
	function get_chof_panel($title=null, $class='', $img=null) {
		if ( $img ) {
			$img = '<img class="img-responsive" src="'.$img.'">';

			$link = '
						<div style="background:transparent; border-left:1px solid #ccc; border-bottom:1px solid #ccc; position:absolute; top:0; right:0;">
	    			<a class="btn btn-sm btn-link" href="#"><i class="glyphicon glyphicon-share-alt text-muted" style="color:#fff;"></i></a>
	    			</div>
	    			';
		}
		if ( empty($title) ) {
			$hidden = ' hidden-xs';
		} 
		$html .= '
			<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2'.$hidden.'">
				<div class="chof-panel chof-panel-sized '.$class.'" style="position:relative;">
					<div class="panel-body" style="position:relative">	
						'.$img.'
						<div>
							<small>
							</small>
						</div>
						<div style="position:absolute; bottom:0; width:100%; background:#000; opacity:.5; color:#fff;">
							'.$title.'
						</div>
					</div>
					'.$link.'
				</div>
			</div>
		';

		return $html;
	}
?>

<div class="row">
	<?php echo get_chof_panel('Harold Balazs', 'chof-orange', 'http://lorempixel.com/g/200/200/people?1'); ?>
	<?php echo get_chof_panel('Chief Spokane Garry', 'chof-gray', 'http://lorempixel.com/g/180/140/people?2'); ?>
	<?php echo get_chof_panel('', 'chof-green'); ?>
	<?php echo get_chof_panel('Gordon Budke', 'chof-blue chof-text-light', 'http://lorempixel.com/g/180/140/people?3'); ?>
	<?php echo get_chof_panel('', 'chof-blue chof-text-light'); ?>
	<?php echo get_chof_panel('King Cole', 'chof-orange', 'http://lorempixel.com/g/180/140/people?4'); ?>
	<?php echo get_chof_panel('Gary A. Livingston', 'chof-green', 'http://lorempixel.com/g/180/140/people?5'); ?>
	<?php echo get_chof_panel('Thomas S. Foley', 'chof-red chof-text-light', 'http://lorempixel.com/g/180/140/people?6'); ?>
	<?php echo get_chof_panel('Donald F. Kardong', 'chof-teal', 'http://lorempixel.com/g/180/140/people?7'); ?>
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
	<?php echo get_chof_panel('Donald F. Kardong', 'chof-gray', 'http://lorempixel.com/g/180/140/people?8'); ?>
	<?php echo get_chof_panel('', 'chof-orange'); ?>
	<?php echo get_chof_panel('May Arkwright Hutton', 'chof-brown chof-text-light', 'http://lorempixel.com/g/180/140/people?9'); ?>
	<?php echo get_chof_panel('', 'chof-brown chof-text-light'); ?>
	<?php echo get_chof_panel('Dr. Elizabeth Welty', 'chof-blue chof-text-light', 'http://lorempixel.com/g/180/140/people?10'); ?>
	<?php echo get_chof_panel('', 'chof-red chof-text-light'); ?>
	<?php echo get_chof_panel('Vicki McNeill', 'chof-yellow', 'http://lorempixel.com/g/180/140/people?11'); ?>
	<?php echo get_chof_panel('Peg Hopkins', 'chof-green', 'http://lorempixel.com/g/180/140/people?12'); ?>

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
		<div class="chof-panel" style="border:1px solid #666; height:170px;">
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



