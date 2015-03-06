<?php 
	function get_chof_panel($title=null, $class='', $img=null, $col=null) {
		if ( $img ) {
			$img = '<img class="img-responsive" src="'.$img.'">';

			$link = '
						<div class="chof-glyph">
	    				<small class="glyphicon glyphicon-share-alt"></small>
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

	<!-- PANEL -->
	
	<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
		<div class="chof-panel chof-panel-sized chof-orange">
			<div class="chof-glyph">
				<small class="glyphicon glyphicon-share-alt"></small>
			</div>
			<div class="panel-body">
				<img class="img-responsive" src="http://lorempixel.com/g/200/200/people/1">
				<div class="chof-text-wrapper">			
					<div class="chof-text-mask">
						<h6 class="chof-title">Harold Balazs</h6>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- PANEL -->
	<?php echo get_chof_panel('', 'chof-green'); ?>

	<!-- PANEL -->
	<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
		<div class="chof-panel chof-panel-sized chof-gray chof-text-dark">
			<div class="panel-body">
				<img class="img-responsive" src="http://lorempixel.com/g/200/200/people/2">
				<div class="chof-text-wrapper">			
					<div class="chof-text-mask">
						<h6 class="chof-title">Chief Spokane Garry</h6>
					</div>
				</div>
			</div>
			<div class="chof-glyph">
				<small class="glyphicon glyphicon-share-alt"></small>
			</div>
		</div>
	</div>

	<!-- PANEL -->
	<?php echo get_chof_panel('Gordon Budke', 'chof-blue', 'http://lorempixel.com/g/200/200/people?3'); ?>

	<!-- PANEL -->
	<?php echo get_chof_panel('', 'chof-blue chof-text-light'); ?>

	<!-- PANEL -->
	<?php echo get_chof_panel('King Cole', 'chof-orange', 'http://lorempixel.com/g/200/200/people?4'); ?>
	
	<!-- PANEL -->
	<?php echo get_chof_panel('Gary A. Livingston', 'chof-green', 'http://lorempixel.com/g/200/200/people?5'); ?>

	<!-- PANEL -->
	<?php echo get_chof_panel('Thomas S. Foley', 'chof-red', 'http://lorempixel.com/g/200/200/people?6'); ?>

	<!-- PANEL -->
	<?php echo get_chof_panel('', 'chof-teal'); ?>

	<!-- CLOCKTOWER -->
	<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
		<div class="chof-panel chof-panel-sized chof-teal">
			<img class="img-responsive" src="/assets/img/promos/chof-clocktower.png">
		</div>
	</div>
	
	<!-- LOGOTYPE -->
	<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
		<div class="chof-panel chof-panel-sized chof-yellow">
			<img class="img-responsive" src="/assets/img/promos/chof-logotype.png">
		</div>
	</div>
	
	<!-- PANEL -->
	<?php echo get_chof_panel('Donald F. Kardong', 'chof-yellow chof-text-dark', 'http://lorempixel.com/g/200/200/people?7'); ?>

	<!-- PANEL -->
	<?php echo get_chof_panel('Daniel K. Oliver', 'chof-gray chof-text-dark', 'http://lorempixel.com/g/200/200/people?8'); ?>

	<!-- PANEL -->
	<?php echo get_chof_panel('', 'chof-orange'); ?>

	<!-- PANEL -->
	<?php echo get_chof_panel('May Arkwright Hutton', 'chof-brown', 'http://lorempixel.com/g/200/200/people?9'); ?>

	<!-- PANEL -->
	<?php echo get_chof_panel('', 'chof-brown chof-text-light'); ?>

	<!-- PANEL -->
	<?php echo get_chof_panel('Dr. Elizabeth Welty', 'chof-blue', 'http://lorempixel.com/g/200/200/people?10'); ?>

	<!-- PANEL -->
	<?php echo get_chof_panel('', 'chof-red chof-text-light'); ?>

	<!-- PANEL -->
	<?php echo get_chof_panel('Vicki McNeill', 'chof-yellow chof-text-dark', 'http://lorempixel.com/g/200/200/people?11'); ?>

	<!-- PANEL -->
	<?php echo get_chof_panel('Peg Hopkins', 'chof-green', 'http://lorempixel.com/g/200/200/people?12', 'col-lg-push-8'); ?>

	<!-- SPONSORS -->
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



