<?php 

	Library::import( 'reccess.framework.Application' );

	class PulsarApplication extends Application {

		public function __construct() {

			$this->name = 'Pulsar';

			$this->viewsDir = $_ENV[ 'dir.apps' ] . 'pulsar/views/';

	        $this->modelsPrefix = 'pulsar.models.';

	        $this->controllersPrefix = 'pulsar.controllers.';

	        $this->routingPrefix = '/';

	        $this->assetUrl = 'apps/pulsar/public/';

	        /**
	         * Meta data for this app
	         */
	        
	        $this->version = '0.5';
		}

	}

?>