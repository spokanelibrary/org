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

		return $html;
	}
?>

<div class="row">

	<!-- PANEL -->
	
	<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
		<a href="#" data-toggle="modal" data-target="#chof-modal-a">
			<div class="chof-panel chof-panel-sized chof-orange">
				<div class="panel-body">
					<div class="chof-text-wrapper">			
						<div class="chof-icon-mask" style="width:auto; right:0;">
							<h6 class="chof-title chof-text-orange">AL</h6>
						</div>
					</div>
					<!--
					<div class="chof-orange" style="position:relative;">
						<div class="chof-icon chof-orange chof-text-light" style=" position:absolute; top:0; right:0;">
							<h5 class="" style="margin:5px;">AL</h5>
						</div>
					</div>
					-->
					<img class="img-responsive" src="http://lorempixel.com/g/200/200/people/3">
					<div class="chof-text-wrapper">			
						<div class="chof-text-mask">
							<h6 class="chof-title">Harold Balazs</h6>
						</div>
					</div>
				</div>
				<div class="chof-glyph">
					<small class="glyphicon glyphicon-share-alt"></small>
				</div>
			</div>
		</a>
	</div>

	<!-- PANEL -->
	<?php echo get_chof_panel('', 'chof-green'); ?>

	<!-- PANEL -->
	<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
		<a href="#" data-toggle="modal" data-target="#chof-modal-b">
			<div class="chof-panel chof-panel-sized chof-gray chof-text-dark">
				<div class="panel-body">
					<img class="img-responsive" src="http://lorempixel.com/g/200/200/people/8">
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
		</a>
	</div>

	<!-- PANEL -->
	<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
		<a href="#" data-toggle="modal" data-target="#chof-modal-c">
			<div class="chof-panel chof-panel-sized chof-blue">
				<div class="panel-body">
					<img class="img-responsive" src="http://lorempixel.com/g/200/200/people/2">
					<div class="chof-text-wrapper">			
						<div class="chof-text-mask">
							<h6 class="chof-title">Gordon Budke</h6>
						</div>
					</div>
				</div>
				<div class="chof-glyph">
					<small class="glyphicon glyphicon-share-alt"></small>
				</div>
			</div>
		</a>
	</div>

	<!-- PANEL -->
	<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
		<a href="#" data-toggle="modal" data-target="#chof-modal-d">
			<div class="chof-panel chof-panel-sized chof-orange">
				<div class="panel-body">
					<img class="img-responsive" src="http://lorempixel.com/g/200/200/people/3">
					<div class="chof-text-wrapper">			
						<div class="chof-text-mask">
							<h6 class="chof-title">King Cole</h6>
						</div>
					</div>
				</div>
				<div class="chof-glyph">
					<small class="glyphicon glyphicon-share-alt"></small>
				</div>
			</div>
		</a>
	</div>

	<!-- PANEL -->
	<?php echo get_chof_panel('', 'chof-blue chof-text-light'); ?>


	<!-- PANEL -->
	<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
		<a href="#" data-toggle="modal" data-target="#chof-modal-e">
			<div class="chof-panel chof-panel-sized chof-green">
				<div class="panel-body">
					<img class="img-responsive" src="http://lorempixel.com/g/200/200/people/5">
					<div class="chof-text-wrapper">			
						<div class="chof-text-mask">
							<h6 class="chof-title">Gary A. Livingston</h6>
						</div>
					</div>
				</div>
				<div class="chof-glyph">
					<small class="glyphicon glyphicon-share-alt"></small>
				</div>
			</div>
		</a>
	</div>

	<!-- PANEL -->
	<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
		<a href="#" data-toggle="modal" data-target="#chof-modal-f">
			<div class="chof-panel chof-panel-sized chof-red">
				<div class="panel-body">
					<img class="img-responsive" src="http://lorempixel.com/g/200/200/people/6">
					<div class="chof-text-wrapper">			
						<div class="chof-text-mask">
							<h6 class="chof-title">Thomas S. Foley</h6>
						</div>
					</div>
				</div>
				<div class="chof-glyph">
					<small class="glyphicon glyphicon-share-alt"></small>
				</div>
			</div>
		</a>
	</div>

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
	<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
		<a href="#" data-toggle="modal" data-target="#chof-modal-g">
			<div class="chof-panel chof-panel-sized chof-yellow chof-text-dark">
				<div class="panel-body">
					<img class="img-responsive" src="http://lorempixel.com/g/200/200/people/1">
					<div class="chof-text-wrapper">			
						<div class="chof-text-mask">
							<h6 class="chof-title">Donald F. Kardong</h6>
						</div>
					</div>
				</div>
				<div class="chof-glyph">
					<small class="glyphicon glyphicon-share-alt"></small>
				</div>
			</div>
		</a>
	</div>

	<!-- PANEL -->
	<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
		<a href="#" data-toggle="modal" data-target="#chof-modal-h">
			<div class="chof-panel chof-panel-sized chof-gray">
				<div class="panel-body">
					<img class="img-responsive" src="http://lorempixel.com/g/200/200/people/2">
					<div class="chof-text-wrapper">			
						<div class="chof-text-mask">
							<h6 class="chof-title">Daniel K. Oliver</h6>
						</div>
					</div>
				</div>
				<div class="chof-glyph">
					<small class="glyphicon glyphicon-share-alt"></small>
				</div>
			</div>
		</a>
	</div>

	<!-- PANEL -->
	<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
		<a href="#" data-toggle="modal" data-target="#chof-modal-i">
			<div class="chof-panel chof-panel-sized chof-yellow chof-text-dark">
				<div class="panel-body">
					<img class="img-responsive" src="http://lorempixel.com/g/200/200/people/7">
					<div class="chof-text-wrapper">			
						<div class="chof-text-mask">
							<h6 class="chof-title">Vicki McNeill</h6>
						</div>
					</div>
				</div>
				<div class="chof-glyph">
					<small class="glyphicon glyphicon-share-alt"></small>
				</div>
			</div>
		</a>
	</div>

	<!-- PANEL -->
	<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
		<a href="#" data-toggle="modal" data-target="#chof-modal-j">
			<div class="chof-panel chof-panel-sized chof-brown">
				<div class="panel-body">
					<img class="img-responsive" src="http://lorempixel.com/g/200/200/people/9">
					<div class="chof-text-wrapper">			
						<div class="chof-text-mask">
							<h6 class="chof-title">May Arkwright Hutton</h6>
						</div>
					</div>
				</div>
				<div class="chof-glyph">
					<small class="glyphicon glyphicon-share-alt"></small>
				</div>
			</div>
		</a>
	</div>

	<!-- PANEL -->
	<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
		<a href="#" data-toggle="modal" data-target="#chof-modal-k">
			<div class="chof-panel chof-panel-sized chof-blue">
				<div class="panel-body">
					<img class="img-responsive" src="http://lorempixel.com/g/200/200/people/10">
					<div class="chof-text-wrapper">			
						<div class="chof-text-mask">
							<h6 class="chof-title">Dr. Elizabeth Welty</h6>
						</div>
					</div>
				</div>
				<div class="chof-glyph">
					<small class="glyphicon glyphicon-share-alt"></small>
				</div>
			</div>
		</a>
	</div>

	<!-- PANEL -->
	<?php echo get_chof_panel('', 'chof-red'); ?>

	<!-- PANEL -->
	<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
		<a href="#" data-toggle="modal" data-target="#chof-modal-l">
			<div class="chof-panel chof-panel-sized chof-green">
				<div class="panel-body">
					<img class="img-responsive" src="http://lorempixel.com/g/200/200/people/4">
					<div class="chof-text-wrapper">			
						<div class="chof-text-mask">
							<h6 class="chof-title">Peg Hopkins</h6>
						</div>
					</div>
				</div>
				<div class="chof-glyph">
					<small class="glyphicon glyphicon-share-alt"></small>
				</div>
			</div>
		</a>
	</div>

	<!-- PANEL CITY OF SPOKANE -->
	<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2">
		<a href="http://beta.spokanecity.org">
			<div class="chof-panel chof-panel-sized chof-orange">
				<div class="panel-body">
					<img class="img-responsive" src="/assets/img/promos/chof-city-spokane.png">
				</div>
			</div>
		</a>
	</div>

	<!-- PANEL SPL FOUNDATION-->
	<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2 col-lg-push-8">
		<a href="http://www.spokanelibraryfoundation.org">
			<div class="chof-panel chof-panel-sized chof-brown">
				<div class="panel-body">
					<img class="img-responsive" src="/assets/img/promos/chof-spl-fdtn.png">
				</div>
			</div>
		</a>
	</div>

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


