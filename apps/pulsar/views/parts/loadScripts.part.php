<?php 

	$scripts = array(
			'jquery' => 'jquery'
		,	'less' => 'less-1.5.0.min'
		,	'gillie' => 'gillie'
	);
	
	foreach ( $scripts as $key => $value) {

		echo Html::js( $value ); 
	}

?>