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
		// ,	'zipinflate' => 'helpers/jszip-inflate'
		// ,	'zipload' => 'helpers/jszip-load'
		// ,	'jszip' => 'helpers/jszip'
		,	'raphael' => 'raphael-min'
		,	'easing' => 'jquery.easing'
		// ,	'iviewPack' => 'iview.pack'
		,	'iview' => 'iview'
		,	'main' => 'main'
		// ,	'foundation' => 'foundation.min'
	);
	
	foreach ( $scripts as $key => $value) {

		echo Html::js( $value ); 
	}

?>