<!-- MODAL A -->
<div class="modal fade chof-modal" id="chof-modal-a" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content chof-orange">
      <div class="modal-body">
        
        <div class="panel-body">  
  	    	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      	  <h3 class="normal chof-text-orange">Arts &amp; Letters <small>2015</small></h3>
      	  <div class="row">
  	      	<div class="col-sm-4 col-md-4">
  			      <p>
  		    	  	<img class="img-responsive" src="http://lorempixel.com/g/200/200/people/3">
	  	  	    </p>
	  	  	  </div><!-- /.col -->
	  	  	  <div class="col-sm-8 col-md-8">
	  	  	  	<h3 class="modal-title uppercase" id="chof-modal-label">Harold Balazs</h3>
	  	  	  	<p class="lead">
	  	  	  		Lead the development of the North South freeway and the revitalization of the Logan neighborhood. 
	  	  	  		Born in Brown’s Addition, Mr. North also attended and later instructed at Spokane Falls Community College in the engineering department.
	  	  	  	</p>
  	      	</div><!-- /.col -->
	  	    </div><!-- /.row -->
	      </div><!-- /.panel-body -->

      </div>
    </div>
  </div>
</div>

<!-- MODAL B -->
<div class="modal fade chof-modal" id="chof-modal-b" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content chof-gray">
      <div class="modal-body">
        
        <div class="panel-body">  
  	    	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      	  <h3 class="normal chof-text-gray">Historic Inductee <small>2015</small></h3>
      	  <div class="row">
  	      	<div class="col-sm-4 col-md-4">
  			      <p>
  		    	  	<img class="img-responsive" src="http://lorempixel.com/g/200/200/people/8">
	  	  	    </p>
	  	  	  </div><!-- /.col -->
	  	  	  <div class="col-sm-8 col-md-8">
	  	  	  	<h3 class="modal-title uppercase" id="chof-modal-label">Chief Spokane Garry</h3>
	  	  	  	<p class="lead">
	  	  	  		Lead the development of the North South freeway and the revitalization of the Logan neighborhood. 
	  	  	  		Born in Brown’s Addition, Mr. North also attended and later instructed at Spokane Falls Community College in the engineering department.
	  	  	  	</p>
  	      	</div><!-- /.col -->
	  	    </div><!-- /.row -->
	      </div><!-- /.panel-body -->

      </div>
    </div>
  </div>
