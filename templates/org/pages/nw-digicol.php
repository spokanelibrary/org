<p class="lead">
	The Ned M. Barnes Northwest Room is pleased to introduce a digital collection of photographs selected from the Northwest Room archives. 
</p>
<p>
	These collections emphasize the most frequently requested subjects in the Northwest Room &ndash; the homes, buildings, streets and activities in and around Spokane. 
</p>
<p>
	The original items are available for use and study in the <a href="/northwest-room/">Northwest Room</a>.
</p>

<?php
function spl_get_digicol() {
	$digicol = array();

	$digicol[] = array('url' => 'http://cdm15223.contentdm.oclc.org/cdm/landingpage/collection/p15223coll1'
										 'img' => ''
										 'label' => 'Spokane Fire (1889)'
										 );
	$html = null; 
	foreach ( $digicol as $col ) {
		$html .= $col['label'];
	}

	return $html;
}
?>

<div class="row">

	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-body">
				<?php echo spl_get_digicol(); ?>
			</div>
		</div>
	</div><!-- /. col -->

</div><!-- /. row -->

