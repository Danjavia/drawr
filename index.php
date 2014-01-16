<?php 

	require 'vendor/autoload.php';   

 	use RedBean_Facade as RedBean;  
	
 	Twig_Autoloader::register();  
	
 	$app = new \Slim\Slim();  

 	// Use for view the themes
	
 	$app->get( '/draws/:id', function ( $id ) {  

      	RedBean::setup( 'mysql:host=localhost;dbname=test', 'root', '' );  

      	$loader = new Twig_Loader_Filesystem('templates/html');  
      	$twig = new Twig_Environment( $loader, array(  
      	  	//'cache' => 'cache',  
      	));  

       	$row = RedBean::getRow( 
       			'SELECT * FROM articles WHERE id = :id' 
     		,	array( ':id' => $id )   
   		);  

      	echo $twig->render( 'test.html', array( 'book_title' => $row[ 'title' ] ) );  

 	});  

 	// Goto profile

 	$app->get( '/profile', function () {

 		$loader = new Twig_Loader_Filesystem('app/views');  
      	$twig = new Twig_Environment( $loader, array(  
      	  	//'cache' => 'cache',  
      	));  

      	echo $twig->render( 'profile.php', array() );
 	});

 $app->run();  

?>