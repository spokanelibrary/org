
<h4 class="text-center">6 columns</h4>

<div class="row">

	<div class="col-sm-6 col-md-2">
		<div class="spl-tile spl-tile-boxed" style="min-height:140px;">		
			<div class="spl-tile-body">
				<h5>King Forest Cole</h5>
				<div style="text-align:justify; text-justify: inter-word;">
					<small>
						He was the President of Expo '74, and as such was its main spokesman and promoter, but his real skill was his ability to get people to come together to achieve the impossible.
					</small>
				</div>
			</div>
		</div>
	</div>

	<div class="col-sm-6 col-md-2">
		<div class="spl-tile spl-tile-boxed" style="min-height:140px;">		
			<div class="spl-tile-body">
				&nbsp;
			</div>
		</div>
	</div>

	<div class="col-sm-6 col-md-2">
		<div class="spl-tile spl-tile-boxed" style="min-height:140px;">		
			<div class="spl-tile-body">
				&nbsp;
			</div>
		</div>
	</div>

	<div class="col-sm-6 col-md-2">
		<div class="spl-tile spl-tile-boxed" style="min-height:140px;">		
			<div class="spl-tile-body">
				&nbsp;
			</div>
		</div>
	</div>

	<div class="col-sm-6 col-md-2">
		<div class="spl-tile spl-tile-boxed" style="min-height:140px;">		
			<div class="spl-tile-body">
				&nbsp;
			</div>
		</div>
	</div>

	<div class="col-sm-6 col-md-2">
		<div class="spl-tile spl-tile-boxed" style="min-height:140px;">		
			<div class="spl-tile-body">
				&nbsp;
			</div>
		</div>
	</div>

</div>


<h4 class="text-center">4 columns</h4>

<div class="row">

	<div class="col-sm-6 col-md-3">
		<div class="spl-tile spl-tile-boxed" style="min-height:220px;">		
			<div class="spl-tile-body">
				<h5>King Forest Cole</h5>
				<div style="text-align:justify; text-justify: inter-word;">
					<small>
						He was the President of Expo '74, and as such was its main spokesman and promoter, but his real skill was his ability to get people to come together to achieve the impossible.
					</small>
				</div>
			</div>
		</div>
	</div>

	<div class="col-sm-6 col-md-3">
		<div class="spl-tile spl-tile-boxed" style="min-height:220px;">		
			<div class="spl-tile-body">
				&nbsp;
			</div>
		</div>
	</div>

	<div class="col-sm-6 col-md-3">
		<div class="spl-tile spl-tile-boxed" style="min-height:220px;">		
			<div class="spl-tile-body">
				&nbsp;
			</div>
		</div>
	</div>

	<div class="col-sm-6 col-md-3">
		<div class="spl-tile spl-tile-boxed" style="min-height:220px;">		
			<div class="spl-tile-body">
				&nbsp;
			</div>
		</div>
	</div>

</div>

<h4 class="text-center">et cetera</h4>

<?php 
	function get_chof_panel($title='', $class='') {
		$html .= '
			<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
				<div class="chof-panel chof-panel-narrow '.$class.'">
					<div class="panel-body">		
						<h5>'.$title.'</h5>
						<div>
							<small>
							</small>
						</div>
					</div>
				</div>
			</div>
		';

		return $html;
	}
?>

<div class="row">
	<?php echo get_chof_panel('Inductee Name', 'chof-orange'); ?>
	<?php echo get_chof_panel('Inductee Name', 'chof-gray'); ?>
	<?php echo get_chof_panel('', 'chof-green'); ?>
	<?php echo get_chof_panel('Inductee Name', 'chof-blue chof-text-light'); ?>
	<?php echo get_chof_panel('', 'chof-blue chof-text-light'); ?>
	<?php echo get_chof_panel('Inductee Name', 'chof-orange'); ?>
	<?php echo get_chof_panel('Inductee Name', 'chof-green'); ?>
	<?php echo get_chof_panel('Inductee Name', 'chof-red chof-text-light'); ?>
	<?php echo get_chof_panel('Inductee Name', 'chof-teal'); ?>
	<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
		<div class="chof-panel chof-panel-narrow">
			<img class="chof-img" src="/assets/img/promos/chof-clocktower.png">
		</div>
	</div>
	<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
		<div class="chof-panel chof-panel-narrow chof-yellow">
			<img class="chof-img" src="/assets/img/promos/chof-logotype.png">
		</div>
	</div>
	<?php echo get_chof_panel('', 'chof-yellow'); ?>
	<?php echo get_chof_panel('Inductee Name', 'chof-gray'); ?>
	<?php echo get_chof_panel('Inductee Name', 'chof-brown chof-text-light'); ?>
	<?php echo get_chof_panel('Inductee Name', 'chof-blue chof-text-light'); ?>
	<?php echo get_chof_panel('Inductee Name', 'chof-red chof-text-light'); ?>
	<?php echo get_chof_panel('Inductee Name', 'chof-yellow'); ?>
	<?php echo get_chof_panel('', 'chof-gray'); ?>

	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
		<div class="chof-panel" style="border:1px solid #666;">
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