</div>

<!-- MODAL C -->
<div class="modal fade chof-modal" id="chof-modal-c" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content chof-blue">
      <div class="modal-body">
        
        <div class="panel-body">  
  	    	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      	  <h3 class="normal chof-text-blue">Economic Development &amp; Business <small>2015</small></h3>
      	  <div class="row">
  	      	<div class="col-sm-4 col-md-4">
  			      <p>
  		    	  	<img class="img-responsive" src="http://lorempixel.com/g/200/200/people/2">
	  	  	    </p>
	  	  	  </div><!-- /.col -->
	  	  	  <div class="col-sm-8 col-md-8">
	  	  	  	<h3 class="modal-title uppercase" id="chof-modal-label">Gordon Budke</h3>
	  	  	  	<p class="lead">
	  	  	  		Lead the development of the North South freeway and the revitalization of the Logan neighborhood. 
	  	  	  		Born in Brown’s Addition, Mr. North also attended and later instructed at Spokane Falls Community College in the engineering department.
	  	  	  	</p>
  	      	</div><!-- /.col -->
	  	    </div><!-- /.row -->
	      </div><!-- /.panel-body -->

      </div>
    </div>
  </div>
</div>

<!-- MODAL D -->
<div class="modal fade chof-modal" id="chof-modal-d" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content chof-orange">
      <div class="modal-body">
        
        <div class="panel-body">  
  	    	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      	  <h3 class="normal chof-text-orange">Historic Inductee <small>2015</small></h3>
      	  <div class="row">
  	      	<div class="col-sm-4 col-md-4">
  			      <p>
  		    	  	<img class="img-responsive" src="http://lorempixel.com/g/200/200/people/3">
	  	  	    </p>
	  	  	  </div><!-- /.col -->
	  	  	  <div class="col-sm-8 col-md-8">
	  	  	  	<h3 class="modal-title uppercase" id="chof-modal-label">King Cole</h3>
	  	  	  	<p class="lead">
	  	  	  		Lead the development of the North South freeway and the revitalization of the Logan neighborhood. 
	  	  	  		Born in Brown’s Addition, Mr. North also attended and later instructed at Spokane Falls Community College in the engineering department.
	  	  	  	</p>
  	      	</div><!-- /.col -->
	  	    </div><!-- /.row -->
	      </div><!-- /.panel-body -->

      </div>
    </div>
  </div>
</div>

