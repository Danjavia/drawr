<?php
Library::import('recess.framework.controllers.Controller');

/**
 * !RespondsWith Layouts
 * !Prefix Views: home/, Routes: /
 */
class DrawerHomeController extends Controller {
	
	/** !Route GET */
	function index() {
		
		$this->flash = 'Welcome to your new Recess application!';
		
	}
	
}
?>