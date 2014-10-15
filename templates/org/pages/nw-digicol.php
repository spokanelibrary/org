<p class="lead">
	The Ned M. Barnes Northwest Room is pleased to introduce a digital collection of photographs selected from the Northwest Room archives. 
</p>
<p>
	These collections emphasize the most frequently requested subjects in the Northwest Room &ndash; the homes, buildings, streets and activities in and around Spokane. 
</p>
<p>
	The original items are available for use and study in the <a href="/northwest-room/">Northwest Room</a>.
</p>

<?php echo spl_get_digicol(); ?>

<?php
function spl_get_digicol() {
	$digicol = array();
	/*
	$digicol[] = array('url' => ''
										,'img' => ''
										,'label' => ''
										);
	*/
	$digicol[] = array('url' => 'http://cdm15223.contentdm.oclc.org/cdm/landingpage/collection/p15223coll3'
										,'img' => 'spl-views.jpg'
										,'label' => 'Spokane Views'
										);
	$digicol[] = array('url' => 'http://cdm15223.contentdm.oclc.org/cdm/landingpage/collection/p15223coll2'
										,'img' => 'spl-rivers.jpg'
										,'label' => 'Spokane River'
										);
	$digicol[] = array('url' => 'http://cdm15223.contentdm.oclc.org/cdm/landingpage/collection/p15223coll1'
										,'img' => 'spl-fire.jpg'
										,'label' => 'Spokane Fire (1889)'
										);


	$html = null; 
	foreach ( $digicol as $col ) {
		$html .= '<div class="col-md-4">'.PHP_EOL;
		$html .= '<div class="panel panel-default">'.PHP_EOL;
		
		$html .= '<div class="panel-heading">'.PHP_EOL;
		$html .= '<a href="'.$col['url'].'">';	
		$html .= '<h4 class="panel-title">'.$col['label'].'</h4>';
		$html .= '</a>'.PHP_EOL;
		$html .= '</div>'.PHP_EOL;
		
		$html .= '<div class="panel-body">'.PHP_EOL;	
		$html .= '<a href="'.$col['url'].'">';	
		$html .= '<img class="img-responsive img-rounded" alt="'.$col['label'].'" src="/assets/img/digicol/'.$col['img'].'">';
		$html .= '</a>'.PHP_EOL;
		$html .= '</div>'.PHP_EOL;

		$html .= '</div>'.PHP_EOL;
		$html .= '</div>'.PHP_EOL;
	}

	return $html;
}
?>
