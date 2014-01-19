<?php 

	Library::import( 'recess.framework.controllers.Controller' );
	Library::import( 'pulsar.models.PulsarModel' );

	/**
	 * !RespondsWith Layouts
	 * !Prefix Routes: /, Views: home/
	 */
	
	class PulsarController extends Controller {

		/** !Route GET, / */
		public function index () {

			// This view load the profile
			$this->flash = 'Welcome to Pulsar';
			
		}

		/** !Route GET, draw */
		public function draw () {

			// This view load the profile
			$this->flash = 'Welcome to your profile';
			
		}

		/** !Route GET, profile */
		public function profile () {

			// This view load the profile
			$this->flash = 'Welcome to your profile';
			
		}
	}
	
?>