<!-- MODAL E -->
<div class="modal fade chof-modal" id="chof-modal-e" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content chof-green">
      <div class="modal-body">
        
        <div class="panel-body">  
  	    	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      	  <h3 class="normal chof-text-green">Education <small>2015</small></h3>
      	  <div class="row">
  	      	<div class="col-sm-4 col-md-4">
  			      <p>
  		    	  	<img class="img-responsive" src="http://lorempixel.com/g/200/200/people/5">
	  	  	    </p>
	  	  	  </div><!-- /.col -->
	  	  	  <div class="col-sm-8 col-md-8">
	  	  	  	<h3 class="modal-title uppercase" id="chof-modal-label">Gary A. Livingston</h3>
	  	  	  	<p class="lead">
	  	  	  		Lead the development of the North South freeway and the revitalization of the Logan neighborhood. 
	  	  	  		Born in Brown’s Addition, Mr. North also attended and later instructed at Spokane Falls Community College in the engineering department.
	  	  	  	</p>
  	      	</div><!-- /.col -->
	  	    </div><!-- /.row -->
	      </div><!-- /.panel-body -->

      </div>
    </div>
  </div>
</div>

<!-- MODAL F -->
<div class="modal fade chof-modal" id="chof-modal-f" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content chof-red">
      <div class="modal-body">
        
        <div class="panel-body">  
  	    	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      	  <h3 class="normal chof-text-red">Historic Inductee <small>2015</small></h3>
      	  <div class="row">
  	      	<div class="col-sm-4 col-md-4">
  			      <p>
  		    	  	<img class="img-responsive" src="http://lorempixel.com/g/200/200/people/6">
	  	  	    </p>
	  	  	  </div><!-- /.col -->
	  	  	  <div class="col-sm-8 col-md-8">
	  	  	  	<h3 class="modal-title uppercase" id="chof-modal-label">Thomas S. Foley</h3>
	  	  	  	<p class="lead">
	  	  	  		Lead the development of the North South freeway and the revitalization of the Logan neighborhood. 
	  	  	  		Born in Brown’s Addition, Mr. North also attended and later instructed at Spokane Falls Community College in the engineering department.
	  	  	  	</p>
  	      	</div><!-- /.col -->
	  	    </div><!-- /.row -->
	      </div><!-- /.panel-body -->

      </div>
    </div>
  </div>
</div>

<!-- MODAL G -->
<div class="modal fade chof-modal" id="chof-modal-g" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content chof-yellow">
      <div class="modal-body">
        
        <div class="panel-body">  
  	    	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      	  <h3 class="normal chof-text-yellow">Innovation &amp; Leadership <small>2015</small></h3>
      	  <div class="row">
  	      	<div class="col-sm-4 col-md-4">
  			      <p>
  		    	  	<img class="img-responsive" src="http://lorempixel.com/g/200/200/people/1">
	  	  	    </p>
	  	  	  </div><!-- /.col -->
	  	  	  <div class="col-sm-8 col-md-8">
	  	  	  	<h3 class="modal-title uppercase" id="chof-modal-label">Donald F. Kardong</h3>
	  	  	  	<p class="lead">
	  	  	  		Lead the development of the North South freeway and the revitalization of the Logan neighborhood. 
	  	  	  		Born in Brown’s Addition, Mr. North also attended and later instructed at Spokane Falls Community College in the engineering department.
	  	  	  	</p>
  	      	</div><!-- /.col -->
	  	    </div><!-- /.row -->
	      </div><!-- /.panel-body -->

      </div>
    </div>
  </div>
</div>

<!-- MODAL H -->
<div class="modal fade chof-modal" id="chof-modal-h" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content chof-gray">
      <div class="modal-body">
        
        <div class="panel-body">  
  	    	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      	  <h3 class="normal chof-text-gray">Historic Inductee <small>2015</small></h3>
      	  <div class="row">
  	      	<div class="col-sm-4 col-md-4">
  			      <p>
  		    	  	<img class="img-responsive" src="http://lorempixel.com/g/200/200/people/2">
	  	  	    </p>
	  	  	  </div><!-- /.col -->
	  	  	  <div class="col-sm-8 col-md-8">
	  	  	  	<h3 class="modal-title uppercase" id="chof-modal-label">Daniel K. Oliver</h3>
	  	  	  	<p class="lead">
	  	  	  		Lead the development of the North South freeway and the revitalization of the Logan neighborhood. 
	  	  	  		Born in Brown’s Addition, Mr. North also attended and later instructed at Spokane Falls Community College in the engineering department.
	  	  	  	</p>
  	      	</div><!-- /.col -->
	  	    </div><!-- /.row -->
	      </div><!-- /.panel-body -->

      </div>
    </div>
  </div>
</div>

