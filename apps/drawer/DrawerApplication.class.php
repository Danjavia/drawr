<?php
Library::import('recess.framework.Application');

class DrawerApplication extends Application {
	public function __construct() {
		
		$this->name = 'Drawr ';
		
		$this->viewsDir = $_ENV['dir.apps'] . 'drawer/views/';
		
		$this->assetUrl = $_ENV['url.base'] . 'apps/drawer/public/';
		
		$this->modelsPrefix = 'drawer.models.';
		
		$this->controllersPrefix = 'drawer.controllers.';
		
		$this->routingPrefix = 'drawr/';
				
	}
}
?>