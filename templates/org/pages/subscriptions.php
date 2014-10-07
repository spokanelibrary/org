<?php


function spl_get_subscriptions() {
	$cat = array(
			 'bus'=>'Business &amp; Career'
			,'dir'=>'Directories'
			,'gen'=>'Genealogy'
			,'ref'=>'General Reference'
			,'fun'=>'Grants &amp; Fundraising'
			,'hom'=>'Homework Help'
			,'law'=>'Law'
			,'mag'=>'Magazines &amp; Newspapers'
			,'rep'=>'Repair'
			);

	$sub = new stdClass();
	//default
	$sub->id->name = '';
	$sub->id->img = '';
	$sub->id->url = '';
	$sub->id->category = array('');
	$sub->id->description = '

	';
	$sub->id->limit = null;
	//
	$sub->aps->name = 'American Physical Society Journals';
	$sub->aps->img = 'apslogo.gif';
	$sub->aps->url = 'http://publish.aps.org/';
	$sub->aps->category = array('mag');
	$sub->aps->description = '
	Free access to APS journals, including <em>Physics and Reviews of Modern Physics</em>. 
	';
	$sub->aps->limit = 'Only accessible through library computers';
	//
	$sub->arrc->name = 'Auto Repair Reference Center ';
	$sub->arrc->img = 'arrc_button_200x100';
	$sub->arrc->url = 'http://search.ebscohost.com/login.aspx?authtype=ip,cpid&custid=s8427805&profile=autorefctr';
	$sub->arrc->category = array('rep');
	$sub->arrc->description = '
	Do-it-yourself repair and maintenance information on most major manufacturers of domestic and imported vehicles. 
	';
	$sub->arrc->limit = null;

	//

	$html .= '';

	$html .= '<div class="panel panel-primary">'.PHP_EOL;
	$html .= '<div class="panel-body">'.PHP_EOL;
	$html .= '<ul class="nav nav-pills">'.PHP_EOL;
	$html .= '
	<li class="active">
		<a class="spl-database-subjects-trigger" data-spl-db=".spl-database-subjects" href="#">Show all <small>(alphabetical order)</small></a>
	</li>';
	foreach ( $cat as $k => $category ) {
		$html .= '
		<li>
			<a class="spl-database-subjects-trigger" data-spl-db=".'.$k.'" href="#">'.$category.'</a>
		</li>
		';
	}
	$html .= '</ul>'.PHP_EOL;
	$html .= '</div>'.PHP_EOL;
	$html .= '</div>'.PHP_EOL;

	$html .= "
	<script>
		$('body').on('click', '.spl-database-subjects-trigger', function(e) {
			e.preventDefault();

			$('.spl-database-subjects').collapse('hide');

			var classes = $(this).data('spl-db'); 
			$(classes).collapse('show');
		});
	</script>
	".PHP_EOL;

	$html .= '<div>'.PHP_EOL;
	foreach ( $sub as $k => $db ) {
		if ( 'id' != $k ) {
			$class = ' ';
			$subjects = null;
			foreach ( $db->category as $subject ) {
				$class .= $subject . ' spl-database-subjects ';
				$subjects .='<p><span class="label label-default">'.$cat[$subject].'</span></p>';
			}

			$html .= '
			<div class="collapse in'.$class.'">
				<a href="'.$db->url.'" class="">
					<h3>'.$db->name.' &rarr;</h3>
				</a>
				<div class="row">
	      	<div class="col-md-3">
	          <a href="'.$db->url.'" class="">
	      			<img src="/assets/img/db/'.$db->img.'" class="img-responsive img-rounded">
	    			</a>

	         </div><!-- /.col -->
	         <div class="col-md-6">
	          <p>
	          	'.$db->description.'
	          </p>
	          <p class="text-danger">
	          	'.$db->limit.'
	          </p>
					</div><!-- /.col -->
					<div class="col-md-3">
	          '.$subjects.'
					</div><!-- /.col -->
	      </div><!-- /.row -->
	      <hr>
       </div><!-- /.collapse -->
      ';
		}
	}
	$html .= '</div>'.PHP_EOL;	
	echo $html;

	/*
	echo '<pre>';
	print_r($cat);	
	print_r($sub);
	echo '</pre>';
	*/
}

?>

<?php spl_get_subscriptions(); ?>


