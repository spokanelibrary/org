<p class="lead">
	The Ned M. Barnes Northwest Room is pleased to introduce a digital collection of photographs selected from the Northwest Room archives. 
</p>
<p>
	These collections emphasize the most frequently requested subjects in the Northwest Room &ndash; the homes, buildings, streets and activities in and around Spokane. 
	The original items are available for use and study in the <a href="/northwest-room/">Northwest Room</a>.
</p>

<hr>

<?php echo spl_get_digicol(); ?>

<h2>More at the Downtown Library</h2>
<p>
Please remember that the digital collections represent only a sampling of the entire photograph collection in the <a href="/northwest-room/">Northwest Room</a>. 
If you are looking for a specific image, please feel free to visit the Northwest Room to see other photographs.
</p>

<?php
function spl_get_digicol() {
	$digicol = array();
	/*
	$digicol[] = array('url' => ''
										,'img' => ''
										,'label' => ''
										);
	*/
	$digicol[] = array('url' => 'http://cdm15223.contentdm.oclc.org/cdm/landingpage/collection/p16351coll14'
										,'img' => 'spl-nw-missions.jpg'
										,'label' => 'Northwest Missions'
										);
	$digicol[] = array('url' => 'http://cdm15223.contentdm.oclc.org/cdm/landingpage/collection/p16351coll13'
										,'img' => 'spl-spokane-library.jpg'
										,'label' => 'Spokane Public Library'
										);
	$digicol[] = array('url' => 'http://cdm15223.contentdm.oclc.org/cdm/landingpage/collection/p16351coll12'
										,'img' => 'spl-spokane-buildings.jpg'
										,'label' => 'Spokane Buildings'
										);
	$digicol[] = array('url' => 'http://cdm15223.contentdm.oclc.org/cdm/landingpage/collection/p16351coll10'
										,'img' => 'spl-nw-dams.jpg'
										,'label' => 'Northwest Dams'
										);
	$digicol[] = array('url' => 'http://cdm15223.contentdm.oclc.org/cdm/landingpage/collection/p16351coll11'
										,'img' => 'spl-kettle-falls.jpg'
										,'label' => 'Kettle Falls, Washington'
										);
	$digicol[] = array('url' => 'http://cdm15223.contentdm.oclc.org/cdm/landingpage/collection/p16351coll8'
										,'img' => 'spl-indian-congress.jpg'
										,'label' => 'Indian Congress, Spokane'
										);
	$digicol[] = array('url' => 'http://cdm15223.contentdm.oclc.org/cdm/landingpage/collection/p16351coll7'
										,'img' => 'spl-grand-coulee.jpg'
										,'label' => 'Grand Coulee Dam Images'
										);
	$digicol[] = array('url' => 'http://cdm15223.contentdm.oclc.org/cdm/landingpage/collection/p16351coll6'
										,'img' => 'spl-documents.jpg'
										,'label' => 'Documents of Northwest History'
										);
	$digicol[] = array('url' => 'http://cdm15223.contentdm.oclc.org/cdm/landingpage/collection/p16351coll5'
										,'img' => 'spl-schools.jpg'
										,'label' => 'Spokane County Schools'
										);
	$digicol[] = array('url' => 'http://cdm15223.contentdm.oclc.org/cdm/landingpage/collection/p16351coll1'
										,'img' => 'spl-nw-agriculture.jpg'
										,'label' => 'Northwest Agriculture'
										);
	$digicol[] = array('url' => 'http://cdm15223.contentdm.oclc.org/cdm/landingpage/collection/p16351coll4'
										,'img' => 'spl-scenic-northwest.jpg'
										,'label' => 'Scenic Northwest'
										);
	$digicol[] = array('url' => 'http://cdm15223.contentdm.oclc.org/cdm/landingpage/collection/p16351coll3'
										,'img' => 'spl-idahotowns.jpg'
										,'label' => 'Idaho Towns'
										);
	$digicol[] = array('url' => 'http://cdm15223.contentdm.oclc.org/cdm/landingpage/collection/p16351coll2'
										,'img' => 'spl-ephemera.jpg'
										,'label' => 'Northwest Ephemera'
										);
	$digicol[] = array('url' => 'http://cdm15223.contentdm.oclc.org/cdm/landingpage/collection/p15223coll10'
										,'img' => 'spl-miners.jpg'
										,'label' => 'Miners &amp; Mining'
										);
	$digicol[] = array('url' => 'http://cdm15223.contentdm.oclc.org/cdm/landingpage/collection/p15223coll9'
										,'img' => 'spl-nwrails.jpg'
										,'label' => 'Northwest Rails'
										);
	$digicol[] = array('url' => 'http://cdm15223.contentdm.oclc.org/cdm/landingpage/collection/p15223coll7'
										,'img' => 'spl-watown.jpg'
										,'label' => 'Washington Towns'
										);
	$digicol[] = array('url' => 'http://cdm15223.contentdm.oclc.org/cdm/landingpage/collection/p15223coll8'
										,'img' => 'spl-industry.jpg'
										,'label' => 'Spokane Industry'
										);
	$digicol[] = array('url' => 'http://cdm15223.contentdm.oclc.org/cdm/landingpage/collection/p15223qs'
										,'img' => 'spl-streets.jpg'
										,'label' => 'Spokane Streets'
										);
	$digicol[] = array('url' => 'http://cdm15223.contentdm.oclc.org/cdm/landingpage/collection/p15223coll4'
										,'img' => 'spl-bridges.jpg'
										,'label' => 'Spokane Bridges'
										);
	$digicol[] = array('url' => 'http://cdm15223.contentdm.oclc.org/cdm/landingpage/collection/p15223coll6'
										,'img' => 'spl-parks'
										,'label' => 'Spokane Parks'
										);
	$digicol[] = array('url' => 'http://cdm15223.contentdm.oclc.org/cdm/landingpage/collection/p15223coll5'
										,'img' => 'spl-homes.jpg'
										,'label' => 'Spokane Homes'
										);
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

	$i = 1;
	$html = null; 
	foreach ( $digicol as $col ) {
		$row = false;
		if ( $i == 1 || ($i%3) ) {
			$row = true;
		}
		if ( $row ) {
			$html .= '<div class="row">'.PHP_EOL;
		}

		$html .= '<div class="col-md-4">'.PHP_EOL;
		$html .= '<div class="panel panel-default">'.PHP_EOL;
		$html .= $i%3;
		$html .= '<div class="panel-heading">'.PHP_EOL;
		$html .= '<a href="'.$col['url'].'">';	
		$html .= '<h4 class="panel-title text-center">'.$col['label'].'</h4>';
		$html .= '</a>'.PHP_EOL;
		$html .= '</div>'.PHP_EOL;
		
		$html .= '<div class="panel-body">'.PHP_EOL;	
		$html .= '<a href="'.$col['url'].'">';	
		$html .= '<img class="img-responsive img-rounded" style="margin:auto;" alt="'.$col['label'].'" src="/assets/img/digicol/'.$col['img'].'">';
		$html .= '</a>'.PHP_EOL;
		$html .= '</div>'.PHP_EOL;

		$html .= '</div>'.PHP_EOL;
		$html .= '</div>'.PHP_EOL;
		
		if ( $row ) {
			$html .= '</div>'.PHP_EOL;
		}

		$i++;
	}

	return $html;
}
?>
