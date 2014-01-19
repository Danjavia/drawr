<?php 

	$scripts = array(
			'jquery' => 'jquery'
		,	'less' => 'less-1.5.0.min'
		,	'gillie' => 'gillie'
		,	'modernizr' => 'vendor/custom.modernizr'
		,	'main' => 'main'
		,	'pep' => 'jquery.pep'
		,	'context' => 'context'
		,	'mousetrap' => 'mousetrap'
		// ,	'foundation' => 'foundation.min'
	);
	
	foreach ( $scripts as $key => $value) {

		echo Html::js( $value ); 
	}

?>