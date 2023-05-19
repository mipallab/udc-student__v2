<?php
	
	define('SERVER_NAME','localhost');
	define('DATABASE_NAME','udc');
	define('USERNAME','root');
	define('PASSWORD','');


	$connect = mysqli_connect(SERVER_NAME, USERNAME, PASSWORD, DATABASE_NAME) or die("Conn\'t connect the server");


?>