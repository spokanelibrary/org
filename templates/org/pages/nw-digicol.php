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

	$digicol[] = array('url' => 'http://cdm15223.contentdm.oclc.org/cdm/landingpage/collection/p15223coll1'
										,'img' => 'spl-fire.jpg'
										,'label' => 'Spokane Fire (1889)'
										);


	$html = null; 
	foreach ( $digicol as $col ) {
		//$html .= $col['label'];
		$html .= '<img class="thumb img-rounded" src="/assets/img/digicol/'.$col['img'].'">'.PHP_EOL;
	}

	return $html;
}
?>
