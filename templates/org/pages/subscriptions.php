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
	$sub->id->name = '';
	$sub->id->description = '';
	$sub->id->category = array('');
	$sub->id->url = '';
	$sub->id->img = '';
	


	print_r($cat);
	print_r($sub);

}

?>

<pre>
<?php spl_get_subscriptions(); ?>
</pre>

