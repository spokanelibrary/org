<?php 
	function get_chof_panel($title=null, $class='', $img=null, $col=null) {
		if ( $img ) {
			$img = '<img class="img-responsive" src="'.$img.'">';

			$link = '
						<div style="position:absolute; top:2px; right:4px; opacity:.5;">
	    			<small class="glyphicon glyphicon-share-alt" style="color:#fff;"></small>
	    			</div>
	    			';
		}
		if ( empty($title) ) {
			$hidden = 'hidden-xs';
		} 
		$html .= '<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2 '.$hidden.' '.$col.'">'.PHP_EOL;
		$html .= '<div class="chof-panel chof-panel-sized '.$class.'">'.PHP_EOL;
		if ($img) {
			$html .= '<div class="panel-body">'.PHP_EOL;
			$html .= $img.PHP_EOL;
			$html .= '<div class="chof-text-wrapper">'.PHP_EOL;				
			$html .= '<div class="chof-text-mask">'.PHP_EOL;
			$html .= '<h6 class="chof-title">'.$title.'</h6>'.PHP_EOL;
			$html .= '</div>'.PHP_EOL;
			$html .= '</div>'.PHP_EOL;
			$html .= '</div>'.PHP_EOL;
		$html .= $link.PHP_EOL;
		}
		$html .= '</div>'.PHP_EOL;
		$html .= '</div>'.PHP_EOL;

		//$html = '<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2'.$hidden.'"><div class="chof-panel chof-panel-sized">test</div></div>';
		return $html;
	}
?>

<div class="row">
	<?php echo get_chof_panel('Harold Balazs', 'chof-orange', 'http://lorempixel.com/g/200/200/people?1'); ?>
	<?php echo get_chof_panel('', 'chof-green'); ?>
	<?php echo get_chof_panel('Chief Spokane Garry', 'chof-gray chof-text-dark', 'http://lorempixel.com/g/200/200/people?2'); ?>
	<?php echo get_chof_panel('Gordon Budke', 'chof-blue', 'http://lorempixel.com/g/200/200/people?3'); ?>
	<?php echo get_chof_panel('', 'chof-blue chof-text-light'); ?>
	<?php echo get_chof_panel('King Cole', 'chof-orange', 'http://lorempixel.com/g/200/200/people?4'); ?>
	<?php echo get_chof_panel('Gary A. Livingston', 'chof-green', 'http://lorempixel.com/g/200/200/people?5'); ?>
	<?php echo get_chof_panel('Thomas S. Foley', 'chof-red', 'http://lorempixel.com/g/200/200/people?6'); ?>
	<?php echo get_chof_panel('', 'chof-teal'); ?>
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
	<?php echo get_chof_panel('Donald F. Kardong', 'chof-yellow chof-text-dark', 'http://lorempixel.com/g/200/200/people?7'); ?>
	<?php echo get_chof_panel('Daniel K. Oliver', 'chof-gray chof-text-dark', 'http://lorempixel.com/g/200/200/people?8'); ?>
	<?php echo get_chof_panel('', 'chof-orange'); ?>
	<?php echo get_chof_panel('May Arkwright Hutton', 'chof-brown', 'http://lorempixel.com/g/200/200/people?9'); ?>
	<?php echo get_chof_panel('', 'chof-brown chof-text-light'); ?>
	<?php echo get_chof_panel('Dr. Elizabeth Welty', 'chof-blue', 'http://lorempixel.com/g/200/200/people?10'); ?>
	<?php echo get_chof_panel('', 'chof-red chof-text-light'); ?>
	<?php echo get_chof_panel('Vicki McNeill', 'chof-yellow chof-text-dark', 'http://lorempixel.com/g/200/200/people?11'); ?>
	<?php echo get_chof_panel('Peg Hopkins', 'chof-green', 'http://lorempixel.com/g/200/200/people?12', 'col-lg-push-8'); ?>

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-pull-2">
		<div class="chof-panel" style="">
			<div class="panel-body">		
				<h5 class="text-center uppercase text-muted">Thanks to our generous sponsors:</h5>
				<div class="row">
					<div class="col-sm-4">
						<p>
							<a href="http://www.avistafoundation.com/"><img class="img-responsive" style="margin: auto;" src="http://www.spokanelibraryfoundation.org/assets/img/logos/avista-foundation-logo.png" alt="Avista Foundation" /></a>
						</p>
					</div><!-- /.col -->
					<div class="col-sm-4">
						<p style="margin-top:2px;">
							<a href="http://www.khq.com"><img class="img-responsive" style="margin: auto;" src="http://www.spokanelibraryfoundation.org//assets/img/logos/khq-logo.png" alt="KHQ" /></a>
						</p>
					</div><!-- /.col -->
					<div class="col-sm-4">
						<p style="margin-top:6px;">
							<a href="http://www.spokesman.com"><img class="img-responsive" style="margin: auto;" src="http://www.spokanelibraryfoundation.org//assets/img/logos/spokesman-logo.png" alt="The Spokesman Review" /></a>
						</p>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.panel-body -->
		</div><!-- /.chof-panel -->
	</div><!-- /.col -->

</div><!-- /.row -->



