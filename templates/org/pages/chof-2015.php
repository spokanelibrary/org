
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
			<div class="col-sm-6 col-md-3">
				<div class="chof-panel '.$class.'">
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
	<?php echo get_chof_panel('Inductee Name', 'chof-green'); ?>
	<?php echo get_chof_panel('Inductee Name', 'chof-blue chof-text-light'); ?>
	<?php echo get_chof_panel('Inductee Name', 'chof-teal'); ?>
	<?php echo get_chof_panel('', 'chof-teal chof-clocktower'); ?>
	<?php echo get_chof_panel('', 'chof-yellow chof-logotype'); ?>
	<?php echo get_chof_panel('Inductee Name', 'chof-yellow'); ?>
	<?php echo get_chof_panel('Inductee Name', 'chof-brown'); ?>
	<?php echo get_chof_panel('Inductee Name', 'chof-blue chof-text-light'); ?>
	<?php echo get_chof_panel('Inductee Name', 'chof-red'); ?>
	<?php echo get_chof_panel('Inductee Name', 'chof-yellow'); ?>
	<?php echo get_chof_panel('Inductee Name', 'chof-gray'); ?>
</div>



