<?php 

	$scripts = array(
			// 'jquery' => 'jquery'
			'gillie' => 'gillie'
		,	'modernizr' => 'vendor/custom.modernizr'
		,	'pep' => 'jquery.pep'
		,	'context' => 'context'
		,	'mousetrap' => 'mousetrap'
		,	'history' => 'jquery.history'
		,	'blob' => 'helpers/Blob'
		,	'toblob' => 'helpers/toBlob'
		,	'saver' => 'helpers/FileSaver'
		,	'tocanvas' => 'helpers/html2canvas'
		,	'main' => 'main'
		// ,	'foundation' => 'foundation.min'
	);
	
	foreach ( $scripts as $key => $value) {

		echo Html::js( $value ); 
	}

?>