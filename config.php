<?php 
	session_start();
	// connect to database
	$conn = mysqli_connect("localhost", "Graced", "grace001", "anythings-blog-php");
	
	if(!$conn){
		die("Error connecting to database: ". mysql_error());
	}
	
	//coming soon...
	
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define ('BASE_URL', 'http://localhost/anythings-blog-php/');
?>