<!-- MODAL I -->
<div class="modal fade chof-modal" id="chof-modal-i" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content chof-yellow">
      <div class="modal-body">
        
        <div class="panel-body">  
  	    	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      	  <h3 class="normal chof-text-yellow">Historic Inductee <small>2015</small></h3>
      	  <div class="row">
  	      	<div class="col-sm-4 col-md-4">
  			      <p>
  		    	  	<img class="img-responsive" src="http://lorempixel.com/g/200/200/people/7">
	  	  	    </p>
	  	  	  </div><!-- /.col -->
	  	  	  <div class="col-sm-8 col-md-8">
	  	  	  	<h3 class="modal-title uppercase" id="chof-modal-label">Vicki McNeill</h3>
	  	  	  	<p class="lead">
	  	  	  		Lead the development of the North South freeway and the revitalization of the Logan neighborhood. 
	  	  	  		Born in Brown’s Addition, Mr. North also attended and later instructed at Spokane Falls Community College in the engineering department.
	  	  	  	</p>
  	      	</div><!-- /.col -->
	  	    </div><!-- /.row -->
	      </div><!-- /.panel-body -->

      </div>
    </div>
  </div>
</div>

<!-- MODAL J -->
<div class="modal fade chof-modal" id="chof-modal-j" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content chof-brown">
      <div class="modal-body">
        
        <div class="panel-body">  
  	    	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      	  <h3 class="normal chof-text-brown">Historic Inductee <small>2015</small></h3>
      	  <div class="row">
  	      	<div class="col-sm-4 col-md-4">
  			      <p>
  		    	  	<img class="img-responsive" src="http://lorempixel.com/g/200/200/people/7">
	  	  	    </p>
	  	  	  </div><!-- /.col -->
	  	  	  <div class="col-sm-8 col-md-8">
	  	  	  	<h3 class="modal-title uppercase" id="chof-modal-label">May Arkwright Hutton</h3>
	  	  	  	<p class="lead">
	  	  	  		Lead the development of the North South freeway and the revitalization of the Logan neighborhood. 
	  	  	  		Born in Brown’s Addition, Mr. North also attended and later instructed at Spokane Falls Community College in the engineering department.
	  	  	  	</p>
  	      	</div><!-- /.col -->
	  	    </div><!-- /.row -->
	      </div><!-- /.panel-body -->

      </div>
    </div>
  </div>
</div>

<!-- MODAL K -->
<div class="modal fade chof-modal" id="chof-modal-k" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content chof-blue">
      <div class="modal-body">
        
        <div class="panel-body">  
  	    	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      	  <h3 class="normal chof-text-blue">Public Service &amp; Philanthropy <small>2015</small></h3>
      	  <div class="row">
  	      	<div class="col-sm-4 col-md-4">
  			      <p>
  		    	  	<img class="img-responsive" src="http://lorempixel.com/g/200/200/people/10">
	  	  	    </p>
	  	  	  </div><!-- /.col -->
	  	  	  <div class="col-sm-8 col-md-8">
	  	  	  	<h3 class="modal-title uppercase" id="chof-modal-label">Dr. Elizabeth Welty</h3>
	  	  	  	<p class="lead">
	  	  	  		Lead the development of the North South freeway and the revitalization of the Logan neighborhood. 
	  	  	  		Born in Brown’s Addition, Mr. North also attended and later instructed at Spokane Falls Community College in the engineering department.
	  	  	  	</p>
  	      	</div><!-- /.col -->
	  	    </div><!-- /.row -->
	      </div><!-- /.panel-body -->

      </div>
    </div>
  </div>
</div>

<!-- MODAL L -->
<div class="modal fade chof-modal" id="chof-modal-l" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content chof-green">
      <div class="modal-body">
        
        <div class="panel-body">  
  	    	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      	  <h3 class="normal chof-text-green">Science, Health, &amp; Medicine <small>2015</small></h3>
      	  <div class="row">
  	      	<div class="col-sm-4 col-md-4">
  			      <p>
  		    	  	<img class="img-responsive" src="http://lorempixel.com/g/200/200/people/4">
	  	  	    </p>
	  	  	  </div><!-- /.col -->
	  	  	  <div class="col-sm-8 col-md-8">
	  	  	  	<h3 class="modal-title uppercase" id="chof-modal-label">Peg Hopkins</h3>
	  	  	  	<p class="lead">
	  	  	  		Lead the development of the North South freeway and the revitalization of the Logan neighborhood. 
	  	  	  		Born in Brown’s Addition, Mr. North also attended and later instructed at Spokane Falls Community College in the engineering department.
	  	  	  	</p>
  	      	</div><!-- /.col -->
	  	    </div><!-- /.row -->
	      </div><!-- /.panel-body -->

      </div>
    </div>
  </div>
</div>


