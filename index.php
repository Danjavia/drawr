<?php 

	require 'vendor/autoload.php';   

 	use RedBean_Facade as RedBean;  
	
 	Twig_Autoloader::register();  
	
 	$app = new \Slim\Slim();  
	
 	$app->get( '/hello/:name', function ( $name ) {  

      	RedBean::setup( 'mysql:host=localhost;dbname=test', 'root', '' );  

      	$loader = new Twig_Loader_Filesystem('templates');  
      	$twig = new Twig_Environment( $loader, array(  
      	  	//'cache' => 'cache',  
      	));  

       	$row = RedBean::getRow( 
       			'SELECT * FROM articles WHERE id = :id' 
     		,	array(':id'=>1)   
   		);  

      	echo $twig->render( 'test.html', array( 'book_title' => $row[ 'title' ] ) );  

 });  

 $app->run();  

?>