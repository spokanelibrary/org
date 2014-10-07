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
	$sub->id->note = null;

	$sub->aps->name = 'American Physical Society Journals';
	$sub->aps->img = 'apslogo.gif';
	$sub->aps->url = 'http://publish.aps.org/';
	$sub->aps->category = array('mag');
	$sub->aps->description = '
	Free access to APS journals, including <em>Physics and Reviews of Modern Physics</em>. 
	';
	$sub->id->note = 'Only accessible through library computers';

	$html .= '';
	foreach ( $sub as $k=>$db ) {
		if ( 'id' != $k ) {
			$html .= '<div class="panel panel-default">'.PHP_EOL;
			$html .= '<div class="panel-body">'.PHP_EOL;
			$html .= $db->name;
			$html .= '</div>'.PHP_EOL;
			$html .= '</div>'.PHP_EOL;
		}
	}	
	echo $html;

	echo '<pre>';
	print_r($cat);	
	print_r($sub);
	echo '</pre>';

}

?>

<?php spl_get_subscriptions(); ?>


